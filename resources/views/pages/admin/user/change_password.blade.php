@extends('layouts.admin.master')

@section('title')
    Ubah Password Akun
@endsection

@section('page-title')
    Ubah Password Akun
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('status') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session('error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ubah Password</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="p-4 pt-0">
                            <div class="table-responsive mt-3 border-bottom pb-3">
                                <form action="{{ route('change-password.update') }}" method="post" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                        <div class="mb-3 row">
                                            <label for="name" class="col-md-2 col-form-label">Password Lama<span class="text-danger">*</span></label>
                                            <div class="col-md-10">
                                                <input class="form-control @error('old_password') is-invalid @enderror" type="password" name="old_password" id="old_password" required>
                                                @error('name')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="email" class="col-md-2 col-form-label">Password Baru<span class="text-danger">*</span></label>
                                            <div class="col-md-10">
                                                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" id="password" required>
                                                @error('password')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label" for="password-confirm">Confirm Password<span class="text-danger">*</span></label>
                                            <div class="col-md-10">
                                                <input type="password"
                                                       class="form-control @error('password') is-invalid @enderror"
                                                       name="password_confirmation" required id="password-confirm"
                                                @error('password')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <button type="submit" class="btn btn-success w-md">Submit</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    @endsection
