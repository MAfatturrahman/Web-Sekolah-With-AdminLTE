<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //Untuk Memanggil Halaman Login Dan Register 
    public function index()
    {
        return view('welcome');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $creds = $request->only('username', 'password');

        if (Auth::attempt($creds)) return redirect()->route('guru.index');

        return redirect()->route('dashboard.login')->with('loginFailed', 'Username or password is incorrect');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        $checkUsername = User::where('username', '=', $request->username)->exists();

        if ($checkUsername) return redirect()->route('dashboard.register')->with('usernameExists', 'Username already exists');

        User::create([
            'name' => $request->name,
            'username' => strtolower($request->username),
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('dashboard.login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('dashboard.login');
    }
}
