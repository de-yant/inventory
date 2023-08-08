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
            $table->string('jenis_id')->nullable();
            $table->string('satuan_id')->nullable();
            $table->string('merk_id')->nullable();
            $table->string('barang_kode');
            $table->string('barang_nama');
            $table->string('barang_harga');
            $table->string('barang_stok');
            $table->string('barang_gambar');
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
