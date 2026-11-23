<?php

namespace App\Rules;

use App\Support\IranValidators;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

/** قانون اعتبارسنجی: new IranRule('national_code' | 'card' | 'sheba') */
class IranRule implements ValidationRule
{
    public function __construct(private readonly string $type)
    {
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $ok = match ($this->type) {
            'national_code' => IranValidators::nationalCode($value),
            'card' => IranValidators::cardNumber($value),
            'sheba' => IranValidators::sheba($value),
            default => false,
        };
        if (! $ok) {
            $fail(match ($this->type) {
                'national_code' => 'کد ملی معتبر نیست.',
                'card' => 'شمارهٔ کارت معتبر نیست.',
                'sheba' => 'شمارهٔ شبا معتبر نیست (IR و ۲۴ رقم).',
                default => 'مقدار نامعتبر است.',
            });
        }
    }
}
