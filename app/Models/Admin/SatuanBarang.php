<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SatuanBarang extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "satuan_barangs";
    protected $primaryKey = 'id';
    protected $fillable = [
        'satuanbarang_nama',
        'satuanbarang_ket'
    ];
}
