<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

final class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('purchases', function (Blueprint $table): void {
            $table->id('id_purchase');
            $table->unsignedBigInteger('id_supplier');
            $table->bigInteger('qty_purchase_inggridients');
            $table->bigInteger('total_price');
            $table->date('date_purchase');
            $table->timestamps();

            $table->foreign('id_supplier')->references('id_supplier')->on('suppliers')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
}
