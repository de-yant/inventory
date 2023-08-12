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
        'bk_jumlah',
    ];
    protected $hidden;

    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'pembeli_id', 'id');
    }

    public function jenis()
    {
        return $this->belongsTo(JenisBarang::class, 'jenis_id', 'id');
    }
}
