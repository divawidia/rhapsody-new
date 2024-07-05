@extends('layouts.admin.master')
@section('title')
    Edit Kategori Artikel
@endsection
@section('page-title')
    Edit Kategori Artikel
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-12">
                <form action="{{ route('programs.update', ['program' => $program]) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Data Kategori Program Pendidikan </h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <label for="name">Nama Kategori</label>
                                    <input class="form-control" type="text" autocomplete="off" name="name" id="name" value="{{ $program->name }}">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="status">Status Publish</label>
                                    <div>
                                        <select class="form-select" name="status" id="status" data-placeholder="Pilih Status Publish" required>
                                            <option value="" selected disabled>Pilih Status Publish</option>
                                            @foreach([1 => "Publish", 0 => "Private"] AS $status => $status_label)
                                                <option value="{{ $status }}" {{ old("status", $program->status) == $status ? "selected" : "" }}>{{ $status_label }}</option>
                                            @endforeach
                                            @error('status')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </select>
                                    </div>
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
    @push('addon-script')
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#status').select2({
                    placeholder: "Pilih Status Publikasi",
                    width:'100%',
                    theme: 'bootstrap-5'
                });
            });
        </script>
    @endpush
