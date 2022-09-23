<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $user = User::find($id);
        return view('admin.profil.index', compact(
            'user'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::find($id);

        $this->validate($request, [
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
