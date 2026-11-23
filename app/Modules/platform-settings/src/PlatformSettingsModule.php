<?php

namespace Saas\PlatformConfig;

use Sazeh\Core\Modules\Module;

class PlatformSettingsModule extends Module
{
    public function key(): string
    {
        return 'platform-settings';
    }

    public function title(): string
    {
        return 'تنظیمات پلتفرم';
    }

    public function permissions(): array
    {
        return [
            [
                'key'   => 'platform-config.view',
                'panel' => 'platform',
                'label' => 'مشاهده تنظیمات پلتفرم',
            ],
            [
                'key'      => 'platform-config.manage',
                'panel'    => 'platform',
                'label'    => 'مدیریت تنظیمات پلتفرم',
                'is_write' => true,
            ],
            [
                'key'      => 'platform-config.manage-registration',
                'panel'    => 'platform',
                'label'    => 'مدیریت سیاست ثبت‌نام',
                'is_write' => true,
            ],
            [
                'key'   => 'platform-config.audit',
                'panel' => 'platform',
                'label' => 'مشاهده لاگ تغییرات تنظیمات',
            ],
        ];
    }

    public function pages(): array
    {
        return [
            [
                'route'      => 'admin.platform-config.index',
                'panel'      => 'platform',
                'title'      => 'تنظیمات پلتفرم',
                'permission' => 'platform-config.view',
            ],
        ];
    }

    public function menu(): array
    {
        return [
            [
                'key'        => 'p.platform-config',
                'panel'      => 'platform',
                'parent'     => 'p.system',
                'title'      => 'تنظیمات پلتفرم',
                'icon'       => 'gear',
                'route'      => 'admin.platform-config.index',
                'sort'       => 5,
                'permission' => 'platform-config.view',
            ],
        ];
    }
}