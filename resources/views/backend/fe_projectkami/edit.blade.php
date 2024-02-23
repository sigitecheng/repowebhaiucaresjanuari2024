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
                                
                                <a href="/adminberanda/projectkami">
                                    <button type="button" class="btn btn-secondary icon-round shadow pull-right mr-2">
                                        <i class="fas fa-arrow-right"></i>
                                    </button>
                                </a>

                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <form class="form-horizontal mt-4 mb-5" method="post" action="{{ route('projectkami.update', ['project_kami' => $adminprojectkami->project_kami]) }}" enctype="multipart/form-data">
                            @method('patch')
                            @csrf

{{-- ------------------------------------------------------------------------------------------ --}}
<div class="form-group row">
    <label class="control-label col-sm-2" for="project_kami"><i class="fa fa-home mr-2"></i>Project Kami</label>
    <div class="col-sm-10">
        <textarea class="form-control @error('project_kami') is-invalid @enderror" id="project_kami" name="project_kami" required autofocus rows="4">{{ old('project_kami', $adminprojectkami->project_kami) }}</textarea>
    </div>
    @error('project_kami')
    <div class="invalid-feedback mb-2">
        {{ $message }}
    </div>
    @enderror
</div>


{{-- ------------------------------------------------------------------------------------------ --}}

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
