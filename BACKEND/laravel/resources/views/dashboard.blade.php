@extends('layouts.layouts.main')
@section('template-dashboard')
<div class="container">
    <div class="row">
        <div class="col m-4">
            <h2>Selamat datang, {{ auth()->user()->name }}</h2>
            <h3 class="mt-5 ijo-booklend">Data Diri</h3>
            <h4 class="mt-3">Nama Lengkap</h4>
            <h6>{{ auth()->user()->name }}</h6>
            <h4 class="mt-3">Email</h4>
            <h6>{{ auth()->user()->email }}</h6>
            <h4 class="mt-3">Alamat</h4>
            <h6>{{ auth()->user()->alamat }}</h6>
            <h4 class="mt-3">Nomor Handphone</h4>
            <h6>{{ auth()->user()->nomorhp }}</h6>
        </div>

        <div class="col m-4 mt-5">
            <img class="mt-5" src="/image/dashboard-greet.png" alt="" width="450px" height="350px">
        </div>
    </div>
</div>
@endsection
    

    