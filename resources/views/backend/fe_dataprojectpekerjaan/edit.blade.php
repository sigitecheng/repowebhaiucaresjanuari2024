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

                        
                        <div class="row border-bottom mb-4">
                            <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header"><button class="btn btn-secondary mr-2"><i class="fa fa-file-excel"></i></button>{{ $title_halaman }} <i class="fas fa-arrow-right mr-2 ml-2"></i> {{ $post->category->nama_kategori }} </h6></div>
                            
                            <div class="col-sm-4 text-right pb-3">
                                

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
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger mt-3" ><i class="fa fa-trash"></i> Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <a href="/dashboard/posts">
                                    <button type="button" class="btn btn-secondary icon-round shadow pull-right mr-2">
                                        <i class="fas fa-arrow-right"></i>
                                    </button>
                                </a>

                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <form class="form-horizontal mt-4 mb-5" method="post" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">

                            @method('put')
                            @csrf

{{-- ------------------------------------------------------------------------------------------ --}}
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="title"><i class="fa fa-home mr-2"></i>Judul Project</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required value="{{ old('title', $post->title )}} " autofocus>
                                </div>
                                @error('title')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


{{-- ------------------------------------------------------------------------------------------ --}}
                            <div class="form-group row">
                                <label for="exampleFormControlSelect1" class="control-label col-sm-2"><i class="fa fa-book mr-2"></i>Kategori<i class="fas fa-key ml-2"></i></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="category_id" id="category_id">
                                        @foreach($categories as $category)
                                        @if(old('category_id', $post->category_id) == $category->id) <!--  category_id bernilai string dan categgori panah satu bernilai integer == ( 2 sama dengan artinya string ) dan === ( 3 sama dengan artinya adalah integer)  -->
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
                                <label class="control-label col-sm-2" for="user_id"><i class="fa fa-user mr-2"></i>User<i class="fas fa-key ml-2"></i></label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id" required value="{{ old('user_id', $post->user_id )}} " autofocus>
                                </div>
                                @error('user_id')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="kontraktor_id"><i class="fas fa-building mr-2"></i>Kontraktor<i class="fas fa-key ml-2"></i></label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('kontraktor_id') is-invalid @enderror" id="kontraktor_id" name="kontraktor_id" required value="{{ old('kontraktor_id', $post->kontraktor_id )}} " autofocus>
                                </div>
                                @error('kontraktor_id')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="penanggung_jawab_id"><i class="fas fa-user mr-2"></i>PIC<i class="fas fa-key ml-2"></i></label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('penanggung_jawab_id') is-invalid @enderror" id="penanggung_jawab_id" name="penanggung_jawab_id" required value="{{ old('penanggung_jawab_id', $post->penanggung_jawab_id )}} " autofocus>
                                </div>
                                @error('penanggung_jawab_id')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="pengawas_lapangan_id"><i class="fas fa-user mr-2"></i>Pengawas<i class="fas fa-key ml-2"></i> </label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('pengawas_lapangan_id') is-invalid @enderror" id="pengawas_lapangan_id" name="pengawas_lapangan_id" required value="{{ old('pengawas_lapangan_id', $post->pengawas_lapangan_id )}} " autofocus>
                                </div>
                                @error('pengawas_lapangan_id')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="slug"><i class="fas fa-file mr-2"></i>Slug Project</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $post->slug )}} " autofocus>
                                </div>
                                @error('slug')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

