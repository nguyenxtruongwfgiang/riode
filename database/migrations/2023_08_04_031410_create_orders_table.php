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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('product_id');
            $table->foreignId('color_id');
            $table->foreignId('shipping_id');
            $table->integer('quantity');
            $table->float('total_amount');
            $table->text('address');
            $table->string('phone');
            $table->enum('payment_status', ['paid', 'unpaid'])->default('unpaid');
            $table->enum('payment_method', ['cash_on_delivery', 'banking', 'paypal'])->default('cash_on_delivery');
            $table->enum('status', ['ordered', 'process', 'delivered', 'canceled'])->default('ordered');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
