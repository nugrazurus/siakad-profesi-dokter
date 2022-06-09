<?php

namespace App\Http\Controllers;

use App\Http\Services\SiakadService;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function __construct(SiakadService $siakadService)
    {
        $this->siakadService = $siakadService;
    }

    public function loginDosen(Request $request)
    {
        $credential = $request->only('username', 'password');
        try {
            $user_data = $this->siakadService->loginDosen($credential['username'], $credential['password'])['result'][0];
            if ($user_data['stat'] !== "gagal") {
                $user_data['nama_lengkap'] = "{$user_data['gelardpn']}{$user_data['nama']}{$user_data['gelarblk']}";
                Session::put('login_dosen', true);
                Session::put('user_data', $user_data);
                return redirect()->intended('dosen');
            } else {
                return redirect()->back()->with('message', 'username atau password anda salah');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('message', $th->getMessage());
        }
    }

    public function loginMahasiswa(Request $request)
    {
        $credential = $request->only('username', 'password');
        try {
            $user_data = $this->siakadService->loginMahasiswa($credential['username'], $credential['password'])['result'][0];
            if ($user_data['idmhs'] !== "0") {
                Session::put('login_mahasiswa', true);
                Session::put('user_data', $user_data);
                return redirect()->intended('mahasiswa');
            } else {
                return redirect()->back()->with('message', 'username atau password anda salah');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('message', $th->getMessage());
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        Cache::clear();
        return redirect()->back();
    }
}
