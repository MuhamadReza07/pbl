<?php

namespace App\Http\Controllers\Admin\transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index(){
        return view('admin/transaksi/penjualan/index');
    }
}