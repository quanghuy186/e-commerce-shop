<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shop_product_discounts', function (Blueprint $table) {
            $table->bigIncrements('id', 20);
            $table->unsignedBigInteger('product_id');
            $table->text('discount_name', 500);
            $table->float('discount_amount');
            $table->boolean('is_fixed'); //giam gia tien co dinh neu = 1 vd: 50k, con = 0 thi giam gia theo %
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->foreign('product_id')->references('id')->on('shop_products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_product_discounts');
    }
};
