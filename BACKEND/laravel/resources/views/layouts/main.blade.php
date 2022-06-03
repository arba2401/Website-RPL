<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booklend.id</title>
    <link rel="icon" href="image/logobooklend.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">

    <html lang="en">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="/css/styleDaftar.css">
        <link rel="stylesheet" type="text/css" href="/fontawesome/css/all.min.css">
        {{-- <link rel="stylesheet" type="text/css" href="/css/style.css"> --}}
    
        <title>Daftar Buku</title>
      </head>
    
      <nav class="navbar navbar-expand-lg navbar-dark mb-3 shadow-sm p-2" style="background-color: #A3C585;">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img src="/image/logobooklend.png" alt="" width="40" height="34" class="d-inline-block align-text-top">
          <strong>|</strong> <strong>Booklend.id</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link  fw-bold menu {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold menu {{ Request::is('posts') ? 'active' : '' }} {{ Request::is('posts*') ? 'active' : '' }}" href="/posts">Daftar Buku</a>
            </li>

            @auth
              
            <li class="nav-item">
              <div class="dropdown fw-bold text-white fw-bold fs-6 btn-bg-pink-hover bg-ijo-booklend rounded">
                <button class="btn dropdown-toggle fw-bold text-white fw-bold fs-6 btn-bg-pink-hover bg-ijo-booklend rounded" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ auth()->user()->name }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                  <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="nav-link  text-dark dropdown-item ps-3"
                        >Logout</button>
                    </form>
                  </li>
                </ul>
              </div>
              
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link fw-bold text-white fw-bold fs-6 btn-bg-pink-hover bg-ijo-booklend rounded px-3" aria-current="page" href="/login" style="width: 78px;">Login</a>
            </li>
            @endauth
          </ul>
        </div>
      </div>
  </nav>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   <div class="container mt-4">
       @yield('template')
   </div>
</html>