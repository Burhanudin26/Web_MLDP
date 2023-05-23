<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
            'password' => 'password',
        ]);

        // Create a Mahasiswa
        $mahasiswa = Mahasiswa::create([
            'name' => 'Jane Smith',
            'NIM' => '987654321',
            'email' => 'mahasiswa@example.com',
            'password' => 'password',
        ]);

        // Create a Dosen
        $dosen = Dosen::create([
            'name' => 'David Johnson',
            'NID' => '246813579',
            'email' => 'dosen@example.com',
            'password' => 'password',
        ]);

        // Create an Admin
        $admin = Admin::create([
            'name' => 'Admin Doe',
            'NIA' => '135792468',
            'email' => 'admin@example.com',
            'password' => 'password',
        ]);

        // Output the created users
        $this->command->info('User created: ' . $user->name);
        $this->command->info('Mahasiswa created: ' . $mahasiswa->name);
        $this->command->info('Dosen created: ' . $dosen->name);
        $this->command->info('Admin created: ' . $admin->name);
    }
}

?>