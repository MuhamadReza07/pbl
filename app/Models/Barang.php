<?php

namespace App\Models;

use App\Models\Kategori;
use App\Models\ModelAuthenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Barang extends ModelAuthenticate
{
    use HasFactory;

    protected $primaryKey = "id";
    // public $timestamp = false;

    protected $table = 'barang';
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat(' d F Y');
    }
    public function TransaksiDetail()
    {
        return $this->hasMany(TransaksiDetailController::class, 'id_pembelian_detail');
    }
    public function transaksi()
    {
        return $this->hasMany(TransaksiController::class, 'id_penjualan');
    }
}