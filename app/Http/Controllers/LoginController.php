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
        //         return redirect()->intended('admin/beranda')->with('success', 'Login Berhasil');
        //     } elseif ($user->level == '2') {
        //         return redirect()->intended('kasir/main')->with('success', 'Login Berhasil');
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
                return redirect()->intended('admin/beranda')->with('success', 'Login Berhasil');
            } elseif ($user->level == '2') {
                return redirect()->intended('kasir/main')->with('success', 'Login Berhasil');;
            }
          


            return redirect()->intended('/');
        }

        return back()->with('danger', 'Login Gagal,Silahkan cek email dan password Anda');
        
      
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/login');
    }
}