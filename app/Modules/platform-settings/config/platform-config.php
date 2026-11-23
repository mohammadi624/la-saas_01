<?php

return [
    'route_prefix' => 'admin/platform-config',
    'middleware'   => ['web', 'auth'],
    'cache_prefix' => 'saas_platform_config',

    'groups' => [

        'general' => [
            'label' => '۱. عمومی و برند',
            'icon'  => 'home',
            'fields' => [
                'site_name'       => ['label' => 'نام سایت', 'type' => 'text', 'default' => 'پلتفرم جامع SaaS'],
                'brand_name'      => ['label' => 'نام برند تجاری', 'type' => 'text', 'default' => 'ابرپردازش نوین'],
                'default_locale'  => ['label' => 'زبان پیش‌فرض', 'type' => 'select', 'options' => ['fa' => 'فارسی', 'en' => 'English', 'ar' => 'العربية'], 'default' => 'fa'],
                'calendar_type'   => ['label' => 'تقویم رسمی', 'type' => 'select', 'options' => ['jalali' => 'شمسی', 'gregorian' => 'میلادی', 'hijri' => 'قمری'], 'default' => 'jalali'],
                'timezone'        => ['label' => 'منطقه زمانی', 'type' => 'select', 'options' => ['Asia/Tehran' => 'Asia/Tehran', 'UTC' => 'UTC'], 'default' => 'Asia/Tehran'],
                'primary_color'   => ['label' => 'رنگ اصلی برند', 'type' => 'color', 'default' => '#4f46e5'],
                'support_email'   => ['label' => 'ایمیل پشتیبانی', 'type' => 'email', 'default' => 'info@example.com'],
                'support_phone'   => ['label' => 'تلفن پشتیبانی', 'type' => 'text', 'default' => '021-00000000'],
                'default_meta'    => ['label' => 'توضیحات متای پیش‌فرض', 'type' => 'textarea', 'default' => 'پلتفرم ابری مدیریت کسب‌وکار'],
            ],
        ],

        'auth' => [
            'label' => '۲. ثبت‌نام و ورود',
            'icon'  => 'users',
            'fields' => [
                'public_registration' => ['label' => 'ثبت‌نام عمومی آزاد باشد', 'type' => 'toggle', 'default' => true],
                'login_method'        => ['label' => 'روش ورود مجاز', 'type' => 'select', 'options' => ['mobile_password' => 'موبایل + رمز', 'mobile_otp' => 'موبایل + OTP', 'email_password' => 'ایمیل + رمز', 'mixed' => 'ترکیبی'], 'default' => 'mobile_otp'],
                'verification_method' => ['label' => 'روش تأیید هویت', 'type' => 'select', 'options' => ['none' => 'بدون تأیید', 'email' => 'ایمیل', 'mobile' => 'موبایل', 'both' => 'ایمیل و موبایل'], 'default' => 'mobile'],
                'captcha_enabled'     => ['label' => 'فعال‌سازی کپچا', 'type' => 'toggle', 'default' => true],
                'otp_ttl_seconds'     => ['label' => 'انقضای کد OTP (ثانیه)', 'type' => 'number', 'default' => 120],
                'otp_max_attempts'    => ['label' => 'سقف تلاش OTP', 'type' => 'number', 'default' => 5],
                'accept_terms'        => ['label' => 'پذیرش قوانین', 'type' => 'toggle', 'default' => true],
            ],
        ],

        'security' => [
            'label' => '۳. امنیت و نشست‌ها',
            'icon'  => 'shield',
            'fields' => [
                'force_2fa'          => ['label' => 'اجبار 2FA', 'type' => 'toggle', 'default' => true],
                'password_min'       => ['label' => 'حداقل طول رمز', 'type' => 'number', 'default' => 10],
                'max_login_attempts' => ['label' => 'سقف تلاش ناموفق', 'type' => 'number', 'default' => 5],
                'lockout_minutes'    => ['label' => 'مدت قفل حساب (دقیقه)', 'type' => 'number', 'default' => 15],
                'session_lifetime'   => ['label' => 'مدت اعتبار نشست (دقیقه)', 'type' => 'number', 'default' => 120],
                'admin_ip_allowlist' => ['label' => 'IP مجاز پنل مدیریت', 'type' => 'textarea', 'default' => ''],
            ],
        ],

        'tenant' => [
            'label' => '۴. تنانت و اشتراک',
            'icon'  => 'layers',
            'fields' => [
                'trial_days'           => ['label' => 'دوره آزمایشی (روز)', 'type' => 'number', 'default' => 14],
                'grace_period_days'    => ['label' => 'مهلت تنفس (روز)', 'type' => 'number', 'default' => 7],
                'readonly_on_expire'   => ['label' => 'فقط‌خواندنی پس از انقضا', 'type' => 'toggle', 'default' => true],
                'data_retention_days'  => ['label' => 'نگهداری داده پس از لغو', 'type' => 'number', 'default' => 90],
                'default_max_users'    => ['label' => 'سقف کاربر پایه', 'type' => 'number', 'default' => 5],
                'default_max_sites'    => ['label' => 'سقف سایت پایه', 'type' => 'number', 'default' => 3],
                'auto_renew'           => ['label' => 'تمدید خودکار', 'type' => 'toggle', 'default' => false],
            ],
        ],

        'finance' => [
            'label' => '۵. مالی، پرداخت و مالیات',
            'icon'  => 'credit-card',
            'fields' => [
                'gateway_merchant_id' => ['label' => 'Merchant ID درگاه', 'type' => 'password', 'default' => ''],
                'gateway_sandbox'     => ['label' => 'حالت آزمایشی درگاه', 'type' => 'toggle', 'default' => true],
                'currency'            => ['label' => 'واحد پول', 'type' => 'select', 'options' => ['toman' => 'تومان', 'rial' => 'ریال'], 'default' => 'toman'],
                'vat_rate'            => ['label' => 'نرخ مالیات (%)', 'type' => 'number', 'default' => 10],
                'tax_mode'            => ['label' => 'نحوه اعمال مالیات', 'type' => 'select', 'options' => ['exclusive' => 'اضافه بر قیمت', 'inclusive' => 'داخل قیمت'], 'default' => 'exclusive'],
                'tax_basis'           => ['label' => 'مبنای محاسبه', 'type' => 'select', 'options' => ['after_discount' => 'پس از تخفیف', 'before_discount' => 'قبل از تخفیف'], 'default' => 'after_discount'],
                'invoice_prefix'      => ['label' => 'پیشوند شماره فاکتور', 'type' => 'text', 'default' => 'INV-2026-'],
            ],
        ],

        'discounts' => [
            'label' => '۶. تخفیف و پیشنهاد خرید',
            'icon'  => 'tag',
            'fields' => [
                'enabled'              => ['label' => 'فعال بودن سیستم تخفیف', 'type' => 'toggle', 'default' => true],
                'campaign_title'       => ['label' => 'عنوان کمپین', 'type' => 'text', 'default' => 'کمپین خوش‌آمدگویی'],
                'promo_code'           => ['label' => 'کد تخفیف', 'type' => 'text', 'default' => 'WELCOME10'],
                'type'                 => ['label' => 'نوع تخفیف', 'type' => 'select', 'options' => ['percent' => 'درصدی', 'fixed' => 'مبلغ ثابت'], 'default' => 'percent'],
                'value'                => ['label' => 'مقدار تخفیف', 'type' => 'number', 'default' => 10],
                'min_order_amount'     => ['label' => 'حداقل مبلغ خرید', 'type' => 'number', 'default' => 500000],
                'max_discount_amount'  => ['label' => 'سقف مبلغ تخفیف', 'type' => 'number', 'default' => 200000],
                'global_usage_limit'   => ['label' => 'سقف کل مصرف', 'type' => 'number', 'default' => 100],
                'per_user_limit'       => ['label' => 'سقف هر کاربر', 'type' => 'number', 'default' => 1],
                'stackable'            => ['label' => 'قابل ترکیب با سایر تخفیف‌ها', 'type' => 'toggle', 'default' => false],
            ],
        ],

        'notifications' => [
            'label' => '۷. پیامک و ایمیل',
            'icon'  => 'bell',
            'fields' => [
                'sms_enabled'    => ['label' => 'فعال‌سازی پیامک', 'type' => 'toggle', 'default' => true],
                'sms_provider'   => ['label' => 'ارائه‌دهنده پیامک', 'type' => 'select', 'options' => ['kavenegar' => 'کاوه‌نگار', 'mellipayamak' => 'ملی‌پیامک'], 'default' => 'kavenegar'],
                'sms_sender'     => ['label' => 'شماره فرستنده', 'type' => 'text', 'default' => '10008663'],
                'sms_api_key'    => ['label' => 'API Key پیامک', 'type' => 'password', 'default' => ''],
                'smtp_host'      => ['label' => 'هاست SMTP', 'type' => 'text', 'default' => 'smtp.example.com'],
                'smtp_port'      => ['label' => 'پورت SMTP', 'type' => 'number', 'default' => 587],
                'smtp_user'      => ['label' => 'نام کاربری SMTP', 'type' => 'text', 'default' => 'mailer@example.com'],
                'smtp_password'  => ['label' => 'رمز SMTP', 'type' => 'password', 'default' => ''],
                'mail_from'      => ['label' => 'ایمیل فرستنده', 'type' => 'email', 'default' => 'no-reply@example.com'],
                'welcome_enabled' => ['label' => 'پیام خوش‌آمدگویی', 'type' => 'toggle', 'default' => true],
                'payment_enabled' => ['label' => 'اعلان پرداخت', 'type' => 'toggle', 'default' => true],
                'expiry_alert'    => ['label' => 'هشدار انقضا', 'type' => 'toggle', 'default' => true],
            ],
        ],

        'sites' => [
            'label' => '۸. سایت‌ها و دامنه',
            'icon'  => 'globe',
            'fields' => [
                'base_domain'           => ['label' => 'دامنه اصلی', 'type' => 'text', 'default' => 'example.com'],
                'custom_domain_enabled' => ['label' => 'امکان دامنه اختصاصی', 'type' => 'toggle', 'default' => true],
                'auto_ssl'              => ['label' => 'صدور خودکار SSL', 'type' => 'toggle', 'default' => true],
                'max_per_site'          => ['label' => 'حداکثر دامنه هر سایت', 'type' => 'number', 'default' => 2],
                'reserved_subdomains'   => ['label' => 'زیردامنه‌های رزرو', 'type' => 'text', 'default' => 'admin, api, www, billing, app'],
            ],
        ],

        'storage' => [
            'label' => '۹. ذخیره‌سازی و SEO',
            'icon'  => 'database',
            'fields' => [
                'driver'          => ['label' => 'درایور ذخیره‌سازی', 'type' => 'select', 'options' => ['local' => 'Local', 's3' => 'S3 Compatible'], 'default' => 'local'],
                'max_upload_mb'   => ['label' => 'حداکثر حجم آپلود (MB)', 'type' => 'number', 'default' => 20],
                'site_quota_gb'   => ['label' => 'سهمیه فضای هر سایت (GB)', 'type' => 'number', 'default' => 5],
                'allow_indexing'  => ['label' => 'اجازه ایندکس موتور جستجو', 'type' => 'toggle', 'default' => true],
                'auto_sitemap'    => ['label' => 'تولید خودکار Sitemap', 'type' => 'toggle', 'default' => true],
            ],
        ],

        'integrations' => [
            'label' => '۱۰. API و یکپارچه‌سازی',
            'icon'  => 'plug',
            'fields' => [
                'api_enabled'        => ['label' => 'دسترسی REST API', 'type' => 'toggle', 'default' => true],
                'rate_limit_per_min' => ['label' => 'محدودیت نرخ (در دقیقه)', 'type' => 'number', 'default' => 60],
                'webhook_enabled'    => ['label' => 'ارسال Webhook', 'type' => 'toggle', 'default' => true],
                'webhook_retries'    => ['label' => 'تلاش مجدد Webhook', 'type' => 'number', 'default' => 5],
                'webhook_timeout'    => ['label' => 'زمان انتظار Webhook (ثانیه)', 'type' => 'number', 'default' => 10],
                'oauth_enabled'      => ['label' => 'OAuth2 Server', 'type' => 'toggle', 'default' => false],
                'docs_url'           => ['label' => 'نشانی مستندات API', 'type' => 'url', 'default' => 'https://docs.example.com'],
            ],
        ],

        'maintenance' => [
            'label' => '۱۱. نگهداری و عملیات',
            'icon'  => 'tool',
            'fields' => [
                'maintenance_mode'      => ['label' => 'حالت تعمیر', 'type' => 'toggle', 'default' => false],
                'backup_schedule'       => ['label' => 'زمان‌بندی پشتیبان‌گیری', 'type' => 'select', 'options' => ['daily' => 'روزانه', 'weekly' => 'هفتگی', 'monthly' => 'ماهانه'], 'default' => 'daily'],
                'backup_retention_days' => ['label' => 'نگهداری Backup (روز)', 'type' => 'number', 'default' => 14],
                'queue_driver'          => ['label' => 'درایور صف', 'type' => 'select', 'options' => ['database' => 'Database', 'redis' => 'Redis', 'sync' => 'Sync'], 'default' => 'database'],
                'job_max_tries'         => ['label' => 'تلاش مجدد Jobها', 'type' => 'number', 'default' => 3],
                'error_tracking'        => ['label' => 'ثبت متمرکز خطاها', 'type' => 'toggle', 'default' => true],
                'alert_email'           => ['label' => 'ایمیل هشدار عملیات', 'type' => 'email', 'default' => 'ops@example.com'],
            ],
        ],

        'audit' => [
            'label' => '۱۲. گزارش و ممیزی',
            'icon'  => 'file-text',
            'fields' => [
                'enabled'          => ['label' => 'ثبت تاریخچه تغییرات', 'type' => 'toggle', 'default' => true],
                'log_ip'           => ['label' => 'ثبت IP تغییر‌دهنده', 'type' => 'toggle', 'default' => true],
                'log_values'       => ['label' => 'ثبت مقادیر قبلی/جدید', 'type' => 'toggle', 'default' => true],
                'retention_days'   => ['label' => 'نگهداری لاگ (روز)', 'type' => 'number', 'default' => 365],
                'sensitive_alert'  => ['label' => 'هشدار فوری تغییرات حساس', 'type' => 'toggle', 'default' => true],
                'require_reauth'   => ['label' => 'تأیید مجدد رمز برای تغییر حساس', 'type' => 'toggle', 'default' => true],
            ],
        ],
    ],

    'registration_fields' => [
        'mobile'                => ['label' => 'موبایل', 'default_state' => 'required'],
        'email'                 => ['label' => 'ایمیل', 'default_state' => 'optional'],
        'first_name'            => ['label' => 'نام', 'default_state' => 'required'],
        'last_name'             => ['label' => 'نام خانوادگی', 'default_state' => 'required'],
        'username'              => ['label' => 'نام کاربری', 'default_state' => 'optional'],
        'password'              => ['label' => 'رمز عبور', 'default_state' => 'required'],
        'password_confirmation' => ['label' => 'تکرار رمز عبور', 'default_state' => 'required'],
        'company_name'          => ['label' => 'نام شرکت', 'default_state' => 'optional'],
        'national_code'         => ['label' => 'کد ملی', 'default_state' => 'optional'],
        'address'               => ['label' => 'آدرس', 'default_state' => 'hidden'],
        'phone'                 => ['label' => 'تلفن ثابت', 'default_state' => 'hidden'],
    ],
];