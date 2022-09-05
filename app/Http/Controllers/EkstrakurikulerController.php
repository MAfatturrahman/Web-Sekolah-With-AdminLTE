<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    //Untuk Memanggil Halaman Ekstrakulikuler (HomePages)
    public function Ekstrakurikuler()
    {
        return view('user.Ekstrakurikuler');
    }
}
