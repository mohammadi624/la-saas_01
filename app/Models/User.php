<?php

namespace App\Models;

use App\Support\IranValidators;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Sazeh\Core\Concerns\HasSazehAccess;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, HasSazehAccess, Notifiable, SoftDeletes;

    /**
     * فقط فیلدهایی که خود کاربر در «پروفایل من» تغییر می‌دهد.
     * عمداً fillable نیستند: platform_role_id، status، referral_*، referred_by_user_id،
     * two_factor_*، notes، meta، mobile (شناسهٔ ورود)
     */
    protected $fillable = [
        'name', 'email', 'password',
        'first_name', 'last_name', 'father_name', 'national_code', 'birth_date', 'gender',
        'phone', 'country', 'province', 'city', 'postal_code', 'address',
        'bank_name', 'account_holder', 'account_number', 'card_number', 'sheba_number',
    ];

    protected $hidden = [
        'password', 'remember_token', 'two_factor_secret',
        'account_number', 'card_number', 'sheba_number', 'notes',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'mobile_verified_at' => 'datetime',
            'password_changed_at' => 'datetime',
            'last_login_at' => 'datetime',
            'birth_date' => 'date',
            'password' => 'hashed',
            'two_factor_enabled' => 'boolean',
            'two_factor_secret' => 'encrypted',
            'account_number' => 'encrypted',
            'card_number' => 'encrypted',
            'sheba_number' => 'encrypted',
            'referral_balance' => 'decimal:2',
            'referral_earned_total' => 'decimal:2',
            'meta' => 'array',
        ];
    }

    protected static function booted(): void
    {
        static::creating(function (User $u) {
            if (empty($u->referral_code)) {
                do {
                    $code = Str::upper(Str::random(8));
                } while (static::withTrashed()->where('referral_code', $code)->exists());
                $u->referral_code = $code;
            }
        });

        static::saving(function (User $u) {
            if ($u->isDirty('password') && $u->exists) {
                $u->password_changed_at = now();
            }
        });
    }

    public function referrer(): BelongsTo
    {
        return $this->belongsTo(self::class, 'referred_by_user_id');
    }

    public function referrals(): HasMany
    {
        return $this->hasMany(self::class, 'referred_by_user_id');
    }

    public function getFullNameAttribute(): string
    {
        return trim(($this->first_name ?? '').' '.($this->last_name ?? '')) ?: (string) $this->name;
    }

    public function getMaskedCardAttribute(): string
    {
        return IranValidators::maskCard($this->card_number);
    }

    public function getMaskedShebaAttribute(): string
    {
        return IranValidators::maskSheba($this->sheba_number);
    }

    /** درصد تکمیل پروفایل (برای نمایش در داشبورد) */
    public function profileCompletion(): int
    {
        $fields = ['first_name', 'last_name', 'national_code', 'birth_date', 'gender', 'province', 'city', 'address', 'postal_code', 'email'];
        $filled = collect($fields)->filter(fn ($f) => filled($this->{$f}))->count();

        return (int) round($filled * 100 / count($fields));
    }
}
