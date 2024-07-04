@extends('layouts.admin.master')

@section('title')
    Contact Page
@endsection
@section('page-title')
    Contact Page
@endsection
@section('body')
    <form>
    @endsection
    @section('content')
        <form action="{{ route('contact-page-update') }}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="row">
                <div class="col-xl-6">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary w-auto my-3"><i class="fa fa-arrow-left me-2"></i>Kembali</a>
                </div>
                <div class="col-xl-6 d-flex justify-content-end my-3">
                    <button type="submit" class="btn btn-success float-end mx-3"><i class="fa-regular fa-floppy-disk me-2"></i>Save & Update</button>
                    <a href="{{ route('contact-us') }}" class="btn btn-primary"><i class="fa-solid fa-up-right-from-square me-2"></i>Open URL</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit About Page</h4>
                        </div>
                        <div class="card-body">
                                <div>
                                    <h5 class="font-size-16 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i>
                                        Header Section
                                    </h5>
                                    <div class="mb-3">
                                        <label class="col-form-label" for="banner_video_url">Header Title</label>
                                        <input type="text" id="header_title" name="header_title" class="form-control" required value="{{ $contactData->header_title }}"/>
                                        @error('header_title')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label" for="section2_img1">Header Backgroud Image</label>
                                        <input type="file" id="header_bg" name="header_bg" class="form-control"/>
                                        <img id="preview_header_bg" class="image-preview mt-3" src="{{ Storage::url($contactData->header_bg ?? '') }}" alt="Header Background"/>
                                        @error('header_bg')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="row mb-4 mt-5">
                                            <h5 class="font-size-16"><i class="mdi mdi-arrow-right text-primary me-1"></i>
                                                Header 2
                                            </h5>
                                    </div>
                                    <div class="mb-3">
                                        <label for="header2_title" class="col-form-label">Header 2 Title</label>
                                            <input class="form-control" type="text" name="header2_title" id="header2_title" value="{{ $contactData->header2_title }}" required>
                                            @error('header2_title')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="header2_subtitle" class="col-form-label">Header 2 Subtitle</label>
                                            <textarea class="form-control ckeditor" id="header2_subtitle" name="header2_subtitle">@php echo $contactData->header2_subtitle @endphp</textarea>
                                            @error('header2_subtitle')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="jam_kerja" class="col-form-label">Jam Kerja</label>
                                        <input class="form-control" type="text" name="jam_kerja" id="jam_kerja" value="{{ $contactData->jam_kerja }}" required>
                                            @error('jam_kerja')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="alamat" for="section2_img">Alamat</label>
                                        <textarea class="form-control" id="alamat" name="alamat">@php echo $contactData->alamat @endphp</textarea>
                                        @error('alamat')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="no_telp" class="col-form-label">No. Telp</label>
                                        <input class="form-control" type="text" name="no_telp" id="no_telp" value="{{ $contactData->no_telp }}" required>
                                        @error('no_telp')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="col-form-label">Email</label>
                                        <input class="form-control" type="email" name="email" id="email" value="{{ $contactData->email }}" required>
                                        @error('email')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="google_maps" class="col-form-label">Header 2 Subtitle</label>
                                        <textarea class="form-control" id="google_maps" name="google_maps">@php echo $contactData->google_maps @endphp</textarea>
                                        @error('google_maps')
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
    @endsection

    @section('scripts')
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
        <script>
            const allEditor = document.querySelectorAll('.ckeditor');
            for (var i = 0; i < allEditor.length; i++){
                ClassicEditor.create(allEditor[i], {
                        toolbar: ['bold', 'italic', 'link', 'bulletedList', 'numberedList'],
                    }).catch(error => {
                        console.log(error);
                    });
            }
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
@endsection
