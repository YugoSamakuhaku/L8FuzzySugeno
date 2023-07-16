<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

final class CreateRequestSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('request_sales', function (Blueprint $table): void {
            $table->id('id_sale');
            $table->integer('qty_sale');
            $table->bigInteger('total_price');
            $table->date('date_sale');
            $table->enum('status', ['accepted', 'rejected']);
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
        Schema::dropIfExists('request_sales');
    }
}
