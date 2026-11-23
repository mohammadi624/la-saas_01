<?php

namespace Saas\PlatformConfig\Models;

use Illuminate\Database\Eloquent\Model;
use Saas\PlatformConfig\Enums\SettingScope;
use Saas\PlatformConfig\Enums\SettingType;

class PlatformSetting extends Model
{
    protected $table = 'platform_settings';

    protected $fillable = [
        'scope',
        'scope_id',
        'group_name',
        'setting_key',
        'setting_value',
        'setting_type',
        'is_encrypted',
        'description',
    ];

    protected $casts = [
        'scope' => SettingScope::class,
        'setting_type' => SettingType::class,
        'is_encrypted' => 'boolean',
    ];
}
