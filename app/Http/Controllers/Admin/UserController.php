<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data['list_user'] = User::all();
        return view('admin.user.index', $data);
    }

    public function create()
    {

        return view('admin.user.create');
    }
    public function store(Request $request)
    {

        // $request->validate([
        //     'name' => 'required|max:255',
        //     'username' => 'required|unique:username',
        //     'email' => 'required',
        //     'password' => 'required|unique:username',

        // ]);
        $user = new User;
        // $user->name = request('name');
        $user->username = request('username');
        $user->email = request('email');
        $user->level = 2;
        $user->password = bcrypt(request('password'));
        $user->save();
        return redirect('admin/user')->with('success', 'Data Berhasil Ditambahkan');
    }
    public function show()
    {
        return view('admin/user');
    }
    function edit(User $user)
    {
        $data['user'] = $user;
        return view('admin/user/edit', $data);
    }
    function update(User $user)
    {

        $$user = new User;
        // $user->name = request('name');
        $user->username = request('username');
        $user->email = request('email');
        if (request('password')) $user->password = bcrypt(request('password'));
        $user->level = 2;
        $user->save();

        return redirect('admin/user')->with('success', 'Data Berhasil Diupdate');
    }
    function destroy(User $user)
    {

        $user->delete();

        return redirect('admin/user')->with('danger', 'Data Berhasil Dihapus');
    }
}