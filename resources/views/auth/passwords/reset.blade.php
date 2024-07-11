@extends('layouts.admin.master-without-nav')
@section('title')
    Reset Password
@endsection
@section('page-title')
    Reset Password
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
                                        <h5>Reset Password</h5>
                                    </div>
                                    @if (session('status'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{ session('status') }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="p-2 mt-4">
                                        <form method="POST" action="{{ route('password.update') }}" class="auth-input">
                                            @csrf
                                            <div class="mb-2">
                                                <input id="email" type="hidden"
                                                       class="form-control" name="token"
                                                       value="{{ $token }}">
                                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                                <input id="email" type="email"
                                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                                       value="{{ $email ?? old('email') }}" required autofocus>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="password-input">Password <span class="text-danger">*</span></label>
                                                <input type="password"
                                                       class="form-control @error('password') is-invalid @enderror"
                                                       name="password" required id="password-input"
                                                       placeholder="Enter password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="password-confirm">
                                                    Confirm Password<span class="text-danger">*</span>
                                                </label>
                                                <input type="password"
                                                       class="form-control @error('password') is-invalid @enderror"
                                                       name="password_confirmation" required id="password-confirm"
                                                       placeholder="Enter confirm password">
                                            </div>

                                            <div class="mt-4">
                                                <button class="btn btn-primary w-100" type="submit">Submit</button>
                                            </div>
                                        </form>
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