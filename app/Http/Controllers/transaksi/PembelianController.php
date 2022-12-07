<?php

namespace App\Http\Controllers\transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\Supplier;
use App\Models\Barang;
use App\Models\PembelianDetail;

class PembelianController extends Controller
{
   public function index(){
    $supplier = Supplier::orderBy('nama_supplier')->get();

        return view('transaksi.pembelian.index', compact('supplier'));
   }
   public function show($supplier){
        
    $data['list_barang'] = Barang::all();
    $data['list_supplier'] = Supplier::all();
   
    $data['supplier'] = $supplier;
    
    return view('transaksi/pembelian_detail/index', $data);
}
}