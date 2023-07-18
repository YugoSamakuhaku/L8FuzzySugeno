<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    // link: https://extendsclass.com/json-to-php.html
    // link: https://tableconvert.com/json-to-json
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        $this->call(MasterProductsSeeder::class);
        $this->call(MasterInggridientsSeeder::class);
        $this->call(ProductInggridientSeeder::class);

        $this->call(RequestSaleSeeder::class);
        $this->call(DetailRequestSaleSeeder::class);

        $this->call(SupplierSeeder::class);
    }
}
