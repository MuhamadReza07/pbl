<?php

namespace App\Http\Controllers\transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Penjualan;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
class PenjualanController extends Controller
{
    public function detail(){
      
        $date = Carbon::now()->format('d-m-Y');
    
        $data['list_barang'] = Barang::all();
        $data['list_penjualan'] = Penjualan::all();
        $data['list_penjual'] = Penjualan::orderBy('id', 'DESC')->take(1)->get();
        return view('transaksi/penjualan/index',  $data , compact('date'));
    }
    public function index(){
        $data['list_penjualan'] = Penjualan::all();
       
        $penjualan = new Penjualan();
        $penjualan->no_nota = request('no_note');
        $penjualan->waktu = date("Y-m-d H:i;s");
        $penjualan->total_item = request('total_item');
        $penjualan->total_harga = request('total_harga');
        $penjualan->save();
        return redirect('transaksi/penjualan/' . $penjualan->id);
    }
    public function store(Penjualan $penjualan)
    {
        // $penjualan_detail = PenjualanDetail::where('id_penjualan', $penjualan->id)
        // //     ->where('id_barang', request('kode_barang'))->first();

        // if ($penjualan_detaili_detail) {
        //     $penjualan_detail->jumlah++;
        //     $penjualan_detail->save();
        // } else {
        //    $penjuala_detail = new PenjualanDetail;
        //    $penjuala_detail->id_penjualan = $penjualan->id;
        //    $penjuala_detail->id_barang = request('kode_barang');
        //    $penjuala_detail->jumlah = 1;
        //    $penjuala_detail->save();
        // }


        return redirect('transaksi/penjualan/' . $penjualan->id);
    }

    public function storePenjualan()
    {
        $date = Carbon::now()->format('d-m-Y');
      
        
        $penjualan = New Penjualan;
        $penjualan->id_barang = request('id_barang');
        $penjualan->total_item = request('total_item');
        
        $penjualan->total_harga = ($penjualan->total_item) * ($penjualan->barang->harga_jual);
        
        $penjualan->save();

        return back();
  
        
    }

    function destroy(Penjualan $penjualan)
    {
        $penjualan->delete();
        Alert::error('Delete', 'Data Berhasil Dihapus');
        return back();
    }
    
}