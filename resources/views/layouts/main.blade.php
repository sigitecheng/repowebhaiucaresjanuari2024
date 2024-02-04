<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HaiuCare | {{ $title}}</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/tentang.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/layanan.css">
  <link rel="stylesheet" href="css/donasi.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Source+Sans+Pro:wght@600;700&display=swap"
    rel="stylesheet">
</head>

<body>

    @include('partials.navbar')
    
    {{-- <div class="container mx-auto flex items-caenter justify-between"> --}}
      @yield('container')
      {{-- </div> --}}
      
      @include('layouts.footer')
</body>

</html>