<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Models\Supplier;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class SupplierController extends Controller
{
    public function index()
    {
        $data['list_supplier'] = supplier::all();
        return view('admin.master-data.supplier.index', $data);
    }
    public function create()
    {
        return view('admin.master-data.supplier.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_supplier' => 'required|max:255',
            'no_hp' => 'required|max:13|unique:supplier',
            'alamat_supplier' => 'required',
            
        ]);
        $supplier = new supplier;
        $supplier->nama_supplier = request('nama_supplier');
        $supplier->no_hp = request('no_hp');
        $supplier->alamat_supplier = request('alamat_supplier');
        $supplier->save();
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect('admin/master-data/supplier')->with('success', 'Data Berhasil Ditambahkan');
    }
   
    public function edit(supplier $supplier)
    {
        $data['supplier'] = $supplier;
        return view('admin.master-data.supplier.edit', $data);
    }
    public function update(supplier $supplier)
    {
        $supplier->nama_supplier = request('nama_supplier');
        $supplier->no_hp = request('no_hp');
        $supplier->alamat_supplier = request('alamat_supplier');
        $supplier->save();
        Alert::info('Update', 'Data Berhasil Diupdate');
        return redirect('admin/master-data/supplier')->with('success', 'Data Berhasil Diupdate');
    }
    public function destroy(supplier $supplier)
    {
        $supplier->delete();
        Alert::error('Delete', 'Data Berhasil Dihapus');
        return redirect('admin/master-data/supplier')->with('danger', 'Data Berhasil Dihapus');
    }
    
  
}