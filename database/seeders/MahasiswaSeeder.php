<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Create a Mahasiswa
       DB::table('mahasiswas')->insert([
        'name' => 'Mahasiswa',
        'NIM' => 'NIM135798642',
        'email' => 'mahasiswa@example.com',
        'email_verified_at' => now(),
        'password' => Hash::make('password'),        
        'remember_token' => Str::random(10),
    ]);

    }
}
