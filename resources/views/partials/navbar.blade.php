{{-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-primary mb-2">
    <div class="container mx-auto min-h-screen">
        <a class="navbar-brand" href="#">
            <h4 class="border-b-2 border-black text-2xl">HaiuCare Indonesia</h4>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto flex items-center justify-end">
                <li class="nav-item">

                    <a class=" border-b-2 border-black mx-1 nav-link <?= ($active === "beranda") ? 'active' : ''; ?>" aria-current="page" href="/"><i class="fas fa-home"></i><h4>Beranda</h4></a>
                
                </li>
                <li class="nav-item">
                    <a class=" border-b-2 border-black mx-1 nav-link <?= ($active === "tentang") ? 'active' : ''; ?>" aria-current="page" href="/about"><h4>Tentang</h4></a>
                </li>
                <li class="nav-item">
                    <a class=" border-b-2 border-black mx-1 nav-link <?= ($active === "layanan") ? 'active' : ''; ?>" aria-current="page" href="/blog"><h4>Layanan</h4></a>
                </li>
                <li class="nav-item">
                    <a class=" border-b-2 border-black mx-1 nav-link <?= ($active === "donasi") ? 'active' : ''; ?>" aria-current="page" href="/categories"><h4>Donasi</h4></a>
                </li>
                <li class="nav-item">
                    <a class=" border-b-2 border-black mx-1 nav-link <?= ($active === "project") ? 'active' : ''; ?>" aria-current="page" href="/categories"><h4>Project</h4></a>
                </li>
                <li class="nav-item">
                    <a class=" border-b-2 border-black mx-1 nav-link <?= ($active === "kontak") ? 'active' : ''; ?>" aria-current="page" href="/categories"><h4>Kontak</h4></a>
                </li>
            </ul>

            <!-- ## PENGGUNAAN FITUR MIDLE WARE UNTUK LOGIN UNTUK PENGATURAN PENGHILANGAN LOGIN DAN PEMBUATAN LOGOUT -->
            <ul class="navbar-nav ms-auto">

                @auth

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dashboard"> <i class="bi bi-speedometer"></i> My Dashboard </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>

                @else
                <li class="nav-item"></li>
                <a href="/login" class="nav-link <?= ($active === "login") ? 'active' : ''; ?> text-dark"><i class="bi bi-box-arrow-in-right mr-2 text-dark"></i> Login</a>

                @endauth
            </ul>

            <!-- ############################# PILIHAN MENU UNTUK USER LOGIN DIATAS ######################## -->

        </div>
    </div>
</nav> --}}

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

            <li class="navbar-item">
            <a href="/" class="navbar-link <?= ($active === "beranda") ? 'active' : ''; ?>" data-navbar-link>Beranda</a>
            </li>
        
            <li class="navbar-item">
            <a href="/tentang" class="navbar-link <?= ($active === "tentang") ? 'active' : ''; ?>" data-navbar-link>Tentang</a>
            </li>
        
            <li class="navbar-item">
            <a href="#about" class="navbar-link <?= ($active === "layanan") ? 'active' : ''; ?>" data-navbar-link>Layanan</a>
            </li>
        
            <li class="navbar-item">
            <a href="#about" class="navbar-link <?= ($active === "donasi") ? 'active' : ''; ?>" data-navbar-link>Donasi</a>
            </li>
            
            <li class="navbar-item">
            <a href="#about" class="navbar-link <?= ($active === "project") ? 'active' : ''; ?>" data-navbar-link>Project</a>
            </li>
            
            <li class="navbar-item">
            <a href="#about" class="navbar-link <?= ($active === "kontak") ? 'active' : ''; ?>" data-navbar-link>Kontak</a>
            </li>

        </ul>

      </nav>

      <ul class="navbar-nav ms-auto">

        @auth

        <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome, <br> {{ auth()->user()->name }}
            </a>

        </ul>
            <a class="btn-4" href="/dashboard"><ion-icon name="list-circle-outline"></ion-icon></i></a>
        </li>
            
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn-4"><ion-icon name="log-out-outline"></ion-icon></button>
                    </form>
            
        </li>

        @else
        <li class="nav-item"></li>
        <a href="/login" class="btn-2 <?= ($active === "login") ? 'active' : ''; ?> text-dark"><i class="bi bi-box-arrow-in-right mr-2 text-dark"></i> Login</a>

        @endauth
    </ul>
</div>      
        </header>
