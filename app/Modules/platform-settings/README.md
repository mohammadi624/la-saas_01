# پکیج مدیریت پیکربندی پلتفرم SaaS برای لاراول

این پکیج شامل هسته مدیریت تنظیمات چند-محدوده‌ای (`scope`)، سیاست‌های ثبت‌نام با اعتبارسنجی کد ملی ایران، محاسبه‌گر صورتحساب و مالیات بدون خطای اعشاری (`float`)، کنترل دسترسی بر اساس نقش (`Policy`) و ثبت تاریخچه ممیزی (`Audit Log`) با ماسک‌کردن مقادیر محرمانه است.

## نصب و راه‌اندازی

1. کپی کردن پوشه پکیج در مسیر `packages/saas/platform-config` یا مخزن Composer.
2. اجرای Migrationها و Seeder:

```bash
php artisan migrate
php artisan db:seed --class="Saas\\PlatformConfig\\Database\\Seeders\\PlatformConfigSeeder"
```

## انتشار فایل‌ها (اختیاری)

```bash
php artisan vendor:publish --tag=platform-config-config
php artisan vendor:publish --tag=platform-config-migrations
php artisan vendor:publish --tag=platform-config-views
```
