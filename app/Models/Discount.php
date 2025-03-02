<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = [
        'discount_type',
        'amount',
        'min_cart_total',
        'active_from',
        'active_to',
    ];

    // You can also add any custom methods or relationships here
}
