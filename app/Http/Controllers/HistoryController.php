<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\audit;

class HistoryController extends Controller
{
    //Untuk Memanggil Halaman History
    public function index()
    {
        $datas = Audit::all();

        return view('admin.history.index')->with([
            'datas' => $datas,
        ]);
    }

    //Untuk Memanggil Halaman Show 
    public function show($id)
    {
        $datas = Audit::find($id);
        $history = Audit::all();

        return view('admin.history.show')->with([
            'datas' => $datas,
            'history' => $history,
        ]);
    }

    //Untuk Menghapus History
    public function destroy($id)
    {
        $history = Audit::find($id);

        $history->delete();
        return redirect()->route('history.index');
    }
}
