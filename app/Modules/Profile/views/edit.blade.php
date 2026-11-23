@extends('sazeh::layouts.dashboard')
@section('title', 'پروفایل من')
@section('heading', 'پروفایل من')
@section('content')
@php
    $v = fn ($f) => old($f, $user->{$f});
    $pct = $user->profileCompletion();
@endphp
<div class="card" style="padding:12px 18px"><div class="row">
    <b>تکمیل پروفایل: {{ \Sazeh\Core\Support\Jalali::digits($pct) }}٪</b>
    <div style="flex:1;min-width:160px;height:8px;background:#eef1f6;border-radius:6px;overflow:hidden"><div style="height:100%;width:{{ $pct }}%;background:var(--pri)"></div></div>
    <span class="small muted">عضویت از {{ \Sazeh\Core\Support\Jalali::format($user->created_at, true) }}</span>
</div></div>

<form method="post" action="{{ route('profile.update') }}">@csrf @method('put')
<div class="grid g2">
    <div class="card"><h2>اطلاعات هویتی</h2><p class="desc">نام نمایشی شما از نام و نام خانوادگی ساخته می‌شود.</p>
        <div class="grid g2" style="gap:10px">
            <label class="f"><span>نام</span><input type="text" name="first_name" value="{{ $v('first_name') }}" maxlength="100"></label>
            <label class="f"><span>نام خانوادگی</span><input type="text" name="last_name" value="{{ $v('last_name') }}" maxlength="100"></label>
            <label class="f"><span>نام پدر</span><input type="text" name="father_name" value="{{ $v('father_name') }}" maxlength="100"></label>
            <label class="f"><span>کد ملی</span><input type="text" name="national_code" value="{{ $v('national_code') }}" dir="ltr" inputmode="numeric" maxlength="10"></label>
            <label class="f"><span>تاریخ تولد (شمسی)</span><input type="text" name="birth_date_jalali" value="{{ old('birth_date_jalali', \Sazeh\Core\Support\Jalali::toInput($user->birth_date)) }}" dir="ltr" placeholder="1370/05/12"></label>
            <label class="f"><span>جنسیت</span><select name="gender"><option value="">—</option>
                <option value="male" @selected($v('gender') === 'male')>مرد</option><option value="female" @selected($v('gender') === 'female')>زن</option></select></label>
        </div>
    </div>

    <div class="card"><h2>اطلاعات ورود</h2><p class="desc">موبایل شناسهٔ ورود شماست و از اینجا تغییر نمی‌کند.</p>
        <label class="f"><span>موبایل</span><input type="text" value="{{ $user->mobile }}" dir="ltr" disabled></label>
        <label class="f"><span>ایمیل</span><input type="email" name="email" value="{{ $v('email') }}" dir="ltr"></label>
        <table class="small">
            <tr><td>کد معرف شما</td><td><code>{{ $user->referral_code ?? '—' }}</code></td></tr>
            <tr><td>موجودی معرفی</td><td>{{ \Sazeh\Core\Support\Jalali::money($user->referral_balance) }}</td></tr>
            <tr><td>آخرین ورود</td><td>{{ $user->last_login_at ? \Sazeh\Core\Support\Jalali::format($user->last_login_at) : '—' }}</td></tr>
        </table>
    </div>

    <div class="card"><h2>تماس و نشانی</h2>
        <div class="grid g2" style="gap:10px">
            <label class="f"><span>تلفن ثابت</span><input type="text" name="phone" value="{{ $v('phone') }}" dir="ltr" placeholder="02112345678"></label>
            <label class="f"><span>کشور</span><input type="text" name="country" value="{{ $v('country') ?? 'ایران' }}"></label>
            <label class="f"><span>استان</span><input type="text" name="province" value="{{ $v('province') }}"></label>
            <label class="f"><span>شهر</span><input type="text" name="city" value="{{ $v('city') }}"></label>
            <label class="f"><span>کد پستی</span><input type="text" name="postal_code" value="{{ $v('postal_code') }}" dir="ltr" maxlength="10"></label>
        </div>
        <label class="f"><span>نشانی</span><input type="text" name="address" value="{{ $v('address') }}" maxlength="500"></label>
    </div>

    <div class="card"><h2>اطلاعات بانکی</h2><p class="desc">رمزنگاری‌شده ذخیره می‌شود. برای تغییر، مقدار جدید را وارد کنید؛ خالی گذاشتن یعنی بدون تغییر.</p>
        <div class="grid g2" style="gap:10px">
            <label class="f"><span>نام بانک</span><input type="text" name="bank_name" value="{{ $v('bank_name') }}"></label>
            <label class="f"><span>نام صاحب حساب</span><input type="text" name="account_holder" value="{{ $v('account_holder') }}"></label>
        </div>
        <label class="f"><span>شمارهٔ کارت @if ($user->card_number)<code>{{ $user->masked_card }}</code>@endif</span><input type="text" name="card_number" dir="ltr" inputmode="numeric" autocomplete="off" placeholder="{{ $user->card_number ? 'برای تغییر، شمارهٔ جدید' : '6037 9912 3456 7890' }}"></label>
        <label class="f"><span>شمارهٔ شبا @if ($user->sheba_number)<code>{{ $user->masked_sheba }}</code>@endif</span><input type="text" name="sheba_number" dir="ltr" autocomplete="off" placeholder="{{ $user->sheba_number ? 'برای تغییر، شبای جدید' : 'IR...' }}"></label>
        <label class="f"><span>شمارهٔ حساب @if ($user->account_number)<span class="b b-ok">ثبت شده</span>@endif</span><input type="text" name="account_number" dir="ltr" autocomplete="off"></label>
        @if ($user->card_number || $user->sheba_number || $user->account_number)
            <label class="row small"><input type="checkbox" name="clear_bank" value="1"> حذف اطلاعات بانکی ثبت‌شده</label>
        @endif
    </div>
</div>
<div class="row" style="margin-bottom:20px"><button class="btn pri">ذخیرهٔ پروفایل</button></div>
</form>
@endsection
