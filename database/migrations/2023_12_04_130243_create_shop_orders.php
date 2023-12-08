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
        Schema::create('shop_orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('site_users');
            $table->date('order_date');
            $table->unsignedBigInteger('payment_method_id');
            $table->foreign('payment_method_id')->references('id')->on('user_payment_methods');
            $table->unsignedBigInteger('shipping_address_id');
            $table->foreign('shipping_address_id')->references('id')->on('address');
            $table->unsignedBigInteger('shipping_method_id');
            $table->foreign('shipping_method_id')->references('id')->on('shipping_methods');
            $table->float('order_total',5,3);
            $table->unsignedBigInteger('order_status_id');
            $table->foreign('order_status_id')->references('id')->on('order_statuss');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_orders');
    }
};
