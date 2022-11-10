<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin/beranda')->with([
            'user' => Auth::user()
        ]);
    }

    public function showBeranda()
    {
        return view('kasir/main')->with([
           
        ]);
    }
}