<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prestasi;

class PrestasiController extends Controller
{
    //Untuk Memanggil Halaman Prestasi (AdminPages)
    public function index()
    {
        $datas = prestasi::all();
        return view('admin.prestasi.index')->with([
            'datas' => $datas,
        ]);
    }

    //Untuk Memanggil Halaman Create (AdminPages)
    public function create()
    {
        $prestasi = prestasi::all();
        return view('admin.prestasi.create')->with([
            'prestasi' => $prestasi,
        ]);
    }

    //Untuk Menyimpan Data Dari Prestasi (AdminPages)
    public function store(Request $request)
    {
        $prestasi = new prestasi;
        $prestasi->nama_lengkap = $request->nama_lengkap;
        $prestasi->siswa_guru = $request->siswa_guru;
        $prestasi->kejuaraan = $request->kejuaraan;
        $prestasi->bentuk = $request->bentuk;
        $prestasi->tingkat = $request->tingkat;
        $prestasi->tahun = $request->tahun;
        $prestasi->juara = $request->juara;
        $prestasi->tempat_penyelenggara = $request->tempat_penyelenggara;
        $prestasi->save();
        return redirect()->route('prestasi.index')->with('success', 'Prestasi Baru Berhasil Di Tambahkan');
    }

    //Untuk Memanggil Halaman Show (AdminPages)
    public function show($id)
    {
        $prestasi = prestasi::find($id);
        return view('admin.pretasi.show')->with([
            'prestasi' => $prestasi,
        ]);
    }

    //Untuk Memanggil Halaman Edit (AdminPages)
    public function edit($id)
    {
        $prestasi = prestasi::find($id);
        return view('admin.prestasi.edit')->with([
            'prestasi' => $prestasi,
        ]);
    }

    //Untuk Menyimpan Data Apa Saja Yang Di Ubah Di Halaman Edit (AdminPages)
    public function update(Request $request, $id)
    {
        $prestasi = prestasi::find($id);
        $prestasi->nama_lengkap = $request->nama_lengkap;
        $prestasi->siswa_guru = $request->siswa_guru;
        $prestasi->kejuaraan = $request->kejuaraan;
        $prestasi->bentuk = $request->bentuk;
        $prestasi->tingkat = $request->tingkat;
        $prestasi->tahun = $request->tahun;
        $prestasi->juara = $request->juara;
        $prestasi->tempat_penyelenggara = $request->tempat_penyelenggara;
        $prestasi->save();
        return redirect()->route('prestasi.index')->with('success', 'Prestasi Berhasil Di Edit');
    }

    //Untuk menghapus Data Prestasi (AdminPages)
    public function destroy($id)
    {
        $delete = prestasi::find($id);
        $delete->delete();
        return redirect()->route('prestasi.index')->with('success', 'Prestasi Berhasil Di Hapus');
    }
}
