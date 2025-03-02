<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Discount;
use Carbon\Carbon;

class DiscountSeeder extends Seeder
{
    public function run()
    {
        DB::table('discounts')->insert([
            'discount_type' => 'percentage',
            'amount' => 12, // 10% discount
            'min_cart_total' => 50,
            'active_from' => Carbon::now(),
            'active_to' => Carbon::now()->addMonths(1),
        ]);
        
        /*DB::table('discounts')->insert([
            'discount_type' => 'fixed',
            'amount' => 0, // $20 discount
            'min_cart_total' => 100,
            'active_from' => Carbon::now(),
            'active_to' => Carbon::now()->addMonths(1),
        ]);*/
   }
}
