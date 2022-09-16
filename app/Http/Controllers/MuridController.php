<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\murid;
use App\Models\spp;

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
        $murid = new murid;
        $spp = new spp;
        return view('admin.murid.create', compact(
            'murid',
            'spp',
        ));
    }

    //Untuk Menyimpan Data Murid (AdminPages)
    public function store(Request $request)
    {
        $age = date_diff(date_create($request->tanggal_lahir), date_create('now'))->y;
        if (murid::where('nis', '=', $request->nis)->exists()) {
            return redirect()->route('murid.create')->with('alert', 'NIS Sudah Ada');
        } else {
            $murid = new murid;
            $spp = new spp;
            $spp->from = $request->from;
            $spp->to = $request->to;
            $spp->save();

            $murid->nama = $request->nama;
            $murid->umur = $age;
            $murid->kelas = $request->kelas;
            $murid->nis = $request->nis;
            $murid->tanggal_lahir = $request->tanggal_lahir;
            // foreach ($spps as $spp) {
            //     $dataSpp = $spp;
            // }
            $murid->jurusan = $request->jurusan;
            $murid->jk = $request->jk;
            $murid->spp_id = $spp->id;
            $murid->save();
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
        $murid = murid::find($id);
        $spp = new spp;
        return view('admin.murid.edit', compact(
            'murid',
            'spp'
        ));
    }

    //Untuk Menyimpan Data Apa Saja Yang Di Rubah Di Halaman Edit (AdminPages) 
    public function update(Request $request, $id)
    {
        $age = date_diff(date_create($request->tanggal_lahir), date_create('now'))->y;
        $murid = murid::find($id);

        $murid->nama = $request->nama;
        $murid->umur = $age;
        $murid->kelas = $request->kelas;
        $murid->nis = $request->nis;
        $murid->tanggal_lahir = $request->tanggal_lahir;
        $murid->jurusan = $request->jurusan;
        $murid->jk = $request->jk;
        $murid->save();

        return redirect()->route('murid.index')->with('success', 'Murid Berhasil Di Edit');
    }

    //Untuk Menghapus Data Murid
    public function destroy($id)
    {
        $make = murid::find($id);
        $make->delete();
        return redirect()->route('murid.index')->with('success', 'Data Berhasil Di Hapus');
    }
}
