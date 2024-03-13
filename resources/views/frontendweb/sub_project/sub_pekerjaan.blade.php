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

            <p class="hero-text" style="font-size: 1.5em;">
                {{ $datapekerjaan->title}}
            </p>
            
            <div id="dataPekerjaan" class="hero-text">
                {{ $datapekerjaan->body }}
            </div>
            <button class="mt-0" onclick="toggleData()">Read more ....</button>
            
            <script>
                function toggleData() {
                    var dataDiv = document.getElementById("dataPekerjaan");
                    var button = document.querySelector("button");
                    
                    if (dataDiv.style.maxHeight) {
                        dataDiv.style.maxHeight = null;
                        button.textContent = "Read more";
                    } else {
                        dataDiv.style.maxHeight = dataDiv.scrollHeight + "px";
                        button.textContent = "Read less";
                    }
                }
            </script>
            
            <style>
                #dataPekerjaan {
                    max-height: 200px;
                    overflow: hidden;
                    transition: max-height 0.3s ease;
                }
            </style>
            

                {{-- @foreach($adminlayanankami as $data)
                {{ $data->layanan_kami}}

                @endforeach --}}


                <a href="">
                <button onclick="history.back();" class="btn-3 btn-danger">Back</button>
                </a>
                
        </div>
        
        <figure class="hero-banner">
            <img src="img/<?= $datapekerjaan->image ?> " width="694" height="529" loading="lazy" alt="<?= $datapekerjaan->image ?>"
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
                    <p style="font-size: 20px;" ><strong> {{$title}}</strong></p>
                </button>
            </div>
            

            <table>
            <thead>
                <tr class="text-center">
                    {{-- <th style="width: 25px; text-align: center;">No</th> --}}
                    <th style="width: 25px; text-align: center;">Hari Kerja</th>
                    <th style="width: 75px; text-align: center;">Tanggal Mulai</th>
                    <th style="width: 75px; text-align: center;">Tanggal Selesai</th>
                    <th style="width: 50px; text-align: center;">Terkumpul</th>
                    <th style="width: 50px; text-align: center;">Kebutuhan</th>
                    <th style="width: 50px; text-align: center;">Sisa</th>
                    {{-- <th style="width: 25px; text-align: center;">Vendor/Instansi</th> --}}
                    <th style="width: 15px; text-align: center;">Donasi Here</th>
                </tr>                
            </thead>
            <tbody>
                  
                <tr>
                    <td style="width: 50px; text-align: center;">{{ $datapekerjaan->waktu_pelaksanaan}}</td>
                    <td style="width: 100px; text-align: center;">{{ $datapekerjaan->tanggal_mulai }}</td>                    
                    <td style="width: 100px; text-align: center;">{{ $datapekerjaan->tanggal_selesai }}</td>                    
                    <td style="width: 25px; text-align: center;">
                        Rp. {{ number_format($datapekerjaan->anggaran, 0, ',', '.') }},
                    </td>
                    <td  style="width: 50px; text-align: center;">Rp. {{ number_format($datapekerjaan->anggaran, 0, ',', '.') }},</td>
                    <td  style="width: 50px; text-align: center;">Rp. {{ number_format($datapekerjaan->anggaran, 0, ',', '.') }},</td>
                
                    <td style="width: 50px; text-align: center;">

                        <button class="share" aria-label="Donasi" onclick="toggleModal()">
                            <span style="display: inline-flex; width: 50px; height: 50px; background-color: green; border-radius: 50%; justify-content: center; align-items: center;">
                                <ion-icon name="mail-outline" style="font-size: 2em; color: white;"></ion-icon>
                            </span>
                        
                        </button>
                    
                    <div id="shareModal" class="modal-donasi">
                        <div class="modal-content-donasi">
                            <p>Pilih jumlah donasi:</p>
                            <div class="btn-group-vertical" role="group" aria-label="Jumlah Donasi">
                                
                                <button type="button" class="btn-2 btn-secondary" onclick="setDonationAmount(10000)">Rp 10.000</button>
                                <button type="button" class="btn-2 btn-secondary" onclick="setDonationAmount(20000)">Rp 20.000</button>
                                <button type="button" class="btn-2 btn-secondary" onclick="setDonationAmount(25000)">Rp 25.000</button>
                                <button type="button" class="btn-2 btn-secondary" onclick="setDonationAmount(50000)">Rp 50.000</button>
                                <button type="button" class="btn-2 btn-secondary" onclick="setDonationAmount(100000)">Rp 100.000</button>
                                <button type="button" class="btn-2 btn-secondary" onclick="setDonationAmount(200000)">Rp 200.000</button>
                                <button type="button" class="btn-2 btn-secondary" onclick="setDonationAmount(250000)">Rp 250.000</button>
                                <button type="button" class="btn-2 btn-secondary" onclick="setDonationAmount(500000)">Rp 500.000</button>
                                <button type="button" class="btn-2 btn-secondary" onclick="setDonationAmount(1000000)">Rp 1.000.000</button>
                                <button type="button" class="btn-2 btn-secondary" onclick="setOtherDonationAmount()">Jumlah Lainnya</button>
                            </div>
                        </div>
                        
                    </div>
                    <style>
                        .modal-donasi {
                            display: none; 
                            position: fixed; 
                            z-index: 1; 
                            left: 0;
                            top: 0;
                            width: 100vw; /* 100% lebar layar */
                            height: 100vh; /* 100% tinggi layar */
                            overflow: auto; 
                            background-color: rgba(0,0,0,0.4);
                        }
                    
                        .modal-content-donasi {
                            background-color: #fefefe;
                            margin: 10vh auto; /* Mengatur jarak dari atas dan bawah dengan unit vh */
                            padding: 20px;
                            border: 1px solid #888;
                            width: 80vw; /* 80% lebar layar */
                            max-width: 400px; /* Maksimum lebar modal */
                            text-align: center; /* Memastikan konten berada di tengah */
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
                    
                </td>
                
                </tr>
                
            </tbody>
          </table>
          
          <style>
            /* Add your CSS styles here */
            .modal {
                display: none;
                position: fixed;
                z-index: 1;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgb(0, 0, 0);
                background-color: rgba(0, 0, 0, 0.4);
                padding-top: 60px;
            }
    
            .modal-content {
                background-color: #fefefe;
                margin: 5% auto;
                padding: 20px;
                border: 1px solid #888;
                width: 80%;
            }
    
            .close {
                color: #aaaaaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }
    
            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
    
    <div class="container">
        <!-- Button to open the first modal -->
        <button class="btn btn-outline-dark" onclick="openModal('myModal1')">Details</button>
        <!-- Button to open the second modal -->
        <button class="btn btn-outline-dark" onclick="openModal('myModal2')">Donatur</button>
        <!-- Button to open the second modal -->
        <button class="btn btn-outline-dark" onclick="openModal('myModal3')">Vendor/Instansi</button>
        
        <button class="btn btn-outline-dark" onclick="openModal('myModal4')">Progress Pekerjaan</button>
    
      <!-- Table for the first modal -->
<table id="pekerjaanTable1">
    <!-- Your table content goes here -->
</table>

<!-- Table for the second modal -->
<table id="pekerjaanTable2">
    <!-- Your second table content goes here -->
</table>

<!-- Table for the third modal -->
<table id="pekerjaanTable3">
    <!-- Your third table content goes here -->
</table>

<!-- Table for the fourth modal -->
<table id="pekerjaanTable4">
    <!-- Your fourth table content goes here -->
</table>

<!-- First Modal -->
<div id="myModal1" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('myModal1')">&times;</span>
        <div id="modalContent1"></div>
    </div>
</div>

<!-- Second Modal -->
<div id="myModal2" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('myModal2')">&times;</span>
        <div id="modalContent2"></div>
    </div>
</div>

<!-- Third Modal -->
<div id="myModal3" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('myModal3')">&times;</span>
        <div id="modalContent3"></div>
    </div>
</div>

<!-- Fourth Modal -->
<div id="myModal4" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('myModal4')">&times;</span>
        <div id="modalContent4"></div>
    </div>
</div>

<script>
    function openModal(modalId) {
        // Your data retrieval logic goes here
        var dataPekerjaan = {
            // Your data for the first table goes here
        };

        var modalContent = '<div style="text-align: center;"><h1>Details Pekerjaan</h1></div>'  +
    '<table class="table">' +
    '<tr><td class="text-center">Image</td><td><img src="{{ $datapekerjaan->image }}" alt="' + dataPekerjaan.image + '" style="height: 250px; width: auto;"></td></tr>' +
    '<tr><td>Keterangan</td><td><div style="max-height: 200px; overflow: auto;">{{$datapekerjaan->body}}</div></td></tr>' +
    // Add other rows as needed
    '</table>';

        if (modalId === 'myModal1') {
            document.getElementById('modalContent1').innerHTML = modalContent;
        } else if (modalId === 'myModal2') {
            // Modify data and content for the second table
            var dataPekerjaan2 = {
                // Your data for the second table goes here
            };
            var modalContent2 = '<div style="text-align: center;"><h1>Daftar Para Donatur</h1></div>' +
    '<table class="table">' +
        '<tr style="text-align:center;"><th>Nama Lengkap</th><th>Jumlah Donasi</th><th>Total Donasi</th></tr>' +
        '<tr style="text-align:center;"><td>Budi Sudarsono</td><td>Rp. {{number_format($datapekerjaan->anggaran, 0, ',', '.')}}</td><td>Rp. {{number_format($datapekerjaan->anggaran, 0, ',', '.')}}</td></tr>'

    // Add other pairs of th and td as needed
    '</table>';


            document.getElementById('modalContent2').innerHTML = modalContent2;
        } else if (modalId === 'myModal3') {
            // Modify data and content for the third table
            var dataPekerjaan3 = {
                // Your data for the third table goes here
            };
                                    @php
                        $kategori = $datapekerjaan->category->nama_kategori;
                        @endphp

                        @if($kategori === 'Infrastruktur')
                            @php
                            $data = $datapekerjaan->be_datakontraktor;
                            @endphp
                            var modalContent3 = '<div style="text-align: center;"><h1>Instansi/Vendor</h1></div>' +
                                        '<table class="table">' +
                                        '<tr><td style="width: 150px;">Nama Perusahaan</td><td style="text-align: left; width: 300px;" ><button class="btn btn-sm">{{$data->nama_perusahaan}}</button></td></tr>' +
                                        '<tr><td style="width: 150px;">Alamat</td><td style="text-align: left; width: 300px;" >{{$data->alamat}}</td></tr>' +
                                        '<tr><td style="width: 150px;">Kota</td><td style="text-align: left; width: 300px;" >{{$data->kota}}</td></tr>' +
                                        '<tr><td style="width: 150px;">Telepon</td><td style="text-align: left; width: 300px;" >{{$data->nomor_telepon}}</td></tr>' +
                                        '<tr><td style="width: 150px;">Email</td><td style="text-align: left; width: 300px;" >{{$data->email}}</td></tr>' +
                                        '</table>';
                        @elseif($kategori === 'Pendidikan')
                            @php
                            $data = $datapekerjaan->be_datainstansipendidikan;
                            @endphp
                            var modalContent3 = '<div style="text-align: center;"><h1>Instansi/Vendor</h1></div>' +
                                        '<table class="table">' +
                                        '<tr><td style="width: 150px;">Nama Instansi</td><td style="text-align: left; width: 300px;" ><button class="btn btn-sm">{{$data->nama_instansi}}</button></td></tr>' +
                                        '<tr><td style="width: 150px;">Alamat</td><td style="text-align: left; width: 300px;" >{{$data->alamat}}</td></tr>' +
                                        '<tr><td style="width: 150px;">Kota</td><td style="text-align: left; width: 300px;" >{{$data->kota}}</td></tr>' +
                                        '<tr><td style="width: 150px;">Telepon</td><td style="text-align: left; width: 300px;" >{{$data->nomor_telepon}}</td></tr>' +
                                        '<tr><td style="width: 150px;">Email</td><td style="text-align: left; width: 300px;" >{{$data->email}}</td></tr>' +
                                        '</table>';
                        @elseif($kategori === 'Kesehatan')
                            @php
                            $data = $datapekerjaan->be_datarumahsakit;
                            @endphp
                            var modalContent3 = '<div style="text-align: center;"><h1>Instansi/Vendor</h1></div>' +
                                        '<table class="table">' +
                                        '<tr><td style="width: 150px;">Nama Rumah Sakit</td><td style="text-align: left; width: 300px;" ><button class="btn btn-sm">{{$data->nama_rumahsakit}}</button></td></tr>' +
                                        '<tr><td style="width: 150px;">Alamat</td><td style="text-align: left; width: 300px;" >{{$data->alamat}}</td></tr>' +
                                        '<tr><td style="width: 150px;">Kota</td><td style="text-align: left; width: 300px;" >{{$data->kota}}</td></tr>' +
                                        '<tr><td style="width: 150px;">Telepon</td><td style="text-align: left; width: 300px;" >{{$data->nomor_telepon}}</td></tr>' +
                                        '<tr><td style="width: 150px;">Email</td><td style="text-align: left; width: 300px;" >{{$data->email}}</td></tr>' +
                                        '</table>';
                        @elseif($kategori === 'Makanan')
                            @php
                            $data = $datapekerjaan->be_datarumahmakan;
                            @endphp
                            var modalContent3 = '<div style="text-align: center;"><h1>Instansi/Vendor</h1></div>' +
                                        '<table class="table">' +
                                        '<tr><td style="width: 150px;">Nama Rumah Makan</td><td style="text-align: left; width: 300px;" ><button class="btn btn-sm">{{$data->nama_rumahmakan}}</button></td></tr>' +
                                        '<tr><td style="width: 150px;">Alamat</td><td style="text-align: left; width: 300px;" >{{$data->alamat}}</td></tr>' +
                                        '<tr><td style="width: 150px;">Kota</td><td style="text-align: left; width: 300px;" >{{$data->kota}}</td></tr>' +
                                        '<tr><td style="width: 150px;">Telepon</td><td style="text-align: left; width: 300px;" >{{$data->nomor_telepon}}</td></tr>' +
                                        '<tr><td style="width: 150px;">Email</td><td style="text-align: left; width: 300px;" >{{$data->email}}</td></tr>' +
                                        '</table>';
                        @endif

                             
                             

            document.getElementById('modalContent3').innerHTML = modalContent3;
        } else if (modalId === 'myModal4') {
            // Modify data and content for the fourth table
            var dataPekerjaan4 = {
                // Your data for the fourth table goes here
            };

            var modalContent4 = '<h2>Detail Pekerjaan (Table 4)</h2>' +
                '<table class="table">' +
                '<tr><td>Image</td><td><img src="' + dataPekerjaan4.image + '" alt="' + dataPekerjaan4.image + '" style="height: 100px; width: auto;"></td></tr>' +
                '<tr><td>Judul</td><td>' + dataPekerjaan4.title + '</td></tr>' +
                // Add other rows as needed
                '</table>';

            document.getElementById('modalContent4').innerHTML = modalContent4;
        }

        document.getElementById(modalId).style.display = 'block';
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
    }
</script>
        

                        
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