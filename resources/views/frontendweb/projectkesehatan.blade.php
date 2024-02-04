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
            <img src="img/<?= $imagedonasi ?> " loading="lazy" alt="hero-banner"
              class="w-100 banner-animation">
          </figure>

          <div class="hero-content">

            {{-- <p class="hero-subtitle">Selamat Datang ! di HaiuCare Bangun Indonesia</p> --}}

            <h3 class="h2 hero-title">Daftar Project Kami </h3>

            <p class="hero-text">
                Program Kemanusiaan Kami berfokus pada inisiatif kontribusi positif dalam pengembangan infrastruktur, pendidikan, kesehatan, dan pangan. Daftar program ini mewakili komitmen kami untuk meningkatkan kualitas hidup dan membawa perubahan positif dalam berbagai aspek kehidupan masyarakat yang membutuhkan. Di HaiuCare, kami memberikan bantuan pada setiap program kemanusiaan ini dengan harapan dapat memberikan dampak yang signifikan.            </p>
                <a href="#footer">
                    <button class="btn-2" >Kontak Kami</button>
                </a>
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

{{-- =============================================== --}}
      <section class="section blog" id="blog">
        <div class="container">

            {{-- <h2 style="font-family: var(--ff-source-sans-pro); text-align: center; font-size: 32px; font-weight: bold; margin-top: 0px; margin-bottom: 10px;">Infrastruktur</h2> --}}
            {{-- <h3 class="h2 hero-title underline">Infrastruktur</h3> --}}
            <h2 class="h2 section-title underline">Pendidikan</h2>


          <ul class="blog">
        {{-- =================================================== --}}
            <li>
              <div class="blog-card">
                <figure class="banner">
                  <a href="#">
                    <img class="img-infra" src="img/<?= $imagedoninfra?>" width="270" height="165" loading="eager"
                      alt="Vestibulum massa arcu, consectetu pellentesque scelerisque." class="img-cover">
                  </a>
                </figure>
                <div class="content">
                  <h3 class="h3 title">
                    <a href="#">
                      Pendidikan
                    </a>
                  </h3>
                  <p class="text-infrastruktur">
                    Bantuan kami menyasar infrastruktur, masjid, rumah ibadah, jalan, dan bangunan tak layak.
                  </p>
                    <br>
                
        <div class="donasi-lengkap">
        
                <div class="btn-donasi1">
                    <h5>Dana Diperlukan Rp. 100.000.000,- </h5>
                    </div>
                  <div class="btn-donasi2">
                    <h5>Terkumpul Rp. 34.345.435,-</h5>
                    </div>
                  <div class="btn-donasi3">
                    <h5>Sisa Kebutuhan Rp. 76.345.435,- </h5>
                  </div>
        </div>


            <a href="#" class="learn-more-link">
                Lihat Details Projek ....</span>
            </a>           

        

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

            {{-- =================================================== --}}

            <li>
              <div class="blog-card">
                <figure class="banner">
                  <a href="#">
                    <img class="img-infra" src="img/<?= $imagedoninfra?>" width="270" height="165" loading="eager"
                      alt="Vestibulum massa arcu, consectetu pellentesque scelerisque." class="img-cover">
                  </a>
                </figure>
                <div class="content">
                  <h3 class="h3 title">
                    <a href="#">
                      Infrastruktur
                    </a>
                  </h3>
                  <p class="text-infrastruktur">
                    Bantuan kami menyasar infrastruktur, masjid, rumah ibadah, jalan, dan bangunan tak layak.
                  </p>
                    <br>
                
        <div class="donasi-lengkap">
        
                <div class="btn-donasi1">
                    <h5>Dana Diperlukan Rp. 100.000.000,- </h5>
                    </div>
                  <div class="btn-donasi2">
                    <h5>Terkumpul Rp. 34.345.435,-</h5>
                    </div>
                  <div class="btn-donasi3">
                    <h5>Sisa Kebutuhan Rp. 76.345.435,- </h5>
                  </div>
        </div>


            <a href="#" class="learn-more-link">
                Lihat Details Projek ....</span>
            </a>           

        

                  <div class="meta">
                    <div class="publish-date">
                        <ion-icon name="time-outline"></ion-icon>
                        <time id="current-date2" datetime=""></time>
                      </div>
                      
                      <script>
                        document.getElementById('current-date2').textContent = new Date().toLocaleDateString('en-US', {
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

            {{-- =================================================== --}}
            
            {{-- =================================================== --}}

            <li>
              <div class="blog-card">
                <figure class="banner">
                  <a href="#">
                    <img class="img-infra" src="img/<?= $imagedoninfra?>" width="270" height="165" loading="eager"
                      alt="Vestibulum massa arcu, consectetu pellentesque scelerisque." class="img-cover">
                  </a>
                </figure>
                <div class="content">
                  <h3 class="h3 title">
                    <a href="#">
                      Infrastruktur
                    </a>
                  </h3>
                  <p class="text-infrastruktur">
                    Bantuan kami menyasar infrastruktur, masjid, rumah ibadah, jalan, dan bangunan tak layak.
                  </p>
                    <br>
                
        <div class="donasi-lengkap">
        
                <div class="btn-donasi1">
                    <h5>Dana Diperlukan Rp. 100.000.000,- </h5>
                    </div>
                  <div class="btn-donasi2">
                    <h5>Terkumpul Rp. 34.345.435,-</h5>
                    </div>
                  <div class="btn-donasi3">
                    <h5>Sisa Kebutuhan Rp. 76.345.435,- </h5>
                  </div>
        </div>


            <a href="#" class="learn-more-link">
                Lihat Details Projek ....</span>
            </a>           

        

                  <div class="meta">
                    <div class="publish-date">
                        <ion-icon name="time-outline"></ion-icon>
                        <time id="current-date2" datetime=""></time>
                      </div>
                      
                      <script>
                        document.getElementById('current-date2').textContent = new Date().toLocaleDateString('en-US', {
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

            {{-- =================================================== --}}
            
              </div>
              
            </li>

            
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