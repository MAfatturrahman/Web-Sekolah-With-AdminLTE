<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\murid;

class MuridController extends Controller
{
    //Untuk Memanggil Halaman Murid (AdminPages)
    public function index()
    {
        $datas = murid::all();
        return view('admin.murid.index')->with([
            'datas' => $datas,
        ]);
    }

    //Untuk Memanggil Halaman Create (AdminPages) 
    public function create()
    {
        $make = new murid;
        return view('admin.murid.create', compact(
            'make'
        ));
    }

    //Untuk Menyimpan Data Murid (AdminPages)
    public function store(Request $request)
    {
        $age = date_diff(date_create($request->tanggal_lahir), date_create('now'))->y;
        if (murid::where('nis', '=', $request->nis)->exists()) {
            return redirect()->route('murid.create')->with('alert', 'NIS Sudah Ada');
        } else {
            $spps = $request->spp;
            $dataSpp = [];
            $make = new murid;
            $make->nama = $request->nama;
            $make->umur = $age;
            $make->kelas = $request->kelas;
            $make->nis = $request->nis;
            $make->tanggal_lahir = $request->tanggal_lahir;
            // foreach ($spps as $spp) {
            //     $dataSpp = $spp;
            // }

            $make->spp = $request->spp;
            $make->jurusan = $request->jurusan;
            $make->tahun = $request->tahun;
            $make->from = $request->from;
            $make->to = $request->to;
            $make->save();
            return redirect()->route('murid.index')->with('success', 'Murid Baru Berhasil Di Tambahkan');
        };
    }

    //Untuk Memanggil Halaman Show (AdminPages)
    public function show($id)
    {
        $make = murid::find($id);
        return view('admin.murid.show', compact(
            'make'
        ));
    }

    //Untuk Memanggil Halaman Edit (AdminPages)
    public function edit($id)
    {
        $make = murid::find($id);
        return view('admin.murid.edit', compact(
            'make'
        ));
    }

    //Untuk Menyimpan Data Apa Saja Yang Di Rubah Di Halaman Edit (AdminPages) 
    public function update(Request $request, $id)
    {
        $age = date_diff(date_create($request->tanggal_lahir), date_create('now'))->y;
        $make = murid::find($id);
        $make->nama = $request->nama;
        $make->umur = $age;
        $make->kelas = $request->kelas;
        $make->nis = $request->nis;
        $make->tanggal_lahir = $request->tanggal_lahir;
        $make->spp = $request->spp;
        $make->jurusan = $request->jurusan;
        $make->tahun = $request->tahun;
        $make->save();

        return redirect()->route('murid.index')->with('success', 'Murid Berhasil Di Edit');
    }

    //Untuk Menghapus Data Murid
    public function destroy($id)
    {
        $make = murid::find($id);
        $make->delete();
        return redirect()->route('murid.index')->with('success', 'Data Berhasil Di Hapus');
    }

    //Untuk Memanggil Halaman Bayar (AdminPages.SPP)
    public function bayar($id)
    {
        $make = murid::find($id);
        return view('admin.murid.bayar', compact(
            'make'
        ));
    }
}
