<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Models\Admin\Barang;
use Illuminate\Http\Request;
use App\Models\Admin\BarangMasuk;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class LapStokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangstok = Barang::all();
        // $barangstok = Barang::with('barangmasuk')->paginate(20);
        // $totalbarangmasuk = DB::table('barang_masuks')->select([
        //     DB::raw('SUM(bm_jumlah) as total_barang_masuk'),
        //     DB::raw('barang_kode as kode_barang'),
        // ])
        //     ->groupBy('barang_kode')
        //     ->get();

        // $totalbarangmasuk = BarangMasuk::select([
        //     DB::raw('SUM(bm_jumlah) as total_barang_masuk'),
        //     DB::raw('barang_kode as kode_barang'),
        // ])
        //     ->groupBy('barang_kode')
        //     ->get();

    // dd($totalbarangmasuk);

        return view('admin.laporan.laporanStok.index', compact('barangstok' ));
    }

    public function cetakpdf()
    {
        $barangstok = Barang::limit(10)->get();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('admin.laporan.laporanStok.cetak', compact('barangstok'));
        return $pdf->stream('laporan-stok.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
