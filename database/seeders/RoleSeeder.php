<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    //Untuk Membuat Role Admin Dan Petugas
    public function run()
    {
        $superAdmin = Role::create([
            'name' => 'SuperAdmin',
            'guard_name' => 'web'
        ]);

        $Admin = Role::create([
            'name' => 'Admin',
            'guard_name' => 'web'
        ]);

        $Petugas = Role::create([
            'name' => 'Petugas',
            'guard_name' => 'web'
        ]);

        //Untuk Memberikan Akses Apa Saja Yang Dapat Diakses Oleh Role Super Admin, Admin, Dan Petugas
        $superAdmin->givePermissionTo([
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
        ]);

        $Admin->givePermissionTo([
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
        ]);

        $Petugas->givePermissionTo([
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
        ]);
    }
}
