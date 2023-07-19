<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\DetailPurchase;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DetailPurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $detail_purchases = [
            [
                "id_purchase" => 1,
                "id_inggridient" => 1,
                "date_expired" => Carbon::create("2022", "02", "28"),
                "qty" => 35000
            ],
            [
                "id_purchase" => 1,
                "id_inggridient" => 2,
                "date_expired" => Carbon::create("2022", "01", "30"),
                "qty" => 24000
            ],
            [
                "id_purchase" => 1,
                "id_inggridient" => 3,
                "date_expired" => Carbon::create("2023", "07", "30"),
                "qty" => 10000
            ],
            [
                "id_purchase" => 2,
                "id_inggridient" => 1,
                "date_expired" => Carbon::create("2022", "03", "31"),
                "qty" => 27000
            ],
            [
                "id_purchase" => 2,
                "id_inggridient" => 2,
                "date_expired" => Carbon::create("2022", "02", "28"),
                "qty" => 20000
            ],
            [
                "id_purchase" => 2,
                "id_inggridient" => 3,
                "date_expired" => Carbon::create("2023", "08", "31"),
                "qty" => 8000
            ],
            [
                "id_purchase" => 3,
                "id_inggridient" => 1,
                "date_expired" => Carbon::create("2022", "04", "30"),
                "qty" => 26000
            ],
            [
                "id_purchase" => 3,
                "id_inggridient" => 2,
                "date_expired" => Carbon::create("2022", "03", "30"),
                "qty" => 18000
            ],
            [
                "id_purchase" => 3,
                "id_inggridient" => 3,
                "date_expired" => Carbon::create("2023", "09", "30"),
                "qty" => 7000
            ],
            [
                "id_purchase" => 4,
                "id_inggridient" => 1,
                "date_expired" => Carbon::create("2022", "05", "30"),
                "qty" => 32000
            ],
            [
                "id_purchase" => 4,
                "id_inggridient" => 2,
                "date_expired" => Carbon::create("2022", "04", "30"),
                "qty" => 23000
            ],
            [
                "id_purchase" => 4,
                "id_inggridient" => 3,
                "date_expired" => Carbon::create("2023", "10", "30"),
                "qty" => 9000
            ],
            [
                "id_purchase" => 5,
                "id_inggridient" => 1,
                "date_expired" => Carbon::create("2022", "06", "30"),
                "qty" => 32000
            ],
            [
                "id_purchase" => 5,
                "id_inggridient" => 2,
                "date_expired" => Carbon::create("2022", "05", "30"),
                "qty" => 23000
            ],
            [
                "id_purchase" => 5,
                "id_inggridient" => 3,
                "date_expired" => Carbon::create("2023", "11", "30"),
                "qty" => 9000
            ],
            [
                "id_purchase" => 6,
                "id_inggridient" => 1,
                "date_expired" => Carbon::create("2022", "07", "31"),
                "qty" => 30000
            ],
            [
                "id_purchase" => 6,
                "id_inggridient" => 2,
                "date_expired" => Carbon::create("2022", "06", "30"),
                "qty" => 20000
            ],
            [
                "id_purchase" => 6,
                "id_inggridient" => 3,
                "date_expired" => Carbon::create("2023", "12", "31"),
                "qty" => 8000
            ],
            [
                "id_purchase" => 7,
                "id_inggridient" => 1,
                "date_expired" => Carbon::create("2022", "08", "30"),
                "qty" => 27000
            ],
            [
                "id_purchase" => 7,
                "id_inggridient" => 2,
                "date_expired" => Carbon::create("2022", "07", "30"),
                "qty" => 19000
            ],
            [
                "id_purchase" => 7,
                "id_inggridient" => 3,
                "date_expired" => Carbon::create("2024", "01", "30"),
                "qty" => 8000
            ],
            [
                "id_purchase" => 8,
                "id_inggridient" => 1,
                "date_expired" => Carbon::create("2022", "09", "28"),
                "qty" => 25000
            ],
            [
                "id_purchase" => 8,
                "id_inggridient" => 2,
                "date_expired" => Carbon::create("2022", "08", "28"),
                "qty" => 18000
            ],
            [
                "id_purchase" => 8,
                "id_inggridient" => 3,
                "date_expired" => Carbon::create("2024", "02", "28"),
                "qty" => 7000
            ],
            [
                "id_purchase" => 9,
                "id_inggridient" => 1,
                "date_expired" => Carbon::create("2022", "10", "31"),
                "qty" => 34000
            ],
            [
                "id_purchase" => 9,
                "id_inggridient" => 2,
                "date_expired" => Carbon::create("2022", "09", "30"),
                "qty" => 23000
            ],
            [
                "id_purchase" => 9,
                "id_inggridient" => 3,
                "date_expired" => Carbon::create("2024", "03", "31"),
                "qty" => 9000
            ],
            [
                "id_purchase" => 10,
                "id_inggridient" => 1,
                "date_expired" => Carbon::create("2022", "11", "30"),
                "qty" => 28000
            ],
            [
                "id_purchase" => 10,
                "id_inggridient" => 2,
                "date_expired" => Carbon::create("2022", "10", "30"),
                "qty" => 20000
            ],
            [
                "id_purchase" => 10,
                "id_inggridient" => 3,
                "date_expired" => Carbon::create("2024", "04", "30"),
                "qty" => 8000
            ],
            [
                "id_purchase" => 11,
                "id_inggridient" => 1,
                "date_expired" => Carbon::create("2022", "12", "31"),
                "qty" => 31000
            ],
            [
                "id_purchase" => 11,
                "id_inggridient" => 2,
                "date_expired" => Carbon::create("2022", "11", "30"),
                "qty" => 22000
            ],
            [
                "id_purchase" => 11,
                "id_inggridient" => 3,
                "date_expired" => Carbon::create("2024", "05", "31"),
                "qty" => 9000
            ],
            [
                "id_purchase" => 12,
                "id_inggridient" => 1,
                "date_expired" => Carbon::create("2023", "01", "30"),
                "qty" => 30000
            ],
            [
                "id_purchase" => 12,
                "id_inggridient" => 2,
                "date_expired" => Carbon::create("2022", "12", "30"),
                "qty" => 21000
            ],
            [
                "id_purchase" => 12,
                "id_inggridient" => 3,
                "date_expired" => Carbon::create("2024", "06", "30"),
                "qty" => 8000
            ]
        ];

        foreach ($detail_purchases as $value) {
            DetailPurchase::create($value);
        }
    }
}
