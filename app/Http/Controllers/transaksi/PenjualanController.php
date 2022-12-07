<?php

namespace App\Http\Controllers\transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Penjualan;

use Carbon\Carbon;
class PenjualanController extends Controller
{
    public function index(){
        $date = Carbon::now()->format('d-m-Y');
        $now = Carbon::now();
        $thnBulan = $now->year . $now->month;
        $cek = Penjualan::count();
        if($cek == 0){
            $urut = 10000001;
            $nomor = 'BR' . $thnBulan . $urut;
        }else{
            $ambil = Penjualan::all()->last();
            $urut = (int)substr($ambil->no_nota, -8) + 1;
            $nomor = 'BR' . $thnBulan . $urut;
        }
        $data['list_barang'] = Barang::all();
        $data['list_penjualan'] = Penjualan::all();
        return view('transaksi/penjualan/index',  compact('date', 'nomor'), $data);
        
    }
    public function show(){
        $data['list_barang'] = Barang::all();
        $data['list_penjualan'] = Penjualan::all();
        return view('transaksi/penjualan', $data);
    }
}