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
                    @foreach ($adminprojectkami as $data)
                        
                    <p class="hero-text">
                    {{ $data->project_kami}}
                    </p>
                    <a href="#footer">
                  @endforeach
                  <button class="btn-2">Kontak Kami</button>
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
{{-- ======================================================================================== --}}
{{-- HALAMAN LAYANAN KAMI HAIU CARE INDONESIA --}}
{{-- ======================================================================================== --}}


<section class="section blog" id="blog">
  <div class="container">
      <h2 style="font-family: var(--ff-source-sans-pro); text-align: center; font-size: 32px; font-weight: bold; margin-top: 0px; margin-bottom: 30px;">{{ $title }}</h2>
    <ul class="blog-list">
      @foreach($post as $data)
  {{-- --------------------------------------------------------- --}}
  
  
  <li>
    <div class="blog-card">
      
          <figure class="banner">
            <a href="#">
              <img src="{{ $data->image}}" width="750" height="350" loading="eager" alt="Vestibulum massa arcu, consectetu pellentesque scelerisque." class="img-cover">
            </a>
          </figure>

          <div class="content">

            <a href="#">
                <h3 class="h3 title">
              {{ $data->title}}
              </a>
            </h3>
            {{-- <h3 class="h3 title"><strong>{{ $data->lokasi}}</strong></h3> --}}
            <p class="text">
              {{ $data->lokasi}}
            </p>

<table class="table table-striped table-sm">
  
  <tbody>
    <tr>
      <td style="width: 50px; font-size: 14px;">Project</td>
      <td style="width: 15px;"class="text-center">:</td>
      <td style="width: 200px; font-size: 14px;">{{ $data->category->nama_kategori }}</td>
  </tr>    
    <tr>
      <td style="width: 50px; font-size: 14px;">Kontraktor</td>
      <td style="width: 15px;"class="text-center">:</td>
      <td style="width: 200px; font-size: 14px;">{{ $data->kontraktor_id }}</td>
  </tr>    
    <tr>
      <td style="width: 50px; font-size: 14px;">PIC</td>
      <td style="width: 15px;"class="text-center">:</td>
      <td style="width: 200px; font-size: 14px;">{{ $data->penanggung_jawab_id }}</td>
  </tr>    
  
    <tr>
      <td style="width: 50px; font-size: 14px;">Anggaran</td>
      <td style="width: 15px;"class="text-center">:</td>
      <td style="width: 200px; font-size: 16px;">
        <span class="badge badge-success">
            Rp. {{ $data->anggaran }},-
        </span>
      </td>
    
  </tr>    
  
    <tr>
      <td style="width: 50px; font-size: 14px;">Terkumpul</td>
      <td style="width: 15px;"class="text-center">:</td>
      <td style="width: 200px; font-size: 16px;">
        <span class="badge badge-info">
            Rp. {{ $data->anggaran }},-
        </span>
      </td>
    
  </tr>    

    <tr>
      <td style="width: 50px; font-size: 14px;">Tersalurkan</td>
      <td style="width: 15px;"class="text-center">:</td>
      <td style="width: 200px; font-size: 16px;">
        <span class="badge badge-warning">
            Rp. {{ $data->anggaran }},-
        </span>
      </td>
  </tr>   

    <tr>
      <td style="width: 50px; font-size: 14px;">Kebutuhan</td>
      <td style="width: 15px;"class="text-center">:</td>
      <td style="width: 200px; font-size: 16px;">
        <span class="badge badge-secondary">
            Rp. {{ $data->anggaran }},-
        </span>
      </td>
  </tr>    
             
  </tbody>

</table>

            <br>
            <div class="meta">

              {{-- <div class="publish-date">
                  <ion-icon name="time-outline"></ion-icon>
                  <time id="{{ $data->tanggal_mulai }}" datetime=""></time>
                </div>
                
                <script>
                  document.getElementById('{{$data->tanggal_mulai }}').textContent = new Date().toLocaleDateString('en-US', {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                  });
                </script> --}}

                

                <a href="/">
                  <button class="comment" aria-label="Comment">
                    <ion-icon class="text-white" name="eye-outline">View</ion-icon>
                    <span class="ml-2">View</span>
                </button>                
                </a>

                <a href="/">
                  <button class="comment" aria-label="Comment">
                    <ion-icon class="text-white" name="log-in-outline"></ion-icon>
                    <span class="ml-2">Donasi</span>
                </button>                
                </a>
              
                <button class="share" onclick="shareOnWhatsApp()" aria-label="Share on WhatsApp" style="background-color: green; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer;">
                  <ion-icon name="logo-whatsapp" style="color: white; margin-right: 0px;"></ion-icon>

                </button>
                
                <script>
                  function shareOnWhatsApp() {
                    var heartSymbol = "❤️"; // Ubah sesuai simbol hati yang diinginkan
                    var message = heartSymbol + " HaiuCare Indonesia, Mari Bantu Sesama\n\n{{ $data->title }}";
                    var url = encodeURIComponent(window.location.href);
                    var fullMessage = encodeURIComponent(message + "\n" + url);
                
                    var whatsappLink = "https://wa.me/?text=" + fullMessage;
                
                    window.open(whatsappLink, '_blank');
                  }
                </script>
                
                <button onclick="shareOnWhatsApp()"></button>
                
            </div>
          </div>
        </div>
      </li>

      {{-- ------------------------------------------------------ --}}
      @endforeach

</ul>

<div class="pagination-container" style="display: flex; justify-content: center; align-items: center; margin-top: 50px; margin-bottom: 0px; ">
  <div class="pagination-buttons">

      @if ($post->links())
          <button class="btn btn-lg pagination-button" disabled>&lt;</button>
      @else
          <a href="{{ $post->previousPageUrl() }}" class="btn pagination-button">&lt;</a>
      @endif
{{-- 
      <div class="container">
        <button class="btn-group text-flex">
          {{ $post->links() }}
        </button>
      </div> --}}

      @if ($post->links())
          <a href="{{ $post->nextPageUrl() }}" class="btn pagination-button">&gt;</a>
      @else
          <button class="btn pagination-button" disabled>&gt;</button>
      @endif
  </div>
</div>

<style>
  .pagination-buttons {
    display: flex;
    list-style: none;
    padding: 0;
}

.pagination-button {
    padding: 10px;
    margin: 0 5px;
    text-decoration: none;
    color: #333;
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.pagination-button:hover {
    background-color: #ddd;
}

.pagination-button:disabled {
    background-color: #ddd;
    cursor: not-allowed;
}

.pagination-button.current {
    background-color: #4CAF50;
    color: white;
}

</style>

  </div>

</section>

  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top  active" aria-label="Go To Top" data-go-top>
    <ion-icon name="arrow-up-outline"></ion-icon>
  </a>


@endsection