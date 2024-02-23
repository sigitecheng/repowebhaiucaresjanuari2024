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
         <a href="/backend/rumahmakan/create" class="btn btn-primary float-right">
             <span data-feather="file-plus"></span>
             <i class="fas fa-cogs"></i> New Rumah Makan
           </a>
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
  
    <table class="table table-striped table-sm mt-4">
        <thead>
            <tr>
                <th scope="col" class="text-center" style="width: 25px;">No</th>
                <th scope="col" class="text-center" style="width: 100px;">Nama Rumah Makan</th>
                <th scope="col" class="text-center" style="width: 100px;">Alamat</th>
                <th scope="col" class="text-center" style="width: 70px;">Nomor Telepon</th>
                <th scope="col" class="text-center" style="width: 60px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datarumahmakan as $data)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-left">{{ $data->nama_rumahmakan }}</td>  
                <td class="text-center">{{ $data->alamat }}</td>  
                <td class="text-center">{{ $data->nomor_telepon }}</td>  
                <td>
                    <!-- HATI HATI DI BAWAH IN IMENGGUNAKAN FITU GETROUTEKEYNAME AGAR TIDAK MENCARI ID BERDASARKAN NO MELAINKAN SESUAI YANG KITA INGINKAN  DENGAN CONTOH TABLE 'SLUG'-->
                    <a href="/backend/rumahmakan/{{ $data->nama_rumahmakan }}">
                        <button class="btn btn-primary" data-toggle="modal" ><i class="fa fa-eye"></i></button>
                    </a>
                    <a href="/backend/rumahmakan/{{ $data->nama_rumahmakan }}/edit">
                        <button class="btn btn-success" data-toggle="modal" ><i class="fa fa-pencil"></i></button>
                    </a>
                    
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
                Apakah Anda yakin ingin menghapus <strong>Mitra</strong> ini ?
            </div>
            <div class="modal-footer">
                <!-- Tombol untuk menutup modal -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i>
                    Close</button>
                <!-- Tombol untuk menghapus post (ganti dengan form jika diperlukan) -->
                <form action="/backend/rumah_makan/{{ $data->nama_rumahmakan }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
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
        {{ $datarumahmakan->links() }}
    </div>
    

    @include('backend.dashboard.part.menufooter')
</div>
</div>



@endsection