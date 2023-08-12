<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Barang;
use Illuminate\Http\Request;
use App\Models\Admin\Pembeli;
use App\Models\Admin\Penjual;
use App\Models\Admin\MerkBarang;
use App\Models\Admin\BarangMasuk;
use App\Models\Admin\JenisBarang;
use App\Models\Admin\BarangKeluar;
use App\Models\Admin\SatuanBarang;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $jenis      = JenisBarang::count();
        $satuan     = SatuanBarang::count();
        $merk       = MerkBarang::count();
        $barang     = Barang::count();
        $bm         = BarangMasuk::count();
        $bk         = BarangKeluar::count();
        $pembeli    = Pembeli::count();
        $penjual    = Penjual::count();

        return view('admin.dashboard.index', compact('jenis', 'satuan', 'merk', 'barang', 'bm', 'bk', 'pembeli', 'penjual'));
    }
}
