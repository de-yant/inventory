<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis_barangs')->insert([
            'jenisbarang_nama' => 'Gendongan',
            'jenisbarang_ket' => 'Jenis Barang Gendongan',
        ]);

        DB::table('jenis_barangs')->insert([
            'jenisbarang_nama' => 'Pakaian',
            'jenisbarang_ket' => 'Jenis Barang Pakaian',
        ]);
    }
}
