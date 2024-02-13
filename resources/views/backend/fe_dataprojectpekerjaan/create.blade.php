@extends('backend.dashboard.part.header')
@include('backend.dashboard.part.menuheader')
@include('backend.dashboard.part.sidebar')
    

@section('container')

        <!--Content right-->
        <div class="col-sm-9 col-xs-12 content pt-3 pl-0">
            <h5 class="mb-3 mt-3" ><i class='fa fa-map-signs'></i> <strong>Halaman | {{ $title }}</strong></h5>

            <div class="row mt-3">
                <div class="col-sm-12">
                    <!--Default elements-->
                    <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">

                    
                        <form method="post" action="/dashboard/posts" enctype="multipart/form-data">
                            @csrf

{{-- ------------------------------------------------------------------------------------------ --}}
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="title">Judul Project</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required value="{{ old('title')}} " autofocus>
                                </div>
                                @error('title')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

{{-- ------------------------------------------------------------------------------------------ --}}
                            <div class="form-group row">
                                <label for="exampleFormControlSelect1" class="control-label col-sm-2">Kategori Project</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="category_id" id="category_id">
                                        @foreach($categories as $category)
                                        @if(old('category_id')) 
                                        <option value="{{ $category->id }}" selected>{{ $category->nama_kategori }}</option>
                                        @else
                                        <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                                        @endif
                                         @endforeach
                                    </select>
                                </div>
                            </div>

{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="user_id">User</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id" required value="{{ old('user_id')}} " autofocus>
                                </div>
                                @error('user_id')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="kontraktor_id">Kontraktor</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('kontraktor_id') is-invalid @enderror" id="kontraktor_id" name="kontraktor_id" required value="{{ old('kontraktor_id')}} " autofocus>
                                </div>
                                @error('kontraktor_id')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="penanggung_jawab_id">PIC</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('penanggung_jawab_id') is-invalid @enderror" id="penanggung_jawab_id" name="penanggung_jawab_id" required value="{{ old('penanggung_jawab_id')}} " autofocus>
                                </div>
                                @error('penanggung_jawab_id')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="pengawas_lapangan_id">Pengawas Lapangan</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('pengawas_lapangan_id') is-invalid @enderror" id="pengawas_lapangan_id" name="pengawas_lapangan_id" required value="{{ old('pengawas_lapangan_id')}} " autofocus>
                                </div>
                                @error('pengawas_lapangan_id')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="slug">Slug Project</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug')}} " autofocus>
                                </div>
                                @error('slug')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

{{-- ------------------------------------------------------------------------------------------ --}}                            
                         
                            <div class="form-group row">
                                <label for="image" class="control-label col-sm-2" >Image Project </label>
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                <div class="col-sm-10">
                                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">                          
                               </div>
                               @error('image')
                               <div class="invalid-feedback mb-2">
                                   {{ $message }}
                               </div>
                               @enderror
                            </div>
{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="excerpt">Keterangan</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('excerpt') is-invalid @enderror" id="excerpt" name="excerpt" required value="{{ old('excerpt')}} " autofocus>
                                </div>
                                @error('excerpt')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="body">Penjelasan</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('body') is-invalid @enderror" id="body" name="body" required value="{{ old('body')}} " autofocus>
                                </div>
                                @error('body')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="lokasi">Lokasi</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" required value="{{ old('lokasi' )}} " autofocus>
                                </div>
                                @error('lokasi')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
{{-- ------------------------------------------------------------------------------------------ --}}                            
                <div class="form-group row">
                    <label class="control-label col-sm-2" for="anggaran">Anggaran</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control @error('anggaran') is-invalid @enderror" id="anggaran" name="anggaran" required value="{{ old('anggaran') }}" autofocus>
                        @error('anggaran')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                


                            
{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="waktu_pelaksanaan">Waktu</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="date" class="form-control @error('waktu_pelaksanaan') is-invalid @enderror" id="waktu_pelaksanaan" name="waktu_pelaksanaan" required value="{{ old('waktu_pelaksanaan')}} " autofocus>
                                </div>
                                @error('waktu_pelaksanaan')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="tujuan_proyek">Tujuan</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('tujuan_proyek') is-invalid @enderror" id="tujuan_proyek" name="tujuan_proyek" required value="{{ old('tujuan_proyek')}} " autofocus>
                                </div>
                                @error('tujuan_proyek')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="risiko_mitigasi">Resiko</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('risiko_mitigasi') is-invalid @enderror" id="risiko_mitigasi" name="risiko_mitigasi" required value="{{ old('risiko_mitigasi' )}} " autofocus>
                                </div>
                                @error('risiko_mitigasi')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="dampak_lingkungan">Dampak</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('dampak_lingkungan') is-invalid @enderror" id="risiko_mitigasi" name="dampak_lingkungan" required value="{{ old('dampak_lingkungan' )}} " autofocus>
                                </div>
                                @error('dampak_lingkungan')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
{{-- ------------------------------------------------------------------------------------------ --}}                            
                            
                            <div class="form-group row">
                                <label for="exampleFormControlSelect1" class="control-label col-sm-2">Status Pekerjaan</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="status_id" id="status_id">
                                        @foreach($status as $data_status)
                                        @if(old('status_id')) 
                                        <option value="{{ $data_status->id }}" selected>{{ $data_status->status }}</option>
                                        @else
                                        <option value="{{ $data_status->id }}">{{ $data_status->status }}</option>
                                        @endif
                                         @endforeach
                                    </select>
                                </div>
                            </div>

                            
{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="tanggal_mulai">Tanggal Mulai Pekerjaan</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="date" class="form-control @error('tanggal_mulai') is-invalid @enderror" id="tanggal_mulai" name="tanggal_mulai" required value="{{ old('tanggal_mulai')}} " autofocus>
                                </div>
                                @error('tanggal_mulai')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="tanggal_selesai">Tanggal Selesai Pekerjaan</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="date" class="form-control @error('tanggal_selesai') is-invalid @enderror" id="tanggal_selesai" name="tanggal_selesai" required value="{{ old('tanggal_selesai')}} " autofocus>
                                </div>
                                @error('tanggal_selesai')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary mb-4"><i class="fa fa-file"></i> Update Project </button>
                    </div>

                    @include('backend.dashboard.part.menufooter')


                </div>
            </div>


        </div>
    </div>

    <!--Main Content-->

</div>

@endsection
