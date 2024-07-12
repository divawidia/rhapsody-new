@extends('layouts.admin.master')
@section('title')
    Kategori Artikel
@endsection
@section('page-title')
    Kategori Artikel
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
        @endif
        <div id="addModal" class="modal fade" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-confirm modal-dialog-centered">
                <div class="modal-content d-flex justify-content-center">
                    <div class="modal-header">
                        <h4 class="modal-title w-100">Tambah Kategori Artikel</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="modal-body">
                                    <div class="mb-3 row">
                                        <div class="col-md-6">
                                            <label for="category_name">Nama Kategori</label>
                                            <div>
                                                <input class="form-control" type="text" autocomplete="off" name="category_name" id="category_name" placeholder="Isikan nama kategori artikel" value="{{ old('category_name') }}">
                                                @error('category_name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="status">Status Publish Kategori</label>
                                            <div>
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
                                    </div>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                <button type="button" class="btn btn-outline-secondary w-md" data-bs-dismiss="modal" aria-label="Close">Batal</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Kategori Artikel</h4>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">
                            + Tambah Kategori Baru
                        </button>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0" id="categoryTable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Kategori</th>
                                    <th>Slug</th>
                                    <th>Dibuat Oleh</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    @endsection
    @push('addon-script')
        <script>
            // AJAX DataTable
            var datatable = $('#categoryTable').DataTable({
                processing: true,
                serverSide: true,
                ordering: true,
                ajax: {
                    url: '{!! url()->current() !!}',
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'category_name', name: 'category_name' },
                    { data: 'slug', name: 'slug' },
                    { data: 'user.name', name: 'user.name' },
                    { data: 'status', name: 'status' },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        width: '15%'
                    },
                ]
            });
        </script>
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
