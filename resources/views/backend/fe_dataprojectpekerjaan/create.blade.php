@extends('backend.dashboard.part.header')
@include('backend.dashboard.part.menuheader')
@include('backend.dashboard.part.sidebar')
    

@section('container')

        <!--Content right-->
        <div class="col-sm-9 col-xs-12 content pt-3 pl-0">
            <h5 class="mb-3 mt-3" ><i class='fa fa-map-signs'>
                </i> <strong>Halaman | {{ $title }}</strong>
                </h5>
                
                <div class="row mt-4">
                    <div class="col-sm-12">
                        
                        <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
                    
                    <div class="row border-bottom mb-4">
                        <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header"><button class="btn btn-secondary mr-2"><i class="fa fa-file-excel"></i></button>
                            {{ $title_halaman }} </h6></div>
                        <div class="col-sm-4 text-right pb-3">
                            
                            <a href="/dashboard/posts">
                                <button type="button" class="btn btn-secondary icon-round shadow pull-right mr-2">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </a>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!--Default elements-->

                        <form method="post" action="/dashboard/posts" enctype="multipart/form-data">
                            @csrf

                            
{{-- ------------------------------------------------------------------------------------------ --}}                            
                         
<div class="form-group row">
    <label for="image" class="control-label col-sm-2"><i class="fas fa-file mr-2 "></i>Image </label>
    <div class="col-sm-4">
        <input class="form-control-file @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
        @error('image')
        <div class="invalid-feedback mb-2">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="control-label col-sm-2"></label>
    <div class="col-sm-10">
        <img class="img-preview img-fluid mb-3 col-sm-5" id="image-preview" alt="Image Preview">
    </div>
</div>

{{-- ------------------------------------------------------------------------------------------ --}}                            


{{-- ------------------------------------------------------------------------------------------ --}}
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="title"><i class="fas fa-home mr-2"></i>Judul Project</label>
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

{{-- ------------------------------------------------------------------------------------------ --}}                            
                <div class="form-group row">
                    <label class="control-label col-sm-2" for="slug"><i class="fa fa-file mr-2"></i>Tema Project <br>(Terisi Otomatis)</label>
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

                
                <script>
                    // Mendapatkan referensi elemen input judul
                    var titleInput = document.getElementById('title');

                    // Mendapatkan referensi elemen input slug
                    var slugInput = document.getElementById('slug');

                    // Menambahkan event listener untuk memantau perubahan di input judul
                    titleInput.addEventListener('input', function() {
                        // Mengonversi judul ke dalam slug
                        var slug = this.value.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-+|-+$/g, '');

                        // Menetapkan nilai slug ke dalam input slug
                        slugInput.value = slug;
                    });
                </script>

