@extends('layouts.admin.master')
@section('title')
    Jadwal Sosialisasi SMA/SMK
@endsection
@section('page-title')
    Jadwal Sosialisasi SMA/SMK
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
                        <h4 class="card-title">Jadwal Sosialisasi SMA/SMK</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{  route('jadwal-sosialisasi.create') }}" class="btn btn-primary mb-3">
                            + Tambah Jadwal Sosialisasi Baru
                        </a>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0" id="crudTable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tanggal Sosialisasi</th>
                                    <th>Jam Sosialisasi</th>
                                    <th>Lama Sesi Sosialisasi</th>
                                    <th>Nama Sekolah</th>
                                    <th>Alamat Sekolah</th>
                                    <th>Kecamatan</th>
                                    <th>Kabupaten</th>
                                    <th>Kontak</th>
                                    <th>Whatsapp</th>
                                    <th>Google Maps</th>
                                    <th>Tempat Sosialisasi</th>
                                    <th>Jumlah Siswa</th>
                                    <th>Proyektor</th>
                                    <th>Speaker</th>
                                    <th>Status Sosialisasi</th>
                                    <th>Status Follow Up</th>
                                    <th>Note</th>
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
                    {data: 'tanggal_sosialisasi', name: 'tanggal_sosialisasi'},
                    {data: 'jam_sosialisasi', name: 'jam_sosialisasi'},
                    {data: 'lama_sesi', name: 'lama_sesi'},
                    {data: 'sekolah.nama_sekolah', name: 'sekolah.nama_sekolah'},
                    {data: 'sekolah.alamat_sekolah', name: 'sekolah.alamat_sekolah'},
                    {data: 'sekolah.kecamatan', name: 'sekolah.kecamatan'},
                    {data: 'sekolah.kabupaten', name: 'sekolah.kabupaten'},
                    {data: 'sekolah.no_hp_wa', name: 'sekolah.no_hp_wa'},
                    {data: 'whatsapp', name: 'whatsapp'},
                    {data: 'sekolah.google_maps', name: 'sekolah.google_maps'},
                    {data: 'tempat_sosialisasi', name: 'tempat_sosialisasi'},
                    {data: 'jumlah_siswa', name: 'jumlah_siswa'},
                    {data: 'proyektor', name: 'proyektor'},
                    {data: 'speaker', name: 'speaker'},
                    {data: 'status_sosialisasi', name: 'status_sosialisasi'},
                    {data: 'status_follup', name: 'status_follup'},
                    {data: 'note', name: 'note'},
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
