<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
}
