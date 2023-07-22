<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

final class CreateDetailPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('detail_purchases', function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger('id_purchase');
            $table->unsignedBigInteger('id_inggridient');
            $table->date('date_expired');
            $table->bigInteger('qty');
            $table->bigInteger('price_inggridient');

            $table->foreign('id_purchase')->references('id_purchase')->on('purchases')->onDelete('cascade');
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
        Schema::dropIfExists('detail_purchases');
    }
}
