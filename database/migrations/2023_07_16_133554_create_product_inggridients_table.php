<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

final class CreateProductInggridientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('product_inggridients', function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger('id_product');
            $table->unsignedBigInteger('id_inggridient');
            $table->integer('usage_amount');

            $table->foreign('id_product')->references('id_product')->on('master_products')->onDelete('cascade');
            $table->foreign('id_inggridient')->references('id_inggridient')->on('master_inggridients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('product_inggridient');
    }
}
