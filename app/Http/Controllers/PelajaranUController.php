<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelajaran;

class PelajaranUController extends Controller
{
    //Untuk Memanggil Halaman pelajaran (HomePages)
    public function pelajaran()
    {
        $datas = pelajaran::all();
        $pelajaran = pelajaran::all();
        return view('user.pelajaran')->with([
            'datas' => $datas,
            'pelajaran' => $pelajaran
        ]);
    }
}
