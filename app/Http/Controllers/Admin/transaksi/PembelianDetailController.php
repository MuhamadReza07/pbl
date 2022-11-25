<?php

namespace App\Http\Controllers\admin\transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PembelianDetail;
use App\Models\Supplier;
use App\Models\Barang;
use App\Models\Pembelian;   

class PembelianDetailController extends Controller
{
    public function index($supplier){
        
        $data['list_supplier'] = Supplier::all();
        $data['list_barang'] = Barang::all();
        $data['supplier'] = $supplier;
        $id_pembelian = session('id_pembelian');
        $barang = Barang::orderBy('nama_barang')->get();
        $supplier = Supplier::find(session('id_supplier'));
        
         if(! $supplier){
            abort(404);
        }
        return view('admin.transaksi.pembelian_detail.index',$data,compact('id_pembelian', 'barang', 'supplier'));
    }
    public function filter(){
        $kode_barang = request('kode_barang');
        $data['kode_barang'] = $kode_barang;
        $data['list_barang'] = Barang::where('kode_barang', 'like', "%$kode_barang%")->get();
        return view('admin.transaksi.pembelian_detail.index', $data);
    }
   
}