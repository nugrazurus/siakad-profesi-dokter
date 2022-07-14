<?php

namespace App\Http\Controllers;

use App\Http\Services\SiakadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class DosenController extends Controller
{
    public function __construct(SiakadService $siakadService)
    {
        $this->siakadService = $siakadService;
        $this->user = session()->get('user_data');
        $this->makulProfesi = $this->siakadService->getDosenMkPerProgdi(391, 377);
    }

    public function index()
    {
        return view('dosen.index');
    }

    public function entriNilai()
    {
        $user = $this->user;
        $makul_profesi = collect($this->makulProfesi)->where('iddosen', $user['iddosen']);
        return view('dosen.entri-nilai', compact('makul_profesi'));
    }

    public function detailEntriNilai($idjadwal)
    {
        $idjadwal = base64_decode($idjadwal);
        $mahasiswa = $this->siakadService->getMhsMakul($idjadwal);
        return view('dosen.entri-nilai-detail', compact('mahasiswa'));
    }

}
