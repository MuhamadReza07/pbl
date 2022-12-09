<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Models\Barang;
use App\Models\Kategori;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

class BarangController extends Controller
{
    function index()
    {
        $date = Carbon::now()->format('d-m-Y');
        $now = Carbon::now();
        $thnBulan = $now->year . $now->month;
        $cek = Barang::count();
        if ($cek == 0) {
            $urut = 000001;
            $nomor = 'PA' . $thnBulan . $urut;
        } else {
            $ambil = Barang::all()->last();
            $urut = (int)substr($ambil->kode_barang, -8) + 1;
            $nomor = 'PA' . $thnBulan . $urut;
        }

        $data['list_barang'] = Barang::all();
        $data['list_kategori'] = Kategori::all();
        return view('admin.master-data.barang.index', compact('nomor'), $data);
    }
    function create()
    {
        $data['list_kategori'] = Kategori::all();
        return view('admin.master-data.barang.create', $data);
    }
    public function store(Request $request)
    {

        // $data['kategori'] = $kategori;
        // $request->validate([
        //     'nama_barang' => 'required|max:255',
        //     'kode_barang' => 'required|unique:barang',
        //     'harga_dasar' => 'required',
        //     'harga_jual' => 'required',
        //     'stok' => 'required',
        //     'id_kategori' => 'required'
        // ]);
        $barang = new Barang;
        $barang->nama_barang = request('nama_barang');
        $barang->kode_barang = request('kode_barang');
        $barang->harga_dasar = request('harga_dasar');
        $barang->harga_jual = request('harga_jual');
        $barang->id_kategori = request('id_kategori');
        $barang->stok = request('stok');

        $barang->save();
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect('admin/master-data/barang')->with('success', 'Data Berhasil Ditambahkan');
    }

    function edit(Barang $barang)
    {
        $data['barang'] = $barang;
        $data['list_kategori'] = Kategori::all();
        return view('admin.master-data.barang.edit', $data);
    }
    function show(Kategori $kategori)
    {

        $data['kategori'] = $kategori;
        return view('admin/master-data/barang', $data);
    }
    function update(Barang $barang)
    {
        $barang->nama_barang = request('nama_barang');
        $barang->kode_barang = request('kode_barang');
        $barang->harga_dasar = request('harga_dasar');
        $barang->harga_jual = request('harga_jual');
        $barang->id_kategori = request('id_kategori');
        $barang->stok = request('stok');
        $barang->kategori = request('kategori');
        $barang->save();
        Alert::info('Update', 'Data Berhasil Diupdate');
        return redirect('admin/master-data/barang')->with('success', 'Data Berhasil Diupdate');
    }
    function destroy(Barang $barang)
    {
        $barang->delete();
        Alert::error('Delete', 'Data Berhasil Dihapus');
        return redirect('admin/master-data/barang')->with('danger', 'Data Berhasil Dihapus');
    }
}