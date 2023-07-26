<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

final class CreateInggridientsHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('inggridients_history', function (Blueprint $table): void {
            $table->id('id_history');
            $table->unsignedBigInteger('id_inggridient');
            $table->date('date');
            $table->bigInteger('stok_in');
            $table->bigInteger('stok_out');
            $table->bigInteger('last_stok');

            $table->foreign('id_inggridient')->references('id_inggridient')->on('master_inggridients')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('inggridients_history');
    }
}
