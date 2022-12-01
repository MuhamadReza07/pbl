<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Models\Kategori;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
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
        Alert::success('Success', 'Kategori Berhasil Ditambahkan');
        return redirect('admin/master-data/kategori')->with('success', 'Kategori Berhasil Ditambahkan');
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
        Alert::info('Update', 'Kategori Berhasil Diupdate');
        return redirect('admin/master-data/kategori')->with('success', 'Kategori Berhasil Diupdate');
    }
    public function destroy(kategori $kategori)
    {
        $kategori->delete();
        Alert::error('Delete', 'Kategori Berhasil Dihapus');
        return redirect('admin/master-data/kategori')->with('danger', 'Kategori Berhasil Dihapus');
    }
}