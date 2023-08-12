<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Barang;
use App\Models\Admin\JenisBarang;
use App\Models\Admin\MerkBarang;
use App\Models\Admin\SatuanBarang;

class BarangController extends Controller
{
    public function index()
    {
       $barangs = Barang::with('jenisbarang','satuanbarang','merkbarang')->paginate(20);

        return view('admin.barang.index', compact('barangs'));
    }

    public function add(){
        return view('admin.barang.tampil');
    }

    // public function create()
    // {
    //     $jenis      = JenisBarang::all();
    //     $satuan     = SatuanBarang::all();
    //     $merk       = MerkBarang::all();

    //     return view('admin.barang.tambah', compact('jenis','satuan','merk'));
    // }

    public function store(Request $request)
    {
        $barang = Barang::latest()->first();
        $kodebrg = 'BRG';
        $kodetanggal = date('md');
        if($barang == null){
            $kode = '0001';
        }else{
            $kode = (int)substr($barang->barang_kode, 9, 4) + 1;
            $kode = str_pad($kode, 4, '0', STR_PAD_LEFT);
        }

        $kodebarang = $kodebrg.'-'.$kodetanggal.$kode;
        $request->merge([
            'barang_kode' => $kodebarang,
        ]);


        $barang = Barang::create([
            'barang_gambar' => $request->barang_gambar,
            'jenis_id' => $request->jenis_id,
            'satuan_id' => $request->satuan_id,
            'merk_id' => $request->merk_id,
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'barang_harga' => $request->barang_harga,
            'barang_ket' => $request->barang_ket,
        ]);

        if($request->hasFile('barang_gambar')){
            $request->file('barang_gambar')->move('images/',$request->file('barang_gambar')->getClientOriginalName());
            $barang->barang_gambar = $request->file('barang_gambar')->getClientOriginalName();
            $barang->save();
        }
        // if($request->hasFile('barang_gambar')){
        //     $request->file('barang_gambar')->move('images/',$request->file('barang_gambar')->getClientOriginalName());
        //     $barang->barang_gambar = $request->file('barang_gambar')->getClientOriginalName();
        //     $barang->save();
        // }

        return redirect()->route('barang.index')->with('success', 'Data Berhasil Disimpan!');
    }

    public function show($id)
    {
        $barang = Barang::findOrFail($id);

        return view('admin.barang.tampil', compact('barang'));
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        $jenis      = JenisBarang::all();
        $satuan     = SatuanBarang::all();
        $merk       = MerkBarang::all();

        return view('admin.barang.edit', compact('barang','jenis','satuan','merk'));
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->update($request->all());

        return redirect()->route('barang.index')->with('success', 'Data Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'Data Berhasil Dihapus!');
    }



}
