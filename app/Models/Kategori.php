<?php

namespace App\Models;

use App\Models\Barang;
use App\Models\ModelAuthenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends ModelAuthenticate
{
    use HasFactory;
    protected $primaryKey = "id";
    //  public $timestamp = false;
    protected $table = 'kategori';
    public function barang()
    {
        return $this->hasMany(Barang::class, 'id_barang');
    }
}