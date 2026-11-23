<?php

namespace Saas\PlatformConfig\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Saas\PlatformConfig\Enums\RegistrationFieldState;
use Saas\PlatformConfig\Enums\SettingType;
use Saas\PlatformConfig\Models\RegistrationFieldPolicy;
use Saas\PlatformConfig\Models\SettingAuditLog;
use Saas\PlatformConfig\Services\BillingCalculatorService;
use Saas\PlatformConfig\Services\SettingsService;

class PlatformConfigController extends Controller
{
    public function __construct(
        private readonly SettingsService $settings,
        private readonly BillingCalculatorService $billing,
    ) {
    }

    /**
     * نمایش صفحه اصلی پیکربندی پلتفرم.
     */
    public function index()
    {
        $groups = config('platform-config.groups', []);
        $values = [];

        foreach ($groups as $groupKey => $group) {
            foreach (($group['fields'] ?? []) as $key => $meta) {
                // مقدار محرمانه هرگز نباید در HTML یا JavaScript صفحه قرار بگیرد.
                if (($meta['type'] ?? 'string') === 'password') {
                    $values[$groupKey][$key] = '';
                    continue;
                }

                $values[$groupKey][$key] = $this->settings->get(
                    (string) $groupKey,
                    (string) $key,
                    $meta['default'] ?? ''
                );
            }
        }

        $registrationFields = RegistrationFieldPolicy::query()
            ->orderBy('sort_order')
            ->get();

        $auditLogs = SettingAuditLog::query()
            ->where('scope', 'platform')
            ->latest('created_at')
            ->limit(100)
            ->get();

        return view('platform-config::admin.index', [
            'groups' => $groups,
            'values' => $values,
            'registrationFields' => $registrationFields,
            'auditLogs' => $auditLogs,
        ]);
    }

    /**
     * ذخیره تنظیمات یک گروه.
     */
    public function updateSettings(Request $request, string $group)
    {
        $fields = config("platform-config.groups.{$group}.fields", []);

        abort_if(empty($fields), 404, "گروه {$group} وجود ندارد.");

        $rules = [];

        foreach ($fields as $key => $meta) {
            $fieldType = $meta['type'] ?? 'string';

            $rules[$key] = match ($fieldType) {
                'number' => 'nullable|numeric|min:0',
                'email' => 'nullable|email|max:255',
                'url' => 'nullable|url|max:2048',
                'toggle' => 'required|boolean',
                'date' => 'nullable|date',
                'color' => ['nullable', 'string', 'max:20', 'regex:/^#[0-9a-fA-F]{3,8}$/'],
                'password' => 'nullable|string|max:5000',
                default => 'nullable|string|max:5000',
            };
        }

        $data = $request->validate($rules);
        $actor = $request->user();

        DB::transaction(function () use ($group, $fields, $data, $actor, $request): void {
            foreach ($fields as $key => $meta) {
                if (!array_key_exists($key, $data)) {
                    continue;
                }

                $fieldType = $meta['type'] ?? 'string';
                $isSecret = $fieldType === 'password';
                $newValue = $data[$key];

                // فیلد رمز عبور خالی به معنی حفظ مقدار قبلی است، نه پاک کردن آن.
                if ($isSecret && ($newValue === null || $newValue === '')) {
                    continue;
                }

                $this->settings->set(
                    group: (string) $group,
                    key: (string) $key,
                    value: $newValue,
                    type: $this->mapType($fieldType),
                    isEncrypted: $isSecret,
                    actorId: $actor?->id,
                    actorRole: $this->actorRole($actor),
                    ipAddress: $request->ip(),
                    reason: 'ویرایش از پنل تنظیمات'
                );
            }
        });

        return redirect()
            ->route('admin.platform-config.index')
            ->with(
                'status',
                'تغییرات گروه «' . (config("platform-config.groups.{$group}.label") ?? $group)
                . '» با موفقیت ذخیره شد.'
            );
    }

    /**
     * بازنشانی یک گروه به مقادیر پیش‌فرض.
     */
    public function resetGroup(Request $request, string $group)
    {
        $fields = config("platform-config.groups.{$group}.fields", []);

        abort_if(empty($fields), 404, "گروه {$group} وجود ندارد.");

        $actor = $request->user();

        DB::transaction(function () use ($group, $fields, $actor, $request): void {
            foreach ($fields as $key => $meta) {
                $fieldType = $meta['type'] ?? 'string';
                $isSecret = $fieldType === 'password';

                $this->settings->set(
                    group: (string) $group,
                    key: (string) $key,
                    value: $meta['default'] ?? '',
                    type: $this->mapType($fieldType),
                    isEncrypted: $isSecret,
                    actorId: $actor?->id,
                    actorRole: $this->actorRole($actor),
                    ipAddress: $request->ip(),
                    reason: 'بازنشانی گروه به مقادیر پیش‌فرض'
                );
            }
        });

        return redirect()
            ->route('admin.platform-config.index')
            ->with(
                'status',
                'گروه «' . (config("platform-config.groups.{$group}.label") ?? $group)
                . '» به پیش‌فرض بازنشانی شد.'
            );
    }

