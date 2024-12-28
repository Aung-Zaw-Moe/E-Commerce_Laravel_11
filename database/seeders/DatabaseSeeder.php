<?php

namespace Database\Seeders;

use App\Http\Middleware\Admin;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'usertype' => 'user',
            'phone' => '0988777999',
            'address' => 'Mandalay',
        ]);
         // Admin user seeder ကို run လုပ်ခြင်း azm
         $this->call(AdminUserSeeder::class);
    }
}
