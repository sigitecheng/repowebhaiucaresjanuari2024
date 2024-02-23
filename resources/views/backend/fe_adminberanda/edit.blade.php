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
                            <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header"><button class="btn btn-secondary mr-2"><i class="fa fa-file-excel"></i></button>{{ $title_dashboard }} </h6></div>
                            
                            <div class="col-sm-4 text-right pb-3">
                                
                                <a href="/adminberanda/post">
                                    <button type="button" class="btn btn-secondary icon-round shadow pull-right mr-2">
                                        <i class="fas fa-arrow-right"></i>
                                    </button>
                                </a>

                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <form class="form-horizontal mt-4 mb-5" method="post" action="/adminberanda/post/{{ $adminberanda->beranda1}}" enctype="multipart/form-data">
                            @method('put')
                            @csrf

{{-- ------------------------------------------------------------------------------------------ --}}
<div class="form-group row">
    <label class="control-label col-sm-2" for="beranda1"><i class="fa fa-home mr-2"></i>Beranda 1</label>
    <div class="col-sm-10">
        <textarea class="form-control @error('beranda1') is-invalid @enderror" id="beranda1" name="beranda1" required autofocus rows="4">{{ old('beranda1', $adminberanda->beranda1) }}</textarea>
    </div>
    @error('beranda1')
    <div class="invalid-feedback mb-2">
        {{ $message }}
    </div>
    @enderror
</div>


{{-- ------------------------------------------------------------------------------------------ --}}
<div class="form-group row">
    <label class="control-label col-sm-2" for="beranda2"><i class="fa fa-home mr-2"></i>Beranda 2</label>
    <div class="col-sm-10">
        <textarea class="form-control @error('beranda2') is-invalid @enderror" id="beranda2" name="beranda2" required autofocus rows="4">{{ old('beranda2', $adminberanda->beranda2) }}</textarea>
    </div>
    @error('beranda2')
    <div class="invalid-feedback mb-2">
        {{ $message }}
    </div>
    @enderror
</div>


{{-- ------------------------------------------------------------------------------------------ --}}
<div class="form-group row">
    <label class="control-label col-sm-2" for="visi"><i class="fa fa-home mr-2"></i>Visi</label>
    <div class="col-sm-10">
        <textarea class="form-control @error('visi') is-invalid @enderror" id="visi" name="visi" required autofocus rows="4">{{ old('visi', $adminberanda->visi) }}</textarea>
    </div>
    @error('visi')
    <div class="invalid-feedback mb-2">
        {{ $message }}
    </div>
    @enderror
</div>

{{-- ------------------------------------------------------------------------------------------ --}}
<div class="form-group row">
    <label class="control-label col-sm-2" for="misi"><i class="fa fa-home mr-2"></i>Misi</label>
    <div class="col-sm-10">
        <textarea class="form-control @error('misi') is-invalid @enderror" id="misi" name="misi" required autofocus rows="4">{{ old('misi', $adminberanda->misi) }}</textarea>
    </div>
    @error('misi')
    <div class="invalid-feedback mb-2">
        {{ $message }}
    </div>
    @enderror
</div>

{{-- ------------------------------------------------------------------------------------------ --}}
<div class="form-group row">
    <label class="control-label col-sm-2" for="fokus_pekerjaan"><i class="fa fa-home mr-2"></i>Fokus Pekerjaan</label>
    <div class="col-sm-10">
        <textarea class="form-control @error('fokus_pekerjaan') is-invalid @enderror" id="fokus_pekerjaan" name="fokus_pekerjaan" required autofocus rows="4">{{ old('fokus_pekerjaan', $adminberanda->fokus_pekerjaan) }}</textarea>
    </div>
    @error('fokus_pekerjaan')
    <div class="invalid-feedback mb-2">
        {{ $message }}
    </div>
    @enderror
</div>

                            <hr>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-file"></i> Update Project </button>
                    </div>

                    @include('backend.dashboard.part.menufooter')


                </div>
            </div>


        </div>
    </div>

    <!--Main Content-->

</div>

@endsection
