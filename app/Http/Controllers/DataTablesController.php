<?php

namespace App\Http\Controllers;

use App\Http\Services\SiakadService;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DataTablesController extends Controller
{
    public function __construct(SiakadService $siakadService)
    {
        $this->siakadService = $siakadService;
        $this->user = session()->get('user_data');
    }

    public function mahasiswa($idjadwal)
    {
        $mahasiswa = $this->siakadService->getMhsMakul(base64_decode($idjadwal));
        return DataTables::of($mahasiswa)->addIndexColumn()->make(true);
    }
}
