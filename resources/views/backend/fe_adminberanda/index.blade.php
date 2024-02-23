@extends('backend.dashboard.part.header')
@include('backend.dashboard.part.menuheader')
@include('backend.dashboard.part.sidebar')
    

@section('container')

<!--Content right-->
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
    <h5 class="mb-3 mt-3" ><i class='fa fa-map-signs'></i> <strong>Halaman | {{ $title_dashboard }}</strong></h5>
{{-- ============================== HALAMAN DATABASE PROJECT SUB BIDANG PEKERJAAN =========================== --}}
{{-- ================================ AKHIR HALAMAN DASHBOARD DATABASE PROJEK PEKERJAAN ===========================  --}}
                
                <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
                    <!--Order Listing-->
                    <div class="product-list">
                        
                        <div class="row border-bottom mb-4">
                            <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header"><button class="btn btn-warning mr-2"><i class="fa fa-file-excel"></i></button>{{ $title_dashboard }} </h6></div>
                            <div class="col-sm-4 text-right pb-3">
                              
                            </div>
                        </div>

                                                
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


                        
                        <div class="table-responsive product-list">
                            
                            <table class="table table-bordered table-striped mt-0" id="productList">
                            @foreach ($fe_adminberanda as $beranda)
                                
                            <tbody>                            
                                    <tr>
                                        <td class="align-items-center justify-content-center" style="width: 35px;"><i class="fa fa-home"></i></td>
                                        <td style="width: 100px;"><strong>Beranda 1 </strong></td>
                                        <td style="width: 15px;"class="text-center">:</td>
                                        <td>{{ $beranda->beranda1 }}</td>
                                    </tr>            
                                
                                    <tr>
                                        <td class="align-items-center justify-content-center"><i class="fa fa-book"></i></td>
                                        <td><strong>Beranda 2</strong></td>
                                        <td class="text-center">:</td>
                                        <td>{{ $beranda->beranda2 }}</td>
                                    </tr>
                                
                                    <tr>
                                        <td class="align-items-center justify-content-center"><i class="fa fa-book"></i></td>
                                        <td><strong>Visi</strong></td>
                                        <td class="text-center">:</td>
                                        <td>{{ $beranda->visi }}</td>
                                    </tr>
                                
                                    <tr>
                                        <td class="align-items-center justify-content-center"><i class="fa fa-book"></i></td>
                                        <td><strong>Misi</strong></td>
                                        <td class="text-center">:</td>
                                        <td>{{ $beranda->misi }}</td>
                                    </tr>
                                
                                    <tr>
                                        <td class="align-items-center justify-content-center"><i class="fa fa-book"></i></td>
                                        <td><strong>Fokus Pekerjaan</strong></td>
                                        <td class="text-center">:</td>
                                        <td>{{ $beranda->fokus_pekerjaan }}</td>
                                    </tr>
            
                                </table>
                                
                                <a href="/adminberanda/post/{{ $beranda->beranda1}}/edit">
                                    <button type="button" class="btn btn-success icon-round shadow pull-right mr-2">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </a>
                                
                                @endforeach
                                <a href="">
                                    <div class="">
                                        <button class="btn btn-outline-theme"><i class="fa fa-eye"></i> View All Data Dashboard Frontend </button>
                                    </div>
                                </a>


                            </div>
                        </div>
                        <!--/Order Listing-->

                  
                </div>


            </div>
        </div>

        <!--Main Content-->

    </div>

    @endsection