<?php

namespace App\Http\Controllers\Kasir;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(){
        return view('kasir/main');
    }
    public function showBeranda()
    {
        return view('kasir/main')->with([
           
        ]);
    }
}