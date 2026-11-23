<?php

namespace Saas\PlatformConfig\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    public function rules(): array
    {
        return [
            'settings' => ['required', 'array'],
            'reason' => ['nullable', 'string', 'max:500'],
        ];
    }
}
