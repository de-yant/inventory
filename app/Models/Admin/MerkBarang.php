<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MerkBarang extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "merk_barangs";
    protected $primaryKey = 'id';
    protected $fillable = [
        'merkbarang_nama',
        'merkbarang_ket'
    ];
    protected $hidden;

    public function barang()
    {
        return $this->hasMany(Barang::class, 'merk_id', 'id');
    }
}
