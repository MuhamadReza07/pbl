<?php

namespace App\Models;
use App\Models\Supplier;
use App\Models\Barang;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembelianDetail extends Model
{
    use HasFactory;
    protected $table = 'pembelian_detail';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function supllier(){
        return $this->belongsTo(SupplierController::class, 'id_supplier', 'id_supplier');
    }
    public function barang(){
        return $this->belongsTo(BarangController::class, 'id_barang');
    }

    public function filter(){
        dd(request()->all());
    }
}