@extends('layouts.main')

@section('container')

{{-- ======================================================================================== --}}
{{-- HALAMAN BERANDA KAMI HAIU CARE INDONESIA --}}
{{-- ======================================================================================== --}}

  <main>
    <article>
      <section class="hero" id="home">
        
        @foreach($adminberanda as $beranda)
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Selamat Datang ! di HaiuCare Bangun Indonesia</p>

            <h3 class="h2 hero-title">{{ $beranda->beranda1 }}</h3>
            <p class="hero-text">
              {{ $beranda->beranda2}}
            </p>
            
            <a href="#footer" >
              <button class="btn-2" >Kontak Kami</button>
            </a>
            
          </div>
          
          <figure class="hero-banner">
            <img src="img/<?= $imagehome ?> " width="694" height="529" loading="lazy" alt="hero-banner"
            class="w-100 banner-animation">
          </figure>
          
        </div>
      </section>
      
      {{-- ======================================================================================== --}}
      {{-- HALAMAN ABOUT KAMI HAIU CARE INDONESIA --}}
      {{-- ======================================================================================== --}}
      
      <section class="section about" id="about">
        <div class="container">
          
          <figure class="about-banner">
            <img src="img/<?= $imagehome2 ?> " width="694" height="529" loading="lazy" alt="about-banner"
            class="w-100 banner-animation">
          </figure>
          
          <div class="about-content">
            
            {{-- <h2 class="h2 section-title underline"> ~ Mengapa Memilih Kami !?</h2> --}}
            
            <h2 class="h2 section-title underline">Mengapa Memilih Kami !? </h2>
            
            {{-- <h2 class="h2 section-title underline">Mengapa Memilih Kami !? </h2> --}}
            
            
            <a href="" class="btn-misi">
              {{-- <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon> --}}
              <span>Visi</span>
            </a>
            
            <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
              <ion-icon name="menu-outline"></ion-icon>
            </button>
            <br>
            <p class="about-text">
            {{$beranda->visi}}
            </p>
            
            
            <a href="" class="btn-misi">
              {{-- <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon> --}}
              <span>Misi</span>
            </a>
            
            <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
              <ion-icon name="menu-outline"></ion-icon>
            </button>
              <br>
            <p class="about-text">
            {{ $beranda->misi}}
              </p>

              
            </div>
            <div class="div">  
              <a href="" class="btn-2">
            {{-- <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon> --}}
            <span>Fokus Pekerjaan Kami</span>
          </a>
          
          <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>
          <br>

          <p class="about-text">
        {{ $beranda->fokus_pekerjaan}}
          </p>

        @endforeach

        <ul class="stats-list">
          
          <li class="stats-card">
            <h4>Pekerjaan</h4> <br>
            <p class="h3 stats-title">{{ $totaldatainsfrastruktur }}</p>
            <br>
            <p class="stats-text">Infrastruktur</p>
          </li>

          <li class="stats-card">
            <h4>Pekerjaan</h4> <br>
            <p class="h3 stats-title">{{ $totaldatapendidikan }}</p>
            <br>
            <p class="stats-text">Pendidikan</p>
          </li>

          <li class="stats-card">
            <h4>Pekerjaan</h4> <br>
            <p class="h3 stats-title">{{ $totaldatakesehatan }}</p>
            <br>
            <p class="stats-text">Kesehatan</p>
          </li>

          <li class="stats-card">
            <h4>Pekerjaan</h4> <br>
            <p class="h3 stats-title">{{ $totaldatamakanan }}</p>
            <br>
            <p class="stats-text">Makanan</p>
          </li>

          <li class="stats-card">
            <h4>Pengguna</h4> <br>
            <p class="h3 stats-title">{{ $datausers }}</p>
            <br>
            <p class="stats-text">Mitra</p>
          </li>

          <li class="stats-card">
            <h4>Mitra</h4> <br>
            <p class="h3 stats-title">{{ $datapenanggungjawab }}</p>
            <br>
            <p class="stats-text">Pekerjaan</p>
          </li>

        </ul>
        </div>
        
        <figure class="about-banner">
            <img src="img/<?= $imagehome3 ?> " width="694" height="529" loading="lazy" alt="about-banner"
              class="w-100 banner-animation">
          </figure>
        </div>
      </section>


