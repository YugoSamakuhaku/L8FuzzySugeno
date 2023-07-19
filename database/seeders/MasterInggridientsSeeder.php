<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\MasterInggridient;
use Illuminate\Database\Seeder;

final class MasterInggridientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $master_inggridients = [
            [
                'name_inggridient' => 'Biji Kopi',
                'qty_inggridient' => 0,
                'unit_inggridient' => 'gr',
                'duration_expired' => '7',
                'time_expired' => 'Month',
            ],
            [
                'name_inggridient' => 'Susu',
                'qty_inggridient' => 0,
                'unit_inggridient' => 'ml',
                'duration_expired' => '6',
                'time_expired' => 'Month',
            ],
            [
                'name_inggridient' => 'Gula',
                'qty_inggridient' => 0,
                'unit_inggridient' => 'gr',
                'duration_expired' => '2',
                'time_expired' => 'Year',
            ],
        ];

        foreach ($master_inggridients as $value) {
            MasterInggridient::create($value);
        }
    }
}
