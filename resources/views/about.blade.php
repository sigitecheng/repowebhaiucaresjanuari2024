@extends('layouts.main')

@section('container')



  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Selamat Datang ! di HaiuCare Bangun Indonesia</p>

            <h3 class="h2 hero-title">Tangan Membantu Menginspirasi Perubahan Bersama</h3>

            <p class="hero-text">
              Morbi sed lacus nec risus finibus feugiat et fermentum nibh. Pellentesque vitae ante at elit fringilla ac
              at purus.
            </p>

            <button class="btn">Learn More</button>

          </div>

          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="694" height="529" loading="lazy" alt="hero-banner"
              class="w-100 banner-animation">
          </figure>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about">
        <div class="container">

          <figure class="about-banner">
            <img src="./assets/images/about-banner.png" width="700" height="532" loading="lazy" alt="about banner"
              class="w-100 banner-animation">
          </figure>

          <div class="about-content">

            <h2 class="h2 section-title underline">Why Our Agency</h2>

            <p class="about-text">
              In dictum aliquam turpis lacinia iaculis. Fusce vel malesuada magna. Nulla vel maximus risus. Donec
              volutpat metus
              lacinia risus accumsan, ac bibendum libero efficitur. Pellentesque nec nisi sit amet magna tempus
              hendrerit ut a odio.
            </p>

            <p class="about-text">
              Praesent rhoncus commodo tortor, id pulvinar nisl blandit at. Nulla facilisi. Quisque turpis ante,
              vehicula condimentum
              arcu.
            </p>

            <ul class="stats-list">

              <li class="stats-card">
                <p class="h3 stats-title">9875</p>

                <p class="stats-text">Satisfied Clients</p>
              </li>

              <li class="stats-card">
                <p class="h3 stats-title">7894</p>

                <p class="stats-text">Project Lunched</p>
              </li>

              <li class="stats-card">
                <p class="h3 stats-title">65</p>

                <p class="stats-text">Years Completed</p>
              </li>

            </ul>

          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" id="services">
        <div class="container">

          <h2 class="h2 section-title underline">Our Speciallization</h2>

          <ul class="service-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="telescope-outline"></ion-icon>
                </div>

                <h3 class="h3 title">Strategy & Research</h3>

                <p class="text">
                  Mauris ut felis malesuada eros varius tristique a at orci. Nulla vulputate, leo sit amet rhoncus
                  suscipit, enim ex
                  venenatis ipsum, et porttitor.
                </p>

                <button class="card-btn" aria-label="Show More">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="desktop-outline"></ion-icon>
                </div>

                <h3 class="h3 title">Web Development</h3>

                <p class="text">
                  Mauris ut felis malesuada eros varius tristique a at orci. Nulla vulputate, leo sit amet rhoncus
                  suscipit, enim ex
                  venenatis ipsum, et porttitor.
                </p>

                <button class="card-btn" aria-label="Show More">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="globe-outline"></ion-icon>
                </div>

                <h3 class="h3 title">Web Solution</h3>

                <p class="text">
                  Mauris ut felis malesuada eros varius tristique a at orci. Nulla vulputate, leo sit amet rhoncus
                  suscipit, enim ex
                  venenatis ipsum, et porttitor.
                </p>

                <button class="card-btn" aria-label="Show More">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #FEATURES
      -->

      <section class="section features" id="features">
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





      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog">
        <div class="container">

          <h2 class="h2 section-title underline">Our Blog & News</h2>

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





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">Desinic</a>

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