<?php

use Database\Seeders\AdminSeeder;
use Database\Seeders\DosenSeeder;
use Database\Seeders\MahasiswaSeeder;
use Database\Seeders\UserSeeder;
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
        $this->call([
            UserSeeder::class,
            AdminSeeder::class,
            MahasiswaSeeder::class,
            DosenSeeder::class,
        ]);

        

        
        // Output the created users
        $this->command->info('User created: Succesfully ');
        $this->command->info('Mahasiswa created: Succesfully');
        $this->command->info('Dosen created: Succesfully ' );
        $this->command->info('Admin created: Succesfully ' );
    }
}
