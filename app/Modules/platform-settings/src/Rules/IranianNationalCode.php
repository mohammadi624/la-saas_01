<?php

namespace Saas\PlatformConfig\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class IranianNationalCode implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $code = (string) $value;

        if (!preg_match('/^\d{10}$/', $code)) {
            $fail('کد ملی باید دقیقاً ۱۰ رقم عددی باشد.');
            return;
        }

        if (preg_match('/^(\d)\1{9}$/', $code)) {
            $fail('کد ملی وارد شده معتبر نیست.');
            return;
        }

        $check = (int) $code[9];
        $sum = 0;

        for ($i = 0; $i < 9; $i++) {
            $sum += ((int) $code[$i]) * (10 - $i);
        }

        $remainder = $sum % 11;
        $isValid = ($remainder < 2 && $check === $remainder) || ($remainder >= 2 && $check === (11 - $remainder));

        if (!$isValid) {
            $fail('کد ملی وارد شده از نظر الگوریتم کنترلی نامعتبر است.');
        }
    }
}
