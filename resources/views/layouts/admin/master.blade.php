<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | Sistem Informasi Manajemen Akademik Rhapsody</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}">
    <!-- include head css -->
    @stack('prepend-style')
    @include('layouts.admin.head-css')
    @stack('addon-style')
</head>

<body>

<!-- Begin page -->
    <div id="layout-wrapper">
        <!-- topbar -->
        @include('layouts.admin.topbar')

        <!-- sidebar components -->
        @include('layouts.admin.sidebar')

        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!-- footer -->
            @include('layouts.admin.footer')

        </div>
        <!-- end main content-->
    </div>
<!-- END layout-wrapper -->

<!-- vendor-scripts -->
    @stack('prepend-script')
    @include('sweetalert::alert')
    @include('layouts.admin.vendor-scripts')
    @stack('addon-script')
</body>

</html>
