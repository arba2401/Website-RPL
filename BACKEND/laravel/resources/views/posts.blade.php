@extends('layouts/main')
@section('template')

    <div class="container ms-5 me-5">
        @if ($posts->count())
        <html lang="en">
            <head>
              <!-- Required meta tags -->
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
          
              <!-- Bootstrap CSS -->
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
              <link rel="stylesheet" type="text/css" href="/css/styleDaftar.css">
              <link rel="stylesheet" type="text/css" href="/fontawesome/css/all.min.css">
          
              <title>Daftar Buku</title>
            </head>
            <body>
                <div class="container1">
                  <div class="card text-white mb-3" style="background: #A3C585; max-width: 61.5rem; max-height: 30rem; margin-left: 0%;">
                    <div class="card-body">
                      <h5 class="card-title text-center fw-bold">Daftar Buku</h5>
                      <p class="card-text text-center mb-2">Cari buku yang ingin kamu pinjam</p>
                      <form action="/posts">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if (request('user'))
                            <input type="hidden" name="user" value="{{ request('user') }}">
                        @endif
                        {{-- @if (request('university'))
                            <input type="hidden" name="university" value="{{ request('university') }}">
                        @endif --}}
                        <div class="row" style="margin-left: 30%">
                            <div class="col">
                                <input type="text" name="search" id="" placeholder="Cari buku disini" class="form-control" value= "{{ request('search') }}">
                            </div>
                            <div class="col">
                                <button type="submit" class="rounded border-0" style="background-color: white ; width: 50px; height: 40px;"><i class="bi bi-search ijo-booklend"></i></button>
                            </div>
                        </div>
                    </form>
                    </div>
                  </div>
                </div>
                        

                
            @if ($title == "Posts")
                <p class="fw-bold ijo-booklend fs-4">Buku yang tersedia</p>
            @else
                <p class="fw-bold ijo-booklend fs-4">{{ $title }}</p>
            @endif

            
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-6 mb-4">
                        <div class="card" style="width: 450px;" id="card">
                            @if ($post->image)
                            <div class="row">
                                <div class="col text-center">
                                    <a href="/posts/{{ $post->slug }}"><img src="/storage/{{ $post->image }}" alt="thumbnail" class="rounded" style="width: 450px; height: 200px"></a>
                                </div>
                            </div>

                            @else
                            <div class="row">
                                <div class="col text-center">
                                    <a href="/posts/{{ $post->slug }}"><img src="/image/book-cover.jpg" alt="" class="rounded" style="width: 450px; height: 200px"></a>
                                </div>
                            </div>
                            @endif
                            {{-- <a href="/posts/{{ $post->slug }}"><img src="image/photo-dummy.png" class="card-img-top" alt="..." style="height: 200px"></a> --}}
                            <div class="card-body">
                                <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none ijo-booklend">{{ $post->title }}</a></h5>
                                <h6>{{ $post->author }} <i class="bi bi-book" style="margin-left: 20px"></i><a href="/posts?category= {{ $post->category->slug }}" class="d-inline text-decoration-none ijo-booklend"> {{ $post->category->name }}</a> </h6>
                                <p class="card-text">
                                    <i class="bi bi-person-fill"></i> <a href="/posts?user={{ $post->user->name }}" class="text-decoration-none" style="color: black">{{ $post->user->name }}</a>
                                    {{-- <a href="/posts?university={{ $post->university->slug }}" class="text-decoration-none" style="color: black">{{ $post->university->name }}</a> -   --}}
                                    
                                </p>
                                <p class="float-start">
                                    <img src="image/star.png" alt="" width="16px">
                                    <span class="mt-2">4.6</span>
                                </p>
                                <a href="/posts/{{ $post->slug }}" class="float-end" style="color: gray">Lihat detail ></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center fs-4 ">No post found.</p>
        @endif
        
    </div>
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
    
@endsection