@extends('backend.dashboard.part.header')
@include('backend.dashboard.part.menuheader')
@include('backend.dashboard.part.sidebar')
    

@section('container')

<!--Content right-->
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
    <h5 class="mb-3 mt-3" ><i class='fa fa-map-signs'></i> <strong>Halaman | {{ $title }}</strong></h5>
{{-- ============================== HALAMAN DATABASE PROJECT SUB BIDANG PEKERJAAN =========================== --}}
{{-- ================================ AKHIR HALAMAN DASHBOARD DATABASE PROJEK PEKERJAAN ===========================  --}}
                
                <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
                    <!--Order Listing-->
                    <div class="product-list">
                        
                        <div class="row border-bottom mb-4">
                            <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header"><button class="btn btn-secondary mr-2"><i class="fa fa-file-excel"></i></button>{{ $title_halaman }} <i class="fas fa-arrow-right mr-2 ml-2"></i> {{ $datarumahmakan->nama_rumahmakan }} </h6></div>
                            <div class="col-sm-4 text-right pb-3">
                                
                                <a href="/backend/rumahmakan">
                                    <button type="button" class="btn btn-secondary icon-round shadow pull-right mr-2">
                                        <i class="fas fa-arrow-right"></i>
                                    </button>
                                </a>
                                
                                
                            </div>
                        </div>
                        
                        <div class="table-responsive product-list">
                            
                            <table class="table table-bordered table-striped mt-0" id="productList">
                            
                                <tbody>

                                    <tr>
                                        <td class="align-items-center justify-content-center" style="width: 35px;"><i class="fas fa-utensils"></i></td>
                                        <td style="width: 150px;"><strong>Rumah Makan</strong></td>
                                        <td style="width: 15px;"class="text-center">:</td>
                                        <td>{{ $datarumahmakan->nama_rumahmakan }}</td>
                                    </tr>
                                                
                                    <tr>
                                        <td class="align-items-center justify-content-center" style="width: 35px;"><i class="fa fa-road"></i></td>
                                        <td style="width: 100px;"><strong>Alamat</strong></td>
                                        <td style="width: 15px;"class="text-center">:</td>
                                        <td>{{ $datarumahmakan->alamat }}</td>
                                    </tr>
                                                
                                    <tr>
                                        <td class="align-items-center justify-content-center" style="width: 35px;"><i class="fa fa-building"></i></td>
                                        <td style="width: 100px;"><strong>Kota</strong></td>
                                        <td style="width: 15px;"class="text-center">:</td>
                                        <td>{{ $datarumahmakan->kota }}</td>
                                    </tr>
                                                
                                    <tr>
                                        <td class="align-items-center justify-content-center" style="width: 35px;"><i class="fa fa-phone"></i></td>
                                        <td style="width: 100px;"><strong>Nomor Telepon</strong></td>
                                        <td style="width: 15px;"class="text-center">:</td>
                                        <td>{{ $datarumahmakan->nomor_telepon }}</td>
                                    </tr>                 
                                                
                                    <tr>
                                        <td class="align-items-center justify-content-center" style="width: 35px;"><i class="fa fa-envelope"></i></td>
                                        <td style="width: 100px;"><strong>Email</strong></td>
                                        <td style="width: 15px;"class="text-center">:</td>
                                        <td>{{ $datarumahmakan->email }}</td>
                                    </tr>

                                    <tr>
                                        <td class="align-items-center justify-content-center" style="width: 35px;"><i class="fa fa-user"></i></td>
                                        <td style="width: 100px;"><strong>Pemilik</strong></td>
                                        <td style="width: 15px;"class="text-center">:</td>
                                        <td>{{ $datarumahmakan->pemilik }}</td>
                                    </tr>

                                    <tr>
                                        <td class="align-items-center justify-content-center" style="width: 35px;"><i class="fa fa-star"></i></td>
                                        <td style="width: 100px;"><strong>Sertifikat</strong></td>
                                        <td style="width: 15px;"class="text-center">:</td>
                                        <td>{{ $datarumahmakan->sertifikat }}</td>
                                    </tr>

                                    <tr>
                                        <td class="align-items-center justify-content-center" style="width: 35px;"><i class="fa fa-star"></i></td>
                                        <td style="width: 100px;"><strong>Pengalaman</strong></td>
                                        <td style="width: 15px;"class="text-center">:</td>
                                        <td>{{ $datarumahmakan->pengalaman }}</td>
                                    </tr>

                                    <tr>
                                        <td class="align-items-center justify-content-center" style="width: 35px;"><i class="fa fa-file"></i></td>
                                        <td style="width: 100px;"><strong>Dokumen</strong></td>
                                        <td style="width: 15px;"class="text-center">:</td>
                                        <td>{{ $datarumahmakan->dokumen }}</td>
                                    </tr>
                                                
                                
                            </table>
                            <a href="/backend/rumahmakan">
                                <div class="text-right">
                                    <button class="btn btn-outline-theme"><i class="fa fa-eye"></i> View Full Rumah Makan</button>
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