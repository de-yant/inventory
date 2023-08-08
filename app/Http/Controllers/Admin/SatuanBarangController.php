<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\SatuanBarang;
use Illuminate\Http\Request;

class SatuanBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.satuan.index')->with([
            'satuanbarang' =>SatuanBarang::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SatuanBarang::create([
            'satuanbarang_nama' => $request->satuanbarang_nama,
            'satuanbarang_ket' => $request->satuanbarang_ket,
        ])->save();

        return redirect()->back()->with('success','Satuan Data Barang Berhasil Diinput');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $satuan =SatuanBarang::findOrFail($id);
        return view('admin.satuan.edit')->with('satuan', $satuan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $satuan =SatuanBarang::findOrFail($id);
        $satuan->update([
            'satuanbarang_nama' => $request->satuanbarang_nama,
            'satuanbarang_ket' => $request->satuanbarang_ket,
        ]);

        return redirect()->route('satuanbarang.index')->with('success', 'Satuan Barang Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $satuan =SatuanBarang::findOrFail($id);
        $satuan->delete();

        return redirect()->route('satuanbarang.index')->with('success', 'Satuan Barang Berhasil Dihapus');
    }
}
