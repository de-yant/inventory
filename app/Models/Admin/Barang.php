<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\JenisBarang;

class Barang extends Model
{
    use HasFactory;
    protected $table = "barangs";
    protected $primaryKey = 'id';
    protected $fillable = [
        'barang_gambar',
        'jenis_id',
        'satuan_id',
        'merk_id',
        'barang_kode',
        'barang_nama',
        'barang_harga',
        'barang_stok',
        'barang_ket',

    ];

    public function jenisbarang()
    {
        return $this->belongsTo(JenisBarang::class, 'jenis_id', 'id');
    }

    public function satuanbarang()
    {
        return $this->belongsTo(SatuanBarang::class, 'satuan_id', 'id');
    }

    public function merkbarang()
    {
        return $this->belongsTo(MerkBarang::class, 'merk_id', 'id');
    }

    public function barangmasuk()
    {
        return $this->belongsTo(BarangMasuk::class, 'barang_id', 'id');
    }
}
