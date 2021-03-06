@extends('layouts.layouts.main')
@section('template-dashboard')
<div class="container">
    <div class="row">
        <div class="col ijo-booklend my-4">
            <h1>{{ $post->title }}</h1>
        </div>
    </div>
    
    @if ($post->image)
    <div class="row">
        <div class="col text-center">
            <img src="/storage/{{ $post->image }}" alt="thumbnail" class="rounded" style="width: 1000px; height: 400px">
        </div>
    </div>

    @else
    <div class="row">
        <div class="col text-center">
            <img src="/image/photo-dummy.png" alt="" class="rounded" style="width: 1000px; height: 400px">
        </div>
    </div>
    @endif
    
    <div class="row my-4">
        <div class="col">
            <h2 class="text-decoration-none ijo-booklend">{{ $post->user->name }}</h2>
            <h4 class="text-decoration-none ijo-booklend">
                {{ $post->category->name }}
            </h4>
            <h4 class="ijo-booklend fw-normal"><b>{{ $post->harga }}</b></h4>
        </div>
    </div>
</div>

<hr class="mx-3">

<div class="container my-4 ijo-booklend">
    <div class="row">
        <div class="col">
            <h2>Deskripsi</h2>
            {!! $post->body !!} 
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col">
            <a href="/dashboard/posts" class="btn bg-ijo-booklend text-white">Back</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn bg-ijo-second text-white">Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" class="d-inline" method="post">
                @method('delete')
                @csrf
                <button class="btn btn-danger text-decoration-none p-2 border-0" onclick="return confirm('Hapus postingan?')">Hapus</button>
                </form>
        </div>
    </div>
</div>
@endsection
    

    