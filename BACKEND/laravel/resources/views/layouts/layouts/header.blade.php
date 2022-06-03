<html lang="en">
<head>
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
</head>

</html>

<nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-ijo-booklend fixed-top shadow-sm">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
            aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <a class="navbar-brand text-light" href="/">
            <img src="/image/logobooklend.png" alt="" width="40" height="34" class="d-inline-block align-text-top">
            <strong>|</strong> <strong>Booklend.id</strong>
          </a>

        <ul class="navbar-nav ms-auto d-flex flex-row">
            <li class="mt-2">
                <i class="bi bi-arrow-bar-left text-light"></i> <a class="me-5 text-decoration-none fw-bold text-white" href="/">Back to Home</a>
            </li>
            <li>
            {{-- <a class="me-3 text-decoration-none btn btn-danger" href="/logout">Logout</a> --}}
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="nav-link text-decoration-none btn bg-light ijo-booklend p-2 pt-1 me-4"
                >Logout</button>
            </form>
            </li>
        </ul>
    </div>
</nav>