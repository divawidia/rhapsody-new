@extends('layouts.admin.master')
@section('title')
    Pertanyaan Diterima
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
                    'Nama',
                    'Email',
                    'No Hp/WA',
                    'Pesan Pertanyaan',
                    'Tanggal Dikirim',
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
                        { data: 'nama', name: 'nama' },
                        { data: 'email', name: 'email' },
                        { data: 'no_telp', name: 'no_telp' },
                        { data: 'pesan', name: 'pesan' },
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
