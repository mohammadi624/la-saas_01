<?php

namespace Saas\PlatformConfig\Database\Seeders;

use Illuminate\Database\Seeder;
use Saas\PlatformConfig\Enums\SettingType;
use Saas\PlatformConfig\Models\RegistrationFieldPolicy;
use Saas\PlatformConfig\Services\SettingsService;

class PlatformConfigSeeder extends Seeder
{
    public function run(SettingsService $settingsService): void
    {
        // ۱. Seed platform settings from config groups
        foreach (config('platform-config.groups', []) as $groupKey => $group) {
            foreach (($group['fields'] ?? []) as $key => $meta) {
                $settingsService->set(
                    group: $groupKey,
                    key: $key,
                    value: $meta['default'] ?? '',
                    type: $this->mapType($meta['type']),
                    isEncrypted: ($meta['type'] ?? '') === 'password',
                    reason: 'مقدار اولیه PlatformConfigSeeder'
                );
            }
        }

        // ۲. Seed registration field policies
        $order = 1;
        foreach (config('platform-config.registration_fields', []) as $fieldKey => $info) {
            RegistrationFieldPolicy::query()->updateOrCreate(
                ['field_key' => $fieldKey],
                [
                    'field_label' => $info['label'],
                    'state'       => $info['default_state'],
                    'sort_order'  => $order++,
                ]
            );
        }

        $this->command->info('PlatformConfigSeeder: ' . count(config('platform-config.groups', [])) . ' groups and ' . count(config('platform-config.registration_fields', [])) . ' registration fields seeded.');
    }

    private function mapType(string $type): SettingType
    {
        return match ($type) {
            'toggle'   => SettingType::BOOLEAN,
            'number'   => SettingType::INTEGER,
            'textarea',
            'text',
            'select',
            'email',
            'url',
            'color',
            'date'     => SettingType::STRING,
            'password' => SettingType::ENCRYPTED,
            default    => SettingType::STRING,
        };
    }
}