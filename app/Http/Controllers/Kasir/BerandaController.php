<?php

namespace App\Http\Controllers\Kasir;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Supplier;

class BerandaController extends Controller
{
    public function index(){
        $totalSupplier = Supplier::count();
        $totalBarang = Barang::count();
        return view('kasir/main', compact('totalSupplier','totalBarang'))->with([
            'user' => Auth::user()
        ]);
    }
        
    public function showBeranda()
    {
  
        
        return view('kasir/main');
    }
}