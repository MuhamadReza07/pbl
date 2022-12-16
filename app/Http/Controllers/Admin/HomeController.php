<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Supplier;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $totalSupplier = Supplier::count();
        $totalBarang = Barang::count();
        $totalUser = User::count();




        return view('admin/beranda', compact('totalSupplier', 'totalBarang', 'totalUser'))->with([
            'user' => Auth::user()
        ]);
    }

    public function showBeranda()
    {
        return view('kasir/main')->with([]);
    }
}