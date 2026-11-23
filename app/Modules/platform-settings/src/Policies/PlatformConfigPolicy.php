<?php

namespace Saas\PlatformConfig\Policies;

use Illuminate\Contracts\Auth\Authenticatable;

class PlatformConfigPolicy
{
    public function viewAny(Authenticatable $user): bool
    {
        $role = $user->role ?? 'viewer';
        return in_array($role, ['super_admin', 'billing_manager', 'operator', 'support', 'viewer'], true);
    }

    public function updateGroup(Authenticatable $user, string $group): bool
    {
        $role = $user->role ?? 'viewer';

        if ($role === 'super_admin') {
            return true;
        }

        if ($role === 'billing_manager') {
            return in_array($group, ['billing', 'discount'], true);
        }

        if ($role === 'operator') {
            return in_array($group, ['general', 'auth'], true);
        }

        return false;
    }

    public function export(Authenticatable $user): bool
    {
        return in_array($user->role ?? 'viewer', ['super_admin', 'billing_manager'], true);
    }
}
