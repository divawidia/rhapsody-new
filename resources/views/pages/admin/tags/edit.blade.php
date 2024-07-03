@extends('layouts.admin.master')
@section('title')
    Edit Tag Artikel Blog
@endsection
@section('page-title')
    Edit Tag Artikel Blog
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-12">
                <form action="{{ route('tags.update', ['tag' => $tag]) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Data Tag Artikel Blog</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <label for="tag_name">Nama Tag</label>
                                    <input class="form-control" type="text" autocomplete="off" name="tag_name" id="tag_name" value="{{ $tag->tag_name }}">
                                    @error('tag_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="status">Status Publish Tag</label>
                                    <div>
                                        <select class="form-select" name="status" id="status" data-placeholder="Pilih Status Kategori" required>
                                            <option value="" selected disabled>Pilih Status Artikel</option>
                                            @foreach([1 => "Publish", 0 => "Private"] AS $status => $status_label)
                                                <option value="{{ $status }}" {{ old("status", $tag->status) == $status ? "selected" : "" }}>{{ $status_label }}</option>
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
                    placeholder: "Pilih Status Publish",
                    width:'100%',
                    theme: 'bootstrap-5'
                });
            });
        </script>
    @endpush
