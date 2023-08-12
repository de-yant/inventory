<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\BarangKeluar;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class LapKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangkeluar = BarangKeluar::with('jenis','pembeli')->paginate(20);

        return view('admin.laporan.laporanKeluar.index', compact('barangkeluar'));
    }

    public function cetakpdf()
    {
        $barangkeluar = BarangKeluar::limit(10)->get();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('admin.laporan.laporanKeluar.cetak', compact('barangkeluar'));
        return $pdf->stream('laporan-keluar.pdf');
    }
}
