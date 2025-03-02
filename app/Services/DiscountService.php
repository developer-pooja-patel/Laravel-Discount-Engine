<?php

namespace App\Services;

use App\Models\Discount;
use Carbon\Carbon;

class DiscountService
{
    public function applyDiscount($cartTotal)
    {
        $today = Carbon::today();
        $discounts = Discount::where('active_from', '<=', $today)
            ->where('active_to', '>=', $today)
            ->where('min_cart_total', '<=', $cartTotal)
            ->get();

        $discountAmount = 0;
        foreach ($discounts as $discount) {
            if ($discount->discount_type == 'percentage') {
                $discountAmount += ($cartTotal * $discount->amount) / 100;
            } else {
                $discountAmount += $discount->amount;
            }
        }

        return max(0, $cartTotal - $discountAmount);
    }
}
