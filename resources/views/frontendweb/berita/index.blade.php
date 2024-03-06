@extends('backend.dashboard.part.header')
@include('backend.dashboard.part.menuheader')
@include('backend.dashboard.part.sidebar')

@section('container')
    <!--Page Wrapper-->

            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0">
                <h5 class="mb-0" ><strong>{{ $title }}</strong></h5>
                <span class="text-secondary">Halaman {{ $title }}</span>
                <br>
                 {{-- ---------------------------------------------------------------------------------------------------------------------------------------- --}}
    {{-- FORM VALIDATIONS --}}
    {{-- ---------------------------------------------------------------------------------------------------------------------------------------- --}}
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-12 mt-2" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
      @else
          @if(session()->has('delete'))
              <div class="alert alert-danger alert-dismissible fade show col-lg-12 mt-2" role="alert">
                  <strong>{{ session('delete') }}</strong> {{-- Perubahan dari session('success') menjadi session('delete') --}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @else
                  @if(session()->has('update'))
                  <div class="alert alert-warning alert-dismissible fade show col-lg-12 mt-2" role="alert">
                      <strong>{{ session('update') }}</strong> {{-- Perubahan dari session('success') menjadi session('delete') --}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              @endif
          @endif
      @endif

                
                <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
                    <!--Product Listing-->
                    <div class="product-list">
                        
                        <div class="row border-bottom mb-4">
                            <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header"><i class="fa fa-newspaper mr-2"></i>Halaman {{ $title }}</h6></div>
                            <div class="col-sm-4 text-right pb-3">
                                <button class="btn btn-round button-custom rounded"><i class="fa fa-plus"></i> Add News</button>
                            </div>
                        </div>
                        
                        <div class="table-responsive product-list">
                            
                            <table class="table table-bordered table-striped mt-3" id="productList">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="6%">Image</th>
                                        <th class="text-center">Berita</th>
                                        <th class="text-center">Author</th>
                                        <th class="text-center">Lokasi</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>

                                @foreach ($berita as $data)
                                    
                                <tbody>
                                    <tr>
                                        {{-- <td class="align-middle"><img src="assets/img/prod10.png" width="80px"  alt=""></td> --}}
                                        <td class="align-middle">{{ $data->image }}</td>
                                        <td class="align-middle">
                                            <h6><strong>{{ $data->judul }}</strong></h6>
                                            {{-- <p>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p> --}}
                                        <p>{{ $data->isi }}</p>
                                        </td>
                                        <td class="align-middle">{{ $data->user->name}}</td>
                                        <td class="align-middle text-center"><span class="text-danger">{{ $data->lokasi }}</span></td>
                                        <td class="align-middle text-center">
                                            <a href="/berita/{{ $data->judul }}">
                                                <i class="fa fa-eye p-2 text-primary"></i>
                                            </a>

                                            <button type="button" class="btn btn-danger border-0 mt-2" data-toggle="modal" data-target="#deleteModal">
                                                <i class="fa fa-trash"></i>
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
                                                        <div class="modal-body text-center" >
                                                            Apakah Anda yakin ingin menghapus <strong>Berita</strong> ini ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <!-- Tombol untuk menutup modal -->
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i>
                                                                Close</button>
                                                            <!-- Tombol untuk menghapus post (ganti dengan form jika diperlukan) -->
                                                            <form action="/berita/{{ $data->judul }}" method="post" class="d-inline">
                                                                @method('delete')
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger mt-3" ><i class="fa fa-trash"></i> Hapus</button>
                                            {{-- <button class="btn btn-link text-danger p-1"><i class="fas fa-trash"></i></button> --}}
                                        </td>
                                    </tr>
                                   
                                   
                                   
                                </tbody>

                                @endforeach
                            </table>
                            <div>
                                <!-- Informasi tentang nomor halaman saat ini dan total data -->
                                <div style="float:left">
                                    Data ke <strong> {{ $berita->firstItem() }} - {{ $berita->lastItem() }} </strong> dari <strong>{{ $berita->total() }} </strong> total data
                                </div>
                                <!-- Tombol navigasi paginasi -->
                                <div style="float:right">
                                    {{ $berita->onEachSide(1)->links() }}
                                </div>
                                <div style="clear:both"></div>
                            </div>
{{--                         
                            <h1>Data</h1>
                            <ul>
                                @foreach ($data as $item)
                                    <li>{{ $item->name }}</li>
                                @endforeach
                            </ul> --}}
                            {{-- {{ $berita->links() }} --}}

                        </div>
                    </div>
                    <!--/Product Listing-->
                </div>

                <!--Footer-->
                {{-- <div class="row mt-5 mb-4 footer">
                    <div class="col-sm-8">
                        <span>&copy; All rights reserved 2019 designed by <a class="text-info" href="#">A-Fusion</a></span>
                    </div>
                    <div class="col-sm-4 text-right">
                        <a href="#" class="ml-2">Contact Us</a>
                        <a href="#" class="ml-2">Support</a>
                    </div>
                </div> --}}


                @include('backend.dashboard.part.menufooter')

                <!--Footer-->

            </div>

    @endsection