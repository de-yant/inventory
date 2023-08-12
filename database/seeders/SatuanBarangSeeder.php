<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuan_barangs')->insert([
            'satuanbarang_nama' => 'Pcs',
            'satuanbarang_ket' => 'Satuan Barang Pcs',
        ]);

        DB::table('satuan_barangs')->insert([
            'satuanbarang_nama' => 'Kg',
            'satuanbarang_ket' => 'Satuan Barang Kg',
        ]);

        DB::table('satuan_barangs')->insert([
            'satuanbarang_nama' => 'Lusin',
            'satuanbarang_ket' => 'Satuan Barang Lusin',
        ]);

        DB::table('satuan_barangs')->insert([
            'satuanbarang_nama' => 'Dus',
            'satuanbarang_ket' => 'Satuan Barang Dus',
        ]);
    }
}
