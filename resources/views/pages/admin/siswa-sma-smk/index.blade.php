@extends('layouts.admin.master')
@section('title')
    Sosialisasi SMA/SMK
@endsection
@section('page-title')
    Sosialisasi SMA/SMK
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
                        <h4 class="card-title">Absensi Sosialisasi Siswa SMA SMK</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{  route('siswa-sma-smk.create') }}" class="btn btn-primary mb-3">
                            + Tambah Siswa SMA/SMK Baru
                        </a>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0" id="crudTable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Lengkap</th>
                                    <th>Nama Panggilan</th>
                                    <th>No. Hp</th>
                                    <th>Whatsapp</th>
                                    <th>Asal Sekolah</th>
                                    <th>Jadwal Sosialisasi</th>
                                    <th>Jurusan</th>
                                    <th>Program yang Diminati</th>
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
                    { data: 'id', name: 'id' },
                    { data: 'nama_lengkap', name: 'nama_lengkap' },
                    { data: 'nama_panggilan', name: 'nama_panggilan' },
                    { data: 'no_hp', name: 'no_hp' },
                    { data: 'whatsapp', name: 'whatsapp'},
                    { data: 'sekolah.nama_sekolah', name: 'sekolah.nama_sekolah' },
                    { data: 'sosialisasi', name: 'sosialisasi' },
                    { data: 'jurusan', name: 'jurusan' },
                    { data: 'program_diminati', name: 'program_diminati' },
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
