<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita;

class BeritaController extends Controller
{
    //Untuk Memanggil Halaman Dari Berita (AdminPages)
    public function index(Request $request)
    {
        $datas = berita::all();
        return view('admin.berita.index', compact(
            'datas'
        ));
    }

    //Untuk Memanggil Halaman Dari Create (AdminPages)
    public function create()
    {
        $make = new berita;
        return view('admin.berita.create', compact(
            'make'
        ));
    }

    //Untuk Menyimpan Data Dari Berita (AdminPages)
    public function store(Request $request)
    {
        $make = new berita;
        $make->title = $request->title;
        $make->gambar = $request->gambar;
        $make->deskripsi = $request->deskripsi;
        $make->save();
        return redirect()->route('berita.index')->with('success', 'Berita Baru Berhasil Di Tambahkan');
    }

    //Untuk Memperlihatkan Halaman Dari Show (AdminPages)
    public function show($id)
    {
        $make = berita::find($id);
        return view('admin.berita.show', compact(
            'make'
        ));
    }

    //Untuk Memperlihatkan Halaman Edit (AdminPages)
    public function edit($id)
    {
        $make = berita::find($id);
        return view('admin.berita.edit', compact(
            'make'
        ));
    }

    //Untuk Menyimpan Data Apa Saja Yang Di Ubah Di Halaman Edit (AdminPages)
    public function update(Request $request, $id)
    {
        $make = berita::find($id);
        $make->title = $request->title;
        $make->gambar = $request->gambar;
        $make->deskripsi = $request->deskripsi;
        $make->save();
        return redirect()->route('berita.index')->with('success', 'Berita Berhasil Di Edit');
    }

    //Untuk Menghapus Data Berita (AdminPages)
    public function destroy($id)
    {
        $make = berita::find($id);
        $make->delete();
        return redirect()->route('berita.index')->with('success', 'Data Berhasil Di Hapus');
    }
}
