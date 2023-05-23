<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Create a Dosen
       DB::table('dosens')->insert([
        'name' => 'Dosen',
        'NID' => '987654321',
        'email' => 'dosen@example.com',
        'email_verified_at' => now(),
        'password' => Crypt::encryptString('password'),
        'remember_token' => Str::random(10),
    ]);
    }
}
