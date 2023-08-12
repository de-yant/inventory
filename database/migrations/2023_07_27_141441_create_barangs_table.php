<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('barang_gambar')->nullable();
            $table->string('jenis_id');
            $table->string('satuan_id');
            $table->string('merk_id');
            $table->string('barang_kode')->unique();
            $table->string('barang_nama');
            $table->string('barang_harga');
            $table->string('barang_stok')->default(0);
            $table->string('barang_masuk')->default(0);
            $table->string('barang_keluar')->default(0);
            $table->string('barang_ket')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
