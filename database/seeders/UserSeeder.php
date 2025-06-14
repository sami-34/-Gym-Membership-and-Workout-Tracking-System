<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Admin
        User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]
            );

            // Clear unique faker cache to be safe
            fake()->unique(true);
        
        //Trainer
        User::factory()->count(2)->create(['role' => 'trainer']);
        
        //Member
        User::factory()->count(5)->create(['role' => 'member']);

            
    }
}
