<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guru;
use App\Models\petugas;
use App\Models\murid;
use App\Models\prestasi;

class HomepagesController extends Controller
{
    //Untuk Memanggil Halaman Utama (HomePages)
    public function index()
    {
        $dataGuru = guru::all();
        $dataPetugas = petugas::all();
        $dataMurid = Murid::all();
        $dataPrestasi = prestasi::all();

        return view('homepages')->with([
            'dataGuru' => $dataGuru,
            'dataPetugas' => $dataPetugas,
            'dataMurid' => $dataMurid,
            'dataPrestasi' => $dataPrestasi,
        ]);
    }
}
