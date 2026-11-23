<?php

namespace App\Modules\Panels;

use App\Modules\Panels\Models\PanelRules;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PanelRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('panels.manage') ?? false;
    }

    protected function prepareForValidation(): void
    {
        $toLatin = fn ($v) => str_replace(['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'], range(0, 9), (string) $v);
        $this->merge([
            'code' => strtolower(trim((string) $this->input('code'))),
            'price_monthly' => PanelRules::parseAmount($this->input('price_monthly')) ?? 0,
            'price_yearly' => PanelRules::parseAmount($this->input('price_yearly')) ?? 0,
            'max_users' => (int) $toLatin($this->input('max_users', 0)),
            'sort' => (int) $toLatin($this->input('sort', 0)),
            'users_unlimited' => $this->boolean('users_unlimited'),
            'is_active' => $this->boolean('is_active'),
            'features' => PanelRules::parseFeatures($this->input('features_text')),
        ]);
    }

    public function rules(): array
    {
        $id = $this->route('panel');

        return [
            'title' => ['required', 'string', 'max:100'],
            'code' => ['required', 'regex:/^[a-z][a-z0-9-]{1,39}$/', Rule::unique('panel_definitions', 'code')->ignore($id)],
            'description' => ['nullable', 'string', 'max:2000'],
            'price_monthly' => ['integer', 'min:0', 'max:100000000000'],
            'price_yearly' => ['integer', 'min:0', 'max:1000000000000'],
            'users_unlimited' => ['boolean'],
            'max_users' => ['integer', 'min:0', 'max:100000'],
            'features' => ['array', 'max:30'],
            'features.*' => ['string', 'max:150'],
            'is_active' => ['boolean'],
            'sort' => ['integer', 'min:-1000', 'max:1000'],
        ];
    }

    public function attributes(): array
    {
        return ['title' => 'عنوان', 'code' => 'کد', 'description' => 'توضیحات', 'price_monthly' => 'قیمت ماهانه',
            'price_yearly' => 'قیمت سالانه', 'max_users' => 'سقف کاربران', 'sort' => 'ترتیب'];
    }

    public function messages(): array
    {
        return [
            'code.regex' => 'کد باید با حرف لاتین کوچک شروع شود و فقط حروف کوچک، عدد و خط تیره داشته باشد (مثل pro یا basic-1).',
            'code.unique' => 'این کد برای پنل دیگری استفاده شده است.',
            'price_monthly.min' => 'قیمت ماهانه معتبر نیست.',
            'price_yearly.min' => 'قیمت سالانه معتبر نیست.',
        ];
    }
}
