@extends('layouts.admin.master')
@section('title')
    Tambah Testimoni
@endsection
@section('page-title')
    Tambah Testimoni
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-12">
                <form action="{{ route('company.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-6">
                            <a href="{{ url()->route('company.index') }}" class="btn btn-secondary w-auto my-3"><i class="fa fa-arrow-left me-2"></i>Kembali</a>
                        </div>
                        <div class="col-xl-6 d-flex justify-content-end my-3">
                            <button type="submit" class="btn btn-success float-end mx-3"><i class="fa-regular fa-floppy-disk me-2"></i>Simpan</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Testimoni</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="col-form-label">Nama Perusahaan</label>
                                <input class="form-control" type="text" name="name" id="name" placeholder="Isikan nama perusahaan" value="{{ old('url') }}" required>
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="url" class="col-form-label">URL Website Perusahaan</label>
                                <input class="form-control" type="text" name="url" id="url" value="{{ old('url') }}" required>
                                @error('url')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label" for="company_logo_url">Logo Perusahaan</label>
                                <input type="file" id="company_logo_url" name="company_logo_url" class="form-control"/>
                                <img id="preview_logo" class="image-preview mt-3" src="{{ Storage::url(old('company_logo_url')) }}" alt="Icon"/>
                                @error('company_logo_url')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-success float-end mx-3"><i class="fa-regular fa-floppy-disk me-2"></i>Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    @endsection
    @section('scripts')
        <script>
            company_logo_url.onchange = evt => {
                preview = document.getElementById('preview_logo');
                preview.style.display = 'block';
                const [file] = company_logo_url.files
                if (file) {
                    preview.src = URL.createObjectURL(file)
                }
            }
        </script>
@endsection
