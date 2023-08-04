<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\{
    Str,
    Arr
};
use App\Models\{
    Login,
};
use GuzzleHttp\Client;

class BackController extends Controller
{
    public function index()
    {
        $session_users = session('data_login');
        $users = $session_users;

        $client = new Client;
        $url = 'https://backendservicedev.scm.perurica.co.id/function/saldopos';

        $response = $client->request('GET', $url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $users["token"],
                'Content-Type' => 'application/json'
            ]
        ]);
        $data = json_decode($response->getBody());
        $saldopost = $data->result->saldo;
        return view('dashboard.index', [
            'users' => $users,
            'saldo' => $saldopost,
        ]);
    }

    public function login()
    {
        $users = session('data_login');
        if ($users) {
            return redirect()->route('dashboard');
        }
        return view('login');
    }

    public function new_postlogin(Request $request)
    {
        $client = new Client;
        $url = 'https://backendservicedev.scm.perurica.co.id/api/users/login';
        $req_username = $request->login_username;
        $req_password = $request->login_password;
        $username = env('API_LOGIN_USERNAME');
        $password = env('API_LOGIN_PASSWORD');
        if ($req_username !== $username) {
            return back()->with('status', 'Maaf username atau password yang anda masukkan salah!')->withInput();
        } elseif ($req_password !== $password) {
            return back()->with('status', 'Maaf username atau password yang anda masukkan salah!')->withInput();
        } else {
            $params = [
                'user' => $username,
                'password' => $password
            ];
            $response = $client->request('POST', $url, [
                'json' => $params
            ]);
            $data = json_decode($response->getBody());
            $token = $data->token;
            $firstName = $data->result->data->login->user->firstName;
            $lastName = $data->result->data->login->user->lastName;
            $name = $firstName . " " . $lastName;
            $data_login = [
                'name' => $name,
                'token' => $token
            ];
            $users = session(['data_login' => $data_login]);
            return redirect()->route('dashboard')->with('status', 'Berhasil Login!');
        }
        die;
    }

    public function logout(Request $request)
    {
        $users = session('data_login');
        $request->session()->forget(['data_login']);
        $request->session()->flush();
        return redirect()->route('login')->with('status', 'Anda telah logout!');
    }
}
