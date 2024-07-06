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
                <form action="{{ route('testimoni.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-6">
                            <a href="{{ url()->route('testimoni.index') }}" class="btn btn-secondary w-auto my-3"><i class="fa fa-arrow-left me-2"></i>Kembali</a>
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
                                <label for="name" class="col-form-label">Nama</label>
                                    <input class="form-control" type="text" name="name" id="name" placeholder="Isikan nama siswa/alumni" value="{{ old('name') }}">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="mb-3">
                                <label for="company" class="col-form-label">Nama Perusahaan/Kapal</label>
                                <input class="form-control" type="text" name="company" id="company" value="{{ old('company') }}">
                                @error('company')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="position" class="col-form-label">Posisi Pekerjaan</label>
                                <input class="form-control" type="text" name="position" id="position" value="{{ old('position') }}">
                                @error('position')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="onboard_year" class="col-form-label">Tahun Onboard</label>
                                <input class="form-control" type="text" name="onboard_year" id="onboard_year" value="{{ old('onboard_year') }}">
                                @error('onboard_year')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="testimony" class="col-form-label">Testimoni</label>
                                <textarea class="form-control ckeditor" name="testimony" id="testimony">{{ old('testimony') }}</textarea>
                                @error('testimony')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label" for="photo_url">Foto Siswa/Alumni</label>
                                <input type="file" id="photo_url" name="photo_url" class="form-control"/>
                                <img id="preview_photo" class="image-preview mt-3" src="" alt="Icon"/>
                                @error('photo_url')
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
        <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
        <script>
                ClassicEditor.create(document.querySelector('#testimony'), {
                    toolbar: ['bold', 'italic', 'link', 'bulletedList', 'numberedList'],
                }).catch(error => {
                    console.log(error);
                });
        </script>
        <script>
            photo_url.onchange = evt => {
                preview = document.getElementById('preview_photo');
                preview.style.display = 'block';
                const [file] = photo_url.files
                if (file) {
                    preview.src = URL.createObjectURL(file)
                }
            }
        </script>
@endsection
