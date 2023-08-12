@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="{{ url('dashborad') }}"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item"><a href="{{ url('barangmasuk') }}"></i>Barang Masuk</a></li>
       <li class="breadcrumb-item active" aria-current="page">Edit Data Barang Masuk</li>
    </ol>
 </nav>
 <div class="card">
    <div class="card-header d-flex justify-content-between">
       <div class="header-title">
          <h4 class="card-title">Edit Data Barang Masuk</h4>
       </div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('barangmasuk/'. $barangmasuk->id) .'/update' }} ">
            @csrf
            @method('PUT')
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="bm_tanggal" class="form-label">Tanggal Masuk Barang <span class="text-danger">*</span></label>
                        <input type="date" name="bm_tanggal" class="form-control" value="{{ $barangmasuk->bm_tanggal }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="bm_kode" class="form-label">Kode Masuk Barang <span class="text-danger">*</span></label>
                        <input type="text" name="bm_kode" class="form-control" value="{{ $barangmasuk->bm_kode }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="barang_kode" class="form-label">Kode Barang</label>
                        <select name="barang_kode" class="form-control">
                            @foreach ($jenis as $jns )
                            <option value="{{ $jns->id }}">{{ $jns->jenisbarang_kode }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="penjual_id" class="form-label">Nama Penjual Barang</label>
                        <select name="penjual_id" class="form-control">
                            @foreach ($penjual as $pjl )
                            <option value="{{ $pjl->id }}">{{ $pjl->penjual_nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="barang_id" class="form-label">Nama Barang</label>
                        <select name="barang_id" class="form-control">
                            @foreach ($barang as $brg )
                            <option value="{{ $brg->id }}">{{ $brg->barang_nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="satuan_id" class="form-label">Satuan</label>
                        <select name="satuan_id" class="form-control">
                            @foreach ($satuan as $stn )
                            <option value="{{ $stn->id }}">{{ $stn->satuanbarang_nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="jenis_id" class="form-label">Jenis</label>
                        <select name="jenis_id" class="form-control">
                            @foreach ($jenis as $jns )
                            <option value="{{ $jns->id }}">{{ $jns->jenisbarang_nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="bm_jumlah" class="form-label">Jumlah Barang Masuk <span class="text-danger">*</span></label>
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" name="bm_jumlah" class="form-control" value="{{ $barangmasuk->bm_jumlah }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Batal</button>
                </div>
            </div>
        </form>
    </div>
 </div>
@endsection

