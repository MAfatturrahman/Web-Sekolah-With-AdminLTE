<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guru;

class GuruController extends Controller
{
    //Untuk Memanggil Halaman Guru (AdminPages)
    public function index(Request $request)
    {
        $datas = guru::all();

        return view('admin.guru.index')->with([
            'datas' => $datas
        ]);
    }

    //Untuk Memanggil Halaman Create (AdminPages)
    public function create()
    {
        $make = new guru;
        return view('admin.guru.create', compact(
            'make'
        ));
    }

    //Untuk Menyimpan Data Dari Guru (AdminPages)
    public function store(Request $request)
    {
        $age = date_diff(date_create($request->tanggal_lahir), date_create('now'))->y;
        if (guru::where('nip', '=', $request->nip)->exists()) {
            return redirect()->route('admin.guru.create')->with('alert', 'Nip Sudah Ada');
        } else {
            $make = new guru;
            $make->nama = $request->nama;
            $make->umur = $age;
            $make->matkul = $request->matkul;
            $make->nip = $request->nip;
            $make->tanggal_lahir = $request->tanggal_lahir;
            $make->save();
            return redirect()->route('guru.index')->with('success', 'Guru Baru Berhasil Di Tambahkan');
        };
    }

    //Untuk Memanggil Halaman Show (AdminPages)
    public function show($id)
    {
        $make = guru::find($id);
        return view('admin.guru.show', compact(
            'make'
        ));
    }

    //Untuk Memanggil Halaman Edit (AdminPages)
    public function edit($id)
    {
        $make = guru::find($id);
        return view('admin.guru.edit', compact(
            'make'
        ));
    }

    //Untuk Menyimpan Data Apa Saja Yang Di Ubah Di Halaman Edit (AdminPages)
    public function update(Request $request, $id)
    {
        $age = date_diff(date_create($request->tanggal_lahir), date_create('now'))->y;
        $make = guru::find($id);
        $make->nama = $request->nama;
        $make->umur = $age;
        $make->matkul = $request->matkul;
        $make->nip = $request->nip;
        $make->tanggal_lahir = $request->tanggal_lahir;
        $make->save();

        return redirect()->route('guru.index')->with('success', 'Guru Berhasil Di Edit');
    }

    //Untuk menghapus Data Guru (AdminPages)
    public function destroy($id)
    {
        $make = guru::find($id);
        $make->delete();
        return redirect()->route('guru.index')->with('success', 'Data Berhasil Di Hapus');
    }
}
