<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create a test user
        User::create([
            'name' => 'Test User',
            'email' => 'demo@noteful.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password123'),
        ]);
    }
}
