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

            <h3 class="h2 hero-title">Program Donasi</h3>

            @foreach ($admindonasi as $data)
            <p class="hero-text">
                {{ $data->donasi }}
            </p>
            @endforeach
            <a href="#footer">
              <button class="btn-2">Kontak Kami</button>
            </a>
        </div>
        
        <figure class="hero-banner">
            <img src="img/<?= $imagedonasi ?> " loading="lazy" alt="hero-banner"
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

      <section class="section blog" id="blog">
        <div class="container">
            <h2 style="font-family: var(--ff-source-sans-pro); text-align: center; font-size: 32px; font-weight: bold; margin-top: 0px; margin-bottom: 10px;">Program Donasi Kami</h2>
          <ul class="blog-list">

        {{-- --------------------------------------------------------- --}}
            <li>
              <div class="blog-card">

                <figure class="banner">
                  <a href="#">
                    <img src="img/<?= $imagedoninfra?>" width="750" height="350" loading="eager"
                      alt="Vestibulum massa arcu, consectetu pellentesque scelerisque." class="img-cover">
                  </a>
                </figure>

                <div class="content">

                  <h3 class="h3 title">
                    <a href="#">
                      Infrastruktur
                    </a>
                  </h3>

                  <p class="text">
                    Bantuan kami menyasar infrastruktur, masjid, rumah ibadah, jalan, dan bangunan tak layak.
                  </p>

                  <div class="btn"><h5>Terkumpul</h5>Rp. 123.345.435,- </div>
                  <div class="btn-2"><h5>Tersalurkan</h5>Rp. 34.345.435,- </div>
                  <div class="btn-3"><h5>Potensi</h5>Rp. 76.345.435,- </div>
                  <br>
                  <div class="meta">

                    <div class="publish-date">
                        <ion-icon name="time-outline"></ion-icon>
                        <time id="current-date" datetime=""></time>
                      </div>
                      
                      <script>
                        document.getElementById('current-date').textContent = new Date().toLocaleDateString('en-US', {
                          year: 'numeric',
                          month: 'long',
                          day: 'numeric'
                        });
                      </script>
                      
                    <button class="comment" aria-label="Comment">
                      <ion-icon name="chatbubble-outline"></ion-icon>

                      <data value="15">15</data>
                    </button>
                    <button class="share" onclick="shareOnWhatsApp()" aria-label="Share on WhatsApp" style="background-color: green; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer;">
                        <ion-icon name="logo-whatsapp" style="color: white; margin-right: 0px;"></ion-icon>

                      </button>
                      
                      <script>
                        function shareOnWhatsApp() {
                          // Gantilah URL dan teks yang sesuai untuk WhatsApp
                          var message = "Teks yang ingin Anda bagikan.";
                          var url = encodeURIComponent(window.location.href);
                          var whatsappLink = "https://wa.me/?text=" + encodeURIComponent(message + "\n" + url);
                          
                          window.open(whatsappLink, '_blank');
                        }
                      </script>
                  </div>
                </div>
              </div>
            </li>

        {{-- --------------------------------------------------------- --}}
            <li>
              <div class="blog-card">

                <figure class="banner">
                  <a href="#">
                    <img src="img/<?= $imagedonpendidikan?>" width="750" height="350" loading="eager"
                      alt="Vestibulum massa arcu, consectetu pellentesque scelerisque." class="img-cover">
                  </a>
                </figure>

                <div class="content">

                  <h3 class="h3 title">
                    <a href="#">
                      Infrastruktur
                    </a>
                  </h3>

                  <p class="text">
                    
                    Kami memberikan Pendidikan dalam bentuk, Beasiswa, Sekolah, Pelatihan, Kurang Mampu
                  </p>

                  <div class="btn"><h5>Terkumpul</h5>Rp. 123.345.435,- </div>
                  <div class="btn-2"><h5>Tersalurkan</h5>Rp. 34.345.435,- </div>
                  <div class="btn-3"><h5>Potensi</h5>Rp. 76.345.435,- </div>
                  <br>
                  <div class="meta">

                    <div class="publish-date">
                        <ion-icon name="time-outline"></ion-icon>
                        <time id="current-date1" datetime=""></time>
                      </div>
                      
                      <script>
                        document.getElementById('current-date1').textContent = new Date().toLocaleDateString('en-US', {
                          year: 'numeric',
                          month: 'long',
                          day: 'numeric'
                        });
                      </script>
                      
                    <button class="comment" aria-label="Comment">
                      <ion-icon name="chatbubble-outline"></ion-icon>

                      <data value="15">15</data>
                    </button>
                    <button class="share" onclick="shareOnWhatsApp()" aria-label="Share on WhatsApp" style="background-color: green; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer;">
                        <ion-icon name="logo-whatsapp" style="color: white; margin-right: 0px;"></ion-icon>

                      </button>
                      
                      <script>
                        function shareOnWhatsApp() {
                          // Gantilah URL dan teks yang sesuai untuk WhatsApp
                          var message = "Teks yang ingin Anda bagikan.";
                          var url = encodeURIComponent(window.location.href);
                          var whatsappLink = "https://wa.me/?text=" + encodeURIComponent(message + "\n" + url);
                          
                          window.open(whatsappLink, '_blank');
                        }
                      </script>
                  </div>
                </div>
              </div>
            </li>

            {{-- ------------------------------------------------------ --}}

        {{-- --------------------------------------------------------- --}}
            <li>
              <div class="blog-card">

                <figure class="banner">
                  <a href="#">
                    <img src="img/<?= $imagedonkesehatan?>" width="750" height="350" loading="eager"
                      alt="Vestibulum massa arcu, consectetu pellentesque scelerisque." class="img-cover">
                  </a>
                </figure>

                <div class="content">

                  <h3 class="h3 title">
                    <a href="#">
                      Pendidikan
                    </a>
                  </h3>

                  <p class="text">
                    Bidang kesehatan, rumah sakit, puskesmas, pengadaan obat, dan layanan kesehatan masyarakat.
                  </p>

                  <div class="btn"><h5>Terkumpul</h5>Rp. 123.345.435,- </div>
                  <div class="btn-2"><h5>Tersalurkan</h5>Rp. 34.345.435,- </div>
                  <div class="btn-3"><h5>Potensi</h5>Rp. 76.345.435,- </div>
                  <br>
                  <div class="meta">

                    <div class="publish-date">
                        <ion-icon name="time-outline"></ion-icon>
                        <time id="current-date3" datetime=""></time>
                      </div>
                      
                      <script>
                        document.getElementById('current-date3').textContent = new Date().toLocaleDateString('en-US', {
                          year: 'numeric',
                          month: 'long',
                          day: 'numeric'
                        });
                      </script>
                      
                    <button class="comment" aria-label="Comment">
                      <ion-icon name="chatbubble-outline"></ion-icon>

                      <data value="15">15</data>
                    </button>
                    <button class="share" onclick="shareOnWhatsApp()" aria-label="Share on WhatsApp" style="background-color: green; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer;">
                        <ion-icon name="logo-whatsapp" style="color: white; margin-right: 0px;"></ion-icon>

                      </button>
                      
                      <script>
                        function shareOnWhatsApp() {
                          // Gantilah URL dan teks yang sesuai untuk WhatsApp
                          var message = "Teks yang ingin Anda bagikan.";
                          var url = encodeURIComponent(window.location.href);
                          var whatsappLink = "https://wa.me/?text=" + encodeURIComponent(message + "\n" + url);
                          
                          window.open(whatsappLink, '_blank');
                        }
                      </script>
                  </div>
                </div>
              </div>
            </li>

            {{-- ------------------------------------------------------ --}}

        {{-- --------------------------------------------------------- --}}
            <li>
              <div class="blog-card">

                <figure class="banner">
                  <a href="#">
                    <img src="img/<?= $imagedonmakanan?>" width="750" height="350" loading="eager"
                      alt="Vestibulum massa arcu, consectetu pellentesque scelerisque." class="img-cover">
                  </a>
                </figure>

                <div class="content">

                  <h3 class="h3 title">
                    <a href="#">
                      Makanan
                    </a>
                  </h3>

                  <p class="text">
                    Bidang makanan, pangan, bantuan pangan, ketahanan pangan, dan dukungan gizi.
                  </p>

                  <div class="btn"><h5>Terkumpul</h5>Rp. 123.345.435,- </div>
                  <div class="btn-2"><h5>Tersalurkan</h5>Rp. 34.345.435,- </div>
                  <div class="btn-3"><h5>Potensi</h5>Rp. 76.345.435,- </div>
                  <br>
                  <div class="meta">

                    <div class="publish-date">
                        <ion-icon name="time-outline"></ion-icon>
                        <time id="current-date4" datetime=""></time>
                      </div>
                      
                      <script>
                        document.getElementById('current-date4').textContent = new Date().toLocaleDateString('en-US', {
                          year: 'numeric',
                          month: 'long',
                          day: 'numeric'
                        });
                      </script>
                      
                    <button class="comment" aria-label="Comment">
                      <ion-icon name="chatbubble-outline"></ion-icon>

                      <data value="15">15</data>
                    </button>
                    <button class="share" onclick="shareOnWhatsApp()" aria-label="Share on WhatsApp" style="background-color: green; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer;">
                        <ion-icon name="logo-whatsapp" style="color: white; margin-right: 0px;"></ion-icon>

                      </button>
                      
                      <script>
                        function shareOnWhatsApp() {
                          // Gantilah URL dan teks yang sesuai untuk WhatsApp
                          var message = "Teks yang ingin Anda bagikan.";
                          var url = encodeURIComponent(window.location.href);
                          var whatsappLink = "https://wa.me/?text=" + encodeURIComponent(message + "\n" + url);
                          
                          window.open(whatsappLink, '_blank');
                        }
                      </script>
                  </div>
                </div>
              </div>
            </li>

            {{-- ------------------------------------------------------ --}}

            
          </ul>

        </div>
      </section>


{{-- ======================================================================================== --}}
{{-- HALAMAN LAYANAN KAMI HAIU CARE INDONESIA --}}
{{-- ======================================================================================== --}}

{{-- <section class="section service" id="services">
    <div class="container">
        <h2 class="h2 section-title underline">Program Donasi Kami </h2>

    </div>
</section> --}}


  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top  active" aria-label="Go To Top" data-go-top>
    <ion-icon name="arrow-up-outline"></ion-icon>
  </a>


@endsection