<?php

return [

    /*
    | مدل کاربر پروژه. باید Trait «Sazeh\Core\Concerns\HasSazehAccess» را داشته باشد.
    */
    'user_model' => env('SAZEH_USER_MODEL', 'App\\Models\\User'),

    /*
    | حالت فضای کاری:
    |  single → یک سایت/سازمان؛ یک فضای پیش‌فرض، بدون انتخاب فضا (سایت شرکتی، انجمن، سایت عمومی)
    |  multi  → چندمستاجری؛ هر خریدار/مشتری فضای خودش را دارد (SaaS)
    */
    'tenancy' => env('SAZEH_TENANCY', 'single'),

    /*
    | نقش مالک هر فضای کاری (خریدار اشتراک).
    | توجه: کلمهٔ owner در این پروژه فقط به «مالک سایت» (ادمین) اشاره می‌کند؛
    | برای خریدار از workspace_owner استفاده شده تا ابهام پیش نیاید.
    | کلید پس از نصب فقط همراه با به‌روزرسانی ردیف core_roles تغییر کند (راهنما در README).
    */
    'workspace_owner_role' => [
        'key' => env('SAZEH_OWNER_ROLE_KEY', 'workspace_owner'),
        'title' => env('SAZEH_OWNER_ROLE_TITLE', 'خریدار اشتراک'),
    ],

    'default_workspace' => [
        'name' => env('SAZEH_DEFAULT_WORKSPACE_NAME', env('APP_NAME', 'سایت من')),
        'slug' => env('SAZEH_DEFAULT_WORKSPACE_SLUG', 'main'),
    ],

    /*
    | =========================================================
    | اشتراک: پرچم اصلی و قاعدهٔ تعلیق
    | =========================================================
    | «billing» فقط روشن/خاموش بودن سیستم اشتراک و قاعدهٔ دسترسی در حالت تعلیق را
    | نگه می‌دارد. جزئیات کامل (چرخهٔ پرداخت، دوره‌ها، ارز، روش‌ها) در بلوک
    | «subscriptions» در پایین است.
    |
    | اگر billing.enabled=false باشد:
    |   - همهٔ قابلیت‌های پلن (features) آزادانه در دسترس‌اند
    |   - AccessResolver بررسی «قابلیت در پلن» را نادیده می‌گیرد
    |   - ظرفیت کاربران طبق «seats» کنترل می‌شود
    */
    'billing' => [
        'enabled' => (bool) env('SAZEH_BILLING', false),
        // مجوزهایی که مالک فضا حتی در حالت تعلیق دارد (صفحهٔ تمدید/پرداخت)
        'allowed_when_suspended' => ['billing.view'],
    ],

    // ظرفیت کاربران هر فضا وقتی اشتراک خاموش است. unlimited=true یعنی بدون سقف.
    'seats' => [
        'unlimited' => (bool) env('SAZEH_SEATS_UNLIMITED', true),
        'limit' => (int) env('SAZEH_SEATS_LIMIT', 0),
    ],

    /*
    | ثبت‌نام عمومی (برای سایت‌هایی که برای همه قابل دسترسی‌اند)
    |  mode:        public | disabled
    |  on_register: default_workspace → عضو فضای پیش‌فرض سایت با نقش default_role
    |               own_workspace     → برای هر ثبت‌نام‌کننده فضای کاری جدید و مالکیت آن (SaaS خودخدمت)
    */
    'registration' => [
        'mode' => env('SAZEH_REGISTRATION', 'disabled'),
        'on_register' => env('SAZEH_ON_REGISTER', 'default_workspace'),
        'default_role' => env('SAZEH_REGISTRATION_ROLE', 'member'),
        'require_email' => (bool) env('SAZEH_REGISTRATION_REQUIRE_EMAIL', false),
    ],

    'login' => [
        'password' => (bool) env('SAZEH_PASSWORD_LOGIN', true),
        'otp' => (bool) env('SAZEH_OTP', true),
        'max_attempts' => (int) env('SAZEH_LOGIN_MAX_ATTEMPTS', 5),
        'lock_minutes' => (int) env('SAZEH_LOGIN_LOCK_MINUTES', 15),
    ],

    'otp' => [
        'length' => 6,
        'ttl_seconds' => 120,
        'max_attempts' => 5,
        'max_sends' => 3,
        'send_window_seconds' => 600,
    ],

    'password_min' => (int) env('SAZEH_PASSWORD_MIN', 8),

    'sms' => [
        // log → کد در storage/logs/laravel.log نوشته می‌شود (فقط توسعه)
        // برای محیط واقعی کلاس خودتان را که SmsGateway را پیاده می‌کند بدهید
        'driver' => env('SAZEH_SMS_DRIVER', 'log'),
    ],

    /*
    | پنل‌ها: یک داشبورد با دو مجموعه‌منو.
    | ساختار و ظاهر هر دو پنل یکی است؛ فقط محتوای منو و دسترسی‌ها فرق می‌کند.
    | رنگ‌ها فقط برای تمایز بصری سریع کاربر بین دو پنل متفاوت‌اند (قابل تغییر با env).
    */
    'panels' => [
        'platform' => [
            'title' => env('SAZEH_PLATFORM_TITLE', 'پنل مدیریت'),
            'owner_label' => env('SAZEH_PLATFORM_OWNER_LABEL', 'مالک سایت'),
            'members_label' => env('SAZEH_PLATFORM_MEMBERS_LABEL', 'کاربران مالک سایت'),
            'prefix' => env('SAZEH_PLATFORM_PREFIX', 'admin'),
            'color' => env('SAZEH_PLATFORM_COLOR', '#3157c8'),
            'sidebar' => env('SAZEH_PLATFORM_SIDEBAR', '#141d3b'),
        ],
        'workspace' => [
            'title' => env('SAZEH_WORKSPACE_TITLE', 'پنل کاربری'),
            'owner_label' => env('SAZEH_WORKSPACE_OWNER_LABEL', 'خریدار اشتراک'),
            'members_label' => env('SAZEH_WORKSPACE_MEMBERS_LABEL', 'کاربران خریدار اشتراک'),
            'prefix' => env('SAZEH_WORKSPACE_PREFIX', 'panel'),
            'color' => env('SAZEH_WORKSPACE_COLOR', '#0f766e'),
            'sidebar' => env('SAZEH_WORKSPACE_SIDEBAR', '#0c2b2a'),
        ],
    ],

    'route_middleware' => ['web'],

    // دامنه‌های مجاز برای آیتم منوی لینک خارجی
    'external_link_domains' => [],

    /*
    | ماژول‌ها. ماژول‌های پروژه را اینجا اضافه کنید و سپس php artisan sazeh:sync
    */
    'modules' => [
        \Sazeh\Core\Modules\CoreModule::class,
        \App\Modules\Profile\ProfileModule::class,
        \App\Modules\Panels\PanelsModule::class,
        \Saas\PlatformConfig\PlatformSettingsModule::class,
    ],

    /*
    | صفحه‌های فایلی: هر فایل Blade در resources/views/pages/{platform|workspace}/
    | یک صفحهٔ داشبورد با آدرس، مجوز و آیتم منو می‌شود.  ساخت:  php artisan sazeh:page
    */
    'file_pages' => [
        'enabled' => (bool) env('SAZEH_FILE_PAGES', true),
        'path' => resource_path('views/pages'),
    ],

    /*
    | =========================================================
    | جزئیات اشتراک (فقط وقتی billing.enabled=true معنی دارد)
    | =========================================================
    | چرخهٔ وضعیت: فعال ← (پایان اشتراک) مهلت پرداخت ← فقط‌خواندنی ← معلق
    */
    'subscriptions' => [
        'currency' => env('SAZEH_CURRENCY', 'تومان'),
        'trial_days' => (int) env('SAZEH_TRIAL_DAYS', 0),       // ۰ = بدون دورهٔ آزمایشی
        'grace_days' => (int) env('SAZEH_GRACE_DAYS', 3),
        'read_only_days' => (int) env('SAZEH_READ_ONLY_DAYS', 7),
        // فضای کاری بدون هیچ اشتراکی معلق شود؟ (برای وقتی که ثبت‌نام عمومی است و فقط با خرید فعال می‌شود)
        'require_subscription' => (bool) env('SAZEH_REQUIRE_SUBSCRIPTION', false),
        'periods' => [
            'monthly' => ['title' => 'ماهانه', 'months' => 1],
            'quarterly' => ['title' => 'سه‌ماهه', 'months' => 3],
            'semiannual' => ['title' => 'شش‌ماهه', 'months' => 6],
            'yearly' => ['title' => 'سالانه', 'months' => 12],
        ],
        'payment_methods' => [
            'card' => 'کارت‌به‌کارت',
            'transfer' => 'انتقال بانکی',
            'cash' => 'نقدی',
            'other' => 'سایر',
        ],
    ],

    'menu_icons' => [
        'home', 'grid', 'globe', 'folder', 'file', 'list',
        'users', 'card', 'chart', 'chat', 'shield', 'key',
        'gear', 'lock', 'flag', 'box', 'menu', 'edit',
    ],

];