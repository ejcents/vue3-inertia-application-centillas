<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'ejcents@email.com'],
            [
                'name' => 'Efren Jacob',
                'password' => bcrypt('password123'),
            ]
        );
    }
}
