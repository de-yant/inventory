<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BarangMasuk extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "barang_masuks";
    protected $primaryKey = 'id';
    protected $fillable = [
        'bm_kode',
        'barang_kode',
        'penjual_id',
        'barang_id',
        'bm_tanggal',
        'bm_jumlah',
    ];
    protected $hidden;
}
