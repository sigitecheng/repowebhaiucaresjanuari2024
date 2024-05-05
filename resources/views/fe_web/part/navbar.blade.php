
        <!-- Navbar Start -->



        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-1 me-2 text-custom">
                        <img class="img-fluid" src="/frontend/img/logohaiucare.png" alt="Icon" style="width: 48px; height: 48px;">
                    </div>
                    <h2 class="text-custom" style="font-family: 'Quicksand', sans-serif; font-size:22px; margin-right:200px"><span class="text">HaiuCare Indonesia</span></h2>

                    {{-- <h2 class="m-0 text-custom">HaiuCare Indonesia</h2> --}}
                </a>
                 
                <button type="button" class="navbar-toggler" id="navbar-toggler" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                        <a href="/" class="nav-item nav-link text-custom" style="font-family: 'Quicksand', sans-serif;"><strong>Beranda</strong></a>
                        <a href="#tentang" class="nav-item nav-link text-custom"><strong>Tentang</strong></a>
                        <a href="#layanan" class="nav-item nav-link text-custom"><strong>Layanan</strong></a>
                        <a href="" class="nav-item nav-link text-custom"><strong>Donasi</strong></a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-custom" data-bs-toggle="dropdown"><strong>Pekerjaan</strong></a>
                            <div class="dropdown-menu rounded-0 m-0 text-custom" >
                                <a href="/error" class="dropdown-item"><i class="fas fa-hammer mr-2"></i> Infrastruktur</a>
                                <a href="/error" class="dropdown-item"><i class="fas fa-book mr-2"></i> Pendidikan</a>
                                <a href="/error" class="dropdown-item"><i class="fas fa-medkit mr-2"></i> Kesehatan</a>
                                <a href="/error" class="dropdown-item"><i class="fas fa-utensils mr-2"></i> Makanan</a>
                            </div>
                        </div>
                         <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-custom" data-bs-toggle="dropdown"><strong>Progress</strong></a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="/error" class="dropdown-item">Testimonial</a>
                                <a href="/error" class="dropdown-item">Mitra</a>
                                <a href="/error" class="dropdown-item">Sponsor</a>
                                <a href="/error" class="dropdown-item">Testimonial</a>
                            </div> 
                        </div>
                        {{-- <a href="#kontaks" class="nav-item nav-link" style="font-family: 'Quicksand', sans-serif;"><strong>Contact</strong></a> --}}
                        {{-- <a href="#kontaks" class="nav-link text-custom" data-bs-toggle="dropdown"><strong>Kontak</strong></a> --}}
                        {{-- <a href="/error" class="dropdown-item"><i class="fas fa-utensils mr-2"></i> Makanan</a> --}}
                        <a href="#kontaks" class="nav-item nav-link text-custom"><strong>Kontak</strong></a>
                    </div>
                    <a href="/login" class="button-custom px-3 d-none d-lg-flex text-white" style="font-family: 'Quicksand', sans-serif;"><i class="fas fa-sign-in-alt mr-2 mt-1"></i>LOGIN</a>
                </ul>
            </div>
            
            <script>
                    document.getElementById('navbar-toggler').addEventListener('click', function() {
                        var navbarCollapse = document.getElementById('navbarCollapse');
                        if (navbarCollapse.classList.contains('show')) {
                            navbarCollapse.classList.remove('show');
                        } else {
                            navbarCollapse.classList.add('show');
                        }
                    });
                </script>
        
              

                {{-- <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto text-custom" style="font-family: 'Quicksand', sans-serif;">
                        <a href="/" class="nav-item nav-link text-custom" style="font-family: 'Quicksand', sans-serif;"><strong>Beranda</strong></a>
                        <a href="#tentang" class="nav-item nav-link text-custom"><strong>Tentang</strong></a>
                        <a href="#layanan" class="nav-item nav-link text-custom"><strong>Layanan</strong></a> --}}
                        {{-- <a href="about.html" class="nav-item nav-link text-custom"><strong>Donasi</strong></a> --}}
                        {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-custom" data-bs-toggle="dropdown"><strong>Pekerjaan</strong></a>
                            <div class="dropdown-menu rounded-0 m-0 text-custom" >
                                <a href="/error" class="dropdown-item"><i class="fas fa-hammer mr-2"></i> Infrastruktur</a>
                                <a href="/error" class="dropdown-item"><i class="fas fa-book mr-2"></i> Pendidikan</a>
                                <a href="/error" class="dropdown-item"><i class="fas fa-medkit mr-2"></i> Kesehatan</a>
                                <a href="/error" class="dropdown-item"><i class="fas fa-utensils mr-2"></i> Makanan</a>
                            </div>
                        </div> --}}
                        {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-custom" data-bs-toggle="dropdown"><strong>Progress</strong></a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="/error" class="dropdown-item">Testimonial</a>
                                <a href="/error" class="dropdown-item">Mitra</a>
                                <a href="/error" class="dropdown-item">Sponsor</a> --}}
                                {{-- <a href="/error" class="dropdown-item">Testimonial</a> --}}
                            {{-- </div>
                        </div>
                        <a href="#kontaks" class="nav-item nav-link" style="font-family: 'Quicksand', sans-serif;"><strong>Contact</strong></a>
                    </div>
                    <a href="/login" class="button-custom px-3 d-none d-lg-flex text-white" style="font-family: 'Quicksand', sans-serif;"><i class="fas fa-sign-in-alt mr-2 mt-1"></i>LOGIN</a>
                </div>
            </nav>
        </div> --}}
        <!-- Navbar End -->

