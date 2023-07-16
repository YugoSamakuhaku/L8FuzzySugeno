<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

final class CreateDetailRequestSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('detail_request_sales', function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger('id_sale');
            $table->unsignedBigInteger('id_product');
            $table->integer('qty');

            $table->foreign('id_sale')->references('id_sale')->on('request_sales')->onDelete('cascade');
            $table->foreign('id_product')->references('id_product')->on('master_products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_request_sales');
    }
}
