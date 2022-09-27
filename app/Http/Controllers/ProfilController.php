<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    // Untuk Memanggil Halaman Profile (Adminpages)
    public function index()
    {
        $id = Auth::id();
        $user = User::find($id);
        return view('admin.profil.index', compact(
            'user'
        ));
    }

    // Untuk Mengupdate Halaman Profile (Adminpages)
    public function update(Request $request, $id)
    {

        $user = User::find($id);
        $user->image = $request->image;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $user['image'] = $filename;
        }
        $user->save();

        $this->validate($request, [
            'image',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_baru'
        ]);

        $creds = ['email' => $request->email, 'password' => $request->password];

        if (!Auth::attempt($creds)) return redirect()->route('profil.index')->with('failed', 'Password Salah');

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password_baru == null ? Hash::make($request->password) : Hash::make($request->password_baru)
        ]);

        return redirect('profil')->with('success', 'Password Berhasil Di Ganti');
    }
}
