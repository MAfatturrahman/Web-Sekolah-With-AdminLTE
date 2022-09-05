<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    //Untuk Menampilkan Halaman Role (AdminPages)
    public function index(Request $request)
    {
        // return view('admin.role.index');
        $datas = Role::orderBy('id', 'DESC')->paginate(5);
        return view('admin.role.index', compact(
            'datas'
        ))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    //Untuk Menampilkan Halaman Role (AdminPages)
    public function create()
    {
        $Permission = Permission::get();
        return view('admin.role.create', compact(
            'Permission'
        ));
    }

    //Untuk Menyimpan Data Role (AdminRole)
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);

        $role = Role::create(['name' => $request->input('name')]);
        $role->givePermissionTo($request->input('permission'));

        return redirect()->route('role.index')->with('success', 'Role Berhasil Di Tambahkan');
    }

    //Untuk Menampilkan Halam Show (AdminPages)
    public function show($id)
    {
        $role = Role::find($id);
        $getAllPermissions = $role->getAllPermissions()->all();
        foreach ($getAllPermissions as $permission) {
            $permissions[] = $permission->name;
        }

        return view('admin.role.show')->with([
            'role' => $role,
            'permissions' => $permissions,
        ]);
    }

    //Untuk Menampilkan Halaman Edit
    public function edit($id)
    {
        $role = Role::find($id);
        $getAllPermissions = $role->getAllPermissions()->all();
        foreach ($getAllPermissions as $permission) {
            $permissions[] = $permission->name;
        }
        return view('admin.role.edit')->with([
            'role' => $role,
            'permissions' => $permissions,
        ]);
    }

    //Untuk Menyimpan Perubahan Apa Saja Yang Di Ubah Di Halaman Edit (AdminPages)
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();

        $role->syncPermissions($request->permission);

        return redirect()->route('role.index')
            ->with('success', 'Role Berhasil Di Edit');
    }

    //Untuk Menghapus Role
    public function destroy($id)
    {
        DB::table("roles")->where('id', $id)->delete();
        return redirect()->route('role.index')->with('success', 'Data Berhasil Di Hapus');
    }
}
