<?php

namespace App\Models;

use App\Http\Controllers\Admin\MasterData\SupplierController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;
class Pembelian extends Model
{
   
    use HasFactory;
    
    protected $table = 'pembelian';
    protected $primaryKey = 'id_pembelian';
    protected $guarded = [];
    public function supplier()
    {
        return $this->belongsTo(SupplierController::class, 'id_supplier', 'id_supplier');
    }
}