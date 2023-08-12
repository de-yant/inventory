<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pembelis')->insert([
            'pembeli_nama' => 'Rizky',
            'pembeli_alamat' => 'Jl. Raya Bekasi',
            'pembeli_telp' => '081234567890',
        ]);

        DB::table('pembelis')->insert([
            'pembeli_nama' => 'Imron',
            'pembeli_alamat' => 'Jl. Raya Cikarang',
            'pembeli_telp' => '081234567890',
        ]);

        DB::table('pembelis')->insert([
            'pembeli_nama' => 'Ahmad',
            'pembeli_alamat' => 'Jl. Raya Jakarta',
            'pembeli_telp' => '081234567890',
        ]);
    }
}
