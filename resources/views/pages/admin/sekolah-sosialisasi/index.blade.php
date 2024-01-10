@extends('layouts.admin.master')
@section('title')
    Sekolah Sosialisasi SMA/SMK
@endsection
@section('page-title')
    Sekolah Sosialisasi SMA/SMK
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
                        <h4 class="card-title">Sekolah Sosialisasi SMA/SMK</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{  route('sekolah.create') }}" class="btn btn-primary mb-3">
                            + Tambah Sekolah Baru
                        </a>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0" id="crudTable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Sekolah</th>
                                    <th>Alamat</th>
                                    <th>Kecamatan</th>
                                    <th>Kabupaten</th>
                                    <th>Kontak</th>
                                    <th>WA</th>
                                    <th>Google Maps</th>
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
            var datatable = $('#crudTable').DataTable({
                processing: true,
                serverSide: true,
                ordering: true,
                ajax: {
                    url: '{!! url()->current() !!}',
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'nama_sekolah', name: 'nama_sekolah'},
                    {data: 'alamat_sekolah', name: 'alamat_sekolah'},
                    {data: 'kecamatan', name: 'kecamatan'},
                    {data: 'kabupaten', name: 'kabupaten'},
                    {data: 'no_hp_wa', name: 'no_hp_wa'},
                    {data: 'whatsapp', name: 'whatsapp'},
                    {data: 'google_maps', name: 'google_maps'},
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
