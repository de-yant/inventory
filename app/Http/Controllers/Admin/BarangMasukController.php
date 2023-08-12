<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Barang;
use Illuminate\Http\Request;
use App\Models\Admin\Penjual;
use App\Models\Admin\BarangMasuk;
use App\Models\Admin\JenisBarang;
use App\Models\Admin\SatuanBarang;
use App\Http\Controllers\Controller;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $barangmasuk = BarangMasuk::with('penjual','jenis','barang')->paginate(20);

        return view('admin.barangmasuk.index', compact('barangmasuk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenis = JenisBarang::all();
        $penjual = Penjual::all();
        $barang = Barang::all();
        $satuan = SatuanBarang::all();

        return view('admin.barangmasuk.tambah', compact('jenis', 'penjual','barang','satuan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $barangmasuk = BarangMasuk::latest()->first();
        $kodemasuk = 'BM';
        $kodetanggal = date('md');
        if($barangmasuk == null){
            $kode = '0001';
        }else{
            $kode = (int)substr($barangmasuk->bm_kode, 9, 4) + 1;
            $kode = str_pad($kode, 4, '0', STR_PAD_LEFT);
        }
        $kodebarang = $kodemasuk.'-'.$kodetanggal.'-'.$kode;
        $request->merge([
            'bm_kode' => $kodebarang,
        ]);

        // $kodebarang = Barang::where('barang_kode', $request->barang_kode)->first();
        // $request->merge([
        //     'barang_kode' => $kodebarang->barang_kode,
        // ]);

        BarangMasuk::create([
            'penjual_id'    => $request->penjual_id,
            'bm_kode'       => $request->bm_kode,
            'barang_kode'   => $request->barang_kode, // tambahin ini di tabel 'barangmasuk
            'bm_jumlah'     => $request->bm_jumlah,
            'bm_tanggal'    => $request->bm_tanggal,
        ]);

        return redirect()->route('barangmasuk.index')->with('success', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barangmasuk = BarangMasuk::findOrFail($id);
        $jenis = JenisBarang::all();
        $penjual = Penjual::all();
        $barang = Barang::all();
        $satuan = SatuanBarang::all();
        return view('admin.barangmasuk.edit', compact('barangmasuk', 'jenis', 'penjual','barang','satuan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $barangmasuk = BarangMasuk::findOrFail($id);
        $barangmasuk->update($request->all());

        return redirect()->route('barangmasuk.index')->with('success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barangmasuk = BarangMasuk::findOrFail($id);
        $barangmasuk->delete();

        return redirect()->route('barangmasuk.index')->with('success', 'Data Berhasil Dihapus!');
    }


}
