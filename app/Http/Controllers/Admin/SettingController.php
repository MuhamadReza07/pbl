<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index(){
        return view('admin.setting.index');
    }
    public function show(){
        return Setting::first();
    }
    public function update(Setting $setting){
        $setting = Setting::first();
        $setting->nama_perusahaan = request('nama_perusahaan');
        $setting->telepon = request('telepon');
        $setting->alamat = request('alamat');
        $setting->update();
        return view('admin.setting');
    }
}