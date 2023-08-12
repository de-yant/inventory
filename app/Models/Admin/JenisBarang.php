<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Admin\Barang;

class JenisBarang extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "jenis_barangs";
    protected $primaryKey = 'id';
    protected $fillable = [
        'jenisbarang_nama',
        'jenisbarang_ket'
    ];
    protected $hidden;

    public function barang()
    {
        return $this->hasMany(Barang::class, 'jenis_id', 'id');
    }

    public function barangmasuk()
    {
        return $this->hasMany(BarangMasuk::class, 'jenis_id', 'id');
    }

    public function barangkeluar()
    {
        return $this->hasMany(BarangKeluar::class, 'jenis_id', 'id');
    }

}
