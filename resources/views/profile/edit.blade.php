{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb iq-bg-primary">
       <li class="breadcrumb-item"><a href="dashboard"><i class="ri-home-4-line mr-1 float-left"></i>Dashboard</a></li>
       <li class="breadcrumb-item active" aria-current="page">Pengaturan Profile</li>
    </ol>
 </nav>
<div class="row">
    <div class="col-md-12 col-md-6">
        <div class="card-transparent card-block card-stretch card-height">
            <div class="card-body text-center p-0">
                <div class="item">
                    <div class="odr-img">
                        {{-- <img src="{{ asset('images/'.$brg->barang_gambar) }}" alt="" style="width: 50px"> --}}
                        <img src="../assets/images/user/02.jpg" class="img-fluid rounded-circle avatar-90 m-auto" alt="image">
                    </div>
                    <div class="odr-content rounded">
                        <h4 class="mb-2">Kaylynn Press</h4>
                        <p class="mb-3">kaylynnpress@gmail.com</p>
                        <ul class="list-unstyled mb-3">
                            <li class="bg-secondary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-mail-open-line m-0"></i></li>
                            <li class="bg-primary-light rounded-circle iq-card-icon-small mr-4"><i class="ri-chat-3-line m-0"></i></li>
                            <li class="bg-success-light rounded-circle iq-card-icon-small"><i class="ri-phone-line m-0"></i></li>
                        </ul>
                        <div class="pt-3 border-top">
                            <a href="#" class="btn btn-primary">Message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection




