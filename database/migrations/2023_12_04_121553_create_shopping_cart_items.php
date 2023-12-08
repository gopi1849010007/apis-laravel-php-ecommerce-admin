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
        Schema::create('shopping_cart_items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('qty');
            $table->unsignedBigInteger('cart_id');
            $table->foreign('cart_id')->references('id')->on('shopping_carts');

        $table->unsignedBigInteger('product_item_id');
        $table->foreign('product_item_id')->references('id')->on('product_items');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shopping_cart_items');
    }
};
