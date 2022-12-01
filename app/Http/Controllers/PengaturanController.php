<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaturan;

class PegaturanController extends Controller
{
    public function index()
    {

        return view('pengaturan/index');
    }
}