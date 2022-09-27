<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelajaran;

class PelajaranController extends Controller
{
    //Untuk Memanggil Halaman Pelajaran (AdminPages)
    public function index()
    {
        $datas = pelajaran::all();
        return view('admin.pelajaran.index')->with([
            'datas' => $datas,
        ]);
    }

    //Untuk Memanggil Halaman Pelajaran (HomePages)
    public function pelajaran()
    {
        $datas = pelajaran::all();
        return view('admin.pelajaran.index')->with([
            'datas' => $datas,
        ]);
    }

    //Untuk Memanggil Halaman Create (AdminPages)
    public function create()
    {
        $pelajaran = pelajaran::all();
        return view('admin.pelajaran.create')->with([
            'pelajaran' => $pelajaran,
        ]);
    }

    //Untuk Menyimpan Data Dari Pelajaran (AdminPages)
    public function store(Request $request)
    {
        $pelajaran = new pelajaran;
        $pelajaran->sma_smk = $request->sma_smk;
        $pelajaran->mata_pelajaran = $request->mata_pelajaran;
        $pelajaran->jurusan = $request->jurusan;
        $pelajaran->deskripsi = $request->deskripsi;
        $pelajaran->save();
        return redirect()->route('pelajaran.index')->with('success', 'Pelajaran Baru Berhasil Di Tambahkan');
    }

    //Untuk Memanggil Halaman Show (AdminPages)
    public function show($id)
    {
        $pelajaran = pelajaran::find($id);
        return view('admin.pelajaran.show')->with([
            'pelajaran' => $pelajaran,
        ]);
    }

    //Untuk Memanggil Halaman Edit (AdminPages)
    public function edit($id)
    {
        $pelajaran = pelajaran::find($id);
        return view('admin.pelajaran.edit')->with([
            'pelajaran' => $pelajaran,
        ]);
    }

    //Untuk Menyimpan Data Apa Saja Yang Di Ubah Di Halaman Edit (AdminPages)
    public function update(Request $request, $id)
    {
        $pelajaran = pelajaran::find($id);
        $pelajaran->sma_smk = $request->sma_smk;
        $pelajaran->mata_pelajaran = $request->mata_pelajaran;
        $pelajaran->jurusan = $request->jurusan;
        $pelajaran->deskripsi = $request->deskripsi;
        $pelajaran->save();
        return redirect()->route('pelajaran.index')->with('success', 'Pelajaran Berhasil Di Edit');
    }

    //Untuk menghapus Data Pelajaran (AdminPages)
    public function destroy($id)
    {
        $pelajaran = pelajaran::find($id);
        $pelajaran->delete();
        return redirect()->route('pelajaran.index')->with('success', 'Pelajaran Berhasil Di Hapus');
    }
}
