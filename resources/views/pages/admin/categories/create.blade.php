@extends('layouts.admin.master')
@section('title')
    Tambah Kategori Artikel
@endsection
@section('page-title')
    Tambah Kategori Artikel
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-12">
                <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                    @csrf.
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Kategori Artikel</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Nama Kategori</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" autocomplete="off" name="category_name" id="category_name" placeholder="Isikan nama kategori artikel" value="{{ old('category_name') }}">
                                    @error('category_name')
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
