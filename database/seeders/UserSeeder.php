<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Create a user
         DB::table('users')->insert([
            'name' => 'John Doe',
            'NI' => '10101010',
            'email' => 'user@example.com',
            'email_verified_at' => now(),
            'password' => Crypt::encryptString('password'),
            'remember_token' => Str::random(10),
        ]);
    }
}
