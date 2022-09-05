<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusanController extends Controller
{
    //Untuk Memanggil Halaman Jurusan (HomePages)
    public function jurusan()
    {
        return view('user.jurusan');
    }
}
