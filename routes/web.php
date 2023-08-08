<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;

//dashboard
use App\Http\Controllers\Admin\DashboardController;

//Master Data
use App\Http\Controllers\Admin\JenisBarangController;
use App\Http\Controllers\Admin\SatuanBarangController;
use App\Http\Controllers\Admin\MerkBarangController;
use App\Http\Controllers\Admin\BarangController;

//Pembeli & Penjual
use App\Http\Controllers\Admin\PembeliController;
use App\Http\Controllers\Admin\PenjualController;

//Transaksi
use App\Http\Controllers\Admin\BarangMasukController;
use App\Http\Controllers\Admin\BarangKeluarController;

//Laporan
use App\Http\Controllers\Admin\LapMasukController;
use App\Http\Controllers\Admin\LapKeluarController;
use App\Http\Controllers\Admin\LapStokController;

//Pengaturan
use App\Http\Controllers\Admin\WebController;
use App\Http\Controllers\Admin\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::controller(RoleController::class)->group(function(){
    //role management route here...
    Route::get('/roles', 'index');
});

Route::middleware(['auth', 'verified'])->group(function(){
    //Dashboard
    Route::get('dashboard', [DashboardController::class, 'index']);

     // Jenis Barang
    Route::get('jenisbarang', [JenisBarangController::class, 'index'])->name('jenisbarang.index');
    Route::post('jenisbarang', [JenisBarangController::class, 'store'])->name('jenisbarang.store');
    Route::put('jenisbarang/{id}/update', [JenisBarangController::class, 'update'])->name('jenisbarang.update');
    Route::get('jenisbarang/{id}/edit', [JenisBarangController::class, 'edit'])->name('jenisbarang.edit');
    Route::get('jenisbarang/{id}/destroy', [JenisBarangController::class, 'destroy'])->name('jenisbarang.destroy');

    // Satuan Barang
    Route::get('satuanbarang', [SatuanBarangController::class, 'index'])->name('satuanbarang.index');
    Route::post('satuanbarang', [SatuanBarangController::class, 'store'])->name('satuanbarang.store');
    Route::put('satuanbarang/{id}/update', [SatuanBarangController::class, 'update'])->name('satuanbarang.update');
    Route::get('satuanbarang/{id}/edit', [SatuanBarangController::class, 'edit'])->name('satuanbarang.edit');
    Route::get('satuanbarang/{id}/destroy', [SatuanBarangController::class, 'destroy'])->name('satuanbarang.destroy');

    //Merk Barang
    Route::get('merkbarang', [MerkBarangController::class, 'index'])->name('merkbarang.index');
    Route::post('merkbarang', [MerkBarangController::class, 'store'])->name('merkbarang.store');
    Route::put('merkbarang/{id}/update', [MerkBarangController::class, 'update'])->name('merkbarang.update');
    Route::get('merkbarang/{id}/edit', [MerkBarangController::class, 'edit'])->name('merkbarang.edit');
    Route::get('merkbarang/{id}/destroy', [MerkBarangController::class, 'destroy'])->name('merkbarang.destroy');

    //Barang
    Route::get('barang', [BarangController::class, 'index'])->name('barang.index');
    Route::post('barang', [BarangController::class, 'store'])->name('barang.store');
    Route::put('barang/{id}/update', [BarangController::class, 'update'])->name('barang.update');
    Route::get('barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');
    Route::get('barang/{id}/destroy', [BarangController::class, 'destroy'])->name('barang.destroy');

    //Pembeli
    Route::get('pembeli', [PembeliController::class, 'index'])->name('pembeli.index');
    Route::post('pembeli', [PembeliController::class, 'store'])->name('pembeli.store');
    Route::put('pembeli/{id}/update', [PembeliController::class, 'update'])->name('pembeli.update');
    Route::get('pembeli/{id}/edit', [PembeliController::class, 'edit'])->name('pembeli.edit');
    Route::get('pembeli/{id}/destroy', [PembeliController::class, 'destroy'])->name('pembeli.destroy');

    //Penjual
    Route::get('penjual', [PenjualController::class, 'index'])->name('penjual.index');
    Route::post('penjual', [PenjualController::class, 'store'])->name('penjual.store');
    Route::put('penjual/{id}/update', [PenjualController::class, 'update'])->name('penjual.update');
    Route::get('penjual/{id}/edit', [PenjualController::class, 'edit'])->name('penjual.edit');
    Route::get('penjual/{id}/destroy', [PenjualController::class, 'destroy'])->name('penjual.destroy');

    //Barang Masuk
    Route::get('barangmasuk', [BarangMasukController::class, 'index'])->name('barangmasuk.index');
    Route::post('barangmasuk', [BarangMasukController::class, 'store'])->name('barangmasuk.store');
    Route::put('barangmasuk/{id}/update', [BarangMasukController::class, 'update'])->name('barangmasuk.update');
    Route::get('barangmasuk/{id}/edit', [BarangMasukController::class, 'edit'])->name('barangmasuk.edit');
    Route::get('barangmasuk/{id}/destroy', [BarangMasukController::class, 'destroy'])->name('barangmasuk.destroy');

    //Barang Keluar
    Route::get('barangkeluar', [BarangKeluarController::class, 'index'])->name('barangkeluar.index');
    Route::post('barangkeluar', [BarangKeluarController::class, 'store'])->name('barangkeluar.store');
    Route::put('barangkeluar/{id}/update', [BarangKeluarController::class, 'update'])->name('barangkeluar.update');
    Route::get('barangkeluar/{id}/edit', [BarangKeluarController::class, 'edit'])->name('barangkeluar.edit');
    Route::get('barangkeluar/{id}/destroy', [BarangKeluarController::class, 'destroy'])->name('barangkeluar.destroy');

    //Laporan Barang Masuk
    Route::get('laporanmasuk', [LapMasukController::class, 'index'])->name('laporanmasuk.index');
    Route::post('laporanmasuk', [LapMasukController::class, 'store'])->name('laporanmasuk.store');
    Route::put('laporanmasuk/{id}/update', [LapMasukController::class, 'update'])->name('laporanmasuk.update');
    Route::get('laporanmasuk/{id}/edit', [LapMasukController::class, 'edit'])->name('laporanmasuk.edit');
    Route::get('laporanmasuk/{id}/destroy', [LapMasukController::class, 'destroy'])->name('laporanmasuk.destroy');

    //Laporan Barang Keluar
    Route::get('laporankeluar', [LapKeluarController::class, 'index'])->name('laporankeluar.index');
    Route::post('laporankeluar', [LapKeluarController::class, 'store'])->name('laporankeluar.store');
    Route::put('laporankeluar/{id}/update', [LapKeluarController::class, 'update'])->name('laporankeluar.update');
    Route::get('laporankeluar/{id}/edit', [LapKeluarController::class, 'edit'])->name('laporankeluar.edit');
    Route::get('laporankeluar/{id}/destroy', [LapKeluarController::class, 'destroy'])->name('laporankeluar.destroy');

    //Laporan Stok Barang
    Route::get('laporanstok', [LapStokController::class, 'index'])->name('laporanstok.index');
    Route::post('laporanstok', [LapStokController::class, 'store'])->name('laporanstok.store');
    Route::put('laporanstok/{id}/update', [LapStokController::class, 'update'])->name('laporanstok.update');
    Route::get('laporanstok/{id}/edit', [LapStokController::class, 'edit'])->name('laporanstok.edit');
    Route::get('laporanstok/{id}/destroy', [LapStokController::class, 'destroy'])->name('laporanstok.destroy');

    //pengaturan web
    Route::get('web', [WebController::class, 'index'])->name('web.index');

    //pengaturan user
    Route::get('user', [UserController::class, 'index'])->name('user.index');

});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
