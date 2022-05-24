<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'http://service.siakad.untan.ac.id/datasnap/rest/tservermethods1/'
        ]);
    }

    public function loginDosen(Request $request)
    {
        $credential = $request->only(['username', 'password']);
        $response = $this->client->get("logindosen/X{$credential['username']}/X{$credential['password']}");
        $user = json_decode($response->getBody(), true)['result'][0];
        if ($user['stat'] != "gagal") {
            return $user;
        } else {
            return "username atau password anda salah";
        }
    }

    public function loginMahasiswa(Request $request)
    {
        $credential = $request->only(['username', 'password']);
        $response = $this->client->get("loginmhs/{$credential['username']}/X{$credential['password']}");
        $user = json_decode($response->getBody(), true)['result'][0];
        if ($user['idmhs'] != "0") {
            return $user;
        } else {
            return "username atau password anda salah";
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
