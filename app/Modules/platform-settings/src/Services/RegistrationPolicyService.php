<?php

namespace Saas\PlatformConfig\Services;

use Illuminate\Support\Collection;
use Illuminate\Validation\ValidationException;
use Saas\PlatformConfig\Enums\RegistrationFieldState;
use Saas\PlatformConfig\Models\RegistrationFieldPolicy;
use Saas\PlatformConfig\Rules\IranianNationalCode;

class RegistrationPolicyService
{
    public function getFieldPolicies(): Collection
    {
        return RegistrationFieldPolicy::query()->orderBy('sort_order')->get();
    }

    /**
     * @throws ValidationException
     */
    public function assertLoginMethodCompatibility(string $loginMethod, array $fieldStates): void
    {
        $mobileState = $fieldStates['mobile'] ?? RegistrationFieldState::HIDDEN->value;
        $emailState = $fieldStates['email'] ?? RegistrationFieldState::HIDDEN->value;
        $passwordState = $fieldStates['password'] ?? RegistrationFieldState::HIDDEN->value;

        $errors = [];

        if ($loginMethod === 'email_password' && $emailState === RegistrationFieldState::HIDDEN->value) {
            $errors['login_method'][] = 'برای ورود با ایمیل و رمز عبور، فیلد ایمیل نباید مخفی باشد.';
        }

        if ($loginMethod !== 'email_password' && $mobileState === RegistrationFieldState::HIDDEN->value) {
            $errors['login_method'][] = 'روش ورود انتخابی نیازمند فعال بودن فیلد موبایل است.';
        }

        if (in_array($loginMethod, ['mobile_password', 'email_password'], true) && $passwordState !== RegistrationFieldState::REQUIRED->value) {
            $errors['password'][] = 'ورود با رمز عبور نیازمند اجباری بودن فیلد رمز عبور است.';
        }

        if (!empty($errors)) {
            throw ValidationException::withMessages($errors);
        }
    }

    public function buildValidationRules(): array
    {
        $rules = [];
        $policies = $this->getFieldPolicies();

        foreach ($policies as $policy) {
            $key = $policy->field_key;
            $state = $policy->state;

            if ($state === RegistrationFieldState::HIDDEN) {
                $rules[$key] = ['prohibited'];
                continue;
            }

            $fieldRules = [
                $state === RegistrationFieldState::REQUIRED ? 'required' : 'nullable',
            ];

            if ($key === 'email') {
                $fieldRules[] = 'email';
            } elseif ($key === 'password') {
                $fieldRules[] = 'string';
                $fieldRules[] = 'min:' . (int) config('platform-config.defaults.security.password_min_length.value', 10);
            } elseif ($key === 'password_confirmation') {
                $fieldRules[] = 'same:password';
            } elseif ($key === 'national_code') {
                $fieldRules[] = new IranianNationalCode();
            } else {
                $fieldRules[] = 'string';
                $fieldRules[] = 'max:255';
            }

            $rules[$key] = $fieldRules;
        }

        return $rules;
    }
}
