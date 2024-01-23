@extends('layouts.main')

@section('container')



  <main>
    <article>
      <section class="hero" id="home">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Selamat Datang ! di HaiuCare Bangun Indonesia</p>

            <h3 class="h2 hero-title">Tangan Membantu Menginspirasi Perubahan Bersama</h3>

            <p class="hero-text">
              
"Tangan membantu merupakan sumber inspirasi untuk menciptakan perubahan bersama."
            </p>

            <button class="btn">Kontak Kami</button>

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

            <h2 class="h2 section-title underline"> ~ Mengapa Memilih Kami !?</h2>

            <a href="" class="btn-misi">
                {{-- <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon> --}}
                <span>Visi</span>
              </a>
        
              <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
                <ion-icon name="menu-outline"></ion-icon>
              </button>
              <br>
            <p class="about-text">
                "Menjadi pionir dalam membentuk Indonesia yang berdaya, berinspirasi, dan terjalin erat melalui tangan bantuan yang memberikan dampak nyata, menciptakan perubahan positif, dan memperkuat fondasi bagi pertumbuhan dan kemajuan bersama."
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
                "Menjadi agen perubahan yang mendukung masyarakat Indonesia dengan memberikan tangan bantuan yang membawa inspirasi, menyokong perubahan positif, dan membangun sinergi bersama demi kemajuan dan kesejahteraan bersama."
            </p>


          </div>
        <div class="div">  
          <a href="" class="btn">
            {{-- <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon> --}}
            <span>Fokus Pekerjaan Kami</span>
          </a>
    
          <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>
          <br>

          <p class="about-text">
            Dalam menghadapi realitas bangunan tak layak, kebutuhan akan makanan gratis, dan tantangan akses pendidikan yang terbatas, kami berkomitmen untuk merangkul misi kemanusiaan. Melalui inisiatif kami, kami berupaya memberikan bantuan sejauh yang kami mampu, menyediakan bantuan pangan secara gratis, dan memberikan kesempatan pendidikan kepada mereka yang kurang beruntung. Bersama-sama, kami berusaha membangun fondasi yang lebih kokoh untuk kesejahteraan dan pertumbuhan masyarakat.
        </p>


        <ul class="stats-list">

          <li class="stats-card">
            <h4>Pekerjaan</h4> <br>
            <p class="h3 stats-title">0</p>
            <br>
            <p class="stats-text">Infrastruktur</p>
          </li>

          <li class="stats-card">
            <h4>Pekerjaan</h4> <br>
            <p class="h3 stats-title">0</p>
            <br>
            <p class="stats-text">Makanan</p>
          </li>

          <li class="stats-card">
            <h4>Pekerjaan</h4> <br>
            <p class="h3 stats-title">0</p>
            <br>
            <p class="stats-text">Pendidikan</p>
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

          <h3 class="h2 section-title">~ Kami Bekerja dengan Cara yang Berbeda</h2>

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
                        <ion-icon name='basket'></ion-icon>
                    </div>
                    <br>
                    <h3 class="h3 title">Distribusi Barang</h3>

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

      
<h3 class="h2 section-title">~ Distribusi Kemanusiaan</h2>

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

            <li>
              <div class="blog-card">

                <figure class="banner">
                  <a href="#">
                    <img src="./assets/images/blog-1.jpg" width="750" height="350" loading="lazy"
                      alt="Vestibulum massa arcu, consectetu pellentesque scelerisque." class="img-cover">
                  </a>
                </figure>

                <div class="content">

                  <h3 class="h3 title">
                    <a href="#">
                      Vestibulum massa arcu, consectetu pellentesque scelerisque.
                    </a>
                  </h3>

                  <p class="text">
                    Sed quis sagittis velit. Aliquam velit eros, bibendum ut massa et, consequat laoreet erat nam ac
                    imperdiet.
                  </p>

                  <div class="meta">

                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-03-07">7 March, 2022</time>
                    </div>

                    <button class="comment" aria-label="Comment">
                      <ion-icon name="chatbubble-outline"></ion-icon>

                      <data value="15">15</data>
                    </button>

                    <button class="share" aria-label="Share">
                      <ion-icon name="share-social-outline"></ion-icon>
                    </button>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="banner">
                  <a href="#">
                    <img src="./assets/images/blog-2.jpg" width="750" height="350" loading="lazy"
                      alt="Quisque egestas iaculis felis eget placerat ut pulvinar mi." class="img-cover">
                  </a>
                </figure>

                <div class="content">

                  <h3 class="h3 title">
                    <a href="#">
                      Quisque egestas iaculis felis eget placerat ut pulvinar mi.
                    </a>
                  </h3>

                  <p class="text">
                    Sed quis sagittis velit. Aliquam velit eros, bibendum ut massa et, consequat laoreet erat nam ac
                    imperdiet.
                  </p>

                  <div class="meta">

                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-03-07">7 March, 2022</time>
                    </div>

                    <button class="comment" aria-label="Comment">
                      <ion-icon name="chatbubble-outline"></ion-icon>

                      <data value="15">15</data>
                    </button>

                    <button class="share" aria-label="Share">
                      <ion-icon name="share-social-outline"></ion-icon>
                    </button>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="banner">
                  <a href="#">
                    <img src="./assets/images/blog-3.jpg" width="750" height="350" loading="lazy"
                      alt="Fusce sem ligula, imperdiet sed nisi sit amet, euismod posuere." class="img-cover">
                  </a>
                </figure>

                <div class="content">

                  <h3 class="h3 title">
                    <a href="#">
                      Fusce sem ligula, imperdiet sed nisi sit amet, euismod posuere.
                    </a>
                  </h3>

                  <p class="text">
                    Sed quis sagittis velit. Aliquam velit eros, bibendum ut massa et, consequat laoreet erat nam ac
                    imperdiet.
                  </p>

                  <div class="meta">

                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-03-07">7 March, 2022</time>
                    </div>

                    <button class="comment" aria-label="Comment">
                      <ion-icon name="chatbubble-outline"></ion-icon>

                      <data value="15">15</data>
                    </button>

                    <button class="share" aria-label="Share">
                      <ion-icon name="share-social-outline"></ion-icon>
                    </button>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="banner">
                  <a href="#">
                    <img src="./assets/images/blog-4.jpg" width="750" height="350" loading="lazy"
                      alt="Donec feugiat mollis nisi in dignissim. Morbi sollicitudin quis." class="img-cover">
                  </a>
                </figure>

                <div class="content">

                  <h3 class="h3 title">
                    <a href="#">
                      Donec feugiat mollis nisi in dignissim. Morbi sollicitudin quis.
                    </a>
                  </h3>

                  <p class="text">
                    Sed quis sagittis velit. Aliquam velit eros, bibendum ut massa et, consequat laoreet erat nam ac
                    imperdiet.
                  </p>

                  <div class="meta">

                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-03-07">7 March, 2022</time>
                    </div>

                    <button class="comment" aria-label="Comment">
                      <ion-icon name="chatbubble-outline"></ion-icon>

                      <data value="15">15</data>
                    </button>

                    <button class="share" aria-label="Share">
                      <ion-icon name="share-social-outline"></ion-icon>
                    </button>

                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>



