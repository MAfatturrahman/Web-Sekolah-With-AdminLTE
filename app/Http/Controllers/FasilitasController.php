<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    //Untuk Memanggil Halaman Fasilitas (HomePages)
    public function fasilitas()
    {
        return view('user.fasilitas');
    }
}
