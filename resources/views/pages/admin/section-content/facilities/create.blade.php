@extends('layouts.admin.master')
@section('title')
    Facility Content
@endsection
@push('addon-style')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush
@section('page-title')
    Tambah Facility Content
@endsection

@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-12">
                <form action="{{ route('content.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Facility Content</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="title" class="col-form-label">Title</label>
                                <input class="form-control" type="text" name="title" id="title" placeholder="Isikan nama fasilitas" required>
                                @error('title')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="subtitle" class="col-form-label">Subtitle</label>
                                <input class="form-control" type="text" name="subtitle" id="subtitle" required>
                                @error('subtitle')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="short_description" class="col-form-label">Short Description</label>
                                <textarea class="form-control ckeditor" name="short_description" id="short_description"></textarea>
                                @error('short_description')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="long_decription" class="col-form-label">Long Description</label>
                                <textarea class="form-control ckeditor" name="long_decription" id="long_decription"></textarea>
                                @error('long_decription')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label" for="icon">Icon</label>
                                <input type="file" id="icon" name="icon" class="form-control"/>
                                <img id="preview_icon" class="image-preview mt-3" src="" alt="Icon"/>
                                @error('icon')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label" for="photo-dropzone">Facility Photos</label>
                                <div class="needsclick dropzone" id="photo-dropzone"></div>
                                @error('photo_url')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="float-end mt-4">
                                <a class="btn btn-secondary mx-1 my-1" href="{{ url()->previous() }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit Data">
                                    Kembali
                                </a>
                                <button type="submit" class="btn btn-primary w-md">Submit</button>
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
            const allEditor = document.querySelectorAll('.ckeditor');
            for (var i = 0; i < allEditor.length; i++){
                ClassicEditor.create(allEditor[i], {
                    toolbar: ['bold', 'italic', 'link', 'bulletedList', 'numberedList'],
                }).catch(error => {
                    console.log(error);
                });
            }
        </script>
        <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
        <script>
            let uploadedDocumentMap = {};
            let myDropzone = new Dropzone("div#photo-dropzone",{
                url: '{{ route('uploadImageViaAjax') }}',
                autoProcessQueue: true,
                uploadMultiple: true,
                addRemoveLinks: true,
                parallelUploads: 10,
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                successmultiple: function(data, response) {
                    $.each(response['name'], function (key, val) {
                        $('form').append('<input type="hidden" name="photo_url[]" value="' + val + '">');
                        uploadedDocumentMap[data[key].name] = val;
                    });
                },
                removedfile: function (file) {
                    file.previewElement.remove()
                    let name = '';
                    if (typeof file.file_name !== 'undefined') {
                        name = file.file_name;
                    } else {
                        name = uploadedDocumentMap[file.name];
                    }
                    $('form').find('input[name="photo_url[]"][value="' + name + '"]').remove()
                }
            });
        </script>
        <script>
            icon.onchange = evt => {
                preview = document.getElementById('preview_icon');
                preview.style.display = 'block';
                const [file] = icon.files
                if (file) {
                    preview.src = URL.createObjectURL(file)
                }
            }
        </script>
@endsection
