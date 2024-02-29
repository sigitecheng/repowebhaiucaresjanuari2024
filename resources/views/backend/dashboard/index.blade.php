@extends('backend.dashboard.part.header')
@include('backend.dashboard.part.menuheader')
@include('backend.dashboard.part.sidebar')

<!--Content right-->
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
    <h5 class="mb-3 mt-3" ><i class='fa fa-map-signs'></i> <strong>Halaman | {{ $title_dashboard }}</strong></h5>
    <hr>
       
    <button class="btn btn-dark btn-block mb-4">
        <h6 class="mt-0 mb-2"><i class="fa fa-database mr-2"></i><strong> Database HaiuCare Indonesia </strong></h6>
    </button>
    
    

    
{{-- ============================== HALAMAN DATABASE PROJECT SUB BIDANG PEKERJAAN =========================== --}}
                <!--Dashboard widget-->

                  <!--Custom cards section-->
                  <div class="row">
                    <!--Visitors statistics card-->
                    <div class="col-sm-4 custom-card">
                        <div class="mt-1 mb-3 button-container p-3 bg-white border shadow lh-sm">
                            <div class="text-center mb-3">
                                <i class="fas fa-users"></i>
                                <h5 class="mb-0 mt-2"><small>Users</small></h5>
                                <h2>{{ $datausers }}</h2>
                            </div>

                            <svg viewBox="0 0 36 25" class="circular-chart blue">
                                <path class="circle-bg"
                                d="M18 2.0845
                                    a 7.9567 7.9567 0 0 1 0 15.9134
                                    a 7.9567 7.9567 0 0 1 0 -15.9134"
                                />
                                <path class="circle"
                                stroke-dasharray="40, 60"
                                d="M18 2.0845
                                    a 7.9567 7.9567 0 0 1 0 15.9134
                                    a 7.9567 7.9567 0 0 1 0 -15.9134"
                                />
                                <text x="18" y="12.00" class="percentage">&#xf0c0;</text>
                            </svg>
                            <div class="row mx-2">
                                <div class="col-sm-6 col-12">
                                    <h5>123</h5>
                                    <span class="text-muted small"><strong>Male visitors</strong></span>
                                </div>
                                <div class="col-sm-6 col-12 text-right">
                                    <h5>345</h5>
                                    <span class="text-muted small"><strong>Female visitors</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Visitors statistics card-->

                    <!--Transaction statistics card-->
                    <div class="col-sm-4 custom-card">
                        <div class="mt-1 mb-3 button-container p-3 bg-white border shadow lh-sm">
                            <div class="text-center mb-3">
                                <i class="fas fa-exchange-alt"></i>
                                <h5 class="mb-0 mt-2"><small>Transactions</small></h5>
                                <h2>{{ $datapost }}</h2>
                            </div>
                            
                            <svg viewBox="0 0 36 25" class="circular-chart blue">
                                <path class="circle-bg"
                                d="M18 2.0845
                                    a 7.9567 7.9567 0 0 1 0 15.9134
                                    a 7.9567 7.9567 0 0 1 0 -15.9134"
                                />
                                <path class="circle"
                                stroke-dasharray="40, 60"
                                d="M18 2.0845
                                    a 7.9567 7.9567 0 0 1 0 15.9134
                                    a 7.9567 7.9567 0 0 1 0 -15.9134"
                                />
                                <text x="18" y="12.00" class="percentage">&#xf1ed;</text>
                            </svg>

                            <div class="row mx-2">
                                <div class="col-sm-6 col-12">
                                    <h5>15,300</h5>
                                    <span class="text-muted small"><strong>Payments done</strong></span>
                                </div>
                                <div class="col-sm-6 col-12 text-right">
                                    <h5>67</h5>
                                    <span class="text-muted small"><strong>Payments due</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Transaction statistics card-->

                    <!--Tasks statistics card-->
                    <div class="col-sm-4 custom-card">
                        <div class="mt-1 mb-3 button-container p-3 bg-white border shadow lh-sm">
                            <div class="text-center mb-3">
                                <i class="fas fa-users"></i>
                                <h5 class="mb-0 mt-2"><small>PIC</small></h5>
                                <h2>{{$datapenanggungjawab}}</h2>
                            </div>

                            <svg viewBox="0 0 36 25" class="circular-chart blue">
                                <path class="circle-bg"
                                d="M18 2.0845
                                    a 7.9567 7.9567 0 0 1 0 15.9134
                                    a 7.9567 7.9567 0 0 1 0 -15.9134"
                                />
                                <path class="circle"
                                stroke-dasharray="40, 60"
                                d="M18 2.0845
                                    a 7.9567 7.9567 0 0 1 0 15.9134
                                    a 7.9567 7.9567 0 0 1 0 -15.9134"
                                />
                                <text x="18" y="12.00" class="percentage">&#xf0ae;</text>
                            </svg>

                            <div class="row mx-2">
                                <div class="col-sm-6 col-12">
                                    <h5>490</h5>
                                    <span class="text-muted small"><strong>Completed</strong></span>
                                </div>
                                <div class="col-sm-6 col-12 text-right">
                                    <h5>95</h5>
                                    <span class="text-muted small"><strong>Pending</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Transaction statistics card-->
                </div>
                <!--Custom cards Section-->



                
{{-- -------------------------------------------------------- --}}
   <!--Content right-->
   <div class="col-sm-12 col-xs-12 content pl-0">
    
    <div class="row mt-3">
        <div class="col-sm-12">
            <!--Inverse table-->
                    <div class="mb-3 p-3 button-container bg-white border shadow-sm rounded" style="border-radius: 10px;">
                        <h6><i class="fab fa-superpowers mr-2"></i>Data Project HaiuCare Bangun Indonesia </h6>
                        {{-- <p class="mb-2">Add class <code>table-dark</code></p> --}}
                        <hr> 
                        <table class="table table-dark" id="project_table">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 50px;">No</th>
                                        <th class="text-center" style="width: 150px;">Project</th>
                                        <th class="text-center" style="width: 25px;">Progress</th>
                                        <th class="text-center" style="width: 25px;">Start date</th>
                                        <th class="text-center" style="width: 25px;">Due date</th>
                                        <th class="text-center" style="width: 25px;">Anggaran</th>
                                    </tr>
                                </thead>
                                @foreach($dataposts as $data)
                                <tbody>
                                    <tr>
                                        {{-- <td></td> --}}
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{$data->title }}</td>
                                        <td class="text-center">
                                            @if (is_object($data) && isset($data->datapekerjaanstatus))
    @php
        $progressPercentage = 0;
        $progressColor = 'bg-danger';

        switch ($data->datapekerjaanstatus->nama_status) {
            case 'Selesai':
                $progressPercentage = 100;
                $progressColor = 'bg-success';
                break;
            case 'Pending':
                $progressPercentage = 50;
                $progressColor = 'bg-warning';
                break;
            case 'Tertunda':
                $progressColor = 'bg-danger';
                break;
            case 'Sedang Berjalan':
                $progressPercentage = 100;
                $progressColor = 'bg-primary';
                break;
            default:
                $progressPercentage = 0;
        }
    @endphp

    <i class="fas 
        @if ($data->datapekerjaanstatus->nama_status == 'Selesai')
            fa-check-circle text-success
        @elseif ($data->datapekerjaanstatus->nama_status == 'Pending')
            fa-exclamation-circle text-warning
        @elseif ($data->datapekerjaanstatus->nama_status == 'Tertunda')
            fa-clock text-danger
        @elseif ($data->datapekerjaanstatus->nama_status == 'Sedang Berjalan')
            fa-spinner text-primary
        @endif
    "></i>
    {{ $data->datapekerjaanstatus->nama_status }}

    <div class="progress mt-3" style="height: 7px;">
        <div class="progress-bar {{ $progressColor }}" role="progressbar" aria-valuenow="{{ $progressPercentage }}" style="width: {{ $progressPercentage }}%" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
