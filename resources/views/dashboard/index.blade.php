@extends('dashboard.layouts.main')

@section('container')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h5 class="selamat-datang">Selamat Datang ! {{ auth()->user()->name }}</h5>
    

    <!-- FITUR TOOL BAR UNTUK LAPORAN YANG AKAN DI EKSEKUSI OLEH USER SENDIRI  -->

     <div class="btn-toolbar "> 
            <div class="">     
                <a href="">
                    <button class="btn-dashboard">Export</button>
                </a>
                
                <a href="">
                    <button class="btn-dashboard">Share</button>
                </a>
            </div>            
    </div> 

    <!-- ########################  -->

</div>

                <h2>Section title</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Header</th>
                                <th scope="col">Header</th>
                                <th scope="col">Header</th>
                                <th scope="col">Header</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1,001</td>
                                <td>random</td>
                                <td>data</td>
                                <td>placeholder</td>
                                <td>text</td>
                            </tr>
                            <tr>
                                <td>1,002</td>
                                <td>placeholder</td>
                                <td>irrelevant</td>
                                <td>visual</td>
                                <td>layout</td>
                            </tr>
                            <tr>
                                <td>1,003</td>
                                <td>data</td>
                                <td>rich</td>
                                <td>dashboard</td>
                                <td>tabular</td>
                            </tr>
                            <tr>
                                <td>1,003</td>
                                <td>information</td>
                                <td>placeholder</td>
                                <td>illustrative</td>
                                <td>data</td>
                            </tr>
                            <tr>
                                <td>1,004</td>
                                <td>text</td>
                                <td>random</td>
                                <td>layout</td>
                                <td>dashboard</td>
                            </tr>
                            <tr>
                                <td>1,005</td>
                                <td>dashboard</td>
                                <td>irrelevant</td>
                                <td>text</td>
                                <td>placeholder</td>
                            </tr>
                            <tr>
                                <td>1,006</td>
                                <td>dashboard</td>
                                <td>illustrative</td>
                                <td>rich</td>
                                <td>data</td>
                            </tr>
                            <tr>
                                <td>1,007</td>
                                <td>placeholder</td>
                                <td>tabular</td>
                                <td>information</td>
                                <td>irrelevant</td>
                            </tr>
                            <tr>
                                <td>1,008</td>
                                <td>random</td>
                                <td>data</td>
                                <td>placeholder</td>
                                <td>text</td>
                            </tr>
                            <tr>
                                <td>1,009</td>
                                <td>placeholder</td>
                                <td>irrelevant</td>
                                <td>visual</td>
                                <td>layout</td>
                            </tr>
                            <tr>
                                <td>1,010</td>
                                <td>data</td>
                                <td>rich</td>
                                <td>dashboard</td>
                                <td>tabular</td>
                            </tr>
                            <tr>
                                <td>1,011</td>
                                <td>information</td>
                                <td>placeholder</td>
                                <td>illustrative</td>
                                <td>data</td>
                            </tr>
                            <tr>
                                <td>1,012</td>
                                <td>text</td>
                                <td>placeholder</td>
                                <td>layout</td>
                                <td>dashboard</td>
                            </tr>
                          
                        </tbody>
                    </table>
                </div> 


                
      <section class="section service" id="services">
        <div class="container">

          {{-- <h3 class="h2 section-title">~ Kami Bekerja dengan Cara yang Berbeda</h2> --}}
            
          <h2 class="h2 section-title underline">Kami Bekerja dengan Cara yang Berbeda </h2>


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
                      <ion-icon name="medkit"></ion-icon>
                    </div>
                    <br>
                    <h3 class="h3 title">Kesehatan</h3>

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

@endsection

