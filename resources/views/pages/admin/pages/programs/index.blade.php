@extends('layouts.admin.master')
@section('title')
    Program Pendidikan
@endsection
@section('page-title')
    Program Pendidikan
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
                        <h4 class="modal-title w-100">Tambah Jenis Program Pelatihan</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('programs.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="modal-body">
                                    <div class="mb-3 row">
                                        <div class="col-md-6">
                                            <label for="category_name">Nama Jenis</label>
                                            <div>
                                                <input class="form-control" type="text" autocomplete="off" name="name" id="name" placeholder="Isikan nama jenis program pelatihan" value="{{ old('name') }}">
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="status">Status Publish</label>
                                            <div>
                                                <select class="form-select" name="status" id="status" data-placeholder="Pilih Status Publish" required>
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
                                <button type="submit" class="btn btn-primary w-md">Simpan</button>
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
                        <h4 class="card-title">Kategori Program Pelatihan</h4>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">
                            + Tambah Kategori Program Pelatihan
                        </button>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0" id="programsTable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Program Pelatihan</th>
                                    <th>Slug</th>
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

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Program Pelatihan</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{  route('pelatihan.create') }}" class="btn btn-primary mb-3">
                            + Tambah Program Pelatihan
                        </a>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0" id="programContentsTable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Program Pelatihan</th>
                                    <th>Harga</th>
                                    <th>Batch</th>
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
        <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.8/datatables.min.js"></script>
        <script>
            // AJAX DataTable
            var datatable = $('#programsTable').DataTable({
                processing: true,
                serverSide: true,
                ordering: true,
                ajax: {
                    url: '{!! url()->current() !!}',
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'slug', name: 'slug' },
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
        <script>
            // AJAX DataTable
            var datatable = $('#programContentsTable').DataTable({
                processing: true,
                serverSide: true,
                ordering: true,
                ajax: {
                    url: '{!! url()->route('pelatihan.index') !!}',
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'price', name: 'price' },
                    { data: 'batch', name: 'batch' },
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
