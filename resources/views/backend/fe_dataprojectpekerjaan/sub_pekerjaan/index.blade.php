@extends('backend.dashboard.part.header')
@include('backend.dashboard.part.menuheader')
@include('backend.dashboard.part.sidebar')

@section('container')



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
@foreach ($categories as $cat)
<a href="/blog?category={{ $cat->slug }}" class="btn btn-sn btn-primary mb-3 rounded">
    <span data-feather="file-plus"></span>
    <i class="fa fa-file"></i> {{ $cat->nama_kategori }}
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
{{-- @foreach ($post->skip(1) as $pos)

<div class="col-md-4 py-3">
    <div class="card">
        <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/blog?category={{ $pos->category->slug }}" class="text-decoration-none text-white">{{ $pos->category->nama_kategori }}</a></div>
        @if ($pos->image)
        <div style="max-height: 350px; overflow:hidden">
            <img src="{{ asset('storage/' . $pos->image )}}" alt="{{ $pos->category->nama_kategori }}">
        </div>
        @else
        <img src="https://source.unsplash.com/500x400?{{ $pos->category->nama_kategori }}" class="card-img-top" alt="{{ $pos->category->nama_kategori }}">
        @endif

        <div class="card-body">
            <h5 class="card-title">{{ $pos->title }}</h5>
            <p>
                <small> By. <a href="/blog?user={{ $pos->user->username }}" class="text-decoration-none">{{ $pos->user->name }}</a>
                    {{ $pos->created_at->diffForHumans() }}</small>
            </p>
            <p class="card-text">{{ $pos->excerpt }}</p>
            <a href="/posts/{{ $pos->slug }} " class="btn btn-primary">Read More</a>
        </div>
    </div>
</div>

@endforeach --}}


{{-- ========================= PAKET LINK KATEGORI ======================================= --}}        
        
      
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col" class="text-center">No</th>
                <th scope="col" class="text-center">Judul Project</th>
                <th scope="col" class="text-center">Author</th>
                <th scope="col" class="text-center" >Kategori</th>
                <th scope="col" class="text-center" style="width: 15%">Aksi</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($post as $pos)
            {{-- @foreach ($posts as $post) --}}
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $pos->title}}</td>
                <td>{{ $pos->user->username }}</td>
                <td class="text-center">{{ $pos->category->nama_kategori}}</td>
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


</div>
</div>

@endsection