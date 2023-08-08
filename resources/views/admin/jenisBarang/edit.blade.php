@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="dashboard"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item"><a href="/jenisbarang"></i>Jenis Barang</a></li>
       <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
    </ol>
 </nav>
 <div class="card">
    <div class="card-header d-flex justify-content-between">
       <div class="header-title">
          <h4 class="card-title">Edit Data Jenis Barang</h4>
       </div>
    </div>
    <div class="card-body">
       <form action="{{ url('jenisbarang/'. $jenis->id) .'/update' }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="jenisbarang_nama" class="form-label">Jenis Barang <span class="text-danger">*</span></label>
            <input type="text" name="jenisbarang_nama" id="jenisbarang_nama" class="form-control" placeholder="" value="{{ $jenis->jenisbarang_nama }}">
        </div>
        <div class="form-group">
            <label for="jenisbarang_ket" class="form-label">Keterangan<span class="text-danger"></span></label>
            <textarea class="form-control -bottom-3" name="jenisbarang_ket" id="jenisbarang_ket" class="form-control" rows="4">{{ $jenis->jenisbarang_ket }}</textarea>
        </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="jenisbarang"><button type="submin" class="btn bg-danger">Kembali</button></a>
       </form>
    </div>
 </div>
@endsection

