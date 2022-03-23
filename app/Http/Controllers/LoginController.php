<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index() {
        return view('admin.login');
    }

    function login(Request $request) {
        // Nanti
        $this->validate($request, [
            'username' => ['required', 'max:255'],
            'password' => ['required']
        ]);
        if (Auth::attempt()) { //['username' => $request->username, 'password' => $request->password]
            echo "Berhasil";
        } else {
            echo "gagal";
        }
    }
}
