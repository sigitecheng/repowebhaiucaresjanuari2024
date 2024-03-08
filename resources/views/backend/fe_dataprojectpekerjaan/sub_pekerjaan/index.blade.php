@extends('backend.dashboard.part.header')
@include('backend.dashboard.part.menuheader')
@include('backend.dashboard.part.sidebar')

@section('container')


{{-- <h1>halo ini adalah ak </h1> --}}
<div class="col-sm-9 col-xs-12 content pt-3 pl-0 mb-0">
    
    <h5 class="mb-0 mt-2" >
        <i class='fa fa-map-signs'></i> 
        <strong>Halaman | {{ $title_dashboard }}
        </strong>    
         <a href="/dashboard/posts/create" class="btn btn-primary float-right">
             <span data-feather="file-plus"></span>
             <i class="fa fa-edit"></i> New Project
           </a>
    </h5>
    <div class="table-responsive col-lg-12 ">


{{-- ========================= PAKET LINK KATEGORI ======================================= --}}

<a href="/dashboard/posts" class=" btn btn-sn btn-success mb-4 rounded">
    <span data-feather="file-plus"></span>
    <i class="fas fa-database mr-2"></i> All Data 
</a>

@php
    $categoryIcons = [
        'All Data' => 'fa fa-database mr-2',
        'Infrastruktur' => 'fas fa-hammer mr-2',
        'Pendidikan' => 'fa fa-book mr-2',
        'Kesehatan' => 'fa fa-hospital mr-2',
        'Makanan' => 'fas fa-utensils mr-2',
    ];
@endphp

    @foreach ($categories as $cat)
            <a href="/blog?category={{ $cat->slug }}" class=" btn btn-sn btn-primary mb-4 rounded">
                <span data-feather="file-plus"></span>
                <i class="{{ $categoryIcons[$cat->nama_kategori] }}"></i> {{ $cat->nama_kategori }}
            </a>
    @endforeach

  
  @if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show col-lg-12" role="alert">
      <strong>{{ session('success') }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    @else
        @if(session()->has('delete'))
            <div class="alert alert-danger alert-dismissible fade show col-lg-12" role="alert">
                <strong>{{ session('delete') }}</strong> {{-- Perubahan dari session('success') menjadi session('delete') --}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @else
                @if(session()->has('update'))
                <div class="alert alert-warning alert-dismissible fade show col-lg-12" role="alert">
                    <strong>{{ session('update') }}</strong> {{-- Perubahan dari session('success') menjadi session('delete') --}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        @endif
    @endif


    
{{-- ========================================================================== --}}
        
      
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col" class="text-center" style="width: 50px;">No</th>
                <th scope="col" class="text-center" style="width: 250px;">Judul Project</th>
                <th scope="col" class="text-center" style="width: 100px;">Kategori</th>
                <th scope="col" class="text-center" style="width: 100px;">Status</th>
                <th scope="col" class="text-center" style="width: 100px;">Username</th>
                <th scope="col" class="text-center" style="width: 100px;">Aksi</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($post as $pos)
            {{-- @foreach ($posts as $post) --}}
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $pos->title}}</td>
                <td class="text-center">{{ $pos->category->nama_kategori}}</td>
                <td>
                    @if (is_object($pos) && isset($pos->datapekerjaanstatus))
                        @if ($pos->datapekerjaanstatus->nama_status == 'Selesai')
                            <i class="fas fa-check-circle text-success"></i> Selesai
                        @elseif ($pos->datapekerjaanstatus->nama_status == 'Pending')
                            <i class="fas fa-exclamation-circle text-danger"></i> Pending
                        @elseif ($pos->datapekerjaanstatus->nama_status == 'Tertunda')
                            <i class="fas fa-clock text-warning"></i> Tertunda
                        @elseif ($pos->datapekerjaanstatus->nama_status == 'Sedang Berjalan')
                            <i class="fas fa-spinner text-primary"></i> Sedang Berjalan
                        @else
                            {{ $pos->datapekerjaanstatus->nama_status }}
                        @endif
                    @endif
                </td>
                <td class="text-center">{{ $pos->user->username }}</td>
                <td class="text-center">
                    <!-- HATI HATI DI BAWAH IN IMENGGUNAKAN FITU GETROUTEKEYNAME AGAR TIDAK MENCARI ID BERDASARKAN NO MELAINKAN SESUAI YANG KITA INGINKAN  DENGAN CONTOH TABLE 'SLUG'-->
                    <a href="/dashboard/posts/{{ $pos->slug }}">
                        <button class="btn btn-primary" data-toggle="modal" ><i class="fa fa-eye"></i></button>
                    </a>
                    <a href="/dashboard/posts/{{ $pos->slug }}/edit">
                        <button class="btn btn-success" data-toggle="modal" ><i class="fa fa-pencil"></i></button>
                    </a>
   
                    <button type="button" class="btn btn-danger border-0" data-toggle="modal" data-target="#deleteModal">
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
                                    Apakah Anda yakin ingin menghapus Project ini ?
                                </div>
                                <div class="modal-footer">
                                    <!-- Tombol untuk menutup modal -->
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i>
                                        Close</button>
                                    <!-- Tombol untuk menghapus post (ganti dengan form jika diperlukan) -->
                                    <form action="/dashboard/posts/{{ $pos->slug }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger mt-3" ><i class="fa fa-trash"></i> Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </td>

            </tr>
            @endforeach


        </tbody>
    </table>

    <div class="pagination-container" style="display: flex; justify-content: center; align-items: center; margin-top: 50px;">
        {{ $post->links() }}
    </div>

    
    @include('backend.dashboard.part.menufooter')


</div>
</div>

@endsection