<?php

namespace App\Models;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use App\Models\PembelianDetail;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\DB;
class Penjualan extends Model
{
    use HasFactory;
    protected $table = 'penjualan';
    protected $primaryKey = 'id';
    public $timestamp = false;
    protected $guarded = [];

    function Barang(){
        return $this->belongsTo(Barang::class, 'id_barang');
    }
    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['date'])
        ->translatedFormat(' d F Y');
    }
    public function PenjualanDetail(){
        return $this->hasMany('PenjualanDetail::class', 'id_penjualan_detail');
    }


    public static function boot()
    {
        parent::boot();
        static::creating(function ($item) {
            $item->id = (string) Str::orderedUuid();
        });
    }

    public static function getId(){
        
    }
 }