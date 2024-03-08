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

            <h5 class="hero-title">Pekerjaan Kami</h5>

            <p class="hero-text">
                @foreach($categories as $cat)
                    @if ($cat->nama_kategori == 'Infrastruktur')
                        HaiuCare fokus memberi bantuan untuk memperbaiki infrastruktur bangunan tak layak menjadi tempat yang aman, fungsional, dan menciptakan hunian yang layak.
                    @elseif ($cat->nama_kategori == 'Pendidikan')
                        HaiuCare fokus memberi pendidikan pada anak-anak tak mampu, menawarkan kesempatan belajar berkualitas untuk masa depan cerah.
                    @elseif ($cat->nama_kategori == 'Kesehatan')
                        HaiuCare fokus memberikan akses kesehatan bagi masyarakat yang membutuhkan, meningkatkan kesehatan dan kesejahteraan mereka.
                    @elseif ($cat->nama_kategori == 'Makanan')
                        HaiuCare fokus memberikan bantuan makanan kepada mereka yang membutuhkan, menjamin mereka memiliki akses ke makanan yang sehat dan bergizi.
                    @endif
                    @endforeach
                </p>

                {{-- @foreach($adminlayanankami as $data)
                {{ $data->layanan_kami}}

                @endforeach --}}

                <a href="#footer">
                <button class="btn-2">Kontak Kami</button>
                </a>

            
        </div>
        {{-- <figure class="hero-banner">
            <img src="img/<?= $imagesubberanda ?>" width="694" height="529" loading="lazy" alt="<?= $imagesubberanda ?>" class="w-100 banner-animation">   
          </figure> --}}

        </div>
      </section>

{{-- ======================================================================================== --}}
{{-- HALAMAN ABOUT KAMI HAIU CARE INDONESIA --}}
{{-- ======================================================================================== --}}

    <section class="tentang about" id="about">
          <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>
          <style>
                            /* Gaya untuk tabel */
                            /* Gaya untuk tabel */
                table {
                    width: calc(100% - 40px); /* 40px adalah total margin yang ingin kita sisakan dari tepi halaman */
                    margin: 20px 20px; /* Jarak dari sisi kanan kiri dan atas bawah */
                    border-collapse: collapse;
                    background-color: white; /* Warna latar belakang tabel */
                }

                th, td {
                    padding: 18px; /* Jarak dari isi tabel ke pinggiran sel */
                    text-align: left;
                    border-bottom: 1px solid #ddd;
                }

                th {
                    background-color: #007bff; /* Warna latar belakang header kolom */
                    color: white; /* Warna teks header kolom */
                }

                /* Efek striped */
                tr:nth-child(even) {
                    background-color: #f2f2f2;
                }

                /* Gaya saat cursor berada di atas baris tabel */
                tr:hover {
                    background-color: #ddd;
                }

        </style>
        </head>
        <body>

            <div class="container" style="display: flex; justify-content: center; align-items: center; margin-top:10px;">
                <button class="btn btn-outline-dark">
                    <p style="font-size: 20px;" ><strong>Daftar Pekerjaan {{$title}}</strong></p>
                </button>
            </div>
            

            <table>
            <thead>
                <tr class="text-center">
                    <th style="width: 25px; text-align: center;">No</th>
                    <th style="width: 25px; text-align: center;">Image</th>
                    <th style="width: 100px; text-align: center;">Judul</th>
                    <th style="width: 50px; text-align: center;">Anggaran</th>
                    <th style="width: 50px; text-align: center;">Lokasi</th>
                    <th style="width: 50px; text-align: center;">Kategori</th>
                    <th style="width: 25px; text-align: center;">Kontraktor/Vendor</th>
                    <th style="width: 25px; text-align: center;">Donasi</th>
                </tr>                
            </thead>
            <tbody>
              @foreach ($datapekerjaan as $data)
                  
              <tr>
                <td class="text-center" style="width: 25px;">{{ $loop->iteration}}</td>
                <td style="width: 50px; text-align: center;"><img src="{{ $data->image }}" alt="{{ $data->image }}" style="height: 100px; width: auto;"></td>
                <td class="text-center" style="width: 100px;">{{ $data->title }}</td>
                
            <td class="text-center" style="width: 25px;">
              Rp. {{ number_format($data->anggaran, 0, ',', '.') }},
            </td>
            <td class="text-left" style="width: 50px;">{{ $data->lokasi}}</td>
            <td class="text-left" style="width: 50px;">{{ $data->category->nama_kategori}}</td>
            <td class="text-left" style="width: 50px;">
                @if ($data->category->nama_kategori == 'Infrastruktur')
                    {{ $data->be_datakontraktor->nama_perusahaan }}
                @elseif ($data->category->nama_kategori == 'Pendidikan')
                    {{ $data->be_datainstansipendidikan->nama_instansi }}
                @elseif ($data->category->nama_kategori == 'Kesehatan')
                    {{ $data->be_datarumahsakit->nama_rumahsakit }}
                @elseif ($data->category->nama_kategori == 'Makanan')
                    {{ $data->be_datarumahmakan->nama_rumahmakan }}
                @endif
            </td>
            <td class="text-center">
                <div style="
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100%;
              ">
                <a href="#">
                  <ion-icon name="mail" style="font-size: 30px;"></ion-icon>
                </a>
              </div>
            </td>
            
            
            
          
          {{-- {{ route('subberanda.show', ['slug' => $data->title]) }} --}}
          
              </tr>

              @endforeach

            </tbody>
          </table>
          <div style="display: flex; justify-content: center; margin-bottom: 20px; gap: 20px;">
            <a href="{{ $datapekerjaan->previousPageUrl() }}" class="btn btn-primary">
                <ion-icon name="arrow-back-outline"></ion-icon>
            </a>
            {{-- {{ $datapekerjaan->links() }} --}}
            <a href="{{ $datapekerjaan->nextPageUrl() }}" class="btn btn-primary">
                <ion-icon name="arrow-forward-outline"></ion-icon>
            </a>
        </div>
        
        
        
{{--                        

                        
      </section>

  {{-- ======================================================================================== --}}
{{-- HALAMAN LAYANAN KAMI HAIU CARE INDONESIA --}}
{{-- ======================================================================================== --}}



  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top  active" aria-label="Go To Top" data-go-top>
    <ion-icon name="arrow-up-outline"></ion-icon>
  </a>


@endsection