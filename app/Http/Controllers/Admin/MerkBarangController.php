<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\MerkBarang;
use Illuminate\Http\Request;

class MerkBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.merk.index')->with([
            'merk' => MerkBarang::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        MerkBarang::create([
            'merkbarang_nama' => $request->merkbarang_nama,
            'merkbarang_ket' => $request->merkbarang_ket
        ])->save();

        return redirect()->back()->with('success','Jenis Data Barang Berhasil Diinput');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $merk = MerkBarang::findOrFail($id);
        return view('admin.merk.edit')->with('merk', $merk);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $merk = MerkBarang::findOrFail($id);

        $merk->merkbarang_nama = $request->merkbarang_nama;
        $merk->merkbarang_ket = $request->merkbarang_ket;
        $merk->save();

        return redirect()->route('merkbarang.index')->with('success', 'Jenis Barang Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $merk = MerkBarang::findOrFail($id);
        $merk->delete();

        return redirect()->route('merkbarang.index')->with('success', 'Jenis Barang Berhasil Dihapus');
    }
}
