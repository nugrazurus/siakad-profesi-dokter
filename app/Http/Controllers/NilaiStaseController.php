<?php

namespace App\Http\Controllers;

use App\Models\NilaiStase;
use Illuminate\Http\Request;

class NilaiStaseController extends Controller
{
    public function __construct(NilaiStase $nilaiStase)
    {
        $this->model = $nilaiStase;
    }

    public function show($id)
    {
        return response()->json([
            'success' => true,
            'message' => 'Berhasil mengambil nilai stase',
            'data' => $this->model->find($id)
        ]);
    }
}
