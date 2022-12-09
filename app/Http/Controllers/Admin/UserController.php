<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    function index()
    {
        $data['list_user'] = User::all();
        return view('admin.user.index', $data);
    }
    function create()
    {
        return view('admin.user.create');
    }
    function store()
    {
        $user = new User;

        $user->username = request('username');
        $user->email = request('email');
        $user->level = 2;
        $user->password = bcrypt(request('password'));
        $user->save();
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect('admin/user')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show(user $user)
    {
        $data['user'] = $user;
        return view('admin.user.show', $data);
    }
    function edit(user $user)
    {
        $data['user'] = $user;
        return view('admin.user.edit', $data);
    }
    function update(user $user)
    {


        $user->username = request('username');
        $user->email = request('email');
        $user->level = 2;
        if (request('password')) $user->password = bcrypt(request('password'));
        $user->password = bcrypt(request('password'));
        Alert::info('Update', 'Data Berhasil Diupdate');
        $user->save();
        return redirect('admin/user')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(user $user)
    {
        $user->delete();
        Alert::error('Delete', 'Data Berhasil Dihapus');
        return redirect('admin/user')->with('danger', 'Data Berhasil Dihapus');
    }
}