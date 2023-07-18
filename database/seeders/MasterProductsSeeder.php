<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\MasterProduct;
use Illuminate\Database\Seeder;

final class MasterProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $master_products = [
            [
                'name_product' => 'Kopi Susu',
                'price_product' => 22000,
                'stock_product' => 0,
            ],

            [
                'name_product' => 'Kopi Americano',
                'price_product' => 18000,
                'stock_product' => 0,
            ],
            [
                'name_product' => 'Kopi Kapucino',
                'price_product' => 25000,
                'stock_product' => 0,
            ],
        ];

        foreach ($master_products as $value) {
            MasterProduct::create($value);
        }
    }
}
