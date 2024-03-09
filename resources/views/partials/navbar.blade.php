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
            <a href="/layanan" class="navbar-link <?= ($active === "layanan") ? 'active' : ''; ?>" data-navbar-link>Layanan</a>
            </li>
        
            <li class="navbar-item">
            <a href="/donasi" class="navbar-link <?= ($active === "donasi") ? 'active' : ''; ?>" data-navbar-link>Donasi</a>
            </li>
            <li class="navbar-item">
                @php
                                        $categoryIcons = [
                                            'All Data' => 'fa fa-database mr-2',
                                            'Infrastruktur' => 'fas fa-hammer mr-2',
                                            'Pendidikan' => 'fa fa-book mr-2',
                                            'Kesehatan' => 'fa fa-hospital mr-2',
                                            'Makanan' => 'fas fa-utensils mr-2',
                                        ];
                                    @endphp


                <a href="/" class="navbar-link <?= ($active === "project") ? 'active' : ''; ?>" data-navbar-link>
                    Project
                </a>
                <ul class="dropdown">
                    @foreach ($categories as $cat)
                        <li>
                            <a class="navbar-link <?= ($active === $cat->slug) ? 'active' : ''; ?>" data-navbar-link href="/blogproject?category={{ $cat->slug }}">
                                <i class="{{ $categoryIcons[$cat->nama_kategori] }}"></i> {{ $cat->nama_kategori }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            

            {{-- <li class="navbar-item">
                <a href="/project" class="navbar-link <?= ($active === "project") ? 'active' : ''; ?>" data-navbar-link>
                    Project
                </a>
                <ul class="dropdown">
                    <li><a class="navbar-link <?= ($active === "project") ? 'active' : ''; ?>" data-navbar-link href="/project">Infrastruktur</a></li>         --}}
                    {{-- <li><a class="navbar-link <?= ($active === "project") ? 'active' : ''; ?>" data-navbar-link href="/project">Infrastruktur</a></li>        
                    <li><a class="navbar-link <?= ($active === "pendidikan") ? 'active' : ''; ?>" data-navbar-link href="/projectpendidikan">Pendidikan</a></li>
                    <li><a class="navbar-link <?= ($active === "kesehatan") ? 'active' : ''; ?>" data-navbar-link href="/projectkesehatan">Kesehatan</a></li>
                    <li><a class="navbar-link <?= ($active === "makanan") ? 'active' : ''; ?>" data-navbar-link href="/projectmakanan">Makanan</a></li> --}}
                {{-- </ul> --}}
            {{-- s</li> --}}
            
            <li class="navbar-item">
            <a href="#footer" class="navbar-link <?= ($active === "kontak") ? 'active' : ''; ?>" data-navbar-link>Kontak</a>
            </li>

        </ul>

      </nav>

      <ul class="navbar-nav ms-auto">

        @auth

        <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome, {{ auth()->user()->name }}
            </a>

        </ul>
            <a class="btn-2" href="/dashboard">
                <ion-icon name="list-circle-outline">
                    </ion-icon></i>
                </a>
        </li>
            
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn-2"><ion-icon name="log-out-outline"></ion-icon></button>
                    </form>
            
        </li>

        @else
        <li class="nav-item"></li>
        <a href="/login" class="btn-2 <?= ($active === "login") ? 'active' : ''; ?> text-dark"><i class="bi bi-box-arrow-in-right mr-2 text-dark"></i> Login</a>

        @endauth
    </ul>
</div>      
        </header>
