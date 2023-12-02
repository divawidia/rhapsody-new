@extends('layouts.admin.master')
@section('title')
    Postingan Artikel
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
            <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                <h4 class="card-title">@yield('title')</h4>
                <x-buttons.link-button color="success" icon="plus" text="Tambah Postingan Artikel" :route="route('posts.create')"/>
            </div>
            <div class="card-body">
                <x-tables :headers="[
                    '#',
                    'Judul',
                    'Slug',
                    'Thumbnail',
                    'Body',
                    'Kategori',
                    'Tags',
                    'Views',
                    'Status',
                    'Tanggal Dibuat',
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
                        { data: 'title', name: 'title' },
                        { data: 'slug', name: 'slug' },
                        { data: 'thumbnail_photo', name: 'thumbnail_photo' },
                        { data: 'body', name: 'body' },
                        { data: 'category.category_name', name: 'category.category_name' },
                        { data: 'tags.tag_name', name: 'tags.tag_name' },
                        { data: 'views', name: 'views' },
                        { data: 'status', name: 'status' },
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
