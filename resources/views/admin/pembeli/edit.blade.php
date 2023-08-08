@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="dashboard"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item"><a href="/pembeli"></i>Pembeli</a></li>
       <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
    </ol>
 </nav>
 <div class="card">
    <div class="card-header d-flex justify-content-between">
       <div class="header-title">
          <h4 class="card-title">Edit Data Pembeli</h4>
       </div>
    </div>
    <div class="card-body">
       <form action="{{ url('pembeli/'. $pembeli->id) .'/update' }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="pembeli_nama" class="form-label">Nama<span class="text-danger">*</span></label>
            <input type="text" name="pembeli_nama" id="pembeli_nama" class="form-control" placeholder="" value="{{ $pembeli->pembeli_nama }}">
        </div>
        <div class="form-group">
            <label for="pembeli_telp" class="form-label">Telepon<span class="text-danger">*</span></label>
            <input type="text" name="pembeli_telp" id="pembeli_telp" class="form-control" placeholder="" value="{{ $pembeli->pembeli_telp }}">
        </div>
        <div class="form-group">
            <label for="pembeli_alamat" class="form-label">Alamat<span class="text-danger">*</span></label>
            <textarea class="form-control -bottom-3" name="pembeli_alamat" id="pembeli_alamat" class="form-control" rows="4">{{ $pembeli->pembeli_alamat }}</textarea>
        </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="pembeli"><button type="submin" class="btn bg-danger">Kembali</button></a>
       </form>
    </div>
 </div>
@endsection

