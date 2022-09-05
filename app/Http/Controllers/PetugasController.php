<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\petugas;

class PetugasController extends Controller
{
    //Untuk Memanggil Halaman Petugas (AdminPages)
    public function index()
    {
        $datas = petugas::all();

        return view('admin.petugas.index')->with([
            'datas' => $datas
        ]);
    }

    //Untuk Memanggil Halaman Create (AdminPages)
    public function create()
    {
        return view('admin.petugas.create');
    }

    //Untuk Menyimpan Data Petugas (AdminPages)
    public function store(Request $request)
    {
        $age = date_diff(date_create($request->tanggal_lahir), date_create('now'))->y;
        if (petugas::where('nip', '=', $request->nip)->exists()) {
            return redirect()->route('petugas.create')->with('alert', 'Nip Sudah Ada');
        } else {
            $make = new petugas;
            $make->nama = $request->nama;
            $make->umur = $age;
            $make->tugas = $request->tugas;
            $make->nip = $request->nip;
            $make->tanggal_lahir = $request->tanggal_lahir;
            $make->save();
            return redirect()->route('petugas.index')->with('success', 'Petugas Baru Berhasil Di Tambahkan');
        };
    }

    //Untuk Memanggil Halaman Show (AdminPages)
    public function show($id)
    {
        $make = petugas::find($id);
        return view('admin.petugas.show', compact(
            'make'
        ));
    }

    //Untuk Memanggil Halaman Edit (AdminPages)
    public function edit($id)
    {
        $make = petugas::find($id);
        return view('admin.petugas.edit', compact(
            'make'
        ));
    }

    //Untuk Melihat Data Apa Saja Yang Di Ubah Di Halaman Edit
    public function update(Request $request, $id)
    {
        $age = date_diff(date_create($request->tanggal_lahir), date_create('now'))->y;
        $make = petugas::find($id);
        $make->nama = $request->nama;
        $make->umur = $age;
        $make->tugas = $request->tugas;
        $make->nip = $request->nip;
        $make->tanggal_lahir = $request->tanggal_lahir;
        $make->save();

        return redirect()->route('petugas.index')->with('success', 'Petugas Berhasil Di Edit');
    }

    //Untuk Menghapus Data Petugas
    public function destroy($id)
    {
        $make = petugas::find($id);
        $make->delete();
        return redirect()->route('petugas.index')->with('success', 'Data Berhasil Di Hapus');
    }
}
