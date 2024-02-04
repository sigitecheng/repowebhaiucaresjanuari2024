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

            <h3 class="h2 hero-title">Layanan Kami</h3>

            <p class="hero-text">

                Kami merupakan pilar utama dalam sektor kemanusiaan, menyelenggarakan berbagai layanan di bidang infrastruktur, kesehatan, pendidikan, lapangan kerja, dan distribusi barang. Melalui inisiatif ini, kami bertekad untuk membawa perubahan positif kepada masyarakat, menciptakan lingkungan yang berkelanjutan, dan memberikan dukungan yang sangat dibutuhkan untuk meningkatkan kualitas hidup dan kesejahteraan umum. </p>

                <a href="#footer">
                <button class="btn-2">Kontak Kami</button>
                </a>

            
        </div>
        
        <figure class="hero-banner">
            <img src="img/<?= $imagelayanan ?> " loading="lazy" alt="hero-banner"
              class="w-100 banner-animation">
          </figure>


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







  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top  active" aria-label="Go To Top" data-go-top>
    <ion-icon name="arrow-up-outline"></ion-icon>
  </a>


@endsection