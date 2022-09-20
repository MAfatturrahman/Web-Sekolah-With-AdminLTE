<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    //Untuk Membuat Akun Admin Dan Juga Petugas
    public function run()
    {
        $superAdmin = User::create([
            'name' => 'Sekolah Negeri',
            'email' => 'sekolahNegeri@gmail.com',
            'password' => bcrypt('123456789')
        ]);
        $superAdmin->assignRole('superAdmin');

        $Admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456789')
        ]);
        $Admin->assignRole('Admin');

        $Petugas = User::create([
            'name' => 'Petugas',
            'email' => 'petugas@gmail.com',
            'password' => bcrypt('123456789')
        ]);
        $Petugas->assignRole('Petugas');
    }
}
