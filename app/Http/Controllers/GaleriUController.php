<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\galeri;

class GaleriUController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = galeri::all();

        return view('user.galeri')->with([
            'galeri' => $galeri,
        ]);
    }
}
