<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-menu-color="light" data-sidenav-user="true">


<!-- Mirrored from coderthemes.com/hyper/modern/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Oct 2024 17:28:05 GMT -->
<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="habib" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- Daterangepicker css -->
    <link href="{{asset('assets/vendor/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css">

    <!-- Vector Map css -->
    <link href="{{asset('assets/vendor/jsvectormap/jsvectormap.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Theme Config Js -->
    <script src="{{asset('assets/js/hyper-config.js')}}"></script>

    <!-- Vendor css -->
    <link href="{{asset('assets/css/vendor.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{asset('assets/css/app-modern.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
    {{-- 1 --}}
    @include('admin.admin-components.navbar') 
    {{-- 2 --}}
    @include('admin.admin-components.leftside-menu')
    @yield('body')
    
    

    @include('admin.admin-components.themesetting')
    @include('admin.admin-components.footer')

    {{-- all script --}}
    <!-- Vendor js -->
    <script src="{{asset('assets/js/vendor.min.js')}}"></script>

    <!-- Daterangepicker js -->
    <script src="{{asset('assets/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('assets/vendor/daterangepicker/daterangepicker.js')}}"></script>

    <!-- Apex Charts js -->
    <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Vector Map js -->
    <script src="{{asset('assets/vendor/jsvectormap/jsvectormap.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jsvectormap/maps/world-merc.js')}}"></script>
    <script src="{{asset('assets/vendor/jsvectormap/maps/world.js')}}"></script>
    <!-- Dashboard App js -->
    <script src="{{asset('assets/js/pages/demo.dashboard.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/app.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            @if (session('success') )
                toastr.success('{{ session('success') }}');
            @elseif (session('error'))
                toastr.error('{{ session('error') }}');
            @endif
        });
    </script>

</body>


<!-- Mirrored from coderthemes.com/hyper/modern/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Oct 2024 17:29:31 GMT -->
</html>