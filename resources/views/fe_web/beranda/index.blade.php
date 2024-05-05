@include('fe_web.part.header')

<div class="bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="water-flow-animation">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
        
        <!-- Spinner End -->

        <!-- Navbar Start -->
        @include('fe_web.part.navbar')
        <!-- Navbar End -->
<br><br><br>

{{-- ================================================================================================================================================================================================================================================================================ --}}
{{-- ================================================================================================================================================================================================================================================================================ --}}
{{-- ================================================================================================================================================================================================================================================================================ --}}

        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0" style="font-family: 'Quicksand', sans-serif;">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                @foreach($adminberanda as $data)
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4"><span class="text-custom" style="font-family: 'Quicksand', sans-serif;">{{ $data->beranda1}}</span></h1>
                    <p class="animated fadeIn mb-4 pb-2" style="font-family: 'Quicksand', sans-serif;">{{ $data->beranda2 }}</p>
                    {{-- <a href="#footer" class="btn btn-info py-2 px-4 me-3 animated fadeIn text-white">Kontak Kami</a> --}}
                    <a href="#kontaks" class="button-custom py-2 px-4 me-3 animated fadeIn text-white" style="font-family: 'Quicksand', sans-serif;"><i class="fab fa-ravelry me-2"></i>Kontak Kami</a>

                    </div>
                @endforeach
                
        <!-- Call to Action Start -->
        {{-- <div class="container-xxl py-5"> --}}
            <div class="col-md-6 animated fadeIn">
                <div class="container">
                    <div class="bg-light rounded p-3">
                        <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                            <div class="row g-5 align-items-center">
                                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                                    {{-- <img class="img-fluid" src="img/fe_web/beranda/berita2.jpg" alt=""> --}}
                                
                                <style>
            .awal {
                display: flex;
                justify-content: center;
                align-items: center;
                /* border: 1px solid #ccc; */
            }

            .awal img {
                max-width: 75%;
                max-height: 75%;
                object-fit: absolute;
                margin-top: 25px;
            }
        </style>
{{-- <p>langkah</p> --}}
        <div class="awal">
            <img src="img/fe_web/beranda/makananutama.jpg" alt="Sample Image">
        </div>

                            </div>
                            {{-- <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s"> --}}
                                {{-- <div class="mb-4"> --}}
                                    {{-- <h5 class="mb-3" style="font-family: 'Quicksand', sans-serif;">Berikan bantuan kepada mereka yang membutuhkan di sekitar kita, klik form bantuan disini !<br>
                                        <i class="fas fa-chevron-down animated-icon" style="animation: moveUpDown 0.2s infinite alternate;"></i>
                                    </h5> --}}
                                    {{-- <p style="font-family: 'Quicksand', sans-serif;">Klik form di sini untuk membantu mereka yang membutuhkan di sekitar kita"</p> --}}
                                    {{-- <p>Eirmod sed ipsum dolor sit rebum magna erat. Tempor lorem kasd vero ipsum sit sit diam justo sed vero dolor duo.</p> --}}
                                {{-- </div> --}}
                                {{-- <a href="/error" class="button-custom py-3 px-4 me-2"><i class="fab fa-ravelry me-2"></i>Form Here</a> --}}
                                
                                {{-- <a href="/error" class="button-custom py-3 px-4 me-2"><i class="fa fa-money-bill me-2"></i>Donasi</a> --}}
                            {{-- <img src="img/fe_web/beranda/berita2.jpg" alt="img/fe_web/beranda/berita2.jpg">
                            </div> --}}
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
            </div>
        {{-- </div> --}}
        <!-- Call to Action End -->


                {{-- <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/fe_web/beranda/berita2.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/fe_web/beranda/berita2.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/fe_web/beranda/berita2.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/fe_web/beranda/berita2.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/fe_web/beranda/berita2.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/fe_web/beranda/berita2.jpg" alt="">
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- Header End -->


        <!-- Search Start -->
        {{-- <div class="container-fluid button-custom mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control border-0 py-3" style="font-family: 'Quicksand', sans-serif;" placeholder="Search Donasi">
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3" style="font-family: 'Quicksand', sans-serif;">
                                    <option selected>Kategori Donasi</option>
                                    <option value="1">Infrastruktur</option>
                                    <option value="2">Pendidikan</option>
                                    <option value="3">Kesehatan</option>
                                    <option value="3">Makanan</option>
                                </select>
                            </div>
                            <div class="col-md-4" style="font-family: 'Quicksand', sans-serif;">
                                <select class="form-select border-0 py-3">
                                    <option selected>Lokasi</option>
                                    <script>
                                        const cities = [
    "Ambon", "Banda Aceh", "Bandar Lampung", "Bandung", "Banjar", "Banjarmasin", "Bau-Bau", "Bekasi", "Bima", "Bintuhan",
    "Bitung", "Blitar", "Bogor", "Bontang", "Bukittinggi", "Cilegon", "Cimahi", "Denpasar", "Depok", "Dumai",
    "Gorontalo", "Gunungsitoli", "Indralaya", "Jakarta", "Jambi", "Kendari", "Kupang", "Langsa", "Lampung", "Lahat",
    "Lubuk Pakam", "Lubuklinggau", "Madiun", "Magelang", "Makassar", "Malang", "Manado", "Mataram", "Medan", "Metro",
    "Padang", "Padang Panjang", "Padang Sidempuan", "Pagar Alam", "Pangkal Pinang", "Pariaman", "Pasuruan", "Pekanbaru", "Pematangsiantar", "Polewali Mandar",
    "Pontianak", "Prabumulih", "Salatiga", "Samarinda", "Sawahlunto", "Semarang", "Serang", "Sibolga", "Singkawang", "Solok",
    "Sorong", "Subulussalam", "Sukabumi", "Surabaya", "Surakarta", "Tangerang", "Tanjung Pandan", "Tanjung Pinang", "Tarakan", "Tasikmalaya",
    "Tebing Tinggi", "Ternate", "Tomohon", "Yogyakarta", "Lhokseumawe", "Sabang", "Subulussalam", "Sorong", "Bontang", "Bau-Bau",
    "Baturaja", "Payakumbuh", "Pangkal Pinang", "Bukittinggi", "Padang Panjang", "Bintuhan", "Pangkal Pinang", "Prabumulih", "Padang", "Pangkal Pinang",
    "Lahat", "Lahat", "Lampung", "Metro", "Pangkal Pinang", "Bontang", "Semarang", "Surabaya", "Serang"
];
                                        
                                        cities.forEach(city => {
                                            document.write(`<option value="${city}">${city}</option>`);
                                        });
                                    </script>
                                </select>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2" style="font-family: 'Quicksand', sans-serif;">
                        <button class="btn btn-dark border-0 w-100 py-3"><i class="fas fa-spin fa-icon"></i>
                            Search</button>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Search End -->

        {{-- ===================================================== --}}
        <!-- Testimonial Start -->

        {{-- ================================================================================================================================================================================================================================================================================ --}}
{{-- ================================================================================================================================================================================================================================================================================ --}}
{{-- ================================================================================================================================================================================================================================================================================ --}}

        <section id="tentang" class="bg-light">
        <div class="container-xxl pt-0 ">
            <div class="container bg-light mt-4">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <br><br><h1 class="mb-3" style="font-family: 'Quicksand', sans-serif;"><i class="fab fa-ravelry"></i> Program Makan Gratis</h1>
                    <p style="font-family: 'Quicksand', sans-serif;"><strong>
                        "Tumbuhkan kebaikan dengan memberikan makanan gratis. Liputan kami mengungkap kepedulian terhadap kelaparan dan perjuangan dalam memberikan makanan di tengah dinamika dunia yang terus berkembang."
                    </strong></p>
                    {{-- <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p> --}}
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.5s">
                    
                    @foreach($datapekerjaan as $data)
                    <div class="testimonial-item bg-light rounded">
                        <div class="bg-white border rounded p-4">
                            <h4 style="font-family: 'Quicksand', sans-serif;"><strong>{{ $data->title }}</strong></h4>
                            <p style="font-family: 'Quicksand', sans-serif;">{{$data->body }}</p>
                            {{-- <img src="{{ $data->image }}" alt="{{ $data->image }}" width="100" height="150"> --}}
                            <img src="{{ $data->image }}" alt="{{ $data->image }}" style="width: 100%; height: 150px; object-fit: cover;">
                            
{{-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> --}}
                           <br>
                            
                           @php
                           $percentage = (100000 / $data->anggaran) * 100;
                            @endphp
                            <div class="progress mt-0 mb-2">
                                <div class="progress-bar button-merah" role="progressbar" style="width: {{ $percentage }}%" aria-valuenow="{{ $percentage }}" aria-valuemin="0" aria-valuemax="100">{{ number_format($percentage, 2) }}%</div>
                            </div>


                           <div class="">
                               <div class="d-flex justify-content-end">
                                    <h5 class="text-custom mb-3" style="font-family: 'Quicksand', sans-serif;" ><strong class="text-dark" style="font-family: 'Quicksand', sans-serif; font-size: 16px; " >Kebutuhan</strong> <span class="buttom-custom" style="font-size: 16px">{{ 'Rp ' . number_format($data->anggaran, 0, ',', '.') }},-</span>
                                        {{-- <button class="button-custom" style="font-family: 'Quicksand', sans-serif; font-size: 16px;">
                                            <i class="fas fa-envelope-open-text me-2"></i>Donasi
                                        </button> --}}
                                        <a href="#" class="text-dark" data-bs-toggle="modal" data-bs-target="#myDonasisekarang">
                                            {{-- <i class="fas fa-envelope me-2 text-white"></i><strong style="font-family: 'Quicksand', sans-serif; font-size: 16px;" class="btn btn-sn button-custom"><i class="fas fa-inbox me-2"></i>Donasi Sekarang</strong> --}}
                                            <i class="fas fa-envelope me-2 text-white"></i>
                                            <strong style="font-family: 'Quicksand', sans-serif; font-size: 14px;" class="btn btn-sn button-custom"><i class="fas fa-inbox me-2"></i>Donasi</strong>
                                            
                                        </a>
                                </div>
                                
                           </div>
                                
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
        <br><br>
    </section>
    
{{-- ================================================================================ --}}
{{-- ================================================================================================================================================================================================================================================================================ --}}
{{-- ================================================================================================================================================================================================================================================================================ --}}
{{-- ================================================================================================================================================================================================================================================================================ --}}



        <section id="layanan">        
        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3" style="font-family: 'Quicksand', sans-serif;"><strong>Pekerjaan Kami</strong></h1>
                            {{-- <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit diam justo sed rebum.</p> --}}
                            {{-- <p style="font-family: 'Quicksand', sans-serif;">{{ $data->fokus_pekerjaan}}</p> --}}
                        </div>
                    </div>
                    {{-- <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">                        
                        @php
                        $categoryIcons = [
                            'All Data' => 'fa fa-database mr-2',
                            'Infrastruktur' => 'fas fa-hammer mr-2',
                            'Pendidikan' => 'fa fa-book mr-2',
                            'Kesehatan' => 'fa fa-hospital mr-2',
                            'Makanan' => 'fas fa-utensils mr-2',
                        ];
                        @endphp
 --}}

                        {{-- @foreach ($categories as $cat)
                        <a href="/blog?category={{ $cat->slug }}" class=" btn btn btn-outline-infomb-4 rounded">
                            <span data-feather="file-plus"></span>
                            <i class="{{ $categoryIcons[$cat->nama_kategori] }}"></i> {{ $cat->nama_kategori }}
                        </a>
                        @endforeach --}}
                        
{{--                         
                        @foreach ($categories as $cat)
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            <li class="nav-item me-2">
                                <a style="font-family: 'Quicksand', sans-serif;"  class="button-custom active text-white" data-bs-toggle="pill" href="/blog?category={{ $cat->slug }}"
                                    style="color: #17a2b8; border-color: #fff;"
                                    onmouseover="this.style.backgroundColor='#17a2b8'; this.style.color='#fff';"
                                    onmouseout="this.style.backgroundColor=''; this.style.color='#17a2b8';">
                                     <i class="{{ $categoryIcons[$cat->nama_kategori] }}"></i> {{ $cat->nama_kategori }}
                                 </a>
                                  --}}
                                {{-- <a class="btn btn-outline-info active" data-bs-toggle="pill" href="/blog?category={{ $cat->slug }}"><i class="{{ $categoryIcons[$cat->nama_kategori] }}"></i> {{ $cat->nama_kategori }}</a> --}}
                            {{-- </li>
                        </ul>
                        @endforeach
                    </div> --}}
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">


                            @foreach($datapekerjaan as $data)

                            {{-- /========================================= --}}
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        {{-- <a href=""><img class="img-fluid" src="{{ $data->image }}" alt=""></a>  --}}
                                        <a href="#" style="display: inline-block; width: 400px; height: 400px; overflow: hidden;">
                                            <img class="img-fluid" src="{{ $data->image }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                                        </a>
                                        
                                        <div class="button-merah rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3" style="font-family: 'Quicksand', sans-serif;" >{{ $data->waktu_pelaksanaan}} Hari</div>
                                        <div class="button-custom rounded-top text-white position-absolute start-0 bottom-0 mx-4 pt-1 px-3" style="font-family: 'Quicksand', sans-serif;" ><span class="mt-2">{{ $data->category->nama_kategori}}</span></div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        {{-- <p class="text-dark">Kebutuhan</p> --}}
                                        <h5 class="text-custom mb-3" style="font-family: 'Quicksand', sans-serif;" ><strong class="text-dark" style="font-family: 'Quicksand', sans-serif;" >Kebutuhan</strong> <span class="buttom-custom">{{ 'Rp ' . number_format($data->anggaran, 0, ',', '.') }},-</span>

                                        </h5>
                                        <a class="d-block h5 mb-2" style="font-family: 'Quicksand', sans-serif;">{{ $data->title }}</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2" style="font-family: 'Quicksand', sans-serif;"></i>{{ $data->lokasi}}</p>
                                    </div>

                                    <div class="p-4 pb-0 mb-4">

                                        <a class="d-block h5 mb-2" style="font-family: 'Quicksand', sans-serif;"><i class="fas fa-spinner fa-spin mr-2"></i> Terkumpul</a>
                                        
                                             @php
                                            $percentage = (0 / $data->anggaran) * 100;
                                        @endphp
                                        <div class="progress">
                                            <div class="progress-bar button-merah" role="progressbar" style="width: {{ $percentage }}%" aria-valuenow="{{ $percentage }}" aria-valuemin="0" aria-valuemax="100">{{ number_format($percentage, 2) }}%</div>
                                        </div>

                                    </div>                   


{{-- ============================================================================================================  --}}
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2" style="font-family: 'Quicksand', sans-serif;">
                                            <a href="/error" class="text-dark" >
                                            {{-- <a href="/error" class="text-dark" data-bs-toggle="modal" data-bs-target="#myModal1"> --}}
                                                <i class="fa fa-eye text-custom me-2"></i><strong>Details</strong>
                                            </a>
                                        </small>

                                        <div class="modal fade" id="myModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Details Modal</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                     
                                                        <table class="table" style="font-family: 'Quicksand', sans-serif;">
                                                            <img src="{{$data->image}}" alt="{{$data->image}}" style="width: 400px; height: 400px; margin-left:35px">
                                                        </table>
                                                        
                                                    </div>
                                                    
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn button-custom" data-bs-dismiss="modal">Close</button>
                                                        {{-- <button type="button" class="btn btn-dark">Simpan Perubahan</button> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                                        
                                        

{{-- ============================================================================================================  --}}
                                        {{-- <!-- Tombol untuk membuka modal --> --}}
                                    <small class="flex-fill text-center border-end py-2" style="font-family: 'Quicksand', sans-serif;">
                                        <a href="/error" class="text-dark" >
                                        {{-- <a href="#" class="text-dark" data-bs-toggle="modal" data-bs-target="#myModal"> --}}
                                            <i class="fa fa-users text-custom me-2"></i><strong>Donatur</strong>
                                        </a>
                                    </small>

                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Daftar Donatur</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table" style="font-family: 'Quicksand', sans-serif;">
                                                        <p class="button-custom text-center" style="font-family: 'Quicksand', sans-serif;"><i class="fas fa-users text-white me-2"></i>Daftar Donatur</p>
                                                        <thead>
                                                            <tr class="text-center">
                                                                <th scope="col" class="text-custom">No</th>
                                                                <th scope="col" class="text-custom">Nama</th>
                                                                {{-- <th scope="col">Email</th> --}}
                                                                <th scope="col" class="text-custom">Jumlah Donasi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="text-center">
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>John Doe</td>
                                                                {{-- <td>JohnDoe@gmail.com</td> --}}
                                                                <td>$100</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Jane Smith</td>
                                                                {{-- <td>JaneSmith@gmail.com</td> --}}
                                                                <td>$200</td>
                                                            </tr>
                                                            <!-- Tambahkan baris tambahan sesuai dengan data yang Anda miliki -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn button-custom" data-bs-dismiss="modal">Close</button>
                                                    {{-- <button type="button" class="btn btn-dark">Simpan Perubahan</button> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                                    
{{-- ============================================================================================================  --}}                  
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2" style="font-family: 'Quicksand', sans-serif;">
                                            <a href="/error" class="text-dark" >
                                            {{-- <a href="" class="text-dark" data-bs-toggle="modal" data-bs-target="#myModalProgress"> --}}
                                                <i class="fas fa-spin fa-spinner text-custom me-2"></i><strong>Progress</strong>
                                            </a>
                                        </small>

                                                                            <!-- Modal -->
                                    <div class="modal fade" id="myModalProgress" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Daftar Donatur</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table" style="font-family: 'Quicksand', sans-serif;">
                                                        <p class="button-custom text-center" style="font-family: 'Quicksand', sans-serif;"><i class="fas fa-spin fa-spinner text-white me-2"></i>Daftar Progress</p>
                                                        <thead>
                                                            <tr class="text-center">
                                                                <th scope="col" class="text-custom">No</th>
                                                                <th scope="col" class="text-custom">Nama</th>
                                                                {{-- <th scope="col">Email</th> --}}
                                                                <th scope="col" class="text-custom">Jumlah Donasi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="text-center">
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>John Doe</td>
                                                                {{-- <td>JohnDoe@gmail.com</td> --}}
                                                                <td>$100</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Jane Smith</td>
                                                                {{-- <td>JaneSmith@gmail.com</td> --}}
                                                                <td>$200</td>
                                                            </tr>
                                                            <!-- Tambahkan baris tambahan sesuai dengan data yang Anda miliki -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn button-custom" data-bs-dismiss="modal">Close</button>
                                                    {{-- <button type="button" class="btn btn-dark">Simpan Perubahan</button> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

{{-- ============================================================================================================  --}}
                                                
                                        <small class="flex-fill text-center border-end py-2" style="font-family: 'Quicksand', sans-serif;">
                                            <a href="/error" class="text-dark">
                                                <i class="fas fa-spinner fa-spin text-custom me-2"></i>
                                                <strong>Vendor/Instansi</strong>
                                            </a>
                                        </small>                                      
                                    </div>
                                    
                                    <div class="d-flex border-top">
                                        <button type="button" class="button-custom d-flex flex-fill justify-content-center align-items-center border-end py-2">
                                            {{-- <a href="/error" class="text-decoration-none text-white" style="font-family: 'Quicksand', sans-serif;">
                                                <i class="fas fa-envelope-open-text me-2 " ></i> Donasi Sekarang
                                            </a> --}}
                                            <a href="#" class="text-dark" data-bs-toggle="modal" data-bs-target="#myDonasisekarang">
                                                <i class="fas fa-envelope me-2 text-white"></i><strong class="text-white">Donasi Sekarang</strong>
                                            </a>
                                        </button>

                                        {{-- <small class="flex-fill text-center border-end py-2" style="font-family: 'Quicksand', sans-serif;">
                                            <a href="#" class="text-dark" data-bs-toggle="modal" data-bs-target="#myModal1">
                                                <i class="fa fa-eye text-custom me-2"></i><strong>Details</strong>
                                            </a>
                                        </small> --}}

                                        <div class="modal fade" id="myDonasisekarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Details Modal</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                     
                                                        <table class="table" style="font-family: 'Quicksand', sans-serif;">
                                                            <p class="button-custom text-center" style="font-family: 'Quicksand', sans-serif;"><i class="fab fa-ravelry text-white me-2"></i>Masukan Nominal Donasi</p>
                                                            <style>
                                                                .button-donasi {
                                                                    display: flex;
                                                                    flex-direction: column;
                                                                    align-items: stretch;
                                                                     /* Aligment dari kiri ke kanan */
                                                                }
                                                            
                                                                .donasi {
                                                                    width: 100%; /* Lebar tombol 100% dari parent */
                                                                    margin-bottom: 10px; /* Jarak antar tombol */
                                                                    padding: 8px;
                                                                    text-align: left; /* Aligment teks dari kiri ke kanan */
                                                                }
                                                            </style>
                                                            <div class="button-donasi">
                                                                
                                                                <a href="https://app.midtrans.com/payment-links/1714931027969" style="text-decoration: none; display: inline-block width: 100%;">
                                                                    <button id="btnNominal10000" class="donasi button-custom" onclick="selectNominal(10000)" style="width: 100%; padding: 8px 16px; display: inline-block; text-align: center;">
                                                                        <i class="far fa-file me-2"></i> Rp. 5.000
                                                                    </button>
                                                                </a>
                                                                
                                                                <a href="https://app.midtrans.com/payment-links/1714929021512" style="text-decoration: none; display: inline-block width: 100%;">
                                                                    <button id="btnNominal10000" class="donasi button-custom" onclick="selectNominal(10000)" style="width: 100%; padding: 8px 16px; display: inline-block; text-align: center;">
                                                                        <i class="far fa-file me-2"></i> Rp. 10.000
                                                                    </button>
                                                                </a>

                                                                <a href="https://app.midtrans.com/payment-links/1714929161813" style="text-decoration: none; display: inline-block width: 100%;">
                                                                    <button id="btnNominal10000" class="donasi button-custom" onclick="selectNominal(10000)" style="width: 100%; padding: 8px 16px; display: inline-block; text-align: center;">
                                                                        <i class="far fa-file me-2"></i> Rp. 20.000
                                                                    </button>
                                                                    
                                                                </a>
                                                                
                                                                <a href="https://app.midtrans.com/payment-links/1714927952202" style="text-decoration: none; display: inline-block width: 100%;">
                                                                    <button id="btnNominal10000" class="donasi button-custom" onclick="selectNominal(10000)" style="width: 100%; padding: 8px 16px; display: inline-block; text-align: center;">
                                                                        <i class="far fa-file me-2"></i> Rp. 25.000
                                                                    </button>
                                                                    
                                                                </a>
                                                                
                                                                <a href="https://app.midtrans.com/payment-links/1714928035163" style="text-decoration: none; display: inline-block width: 100%;">
                                                                    <button id="btnNominal10000" class="donasi button-custom" onclick="selectNominal(10000)" style="width: 100%; padding: 8px 16px; display: inline-block; text-align: center;">
                                                                        <i class="far fa-file me-2"></i> Rp. 50.000
                                                                    </button>
                                                                    
                                                                </a>
                                                                
                                                                <a href="https://app.midtrans.com/payment-links/1714928098182" style="text-decoration: none; display: inline-block width: 100%;">
                                                                    <button id="btnNominal10000" class="donasi button-custom" onclick="selectNominal(10000)" style="width: 100%; padding: 8px 16px; display: inline-block; text-align: center;">
                                                                        <i class="far fa-file me-2"></i> Rp. 100.000
                                                                    </button>
                                                                    
                                                                </a>

                                                                <a href="https://app.midtrans.com/payment-links/1714928148439" style="text-decoration: none; display: inline-block width: 100%;">
                                                                    <button id="btnNominal10000" class="donasi button-custom" onclick="selectNominal(10000)" style="width: 100%; padding: 8px 16px; display: inline-block; text-align: center;">
                                                                        <i class="far fa-file me-2"></i> Rp. 200.000
                                                                    </button>
                                                                    
                                                                </a>
                                                               
                                                                <a href="https://app.midtrans.com/payment-links/1714928197601" style="text-decoration: none; display: inline-block width: 100%;">
                                                                    <button id="btnNominal10000" class="donasi button-custom" onclick="selectNominal(10000)" style="width: 100%; padding: 8px 16px; display: inline-block; text-align: center;">
                                                                        <i class="far fa-file me-2"></i> Rp. 250.000
                                                                    </button>
                                                                    
                                                                </a>

                                                                <a href="https://app.midtrans.com/payment-links/1714928247949" style="text-decoration: none; display: inline-block width: 100%;">
                                                                    <button id="btnNominal10000" class="donasi button-custom" onclick="selectNominal(10000)" style="width: 100%; padding: 8px 16px; display: inline-block; text-align: center;">
                                                                        <i class="far fa-file me-2"></i> Rp. 500.000
                                                                    </button>
                                                                    
                                                                </a>

                                                                <a href="https://app.midtrans.com/payment-links/1714928296430" style="text-decoration: none; display: inline-block width: 100%;">
                                                                    <button id="btnNominal10000" class="donasi button-custom" onclick="selectNominal(10000)" style="width: 100%; padding: 8px 16px; display: inline-block; text-align: center;">
                                                                        <i class="far fa-file me-2"></i> Rp. 1.000.000
                                                                    </button>
                                                                    
                                                                </a>
                                                               
                                                            </div>
                                                            
                                                            {{-- <!-- Form untuk memasukkan nominal donasi --> --}}
                                                            {{-- <form id="donationForm">
                                                                <input type="hidden" name="nominal" id="inputNominal">
                                                                <button type="button" onclick="submitDonation()" class="button-custom"><i class="fab fa-telegram-plane me-2"></i>Donasi Sekarang</button>
                                                            </form> --}}
                                                            
                                                            <script>
                                                                function selectNominal(amount) {
                                                                    // Set nilai inputNominal sesuai dengan nominal yang dipilih
                                                                    document.getElementById('inputNominal').value = amount;
                                                            
                                                                    // Hapus class 'selected' dari semua tombol donasi
                                                                    var buttons = document.querySelectorAll('.donasi');
                                                                    buttons.forEach(button => {
                                                                        button.classList.remove('selected');
                                                                    });
                                                            
                                                                    // Tambahkan class 'selected' ke tombol yang dipilih
                                                                    var selectedButton = document.getElementById('btnNominal' + amount);
                                                                    selectedButton.classList.add('selected');
                                                                }
                                                            
                                                                function submitDonation() {
                                                                    var nominal = document.getElementById('inputNominal').value; // Mendapatkan nilai nominal dari inputNominal
                                                            
                                                                    Kirim data donasi (contoh menggunakan console.log untuk menampilkan data)
                                                                    console.log('Nominal Donasi: ' + nominal);
                                                            
                                                                    Tambahkan kode untuk mengirim data donasi ke server di sini (AJAX atau form submit)
                                                                    // Contoh: $.post('/submit_donation', { nominal: nominal });
                                                                }
                                                            </script>
                                                            
                                                            
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn button-custom" data-bs-dismiss="modal">Close</button>
                                                        {{-- <button type="button" class="btn btn-dark">Simpan Perubahan</button> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                        

                                        
                                                            
                                    </div>
                                    
                                </div>
                            </div>

                            {{-- ==================================== --}}
                            @endforeach
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                {{-- Tautan Paginasi --}}
                                <nav aria-label="Page navigation" style="font-family: 'Quicksand', sans-serif;">
                                    <ul class="pagination justify-content-center">
                                        {{-- <li class="page-item">
                                            <span class="page-link button-merah">{{ $datapekerjaan->onFirstPage() ? '«' : '' }}</span>
                                        </li> --}}
                                        <ul class="pagination">
                                            <li class="page-item {{ $datapekerjaan->onFirstPage() ? 'disabled' : '' }}" style="font-family: 'Quicksand', sans-serif; margin-right: 10px;">
                                                <a class="page-link button-custom text-white" href="{{ $datapekerjaan->previousPageUrl() }}" aria-label="Previous">
                                                    <span aria-hidden="true">&lsaquo;</span>
                                                </a>
                                            </li>
                                            <li class="page-item disabled" style="margin-right: 10px;">
                                                <span class="page-link button-custom text-white">{{ $datapekerjaan->currentPage() }}</span>
                                            </li>
                                            <li class="page-item {{ $datapekerjaan->hasMorePages() ? '' : 'disabled' }}" style="font-family: 'Quicksand', sans-serif; margin-right: 10px;">
                                                <a class="page-link button-custom" href="{{ $datapekerjaan->nextPageUrl() }}" aria-label="Next">
                                                    <span aria-hidden="true">&rsaquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                          {{-- <li class="page-item">
                                            <span class="page-link button-merah">{{ $datapekerjaan->lastPage() }}</span>
                                        </li> --}}
                                    </ul>
                                </nav>
                                {{-- Teks "Lihat Pekerjaan Kami ... Read More" --}}
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </section>
        <!-- Property List End -->

{{-- ================================================================================================================================================================================================================================================================================ --}}
{{-- ================================================================================================================================================================================================================================================================================ --}}
{{-- ================================================================================================================================================================================================================================================================================ --}}


        <!-- Category Start -->

        <section class="button-custom">
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3 text-white" style="font-family: 'Quicksand', sans-serif;">Transparansi Kami </h1>
                    {{-- <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p> --}}
                <p>Kami memilih jalan yang berbeda dalam setiap langkah. Keunikan dalam cara kami bekerja menjadi landasan keberhasilan</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="catatan-item d-block bg-light text-center rounded p-3" href="/error">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="frontend/img/icon-apartment.png" alt="Icon">
                                </div>
                                <h6 style="font-family: 'Quicksand', sans-serif;"><strong class="text-custom">Infrastruktur</strong></h6>
                                <span class="text-custom" style="font-family: 'Quicksand', sans-serif;"><strong>{{ $totaldatainsfrastruktur}} </strong><strong class="text-custom" style="font-family: 'Quicksand', sans-serif;"s>Jobs</strong></span>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="catatan-item d-block bg-light text-center rounded p-3" href="/error">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="/frontend/img/icon-luxury.png" alt="Icon">
                                </div>
                                <h6 style="font-family: 'Quicksand', sans-serif;"><strong class="text-custom">Pendidikan</strong></h6>
                                <span class="text-custom" style="font-family: 'Quicksand', sans-serif;"><strong>{{ $totaldatapendidikan}} </strong><strong class="text-custom" style="font-family: 'Quicksand', sans-serif;"s>Jobs</strong></span>
                            </div>
                        </a>
                    </div>
                    

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="catatan-item d-block bg-light text-center rounded p-3" href="/error">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="/frontend/img/icon-house.png" alt="Icon">
                                </div>
                                <h6 style="font-family: 'Quicksand', sans-serif;"><strong class="text-custom">Kesehatan</strong></h6>
                                <span class="text-custom" style="font-family: 'Quicksand', sans-serif;"><strong>{{ $totaldatakesehatan}} </strong><strong class="text-custom" style="font-family: 'Quicksand', sans-serif;"s>Jobs</strong></span>
                            </div>
                        </a>
                    </div>
                    

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="catatan-item d-block bg-light text-center rounded p-3" href="/error">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="/frontend/img/icon-housing.png" alt="Icon">
                                </div>
                                <h6 style="font-family: 'Quicksand', sans-serif;"><strong class="text-custom">Makanan</strong></h6>
                                <span class="text-custom" style="font-family: 'Quicksand', sans-serif;"><strong>{{ $totaldatamakanan}} </strong><strong class="text-custom" style="font-family: 'Quicksand', sans-serif;"s>Jobs</strong></span>
                            </div>
                        </a>
                    </div>
                    

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="catatan-item d-block bg-light text-center rounded p-3" href="/error">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="/frontend/img/icon-building.png" alt="Icon">
                                </div>
                                <h6 style="font-family: 'Quicksand', sans-serif;"><strong class="text-custom">Laporan Pekerjaan </strong></h6>
                                <span class="text-custom" style="font-family: 'Quicksand', sans-serif;"><strong>{{ $datatotalpekerjaan}} </strong><strong class="text-custom" style="font-family: 'Quicksand', sans-serif;"s>Jobs</strong></span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="catatan-item d-block bg-light text-center rounded p-3" href="/error">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="/frontend/img/icon-neighborhood.png" alt="Icon">
                                </div>
                                <h6 style="font-family: 'Quicksand', sans-serif;"><strong class="text-custom">Mitra Kerjasama </strong></h6>
                                <span class="text-custom" style="font-family: 'Quicksand', sans-serif;"><i>≈</i><strong> {{ $totalmitra}} </strong><strong class="text-custom" style="font-family: 'Quicksand', sans-serif;"s>Vendor</strong></span>
                            </div>
                        </a>
                    </div>
                    

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="catatan-item d-block bg-light text-center rounded p-3" href="/error">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="/frontend/img/icon-condominium.png" alt="Icon">
                                </div>
                                <h6 style="font-family: 'Quicksand', sans-serif;"><strong class="text-custom">Sponsor/Mitra</strong></h6>
                                <span class="text-custom" style="font-family: 'Quicksand', sans-serif;"><i>≈</i><strong>22 Sponsorship </strong><strong class="text-custom" style="font-family: 'Quicksand', sans-serif;"></strong></span>
                            </div>
                        </a>
                    </div>
                    
                    

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="catatan-item d-block bg-light text-center rounded p-3" href="/error">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="/frontend/img/icon-villa.png" alt="Icon">
                                </div>
                                <h6 style="font-family: 'Quicksand', sans-serif;"><strong class="text-custom">Transparansi</strong></h6>
                                <span class="text-custom" style="font-family: 'Quicksand', sans-serif;"><i>≈</i><strong>{{ $datatotalpekerjaan}}  Jobs</strong><strong class="text-custom" style="font-family: 'Quicksand', sans-serif;"></strong></span>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>


{{-- ================================================================================ --}}
{{-- ================================================================================================================================================================================================================================================================================ --}}
{{-- ================================================================================================================================================================================================================================================================================ --}}
{{-- ================================================================================================================================================================================================================================================================================ --}}

        <!-- Team Start -->
        <section class="bg-white">

            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3" style="font-family: 'Quicksand', sans-serif;">Sponsor & Mitra</h1>
                    {{-- <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p> --}}
                </div>


                <div class="row g-4">
                    @foreach($sponsor as $data)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <style>
                                     .card-mitra-1 {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 300px; /* Lebar kartu */
            height: 300px; /* Tinggi kartu */
            border: none;
            margin: 50px auto;
            overflow: hidden; /* Menghilangkan konten yang melebihi batas kartu */
            background-color: #f0f0f0; /* Warna latar belakang kartu (opsional) */
        }

        /* Gaya CSS untuk gambar di dalam kartu */
        .card-mitra-img-1{
            max-width: 100%; /* Lebar maksimum gambar */
            max-height: 100%; /* Tinggi maksimum gambar */
            width: auto; /* Lebar gambar disesuaikan untuk mempertahankan proporsi */
            height: auto; /* Tinggi gambar disesuaikan untuk mempertahankan proporsi */
            object-fit: contain; /* Menjaga proporsi gambar */
        }
                               </style>

                                
                                     <div class="card-mitra-1" style="width: 300px; display: flex; justify-content: center; align-items: center;">
                                        <img src="{{ $data->image }}" class="card-mitra-img-1" alt="{{$data->image}}" style="max-width: 100%; max-height: 200px; object-fit: contain;">
                                    </div>
                                    
                                    {{-- </div> --}}
                                
                                
                                    {{-- <div class="container">
                                        <!-- Penggunaan img dengan kelas responsive-img -->
                                        // <img class="responsive-img-mitra" src="{{$data->image}}" alt="{{$data->image}}">
                                    </div>
                                 --}}
                                {{-- <img class="img-fluid" src="{{$data->image}}" alt="{{$data->image}}"> --}}
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    {{-- <a class="btn button-custom mx-1" href=""><i class="fab fa-instagram"></i></a> --}}
                                    <a class="btn button-custom mx-1" href="https://www.instagram.com/{{$data->instagram}}/">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                                                        {{-- <a class="btn button-custom mx-1" href=""><i class="fab fa-facebook-f"></i></a> --}}
                                    <a class="btn button-custom mx-1" href="{{$data->email}}"><i class="far fa-envelope"></i></a>
                                    <a class="btn button-custom mx-1" href="https://wa.me/{{$data->wa}}"><i class="fab fa-whatsapp"></i></a>
                                    {{-- <a class="btn button-custom mx-1" href="https://www.tiktok.com/@username">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/></svg>
                                    </a> --}}
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">{{$data->nama}}</h5>
                                {{-- <small>Designation</small> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>


            </div>
        </div>
        <!-- Team End -->
    </section>


    <section class="bg-light">
        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3" style="font-family: 'Quicksand', sans-serif;">Berita Kami</h1>
                     <p style="font-family: 'Quicksand', sans-serif;"><strong>Kisah kemanusiaan yang menginspirasi, kami hadirkan liputan mendalam untuk menyuarakan kepedulian terhadap sesama dan mencerahkan perjalanan kebaikan di tengah-tengah dunia yang terus berubah."</strong></p>
                    {{-- <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p> --}}
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    
                    @foreach($databerita as $data)
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <h4 style="font-family: 'Quicksand', sans-serif; font-size:22px"><strong>{{ $data->judul }}</strong></h4>
                            {{-- <p style="font-family: 'Quicksand', sans-serif;">{{$data->isi }}</p> --}}
                            <br>
                            <p class="content-text" style="margin-bottom: 0; text-align: justify;">{{ $data->isi }}</p>

                            {{-- <button onclick="toggleReadMore()">Read more</button> --}}
                            <br>
                            <script>
                            function toggleReadMore() {
    var content = document.querySelector('.content-text');
    var buttonText = document.querySelector('button');
    
    var computedStyle = window.getComputedStyle(content); // Dapatkan properti CSS yang dihitung
    var contentHeight = parseInt(computedStyle.height); // Ambil nilai tinggi tanpa unit "px"
    
    if (contentHeight === 200) { // Periksa apakah tingginya 200px
        content.style.height = 'auto';
        buttonText.textContent = 'Read less';
    } else {
        content.style.height = '200px';
        buttonText.textContent = 'Read more';
    }
}

                            </script>
                                            

{{-- <div class="card" style="width: 450px; height: 450px; display: flex; justify-content: center; align-items: center; margin-right:90px">
    <a href="#" style="display: inline-block; width: 400px; height: 400px; overflow: hidden;">
        <img class="img-fluid" src="{{ $data->gambar }}" alt="{{$data->gambar}}" style="width: 100%; height: 100%; object-fit: cover; margin-right:100px">
    </a>
    <!-- Konten card lainnya --> --}}
{{-- </div> --}}
<img class="img-fluid" src="{{ $data->gambar }}" alt="{{$data->gambar}}" style="width: 100%; height: 100%; object-fit: cover; margin-right:100px">



{{-- 
                            
                            <div class="card">
                                <img src="{{ $data->gambar }}" alt="{{ $data->gambar }}" class="card-img">
                                <div class="card-content">
                                    <!-- Konten card lainnya -->
                                </div>
                            </div> --}}
                            
                            {{-- <img src="{{ $data->gambar }}" alt="{{ $data->gambar }}" width="400" height="400"> --}}
{{-- <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p> --}}
                           <br>
                                <div class="d-flex align-items-center">
                                {{-- <img class="img-fluid flex-shrink-0 rounded" src="img/fe_web/beranda/berita2.jpg $data->lokasi }}" style="width: 45px; height: 45px;"> --}}
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">{{ date('j F Y', strtotime($data->tanggal_dibuat)) }}</h6>
                                    {{-- <small></small> --}}
                                </div>
                                <div class="ps-3">
                                  <a href="#" class="text-custom" style="animation: moveUpDown 0.5s infinite alternate; margin-left: 25px;">
                                        <i class="fas fa-comments ml-3" style="color: transparent; border: 2px solid white; font-size: 19px;"></i>
                                    </a>
                                    {{-- <small class="flex-fill text-center border-end py-2" style="font-family: 'Quicksand', sans-serif;"> --}}
                                        <a href="#" class="text-dark" data-bs-toggle="modal" data-bs-target="#modalBerita">
                                            <i class="fa fa-share-alt text-custom me-2 ml-3" style="margin-left: 25px;"></i><strong></strong>
                                        </a>
                                        
                                        <!-- Modal -->
                                        <div class="modal fade" id="modalBerita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <!-- Modal body dihapus -->
                                                    <div class="modal-footer">
                                                        <a href="https://www.facebook.com/sharer.php?u=your_share_url" target="_blank" class="btn btn-primary">Share to Facebook</a>
                                                        <a href="https://www.instagram.com" target="_blank" class="btn btn-primary">Share to Instagram</a>
                                                        <a href="https://www.tiktok.com" target="_blank" class="btn btn-primary">Share to TikTok</a>
                                                        <button type="button" class="btn button-custom" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    <a href="#" class="text-custom" style="animation: moveUpDown 0.5s infinite alternate; margin-left: 25px;">
                                        <i class="fas fa-eye ml-3" style="color: transparent; border: 2px solid white; font-size: px;"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>

        
{{-- ================================================================================ --}}
{{-- ================================================================================================================================================================================================================================================================================ --}}
{{-- ================================================================================================================================================================================================================================================================================ --}}
{{-- ================================================================================================================================================================================================================================================================================ --}}

            
        <section class="bg-white px-4 py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        // @foreach($mitra as $data)
                                        {{-- <div class="card" style="width: 220px; display: flex; justify-content: center; align-items: center; border: none;">
                                            <img src="{{ $data->image }}" class="card-img-top" alt="{{$data->image}}" style="max-width: 100%; max-height: 200px; object-fit: contain;">
                                        </div> --}}
                                        <style>
                                            /* CSS untuk kartu mitra */
                                            .card-mitra {
                                                width: 200px;
                                                display: flex;
                                                justify-content: center;
                                                align-items: center;
                                                border: none;
                                                overflow: hidden;
                                                margin: 50px auto;

                                            }
                                    
                                            /* CSS untuk gambar mitra */
                                            .card-img-top-mitra {
                                                max-width: 100%;
                                                max-height: 200px;
                                                object-fit: contain;
                                                animation: runningImage 20s linear infinite;
                                            }
                                    
                                            /* Keyframes untuk animasi */
                                            @keyframes runningImage {
                                                0% {
                                                    transform: translateX(100%); /* Mulai dari luar kanan */
                                                }
                                                50% {
                                                    transform: translateX(-100%); /* Tengah animasi: pindah ke kiri */
                                                    opacity: 0; /* Hilangkan gambar di tengah animasi */
                                                }
                                                100% {
                                                    transform: translateX(100%); /* Akhir di luar kanan */
                                                    opacity: 1; /* Munculkan gambar kembali */
                                                }
                                            }
                                        </style>
                                                <div class="card-mitra">
                                                    <img src="{{$data->image}}" class="card-img-top-mitra" alt="{{$data->image}}">
                                                </div>

                                        
                                        @endforeach
                                        // <!-- Tambahkan gambar-gambar lainnya di sini -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
          
        <script>
            $(document).ready(function() {
                $('.carousel').carousel({
                    interval: 2000 // Perubahan gambar setiap 2 detik
                });
            });
        </script>
  
{{-- ================================================================================ --}}
{{-- ================================================================================================================================================================================================================================================================================ --}}
{{-- ================================================================================================================================================================================================================================================================================ --}}
{{-- ================================================================================================================================================================================================================================================================================ --}}

  <!-- Footer Start -->
  <section id="kontaks">
        <div  class="container-fluid button-custom text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Panyawangan, Cileunyi Bandung</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+6181 321 455 855</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>hbi@HaiuCare.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">About HaiuCare </a>
                        <a class="btn btn-link text-white-50" href="">Contact HaiuCare</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4 text0">Download App</h5>
                        <div class="row">
                          <!-- Google Play Store -->
                          <a href="https://play.google.com/store/apps/details?id=nama.package.aplikasi">
                            <img src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png" alt="Google Play Store" width="200" style="margin-right: 20px;">
                        </a>
                                                

                        <!-- App Store (iOS) -->
                        <a href="https://apps.apple.com/app/nama-aplikasi/id123456789">
                            <img src="https://developer.apple.com/app-store/marketing/guidelines/images/badge-download-on-the-app-store.svg" alt="App Store" width="175">
                        </a>


                            
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Email us for more information</h5>
                        {{-- <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p> --}}
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Show Me</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; PT. HaiuCare Bangun Indonesia <a class="border-bottom" href="https://www.haiucares.com">haiucares.com</a>
                            , All Right Reserved. 2024
							
							{{-- <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/--> --}}
							{{-- Designed By <a class="border-bottom" href="https://htmlcodex.com"></a> --}}
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </section>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>


    @include('fe_web.part.footer')
