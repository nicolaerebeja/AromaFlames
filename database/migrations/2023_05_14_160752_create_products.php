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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('category_id');
            $table->boolean('stock');
            $table->unsignedBigInteger('description_id');
            $table->text('info');
            $table->string('images');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('category_product');
            $table->foreign('description_id')->references('id')->on('description_product');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
