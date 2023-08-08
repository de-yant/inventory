@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="dashboard"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item active" aria-current="page">Barang</li>
    </ol>
 </nav>
<div class="container-fluid">
    <div class="row">
       <div class="col-lg-12">
          <div class="card card-block card-stretch card-height">
             <div class="card-header d-flex justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title mb-0">Data Barang</h4>
                </div>
                <a href="#" class="btn btn-purple" data-toggle="modal" data-target="#Tambahbarang">Tambah Data</a>
             </div>
             <div class="card-body">
                <table class="table">
                   <thead>
                      <tr>
                         <th scope="col">NO</th>
                         <th scope="col">GAMBAR</th>
                         <th scope="col">KODE BARANG</th>
                         <th scope="col">NAMA BARANG</th>
                         <th scope="col">JENIS</th>
                         <th scope="col">SATUAN</th>
                         <th scope="col">MERK</th>
                         <th scope="col">STOK AWAL</th>
                         <th scope="col">HARGA</th>
                         <th scope="col">AKSI</th>
                      </tr>
                   </thead>
                   <tbody>
                      <tr>
                         <th scope="row">1</th>
                         <td>Gambar</td>
                         <td>BRG-KODE</td>
                         <td>Nama Barang</td>
                         <td>Jenis</td>
                         <td>Satuan</td>
                         <td>Merk</td>
                         <td>10</td>
                         <td>10000</td>
                         <td>
                             <div class="flex align-items-center list-user-action">
                                 <a class="btn btn-sm bg-success" data-toggle="tooltip" data-placement="top" title=""
                                     data-original-title="Edit" href="#"><i class="ri-pencil-line mr-0"></i></a>
                                 <a class="btn btn-sm bg-danger" data-toggle="tooltip" data-placement="top" title=""
                                     data-original-title="Hapus" href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                             </div>
                          </td>
                      </tr>
                   </tbody>
                </table>
             </div>

             @include('admin.barang.tambah')
          </div>
      </div>
    </div>
</div>
@endsection
