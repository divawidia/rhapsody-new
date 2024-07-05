@extends('layouts.admin.master')

@section('title')
    Facility Page
@endsection
@section('page-title')
    Facility Page
@endsection
@section('body')
    <form>
    @endsection
    @section('content')
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('status') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form action="{{ route('facility-page-update') }}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="row">
                <div class="col-xl-6">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary w-auto my-3"><i class="fa fa-arrow-left me-2"></i>Kembali</a>
                </div>
                <div class="col-xl-6 d-flex justify-content-end my-3">
                    <button type="submit" class="btn btn-success float-end mx-3"><i class="fa-regular fa-floppy-disk me-2"></i>Save & Update</button>
                    <a href="{{ route('contact') }}" class="btn btn-primary"><i class="fa-solid fa-up-right-from-square me-2"></i>Open Page</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Facility Page</h4>
                        </div>
                        <div class="card-body">
                                <div>
                                    <h5 class="font-size-16 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i>
                                        Header Section
                                    </h5>
                                    <div class="mb-3">
                                        <label class="col-form-label" for="banner_video_url">Header Title</label>
                                        <input type="text" id="header_title" name="header_title" class="form-control" required value="{{ $facilityPageData->header_title }}"/>
                                        @error('header_title')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label" for="section2_img1">Header Backgroud Image</label>
                                        <input type="file" id="header_bg" name="header_bg" class="form-control"/>
                                        <img id="preview_header_bg" class="image-preview mt-3" src="{{ Storage::url($facilityPageData->header_bg ?? '') }}" alt="Header Background"/>
                                        @error('header_bg')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <button type="submit" class="btn btn-success w-md float-end"><i class="fa-regular fa-floppy-disk me-2"></i>Save & Update</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Fasilitas</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{  route('content.create') }}" class="btn btn-primary mb-3">
                            + Tambah Fasilitas Baru
                        </a>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0" id="crudTable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Subtitle</th>
                                    <th>Deskripsi Singkat</th>
                                    <th>Deskripsi Lengkap</th>
                                    <th>Icon</th>
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
            <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.8/datatables.min.js"></script>
            <script>
                // AJAX DataTable
                var datatable = $('#crudTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ordering: true,
                    ajax: {
                        url: '{!! url()->route('content.index') !!}',
                    },
                    columns: [
                        {data: 'id', name: 'id'},
                        {data: 'title', name: 'title'},
                        {data: 'subtitle', name: 'subtitle'},
                        {data: 'short_description', name: 'short_description'},
                        {data: 'long_decription', name: 'kabupaten'},
                        {data: 'icon', name: 'icon'},
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
            <script>
                header_bg.onchange = evt => {
                    preview = document.getElementById('preview_header_bg');
                    preview.style.display = 'block';
                    const [file] = header_bg.files
                    if (file) {
                        preview.src = URL.createObjectURL(file)
                    }
                }
            </script>
    @endpush
