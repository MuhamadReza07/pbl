<?php

namespace App\Models;

use App\Models\Pembelian;
use App\Models\PembelianDetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    public $timestamp = false;
    protected $table = 'supplier';
    const UPDATED_AT = null;

    public function pembelian(){
        return $this->hasMany(PembelianController::class, 'id_pembelian');
    }
    public function pembelianDetail(){
        return $this->hasMany(PembelianDetailController::class, 'id_pembelian_detail');
    }
}