{{-- ======================================================================================== --}}
{{-- HALAMAN FOOTER HAIU CARE INDONESIA --}}
{{-- ======================================================================================== --}}


  <footer class="footer">

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">HaiuCare Bangun Indonesia</a>

          <p class="text">
            Maecenas pellentesque placerat quam, in finibus nisl tincidunt sed. Aliquam magna augue, malesuada ut
            feugiat eget,
            cursus eget felis.
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Our links</p>
          </li>

          <li>
            <a href="#" class="footer-link">Home</a>
          </li>

          <li>
            <a href="#" class="footer-link">About Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Services</a>
          </li>

          <li>
            <a href="#" class="footer-link">Team</a>
          </li>

          <li>
            <a href="#" class="footer-link">Blog</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Our Services</p>
          </li>

          <li>
            <a href="#" class="footer-link">Strategy & Research</a>
          </li>

          <li>
            <a href="#" class="footer-link">Web Development</a>
          </li>

          <li>
            <a href="#" class="footer-link">Web Solution</a>
          </li>

          <li>
            <a href="#" class="footer-link">Digital Marketing</a>
          </li>

          <li>
            <a href="#" class="footer-link">App Design</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Other links</p>
          </li>

          <li>
            <a href="#" class="footer-link">FAQ</a>
          </li>

          <li>
            <a href="#" class="footer-link">Portfolio</a>
          </li>

          <li>
            <a href="#" class="footer-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-link">Terms & Conditions</a>
          </li>

          <li>
            <a href="#" class="footer-link">Support</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Contact Us</p>
          </li>

          <li class="footer-item">

            <div class="footer-item-icon">
              <ion-icon name="call"></ion-icon>
            </div>

            <div>
              <a href="tel:+2484214313" class="footer-item-link">+248-421-4313</a>
              <a href="tel:+2486871365" class="footer-item-link">+248-687-1365</a>
            </div>

          </li>

          <li class="footer-item">

            <div class="footer-item-icon">
              <ion-icon name="mail"></ion-icon>
            </div>

            <div>
              <a href="mailto:info@desinic.com" class="footer-item-link">info@desinic.com</a>
              <a href="mailto:help@desinic.com" class="footer-item-link">help@desinic.com</a>
            </div>

          </li>

          <li class="footer-item">

            <div class="footer-item-icon">
              <ion-icon name="location"></ion-icon>
            </div>

            <address class="footer-item-link">
              Pontiac, Michigan, United States of America
            </address>

          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <p class="copyright">
        &copy; 2022 <a href="#" class="copyright-link">codewithsadee</a>. All Right Reserved
      </p>
    </div>

  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top  active" aria-label="Go To Top" data-go-top>
    <ion-icon name="arrow-up-outline"></ion-icon>
  </a>


@endsection