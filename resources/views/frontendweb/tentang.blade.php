@extends('layouts.main')

@section('container')


{{-- ======================================================================================== --}}
{{-- HALAMAN BERANDA KAMI HAIU CARE INDONESIA --}}
{{-- ======================================================================================== --}}

  <main>
      <article>
          <section class="hero" id="home">
              <div class="container">
                  
                  <figure class="hero-banner">
                    <img src="img/<?= $imagetentang ?> " width="694" height="529" loading="lazy" alt="hero-banner"
                      class="w-100 banner-animation">
                  </figure>
          <div class="hero-content">

            {{-- <p class="hero-subtitle">Selamat Datang ! di HaiuCare Bangun Indonesia</p> --}}

            <h3 class="h2 hero-title">Tentang Kami</h3>
@foreach($admintentangkami as $data)
            <p class="hero-text mb-2">

              {{ $data->tentang_kami }}
                <a href="#footer">
  <button class="btn-2 mt-2">Kontak Kami</button>
</a>

@endforeach

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
{{-- HALAMAN FEATURES KAMI HAIU CARE INDONESIA --}}
{{-- ======================================================================================== --}}

  <section class="section features" id="features">
        <div class="container">
          <h2 class="h2 section-title underline">Tujuan Kami </h2>
          <ul class="features-list">
            <li>
                <div class="features-card">
  
                  <div class="icon">
                    {{-- <ion-icon name="color-palette-outline"></ion-icon> --}}
                    <ion-icon name="hammer-outline"></ion-icon>
                  </div>
  
                  <div class="content">
                    <h3 class="h3 title">Infrastruktur</h3>
  
                    <p class="text">
                      Fokus pada proyek-proyek yang membangun landasan bagi kemajuan masyarakat.  
                  </p>
                  </div>
  
                </div>
              </li>
  

            <li>
              <div class="features-card">

                <div class="icon">
                    <ion-icon name="flag-outline"></ion-icon>
                </div>

                <div class="content">
                  <h3 class="h3 title">Kemanusiaan</h3>

                  <p class="text-tentang">
                    Fokus pada proyek dan inisiatif untuk meningkatkan kemajuan peradaban yang adil dan makmur.
                </p>
                </div>

              </div>
            </li>

          </ul>

          <figure class="features-banner">
            <img src="img/<?= $imagetentang1 ?> " width="369" height="318" loading="lazy" alt="Features Banner"
              class="w-100 banner-animation">
          </figure>

          <ul class="features-list">

            <li>
              <div class="features-card">

                <div class="icon">
                  <ion-icon name="newspaper-outline"></ion-icon>
                </div>

                <div class="content">
                  <h3 class="h3 title">Lapangan Pekerjaan</h3>

                  <p class="text-tentang">
                    "Membuka peluang lapangan pekerjaan. Kami bertujuan memberikan solusi yang berdampak positif, menciptakan perubahan baik"

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
                  <h3 class="h3 title">Relasi</h3>

                  <p class="text-tentang">
                    "Relasi saling membutuhkan antara perusahaan, masyarakat, dan lapangan pekerjaan"  
                </p>
                </div>

              </div>
            </li>

          </ul>

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