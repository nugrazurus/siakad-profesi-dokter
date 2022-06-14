<?php

namespace App\Http\Controllers;

use App\Http\Services\SiakadService;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function __construct(SiakadService $siakadService)
    {
        $this->siakadService = $siakadService;
    }

    public function index()
    {
        return view('dosen.index');
    }

    public function entriNilai()
    {
        return view('dosen.entri-nilai');
    }

    public function detailEntriNilai()
    {
        return view('dosen.detail-entri-nilai');
    }
}