{{-- ======================================================================================== --}}
{{-- HALAMAN GAMBAR DONASI PEMANIS SAJA HAIU CARE INDONESIA --}}
{{-- ======================================================================================== --}}
    
    <section class="image-section">
        <div class="image-container">
            <img src="img/<?= $donasi1 ?> " alt="<?= $donasi1 ?> ">
    </div>
   
    <div class="image-container">
      <img src="img/<?= $donasi2 ?> " alt="<?= $donasi2 ?> ">
    </div>
   
    <div class="image-container">
        <img src="img/<?= $donasi3 ?> " alt="<?= $donasi3 ?> ">
    </div>
    
    <div class="image-container">
        <img src="img/<?= $donasi4 ?> " alt="<?= $donasi4 ?> ">
    </div>
   
    <div class="image-container">
      <img src="img/<?= $donasi5 ?> " alt="<?= $donasi5 ?> ">
    </div>
</section>


{{-- ======================================================================================== --}}
{{-- HALAMAN LAYANAN KAMI HAIU CARE INDONESIA --}}
{{-- ======================================================================================== --}}

      <section class="section service" id="services">
        <div class="container">

          {{-- <h3 class="h2 section-title">~ Kami Bekerja dengan Cara yang Berbeda</h2> --}}
            
          <h2 class="h2 section-title underline">Kami Bekerja dengan Cara yang Berbeda </h2>


          <ul class="service-list">


            {{-- ================================================= --}}
            <li>
              <div class="service-card">
                  <a href="/">
                <div class="card-icon">
                  <ion-icon name="home"></ion-icon>
                </div>
                <br>

                <h3 class="h3 title">Infrastruktur</h3>

                <p class="text">
                    Kami, HaiuCare, akan merenovasi infrastruktur bangunan tak layak menjadi tempat yang aman, fungsional, dan menciptakan hunian yang layak.                    
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
                        <ion-icon name='school'></ion-icon>
                    </div>
                    <br>
                    <h3 class="h3 title">Pendidikan</h3>

                    <p class="text">
                        HaiuCare fokus memberi pendidikan pada anak-anak tak mampu, menawarkan kesempatan belajar berkualitas untuk masa depan cerah
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
                        <ion-icon name='bag'></ion-icon>
                    </div>
                    <br>
                    <h3 class="h3 title">Makanan</h3>

                    <p class="text">
                    HaiuCare, kami berkomitmen untuk memberikan akses makanan kepada mereka yang membutuhkan.
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
                      <ion-icon name="medkit"></ion-icon>
                    </div>
                    <br>
                    <h3 class="h3 title">Kesehatan</h3>

                    <p class="text">
                        HaiuCare memberikan akses barang second berkualitas bagi semua, memastikan setiap orang dapat memenuhi kebutuhan sehari-hari dengan baik.    
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

{{-- ======================================================================================== --}}
{{-- HALAMAN DONASI YANG SUDAH TERKUMPUL DI HAIU CARE INDONESIA --}}
{{-- ======================================================================================== --}}

{{-- <h3 class="h2 section-title">~ Distribusi Kemanusiaan</h2> --}}
  
  <h2 class="h2 section-title underline">Distribusi Kemanusiaan </h2>


