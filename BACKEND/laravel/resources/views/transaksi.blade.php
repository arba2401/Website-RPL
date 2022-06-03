@extends('layouts/main')
@section('template')
<div class="container my-4">
    <div class="row">
        <div class="col">
            <h1 class="ijo-booklend fw-bold">Checkout</h1>
            <p class="fs-5">
                Silahkan melengkapi data berikut untuk melanjutkan peminjaman. 
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="" method="post" class="ijo-booklend" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="name" id="name" class="form-control" required autofocus value="{{ auth()->user()->name }}">

                <input type="hidden" name="email" id="email" class="form-control" required autofocus value="{{ auth()->user()->email }}">

                <input type="hidden" name="nomorhp" id="nomorhp" class="form-control" required autofocus value="{{ auth()->user()->nomorhp }}">
                <input type="hidden" name="post_id" id="post_id" class="form-control" required autofocus value="{{ $post->id }}">
                <input type="hidden" name="postUser_id" id="postUser_id" class="form-control" required autofocus value="{{ $post->user->id }}">

                <label for="title" class="form-label fw-bold mb-3" >Judul Buku</label>
                <input readonly type="text" name="title" id="title" class="form-control" required autofocus value="{{ $post->title }}">
                <label for="transaction_date" class="form-label fw-bold mb-3 mt-3" >Tanggal Peminjaman</label>
                <input type="date" name="transaction_date" id="transaction_date" class="form-control" required autofocus>
                <label for="return_date" class="form-label fw-bold mb-3 mt-3" >Tanggal Pengembalian</label>
                <input type="date" name="return_date" id="return_date" class="form-control" required autofocus>

                {{-- <div class="form-floating mb-3 mt-3">
                    <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Jumlah pesanan</label>
                </div> --}}

                <div class="mb-3 mt-3">
                    <label for="agreement" class="form-label fw-bold">Upload Pernyataan Peminjam</label>
                    <span>(jpg/png/jpeg/pdf)</span>
                    <input class="form-control" type="file" name="agreement" id="agreement">
                </div>

                <input type="submit" value="Pinjam" class="bg-ijo-booklend text-white rounded p-2 px-3 btn-bg-pink-hover border-ijo-booklend border-pink-hover mt-3">
                <a href="/posts" style="color: gray;" class="ms-3">Batalkan peminjaman</a>

            </form>
        </div>
    </div>
</div>
@endsection