<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guru;
use App\Models\petugas;
use App\Models\murid;
use App\Models\prestasi;
use App\Models\pelajaran;
use App\Models\galeri;
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
        $dataPrestasi = prestasi::all();
        $dataPelajaran = pelajaran::all();
        $dataGaleri = galeri::all();
        $dataBerita = Berita::all();
        $dataUser = User::all();

        return view('home')->with([
            'dataGuru' => $dataGuru,
            'dataPetugas' => $dataPetugas,
            'dataMurid' => $dataMurid,
            'dataPrestasi' => $dataPrestasi,
            'dataPelajaran' => $dataPelajaran,
            'dataGaleri' => $dataGaleri,
            'dataBerita' => $dataBerita,
            'dataUser' => $dataUser,
        ]);
    }
}
