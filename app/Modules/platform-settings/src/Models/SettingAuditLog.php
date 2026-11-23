<?php

namespace Saas\PlatformConfig\Models;

use Illuminate\Database\Eloquent\Model;

class SettingAuditLog extends Model
{
    protected $table = 'setting_audit_logs';

    protected $fillable = [
        'actor_id',
        'actor_role',
        'ip_address',
        'scope',
        'group_name',
        'setting_key',
        'old_value_masked',
        'new_value_masked',
        'reason',
    ];
}
