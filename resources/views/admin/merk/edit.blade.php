@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="dashboard"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item"><a href="/merkbarang"></i>Merk Barang</a></li>
       <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
    </ol>
 </nav>
 <div class="card">
    <div class="card-header d-flex justify-content-between">
       <div class="header-title">
          <h4 class="card-title">Edit Data Merk Barang</h4>
       </div>
    </div>
    <div class="card-body">
       <form action="{{ url('merkbarang/'. $merk->id) .'/update' }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="merkbarang_nama" class="form-label">Merk Barang <span class="text-danger">*</span></label>
            <input type="text" name="merkbarang_nama" id="merkbarang_nama" class="form-control" placeholder="" value="{{ $merk->merkbarang_nama }}">
        </div>
        <div class="form-group">
            <label for="merkbarang-ket" class="form-label">Keterangan<span class="text-danger"></span></label>
            <textarea class="form-control -bottom-3" name="merkbarang_ket" id="merkbarang_ket" class="form-control" rows="4">{{ $merk->merkbarang_ket }}</textarea>
        </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="merkbarang"><button type="submin" class="btn bg-danger">Kembali</button></a>
       </form>
    </div>
 </div>
@endsection

