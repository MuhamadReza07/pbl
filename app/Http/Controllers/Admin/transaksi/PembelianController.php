<?php

namespace App\Http\Controllers\admin\transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\Supplier;
use App\Models\Barang;
class PembelianController extends Controller
{
    public function index(){
                   
        $data['list_pembelian'] = Pembelian::all();
        $data['list_barang'] = Barang::all();
        $data['list_supplier'] = Supplier::all();
       
        return view('admin.transaksi.pembelian.index', $data);
    }
    function create($id_supplier)
    {

        $pembelian = new Pembelian();
        $pembelian -> id_supplier = $id_supplier;
        $pembelian -> total_item  = 0;
        $pembelian -> total_harga = 0;
        $pembelian -> diskon = 0;
        $pembelian -> bayar  = 0;
        $pembelian ->save();

       
        // session(['id_pembelian' ,$pembelian->id_pembelian]);
        // session(['id_supplier' , $pembelian->id_supplier]);
      
        return redirect('admin/transaksi/pembelian_detail/index');
    }
    public function store()
    {
        
    }
   
   public function edit()
    {
       
    }
    public function show($supplier){
        
        $data['list_barang'] = Barang::all();
        $data['list_supplier'] = Supplier::all();
       
        $data['supplier'] = $supplier;
        
        return view('admin/transaksi/pembelian_detail/index', $data);
    }
    public function update()
    {
      
            
    }
    public function destroy()
    {
  
    }

}