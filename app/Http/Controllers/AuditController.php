<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\audit;

class AuditController extends Controller
{
    //Untuk Memanggil Halaman Audit log
    public function index()
    {
        $datas = Audit::latest()->get();

        return view('admin.audit.index')->with([
            'datas' => $datas,
        ]);
    }

    //Untuk Memanggil Halaman Show 
    public function show($id)
    {
        $datas = Audit::find($id);
        $audit = Audit::all();

        return view('admin.audit.show')->with([
            'datas' => $datas,
            'audit' => $audit,
        ]);
    }
}
