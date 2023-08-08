<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BarangKeluar extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "barang_keluars";
    protected $primaryKey = 'id';
    protected $fillable = [
        'bk_tanggal',
        'bk_kode',
        'barang_kode',
        'pembeli_id',
        'barang_id',
        'bk_tujuan',
        'bk_jumlah',
    ];
    protected $hidden;
}
