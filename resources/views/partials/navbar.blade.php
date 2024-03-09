{{-- ========================================== --}}

<header class="header" data-header>
    <div class="container">
            <div class="overlay" data-overlay></div>
                <a href="#">
                <h1 class="logo">HaiuCare Indonesia</h1>
                </a>

            <nav class="navbar" data-navbar>
                <div class="navbar-top">
                <a href="#" class="logo">HaiuCare</a>

                <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
                    <ion-icon name="close-outline"></ion-icon>
                </button>
                </div>

        <ul class="navbar-list">

<ul class="navbar-list desktop-navbar">
    <!-- Item navbar -->
    <li class="navbar-item">
        <a href="/" class="navbar-link" data-navbar-link>Beranda</a>
    </li>

    <li class="navbar-item">
        <a href="/tentang" class="navbar-link" data-navbar-link>Tentang</a>
    </li>

    <li class="navbar-item">
        <a href="/layanan" class="navbar-link" data-navbar-link>Layanan</a>
    </li>

    <li class="navbar-item">
        <a href="/donasi" class="navbar-link" data-navbar-link>Donasi</a>
    </li>

    <li class="navbar-item">
        <a href="/" class="navbar-link" data-navbar-link>Project</a>
        <ul class="dropdown">
            @foreach ($categories as $cat)
            <li>
                <a class="navbar-link" data-navbar-link href="/blogproject?category={{ $cat->slug }}">
                    <i class="{{ $cat->nama_kategori }}"></i> {{ $cat->nama_kategori }}
                </a>
            </li>
            @endforeach
        </ul>
    </li>

    <li class="navbar-item">
        <a href="#footer" class="navbar-link" data-navbar-link>Kontak</a>
    </li>
</ul>

<!-- Navbar untuk mobile (hamburger icon) -->


        </ul>

      </nav>

      <ul class="navbar-nav ms-auto">

        
        @auth
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome, {{ auth()->user()->name }}
            </a>
            <a class="btn-2" href="/dashboard">
                <ion-icon name="list-circle-outline">
                </ion-icon>
            </a>
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn-2"><ion-icon name="log-out-outline"></ion-icon></button>
            </form>
        </li>
        @else
        <li class="nav-item">
            <a href="/login" class="btn-2"><i class="bi bi-box-arrow-in-right mr-2 text-dark"></i> Login</a>
        </li>
        @endauth

  
    </ul>
</div>      
        </header>
