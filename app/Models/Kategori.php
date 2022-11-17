<?php

namespace App\Models;

use App\Models\Barang;
use App\Http\Controllers\Admin\MasterData\BarangController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $primaryKey = "id_kategori";
    //  public $timestamp = false;
    protected $table = 'kategori';
    public function barang(){
        return $this->hasMany(BarangController::class, 'id_barang');
    }
}