@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="dashboard"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
    </ol>
 </nav>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="card-header card-height bg-primary text-center rounded">
                            <h4 class="text-white"><b>Jenis Barang</b></h4>
                        </div>
                        <h2 class="text-center"><span class="counter">35</span></h2>
                        <div class="iq-progress-bar bg-primary-light mt-2">
                            <span class="bg-primary iq-progress progress-1" data-percent="10"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="card-header card-height bg-warning text-center rounded">
                            <h4 class="text-white"><b>Satuan Barang</b></h4>
                        </div>
                        <h2 class="text-center"><span class="counter">30</span></h2>
                        <div class="iq-progress-bar bg-primary-light mt-2">
                            <span class="bg-warning iq-progress progress-1" data-percent="100"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="card-header card-height bg-info text-center rounded">
                            <h4 class="text-white"><b>Merk Barang</b></h4>
                        </div>
                        <h2 class="text-center"><span class="counter">1</span></h2>
                        <div class="iq-progress-bar bg-primary-light mt-2">
                            <span class="bg-info iq-progress progress-1" data-percent="10"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="card-header card-height bg-purple text-center rounded">
                            <h4 class="text-white"><b>Barang</b></h4>
                        </div>
                        <h2 class="text-center"><span class="counter">2</span></h2>
                        <div class="iq-progress-bar bg-primary-light mt-2">
                            <span class="bg-purple iq-progress progress-1" data-percent="5"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="card-header card-height bg-green text-center rounded">
                            <h4 class="text-white"><b>Barang Masuk</b></h4>
                        </div>
                        <h2 class="text-center"><span class="counter">50</span></h2>
                        <div class="iq-progress-bar bg-primary-light mt-2">
                            <span class="bg-green iq-progress progress-1" data-percent="50"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="card-header card-height bg-red text-center rounded">
                            <h4 class="text-white"><b>Barang Keluar</b></h4>
                        </div>
                        <h2 class="text-center"><span class="counter">20</span></h2>
                        <div class="iq-progress-bar bg-primary-light mt-2">
                            <span class="bg-red iq-progress progress-1" data-percent="20"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="card-header card-height bg-orange text-center rounded">
                            <h4 class="text-white"><b>Pembeli</b></h4>
                        </div>
                        <h2 class="text-center"><span class="counter">5</span></h2>
                        <div class="iq-progress-bar bg-primary-light mt-2">
                            <span class="bg-orange iq-progress progress-1" data-percent="5"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="card-header card-height bg-gray text-center rounded">
                            <h4 class="text-white"><b>Penjual</b></h4>
                        </div>
                        <h2 class="text-center"><span class="counter">4</span></h2>
                        <div class="iq-progress-bar bg-primary-light mt-2">
                            <span class="bg-gray iq-progress progress-1" data-percent="4"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
