<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\JenisBarang;
use Illuminate\Http\Request;

class JenisBarangController extends Controller
{
    public function index()
    {
        $jenis = JenisBarang::all();
        return view('admin.jenisBarang.index', compact('jenis'));
    }

    public function store(Request $request)
    {
        JenisBarang::create([
            'jenisbarang_nama' => $request->jenisbarang_nama,
            'jenisbarang_ket' => $request->jenisbarang_ket
        ])->save();

        return redirect()->back()->with('success','Jenis Data Barang Berhasil Diinput');
    }

    public function edit($id)
    {
        $jenis = JenisBarang::findOrFail($id);
        return view('admin.jenisBarang.edit', compact('jenis'));
    }

    public function update(Request $request, $id)
    {
        $jenis = JenisBarang::findOrFail($id);

        $jenis->jenisbarang_nama = $request->jenisbarang_nama;
        $jenis->jenisbarang_ket = $request->jenisbarang_ket;
        $jenis->save();

        return redirect()->route('jenisbarang.index')->with('success', 'Jenis Barang Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $jenis = JenisBarang::findOrFail($id);
        $jenis->delete();

        return redirect()->route('jenisbarang.index')->with('success', 'Jenis Barang Berhasil Dihapus');
    }
}
