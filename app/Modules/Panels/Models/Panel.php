<?php

namespace App\Modules\Panels\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Panel extends Model
{
    use SoftDeletes;

    protected $table = 'panel_definitions';

    // created_by / updated_by عمداً fillable نیستند (از کنترلر و کاربر جاری پر می‌شوند)
    protected $fillable = [
        'title', 'code', 'description', 'price_monthly', 'price_yearly',
        'users_unlimited', 'max_users', 'features', 'is_active', 'sort',
    ];

    protected function casts(): array
    {
        return [
            'price_monthly' => 'integer',
            'price_yearly' => 'integer',
            'users_unlimited' => 'boolean',
            'max_users' => 'integer',
            'features' => 'array',
            'is_active' => 'boolean',
            'sort' => 'integer',
        ];
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(config('sazeh.user_model'), 'created_by');
    }

    public function scopeActive(Builder $q): Builder
    {
        return $q->where('is_active', true);
    }

    /** «۵ کاربر»، «نامحدود» یا «تک‌کاربره» */
    public function usersLabel(): string
    {
        return PanelRules::usersLabel($this->users_unlimited, $this->max_users);
    }

    /** تخفیف سالانه نسبت به ۱۲ ماه (درصد) */
    public function yearlyDiscount(): int
    {
        return PanelRules::yearlyDiscount($this->price_monthly, $this->price_yearly);
    }
}