@endif

                                        </td>
                                        <td class="text-center">{{ $data->tanggal_mulai }}</td>
                                        <td class="text-center">{{ $data->tanggal_selesai }}</td>
                                        <td class="text-left">Rp. {{ $data->anggaran}}</td>
                                    </tr>   
                                </tbody>
                                @endforeach
                            </table>
                            <hr>

                            <div class="pagination-container" style="display: flex; justify-content: space-between;">
                                <div class="pagination-info">
                                    Data ke <span><strong> {{ $dataposts->firstItem() }} </strong></span> Sampai <span><strong> {{ $dataposts->lastItem() }} </strong></span> dari total <strong><span> {{ $dataposts->total() }} </strong></span> data
                                </div>
                                <div class="pagination-links">
                                    {{ $dataposts->links() }}
                                </div>
                            </div>
                                                                              
                        </div>
            <!--/Inverse table-->
    <!--Main Content-->
    </div>
</div>

{{-- -------------------------------------------------------- --}}

<button class="btn btn-dark btn-block mb-4">
    <h6 class="mt-0 mb-2"><i class="fa fa-database mr-2"></i><strong> Daftar Project HaiuCare Indonesia </strong></h6>
</button>
                <!--Dashboard widget-->
                <div class="mt-1 mb-3 button-container">

                    <div class="row pl-0">

                        {{-- ------------------------------------------------------ --}}
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                            <div class="bg-white border shadow">
                                <div class="p-2 text-center">
                                    <h5 class="mb-0 mt-2 text-theme mb-2">
                                        <small><strong><i class="fas fa-hammer mr-2"></i>INFRASTRUKTUR</strong></small>
                                    </h5>
                                    <table class="table text-center">
                                        <tr>
                                            <td><button class="btn btn-outline-primary"><i class="fas fa-money-bill mr-2"></i>Terkumpul</td></button>
                                            <td><h4><span class="badge badge-primary p-2">Rp.<span> {{ $totalanggaraninfrastruktur }}</span></span></h4></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-outline-primary"><i class="fas fa-handshake mr-2"></i>Tersalurkan</td></button>
                                            <td><h4><span class="badge badge-success p-2">Rp.<span> 1.355.232.675,-</span></span></h4></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-outline-primary"><i class="fas fa-handshake mr-2"></i>Kebutuhan</td></button>
                                            <td><h4><span class="badge badge-secondary p-2">Rp.<span> 1.355.232.675,-</span></span></h4></td>
                                        </tr>
                                    </table>
                                    <hr>
                                    <div class="d-flex justify-content-end">
                                        <a href="">
                                            <button class="btn btn-outline-primary mb-2 mr-2">
                                                <i class="fas fa-eye mr-2"></i>Details
                                            </button>
                                        </a>
                                    </div>
                                    
                                </div>       
                                                         
                                <div class="align-bottom">
                                    {{-- <span id="incomeBar"></span> --}}
                                </div>
                            </div>
                        </div>   


                        {{-- ------------------------------------------------------ --}}

                        {{-- ------------------------------------------------------ --}}
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                            <div class="bg-white border shadow">
                                <div class="p-2 text-center">
                                    <h5 class="mb-0 mt-2 text-theme mb-2">
                                        <small><strong><i class="fas fa-book mr-2"></i>PENDIDIKAN</strong></small>
                                    </h5>
                                    <table class="table text-center">
                                        <tr>
                                            <td><button class="btn btn-outline-primary"><i class="fas fa-money-bill mr-2"></i>Terkumpul</td></button>
                                            <td><h4><span class="badge badge-primary p-2">Rp. <span>{{ $totalanggaranpendidikan}}</span></span></h4></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-outline-primary"><i class="fas fa-handshake mr-2"></i>Tersalurkan</td></button>
                                            <td><h4><span class="badge badge-success p-2">Rp.<span> 1.355.232.675,-</span></span></h4></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-outline-primary"><i class="fas fa-handshake mr-2"></i>Kebutuhan</td></button>
                                            <td><h4><span class="badge badge-secondary p-2">Rp.<span> 1.355.232.675,-</span></span></h4></td>
                                        </tr>
                                    </table>
                                    <hr>
                                    <div class="d-flex justify-content-end">
                                        <a href="">
                                            <button class="btn btn-outline-primary mb-2 mr-2">
                                                <i class="fas fa-eye mr-2"></i>Details
                                            </button>
                                        </a>
                                    </div>
                                    
                                </div>       
                                                         
                                <div class="align-bottom">
                                    {{-- <span id="incomeBar"></span> --}}
                                </div>
                            </div>
                        </div>   


                        {{-- ------------------------------------------------------ --}}
                        {{-- ------------------------------------------------------ --}}
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                            <div class="bg-white border shadow">
                                <div class="p-2 text-center">
                                    <h5 class="mb-0 mt-2 text-theme mb-2">
                                        <small><strong><i class="fas fa-hospital mr-2"></i>KESEHATAN</strong></small>
                                    </h5>
                                    <table class="table text-center">
                                        <tr>
                                            <td><button class="btn btn-outline-primary"><i class="fas fa-money-bill mr-2"></i>Terkumpul</td></button>
                                            <td><h4><span class="badge badge-primary p-2">Rp. <span> {{ $totalanggarankesehatan }}</span></span></h4></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-outline-primary"><i class="fas fa-handshake mr-2"></i>Tersalurkan</td></button>
                                            <td><h4><span class="badge badge-success p-2">Rp.<span> 1.355.232.675,-</span></span></h4></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-outline-primary"><i class="fas fa-handshake mr-2"></i>Kebutuhan</td></button>
                                            <td><h4><span class="badge badge-secondary p-2">Rp.<span> 1.355.232.675,-</span></span></h4></td>
                                        </tr>
                                    </table>
                                    <hr>
                                    <div class="d-flex justify-content-end">
                                        <a href="">
                                            <button class="btn btn-outline-primary mb-2 mr-2">
                                                <i class="fas fa-eye mr-2"></i>Details
                                            </button>
                                        </a>
                                    </div>
                                    
                                </div>       
                                                         
                                <div class="align-bottom">
                                    {{-- <span id="incomeBar"></span> --}}
                                </div>
                            </div>
                        </div>   


                        {{-- ------------------------------------------------------ --}}
                        {{-- ------------------------------------------------------ --}}
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                            <div class="bg-white border shadow">
                                <div class="p-2 text-center">
                                    <h5 class="mb-0 mt-2 text-theme mb-2">
                                        <small><strong><i class="fas fa-utensils mr-2"></i>MAKANAN</strong></small>
                                    </h5>
                                    <table class="table text-center">
                                        <tr>
                                            <td><button class="btn btn-outline-primary"><i class="fas fa-money-bill mr-2"></i>Terkumpul</td></button>
                                            <td><h4><span class="badge badge-primary p-2">Rp. <span> {{ $totalanggaranmakanan }}</span></span></h4></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-outline-primary"><i class="fas fa-handshake mr-2"></i>Tersalurkan</td></button>
                                            <td><h4><span class="badge badge-success p-2">Rp.<span> 1.355.232.675,-</span></span></h4></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-outline-primary"><i class="fas fa-handshake mr-2"></i>Kebutuhan</td></button>
                                            <td><h4><span class="badge badge-secondary p-2">Rp.<span> 1.355.232.675,-</span></span></h4></td>
                                        </tr>
                                    </table>
                                    <hr>
                                    <div class="d-flex justify-content-end">
                                        <a href="">
                                            <button class="btn btn-outline-primary mb-2 mr-2">
                                                <i class="fas fa-eye mr-2"></i>Details
                                            </button>
                                        </a>
                                    </div>
                                    
                                </div>       
                                                         
                                <div class="align-bottom">
                                    {{-- <span id="incomeBar"></span> --}}
                                </div>
                            </div>
                        </div>   
                        {{-- ------------------------------------------------------ --}}
                    </div>  
                </div>
                <!--/Dashboard widget-->


{{-- ================================ AKHIR HALAMAN DASHBOARD DATABASE PROJEK PEKERJAAN ===========================  --}}
<button class="btn btn-dark btn-block mb-4">
    <h6 class="mt-0 mb-2"><i class="fa fa-database mr-2"></i><strong>Chart Data HaiuCare Indonesia </strong></h6>
</button>

<div class="row mt-3">
    <div class="col-sm-6">
        <!--Line Chart-->
        <div class="mt-1 mb-3 p-3 button-container bg-white shadow-sm border">
            <h6 class="mb-2">Chart Project</h6>
            
            <div id="lineChartFlot" style="width: 100%; height:350px"></div>
        </div>
        <!--/Line Chart-->

    </div>
    
    
    <div class="col-sm-6">
        <!--Area Chart-->
        <div class="mt-1 mb-3 p-3 button-container bg-white shadow-sm border">
            <h6>Realtime Chart</h6>

            <div id="realTimeChartFlot" style="width: 100%; height:350px"></div>
        </div>
        <!--/Area Table-->
        </div>
    </div>

    @include('backend.dashboard.part.menufooter')