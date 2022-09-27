<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;

class PenggunaController extends Controller
{
    //Untuk Memanggil Halaman userManagement (AdminPages) 
    public function index(Request $request)
    {
        $datas = User::all();
        return view('admin.userManagement.index', compact(
            'datas'
        ));
    }

    //Untuk Memeanggil Halaman Create (AdminPages)
    public function create()
    {
        $roles = Role::all();
        return view('admin.userManagement.create', compact(
            'roles'
        ));
    }

    //Untuk Menyimpan Data User
    public function store(Request $request)
    {
        $user = new user;
        $user->image = $request->image;
        $user->save();

        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        if (User::where('email', '=', $request->email)->exists()) {
            return redirect()->route('userManagement.create')->with('alert', 'Email Sudah Ada');
        } else {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),

            ]);

            $user->assignRole($request->role);

            return redirect()->route('userManagement.index')
                ->with('success', 'Data User Baru Saja Di Tambahkan');
        }
    }

    //Untuk Memanggil Halaman Show
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.userManagement.show', compact(
            'user'
        ));
    }

    //Untuk Memaggil Halaman Edit
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view('admin.userManagement.edit', compact(
            'user',
            'roles'
        ));
    }

    //Untuk Menyimpan Data Apa Saja Yang Di Ubah Di Halaman Edit (AdminPages)
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->image = $request->image;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->syncRoles($request->role);

        $user->save();
        return redirect()->route('userManagement.index')->with('success', 'Data User Baru Saja Di Edit');
    }

    //Untuk Menghapus Data User
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('userManagement.index')->with('success', 'Data Berhasil Di Hapus');
    }
}
