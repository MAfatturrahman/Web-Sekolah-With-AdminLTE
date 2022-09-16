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
        $murid = murid::find($id);
        $spp = spp::find($murid->spp_id);

        return view('admin.spp.edit', compact(
            'murid',
            'spp',
        ));
    }

    //Untuk Mengupdate Pembayaran Yang Ada Pada SPP
    public function update(Request $request, $id)
    {
        $age = date_diff(date_create($request->tanggal_lahir), date_create('now'))->y;
        $murid = murid::find($id);

        $spp = spp::find($murid->spp_id);
        $spp->from = $request->from;
        $spp->to = $request->to;
        $spp->save();

        $murid->nama = $request->nama;
        $murid->umur = $age;
        $murid->kelas = $request->kelas;
        $murid->nis = $request->nis;
        $murid->tanggal_lahir = $request->tanggal_lahir;
        $murid->jurusan = $request->jurusan;
        $murid->jk = $request->jk;

        $murid->save();

        return redirect()->route('spp.index')->with('success', 'Pembayaran Berhasil');
    }
}
