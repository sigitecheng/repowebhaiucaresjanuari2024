@extends('backend.dashboard.part.header')
@include('backend.dashboard.part.menuheader')
@include('backend.dashboard.part.sidebar')


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
                <thead class="bg-primary text-white text-center">
                    <tr>                        
                        <th style="width: 200px;">No</th>
                        <th style="width: 50px;">Nama Lengkap</th>
                        <th style="width: 50px;">Username</th>
                        <th style="width: 50px;">Email</th>
                        <th style="width: 50px;">No Telp</th>
                        <th style="width: 200px;">Domisili</th>
                        <th style="width: 150px;">Alamat</th>
                        <th style="width: 100px;">Action</th>
                    </tr>
                </thead>

                @foreach ( $data_usersandroid as $datausersandroid )
                <tbody>
                    <tr>
                        <td class="align-middle text-center" style="width: 10px;">{{ $loop->iteration }}</td>
                        <td class="align-middle" style="width: 50px;">{{ $datausersandroid->nama_lengkap}}</td>
                        <td class="align-middle" style="width: 50px;">{{ $datausersandroid->username}}</td>
                        <td class="align-middle" style="width: 250px;">{{ $datausersandroid->email}}</td>
                        <td class="align-middle" style="width: 50px;">{{ $datausersandroid->no_telepon}}</td>
                        <td class="align-middle" style="width: 200px;">{{ $datausersandroid->domisili_kota}}</td>
                        <td class="align-middle" style="width: 150px;">{{ $datausersandroid->alamat_rumah}}</td>
                        <td class="align-middle text-center">
                            <a href="{{ url('datausers/'. $datausersandroid->id . '/edit') }}">
                                <button class="btn btn-theme">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </a>
                            
                            <a href="">
                                <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                            </a>
                            <a href="">
                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </a>
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

{{-- 
        <div class="table-responsive product-list">
            
            <table class="table table-bordered table-striped mt-0" id="productList">
                
                <thead>
                    <thead>
                        <tr>                        
                            <tr class="align-middle">No</tr>
                            <tr class="align-middle">Nama Lengkap</tr>
                            <tr class="align-middle">Username</tr>
                            <tr class="align-middle">Email</tr>
                            <tr class="align-middle">No Telp</tr>
                            <tr class="align-middle">Domisili</tr>
                            <tr class="align-middle">Alamat</tr>
                            <tr class="align-middle">Action</tr>
                        </tr>
                    </thead>
                </thead>
                 --}}
                {{-- @foreach ($data_usersandroid as $datausersandroid)
                <tbody> --}}
                    {{-- ==============================================================================--}}
                    {{-- <tr> --}}
                        {{-- <td class="align-middle" style="width: 175px;"><strong>Beranda 1 : </strong></td> --}}
                        {{-- <td>{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $datausersandroid->nama_lengkap}}</td>
                        <td class="align-middle">{{ $datausersandroid->username}}</td>
                        <td class="align-middle">{{ $datausersandroid->email}}</td>
                        <td class="align-middle">{{ $datausersandroid->no_telepon}}</td>
                        <td class="align-middle">{{ $datausersandroid->domisili_kota}}</td>
                        <td class="align-middle">{{ $datausersandroid->alamat_rumah}}</td>
                            {{ $datausersandroid->beranda1 }} --}}
                        
                        {{-- <td class="align-middle text-center" style="width: 50px;">
                            <a href="/backendberanda/{{ $datausersandroid->beranda1 }}/edit">
                                <button class="btn btn-success" data-toggle="modal" ><i class="fa fa-pencil"></i></button>
                            </a>                            
                            <a href="">
                                <button class="btn btn-success" data-toggle="modal" ><i class="fa fa-pencil"></i></button>
                            </a>                            
                            <a href="">
                                <button class="btn btn-success" data-toggle="modal" ><i class="fa fa-pencil"></i></button>
                            </a>                            
                        </td>
                    </tr>

                    @endforeach --}}
                    
            {{-- </table>

            <div class="text-right">
                <button class="btn btn-outline-theme"><i class="fa fa-eye"></i> View full orders</button>
            </div>
        </div> --}}
    </div>
</div>
