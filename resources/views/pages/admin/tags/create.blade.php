@extends('layouts.admin.master')
@section('title')
    Tambah Tag Artikel Blog
@endsection
@section('page-title')
    Tambah Tag Artikel Blog
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-12">
                <form action="{{ route('tags.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Tag Artikel Blog</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Nama Tag</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" autocomplete="off" name="tag_name" id="tag_name" placeholder="Isikan nama tag" value="{{ old('tag_name') }}">
                                    @error('tag_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label" for="status">Status Publish Kategori</label>
                                <div class="col-md-10">
                                    <select class="form-select" name="status" id="status" data-placeholder="Pilih Status Kategori" required>
                                        <option value="" selected disabled>Pilih Status Artikel</option>
                                        @foreach([1 => "Publish", 0 => "Private"] AS $status => $status_label)
                                            <option value="{{ $status }}">{{ $status_label }}</option>
                                        @endforeach
                                        @error('status')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </select>
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
