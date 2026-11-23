<?php

namespace Saas\PlatformConfig\Services;

class BillingCalculatorService
{
    public function __construct(private readonly SettingsService $settings)
    {
    }

    /**
     * محاسبه دقیق صورتحساب با واحد صحیح (ریال / تومان بدون خطای اعشاری float)
     */
    public function calculate(
        int $baseAmount,
        ?string $promoCode = null,
        ?int $overrideDiscountPercent = null,
        ?float $overrideVatRate = null
    ): array {
        $base = max(0, $baseAmount);

        $discountEnabled = (bool) $this->settings->get('discount', 'enabled', true);
        $configuredCode = (string) $this->settings->get('discount', 'promo_code', 'WELCOME10');
        $discountType = (string) $this->settings->get('discount', 'discount_type', 'percentage');
        $discountValue = (float) $this->settings->get('discount', 'discount_value', 10);
        $minOrderAmount = (int) $this->settings->get('discount', 'min_order_amount', 0);
        $maxDiscountAmount = (int) $this->settings->get('discount', 'max_discount_amount', 0);

        $discountAmount = 0;
        $discountStatus = 'بدون تخفیف';

        if ($discountEnabled && $promoCode !== null && $promoCode !== '') {
            if (strcasecmp(trim($promoCode), trim($configuredCode)) !== 0) {
                $discountStatus = 'کد تخفیف نامعتبر است';
            } elseif ($base < $minOrderAmount) {
                $discountStatus = 'مبلغ سفارش کمتر از حداقل خرید است';
            } else {
                $effectiveValue = $overrideDiscountPercent !== null ? (float) $overrideDiscountPercent : $discountValue;

                if ($discountType === 'percentage') {
                    $discountAmount = (int) floor(($base * $effectiveValue) / 100);
                } else {
                    $discountAmount = (int) floor($effectiveValue);
                }

                if ($maxDiscountAmount > 0) {
                    $discountAmount = min($discountAmount, $maxDiscountAmount);
                }

                $discountAmount = min($discountAmount, $base);
                $discountStatus = 'کد تخفیف اعمال شد';
            }
        }

        $afterDiscount = max(0, $base - $discountAmount);

        $vatRate = $overrideVatRate !== null
            ? $overrideVatRate
            : (float) $this->settings->get('billing', 'vat_rate', 10);
        $taxMode = (string) $this->settings->get('billing', 'tax_mode', 'exclusive');
        $taxBasis = (string) $this->settings->get('billing', 'tax_basis', 'after_discount');

        $basisAmount = $taxBasis === 'before_discount' ? $base : $afterDiscount;
        $vatAmount = 0;
        $finalAmount = $afterDiscount;

        if ($vatRate > 0) {
            if ($taxMode === 'exclusive') {
                $vatAmount = (int) round(($basisAmount * $vatRate) / 100);
                $finalAmount = $afterDiscount + $vatAmount;
            } else {
                $vatAmount = (int) round($basisAmount - ($basisAmount / (1 + ($vatRate / 100))));
                $finalAmount = $afterDiscount;
            }
        }

        return [
            'base_amount' => $base,
            'discount_amount' => $discountAmount,
            'discount_status' => $discountStatus,
            'after_discount_amount' => $afterDiscount,
            'vat_rate' => $vatRate,
            'vat_amount' => $vatAmount,
            'final_amount' => $finalAmount,
        ];
    }
}
