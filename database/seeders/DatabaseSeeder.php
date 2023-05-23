<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a user
        $user = User::create([
            'name' => 'John Doe',
            'role' => 'user',
            'NI' => '123456789',
            'email' => 'user@example.com',
            'email_verified_at' => now(),
            'password' => Crypt::encryptString('password'),
            'remember_token' => Str::random(10),
        ]);

        // Create a Mahasiswa
        $mahasiswa = Mahasiswa::create([
            'name' => 'Mahasiswa',
            'NIM' => '135798642',
            'email' => 'mahasiswa@example.com',
            'email_verified_at' => now(),
            'password' => Crypt::encryptString('password'),
            'remember_token' => Str::random(10),
        ]);

        // Create a Dosen
        $dosen = Dosen::create([
            'name' => 'Dosen',
            'NID' => '987654321',
            'email' => 'dosen@example.com',
            'email_verified_at' => now(),
            'password' => Crypt::encryptString('password'),
            'remember_token' => Str::random(10),
        ]);

        // Create an Admin
        $admin = Admin::create([
            'name' => 'Admin',
            'NIA' => '123456789',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Crypt::encryptString('password'),
            'remember_token' => Str::random(10),
        ]);

        // Output the created users
        $this->command->info('User created: ' . $user->name);
        $this->command->info('Mahasiswa created: ' . $mahasiswa->name);
        $this->command->info('Dosen created: ' . $dosen->name);
        $this->command->info('Admin created: ' . $admin->name);
    }
}
