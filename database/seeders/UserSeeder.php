<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::firstOrCreate([
            'name'     => 'ADMIN',
			'email'    => 'admin@test.com',
			'password' => Hash::make("password"),
        ]);
        $admin->assignRole('admin');
    }
}
