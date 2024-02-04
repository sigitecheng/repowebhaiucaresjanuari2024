<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="Sigimatika" content="HaiuCare Bangun Indonesia"> 
    <meta name="generator" content="Hugo 0.111.3">
    
    <!-- Custom styles for this template -->
    {{-- <link rel="stylesheet" href="css/dashboard.css"> --}}

    <link rel="stylesheet" href="css/menu.css">
    <title>HaiuCare | {{ $title}}</title>
    <style>
        body {
            background-color: #00FFFF;
            font-family: 'Montserrat', sans-serif;
        }

        .marquee {
            margin: 5px 0;
            padding: 5px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px #999999;
            font-size: 14 px;
            color: #00008B;
            text-shadow: 0px 0px 0px #888888;
        }
    </style>
    
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="marquee">
        <marquee behavior="scroll" direction="left">Selamat datang di situs HaiuCare Bangun Indonesia, anda berada di halaman {{ $title }} ! </marquee>
    </div>

    <!-- Editor TRIX  -->
    <!-- JANGAN LUPA UNTUK MENGHILANGKAN MODE TOOLS UPLOADS DATA YANG ADA DI HALAMAN FORMS AGAR TIDAK ADAFILE YANG BISA UNTUK DI AKSES MAUPUN UNTUK DI LAKUKAN PENGIRIMAN OLEH USERA YANG ANEH ANEH  -->
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>

    <!-- ######################## -->

    </head>

        @include('dashboard.layouts.header')

        <div class="container-fluid">
            <div class="row">

                @include('dashboard.layouts.sidebar')

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    @yield('container')
                </main>

            </div>
        </div>

        <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

        {{-- @include('layouts.footer') --}}