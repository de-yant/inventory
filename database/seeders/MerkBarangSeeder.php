<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerkBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('merk_barangs')->insert([
            'merkbarang_nama' => 'Baby Melly',
            'merkbarang_ket' => 'Merk Barang Baby Melly',
        ]);

        DB::table('merk_barangs')->insert([
            'merkbarang_nama' => 'Baby Safe',
            'merkbarang_ket' => 'Merk Barang Baby Safe',
        ]);

        DB::table('merk_barangs')->insert([
            'merkbarang_nama' => 'Baby Belle',
            'merkbarang_ket' => 'Merk Barang Baby Belle',
        ]);
    }
}
