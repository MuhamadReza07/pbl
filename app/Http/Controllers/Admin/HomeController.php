<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Supplier;

class HomeController extends Controller
{
    public function index()
    {
        $totalSupplier = Supplier::count();
        $totalBarang = Barang::count();


        
        return view('admin/beranda', compact('totalSupplier','totalBarang'))->with([
            'user' => Auth::user()
        ]);
    }

    public function showBeranda()
    {
        return view('kasir/main')->with([
           
        ]);
    } 
}