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
        <x-alerts/>

        <div class="row">
            <div class="col-md-4">
                <x-cards.overview-stats title="Form Pertanyaan" value="23 Pertanyaan" icon="bx bx-calendar" :route="route('admin-dashboard')" />
            </div>

            <div class="col-md-4">
                <x-cards.overview-stats title="Artikel Dibuat" value="23 Artikel" icon="bx bx-file" :route="route('admin-dashboard')" />
            </div>

            <div class="col-md-4">
                <x-cards.overview-stats title="Pendaftar Calon SIswa" value="23 Siswa" icon="bx bx-book" :route="route('admin-dashboard')" />
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Pertanyaan Form Kontak</h4>
            </div>
            <div class="card-body">
                <x-tables :headers="['#', 'Nama', 'Email', 'No. Telp', 'Pesan','Tgl. Dikirim']" tableId="contactFormTable"/>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Artikel yang Telah Dibuat</h4>
            </div>
            <div class="card-body">
                <x-tables :headers="['#', 'Judul', 'Dibuat oleh', 'Tgl. Dibuat', 'Status','Aksi']" tableId="artikelTable"/>
            </div>
        </div>

    @endsection
    @push('addon-script')
        <script>
            $(document).ready(function () {
                $('#contactFormTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ordering: true,
                    ajax: {
                        url: '{!! url()->route('contact-forms.index') !!}',
                    },
                    columns: [
                        {data: 'id', name: 'id'},
                        {data: 'nama', name: 'nama'},
                        {data: 'email', name: 'email'},
                        {data: 'no_telp', name: 'no_telp'},
                        {data: 'pesan', name: 'pesan'},
                        {data: 'created_at', name: 'created_at'},
                    ]
                });
                $('#artikelTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ordering: true,
                    ajax: {
                        url: '{!! url()->route('posts.dashboard') !!}',
                    },
                    columns: [
                        {data: 'id', name: 'id'},
                        {data: 'title', name: 'title'},
                        {data: 'user.name', name: 'user.name'},
                        {data: 'created_at', name: 'created_at'},
                        {data: 'status', name: 'status'},
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false,
                            width: '15%'
                        },
                    ]
                });
            });
        </script>
    @endpush
