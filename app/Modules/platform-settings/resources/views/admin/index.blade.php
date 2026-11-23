
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>مدیریت پیکربندی پلتفرم SaaS</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Tahoma, sans-serif;
            background: #f4f6fb;
            color: #0f172a;
            margin: 0;
            padding: 24px;
            line-height: 1.8;
        }

        .container {
            max-width: 1250px;
            margin: 0 auto;
        }

        .card {
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 18px;
            overflow-x: auto;
        }

        h1 {
            margin: 0 0 8px;
            font-size: 22px;
        }

        h2 {
            margin: 0 0 16px;
            font-size: 17px;
            color: #4338ca;
        }

        h3 {
            font-size: 15px;
            margin: 0 0 12px;
            color: #334155;
        }

        p {
            margin-top: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 650px;
        }

        th,
        td {
            text-align: right;
            padding: 10px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 13px;
            vertical-align: top;
        }

        th {
            background: #f8fafc;
            color: #475569;
            white-space: nowrap;
        }

        code {
            direction: ltr;
            display: inline-block;
            background: #f1f5f9;
            padding: 2px 6px;
            border-radius: 5px;
            font-size: 12px;
        }

        .badge {
            display: inline-block;
            padding: 3px 9px;
            border-radius: 12px;
            font-size: 11px;
            background: #eef2ff;
            color: #4338ca;
            font-weight: bold;
        }

        .status {
            padding: 12px 16px;
            margin-bottom: 16px;
            border-radius: 8px;
            background: #ecfdf5;
            border: 1px solid #a7f3d0;
            color: #065f46;
        }

        .muted {
            color: #64748b;
            font-size: 12px;
        }

        .group-card {
            border: 1px solid #e2e8f0;
            border-radius: 9px;
            padding: 16px;
            margin-top: 14px;
        }

        .field-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 12px;
        }

        .field-item {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 12px;
            min-width: 0;
        }

        .field-label {
            font-weight: bold;
            font-size: 13px;
            margin-bottom: 5px;
        }

        .field-value {
            overflow-wrap: anywhere;
            color: #334155;
            font-size: 13px;
        }

        .empty {
            color: #64748b;
            text-align: center;
            padding: 20px;
        }

        @media (max-width: 640px) {
            body {
                padding: 12px;
            }

            .card {
                padding: 14px;
            }
        }
    </style>
</head>

