@extends('layouts.main')

@section('container')


{{-- ======================================================================================== --}}
{{-- HALAMAN BERANDA KAMI HAIU CARE INDONESIA --}}
{{-- ======================================================================================== --}}

  <main>
      <article>
          <section class="hero" id="home">
              <div class="container">
                
                <div class="hero-content">

                    {{-- <p class="hero-subtitle">Selamat Datang ! di HaiuCare Bangun Indonesia</p> --}}
        
                    <h3 class="h2 hero-title">Tentang Kami</h3>
        
                    @foreach ($adminlayanankami as $data)
                    <p class="hero-text">
                        {{ $data->layanan_kami }}
                    </p>
                    @endforeach
                    <a href="#footer">
                      <button class="btn-2">Kontak Kami</button>
                    </a>
                </div>  

        
                <figure class="hero-banner">
                    <img src="img/<?= $imagelayanan ?> " loading="lazy" alt="hero-banner"
                      class="w-100 banner-animation">
                  </figure>
                 
        </div>


        </div>
      </section>

{{-- ======================================================================================== --}}
{{-- HALAMAN ABOUT KAMI HAIU CARE INDONESIA --}}
{{-- ======================================================================================== --}}

    <section class="tentang about" id="about">
          <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>
      </section>

  {{-- ======================================================================================== --}}
{{-- HALAMAN LAYANAN KAMI HAIU CARE INDONESIA --}}
{{-- ======================================================================================== --}}

<section class="section service" id="services">
    <div class="container">
        <h2 class="h2 section-title underline">Layanan Pekerjaan Kami </h2>
      <ul class="service-list">


        {{-- ================================================= --}}
        @foreach ($categories as $cat)
        
        <li>
            <div class="service-card">
                <a href="/beranda/subpekerjaan?category={{ $cat->nama_kategori}}">
                    <div class="card-icon">
                        @if ($cat->nama_kategori == 'Infrastruktur')
                            <ion-icon name="home-outline"></ion-icon>
                        @elseif ($cat->nama_kategori == 'Pendidikan')
                            <ion-icon name="school-outline"></ion-icon>
                        @elseif ($cat->nama_kategori == 'Kesehatan')
                            <ion-icon name="medkit-outline"></ion-icon>
                        @elseif ($cat->nama_kategori == 'Makanan')
                            <ion-icon name="restaurant-outline"></ion-icon>
                        @endif
                    </div>
                    <br>
                    <h3 class="h3 title">{{ $cat->nama_kategori }}</h3>
                    <p class="text">
                        @if ($cat->nama_kategori == 'Infrastruktur')
                            HaiuCare fokus memberi bantuan untuk memperbaiki infrastruktur bangunan tak layak menjadi tempat yang aman, fungsional, dan menciptakan hunian yang layak.
                        @elseif ($cat->nama_kategori == 'Pendidikan')
                            HaiuCare fokus memberi pendidikan pada anak-anak tak mampu, menawarkan kesempatan belajar berkualitas untuk masa depan cerah.
                        @elseif ($cat->nama_kategori == 'Kesehatan')
                            HaiuCare fokus memberikan akses kesehatan bagi masyarakat yang membutuhkan, meningkatkan kesehatan dan kesejahteraan mereka.
                        @elseif ($cat->nama_kategori == 'Makanan')
                            HaiuCare fokus memberikan bantuan makanan kepada mereka yang membutuhkan, menjamin mereka memiliki akses ke makanan yang sehat dan bergizi.
                        @endif
                    </p>
                    <button class="card-btn" aria-label="Show More">
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                    </button>
                </a>
            </div>
        </li>
        @endforeach
        
            
            {{-- ================================================= --}}
            <li>
                <div class="service-card">
                    <a href="/">
                <div class="card-icon">
                    <ion-icon name='albums'></ion-icon>
                </div>
                <br>
                <h3 class="h3 title">Laporan Project</h3>

                <p class="text">
                    HaiuCare menyajikan laporan proyek yang terperinci untuk klien, memastikan informasi yang jelas dan akurat untuk kelancaran proyek.
                </p>
                
                <button class="card-btn" aria-label="Show More">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>
                </a>

                </div>
            </li>
            
            {{-- ================================================= --}}
            <li>
                <div class="service-card">
                    <a href="/">
                <div class="card-icon">
                    <ion-icon name='pencil-sharp'></ion-icon>
                </div>
                <br>
                <h3 class="h3 title">Mitra Kerjasama</h3>

                <p class="text">
                    HaiuCare memberikan informasi terstruktur kepada mitra, menjaga kelancaran kerja sama demi mencapai tujuan bersama.
                </p>
                
                <button class="card-btn" aria-label="Show More">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>
                </a>

                </div>
            </li>
            
            {{-- ================================================= --}}
            <li>
                <div class="service-card">
                    <a href="/">
                <div class="card-icon">
                    <ion-icon name='bookmark-sharp'></ion-icon>
                </div>
                <br>
                <h3 class="h3 title">Mitra Pekerjaan</h3>

                <p class="text">
                    HaiuCare bersama mitra menjaga kerjasama efisien demi mencapai tujuan bersama dengan informasi yang jelas.
                </p>
                
                <button class="card-btn" aria-label="Show More">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>
                </a>

                </div>
            </li>
            
            {{-- ================================================= --}}
            <li>
                <div class="service-card">
                    <a href="/">
                <div class="card-icon">
                    <ion-icon name='eye'></ion-icon>
                </div>
                <br>
                <h3 class="h3 title">Transparansi</h3>

                <p class="text">
                    HaiuCare bersama mitra menjaga kerjasama efisien demi mencapai tujuan bersama dengan informasi yang jelas.
                </p>
                
                <button class="card-btn" aria-label="Show More">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>
                </a>

                </div>
            </li>
            
  
      </ul>

    </div>
  </section>







  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top  active" aria-label="Go To Top" data-go-top>
    <ion-icon name="arrow-up-outline"></ion-icon>
  </a>


@endsection