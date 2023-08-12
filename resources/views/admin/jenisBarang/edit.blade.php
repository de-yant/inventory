@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item"><a href="{{ url('jenisbarang') }}"></i>Jenis Barang</a></li>
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
        <div class="form-row">
            <div class="col-md-10 mb-3">
                <label for="jenisbarang_nama" class="form-label">Jenis Barang <span class="text-danger">*</span></label>
                <input type="text" name="jenisbarang_nama" id="jenisbarang_nama" class="form-control" placeholder="" value="{{ $jenis->jenisbarang_nama }}">
            </div>
            <div class="col-md-12 mb-3">
                <label for="jenisbarang_ket" class="form-label">Keterangan<span class="text-danger"></span></label>
                <textarea class="form-control -bottom-3" name="jenisbarang_ket" id="jenisbarang_ket" class="form-control" rows="4">{{ $jenis->jenisbarang_ket }}</textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary">Simpan</button>
            <button type="{{ url('jenisbarang') }}" class="btn btn-secondary">Batal</button>
        </div>
       </form>
    </div>
 </div>
@endsection

