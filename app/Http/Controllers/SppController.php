<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\murid;
use App\Models\spp;

class SppController extends Controller
{
    //Untuk Memanggila Halaman Index
    public function index()
    {
        $datas = murid::all();
        return view('admin.spp.index')->with([
            'datas' => $datas
        ]);
    }

    //Untuk Memanggil Halaman Edit
    public function edit($id)
    {
        $make = murid::find($id);
        return view('admin.spp.edit', compact(
            'make'
        ));
    }

    //Untuk Mengupdate Pembayaran Yang Ada Pada SPP
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
        $make->tahun = $request->tahun;
        $make->jurusan = $request->jurusan;
        
        $make->save();

        return redirect('spp')->route('spp.index')->with('success', 'Pembayaran Berhasil');
    }
}
