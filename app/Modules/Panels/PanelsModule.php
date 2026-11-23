<?php

namespace App\Modules\Panels;

use Sazeh\Core\Modules\Module;

/**
 * ماژول «تعریف پنل» — پنل مالک سایت.
 * هر چیزی که به هسته معرفی می‌شود فقط از همین کلاس است؛ web.php پروژه دست نمی‌خورد.
 */
class PanelsModule extends Module
{
    public function key(): string
    {
        return 'panels';
    }

    public function title(): string
    {
        return 'تعریف پنل';
    }

    /** مجوزها ← در «نقش‌ها و دسترسی‌ها» برای هر نقش تیک می‌خورند */
    public function permissions(): array
    {
        return [
            ['key' => 'panels.view', 'panel' => 'platform', 'label' => 'مشاهدهٔ پنل‌ها'],
            ['key' => 'panels.manage', 'panel' => 'platform', 'label' => 'تعریف و ویرایش پنل', 'is_write' => true],
        ];
    }

    /** صفحه‌ها (Routeهای GET) و مجوز لازم هر کدام */
    public function pages(): array
    {
        return [
            ['route' => 'panels.index', 'panel' => 'platform', 'title' => 'تعریف پنل', 'permission' => 'panels.view'],
            ['route' => 'panels.create', 'panel' => 'platform', 'title' => 'پنل جدید', 'permission' => 'panels.manage'],
            ['route' => 'panels.edit', 'panel' => 'platform', 'title' => 'ویرایش پنل', 'permission' => 'panels.manage'],
        ];
    }

    /** آیتم پیش‌فرض منو (از منوساز قابل تغییر نام، جابه‌جایی و غیرفعال‌سازی) */
    public function menu(): array
    {
        return [
            ['key' => 'p.panels', 'panel' => 'platform', 'title' => 'تعریف پنل', 'icon' => 'grid', 'route' => 'panels.index', 'sort' => 40],
        ];
    }

    public function migrations(): ?string
    {
        return __DIR__.'/database/migrations';
    }

    public function views(): ?string
    {
        return __DIR__.'/views';
    }

    public function routes(): ?string
    {
        return __DIR__.'/routes.php';
    }
}
