<?php

namespace App\Models;

use App\Models\kategori;
use App\Http\Controllers\Admin\MasterData\KategoriController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    
    protected $primaryKey = "id_barang";
    // public $timestamp = false;
    protected $table = 'barang';
    public function kategori(){
        return $this->belongsTo(KategoriController::class, 'id_kategori');
    }
}