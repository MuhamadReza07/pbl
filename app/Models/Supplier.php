<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $primaryKey = "id_supplier";
    public $timestamp = false;
    protected $table = 'supplier';
    const UPDATED_AT = null;
}