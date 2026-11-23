<?php

namespace App\Modules\Panels\Models;

/** منطق خالص ماژول (بدون Laravel؛ قابل تست مستقل) */
final class PanelRules
{
    public static function usersLabel(bool $unlimited, int $max): string
    {
        if ($unlimited) {
            return 'نامحدود';
        }

        return $max === 0 ? 'تک‌کاربره' : $max.' کاربر';
    }

    public static function yearlyDiscount(int $monthly, int $yearly): int
    {
        if ($monthly <= 0 || $yearly <= 0) {
            return 0;
        }
        $full = $monthly * 12;

        return $yearly >= $full ? 0 : (int) round(($full - $yearly) * 100 / $full);
    }

    /** «۱٬۲۰۰٬۰۰۰ تومان» یا «12,000» ← 1200000 */
    public static function parseAmount(?string $s): ?int
    {
        $s = str_replace(['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹', '٬', ',', '،', ' ', 'تومان'],
            ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '', '', '', '', ''], trim((string) $s));
        if ($s === '') {
            return null;
        }

        return ctype_digit($s) ? (int) $s : -1; // -1 ← نامعتبر (اعتبارسنجی رد می‌کند)
    }

    /** متن چندخطی ← فهرست امکانات (بدون خط خالی و تکراری) */
    public static function parseFeatures(?string $text): array
    {
        $lines = preg_split('/\r\n|\r|\n/', (string) $text) ?: [];
        $out = [];
        foreach ($lines as $l) {
            $l = trim(preg_replace('/^[\-\*•\s]+/u', '', $l));
            if ($l !== '' && ! in_array($l, $out, true)) {
                $out[] = mb_substr($l, 0, 150);
            }
        }

        return array_slice($out, 0, 30);
    }
}
