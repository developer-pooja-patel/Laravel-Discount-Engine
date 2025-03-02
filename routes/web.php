<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DiscountController;

Route::get('/discount', [DiscountController::class, 'showForm']);
Route::post('/apply-discount', [DiscountController::class, 'applyDiscount'])->name('apply-discount');


Route::get('/', function () {
    return view('welcome');
});