<section class="image-section2">
      <div class="image-container">
        <h3 class="btn-judul">Infrastruktur</h3>
        <img src="img/<?= $donasi1 ?> " alt="<?= $donasi1 ?> ">
        <div class="btn"><h5>Terkumpul</h5>Rp. 123.345.435,- </div>
        <div class="btn-2"><h5>Tersalurkan</h5>Rp. 34.345.435,- </div>
        <div class="btn-3"><h5>Potensi</h5>Rp. 76.345.435,- </div>
    </div>
    <div class="image-container">
          <h3 class="btn-judul">Makanan</h3>
          <img src="img/<?= $donasi2 ?> " alt="<?= $donasi2 ?> ">
          <div class="btn"><h5>Terkumpul</h5>Rp. 123.345.435,- </div>
          <div class="btn-2"><h5>Tersalurkan</h5>Rp. 34.345.435,- </div>
          <div class="btn-3"><h5>Potensi</h5>Rp. 76.345.435,- </div>
        </div>
    <div class="image-container">
          <h3 class="btn-judul">Pendidikan</h3>
          <img src="img/<?= $donasi3 ?> " alt="<?= $donasi3 ?> ">
          <div class="btn"><h5>Terkumpul</h5>Rp. 123.345.435,- </div>
          <div class="btn-2"><h5>Tersalurkan</h5>Rp. 34.345.435,- </div>
          <div class="btn-3"><h5>Potensi</h5>Rp. 76.345.435,- </div>
        </div>
        <div class="image-container">
            <h3 class="btn-judul">Kesehatan</h3>
            <img src="img/<?= $donasi4 ?> " alt="<?= $donasi4 ?> ">
        <div class="btn"><h5>Terkumpul</h5>Rp. 123.345.435,- </div>
        <div class="btn-2"><h5>Tersalurkan</h5>Rp. 34.345.435,- </div>
        <div class="btn-3"><h5>Potensi</h5>Rp. 76.345.435,- </div>
      </div>
    
  </section>

{{-- ======================================================================================== --}}
{{-- HALAMAN FEATURES KAMI HAIU CARE INDONESIA --}}
{{-- ======================================================================================== --}}

 {{-- <section class="section features" id="features"> 
        <div class="container">

          <h2 class="h2 section-title underline">Our Features</h2>

          <ul class="features-list">

            <li>
              <div class="features-card">

                <div class="icon">
                  <ion-icon name="bulb-outline"></ion-icon>
                </div>

                <div class="content">
                  <h3 class="h3 title">Idea & Analysis</h3>

                  <p class="text">
                    Praesent tincidunt congue est ut hendrerit. Pellentesque et eros sit amet ipsum venenatis.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="features-card">

                <div class="icon">
                  <ion-icon name="color-palette-outline"></ion-icon>
                </div>

                <div class="content">
                  <h3 class="h3 title">Designing</h3>

                  <p class="text">
                    Praesent tincidunt congue est ut hendrerit. Pellentesque et eros sit amet ipsum venenatis.
                  </p>
                </div>

              </div>
            </li>

          </ul>

          <figure class="features-banner">
            <img src="./assets/images/feautres-banner.png" width="369" height="318" loading="lazy" alt="Features Banner"
              class="w-100 banner-animation">
          </figure>

          <ul class="features-list">

            <li>
              <div class="features-card">

                <div class="icon">
                  <ion-icon name="code-slash-outline"></ion-icon>
                </div>

                <div class="content">
                  <h3 class="h3 title">Development</h3>

                  <p class="text">
                    Praesent tincidunt congue est ut hendrerit. Pellentesque et eros sit amet ipsum venenatis.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="features-card">

                <div class="icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>

                <div class="content">
                  <h3 class="h3 title">Testing & Lunching</h3>

                  <p class="text">
                    Praesent tincidunt congue est ut hendrerit. Pellentesque et eros sit amet ipsum venenatis.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>
 

 --}}


