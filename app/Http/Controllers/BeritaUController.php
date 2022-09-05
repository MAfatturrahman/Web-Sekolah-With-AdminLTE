<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita;

class BeritaUController extends Controller
{
    //Untuk Memanggil Halaman Berita (HomePages)
    public function berita(Request $request)
    {
        $keyword = $request->keyword;
        $halaman = $request->halaman;

        $datas = berita::where('title', 'LIKE', '%' . $keyword . '%')
            ->latest()->paginate($halaman ? $halaman : 5);

        return view('user.berita')->with([
            'datas' => $datas,
            'keyword' => $keyword,
        ]);
    }
}
