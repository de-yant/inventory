<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;
    protected $table = "barang_masuks";
    protected $primaryKey = 'id';
    protected $fillable = [
        'bm_kode',
        'barang_kode',
        'penjual_id',
        'bm_tanggal',
        'bm_jumlah',
    ];
    protected $hidden;

    public function penjual()
    {
        return $this->belongsTo(Penjual::class, 'penjual_id', 'id');
    }

    public function jenis()
    {
        return $this->belongsTo(JenisBarang::class, 'jenis_id', 'id');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id', 'id');
    }

}
