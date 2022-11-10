<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use user;
class LoginController extends Controller
{
    public function index()
    {
        // if (Auth::user()) {
        //     if ($user->level == '1') {
        //         return redirect()->intended('admin/beranda');
        //     } elseif ($user->level == '2') {
        //         return redirect()->intended('kasir/beranda/index');
        //     }
        //     return redirect()->intended('home');
        // }

        return view('login.index_login');
    }

    public function proses(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ],
            [
                'username.required' => 'Username tidak boleh kosong',
            ]
        );

        $kredensial = $request->only('username', 'password');

        if (Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->level == '1') {
                return redirect()->intended('admin/beranda');
            } elseif ($user->level == '2') {
                return redirect()->intended('kasir/main');
            }

           

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => 'Maaf username atau password anda salah'
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/login');
    }
}