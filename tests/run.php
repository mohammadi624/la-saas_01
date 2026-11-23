<?php
// php tests/run.php  — تست اعتبارسنجی‌های ایرانی بدون Laravel
require __DIR__.'/../app/Support/IranValidators.php';
use App\Support\IranValidators as V;
$ok = 0; $bad = 0;
$t = function ($n, $c) use (&$ok, &$bad) { if ($c === true) { $ok++; echo "  ✓ $n\n"; } else { $bad++; echo "  ✗ $n\n"; } };
$t('کد ملی معتبر', V::nationalCode('0499370899') && V::nationalCode('۰۴۹۹۳۷۰۸۹۹'));
$t('کد ملی نامعتبر', ! V::nationalCode('0499370898') && ! V::nationalCode('1111111111') && ! V::nationalCode('12345') && ! V::nationalCode(null));
$t('کارت معتبر (Luhn)', V::cardNumber('6037991234567893') && V::cardNumber('6037-9912-3456-7893') && V::cardNumber('۶۰۳۷۹۹۱۲۳۴۵۶۷۸۹۳'));
$t('کارت نامعتبر', ! V::cardNumber('6037991234567894') && ! V::cardNumber('1234'));
$t('شبا معتبر', V::sheba('IR062960000000100324200001') && V::sheba('062960000000100324200001') && V::sheba('ir06 2960 0000 0010 0324 2000 01'));
$t('شبا نامعتبر', ! V::sheba('IR062960000000100324200002') && ! V::sheba('IR12'));
$t('ماسک', V::maskCard('6037997599405223') === '**** **** **** 5223');
echo "\n$ok موفق، $bad ناموفق\n";
exit($bad ? 1 : 0);
