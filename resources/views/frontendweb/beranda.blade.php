@extends('layouts.main')
@section('container')
{{-- ==================================PERBATASAN==================== --}}


<section class="image-section">
    <img src="img/<?= $imageistriku ?> " alt="animated-image">
</section>

{{-- ================================= HALAMAN UNTUK SERVICE LAYANAN ===================== --}}
      <section class="section service" id="service" style="background-image: url('./assets/images/service-map.png')">
        {{-- <div class="container"> --}}

          <ul class="service-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <!-- <ion-icon name="leaf-outline"></ion-icon> -->
                  <ion-icon name="home-outline"></ion-icon>

                  <!-- <ion-icon name="building-outline"></ion-icon> -->
                </div>

                <h3 class="h3 card-title">Infrastruktur</h3>

                <p class="card-text">
                  Kami, HaiuCare, akan merenovasi infrastruktur menjadi tempat yang aman, fungsional, dan menciptakan hunian yang layak.
                </p>

                <a href="#" class="btn-link">
                  <span>Project Kami</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="book-outline"></ion-icon>
                </div>

                <h3 class="h3 card-title">Pendidikan</h3>

                <p class="card-text">
                  HaiuCare fokus memberi pendidikan pada anak-anak tak mampu, menawarkan kesempatan belajar berkualitas untuk masa depan cerah.
                </p>

                <a href="#" class="btn-link">
                  <span>Project Kami</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="bag-outline"></ion-icon>
                </div>

                <h3 class="h3 card-title">Makanan</h3>

                <p class="card-text">
                  HaiuCare, kami berkomitmen untuk memberikan akses makanan  kepada mereka yang membutuhkan.                </p>

                <a href="#" class="btn-link">
                  <span>Project Kami</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="cube-outline"></ion-icon>
                </div>

                <h3 class="h3 card-title">Distribusi Barang</h3>

                <p class="card-text">
                  HaiuCare memberikan akses barang second berkualitas bagi semua, memastikan setiap orang dapat memenuhi kebutuhan sehari-hari dengan baik.
                </p>

                <a href="#" class="btn-link">
                  <span>Project Kami</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <!-- ========================================= -->

            
            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="document-outline"></ion-icon>
                </div>

                <h3 class="h3 card-title">Laporan Proyek</h3>

                <p class="card-text">
                  HaiuCare menyajikan laporan proyek yang terperinci untuk klien, memastikan informasi yang jelas dan akurat untuk kelancaran proyek.
                </p>

                <a href="#" class="btn-link">
                  <span>Project Kami</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="people-outline"></ion-icon>
                </div>

                <h3 class="h3 card-title">Mitra Kerjasama</h3>

                <p class="card-text">
                 
HaiuCare memberikan informasi terstruktur kepada mitra, menjaga kelancaran kerja sama demi mencapai tujuan bersama.
                </p>

                <a href="#" class="btn-link">
                  <span>Project Kami</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="briefcase-outline"></ion-icon>
                </div>

                <h3 class="h3 card-title">Mitra Pekerjaan</h3>

                <p class="card-text">
                  HaiuCare bersama mitra menjaga kerjasama efisien demi mencapai tujuan bersama dengan informasi yang jelas.
                </p>

                <a href="#" class="btn-link">
                  <span>Project Kami</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="eye-outline"></ion-icon>
                </div>

                <h3 class="h3 card-title">Transparansi</h3>

                <p class="card-text">
                 
HaiuCare menekankan transparansi dalam setiap aspek, memastikan kejelasan informasi untuk membangun kepercayaan dan keterbukaan dalam setiap langkah.
                </p>

                <a href="#" class="btn-link">
                  <span>Project Kami</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>
          </ul>

        {{-- </div> --}}
      </section>

      <!-- 
        - #EVENT
      -->


<!-- ================================================================================================================================= -->

<!-- ================================================================================================================================= -->

  <!-- 
    - custom js link
  -->
  
  
@endsection