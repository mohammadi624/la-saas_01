<?php

namespace Saas\PlatformConfig\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Saas\PlatformConfig\Enums\SettingScope;
use Saas\PlatformConfig\Enums\SettingType;
use Saas\PlatformConfig\Models\PlatformSetting;
use Saas\PlatformConfig\Models\SettingAuditLog;

class SettingsService
{
    public function get(
        string $group,
        string $key,
        mixed $default = null,
        SettingScope $scope = SettingScope::PLATFORM,
        ?int $scopeId = null
    ): mixed {
        $cacheKey = $this->cacheKey($scope, $scopeId, $group, $key);

        return Cache::remember($cacheKey, config('platform-config.cache_ttl', 3600), function () use ($group, $key, $default, $scope, $scopeId) {
            $row = PlatformSetting::query()
                ->where('scope', $scope->value)
                ->where('scope_id', $scopeId)
                ->where('group_name', $group)
                ->where('setting_key', $key)
                ->first();

            if (!$row) {
                return $default;
            }

            $raw = $row->is_encrypted ? $this->safeDecrypt((string) $row->setting_value) : $row->setting_value;

            return $this->castValue($raw, $row->setting_type);
        });
    }

    public function set(
        string $group,
        string $key,
        mixed $value,
        SettingType $type = SettingType::STRING,
        bool $isEncrypted = false,
        SettingScope $scope = SettingScope::PLATFORM,
        ?int $scopeId = null,
        ?int $actorId = null,
        string $actorRole = 'super_admin',
        ?string $ipAddress = null,
        ?string $reason = null
    ): PlatformSetting {
        return DB::transaction(function () use (
            $group, $key, $value, $type, $isEncrypted, $scope, $scopeId, $actorId, $actorRole, $ipAddress, $reason
        ) {
            $existing = PlatformSetting::query()
                ->where('scope', $scope->value)
                ->where('scope_id', $scopeId)
                ->where('group_name', $group)
                ->where('setting_key', $key)
                ->first();

            $oldMasked = $existing
                ? ($existing->is_encrypted ? '********' : (string) $existing->setting_value)
                : 'null';

            $serialized = $this->serializeValue($value, $type);
            $storedValue = $isEncrypted ? Crypt::encryptString($serialized) : $serialized;
            $newMasked = $isEncrypted ? '********' : $serialized;

            $model = PlatformSetting::query()->updateOrCreate(
                [
                    'scope' => $scope->value,
                    'scope_id' => $scopeId,
                    'group_name' => $group,
                    'setting_key' => $key,
                ],
                [
                    'setting_value' => $storedValue,
                    'setting_type' => $type->value,
                    'is_encrypted' => $isEncrypted,
                ]
            );

            Cache::forget($this->cacheKey($scope, $scopeId, $group, $key));

            if ($oldMasked !== $newMasked) {
                SettingAuditLog::query()->create([
                    'actor_id' => $actorId,
                    'actor_role' => $actorRole,
                    'ip_address' => $ipAddress,
                    'scope' => $scope->value,
                    'group_name' => $group,
                    'setting_key' => $key,
                    'old_value_masked' => mb_substr($oldMasked, 0, 255),
                    'new_value_masked' => mb_substr($newMasked, 0, 255),
                    'reason' => $reason,
                ]);
            }

            return $model;
        });
    }

    public function exportMasked(SettingScope $scope = SettingScope::PLATFORM, ?int $scopeId = null): array
    {
        $rows = PlatformSetting::query()
            ->where('scope', $scope->value)
            ->where('scope_id', $scopeId)
            ->get();

        $result = [];
        foreach ($rows as $row) {
            $result[$row->group_name][$row->setting_key] = $row->is_encrypted
                ? '********'
                : $this->castValue((string) $row->setting_value, $row->setting_type);
        }

        return $result;
    }

    private function cacheKey(SettingScope $scope, ?int $scopeId, string $group, string $key): string
    {
        $prefix = config('platform-config.cache_prefix', 'saas_platform_config');
        $idPart = $scopeId === null ? 'global' : (string) $scopeId;
        return "{$prefix}:{$scope->value}:{$idPart}:{$group}:{$key}";
    }

    private function serializeValue(mixed $value, SettingType $type): string
    {
        return match ($type) {
            SettingType::BOOLEAN => $value ? '1' : '0',
            SettingType::JSON => json_encode($value, JSON_UNESCAPED_UNICODE),
            default => (string) $value,
        };
    }

    private function castValue(string $raw, SettingType $type): mixed
    {
        return match ($type) {
            SettingType::BOOLEAN => in_array(strtolower($raw), ['1', 'true', 'yes', 'on'], true),
            SettingType::INTEGER => (int) $raw,
            SettingType::FLOAT => (float) $raw,
            SettingType::DECIMAL => number_format((float) $raw, 2, '.', ''),
            SettingType::JSON => json_decode($raw, true) ?? [],
            SettingType::STRING => $raw,
        };
    }

    private function safeDecrypt(string $cipher): string
    {
        try {
            return Crypt::decryptString($cipher);
        } catch (\Throwable) {
            return '';
        }
    }
}
