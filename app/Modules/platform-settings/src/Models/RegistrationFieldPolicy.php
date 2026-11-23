<?php

namespace Saas\PlatformConfig\Models;

use Illuminate\Database\Eloquent\Model;
use Saas\PlatformConfig\Enums\RegistrationFieldState;

class RegistrationFieldPolicy extends Model
{
    protected $table = 'registration_field_policies';

    protected $fillable = [
        'field_key',
        'field_label',
        'state',
        'sort_order',
    ];

    protected $casts = [
        'state' => RegistrationFieldState::class,
        'sort_order' => 'integer',
    ];
}
