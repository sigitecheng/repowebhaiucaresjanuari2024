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

                        <form method="post" action="/backend/kontraktor" enctype="multipart/form-data">
                            @csrf
{{-- ------------------------------------------------------------------------------------------ --}}
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="nama_perusahaan"><i class="fas fa-building mr-2"></i>Nama Perusahaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('nama_perusahaan') is-invalid @enderror" id="nama_perusahaan" name="nama_perusahaan" required value="{{ old('nama_perusahaan')}} " autofocus>
                                </div>
                                @error('nama_perusahaan')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

{{-- ------------------------------------------------------------------------------------------ --}}
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="alamat"><i class="fas fa-road mr-2"></i>Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required value="{{ old('alamat')}} " autofocus>
                                </div>
                                @error('alamat')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

{{-- ------------------------------------------------------------------------------------------ --}}
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="kota"><i class="fas fa-building mr-2"></i>Kota</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota" name="kota" required value="{{ old('kota')}} " autofocus>
                                </div>
                                @error('kota')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror

                                <label class="control-label col-sm-2" for="nomor_telepon"><i class="fas fa-phone mr-2"></i>Nomor Telepon</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control @error('nomor_telepon') is-invalid @enderror" id="nomor_telepon" name="nomor_telepon" required value="{{ old('nomor_telepon')}} " autofocus>
                                </div>
                                @error('nomor_telepon')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

{{-- ------------------------------------------------------------------------------------------ --}}
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="email"><i class="fas fa-envelope mr-2"></i>Email</label>
                                <div class="col-sm-4">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email')}} " autofocus>
                                </div>
                                @error('email')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror

                                <label class="control-label col-sm-2" for="pimpinan_perusahaan"><i class="fas fa-user mr-2"></i>Pimpinan Perusahaan</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control @error('pimpinan_perusahaan') is-invalid @enderror" id="pimpinan_perusahaan" name="pimpinan_perusahaan" required value="{{ old('pimpinan_perusahaan')}} " autofocus>
                                </div>
                                @error('pimpinan_perusahaan')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            
{{-- ------------------------------------------------------------------------------------------ --}}
                        <div class="form-group row">
                            <label class="control-label col-sm-2" for="pengalaman"><i class="fas fa-star mr-2"></i>Pengalaman</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('pengalaman') is-invalid @enderror" id="pengalaman" name="pengalaman" required value="{{ old('pengalaman')}} " autofocus>
                            </div>
                            @error('pengalaman')
                            <div class="invalid-feedback mb-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

            {{-- ------------------------------------------------------------------------------------------ --}}
                    <div class="form-group row">
                        <label class="control-label col-sm-2" for="bidang_keahlian"><i class="fas fa-star mr-2"></i>Bidang Keahlian</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('bidang_keahlian') is-invalid @enderror" id="bidang_keahlian" name="bidang_keahlian" required value="{{ old('bidang_keahlian')}} " autofocus>
                        </div>
                        @error('bidang_keahlian')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>


{{-- ------------------------------------------------------------------------------------------ --}}
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="sertifikat"><i class="fas fa-file mr-2"></i>Sertifikat</label>
                                <div class="col-sm-4">
                                    <input type="file" class="form-control @error('sertifikat') is-invalid @enderror" id="sertifikat" name="sertifikat" required value="{{ old('sertifikat')}} " autofocus>
                                </div>
                                @error('sertifikat')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror

                                <label class="control-label col-sm-2" for="dokumen"><i class="fas fa-file mr-2"></i>Dokumen PT/CV</label>
                                <div class="col-sm-4">
                                    <input type="file" class="form-control @error('dokumen') is-invalid @enderror" id="dokumen" name="dokumen" required value="{{ old('dokumen')}} " autofocus>
                                </div>
                                @error('dokumen')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <hr>
                            <button type="submit" class="btn btn-warning mb-4"><i class="fas fa-hammer mr-2"></i> Create </button>
                    </div>

                    @include('backend.dashboard.part.menufooter')


                </div>
            </div>


        </div>
    </div>

    <!--Main Content-->

</div>

@endsection
