<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\galeri;

class galeriController extends Controller
{
    //Untuk Memanggil Halaman Dari Galeri (AdminPages)
    public function index()
    {
        $datas = galeri::all();
        return view('admin.galeri.index')->with([
            'datas' => $datas,
        ]);
    }

    //Untuk Memanggil Halaman Dari Create (AdminPages)
    public function create()
    {
        $galeri = new galeri;
        return view('admin.galeri.create')->with([
            'galeri' => $galeri,
        ]);
    }

    //Untuk Menyimpan Data Dari Galeri (AdminPages)
    public function store(Request $request)
    {
        $galeri = new galeri;
        $galeri->judul = $request->judul;
        $galeri->foto = $request->foto;
        $galeri->deskripsi = $request->deskripsi;
        $galeri->save();
        return redirect()->route('galeri.index')->with('success', 'Foto Galeri Baru Berhasil Di Tambahkan');
    }

    //Untuk Memperlihatkan Halaman Dari Show (AdminPages)
    public function show($id)
    {
        $galeri = galeri::find($id);
        return view('admin.galeri.show')->with([
            'galeri' => $galeri,
        ]);
    }

    //Untuk Memperlihatkan Halaman Edit (AdminPages)
    public function edit($id)
    {
        $galeri = galeri::find($id);
        return view('admin.galeri.edit')->with([
            'galeri' => $galeri,
        ]);
    }

    //Untuk Menyimpan Data Apa Saja Yang Di Ubah Di Halaman Edit (AdminPages)
    public function update(Request $request, $id)
    {
        $galeri = galeri::find($id);
        $galeri->judul = $request->judul;
        $galeri->deskripsi = $request->deskripsi;
        $galeri->save();
        return redirect()->route('galeri.index')->with('success', 'Foto Galeri Baru Saja Berhasil Di Edit');
    }

    //Untuk Menghapus Data Berita (AdminPages)
    public function destroy($id)
    {
        $galeri = galeri::find($id);
        $galeri->delete();
        return redirect()->route('galeri.index')->with('success', 'Foto Berhasil Di Hapus');
    }
}
