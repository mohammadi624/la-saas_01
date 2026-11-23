<?php

namespace Saas\PlatformConfig\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Saas\PlatformConfig\Services\RegistrationPolicyService;

class RegisterUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(RegistrationPolicyService $policyService): array
    {
        return $policyService->buildValidationRules();
    }
}
