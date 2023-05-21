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
            $table->date('order_date');
            $table->date('delivery_date');
            $table->unsignedBigInteger('client_id');
            $table->string('order_type');
            $table->integer('quantity');
            $table->string('aroma');
            $table->string('packaging');
            $table->text('details');
            $table->decimal('price', 10, 2);
            $table->decimal('sale', 10, 2);
            $table->decimal('advance_amount', 10, 2);
            $table->string('status');
            $table->string('payment_method');
            $table->string('shipping_address');
            $table->boolean('is_paid');
            $table->boolean('is_shipped');
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('customers');
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
