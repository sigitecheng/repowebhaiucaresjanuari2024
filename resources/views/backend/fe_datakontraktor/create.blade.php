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
                                <label class="control-label col-sm-2" for="kota"><i class="fas fa-building mr-2"></i>Kota</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota" name="kota" required value="{{ old('kota')}} " autofocus>
                                </div>
                                @error('kota')
                                <div class="invalid-feedback mb-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <hr>
                            <button type="submit" class="btn btn-warning mb-4"><i class="fas fa-hammer mr-2"></i> Create New Kontraktor </button>
                    </div>

                    @include('backend.dashboard.part.menufooter')


                </div>
            </div>


        </div>
    </div>

    <!--Main Content-->

</div>

@endsection