{{-- ------------------------------------------------------------------------------------------ --}}                            
                         
                            <div class="form-group row">
                                <label for="image" class="control-label col-sm-2" ><i class="fas fa-file mr-2"></i>Image Project </label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="oldImage" value="{{ $post->image }}">
                                                @if($post->image)
                                                <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                @else
                                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                                @endif
                                    {{-- <input type="file" class="form-control" id="exampleFormControlFile1"> --}}
                                </div>
                                <div class="col-sm-3">
                                    
                                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                                        <!-- JANGAN LUPA JIKA INGIN MENAMBAHKAN FILE UPLOAD IMAGE SERTAKAN JUGA DI FORM UNTUK TIPE ENCTYPENYA  -->
                                        @error('image')
                                        <div class="invalid-feedback mb-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                            </div>

                            
{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="excerpt"><i class="fas fa-file mr-2"></i>Keterangan</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('excerpt') is-invalid @enderror" id="excerpt" name="excerpt" required value="{{ old('excerpt', $post->excerpt )}} " autofocus>
                                </div>
                                @error('excerpt')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="body"><i class="fas fa-file mr-2"></i>Penjelasan</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('body') is-invalid @enderror" id="body" name="body" required value="{{ old('body', $post->body )}} " autofocus>
                                </div>
                                @error('body')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="lokasi"><i class="fas fa-road mr-2"></i>Lokasi</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" required value="{{ old('lokasi', $post->lokasi )}} " autofocus>
                                </div>
                                @error('lokasi')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="anggaran"><i class="fas fa-money-bill mr-2"></i>Anggaran</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('anggaran') is-invalid @enderror" id="anggaran" name="anggaran" required value="{{ old('anggaran', isset($post) ? number_format($post->anggaran, 0, ',', '.') : '') }}" autofocus>
                                </div>
                                @error('anggaran')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            
{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="waktu_pelaksanaan"><i class="fa fa-clock-o mr-2"></i>Waktu</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('waktu_pelaksanaan') is-invalid @enderror" id="waktu_pelaksanaan" name="waktu_pelaksanaan" required value="{{ old('waktu_pelaksanaan', $post->waktu_pelaksanaan )}} " autofocus>
                                </div>
                                @error('waktu_pelaksanaan')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="tujuan_proyek"><i class="fas fa-file mr-2"></i>Tujuan</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('tujuan_proyek') is-invalid @enderror" id="tujuan_proyek" name="tujuan_proyek" required value="{{ old('tujuan_proyek', $post->tujuan_proyek )}} " autofocus>
                                </div>
                                @error('tujuan_proyek')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="risiko_mitigasi"><i class="fas fa-list mr-2"></i>Resiko</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('risiko_mitigasi') is-invalid @enderror" id="risiko_mitigasi" name="risiko_mitigasi" required value="{{ old('risiko_mitigasi', $post->risiko_mitigasi )}} " autofocus>
                                </div>
                                @error('risiko_mitigasi')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="dampak_lingkungan"><i class="fas fa-tree mr-2"></i>Dampak</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('dampak_lingkungan') is-invalid @enderror" id="risiko_mitigasi" name="dampak_lingkungan" required value="{{ old('dampak_lingkungan', $post->dampak_lingkungan )}} " autofocus>
                                </div>
                                @error('dampak_lingkungan')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
{{-- ------------------------------------------------------------------------------------------ --}}       

                                <div class="form-group row">
                                    <label for="exampleFormControlSelect1" class="control-label col-sm-2"><i class="fa fa-user-secret mr-2"></i>Status<i class="fas fa-key ml-2"></i></label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="datapekerjaanstatus_id" id="datapekerjaanstatus_id">
                                            @foreach($datapekerjaanstatus as $data_status)
                                            @if(old('datapekerjaanstatus_id', $post->category_id) == $data_status->id) <!--  category_id bernilai string dan categgori panah satu bernilai integer == ( 2 sama dengan artinya string ) dan === ( 3 sama dengan artinya adalah integer)  -->
                                            <option value="{{ $data_status->id }}" selected>{{ $data_status->nama_status }}</option>
                                            @else
                                            <option value="{{ $data_status->id }}">{{ $data_status->nama_status }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                            </div>
      
{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="tanggal_mulai"><i class="fa fa-clock-o mr-2"></i>Tanggal Mulai Pekerjaan</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('tanggal_mulai') is-invalid @enderror" id="tanggal_mulai" name="tanggal_mulai" required value="{{ old('tanggal_mulai', $post->tanggal_mulai )}} " autofocus>
                                </div>
                                @error('tanggal_mulai')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
{{-- ------------------------------------------------------------------------------------------ --}}                            
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="tanggal_selesai"><i class="fa fa-clock-o mr-2"></i>Tanggal Mulai Pekerjaan</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="text" class="form-control @error('tanggal_selesai') is-invalid @enderror" id="tanggal_selesai" name="tanggal_selesai" required value="{{ old('tanggal_selesai', $post->tanggal_selesai )}} " autofocus>
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




{{-- @extends('dashboard.layouts.main') --}}
{{-- 
@section('container')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3>Edit Form Post </h3>
</div>



<div class="col-lg-8">
    <form method="post" action="/dashboard/posts/{{ $post->slug }}" class="mb-5" enctype="multipart/form-data">
        <!-- HATI HATI DENGAN PENAMBAHAN ENCTYPE PADA FITUR DI ATAS, JANGAN LUPA UNTUK SELALU MENAMBAHKAN FITUR ENCTYPE AGAR FORM DAPAT MENERIMA FILE  -->
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required value="{{ old('title', $post->title )}} " autofocus>
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            @error('title')
            <div class="invalid-feedback mb-2">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') , $post->slug }}" required>
            @error('slug')
            <div class="invalid-feedback mb-2">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="category" class="form-label">Category</label>

            <select class="form-select" name="category_id">

                @foreach($categories as $category)
                @if(old('category_id', $post->category_id) == $category->id) <!--  category_id bernilai string dan categgori panah satu bernilai integer == ( 2 sama dengan artinya string ) dan === ( 3 sama dengan artinya adalah integer)  -->
                <option value="{{ $category->id }}" selected>{{ $category->nama_kategori }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                @endif

                @endforeach

            </select>
            <!-- FITUR PEMBERITAHUAN ERROR PADA KATEGORI SELECT   -->

            <!-- @error('category')
            <div class="invalid-feedback mb-2">
                {{ $message }}
            </div>
            @enderror -->

        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            <!-- PENGKONDISIAN OLD IMAGE UNTUK MEMBAWA KE USERS SETELAH ITU BARU DIGANTI DAN YANG LAMA BISA DI HAPUSKAN  -->
            <input type="hidden" name="oldImage" value="{{ $post->image }}">

            @if($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
            <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif
            <!--  DIBAWAH IN ADA PENAMBAHAN FITUR PREVIEW GAMBAR SEBELUM UPLOAD GAMBAR PADA WEBSITE KITA  DENGAN KATA KUNCI ONCHANGE // RAHKAN LANGSUNG KE JAVASCRIPT DI PALING BAWAH -->

            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            <!-- JANGAN LUPA JIKA INGIN MENAMBAHKAN FILE UPLOAD IMAGE SERTAKAN JUGA DI FORM UNTUK TIPE ENCTYPENYA  -->
            @error('image')
            <div class="invalid-feedback mb-2">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            @error('body')
            <div class="invalid-feedback mb-2">
                {{ $message }}
            </div>
            @enderror
            <input id="body" type="hidden" name="body" class="@error('body') is-invalid @enderror" required value="{{ old('body', $post->body) }}">
            <trix-editor input="body"></trix-editor>

        </div>



        <button type="submit" class="btn btn-primary mb-4">Update Post</button>
    </form>
</div>


<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');


    // PEMANGGILAN FETCH DIBAWAH HARUS MEMILIKI METHOD YANG DI LAKUKAN OLEH CONTROLLER DI FOLDER CONTROLLER MAKA BUATLAH TERLEBIH DAHULU METHODNYA 
    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>


@endsection --}}