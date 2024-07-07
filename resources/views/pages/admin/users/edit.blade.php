@extends('layouts.admin.master')

@section('title')
    Edit User Admin
@endsection
@section('page-title')
    Edit User Admin
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-12">
                <form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit User {{ $user->name }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="status" class="col-md-2 col-form-label">Status Akun</label>
                                <div class="col-md-10 d-flex align-items-center">
                                    @foreach([1 => "Aktif", 0 => "Non Aktif"] AS $status => $status_label)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="{{ $status }}" value={{ $status }} {{ old("status", $user->status) == $status ? "checked" : "" }}>
                                            <label class="form-check-label" for="{{ $status }}">{{ $status_label }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    @endsection

    @section('scripts')
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
        <script>
            thumbnail_photo.onchange = evt => {
                preview = document.getElementById('preview');
                preview.style.display = 'block';
                const [file] = thumbnail_photo.files
                if (file) {
                    preview.src = URL.createObjectURL(file)
                }
            }
        </script>
@endsection
