<?php

namespace App\Support;

/** اعتبارسنجی‌های ایرانی — خالص PHP و قابل تست بدون Laravel */
final class IranValidators
{
    public static function digits(?string $s): string
    {
        $s = str_replace(['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'], range(0, 9), (string) $s);
        $s = str_replace(['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'], range(0, 9), $s);

        return $s;
    }

    /** کد ملی ۱۰ رقمی با رقم کنترل */
    public static function nationalCode(?string $code): bool
    {
        $c = self::digits(trim((string) $code));
        if (! preg_match('/^\d{10}$/', $c) || preg_match('/^(\d)\1{9}$/', $c)) {
            return false;
        }
        $sum = 0;
        for ($i = 0; $i < 9; $i++) {
            $sum += (int) $c[$i] * (10 - $i);
        }
        $r = $sum % 11;
        $check = (int) $c[9];

        return $r < 2 ? $check === $r : $check === 11 - $r;
    }

    /** شمارهٔ کارت ۱۶ رقمی (الگوریتم Luhn) */
    public static function cardNumber(?string $card): bool
    {
        $c = preg_replace('/[\s\-]/', '', self::digits((string) $card));
        if (! preg_match('/^\d{16}$/', $c)) {
            return false;
        }
        $sum = 0;
        for ($i = 0; $i < 16; $i++) {
            $d = (int) $c[$i];
            if ($i % 2 === 0) {
                $d *= 2;
                if ($d > 9) {
                    $d -= 9;
                }
            }
            $sum += $d;
        }

        return $sum % 10 === 0;
    }

    /** شبا را به قالب IR + ۲۴ رقم نرمال می‌کند؛ نامعتبر ← null */
    public static function normalizeSheba(?string $sheba): ?string
    {
        $s = strtoupper(preg_replace('/[\s\-]/', '', self::digits((string) $sheba)));
        if (preg_match('/^\d{24}$/', $s)) {
            $s = 'IR'.$s;
        }

        return preg_match('/^IR\d{24}$/', $s) ? $s : null;
    }

    /** شبا با کنترل mod-97 */
    public static function sheba(?string $sheba): bool
    {
        $s = self::normalizeSheba($sheba);
        if (! $s) {
            return false;
        }
        $rearranged = substr($s, 4).'1827'.substr($s, 2, 2); // I=18, R=27
        $mod = 0;
        foreach (str_split($rearranged) as $ch) {
            $mod = ($mod * 10 + (int) $ch) % 97;
        }

        return $mod === 1;
    }

    public static function maskCard(?string $card): string
    {
        $c = preg_replace('/\D/', '', (string) $card);

        return strlen($c) >= 4 ? '**** **** **** '.substr($c, -4) : '';
    }

    public static function maskSheba(?string $sheba): string
    {
        $s = (string) $sheba;

        return strlen($s) >= 6 ? 'IR** **** **** **** **** '.substr($s, -4) : '';
    }
}
