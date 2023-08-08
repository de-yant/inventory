<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penjual extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "penjuals";
    protected $primaryKey = 'id';
    protected $fillable = [
        'penjual_nama',
        'penjual_alamat',
        'penjual_telp',
    ];
    protected $hidden;
}
