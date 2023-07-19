<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

final class CreateMasterInggridientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('master_inggridients', function (Blueprint $table): void {
            $table->id('id_inggridient');
            $table->String('name_inggridient');
            $table->integer('qty_inggridient');
            $table->String('unit_inggridient');
            $table->integer('duration_expired');
            $table->enum('time_expired', ['Day', 'Month', 'Year']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('master_inggridients');
    }
}
