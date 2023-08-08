<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\JenisBarang;
use App\Models\Admin\SatuanBarang;
use App\Models\Admin\MerkBarang;
use App\Models\Admin\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $data["title"] = "Barang";
        $data["barang"] = Barang::orderBy('id', 'DESC')->get();
        $data["jenisbarang"] = JenisBarang::orderBy('id', 'DESC')->get();
        $data["satuanbarang"] = SatuanBarang::orderBy('id', 'DESC')->get();
        $data["merkbarang"] = MerkBarang::orderBy('id', 'DESC')->get();

        return view('admin.barang.index', $data);
        // return view('admin.barangkeluar.index')->with([
        //     'barangkeluar' => BarangKeluar::all()
        // ]);
    }
}
