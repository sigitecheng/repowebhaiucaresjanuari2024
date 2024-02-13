@extends('backend.dashboard.part.header')
@include('backend.dashboard.part.menuheader')
@include('backend.dashboard.part.sidebar')
    

@section('container')

<!--Content right-->
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
    <h5 class="mb-3 mt-3" ><i class='fa fa-map-signs'></i> <strong>Halaman | {{ $title }}</strong></h5>
{{-- ============================== HALAMAN DATABASE PROJECT SUB BIDANG PEKERJAAN =========================== --}}
                              <!--Dashboard widget-->
               
                <!--/Dashboard widget-->
 <!--/Dashboard widget-->


{{-- ================================ AKHIR HALAMAN DASHBOARD DATABASE PROJEK PEKERJAAN ===========================  --}}
                
                <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
                    <!--Order Listing-->
                    <div class="product-list">
                        
                        <div class="row border-bottom mb-4">
                            <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header">{{ $title_halaman }} -> {{ $post->category->nama_kategori }} </h6></div>
                            <div class="col-sm-4 text-right pb-3">
                                
                                <a href="/dashboard/posts">
                                    <button type="button" class="btn btn-secondary icon-round shadow pull-right mr-2">
                                        <i class="fas fa-arrow-right"></i>
                                    </button>
                                </a>
                                
                                <button type="button" class="btn btn-danger icon-round shadow pull-right mr-2" data-toggle="modal" data-target="#deleteModal">
                                    <i class="fas fa-trash"></i>
                                </button>


                                <!-- Modal Konfirmasi Penghapusan -->
                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Delete</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                Apakah Anda yakin ingin menghapus Project ini ?
                                            </div>
                                            <div class="modal-footer">
                                                <!-- Tombol untuk menutup modal -->
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i>
                                                    Close</button>
                                                <!-- Tombol untuk menghapus post (ganti dengan form jika diperlukan) -->
                                                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger mt-3" ><i class="fa fa-trash"></i> Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a href="/dashboard/posts/{{ $post->slug }}/edit">
                                    <button class="btn btn-success icon-round shadow pull-right mr-2" data-toggle="modal" ><i class="fas fa-file"></i></button>
                                </a>
                                
                                {{-- <div class="pull-right mr-3 btn-order-bulk">
                                    <select class="shadow bg-primary bulk-actions">
                                        <option data-display="<span class='text-white'><b>Data Status</b></span>">Data Status options</option>
                                        <option value="/dashboard/posts/{{ $post->slug }}/edit">Update</option>
                                        <option value="2">Pending</option>
                                    </select>
                                </div> --}}

                                <div class="clearfix"></div>
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
                                        <td class="align-items-center justify-content-center"><i class="fa fa-home"></i></td>
                                        <td><strong>Judul Project</strong></td>
                                        <td class="text-center">:</td>
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
                                        <td>{{ $post->dampak_Lingkungan }}</td>
                                    </tr>   
                        
                                    <tr>
                                        <td class="align-items-center justify-content-center">
                                            <i class="fa fa-question"></i>
                                        </td>
                                        <td><strong>Status</strong></td>
                                        <td class="text-center">:</td>
                                        <td class="d-flex align-items-center ">
                                            @php
                                                $status = $post->status;
                                                $badgeClass = '';
                                    
                                                switch ($status) {
                                                    case 'sedang_berjalan':
                                                        $badgeClass = 'badge-warning';
                                                        break;
                                                    case 'tertunda':
                                                        $badgeClass = 'badge-danger';
                                                        break;
                                                    case 'selesai':
                                                        $badgeClass = 'badge-success';
                                                        break;
                                                    default:
                                                        // Tindakan default jika diperlukan
                                                        break;
                                                }
                                            @endphp
                                    
                                            <span class="badge {{ $badgeClass }}">{{ $status }}</span>
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