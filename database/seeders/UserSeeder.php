<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create specific admin user Marco
        User::factory()->create([
            'name' => 'marco',
            'email' => 'marcopala@gmail.com',
            'password' => Hash::make('marcopala'),
            'role' => 'admin',
        ]);

        // Create specific admin user Alice
        User::factory()->create([
            'name' => 'alice',
            'email' => 'alicealfa@gmail.com',
            'password' => Hash::make('alicealfa'),
            'role' => 'admin',
        ]);

        // Create 5 additional random users
        User::factory(5)->create();
    }
}
