<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guru;
use App\Models\petugas;
use App\Models\murid;
use App\Models\berita;
use App\Models\User;


class HomeController extends Controller
{
    //Untuk Memeastikan Agar Tidak Ada Orang Yang Langsung Masuk Ke Halaman Home Tanpa Login (URL)
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Untuk Memanggil Halaman Home (AdminPages)
    public function index()
    {
        $dataGuru = guru::all();
        $dataPetugas = petugas::all();
        $dataMurid = Murid::all();
        $dataBerita = Berita::all();

        return view('home')->with([
            'dataGuru' => $dataGuru,
            'dataPetugas' => $dataPetugas,
            'dataMurid' => $dataMurid,
            'dataBerita' => $dataBerita,
        ]);
    }
}
