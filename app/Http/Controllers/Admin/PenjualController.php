<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Penjual;

class PenjualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('admin.penjual.index')->with([
            'penjual' => Penjual::all()
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
        Penjual::create([
            'penjual_nama' => $request->penjual_nama,
            'penjual_alamat' => $request->penjual_alamat,
            'penjual_telp' => $request->penjual_telp,
        ])->save();

        return redirect()->back()->with('success','Penjual Berhasil Diinput');
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
        $penjual = Penjual::findOrFail($id);
        return view('admin.penjual.edit')->with('penjual', $penjual);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $penjual = Penjual::findOrFail($id);
        $penjual->update([
            'penjual_nama' => $request->penjual_nama,
            'penjual_alamat' => $request->penjual_alamat,
            'penjual_telp' => $request->penjual_telp,
        ]);

        return redirect()->route('penjual.index')->with('success', 'Penjual Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penjual = Penjual::findOrFail($id);
        $penjual->delete();

        return redirect()->route('penjual.index')->with('success', 'Penjual Berhasil Dihapus');
    }
}
