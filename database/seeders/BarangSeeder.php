<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            'barang_gambar' => 'default.png',
            'jenis_id'      => 1,
            'satuan_id'     => 1,
            'merk_id'       => 1,
            'barang_kode'   => 'BRG-08120001',
            'barang_nama'   => 'Matras',
            'barang_harga'  => 45000,
            'barang_stok'   => 0,
            'barang_masuk'  => 0,
            'barang_keluar' => 0,
            'barang_ket'    => 'Matras untuk tidur',
        ]);
    }
}