<body>
<div class="container">

    {{-- سربرگ --}}
    <section class="card">
        <h1>مرکز مدیریت پیکربندی پلتفرم SaaS</h1>

        <p class="muted">
            نمایش تنظیمات، سیاست فیلدهای ثبت‌نام و سوابق ممیزی
        </p>
    </section>

    {{-- پیام عملیات --}}
    @if(session('status'))
        <div class="status">
            {{ session('status') }}
        </div>
    @endif

    {{-- خطاهای اعتبارسنجی --}}
    @if($errors->any())
        <section class="card">
            <h2>خطاهای ثبت اطلاعات</h2>

            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </section>
    @endif

    {{-- تنظیمات گروه‌بندی‌شده --}}
    <section class="card">
        <h2>گروه‌های تنظیمات پلتفرم</h2>

        @forelse($groups as $groupKey => $group)
            <div class="group-card">

                <h3>
                    {{ $group['label'] ?? $groupKey }}
                </h3>

                <div class="muted">
                    کلید گروه:
                    <code>{{ $groupKey }}</code>
                </div>

                @if(!empty($group['description']))
                    <p class="muted">
                        {{ $group['description'] }}
                    </p>
                @endif

                <div class="field-list">
                    @forelse(($group['fields'] ?? []) as $key => $meta)
                        @php
                            $fieldType = $meta['type'] ?? 'string';

                            $isSecret = $fieldType === 'password';

                            $fieldValue = data_get(
                                $values,
                                $groupKey . '.' . $key,
                                $meta['default'] ?? ''
                            );
                        @endphp

                        <div class="field-item">
                            <div class="field-label">
                                {{ $meta['label'] ?? $key }}
                            </div>

                            <div class="muted">
                                <code>{{ $key }}</code>
                            </div>

                            <div class="field-value">
                                @if($isSecret)
                                    ********
                                    <span class="muted">
                                        (مقدار محرمانه نمایش داده نمی‌شود)
                                    </span>
                                @elseif(is_bool($fieldValue))
                                    {{ $fieldValue ? 'فعال' : 'غیرفعال' }}
                                @elseif(is_array($fieldValue) || is_object($fieldValue))
                                    <code>
                                        {{ json_encode(
                                            $fieldValue,
                                            JSON_UNESCAPED_UNICODE
                                        ) }}
                                    </code>
                                @elseif($fieldValue === null || $fieldValue === '')
                                    <span class="muted">خالی</span>
                                @else
                                    {{ $fieldValue }}
                                @endif
                            </div>

                            @if(!empty($meta['description']))
                                <p class="muted">
                                    {{ $meta['description'] }}
                                </p>
                            @endif
                        </div>
                    @empty
                        <div class="empty">
                            این گروه فیلدی ندارد.
                        </div>
                    @endforelse
                </div>
            </div>
        @empty
            <div class="empty">
                هیچ گروه تنظیماتی تعریف نشده است.
            </div>
        @endforelse
    </section>

    {{-- سیاست فیلدهای ثبت‌نام --}}
    <section class="card">
        <h2>سیاست فیلدهای فرم ثبت‌نام</h2>

        <table>
            <thead>
                <tr>
                    <th>فیلد</th>
                    <th>کلید فنی</th>
                    <th>وضعیت</th>
                    <th>ترتیب نمایش</th>
                </tr>
            </thead>

            <tbody>
                @forelse($registrationFields as $field)
                    @php
                        $fieldState = $field->state instanceof \BackedEnum
                            ? $field->state->value
                            : $field->state;

                        $stateLabels = [
                            'required' => 'اجباری',
                            'optional' => 'اختیاری',
                            'hidden' => 'عدم نمایش',
                        ];
                    @endphp

                    <tr>
                        <td>{{ $field->field_label }}</td>

                        <td>
                            <code>{{ $field->field_key }}</code>
                        </td>

                        <td>
                            <span class="badge">
                                {{ $stateLabels[$fieldState] ?? $fieldState }}
                            </span>
                        </td>

                        <td>{{ $field->sort_order }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="empty">
                            هنوز فیلدی برای ثبت‌نام تعریف نشده است.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </section>

    {{-- تاریخچه ممیزی --}}
    <section class="card">
        <h2>آخرین لاگ‌های ممیزی (Audit Log)</h2>

        <p class="muted">
            حداکثر ۱۰۰ تغییر آخر تنظیمات پلتفرم نمایش داده می‌شود.
        </p>

        <table>
            <thead>
                <tr>
                    <th>زمان</th>
                    <th>شناسه کاربر</th>
                    <th>نقش</th>
                    <th>IP</th>
                    <th>گروه</th>
                    <th>کلید</th>
                    <th>مقدار قبلی</th>
                    <th>مقدار جدید</th>
                    <th>دلیل</th>
                </tr>
            </thead>

            <tbody>
                @forelse($auditLogs as $log)
                    <tr>
                        <td>
                            {{ $log->created_at?->format('Y-m-d H:i:s') ?? '—' }}
                        </td>

                        <td>{{ $log->actor_id ?? '—' }}</td>

                        <td>{{ $log->actor_role ?? '—' }}</td>

                        <td>
                            <code>{{ $log->ip_address ?? '—' }}</code>
                        </td>

                        <td>{{ $log->group_name }}</td>

                        <td>
                            <code>{{ $log->setting_key }}</code>
                        </td>

                        <td>{{ $log->old_value_masked ?? '—' }}</td>

                        <td>{{ $log->new_value_masked ?? '—' }}</td>

                        <td>{{ $log->reason ?? '—' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="empty">
                            هنوز تغییری در تنظیمات ثبت نشده است.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </section>

</div>
</body>
</html>
