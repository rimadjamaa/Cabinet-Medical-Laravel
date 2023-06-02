<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Medical Center</title>

  <link rel="stylesheet" href="{{ asset('assets/css/maicons.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/css/owl.carousel.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">

  @yield('Styles')

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>

   @yield('nav')
   @include('frontend.partials.navbar')
   
  </header>

  @yield('content')
  @include('frontend.partials.footer')

<script src="<?php echo e(asset('assets/js/jquery-3.5.1.min.js')); ?>"></script>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>

<script src="{{ asset('assets/js/theme.js') }}"></script>

  
</body>
</html>