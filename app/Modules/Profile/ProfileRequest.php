<?php

namespace App\Modules\Profile;

use App\Rules\IranRule;
use App\Support\IranValidators;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Sazeh\Core\Support\Jalali;

class ProfileRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    protected function prepareForValidation(): void
    {
        $clean = fn ($v) => $v === null ? null : trim(IranValidators::digits((string) $v));
        $merge = [];
        foreach (['national_code', 'phone', 'postal_code', 'account_number', 'birth_date_jalali'] as $f) {
            if ($this->has($f)) {
                $merge[$f] = $clean($this->input($f));
            }
        }
        if ($this->filled('card_number')) {
            $merge['card_number'] = preg_replace('/[\s\-]/', '', IranValidators::digits($this->input('card_number')));
        }
        if ($this->filled('sheba_number')) {
            $merge['sheba_number'] = IranValidators::normalizeSheba($this->input('sheba_number')) ?? $this->input('sheba_number');
        }
        if ($this->filled('email')) {
            $merge['email'] = mb_strtolower(trim($this->input('email')));
        }
        $this->merge($merge);
    }

    public function rules(): array
    {
        $id = $this->user()->getKey();

        return [
            'first_name' => ['nullable', 'string', 'max:100'],
            'last_name' => ['nullable', 'string', 'max:100'],
            'father_name' => ['nullable', 'string', 'max:100'],
            'national_code' => ['nullable', 'digits:10', new IranRule('national_code'), Rule::unique('users', 'national_code')->ignore($id)],
            'birth_date_jalali' => ['nullable', 'string', function ($a, $v, $fail) {
                if ($v && ! Jalali::parse($v)) {
                    $fail('تاریخ تولد را به شکل ۱۳۷۰/۰۵/۱۲ وارد کنید.');
                }
            }],
            'gender' => ['nullable', Rule::in(['male', 'female'])],
            'email' => ['nullable', 'email', 'max:150', Rule::unique('users', 'email')->ignore($id)],
            'phone' => ['nullable', 'regex:/^0\d{10}$/'],
            'country' => ['nullable', 'string', 'max:100'],
            'province' => ['nullable', 'string', 'max:100'],
            'city' => ['nullable', 'string', 'max:100'],
            'postal_code' => ['nullable', 'digits:10'],
            'address' => ['nullable', 'string', 'max:500'],
            'bank_name' => ['nullable', 'string', 'max:100'],
            'account_holder' => ['nullable', 'string', 'max:100'],
            'account_number' => ['nullable', 'regex:/^[0-9\-.]{6,30}$/'],
            'card_number' => ['nullable', new IranRule('card')],
            'sheba_number' => ['nullable', new IranRule('sheba')],
        ];
    }

    public function attributes(): array
    {
        return [
            'first_name' => 'نام', 'last_name' => 'نام خانوادگی', 'father_name' => 'نام پدر', 'national_code' => 'کد ملی',
            'birth_date_jalali' => 'تاریخ تولد', 'gender' => 'جنسیت', 'email' => 'ایمیل', 'phone' => 'تلفن ثابت',
            'country' => 'کشور', 'province' => 'استان', 'city' => 'شهر', 'postal_code' => 'کد پستی', 'address' => 'نشانی',
            'bank_name' => 'نام بانک', 'account_holder' => 'نام صاحب حساب', 'account_number' => 'شمارهٔ حساب',
            'card_number' => 'شمارهٔ کارت', 'sheba_number' => 'شمارهٔ شبا',
        ];
    }

    public function messages(): array
    {
        return [
            'phone.regex' => 'تلفن ثابت را با پیش‌شماره و ۱۱ رقم وارد کنید (مثل 02112345678).',
            'postal_code.digits' => 'کد پستی باید ۱۰ رقم باشد.',
            'national_code.digits' => 'کد ملی باید ۱۰ رقم باشد.',
            'national_code.unique' => 'این کد ملی برای حساب دیگری ثبت شده است.',
            'email.unique' => 'این ایمیل برای حساب دیگری ثبت شده است.',
        ];
    }
}
