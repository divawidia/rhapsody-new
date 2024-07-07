@extends('layouts.admin.master')

@section('title')
    Pengaturan Akun
@endsection

@section('page-title')
    Pengaturan Akun
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="user-profile-img">
                            <img src="{{ URL::asset('build/images/pattern-bg.jpg') }}" class="profile-img profile-foreground-img rounded-top"
                                 style="height: 120px;" alt="">
                            <div class="overlay-content rounded-top">
                            </div>
                        </div>
                        <!-- end user-profile-img -->


                        <div class="p-4 pt-0">

                            <div class="mt-n5 position-relative text-center border-bottom pb-3">
                                <img src="{{ Storage::url($user->photo_url ?? '') }}" alt=""
                                     class="avatar-xl rounded-circle img-thumbnail object-fit-cover">

                                <div class="mt-3">
                                    <h5 class="mb-1">{{ $user->name }}</h5>
                                </div>

                            </div>

                            <div class="table-responsive mt-3 border-bottom pb-3">
                                <form action="{{ route('profile-setting.update') }}" method="post" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                        <div class="mb-3 row">
                                            <label for="name" class="col-md-2 col-form-label">Nama</label>
                                            <div class="col-md-10">
                                                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required>
                                                @error('name')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="email" class="col-md-2 col-form-label">Email</label>
                                            <div class="col-md-10">
                                                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required>
                                                @error('email')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">Foto Profile</label>
                                            <div class="col-md-10">
                                                <input type="file" id="photo_url" name="photo_url" class="form-control" accept="image/*"/>
                                                <img id="preview" class="image-preview mt-3" src="{{ Storage::url($user->photo_url) }}" alt="foto profile"/>
                                                @error('photo_url')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <button type="submit" class="btn btn-success w-md">Submit</button>
                                            <a href="{{ route('change-password') }}" class="btn btn-primary w-md">Ubah Password</a>
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

    @section('scripts')
        <script src="{{ URL::asset('build/js/pages/profile.init.js') }}"></script>
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
        <script>
            photo_url.onchange = evt => {
                preview = document.getElementById('preview');
                preview.style.display = 'block';
                const [file] = photo_url.files
                if (file) {
                    preview.src = URL.createObjectURL(file)
                }
            }
        </script>
@endsection
