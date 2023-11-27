@extends('layouts.admin.master')
@section('title')
    Calon Peserta Executive Hybrid
@endsection
@section('page-title')
    Calon Peserta Executive Hybrid
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Calon Peserta Executive Class Registrasi Online</h4>
{{--                        <p class="card-title-desc">--}}
{{--                            Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code>--}}
{{--                            to make them scroll horizontally on small devices (under 768px).--}}
{{--                        </p>--}}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0" id="crudTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Lengkap</th>
                                        <th>Nama Panggilan</th>
                                        <th>Email</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Umur</th>
                                        <th>Alamat</th>
                                        <th>No Hp/WA</th>
                                        <th>No Hp/WA Ortu/Wali</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Pendidikan Terakhir</th>
                                        <th>Asal Sekolah</th>
                                        <th>Jurusan</th>
                                        <th>Tahun Lulus</th>
                                        <th>Pengalaman Kerja</th>
                                        <th>Refrensi Daftar</th>
                                        <th>Program Executive</th>
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
                    { data: 'email', name: 'email' },
                    { data: 'tanggal_lahir', name: 'tanggal_lahir' },
                    { data: 'umur', name: 'umur' },
                    { data: 'alamat', name: 'alamat' },
                    { data: 'no_hp', name: 'no_hp' },
                    { data: 'no_hp_ortu', name: 'no_hp_ortu' },
                    { data: 'jenis_kelamin', name: 'jenis_kelamin' },
                    { data: 'pendidikan_terakhir', name: 'pendidikan_terakhir' },
                    { data: 'asal_sekolah', name: 'asal_sekolah' },
                    { data: 'jurusan', name: 'jurusan' },
                    { data: 'tahun_lulus', name: 'tahun_lulus' },
                    { data: 'pengalaman_kerja', name: 'pengalaman_kerja' },
                    { data: 'jenis_refrensi', name: 'jenis_refrensi' },
                    { data: 'program_executive.nama_program', name: 'program_executive.nama_program' },
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
