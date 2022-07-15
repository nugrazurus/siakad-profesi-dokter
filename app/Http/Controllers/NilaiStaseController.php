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

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|string',
            'nilai_huruf' => 'string',
            'nilai_angka' => 'numeric',
        ]);
        $data = $request->all();
        $data['store_by'] = session()->get('user_data')['nip'];
        $create = $this->model->create($data);
        return response()->json([
            'success' => true,
            'message' => 'Berhasil menyimpan nilai stase',
            'data' => $create
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|string',
            'nilai_huruf' => 'string',
            'nilai_angka' => 'numeric',
        ]);
        $data = $this->model->findOrFail($id);
        $data->update($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Berhasil memperbaharui data',
            'data' => $data
        ]);
    }

    public function destroy($id)
    {
        $data = $this->model->findOrFail($id);
        $data->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil dihapus',
        ]);
    }
}
