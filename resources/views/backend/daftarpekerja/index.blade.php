@extends('backend.dashboard.part.header')
@include('backend.dashboard.part.menuheader')
@include('backend.dashboard.part.sidebar')

@section('container')


{{-- ========================================================================== --}}

<div class="col-sm-9 col-xs-12 content pt-3 pl-0 mb-0">
    
    <h5 class="mb-0 mt-2" >
        <i class='fa fa-map-signs'></i> 
        <strong>Halaman | {{ $title_dashboard }}
        </strong>    
         {{-- <a href="/backend/kontraktor/create" class="btn btn-primary float-right">
             <span data-feather="file-plus"></span>
             <i class="fas fa-edit"></i> New Users
           </a> --}}
    </h5>
    <div class="table-responsive col-lg-12 ">
    
    {{-- ---------------------------------------------------------------------------------------------------------------------------------------- --}}
    {{-- FORM VALIDATIONS --}}
    {{-- ---------------------------------------------------------------------------------------------------------------------------------------- --}}
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

{{-- ========================= PAKET LINK KATEGORI ======================================= --}}
  
  
<div class="card rounded mt-4 p-0">
    <div class="card-body d-flex justify-content-between align-items-center">
        <p class="card-text m-0">
            <i class="fas fa-file mr-2"></i>Halaman 
            <span class="badge badge-secondary"><strong>{{ $datausers->currentPage() }}</strong></span>  
            dari 
            <span class="badge badge-warning"><strong class="text-white">{{ $title_dashboard }}</strong></span>

        </p>
    </div>
</div>


    <table class="table table-striped table-sm mt-4">
        <thead>
            <tr>
                <th scope="col" class="text-center" style="width: 25px;">No</th>
                <th scope="col" class="text-center" style="width: 150px;">Nama</th>
                <th scope="col" class="text-center" style="width: 150px;">Username</th>
                <th scope="col" class="text-center" style="width: 150px;">Email</th>
                {{-- <th scope="col" class="text-center" style="width: 75px;">Password</th> --}}
                <th scope="col" class="text-center" style="width: 10px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datausers as $data)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-left">{{ $data->name }}</td>  
                <td class="text-center">{{ $data->username }}</td>  
                <td class="text-center">{{ $data->email }}</td>  
                {{-- <td class="text-center">{{ $data->password}}</td>   --}}
                <td class="text-center">
                    <!-- HATI HATI DI BAWAH IN IMENGGUNAKAN FITU GETROUTEKEYNAME AGAR TIDAK MENCARI ID BERDASARKAN NO MELAINKAN SESUAI YANG KITA INGINKAN  DENGAN CONTOH TABLE 'SLUG'-->
                    {{-- <a href="/backend/kontraktor/{{ $data->nama_perusahaan }}">
                        <button class="btn btn-primary" data-toggle="modal" ><i class="fa fa-eye"></i></button>
                    </a> --}}
                    {{-- <a href="/backend/kontraktor/{{ $data->nama_perusahaan }}/edit">
                        <button class="btn btn-success" data-toggle="modal" ><i class="fa fa-pencil"></i></button>
                    </a> --}}
                    
                    <button type="button" class="btn btn-danger border-0" data-toggle="modal" data-target="#deleteModal">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
                    
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
                Apakah Anda yakin ingin menghapus <strong>Users</strong> ini ?
            </div>
            <div class="modal-footer">
                <!-- Tombol untuk menutup modal -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i>
                    Close</button>
                <!-- Tombol untuk menghapus post (ganti dengan form jika diperlukan) -->
                <form action="/users/{{ $data->username}}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</button>
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
        {{ $datausers->links() }}
    </div>
    

    @include('backend.dashboard.part.menufooter')
</div>
</div>



@endsection