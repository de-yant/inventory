<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //user
        $this->call([UserRolePermissionSeeder::class]);

        //master data
        $this->call([JenisBarangSeeder::class]);
        $this->call([SatuanBarangSeeder::class]);
        $this->call([MerkBarangSeeder::class]);
        $this->call([BarangSeeder::class]);

        //pelanggan
        $this->call([PembeliSeeder::class]);
        $this->call([PenjualSeeder::class]);
    }
}
