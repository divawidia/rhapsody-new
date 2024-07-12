@extends('layouts.admin.master')
@section('title')
    Dashboard
@endsection
@section('page-title')
    Dashboard
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pertanyaan Form Kontak</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0" id="contactFormTable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No. Telp</th>
                                    <th>Pesan</th>
                                    <th>Tgl. Dikirim</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Artikel yang Telah Dibuat</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0" id="artikelTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Judul</th>
                                        <th>Dibuat oleh</th>
                                        <th>Tgl. Dibuat</th>
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

    @endsection
    @push('addon-script')
        <script>
            // AJAX DataTable
            var datatable = $('#contactFormTable').DataTable({
                processing: true,
                serverSide: true,
                ordering: true,
                ajax: {
                    url: '{!! url()->route('contact-forms.index') !!}',
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'nama', name: 'nama' },
                    { data: 'email', name: 'email' },
                    { data: 'no_telp', name: 'no_telp' },
                    { data: 'pesan', name: 'pesan' },
                    { data: 'created_at', name: 'created_at' },
                ]
            });
        </script>
        <script>
            // AJAX DataTable
            var datatable = $('#artikelTable').DataTable({
                processing: true,
                serverSide: true,
                ordering: true,
                ajax: {
                    url: '{!! url()->route('posts.dashboard') !!}',
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'title', name: 'title' },
                    { data: 'user.name', name: 'user.name' },
                    { data: 'created_at', name: 'created_at' },
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
    @endpush
    @section('scripts')
        <script src="{{ URL::asset('build/js/pages/dashboard.init.js') }}"></script>
@endsection
