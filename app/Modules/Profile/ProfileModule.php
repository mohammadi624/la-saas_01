<?php

namespace App\Modules\Profile;

use Sazeh\Core\Modules\Module;

/** «پروفایل من» برای همهٔ کاربران هر دو پنل */
class ProfileModule extends Module
{
    public function key(): string
    {
        return 'profile';
    }

    public function title(): string
    {
        return 'پروفایل';
    }

    public function pages(): array
    {
        return [['route' => 'profile.edit', 'panel' => 'any', 'title' => 'پروفایل من']];
    }

    public function menu(): array
    {
        return [
            ['key' => 'p.profile', 'panel' => 'platform', 'title' => 'پروفایل من', 'icon' => 'users', 'route' => 'profile.edit', 'sort' => 98],
            ['key' => 'w.profile', 'panel' => 'workspace', 'title' => 'پروفایل من', 'icon' => 'users', 'route' => 'profile.edit', 'sort' => 98],
        ];
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
