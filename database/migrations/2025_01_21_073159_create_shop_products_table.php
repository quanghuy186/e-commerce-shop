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
        Schema::create('shop_products', function (Blueprint $table) {
            $table->bigIncrements('id', 20);
            $table->string('product_code', 25);
            $table->string('product_name', 250);
            $table->text('image');
            $table->text('short_description', 500);
            $table->text('description');
            $table->decimal('standard_cost', 16, 0); //gia ban ra
            $table->decimal('list_price', 16, 0); //gia nhap vao
            $table->integer('quantity_per_unit');
            $table->boolean('discontinued');
            $table->boolean('is_featured');
            $table->boolean('is_new');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('supplier_id');
            $table->foreign('category_id')->references('id')->on('shop_categories');
            $table->foreign('supplier_id')->references('id')->on('shop_suppliers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_products');
    }
};