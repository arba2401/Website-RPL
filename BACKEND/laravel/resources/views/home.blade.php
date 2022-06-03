@extends('layouts.main')
@section('template')
<div class="container mb-3">
    <div class="row">
      <div class="col ijo-booklend mt-5 ms-5">
        <h1 class="fw-bold" style="font-size: 50px;">
          Pinjamkam <br>
          Buku bekasmu!
        </h1>
        <p class="fs-4 text-dark">
          Tempat buat kamu meminjam <br>
          dan meminjamkan buku gratis
        </p>
        @auth
        @else
        <a href="/register" class="fw-bold text-white bg-ijo-booklend rounded btn-bg-pink-hover p-2 px-3 text-decoration-none me-3">Daftar</a>
        @endauth
        <a href="/posts" class="fw-bold ijo-booklend text-decoration-none border border-3 border border-pink-hover rounded p-1">Cari buku</a>
      </div>
      <div class="col text-center my-4">
        <img src="/image/buku-home.png" alt="" width="370px">
      </div>
    </div>
  </div>
</div>
@endsection