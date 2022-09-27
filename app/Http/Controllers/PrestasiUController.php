<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prestasi;

class PrestasiUController extends Controller
{
    //Untuk Memanggil Halaman Prestasi (HomePages)
    public function prestasi()
    {
        $datas = prestasi::all();
        return view('user.prestasi')->with([
            'datas' => $datas,
        ]);
    }
}
