<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Purchase;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $purchases = [
            [
                "id_purchase" => 1,
                "id_supplier" => 4,
                "qty_purchase_inggridients" => 3,
                "total_price" => 3960000,
                "date_purchase" => Carbon::create("2021", "07", "30")
            ],
            [
                "id_purchase" => 2,
                "id_supplier" => 1,
                "qty_purchase_inggridients" => 3,
                "total_price" => 3120000,
                "date_purchase" => Carbon::create("2021", "08", "31")
            ],
            [
                "id_purchase" => 3,
                "id_supplier" => 3,
                "qty_purchase_inggridients" => 3,
                "total_price" => 2940000,
                "date_purchase" => Carbon::create("2021", "09", "30")
            ],
            [
                "id_purchase" => 4,
                "id_supplier" => 6,
                "qty_purchase_inggridients" => 3,
                "total_price" => 3660000,
                "date_purchase" => Carbon::create("2021", "10", "30")
            ],
            [
                "id_purchase" => 5,
                "id_supplier" => 2,
                "qty_purchase_inggridients" => 3,
                "total_price" => 3660000,
                "date_purchase" => Carbon::create("2021", "11", "30")
            ],
            [
                "id_purchase" => 6,
                "id_supplier" => 1,
                "qty_purchase_inggridients" => 3,
                "total_price" => 3360000,
                "date_purchase" => Carbon::create("2021", "12", "31")
            ],
            [
                "id_purchase" => 7,
                "id_supplier" => 2,
                "qty_purchase_inggridients" => 3,
                "total_price" => 3080000,
                "date_purchase" => Carbon::create("2022", "01", "30")
            ],
            [
                "id_purchase" => 8,
                "id_supplier" => 3,
                "qty_purchase_inggridients" => 3,
                "total_price" => 2860000,
                "date_purchase" => Carbon::create("2022", "02", "28")
            ],
            [
                "id_purchase" => 9,
                "id_supplier" => 9,
                "qty_purchase_inggridients" => 3,
                "total_price" => 3820000,
                "date_purchase" => Carbon::create("2022", "03", "31")
            ],
            [
                "id_purchase" => 10,
                "id_supplier" => 2,
                "qty_purchase_inggridients" => 3,
                "total_price" => 3200000,
                "date_purchase" => Carbon::create("2022", "04", "30")
            ],
            [
                "id_purchase" => 11,
                "id_supplier" => 7,
                "qty_purchase_inggridients" => 3,
                "total_price" => 3540000,
                "date_purchase" => Carbon::create("2022", "05", "31")
            ],
            [
                "id_purchase" => 12,
                "id_supplier" => 6,
                "qty_purchase_inggridients" => 3,
                "total_price" => 3400000,
                "date_purchase" => Carbon::create("2022", "06", "30")
            ]
        ];

        foreach ($purchases as $value) {
            Purchase::create($value);
        }
    }
}
