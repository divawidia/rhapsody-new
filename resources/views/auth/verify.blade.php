@extends('layouts.admin.master-without-nav')
@section('title')
    Login
@endsection
@section('page-title')
    Login
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="authentication-bg min-vh-100">
            <div class="bg-overlay bg-light"></div>
            <div class="container">
                <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                    <div class="row justify-content-center my-auto">
                        <div class="col-md-8 col-lg-6 col-xl-5">

                            <div class="mb-4 pb-2">
                                <a href="index" class="d-block auth-logo">
                                    <img src="{{ URL::asset('img/logo-2.png') }}" alt="" height="80"
                                         class="auth-logo-dark me-start">
                                    <img src="{{ URL::asset('img/logo-2') }}" alt="" height="80"
                                         class="auth-logo-light me-start">
                                </a>
                            </div>

                            <div class="card">
                                <div class="card-body p-4">
                                    <div class="text-center mt-2">
                                        <h5>Menunggu persetujuan Admin !</h5>
                                        <p class="text-muted">Mohon untuk menunggu persetujuan dari admin untuk bisa login!</p>
                                    </div>
                                    <div class="p-2 mt-4">
                                        <div class="mt-4">
                                            <a class="btn btn-primary w-100" href="{{ route('login') }}">
                                                Ke halaman Log In
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center p-4">
                                <p>©
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> Rhapsody Hospitality Development Center.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- end container -->
        </div>
        <!-- end authentication section -->
    @endsection
    @section('scripts')
        <script src="{{ URL::asset('build/js/pages/pass-addon.init.js') }}"></script>
@endsection
