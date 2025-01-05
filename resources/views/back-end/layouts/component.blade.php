<!doctype html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ Auth::user()->name }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" type="image/png" href="{{asset('templeate/src/assets/images/logos/favicon.png') }}" />
  <link rel="stylesheet" href="{{asset('templeate/src/assets/css/styles.min.css') }}" />
  <link rel="stylesheet" href="{{asset('../fontawesome/css/all.css')}}">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- <link rel="stylesheet" href="{{ asset('assets_2/css/plugins/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_2/css/plugins/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_2/css/plugins/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_2/css/plugins/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_2/css/plugins/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_2/css/plugins/select2.min.css') }}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.10.0/css/bootstrap-iconpicker.min.css">

    <!-- Template CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('assets_2/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_2/css/components.css') }}"> -->

  <style>
    @media only screen and (max-width:800px) {
      #no-more-tables tbody,
      #no-more-tables tr,
      #no-more-tables td {
          display: block;
      }
      #no-more-tables thead tr {
          position: absolute;
          top: -9999px;
          left: -9999px;
      }
      #no-more-tables td {
          position: relative;
          padding-left: 50%;
          border: none;
          border-bottom: 1px solid #eee;
      }
      #no-more-tables td:before {
          content: attr(data-title);
          position: absolute;
          left: 6px;
          font-weight: bold;
      }
      #no-more-tables tr {
          border-bottom: 1px solid #ccc;
      }
    }
  </style>
  

</head>

<body>
  
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    
    @include('back-end.layouts.sidebar')
    
    <div class="body-wrapper">

    @yield('content')

    

  </div>
  
  
  
  <script src="{{asset('templeate/src/assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{asset('templeate/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset('templeate/src/assets/js/sidebarmenu.js') }}"></script>
  <script src="{{asset('templeate/src/assets/js/app.min.js') }}"></script>
  <script src="{{asset('templeate/src/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{asset('templeate/src/assets/libs/simplebar/dist/simplebar.js') }}"></script>
  <script src="{{asset('templeate/src/assets/js/dashboard.js') }}"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <!-- <script>
    @if (!empty($errors->all()));
    @foreach ($errors->all() as $error);
      toastr.error("{{$error}}");
    @endforeach;
    
    @endif;
  </script> -->

    <!-- General JS Scripts -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script> -->

    <!-- JS Libraies -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css"
        integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <!-- <script src="{{ asset('assets_2/js/plugins/summernote-bs4.js') }}"></script>
    <script src="{{ asset('assets_2/js/plugins/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('assets_2/js/plugins/jquery.uploadPreview.min.js') }}"></script>
    <script src="{{ asset('assets_2/js/plugins/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('assets_2/js/plugins/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('assets_2/js/plugins/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets_2/js/plugins/select2.full.min.js') }}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.10.0/js/bootstrap-iconpicker.bundle.min.js"></script>


    <!-- Template JS File -->
    <!-- <script src="{{ asset('assets_2/js/scripts.js') }}"></script>
    <script src="{{ asset('assets_2/js/custom.js') }}"></script> -->

    <!-- Page Specific JS File -->
    <!-- <script src="{{ asset('assets_2/js/page/features-post-create.js') }}"></script> -->
    <!-- Page Specific JS File -->
    <!-- <script src="{{ asset('assets_2/js/page/forms-advanced-forms.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->


</body>
</html>