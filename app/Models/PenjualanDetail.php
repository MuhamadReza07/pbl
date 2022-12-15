<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penjualan;
use App\Models\Barang;
class PenjualanDetail extends Model
{
    protected $table = 'penjualan_detail';
    
    public function Barang(){
        return $this->belongsTo(Barang::class, 'id_barang');
    }
    public function Penjualan(){
        return $this->belongsTo(Penjualan::class,'id_penjualan');
    }
}