@extends('backend.dashboard.part.header')
@include('backend.dashboard.part.menuheader')
@include('backend.dashboard.part.sidebar')
    

@section('container')

<!--Content right-->
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
    <h5 class="mb-3 mt-3" ><i class='fa fa-map-signs'></i> <strong>Halaman | {{ $title }}</strong></h5>
{{-- ============================== HALAMAN DATABASE PROJECT SUB BIDANG PEKERJAAN =========================== --}}
{{-- ================================ AKHIR HALAMAN DASHBOARD DATABASE PROJEK PEKERJAAN ===========================  --}}
                
                <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
                    <!--Order Listing-->
                    <div class="product-list">
                        
                        <div class="row border-bottom mb-4">
                            <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header"><button class="btn btn-secondary mr-2"><i class="fa fa-file-excel"></i></button>{{ $title_halaman }} <i class="fas fa-arrow-right mr-2 ml-2"></i> {{ $post->category->nama_kategori }} </h6></div>
                            <div class="col-sm-4 text-right pb-3">
                                
                                <a href="/dashboard/posts">
                                    <button type="button" class="btn btn-secondary icon-round shadow pull-right mr-2">
                                        <i class="fas fa-arrow-right"></i>
                                    </button>
                                </a>
                                
                                
                            </div>
                        </div>
                        
                        <div class="table-responsive product-list">
                            
                            <table class="table table-bordered table-striped mt-0" id="productList">

                                <td>    
                                    @if ($post->image)
                                    <div style="max-height: 350px; overflow:hidden">
                                        <img src="{{ asset('storage/' . $post->image ) }}" class="card-img-top mt-3 mb-3" alt="{{ $post->category->nama_kategori }}" class="img-fluid">
                                    </div>
                                    @else
                                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->nama_kategori }}" class="card-img-top mt-3 mb-3" alt="{{ $post->category->nama_kategori }}" class="img-fluid">
                                    @endif                    
                                
                                </td>
                            </table>
                            
                            <table class="table table-bordered table-striped mt-0" id="productList">
                            
                                <tbody>                            
                                    <tr>
                                        <td class="align-items-center justify-content-center" style="width: 35px;"><i class="fa fa-home"></i></td>
                                        <td style="width: 100px;"><strong>Judul Project</strong></td>
                                        <td style="width: 15px;"class="text-center">:</td>
                                        <td>{{ $post->title }}</td>
                                    </tr>            
                                
                                    <tr>
                                        <td class="align-items-center justify-content-center"><i class="fa fa-book"></i></td>
                                        <td><strong>Kategori</strong></td>
                                        <td class="text-center">:</td>
                                        <td>{{ $post->category->nama_kategori }}</td>
                                    </tr>
                        
                                    <tr>
                                        <td class="align-items-center justify-content-center"><i class="fa fa-user"></i></td>
                                        <td><strong>User</strong></td>
                                        <td class="text-center">:</td>
                                        <td>{{ $post->user_id }}</td>
                                    </tr>   
                                    <tr>
                                        <td class="align-items-center justify-content-center"><i class="fa fa-building"></i></td>
                                        <td><strong>Kontraktor</strong></td>
                                        <td class="text-center">:</td>
                                        <td>{{ $post->kontraktor_id }}</td>
                                    </tr>           
                                    
                                    <tr>
                                        <td class="align-items-center justify-content-center"><i class="fa fa-user"></i></td>
                                        <td><strong>PIC</strong></td>
                                        <td class="text-center">:</td>
                                        <td>{{ $post->penanggung_jawab_id }}</td>
                                    </tr>   
                                
                                    <tr>
                                        <td class="align-items-center justify-content-center"><i class="fa fa-user"></i></td>
                                        <td><strong>Pengawas</strong></td>
                                        <td class="text-center">:</td>
                                        <td>{{ $post->pengawas_lapangan_id }}</td>
                                    </tr>   
                        
                                    <tr>
                                        <td class="align-items-center justify-content-center"><i class="fa fa-file"></i></td>
                                        <td><strong>Keterangan</strong></td>
                                        <td class="text-center">:</td>
                                        <td>{{ $post->excerpt }}</td>
                                    </tr>   
                                    
                                    <tr>
                                        <td class="align-items-center justify-content-center"><i class="fa fa-file"></i></td>
                                        <td><strong>Penjelasan</strong></td>
                                        <td class="text-center">:</td>
                                        <td>{{ $post->body }}</td>
                                    </tr>
                        
                                    <tr>
                                        <td class="align-items-center justify-content-center"><i class="fa fa-road"></i></td>
                                        <td><strong>Lokasi</strong></td>
                                        <td class="text-center">:</td>
                                        <td>{{ $post->lokasi }}</td>
                                    </tr>   
                        
                                    <tr>
                                        <td class="align-items-center justify-content-center"><i class="fa fa-money-bill"></i></td>
                                        <td><strong>Anggaran</strong></td>
                                        <td class="text-center">:</td>
                                        <td>{{ $post->anggaran }}</td>
                                    </tr>   
                        
                                    <tr>
                                        <td class="align-items-center justify-content-center"><i class="fa fa-clock-o"></i></td>
                                        <td><strong>Waktu</strong></td>
                                        <td class="text-center">:</td>
                                        <td>{{ $post->waktu_pelaksanaan }}</td>
                                    </tr>   
                        
                                    <tr>
                                        <td class="align-items-center justify-content-center"><i class="fa fa-file"></i></td>
                                        <td><strong>Tujuan</strong></td>
                                        <td class="text-center">:</td>
                                        <td>{{ $post->tujuan_proyek }}</td>
                                    </tr>   
                        
                                    <tr>
                                        <td class="align-items-center justify-content-center"><i class="fa fa-list"></i></td>
                                        <td><strong>Mitigasi</strong></td>
                                        <td class="text-center">:</td>
                                        <td>{{ $post->risiko_mitigasi }}</td>
                                    </tr>   
                        
                                    <tr>
                                        <td class="align-items-center justify-content-center"><i class="fa fa-tree"></i></td>
                                        <td><strong>Dampak</strong></td>
                                        <td class="text-center">:</td>
                                        <td>{{ $post->dampak_lingkungan }}</td>
                                    </tr>   

                                    <tr>
                                        <td class="align-items-center justify-content-center"><i class="fa fa-user-secret"></i></td>
                                        <td><strong>Status</strong></td>
                                        <td class="text-center">:</td>
                                        <td>
                                            @if (is_object($post) && isset($post->datapekerjaanstatus))
                                                @if ($post->datapekerjaanstatus->nama_status == 'Selesai')
                                                    <i class="fas fa-check-circle text-success"></i> Selesai
                                                @elseif ($post->datapekerjaanstatus->nama_status == 'Pending')
                                                    <i class="fas fa-exclamation-circle text-danger"></i> Pending
                                                @elseif ($post->datapekerjaanstatus->nama_status == 'Tertunda')
                                                    <i class="fas fa-clock text-warning"></i> Tertunda
                                                @elseif ($post->datapekerjaanstatus->nama_status == 'Sedang Berjalan')
                                                    <i class="fas fa-spinner text-primary"></i> Sedang Berjalan
                                                @else
                                                    {{ $post->datapekerjaanstatus->nama_status }}
                                                @endif
                                            @endif
                                        </td>
                                    </tr>
                    
                            </table>
                            <a href="/dashboard/posts">
                                <div class="text-right">
                                    <button class="btn btn-outline-theme"><i class="fa fa-eye"></i> View Full Project</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--/Order Listing-->

                  
                </div>


            </div>
        </div>

        <!--Main Content-->

    </div>

    @endsection