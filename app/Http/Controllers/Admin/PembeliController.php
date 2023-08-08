<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Pembeli;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pembeli.index')->with([
            'pembeli' => Pembeli::all()
        ]);
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
        Pembeli::create([
            'pembeli_nama' => $request->pembeli_nama,
            'pembeli_alamat' => $request->pembeli_alamat,
            'pembeli_telp' => $request->pembeli_telp
        ])->save();

        return redirect()->back()->with('success','Data Pembeli Berhasil Diinput');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('admin.pembeli.edit')->with('pembeli', $pembeli);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pembeli = Pembeli::findOrFail($id);

        $pembeli->pembeli_nama = $request->pembeli_nama;
        $pembeli->pembeli_alamat = $request->pembeli_alamat;
        $pembeli->pembeli_telp = $request->pembeli_telp;
        $pembeli->save();

        return redirect()->route('pembeli.index')->with('success', 'Data Pembeli Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembeli = Pembeli::findOrFail($id);
        $pembeli->delete();

        return redirect()->route('pembeli.index')->with('success', 'Data Pembeli Berhasil Dihapus');
    }
}
