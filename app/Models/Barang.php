<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
class Barang extends Model
{
    use HasFactory;
    
    protected $primaryKey = "id";
    // public $timestamp = false;
    
    protected $table = 'barang';
    public function kategori(){
        return $this->belongsTo(Kategori::class,'id_kategori');
    }
    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat(' d F Y');
    }
    public function pembelianDetail(){
        return $this->hasMany(PembelianDetailController::class, 'id_pembelian_detail');
    }
    public function penjualan(){
        return $this->hasMany(PenjualanController::class, 'id_penjualan');
    }
}