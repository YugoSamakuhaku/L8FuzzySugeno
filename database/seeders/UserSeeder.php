<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

final class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::create([
            'fullname' => 'Administrator',
            'username' => 'jono',
            'password' => bcrypt('admin'),
        ]);

        User::factory()->count(10)->create();

    }
}