    /**
     * تغییر سیاست فیلدهای فرم ثبت‌نام.
     */
    public function updateRegistrationPolicy(Request $request)
    {
        $data = $request->validate([
            'fields' => 'required|array|min:1',
            'fields.*.field_key' => [
                'required',
                'string',
                'max:64',
                'distinct',
                'exists:registration_field_policies,field_key',
            ],
            'fields.*.state' => 'required|in:required,optional,hidden',
            'fields.*.sort_order' => 'nullable|integer|min:0',
        ]);

        $actor = $request->user();

        DB::transaction(function () use ($data, $request, $actor): void {
            foreach ($data['fields'] as $row) {
                $policy = RegistrationFieldPolicy::query()
                    ->where('field_key', $row['field_key'])
                    ->firstOrFail();

                $oldState = $policy->state instanceof RegistrationFieldState
                    ? $policy->state->value
                    : (string) $policy->state;
                $oldOrder = (int) $policy->sort_order;

                $newState = RegistrationFieldState::from($row['state']);
                $newOrder = (int) ($row['sort_order'] ?? 0);

                if ($oldState === $newState->value && $oldOrder === $newOrder) {
                    continue;
                }

                $policy->state = $newState;
                $policy->sort_order = $newOrder;
                $policy->save();

                $this->writeAuditLog(
                    request: $request,
                    group: 'registration_fields',
                    key: $row['field_key'],
                    oldValue: $oldState . ' / ترتیب: ' . $oldOrder,
                    newValue: $newState->value . ' / ترتیب: ' . $newOrder,
                    reason: 'تغییر سیاست فیلد ثبت‌نام',
                    actorRole: $this->actorRole($actor)
                );
            }
        });

        return redirect()
            ->route('admin.platform-config.index')
            ->with('status', 'سیاست فیلدهای ثبت‌نام به‌روزرسانی شد.');
    }

    /**
     * پیش‌نمایش محاسبات مالی.
     */
    public function previewBilling(Request $request)
    {
        $data = $request->validate([
            'amount' => 'required|numeric|min:0',
            'code' => 'nullable|string|max:100',
        ]);

        // نام پارامتر در سرویس BillingCalculatorService برابر promoCode است.
        $result = $this->billing->calculate(
            baseAmount: (int) round((float) $data['amount']),
            promoCode: $data['code'] ?? null,
        );

        return response()->json($result);
    }

    /**
     * خروجی JSON تنظیمات با ماسک اطلاعات محرمانه.
     */
    public function exportMasked()
    {
        // سرویس خودش scope، scope_id، رمزگشایی و ماسک‌کردن داده‌ها را مدیریت می‌کند.
        $payload = $this->settings->exportMasked();

        return response()
            ->json(
                $payload,
                200,
                [],
                JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT
            )
            ->header(
                'Content-Disposition',
                'attachment; filename="platform-settings-masked.json"'
            );
    }

    /**
     * ثبت تاریخچه تغییر سیاست‌ها.
     * ثبت تغییر تنظیمات عادی توسط خود SettingsService انجام می‌شود؛
     * بنابراین برای آن‌ها لاگ تکراری ایجاد نمی‌کنیم.
     */
    private function writeAuditLog(
        Request $request,
        string $group,
        string $key,
        mixed $oldValue,
        mixed $newValue,
        ?string $reason = null,
        ?string $actorRole = null
    ): void {
        SettingAuditLog::query()->create([
            'actor_id' => $request->user()?->id,
            'actor_role' => $actorRole ?? 'authenticated',
            'ip_address' => $request->ip(),
            'scope' => 'platform',
            'group_name' => $group,
            'setting_key' => $key,
            'old_value_masked' => mb_substr((string) $oldValue, 0, 200),
            'new_value_masked' => mb_substr((string) $newValue, 0, 200),
            'reason' => $reason,
        ]);
    }

    /**
     * تبدیل نوع فیلد config به Enum واقعی ماژول.
     * SettingType این ماژول مقدار ENCRYPTED ندارد؛ رمزنگاری با isEncrypted کنترل می‌شود.
     */
    private function mapType(string $type): SettingType
    {
        return match ($type) {
            'toggle' => SettingType::BOOLEAN,
            // FLOAT از حذف بخش اعشاری ورودی‌هایی مثل نرخ مالیات جلوگیری می‌کند.
            'number' => SettingType::FLOAT,
            default => SettingType::STRING,
        };
    }

    /**
     * استخراج امن نقش کاربر بدون فرض وجود ستون یا رابطه خاص در مدل User.
     */
    private function actorRole(mixed $actor): string
    {
        if (!is_object($actor) || !method_exists($actor, 'getAttribute')) {
            return 'authenticated';
        }

        $role = $actor->getAttribute('role');

        return is_string($role) && $role !== '' ? $role : 'authenticated';
    }
}
