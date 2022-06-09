<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        return view('dosen.index');
    }

    public function entriNilai()
    {
        return view('dosen.matkul');
    }

    public function asd()
    {
        return view('dosen.mahasiswa');
    }
}
