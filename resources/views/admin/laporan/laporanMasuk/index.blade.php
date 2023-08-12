@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item active" aria-current="page">Laporan Barang Masuk</li>
    </ol>
 </nav>
<div class="container-fluid">
    <div class="row">
       <div class="col-lg-12">
          <div class="card card-block card-stretch card-height">
             <div class="card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title mb-0">Laporan Barang Masuk</h4>
                </div>
                <a href="{{ url('laporanmasuk/cetakpdf') }}" class="btn btn-purple">PDF</a>
            </div>
             <div class="card-body">
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                       <table class="table" width="100%">
                          <thead>
                             <tr>
                                <th class="border-bottom-0" width="1%" scope="col">NO</th>
                                <th class="border-bottom-0" scope="col">TANGGAL MASUK</th>
                                <th class="border-bottom-0" scope="col">KODE BARANG MASUK</th>
                                <th class="border-bottom-0" scope="col">KODE BARANG</th>
                                <th class="border-bottom-0" scope="col">PENJUAL</th>
                                <th class="border-bottom-0" scope="col">JUMLAH MASUK</th>
                             </tr>
                          <tbody>
                            @if($barangmasuk->count() > 0)
                            @foreach ($barangmasuk as $row )
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $row->bm_tanggal }}</td>
                                <td>{{ $row->bm_kode }}</td>
                                <td>{{ $row->barang_kode }}</td>
                                <td>{{ $row->penjual_id }}</td>
                                <td>{{ $row->bm_jumlah }}</td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td class="text-center" colspan="7">Data Laporan Barang Masuk Masih Kosong</td>
                            </tr>
                            @endif
                          </tbody>
                       </table>
                    </>
                 </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
