<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="Askbootstrap">
      <title>Osahan Eat - Online Food Ordering Website HTML Template</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="{{asset('fronted/img/favicon.png')}}">
      <!-- Bootstrap core CSS-->
      <link href="{{asset('fronted/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
      <!-- Font Awesome-->
      <link href="{{asset('fronted/vendor/fontawesome/css/all.min.css')}}" rel="stylesheet">
      <!-- Font Awesome-->
      <link href="{{asset('fronted/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
      <!-- Select2 CSS-->
      <link href="{{asset('fronted/vendor/select2/css/select2.min.css')}}" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="{{asset('fronted/css/osahan.css')}}" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="{{asset('fronted/vendor/owl-carousel/owl.carousel.css')}}">
      <link rel="stylesheet" href="{{asset('fronted/vendor/owl-carousel/owl.theme.css')}}">
   </head>
   <body>
      <div class="homepage-header">
      <div class="overlay"></div>
      
      @include('fronted.layouts.header')
      @include('fronted.layouts.banner')


     
      </div>
      @include('fronted.layouts.ads')

      @yield('content')
 

      @include('fronted.layouts.member')
      @include('fronted.layouts.footer')


   
      <!-- jQuery -->
      <script src="{{asset('fronted/vendor/jquery/jquery-3.3.1.slim.min.js')}}"></script>
      <!-- Bootstrap core JavaScript-->
      <script src="{{asset('fronted/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- Select2 JavaScript-->
      <script src="{{asset('fronted/vendor/select2/js/select2.min.js')}}"></script>
      <!-- Owl Carousel -->
      <script src="{{asset('fronted/vendor/owl-carousel/owl.carousel.js')}}"></script>
      <!-- Custom scripts for all pages-->
      <script src="{{asset('fronted/js/custom.js')}}"></script>
   </body>
</html>