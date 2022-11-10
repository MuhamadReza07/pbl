<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Models\Kategori;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
   public function index()
    {
        $data['list_kategori'] = kategori::all();
        return view('admin.master-data.kategori.index', $data);
    }
    public function create()
    {
        return view('admin.master-data.kategori.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|unique:kategori'
        ]);
        $kategori = new kategori;
        $kategori->kategori = request('kategori');
        $kategori->save();

        return redirect('admin/master-data/kategori')->with('success', 'Data Berhasil Ditambahkan');
    }
   
    public function edit(Kategori $kategori)
    {
        $data['kategori'] = $kategori;
        return view('admin/master-data/kategori/edit', $data);
    }
    public function update(kategori $kategori)
    {
        $kategori->kategori = request('kategori');
        
        
        $kategori->save();

        return redirect('admin/master-data/kategori')->with('success', 'Data Berhasil Diupdate');
    }
    public function destroy(kategori $kategori)
    {
        $kategori->delete();

        return redirect('admin/master-data/kategori')->with('danger', 'Data Berhasil Dihapus');
    }
}