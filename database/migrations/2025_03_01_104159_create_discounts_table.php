<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('discounts', function (Blueprint $table) {
        $table->id();
        $table->enum('discount_type', ['percentage', 'fixed']);
        $table->decimal('amount', 10, 2);
        $table->decimal('min_cart_total', 10, 2)->nullable();
        $table->date('active_from')->nullable();
        $table->date('active_to')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
