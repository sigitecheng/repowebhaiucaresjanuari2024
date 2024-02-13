@extends('backend.dashboard.part.header')
@include('backend.dashboard.part.menuheader')
@include('backend.dashboard.part.sidebar')


@section('container')



<div class="col-lg-8 mt-3">
    <h5 class="mb-3 mt-1" ><i class='fa fa-map-signs'></i> <strong>Halaman | {{ $title }}</strong></h5>

    @if(session()->has('success'))
    <div class="alert alert-secondary alert-dismissible fade show col-lg-12" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    
    <form method="post" action="/backendberanda/{{ $feadminberanda->beranda1 }}" class="mb-5" enctype="multipart/form-data"> 
{{-- enctype="multipart/form-data" --}}
        <!-- HATI HATI DENGAN PENAMBAHAN ENCTYPE PADA FITUR DI ATAS, JANGAN LUPA UNTUK SELALU MENAMBAHKAN FITUR ENCTYPE AGAR FORM DAPAT MENERIMA FILE  -->
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="beranda1" class="form-label">Beranda 1</label>
            <input type="text" class="form-control @error('beranda1') is-invalid @enderror" id="beranda1" 
            name="beranda1" required value="{{ old('beranda1', $feadminberanda->beranda1 ) }}" autofocus>
            {{-- <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --> --}}
            @error('beranda1')
            <div class="invalid-feedback mb-2">
                {{ $message }}
            </div>
            @enderror
        </div>
       

        <button type="submit" class="btn btn-primary mb-4">Update</button>
    </form>
</div>

@endsection