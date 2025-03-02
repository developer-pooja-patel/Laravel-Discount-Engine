<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function showForm()
    {
        return view('discount-form');
    }

    public function applyDiscount(Request $request)
    {

$request->items = explode(',', $request->items);

        // Validate the cart total and items
        $request->validate([
            'cart_total' => 'required|numeric|min:0',
        ]);

        // Find applicable discounts
        $discounts = Discount::where('active_from', '<=', now())
            ->where('active_to', '>=', now())
            ->get();

        $totalDiscount = 0;
        foreach ($discounts as $discount) {
            if ($request->cart_total >= $discount->min_cart_total) {
                if ($discount->discount_type == 'percentage') {
                    $totalDiscount += ($request->cart_total * $discount->amount / 100);
		    $discount_percentage = $discount->amount;
                } elseif ($discount->discount_type == 'fixed_amount') {
                    $totalDiscount += $discount->amount;
		    $discount_percentage = $discount->amount;
                }
            }
        }
	
	$subtotal = $request->cart_total;

        // Calculate the final cart total after applying discounts
        $finalTotal = $request->cart_total - $totalDiscount;

        return view('discount-result', compact('finalTotal', 'totalDiscount','discount_percentage','subtotal'));
    }
}
