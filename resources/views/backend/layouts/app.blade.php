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

  <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/css/bootstrap.min.css') }}">

      <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

   
    <!-- Waves Effect Css -->
    <link href="{{ asset('backend/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('backend/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    
    {{-- PUSH STYLES --}}
    @stack('styles')


    <!-- AdminBSB Themes -->
    <link href="{{ asset('backend/css/themes/theme-indigo.css') }}" rel="stylesheet" />



</head>

<body>
    
@include('backend.partials.navbar')
@yield('content')
@include('backend.partials.footer')


 <!-- Jquery Core Js -->
 <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core Js -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.js') }}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{ asset('backend/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{ asset('backend/plugins/node-waves/waves.js') }}"></script>

{{-- PUSH SCRIPTS --}}
@stack('scripts')

<!-- Custom Js -->
<script src="{{ asset('backend/js/admin.js') }}"></script>

<!-- Demo Js -->
{{-- <script src="{{ asset('backend/js/demo.js') }}"></script> --}}

<script src="https://unpkg.com/sweetalert2@7.19.3/dist/sweetalert2.all.js"></script>

<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>



<script src="<?php echo e(asset('assets/js/jquery-3.5.1.min.js')); ?>"></script>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>

<script src="{{ asset('assets/js/theme.js') }}"></script>

<script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>