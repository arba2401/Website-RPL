<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse">
    <div class="position-sticky">
    <div class="list-group list-group-flush mx-3 mt-4">
        <li class="list-group-item py-1 border-0">
            {{-- <a href="/dashboard" class="text-decoration-none">Dashboard</a> --}}
            <a class="nav-link text-dark fw-bold menu {{ Request::is('dashboard') ? 'ijo-second' : '' }}" href="/dashboard">Dashboard</a>
        </li>
        @can('admin')
        <li class="list-group-item py-1 border-0">
            {{-- <a href="/dashboard-posts" class="text-decoration-none">My Posts</a> --}}
            <a class="nav-link text-dark fw-bold menu {{ Request::is('dashboard/posts*') ? 'ijo-second' : '' }}" href="/dashboard/posts">My Books</a>
        </li>
        
        <li class="list-group-item py-1">
            {{-- <a href="/dashboard-posts" class="text-decoration-none">My Posts</a> --}}
            <a class="nav-link text-dark fw-bold menu {{ Request::is('dashboard/transaksi*') ? 'ijo-second' : '' }}" href="/dashboard/transaksi">Buku dipinjam</a>
        </li>
        @endcan
    </div>

    {{-- @can('admin')
    <h6 class="sidebar-heading d-flex justify-content-beetween align-items-center px-3 mt-4 mb-1 text-muted ">
        <span>Administrator</span>
    </h6>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link  ijo-booklend fw-bold menu {{ Request::is('dashboard/categories*') ? 'ijo-second' : '' }}" href="/dashboard/categories">
                <span>Post categories</span>
            </a>
        </li>
    </ul>
    @endcan --}}
    
    </div>
</nav>