{{-- ======================================================================================== --}}
{{-- HALAMAN BERITA KAMI HAIU CARE INDONESIA --}}
{{-- ======================================================================================== --}}

      <section class="section blog" id="blog">
        <div class="container">

          <h2 class="h2 section-title underline">Berita Kami</h2>

          <ul class="blog-list">

            @foreach($databerita as $data)

            <li>
              <div class="blog-card">

                <figure class="banner">
                  <a href="#">
                    <img src="{{ $data->gambar }}" width="750" height="350" loading="lazy"
                      alt="Vestibulum massa arcu, consectetu pellentesque scelerisque." class="img-cover">
                  </a>
                </figure>

                <div class="content">

                  <h3 class="h3 title">
                    <a href="#">                 
                        {{ $data->judul}}                    
                    </a>
                  </h3>

                  <p class="text">
                      {{ $data->isi}}
                  </p>

                  <div class="meta">

                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>
                      <div class="d-flex justify-content-between">
                        <span class="text-left"> {{ $data->user->name }}</span>
                        <span class="text-right">
                            <button class="button-custom">{{ date('d F Y', strtotime($data->tanggal_dibuat)) }}</button>
                        </span>
                    </div>
                    
                    </div>

                    <button class="comment" aria-label="Comment">
                      <ion-icon name="chatbubble-outline"></ion-icon>

                      <data value="15">15</data>
                    </button>

                    <button class="share" aria-label="Share" onclick="toggleModal()">
                      <ion-icon name="share-social-outline"></ion-icon>
                  </button>
                  
                  <div id="shareModal" class="modal">
                      <div class="modal-content">
                          <a href="https://wa.me/?text=Your%20message%20here" target="_blank" rel="noopener noreferrer">
                              <img src="whatsapp_icon.png" alt="WhatsApp" class="social-icon" style="margin-right: 10px;">
                          </a>
                          <a href="https://www.facebook.com/sharer/sharer.php?u=YourPageLinkHere" target="_blank" rel="noopener noreferrer">
                              <img src="facebook_icon.png" alt="Facebook" class="social-icon" style="margin-right: 10px;">
                          </a>
                          <a href="https://www.tiktok.com/en" target="_blank" rel="noopener noreferrer">
                              <img src="tiktok_icon.png" alt="TikTok" class="social-icon" style="margin-right: 10px;">
                          </a>
                          <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">
                              <img src="instagram_icon.png" alt="Instagram" class="social-icon" style="margin-right: 10px;">
                          </a>
                      </div>
                  </div>
                  
                  <style>
                      .modal {
                          display: none; 
                          position: fixed; 
                          z-index: 1; 
                          left: 0;
                          top: 0;
                          width: 100%; 
                          height: 100%; 
                          overflow: auto; 
                          background-color: rgba(0,0,0,0.4);
                      }
                  
                      .modal-content {
                          background-color: #fefefe;
                          margin: 15% auto; 
                          padding: 20px;
                          border: 1px solid #888;
                          width: 80%; 
                          text-align: center; /* Memastikan ikon sosial berada di tengah */
                      }
                  
                      .social-icon {
                          width: 50px; /* Sesuaikan ukuran ikon sosial */
                          height: 50px; /* Sesuaikan ukuran ikon sosial */
                          margin: 10px; /* Sesuaikan jarak antara ikon sosial */
                      }
                  </style>
                  
                  <script>
                      function toggleModal() {
                          var modal = document.getElementById("shareModal");
                          modal.style.display = modal.style.display === "block" ? "none" : "block";
                      }
                  
                      window.onclick = function(event) {
                          var modal = document.getElementById("shareModal");
                          if (event.target == modal) {
                              modal.style.display = "none";
                          }
                      }
                  </script>
                  

                  </div>

                </div>

              </div>
            </li>
            @endforeach
          
        </div>
        
        
      </ul>
      <div class="pagination-container" style="margin-top: 40px; margin-bottom: 0px;">
        <div class="pagination-inner">
            <div class="button-custom">
                <div class="pagination-buttons" style="display: flex; justify-content: center;">
                    @if ($databerita->previousPageUrl())
                        <a href="{{ $databerita->previousPageUrl() }}" class="btn pagination-button">&lt;</a>
                    @else
                        <button class="btn pagination-button" disabled>&lt;</button>
                    @endif
    
                    @if ($databerita->nextPageUrl())
                        <a href="{{ $databerita->nextPageUrl() }}" class="btn pagination-button">&gt;</a>
                    @else
                        <button class="btn pagination-button" disabled>&gt;</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
  
      </div>
      
      
      </section>

    </article>
  </main>






  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top  active" aria-label="Go To Top" data-go-top>
    <ion-icon name="arrow-up-outline"></ion-icon>
  </a>


@endsection
