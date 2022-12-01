<?php

namespace App\Models;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


class Penjualan extends Model
{
    use HasFactory;
    protected $table = 'penjualan';
    protected $primaryKey = 'id_penjualan';
    protected $guarded = [];

    public function barang(){
        return $this->belongsTo(BarangController::class, 'id_barang');
    }
    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['date'])
        ->translatedFormat(' d F Y');
    }
 }