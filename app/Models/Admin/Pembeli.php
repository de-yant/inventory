<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pembeli extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "pembelis";
    protected $primaryKey = 'id';
    protected $fillable = [
        'pembeli_nama',
        'pembeli_alamat',
        'pembeli_telp',
    ];
    protected $hidden;
}
