<?php

namespace App\Http\Controllers\Admin;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use App\Models\Admin\BarangMasuk;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class LapMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangmasuk = BarangMasuk::with('penjual')->paginate(20);
        return view('admin.laporan.laporanMasuk.index', compact('barangmasuk'));
    }

    public function cetakpdf()
    {
        // $barangmasuk = BarangMasuk::limit(10)->get();
        // return view('admin.laporan.laporanMasuk.cetak', compact('barangmasuk'));
        $barangmasuk = BarangMasuk::limit(10)->get();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('admin.laporan.laporanMasuk.cetak', compact('barangmasuk'));
        return $pdf->stream('laporan-masuk.pdf');
    }
}
