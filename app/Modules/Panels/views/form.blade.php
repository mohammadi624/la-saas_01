@extends('sazeh::layouts.dashboard')
@section('title', $panel->exists ? 'ویرایش پنل' : 'پنل جدید')
@section('heading', $panel->exists ? 'ویرایش پنل «'.$panel->title.'»' : 'تعریف پنل جدید')
@section('content')
@php
    $J = \Sazeh\Core\Support\Jalali::class;
    $features = old('features_text', implode("\n", $panel->features ?? []));
    $unlimited = (bool) old('users_unlimited', $panel->users_unlimited);
@endphp
<form method="post" action="{{ $panel->exists ? route('panels.update', $panel) : route('panels.store') }}">
@csrf
@if ($panel->exists) @method('put') @endif
<div class="grid g2">
    <div class="card"><h2>مشخصات</h2>
        <div class="grid g2" style="gap:10px">
            <label class="f"><span>عنوان</span><input type="text" name="title" value="{{ old('title', $panel->title) }}" maxlength="100" required placeholder="پنل حرفه‌ای"></label>
            <label class="f"><span>کد لاتین (یکتا)</span><input type="text" name="code" value="{{ old('code', $panel->code) }}" dir="ltr" maxlength="40" required placeholder="pro"></label>
        </div>
        <label class="f"><span>توضیحات</span><textarea name="description" rows="4" style="width:100%" maxlength="2000">{{ old('description', $panel->description) }}</textarea></label>
        <div class="grid g2" style="gap:10px">
            <label class="f"><span>ترتیب نمایش</span><input type="text" name="sort" value="{{ old('sort', $panel->sort) }}" dir="ltr" inputmode="numeric"></label>
            <label class="row" style="margin-top:22px"><input type="hidden" name="is_active" value="0"><input type="checkbox" name="is_active" value="1" @checked(old('is_active', $panel->is_active))> فعال (قابل فروش)</label>
        </div>
    </div>

    <div class="card"><h2>قیمت و ظرفیت</h2>
        <div class="grid g2" style="gap:10px">
            <label class="f"><span>قیمت ماهانه (تومان)</span><input type="text" name="price_monthly" value="{{ old('price_monthly', $panel->price_monthly) }}" dir="ltr" inputmode="numeric" placeholder="250000"></label>
            <label class="f"><span>قیمت سالانه (تومان)</span><input type="text" name="price_yearly" value="{{ old('price_yearly', $panel->price_yearly) }}" dir="ltr" inputmode="numeric" placeholder="2500000"></label>
        </div>
        <p class="small muted" style="margin:-4px 0 10px">ارقام فارسی و جداکننده (۱٬۲۰۰٬۰۰۰) هم پذیرفته می‌شود.</p>
        <label class="row" style="margin-bottom:8px"><input type="hidden" name="users_unlimited" value="0"><input type="checkbox" name="users_unlimited" value="1" id="uu" @checked($unlimited) onchange="document.getElementById('mu').disabled=this.checked"> تعداد کاربران نامحدود</label>
        <label class="f"><span>سقف کاربران خریدار (۰ = تک‌کاربره؛ خود خریدار شمرده نمی‌شود)</span><input type="text" name="max_users" id="mu" value="{{ old('max_users', $panel->max_users) }}" dir="ltr" inputmode="numeric" @disabled($unlimited)></label>
    </div>

    <div class="card" style="grid-column:1/-1"><h2>امکانات</h2><p class="desc">هر خط یک امکان (حداکثر ۳۰ مورد). در صفحهٔ خرید به‌صورت فهرست نمایش داده می‌شود.</p>
        <textarea name="features_text" rows="6" style="width:100%" placeholder="دامنهٔ اختصاصی&#10;گواهی SSL رایگان&#10;پشتیبانی تیکتی">{{ $features }}</textarea>
    </div>
</div>
<div class="row" style="margin-bottom:20px">
    <button class="btn pri">{{ $panel->exists ? 'ذخیرهٔ تغییرات' : 'ساخت پنل' }}</button>
    <a class="btn" href="{{ route('panels.index') }}">انصراف</a>
    @if ($panel->exists)<span class="small muted">آخرین تغییر: {{ $J::format($panel->updated_at) }}</span>@endif
</div>
</form>
@endsection
