@extends('backend.dashboard.part.header')
@include('backend.dashboard.part.menuheader')
@include('backend.dashboard.part.sidebar')
{{-- @include('backend.dashboard.part.judulhalaman') --}}



@section('container')

<!--Content right-->

<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
    <h5 class="mb-3 mt-3" ><i class='fa fa-map-signs'></i> <strong>Halaman | {{ $title }}</strong></h5>
    <hr>

<div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
    <!--Order Listing-->
    <div class="product-list">
        
        <div class="row border-bottom mb-4">
            <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header">{{ $title_database }}</h6></div>
            <div class="col-sm-4 text-right pb-3">
                <button type="button" class="btn btn-danger icon-round shadow pull-right">
                    <i class="fas fa-trash"></i>
                </button>
                <div class="clearfix"></div>
            </div>
        </div>
        
        <div class="table-responsive product-list">
            
            <table class="table table-bordered table-striped mt-0" id="productList">
                @foreach ($data_feadminberanda as $feadminberanda)
                <tbody>

{{-- ==============================================================================--}}
                    <tr>
                        <td class="align-middle" style="width: 175px;"><strong>Beranda 1 : </strong></td>
                        <td class="align-middle">
                            {{ $feadminberanda->beranda1 }}
                        </td>
                        <td class="align-middle text-center" style="width: 50px;">
                            <a href="/backendberanda/{{ $feadminberanda->beranda1 }}/edit">
                                <button class="btn btn-success" data-toggle="modal" ><i class="fa fa-pencil"></i></button>
                            </a>                            
                        </td>
                    </tr>

{{-- ==============================================================================--}}
                    <tr>
                        <td class="align-middle" style="width: 175px;"><strong>Beranda 2 : </strong></td>
                        <td class="align-middle">
                            {{ $feadminberanda->beranda2 }}
                        </td>
                        <td class="align-middle text-center" style="width: 50px;">
                            <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                        </td>
                    </tr>

{{-- ==============================================================================--}}
                    <tr>
                        <td class="align-middle" style="width: 175px;"><strong>Visi : </strong></td>
                        <td class="align-middle">
                            {{ $feadminberanda->visi }}
                        </td>
                        <td class="align-middle text-center" style="width: 50px;">
                            <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                        </td>
                    </tr>

{{-- ==============================================================================--}}
                    <tr>
                        <td class="align-middle" style="width: 175px;"><strong>Misi : </strong></td>
                        <td class="align-middle">
                            {{ $feadminberanda->misi }}
                        </td>
                        <td class="align-middle text-center" style="width: 50px;">
                            <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                            {{-- <button class="btn btn-danger"><i class="fas fa-trash"></i></button> --}}
                        </td>
                    </tr>


{{-- ==============================================================================--}}
                    <tr>
                        <td class="align-middle" style="width: 175px;"><strong>Keterangan : </strong></td>
                        <td class="align-middle">
                            {{ $feadminberanda->fokus_pekerjaan }}
                        </td>
                        <td class="align-middle text-center" style="width: 50px;">
                            <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                        </td>
                    </tr>

{{-- ==============================================================================--}}
                    <tr>
                        <td class="align-middle" style="width: 175px;"><strong>Fokus Pekerjaan : </strong></td>
                        <td class="align-middle">
                            {{ $feadminberanda->keterangan_pekerjaan }}
                        </td>
                        <td class="align-middle text-center" style="width: 50px;">
                            <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                        </td>
                    </tr>


                    @endforeach
                    
            </table>

            <div class="text-right">
                <button class="btn btn-outline-theme"><i class="fa fa-eye"></i> View full orders</button>
            </div>
        </div>
    </div>
    <!--/Order Listing-->

    <!--Order Info Modal-->
    {{-- <div class="modal fade" id="orderInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ord#13 details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="row">Item</th>
                                <th>Quantity</th>
                                <th>Unit price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">Red Shoes</td>
                                <td>2</td>
                                <td>$400</td>
                                <td>$800</td>
                            </tr>
                            <tr>
                                <td scope="row">Blue shirt</td>
                                <td>1</td>
                                <td>$400</td>
                                <td>$400</td>
                            </tr>
                            <tr>
                                <td scope="row">Knickers</td>
                                <td>3</td>
                                <td>$300</td>
                                <td>$900</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="text-right mt-4 p-4">
                        <p><strong>Sub - Total amount: $14,768.00</strong></p>
                        <p><strong>Shipping: $1000.00</strong></p>
                        <p><span>vat(10%): $150.00</span></p>
                        <h4 class="mt-2"><strong>Total: $16,050.00</strong></h4>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--Order Info Modal--> --}}



    {{-- ================================================= HALAMAN UPDATE ADMIN BERANDA ==========================================  --}}
    <!--Order Update Modal-->
    
    {{-- <div class="modal fade" id="orderUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ord#13 details update</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th scope="row">Item</th>
                                <th class="order-qty-head">Quantity</th>
                                <th>Unit price</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">01</td>
                                <td scope="row" class="align-middle">Red Shoes</td>
                                <td class="text-center align-middle"><input type="text" value="2" class="order-qty"></td>
                                <td class="align-middle">$400</td>
                                <td class="align-middle">$800</td>
                                <td style="width: 120px;" class="align-middle">
                                    <button class="btn btn-theme mr-1"><i class="fa fa-pencil-square-o"></i></button>
                                    <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="text-right mt-4 p-4">
                        <p><strong>Sub - Total amount: $14,768.00</strong></p>
                        <p><strong>Shipping: $1000.00</strong></p>
                        <p><span>vat(10%): $150.00</span></p>
                        <h4 class="mt-2"><strong>Total: $16,050.00</strong></h4>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> --}}
    <!--Order Update Modal-->
</div>

@endsection