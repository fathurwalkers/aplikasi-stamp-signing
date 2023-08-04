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

class BulkstampController extends Controller
{
    public function upload_csv()
    {
        $session_users = session('data_login');
        $users = $session_users;
        return view('dashboard.upload-csv', [
            'users' => $users,
        ]);
    }

    public function generate_snqr()
    {
        $session_users = session('data_login');
        $users = $session_users;
        return view('dashboard.generate-snqr', [
            'users' => $users,
        ]);
    }

    public function stamping()
    {
        $session_users = session('data_login');
        $users = $session_users;
        return view('dashboard.stamping', [
            'users' => $users,
        ]);
    }
}
