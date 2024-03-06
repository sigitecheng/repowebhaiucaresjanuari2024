@extends('backend.dashboard.part.header')
@include('backend.dashboard.part.menuheader')
@include('backend.dashboard.part.sidebar')

@section('container')

        <!--Header-->
            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0">
                <h5 class="mb-0" ><strong>Details {{ $title }}</strong></h5>
                <span class="text-secondary">Halaman <i class="fa fa-angle-right"></i> {{ $title_halaman }}</span>
                
                <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
                    <!--Product detail-->
                    <div class="product-list">
                        <div class="row">
                            <div class="col-sm-5 col-12">
                                <div class="slider-for border text-center">
                                    @if($berita->gambar)
                                        <img src="{{ $berita->gambar }}" alt="" width="450" height="450"><!-- Ubah nilai width dan height sesuai kebutuhan Anda -->
                                    @else
                                        <p>Gambar tidak tersedia</p>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="col-sm-7 col-12">
                                <div class="p-2">
                                    <div class="text-right">
                                        <a href="/berita">
                                            <button class="btn btn-outline-dark rounded-circle" style="padding: 10px; font-size: 16px;">
                                                <i class="fas fa-sign-out-alt"></i>
                                            </button>                                     
                                        </a>
                                    </div>
                                    <h3 class="mb-3">{{ $berita->judul }}</h3>
                                    <h5><strong>Penulis : </strong>{{ $berita->user->name }}</h5>
                                    
                                    <hr>
                                    <p class="product-slug">{{ $berita->isi }}</p>
                                    
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-right button-edit">{{ $berita->lokasi }}</span>
                                        {{-- <span class=" button-edit">{{ $berita->lokasi }}</span> --}}
                                        <span class="text-right">
                                            <button class="button-custom">{{ date('d F Y', strtotime($berita->tanggal_dibuat)) }}</button>
                                        </span>
                                    </div>
                                    
                                    
                                    <hr>
                                    
                                </div>

                            </div>

                        </div>

                    </div>
                    <!--Product Detail-->
                </div>

                <div class="mt-4 mb-4 p-3 bg-white button-container border shadow-sm">
                    <div class="product-list custom-tabs">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-customContent" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home" data-toggle="tab" href="#custom-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-comments mr-2 "></i>Comment </a>

                                {{-- <a class="nav-item nav-link" id="nav-profile" data-toggle="tab" href="#custom-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Description</a> --}}

                                {{-- <a class="nav-item nav-link" id="nav-contact" data-toggle="tab" href="#custom-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Size Guide</a> --}}
                            </div>
                        </nav>

                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-customContent">
                            <div class="tab-pane fade show active p-3" id="custom-home" role="tabpanel" aria-labelledby="nav-home">
                                
                                <!--Single feed-->
                                <div class="feed-single mb-3">
                                    <div class="media">
                                        <img class="mr-3 rounded-circle" height="40px" width="40px" src="assets/img/John-doe.png" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h6 class="mt-1">Jay Shetty 
                                                <small class="text-muted pl-3"><i class="fa fa-clock"></i> 2 weeks</small>
                                                <p class="clearfix"></p>
                                            </h6>
                                            
                                            <p>Good quality material, insulates well. There is room for improvement.</p>

                                            <div class="feed-footer">
                                                <span class="pr-3 text-success"><i class="fa fa-check-circle"></i>
                                                Verified Purchase </span>
                                                
                                                <p class="clearfix"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/Single feed-->

                            </div>
                            <!--/Feed tab-->

                            <!--Personal info tab-->
                            <div class="tab-pane fade p-3" id="custom-profile" role="tabpanel" aria-labelledby="nav-profile">
                                
                                <h6 class="mb-3">Product Details</h6>
                                <table class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Model:</th>
                                            <td>Model 2.3</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">color:</th>
                                            <td>red</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">features</th>
                                            <td>New Model ,High heals</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Advanced</th>
                                            <td>Feel Comfortability </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <!--/Personal info tab-->

                            <!--Resume tab-->
                            <div class="tab-pane fade p-3" id="custom-contact" role="tabpanel" aria-labelledby="nav-contact">
                                
                                <p class="p-typo">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                </p>

                                <p class="p-typo">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>

                <!--Footer-->
           
                @include('backend.dashboard.part.menufooter')
  
                <!--Footer-->

            </div>

@endsection