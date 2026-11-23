<?php

namespace App\Modules\Profile;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Sazeh\Core\Audit\AuditLogger;
use Sazeh\Core\Support\Jalali;

class ProfileController extends Controller
{
    public function edit(Request $request): View
    {
        return view('profile::edit', ['user' => $request->user()]);
    }

    public function update(ProfileRequest $request, AuditLogger $audit): RedirectResponse
    {
        $user = $request->user();
        $data = $request->validated();

        $data['birth_date'] = filled($data['birth_date_jalali'] ?? null) ? Jalali::parse($data['birth_date_jalali']) : null;
        unset($data['birth_date_jalali']);

        // اطلاعات بانکی فقط اگر مقدار جدید وارد شده باشد تغییر می‌کند (فیلد خالی = بدون تغییر)
        foreach (['card_number', 'sheba_number', 'account_number'] as $f) {
            if (! filled($data[$f] ?? null)) {
                unset($data[$f]);
            }
        }
        if ($request->boolean('clear_bank')) {
            $data['card_number'] = $data['sheba_number'] = $data['account_number'] = null;
        }

        $user->fill($data);
        if ($user->isDirty(['first_name', 'last_name']) && trim(($user->first_name ?? '').' '.($user->last_name ?? '')) !== '') {
            $user->name = trim($user->first_name.' '.$user->last_name);
        }
        $changed = array_keys($user->getDirty());
        $user->save();

        // فقط نام فیلدهای تغییرکرده ثبت می‌شود، هرگز مقدارها
        $audit->log('profile.updated', $user, ['fields' => $changed]);

        return back()->with('success', 'پروفایل ذخیره شد.');
    }
}
