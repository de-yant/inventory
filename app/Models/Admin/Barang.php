<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barang extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "barangs";
    protected $primaryKey = 'id';
    protected $fillable = [
        'jenisb_id',
        'satuan_id',
        'merk_id',
        'barang_kode',
        'barang_nama',
        'barang_harga',
        'barang_stok',
        'barang_gambar',
    ];
}
