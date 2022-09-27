<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    //Untuk Menjalankan Data Apa Saja Yang Dapat Di Akses Oleh Role
    public function run()
    {
        $permissions = [
            // Permission Guru
            'view-guru',
            'create-guru',
            'edit-guru',
            'show-guru',
            'delete-guru',

            // Permission Petugas
            'view-petugas',
            'create-petugas',
            'edit-petugas',
            'show-petugas',
            'delete-petugas',

            // Permission Murid
            'view-murid',
            'create-murid',
            'edit-murid',
            'show-murid',
            'delete-murid',

            // Permission SPP
            'view-spp',
            'edit-spp',

            // Permission Prestasi
            'view-prestasi',
            'create-prestasi',
            'edit-prestasi',
            'show-prestasi',
            'delete-prestasi',

            // Permission Pelajaran
            'view-pelajaran',
            'create-pelajaran',
            'edit-pelajaran',
            'show-pelajaran',
            'delete-pelajaran',

            // Permission Galeri
            'view-galeri',
            'create-galeri',
            'edit-galeri',
            'show-galeri',
            'delete-galeri',

            // Permission Berita
            'view-berita',
            'create-berita',
            'edit-berita',
            'show-berita',
            'delete-berita',

            // Permission User Manegement
            'view-user-management',
            'create-user-management',
            'edit-user-management',
            'show-user-management',
            'delete-user-management',

            // Permission Role
            'view-roles',
            'create-roles',
            'edit-roles',
            'show-roles',
            'delete-roles',

            // Permission Audit
            'view-audit',
            'show-audit',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
