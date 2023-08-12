<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Barang;
use Illuminate\Http\Request;
use App\Models\Admin\Pembeli;
use App\Models\Admin\JenisBarang;
use App\Models\Admin\BarangKeluar;
use App\Models\Admin\SatuanBarang;
use App\Http\Controllers\Controller;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangkeluar = BarangKeluar::with('jenis','pembeli')->paginate(20);

        return view('admin.barangkeluar.index', compact('barangkeluar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenis      = JenisBarang::all();
        $barang     = Barang::all();
        $pembeli    = Pembeli::all();
        $satuan     = SatuanBarang::all();
        return view('admin.barangkeluar.tambah', compact('jenis','barang', 'pembeli', 'satuan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $barangkeluar = BarangKeluar::latest()->first();
        $kodekeluar = 'BK';
        $kodetanggal = date('md');
        if($barangkeluar == null){
            $kode = '0001';
        }else{
            $kode = (int)substr($barangkeluar->bk_kode, 9, 4) + 1;
            $kode = str_pad($kode, 4, '0', STR_PAD_LEFT);
        }
        $kodebarang = $kodekeluar.'-'.$kodetanggal.'-'.$kode;
        $request->merge([
            'bk_kode' => $kodebarang,
        ]);

        // $kodekeluar = 'BK';
        // $kodetanggal = date('md');
        // if($kodekeluar == null){
        //     $kode = '0001';
        // }else{
        //     $kode = (int)substr($barangkeluar->bk_kode, 9, 4) + 1;
        //     $kode = str_pad($kode, 4, '0', STR_PAD_LEFT);
        // }
        // $kodebarang = $kodekeluar.'-'.$kodetanggal.'-'.$kode;
        // $request->merge([
        //     'bk_kode' => $kodebarang,
        // ]);

        // dd($request->all());

        $barangkeluar = BarangKeluar::create([
            'bk_kode'           => $request->bk_kode,
            'bk_tanggal'        => $request->bk_tanggal,
            'pembeli_id'        => $request->pembeli_id,
            'barang_kode'       => $request->barang_kode,
            'bk_jumlah'         => $request->bk_jumlah,
        ]);

        return redirect()->route('barangkeluar.index')->with('success', 'Data Berhasil Disimpan!');
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
        $barangkeluar   = BarangKeluar::findOrFail($id);
        $jenis          = JenisBarang::all();
        $barang         = Barang::all();
        $pembeli        = Pembeli::all();
        $satuan         = SatuanBarang::all();
        return view('admin.barangkeluar.edit', compact('barangkeluar', 'jenis', 'barang', 'pembeli', 'satuan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $barangkeluar = BarangKeluar::findOrFail($id);
        $barangkeluar->update($request->all());

        return redirect()->route('barangkeluar.index')->with('success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barangkeluar = BarangKeluar::findOrFail($id);
        $barangkeluar->delete();

        return redirect()->route('barangkeluar.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
