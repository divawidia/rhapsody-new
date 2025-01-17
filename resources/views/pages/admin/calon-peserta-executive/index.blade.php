@extends('layouts.admin.master')
@section('title')
    Calon Peserta Executive Program
@endsection
@section('page-title')
    @yield('title')
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <x-alerts/>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">@yield('title')</h4>
            </div>
            <div class="card-body">
                <x-tables :headers="[
                    '#',
                    'Nama Lengkap',
                    'Nama Panggilan',
                    'Email',
                    'Tanggal Lahir',
                    'Umur',
                    'Alamat',
                    'No Hp/WA',
                    'No Hp/WA Ortu/Wali',
                    'Jenis Kelamin',
                    'Pendidikan Terakhir',
                    'Asal Sekolah',
                    'Jurusan Sekolah',
                    'Tahun Lulus',
                    'Pengalaman Kerja',
                    'Program Dipilih',
                    'Jurusan Dipilih',
                    'Darimana Mengetahui Rhapsody?',
                    'Tanggal Daftar',
                    'Terakhir Diperbarui',
                    'Aksi'
                    ]"
                />
            </div>
        </div>
    @endsection

    @push('addon-script')
        <script>
            $(document).ready(function () {
                $('#table').DataTable({
                    processing: true,
                    serverSide: true,
                    ordering: true,
                    ajax: {
                        url: '{!! url()->current() !!}',
                    },
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
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
                        { data: 'pengalaman_kerja', name: 'pengalaman_kerja'},
                        { data: 'program.program.name', name: 'program.program.name' },
                        { data: 'program.name', name: 'program.name' },
                        { data: 'reference', name: 'reference' },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'updated_at', name: 'updated_at' },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ]
                });
            });
        </script>
    @endpush
