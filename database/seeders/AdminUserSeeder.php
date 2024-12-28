<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // admin@gmail.com နှင့် password ထည့်ခြင်း
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'usertype' => 'admin',
            'phone' => '0988777666',
            'address' => 'Yangon',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // သင့် password ကို အတိအကျ ထည့်ပါ azm
        ]);
    }
}
