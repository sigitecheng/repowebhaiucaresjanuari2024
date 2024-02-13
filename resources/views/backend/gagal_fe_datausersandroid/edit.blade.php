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


    <form action="" method="post">
        @csrf
        @method("patch")
        <input type="hidden" name="id" id="id" value="{{ $data->id}}" id="id">
        <label>Nama Lengkap</label>
        <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ $data->nama_lengkap}}" class="form-control">

    </form>

    
    <!-- resources/views/backend/fe_datausersandroid/edit.blade.php -->
{{-- <form method="post" action="{{ url('datausers/' . $datausersandroid->username ) }}" class="mb-5">
    @csrf
    @method('put')

    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" 
               name="username" required value="{{ old('id', $datausersandroid->id) }}" autofocus>
    </div>

    @error('id')
        <div class="invalid-feedback mb-2">
            {{ $message }}
        </div>
    @enderror

    <button type="submit" class="btn btn-primary mb-4">Update</button>
</form> --}}

</div>

@endsection