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
            'view-guru',
            'create-guru',
            'edit-guru',
            'show-guru',
            'delete-guru',
            'view-petugas',
            'create-petugas',
            'edit-petugas',
            'show-petugas',
            'delete-petugas',
            'view-murid',
            'create-murid',
            'edit-murid',
            'show-murid',
            'delete-murid',
            'view-spp',
            'edit-spp',
            'view-berita',
            'create-berita',
            'edit-berita',
            'show-berita',
            'delete-berita',
            'view-user-management',
            'create-user-management',
            'edit-user-management',
            'show-user-management',
            'delete-user-management',
            'view-roles',
            'create-roles',
            'edit-roles',
            'show-roles',
            'delete-roles',
            'view-audit',
            'show-audit',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
