<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index(User $user)
    {
        // if (Auth::user()) {
        //     if ($user->level == '1') {
        //         return redirect()->intended('admin/beranda');
        //     } elseif ($user->level == '2') {
        //         return redirect()->intended('kasir/main');
        //     }
        //     return redirect()->intended('home');
        // }

        return view('login.index_login');
    }

    public function proses(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Username tidak boleh kosong',
            ]
        );

        $kredensial = $request->only('email', 'password');

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
            'email' => 'Maaf email atau password anda salah'
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/login');
    }
}