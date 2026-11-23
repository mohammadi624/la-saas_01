# جدول کامل کاربر + صفحهٔ «پروفایل من»

این فایل‌ها را در ریشهٔ پروژه (`D:\lara\la-saas`) کپی کنید؛ ساختار پوشه‌ها همان ساختار پروژه است.

| فایل | کار |
|---|---|
| `database/migrations/2026_11_20_100000_add_profile_fields_to_users_table.php` | ۲۷ ستون پروژهٔ قبلی را به `users` اضافه می‌کند (فقط افزایشی) |
| `app/Models/User.php` | مدل کامل: رمزنگاری اطلاعات بانکی، کد معرف خودکار، حذف نرم |
| `app/Support/IranValidators.php` | کد ملی، کارت (Luhn)، شبا (mod-97) |
| `app/Rules/IranRule.php` | قانون اعتبارسنجی Laravel برای همان‌ها |
| `app/Modules/Profile/*` | ماژول «پروفایل من» برای هر دو پنل |

## نصب
```cmd
php artisan vendor:publish --tag=sazeh-config
```
در `config\sazeh.php` بخش `modules` را این‌طور کنید:
```php
'modules' => [
    Sazeh\Core\Modules\CoreModule::class,
    App\Modules\Profile\ProfileModule::class,
],
```
```cmd
composer dump-autoload
php artisan migrate --pretend
php artisan migrate
php artisan sazeh:sync
php artisan view:clear
```
آیتم «پروفایل من» در منوی هر دو پنل ساخته می‌شود (از منوساز قابل جابه‌جایی یا غیرفعال‌سازی است).

## ستون‌هایی که عمداً اضافه نشدند
| ستون قدیمی | جایگزین |
|---|---|
| `role_id` | `platform_role_id` (کاربران مالک سایت) و `core_memberships.role_id` (کاربران خریدار) |
| `parent_id` | `core_memberships` — زیرمجموعهٔ کدام خریدار |
| `is_active` | `status` — یک منبع حقیقت |
| `expires_at` | متعلق به اشتراک/فضای کاری است، نه کاربر |
| `token` | توکن‌ها جدول جدا و هش‌شده دارند |

## امنیت
- شمارهٔ کارت، شبا، شمارهٔ حساب و secret ورود دومرحله‌ای با `APP_KEY` رمزنگاری می‌شوند. **اگر `APP_KEY` را عوض کنید، این مقادیر دیگر خوانا نیستند**؛ پیش از تغییر کلید، از این داده‌ها خروجی بگیرید.
- در فرم، اطلاعات بانکی ثبت‌شده فقط به‌صورت پوشیده (`**** 5223`) نمایش داده می‌شود.
- در لاگ امنیتی فقط نام فیلدهای تغییرکرده ثبت می‌شود، نه مقدارشان.
- `platform_role_id`، `status`، موجودی معرفی و یادداشت مدیر از فرم پروفایل قابل تغییر نیستند.
