<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepagesController extends Controller
{
    //Untuk Memanggil Halaman Utama (HomePages)
    public function index()
    {
        return view('homepages');
    }
}
