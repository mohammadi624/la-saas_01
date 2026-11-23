<?php

return [
    'route_prefix' => 'admin/platform-config',
    'middleware' => ['web', 'auth'],
    'cache_prefix' => 'saas_platform_config',
    'cache_ttl' => 3600,

    'scopes' => [
        'platform',
        'tenant',
        'site',
        'user',
    ],

    'roles' => [
        'super_admin' => 'مدیر کل',
        'billing_manager' => 'مدیر مالی',
        'operator' => 'اپراتور',
        'support' => 'پشتیبان',
        'viewer' => 'مشاهده‌گر',
    ],

    'registration_fields' => [
        'mobile' => ['label' => 'موبایل', 'default_state' => 'required'],
        'email' => ['label' => 'ایمیل', 'default_state' => 'optional'],
        'first_name' => ['label' => 'نام', 'default_state' => 'required'],
        'last_name' => ['label' => 'نام خانوادگی', 'default_state' => 'required'],
        'username' => ['label' => 'نام کاربری', 'default_state' => 'optional'],
        'password' => ['label' => 'رمز عبور', 'default_state' => 'required'],
        'password_confirmation' => ['label' => 'تکرار رمز عبور', 'default_state' => 'required'],
        'company_name' => ['label' => 'نام شرکت', 'default_state' => 'optional'],
        'national_code' => ['label' => 'شناسه ملی / کد ملی', 'default_state' => 'optional'],
        'address' => ['label' => 'آدرس', 'default_state' => 'hidden'],
        'phone' => ['label' => 'تلفن ثابت', 'default_state' => 'hidden'],
    ],

    'defaults' => [
        'general' => [
            'site_name' => ['value' => 'پلتفرم جامع SaaS', 'type' => 'string', 'encrypted' => false],
            'brand_name' => ['value' => 'ابرپردازش نوین', 'type' => 'string', 'encrypted' => false],
            'default_locale' => ['value' => 'fa', 'type' => 'string', 'encrypted' => false],
            'calendar_type' => ['value' => 'jalali', 'type' => 'string', 'encrypted' => false],
            'timezone' => ['value' => 'Asia/Tehran', 'type' => 'string', 'encrypted' => false],
            'primary_color' => ['value' => '#4f46e5', 'type' => 'string', 'encrypted' => false],
            'support_email' => ['value' => 'info@example.com', 'type' => 'string', 'encrypted' => false],
        ],
        'auth' => [
            'public_registration' => ['value' => true, 'type' => 'boolean', 'encrypted' => false],
            'login_method' => ['value' => 'mobile_password', 'type' => 'string', 'encrypted' => false],
            'verification_method' => ['value' => 'mobile', 'type' => 'string', 'encrypted' => false],
            'captcha_enabled' => ['value' => true, 'type' => 'boolean', 'encrypted' => false],
            'otp_ttl_seconds' => ['value' => 120, 'type' => 'integer', 'encrypted' => false],
        ],
        'security' => [
            'force_2fa' => ['value' => true, 'type' => 'boolean', 'encrypted' => false],
            'password_min_length' => ['value' => 10, 'type' => 'integer', 'encrypted' => false],
            'max_login_attempts' => ['value' => 5, 'type' => 'integer', 'encrypted' => false],
            'lockout_minutes' => ['value' => 15, 'type' => 'integer', 'encrypted' => false],
            'session_lifetime' => ['value' => 120, 'type' => 'integer', 'encrypted' => false],
        ],
        'billing' => [
            'gateway_merchant_id' => ['value' => '', 'type' => 'string', 'encrypted' => true],
            'gateway_sandbox' => ['value' => true, 'type' => 'boolean', 'encrypted' => false],
            'currency' => ['value' => 'IRT', 'type' => 'string', 'encrypted' => false],
            'vat_rate' => ['value' => '10', 'type' => 'decimal', 'encrypted' => false],
            'tax_mode' => ['value' => 'exclusive', 'type' => 'string', 'encrypted' => false],
            'tax_basis' => ['value' => 'after_discount', 'type' => 'string', 'encrypted' => false],
            'invoice_prefix' => ['value' => 'INV-2026-', 'type' => 'string', 'encrypted' => false],
        ],
        'discount' => [
            'enabled' => ['value' => true, 'type' => 'boolean', 'encrypted' => false],
            'promo_code' => ['value' => 'WELCOME10', 'type' => 'string', 'encrypted' => false],
            'discount_type' => ['value' => 'percentage', 'type' => 'string', 'encrypted' => false],
            'discount_value' => ['value' => '10', 'type' => 'decimal', 'encrypted' => false],
            'min_order_amount' => ['value' => 500000, 'type' => 'integer', 'encrypted' => false],
            'max_discount_amount' => ['value' => 200000, 'type' => 'integer', 'encrypted' => false],
            'stackable' => ['value' => false, 'type' => 'boolean', 'encrypted' => false],
        ],
    ],
];
