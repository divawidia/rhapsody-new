@extends('layouts.admin.master')
@section('title')
    Testimony Section
@endsection
@section('page-title')
    Testimony Section
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
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Testimony Section</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{  route('testimoni.create') }}" class="btn btn-primary mb-3">
                            + Tambah Testimoni
                        </a>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0" id="testimoniTable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Company</th>
                                    <th>Posisi</th>
                                    <th>Tahun Onboard</th>
                                    <th>Foto</th>
                                    <th>Testimoni</th>
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
            var datatable = $('#testimoniTable').DataTable({
                processing: true,
                serverSide: true,
                ordering: true,
                ajax: {
                    url: '{!! url()->current() !!}',
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'company', name: 'company' },
                    { data: 'position', name: 'position' },
                    { data: 'onboard_year', name: 'onboard_year' },
                    { data: 'photo_url', name: 'photo_url' },
                    { data: 'testimony', name: 'testimony' },
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
    @endpush
