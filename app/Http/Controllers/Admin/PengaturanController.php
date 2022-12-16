<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaturan;
use RealRashid\SweetAlert\Facades\Alert;

class PengaturanController extends Controller
{
    public function index()
    {
        $data['list_pengaturan'] = Pengaturan::all();
        return view('admin.pengaturan.index', $data);
    }


    public function store()
    {
        $pengaturan = new Pengaturan();
        $pengaturan->nama_perusahaan = request('nama_perusahaan');
        $pengaturan->telepon = request('telepon');
        $pengaturan->alamat = request('alamat');
        $pengaturan->save();
        Alert::success('Success', 'Data toko Berhasil Ditambahkan');
        return redirect('admin/pengaturan')->with('success', 'Data toko Berhasil Ditambahkan');
    }

    function edit(Pengaturan $pengaturan)
    {
        $data['pengaturan'] = $pengaturan;
        return view('admin/pengaturan/edit', $data);
    }

    function show(Pengaturan $pengaturan)
    {
        $data['pengaturan'] = $pengaturan;
        return view('admin/pengaturan', $data);
    }
    function update(Pengaturan $pengaturan)
    {
        if (request('nama_perusahaan')) $pengaturan->nama_perusahaan = request('nama_perusahaan');
        if (request('telepon')) $pengaturan->telepon = request('telepon');
        if (request('alamat')) $pengaturan->alamat = request('alamat');
        $pengaturan->save();
        Alert::info('Update', 'Data Toko Berhasil Diupdate');
        return redirect('admin/pengaturan')->with('success', 'Data toko Berhasil Diupdate');
    }

    public function destroy(Pengaturan $pengaturan)
    {
        $pengaturan->delete();
        Alert::error('Delete', 'Data Toko Berhasil Dihapus');
        return redirect('admin/pengaturan')->with('danger', 'Data Toko Berhasil Dihapus');
    }
}