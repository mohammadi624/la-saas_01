@extends('sazeh::layouts.dashboard')
@section('title', 'تعریف پنل')
@section('heading', 'تعریف پنل')
@section('content')
@php($J = \Sazeh\Core\Support\Jalali::class)
<div class="grid g4" style="margin-bottom:16px">
    <div class="stat"><b>{{ $J::digits($counts['all']) }}</b><span>کل پنل‌ها</span></div>
    <div class="stat"><b>{{ $J::digits($counts['active']) }}</b><span>فعال (قابل فروش)</span></div>
    <div class="stat"><b>{{ $J::digits($counts['all'] - $counts['active']) }}</b><span>غیرفعال</span></div>
    <div class="stat"><b>{{ $canManage ? 'مشاهده و ویرایش' : 'فقط مشاهده' }}</b><span>دسترسی شما</span></div>
</div>

<div class="card">
    <div class="hd">
        <div><h2>پنل‌های تعریف‌شده</h2><p class="desc" style="margin:0">هر پنل یک بستهٔ قابل فروش به خریداران است.</p></div>
        <form method="get" class="row">
            <input type="text" name="q" value="{{ $q }}" placeholder="جستجوی عنوان یا کد">
            <select name="status"><option value="">همه</option><option value="active" @selected($status === 'active')>فعال</option><option value="inactive" @selected($status === 'inactive')>غیرفعال</option></select>
            <button class="btn sm">فیلتر</button>
        </form>
        @if ($canManage)<a class="btn pri" href="{{ route('panels.create') }}">+ پنل جدید</a>@endif
    </div>

    <div class="tw"><table>
        <thead><tr><th>ترتیب</th><th>پنل</th><th>قیمت ماهانه</th><th>قیمت سالانه</th><th>کاربران</th><th>امکانات</th><th>وضعیت</th>@if ($canManage)<th></th>@endif</tr></thead>
        <tbody>
        @forelse ($panels as $p)
            <tr>
                <td>{{ $J::digits($p->sort) }}</td>
                <td><b>{{ $p->title }}</b> <code>{{ $p->code }}</code>
                    @if ($p->description)<div class="small muted">{{ \Illuminate\Support\Str::limit($p->description, 80) }}</div>@endif</td>
                <td>{{ $J::money($p->price_monthly) }} <span class="small muted">تومان</span></td>
                <td>{{ $J::money($p->price_yearly) }} <span class="small muted">تومان</span>
                    @if ($p->yearlyDiscount() > 0)<div><span class="b b-ok">{{ $J::digits($p->yearlyDiscount()) }}٪ تخفیف</span></div>@endif</td>
                <td>{{ $J::digits($p->usersLabel()) }}</td>
                <td class="small">{{ $J::digits(count($p->features ?? [])) }} مورد</td>
                <td>{!! $p->is_active ? '<span class="b b-ok">فعال</span>' : '<span class="b b-mut">غیرفعال</span>' !!}</td>
                @if ($canManage)
                <td><div class="row">
                    <a class="btn sm" href="{{ route('panels.edit', $p) }}">ویرایش</a>
                    <form method="post" action="{{ route('panels.toggle', $p) }}">@csrf<button class="btn sm">{{ $p->is_active ? 'غیرفعال' : 'فعال' }}</button></form>
                    <form method="post" action="{{ route('panels.destroy', $p) }}" onsubmit="return confirm('پنل «{{ $p->title }}» حذف شود؟')">@csrf @method('delete')<button class="btn sm dng">حذف</button></form>
                </div></td>
                @endif
            </tr>
        @empty
            <tr><td colspan="8" class="muted" style="text-align:center;padding:24px">هنوز پنلی تعریف نشده است.@if ($canManage) <a href="{{ route('panels.create') }}">اولین پنل را بسازید</a>.@endif</td></tr>
        @endforelse
        </tbody>
    </table></div>
    <div class="pager">{{ $panels->links() }}</div>
</div>
@endsection
