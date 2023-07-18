<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

final class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $role = [
            [
                'name_role' => 'Admin',
            ],
            [
                'name_role' => 'Employee',
            ]
        ];

        foreach ($role as $value) {
            Role::create($value);
        }

    }
}