{{-- ------------------------------------------------------------------------------------------ --}}
                            <div class="form-group row">
                                <div class="col-sm-2">
                                    <i class="fas fa-globe mr-0"></i>
                                    <label for="exampleFormControlSelect1" class="control-label col-sm-2" style="margin-left: 0px;">Kategori </label>                                    
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

                                {{-- -------------- --}}

                                <div class="col-sm-3">
                                    <i class="fas fa-hammer mr-0"></i>
                                    <label for="exampleFormControlSelect1" class="control-label col-sm-2" style="margin-left: 0px;">Kontraktor</label>
                                    <select class="form-control" name="be_datakontraktor_id" id="be_datakontraktor_id">
                                        <option style="color:red;" value="">Bukan Kategori</option> <!-- Opsi "Bukan Kategori" -->
                                        @foreach($datakontraktor as $data)
                                            @if(old('be_datakontraktor_id') && old('be_datakontraktor_id') == $data->id)
                                                <option value="{{ $data->id }}" selected>{{ $data->nama_perusahaan }}</option>
                                            @else
                                                <option value="{{ $data->id }}">{{ $data->nama_perusahaan }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                  {{-- -------------- --}}

                                  <div class="col-sm-3">
                                    <i class="fas fa-utensil-spoon"></i>
                                    <label for="exampleFormControlSelect1" class="control-label col-sm-2" style="margin-left: 0px;">R.Makan</label>
                                    <select class="form-control" name="be_datarumahmakan_id" id="be_datarumahmakan_id">
                                        <option style="color:red;" value="">Bukan Kategori</option> <!-- Opsi "Bukan Kategori" -->
                                        @foreach($datarumahmakan as $data)
                                            @if(old('be_datarumahmakan_id') && old('be_datarumahmakan_id') == $data->id)
                                                <option value="{{ $data->id }}" selected>{{ $data->nama_rumahmakan }}</option>
                                            @else
                                                <option value="{{ $data->id }}">{{ $data->nama_rumahmakan }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                {{-- -------------- --}}

                                <div class="col-sm-4">
                                    <i class="fas fa-hospital"></i>
                                    <label for="exampleFormControlSelect1" class="control-label col-sm-2" style="margin-left: 0px;">R.Sakit</label>
                                    <select class="form-control" name="be_datarumahsakit_id" id="be_datarumahsakit_id">
                                        <option style="color:red;" value="">Bukan Kategori</option> <!-- Opsi "Bukan Kategori" -->
                                        @foreach($datarumahsakit as $data)
                                            @if(old('be_datarumahsakit_id') && old('be_datarumahsakit_id') == $data->id)
                                                <option value="{{ $data->id }}" selected>{{ $data->nama_rumahsakit }}</option>
                                            @else
                                                <option value="{{ $data->id }}">{{ $data->nama_rumahsakit }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                {{-- -------------- --}}

                                <div class="col-sm-4">
                                    <i class="fas fa-book"></i>
                                    <label for="exampleFormControlSelect1" class="control-label col-sm-2" style="margin-left: 0px;">Instansi</label>
                                    <select class="form-control" name="be_datainstansipendidikan_id" id="be_datainstansipendidikan_id">
                                        <option style="color:red;" value="">Bukan Kategori</option> <!-- Opsi "Bukan Kategori" -->
                                        @foreach($datainstansipendidikan as $data)
                                            @if(old('be_datainstansipendidikan_id') && old('be_datainstansipendidikan_id') == $data->id)
                                                <option value="{{ $data->id }}" selected>{{ $data->nama_instansi }}</option>
                                            @else
                                                <option value="{{ $data->id }}">{{ $data->nama_instansi }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                {{-- -------------- --}}

                                <div class="col-sm-4">
                                    <i class="fas fa-user"></i>
                                    <label for="exampleFormControlSelect1" class="control-label col-sm-2">PIC</label>
                                    <select class="form-control" name="datapenanggungjawab_id" id="datapenanggungjawab_id">
                                        @foreach($datapenanggungjawab as $data)
                                        @if(old('datapenanggungjawab_id')) 
                                        <option value="{{ $data->id }}" selected>{{ $data->nama }}</option>
                                        @else
                                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>

                                    {{-- -------------- --}}

                                    <div class="col-sm-4">
                                        <i class="fas fa-users"></i>
                                        <label for="exampleFormControlSelect1" class="control-label col-sm-2">Pengawas</label>
                                        <select class="form-control" name="datapengawaslapangan_id" id="datapengawaslapangan_id">
                                            @foreach($datapengawaslapangan as $data)
                                            @if(old('datapengawaslapangan_id')) 
                                            <option value="{{ $data->id }}" selected>{{ $data->nama }}</option>
                                            @else
                                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>

                                        {{-- -------------- --}}



                            </div>
                    {{-- ------------------------------------------------------------------------------------------ --}}
                                 
{{-- ------------------------------------------------------------------------------------------ --}}                            
                <div class="form-group row">
                            <div class="col-sm-6">
                                <i class="fas fa-road"></i>
                                <label class="control-label col-sm-2" for="lokasi">Lokasi</label>
                                {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" required value="{{ old('lokasi' )}} " autofocus>
                            </div>
                            @error('lokasi')
                            <div class="invalid-feedback mb-2">
                                {{ $message }}
                            </div>
                            @enderror

                        {{-- -------------- --}}
                        <div class="col-sm-6">
                            <i class="fas fa-money-bill"></i>
                            <label class="control-label col-sm-2" for="anggaran">Anggaran</label>
                            <input type="number" class="form-control @error('anggaran') is-invalid @enderror" id="anggaran" name="anggaran" required value="{{ old('anggaran') }}" autofocus>
                            @error('anggaran')
                            <div class="invalid-feedback mb-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
            </div>
                                            
{{-- ------------------------------------------------------------------------------------------ --}}                            
{{-- ------------------------------------------------------------------------------------------ --}}                            
            <div class="form-group row">
                <label class="control-label col-sm-2" for="body"><i class="fas fa-question-circle mr-2"></i>Keterangan</label>
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
                <div class="col-sm-2">
                    <i class="fas fa-clock"></i>
                    <label class="control-label col-sm-2" for="waktu_pelaksanaan">Waktu</label>
                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                    <input type="number" class="form-control @error('waktu_pelaksanaan') is-invalid @enderror" id="waktu_pelaksanaan" name="waktu_pelaksanaan" required value="{{ old('waktu_pelaksanaan') }}" autofocus placeholder="Masukkan jumlah hari">
                </div>
                    @error('waktu_pelaksanaan')
                        <div class="invalid-feedback mb-2">
                    {{ $message }}
                    </div>
                @enderror

                {{-- --------------- --}}

                <div class="col-sm-10">
                    <i class="fas fa-file"></i>
                    <label class="control-label col-sm-2" for="excerpt">Penjelasan</label>
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
                                <label class="control-label col-sm-2" for="tanggal_mulai">Tanggal Mulai Pekerjaan</label>
                                <div class="col-sm-10">
                                    {{-- <input type="text" class="form-control" id="input-1" placeholder="John Doe" /> --}}
                                    <input type="date" class="form-control @error('tanggal_mulai') is-invalid @enderror" id="tanggal_mulai" name="tanggal_mulai" required value="{{ old('tanggal_mulai') }}" autofocus>
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
                                    <input type="date" class="form-control @error('tanggal_selesai') is-invalid @enderror" id="tanggal_selesai" name="tanggal_selesai" required value="{{ old('tanggal_selesai') }}" autofocus>
                                </div>
                                @error('tanggal_selesai')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

{{-- ------------------------------------------------------------------------------------------ --}}                                                                        
                <div class="form-group row">
                    <label for="exampleFormControlSelect1" class="control-label col-sm-2">Kategori Project</label>
                    <div class="col-sm-2">
                        <select class="form-control" name="datapekerjaanstatus_id" id="datapekerjaanstatus_id">
                            @foreach($datapekerjaanstatus as $status)
                            @if(old('datapekerjaanstatus_id')) 
                            <option value="{{ $status->id }}" selected>{{ $status->nama_status }}</option>
                            @else
                            <option value="{{ $status->id }}">{{ $status->nama_status }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>                            


                            <hr>
                            <button type="submit" class="btn btn-primary mb-4"><i class="fa fa-file"></i> Create New Project </button>
                    </div>

                    @include('backend.dashboard.part.menufooter')


                </div>
            </div>


        </div>
    </div>

    <!--Main Content-->

</div>



<script>
    // const title = document.querySelector('#title');
    // const slug = document.querySelector('#slug');


    // PEMANGGILAN FETCH DIBAWAH HARUS MEMILIKI METHOD YANG DI LAKUKAN OLEH CONTROLLER DI FOLDER CONTROLLER MAKA BUATLAH TERLEBIH DAHULU METHODNYA 
    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

    // ALGORITMA FITUR UNTUK MENAMBAHKAN LIVE PREVIEW SEBELUM GAMBAR DI UPLOAD KE WEBSITE 

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

@endsection
