<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisiController extends Controller
{
    //Untuk Menampilkan Halaman Visi Dan Misi
    public function visi()
    {
        return view('user.visi');
    }
}
