<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Models\Barang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    function index()
    {
        $data['list_barang'] = Barang::all();
        return view('admin.master-data.barang.index', $data);
    }
    function create()
    {
        return view('admin.master-data.barang.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|max:255',
            'kode_barang' => 'required|unique:barang',
            'harga_dasar' => 'required',
            'harga_jual' => 'required',
            'stok' => 'required',
            'kategori' => 'required'
        ]);
        $barang = new Barang;
        $barang->nama_barang = request('nama_barang');
        $barang->kode_barang = request('kode_barang');
        $barang->harga_dasar = request('harga_dasar');
        $barang->harga_jual = request('harga_jual');
        $barang->stok = request('stok');
        $barang->kategori = request('kategori');
        $barang->save();

        return redirect('admin/master-data/barang')->with('success', 'Data Berhasil Ditambahkan');
    }
   
    function edit(Barang $barang)
    {
        $data['barang'] = $barang;
        return view('admin.master-data.barang.edit', $data);
    }
    function update(Barang $barang)
    {
      
        $barang->nama_barang = request('nama_barang');
        $barang->kode_barang = request('kode_barang');
        $barang->harga_dasar = request('harga_dasar');
        $barang->harga_jual = request('harga_jual');
        $barang->stok = request('stok');
        $barang->kategori = request('kategori');
        $barang->save();

        return redirect('admin/master-data/barang')->with('success', 'Data Berhasil Diupdate');
    }
    function destroy(Barang $barang)
    {
  
        $barang->delete();

        return redirect('admin/master-data/barang')->with('danger', 'Data Berhasil Dihapus');
    }

   
}