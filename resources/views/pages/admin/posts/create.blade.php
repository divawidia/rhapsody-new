@extends('layouts.admin.master')

@section('title')
    Tambah Artikel
@endsection
{{--@section('css')--}}
{{--    <link rel="stylesheet" href="{{ URL::asset('build/js/jpreview/jpreview.css') }}" type="text/css" />--}}
{{--    @endsection--}}
@section('page-title')
    Tambah Artikel
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-12">
                <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Artikel</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label">Thumbnail Artikel</label>
                                <div class="col-md-10">
                                    <input type="file" id="thumbnail_photo" name="thumbnail_photo" class="form-control" accept="image/*" required value="{{ old('thumbnail_photo') }}"/>
                                    <img id="preview" class="rounded img-thumbnail mt-3" src="{{ old('thumbnail_photo') }}" alt="image thumbnail" style="display:none;"/>
                                    @error('thumbnail_photo')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="title" class="col-md-2 col-form-label">Judul Artikel</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" autocomplete="off" name="title" id="title" value="{{ old('title') }}">
                                    @error('title')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="body" class="col-md-2 col-form-label">Isi Konten Artikel</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" id="body" name="body">{{ old('body') }}</textarea>
                                    @error('body')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label" for="category">Kategori Artikel</label>
                                <div class="col-md-10">
                                    <select class="form-select" name="category_id" id="category" required>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label" for="tag">Tag Artikel</label>
                                <div class="col-md-10">
                                    <select class="form-select" name="tag_id[]" multiple="multiple" id="tag" required>
                                        @foreach($tags as $tag)
                                            <option value="{{ $tag->id }}">{{ $tag->tag_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('tags')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label" for="status_artikel">Status Publish Artikel</label>
                                <div class="col-md-10">
                                    <select class="form-select" name="status" id="status_artikel" required>
                                        @foreach([1 => "Publish", 0 => "Private"] AS $status => $status_label)
                                            <option value="{{ $status }}">{{ $status_label }}</option>
                                        @endforeach
                                        @error('status')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </select>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    @endsection

    @push('addon-script')
        <!-- App js -->
        <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
        <script>
            ClassicEditor.create( document.querySelector( '#body' ),{
                ckfinder: {
                    uploadUrl: '{{route('blog-photo-upload', ['_token' => csrf_token()])}}'
                }
            })
                .catch( error => {
                    console.error( error );
                } );
        </script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#category').select2({
                    placeholder: "Pilih Kategori Artikel",
                    width:'100%',
                    theme: 'bootstrap-5'
                });
                $('#tag').select2({
                    width:'100%',
                    tags: true,
                    theme: 'bootstrap-5',
                    placeholder: "Pilih Tag Artikel"
                });
                $('#status_artikel').select2({
                    width:'100%',
                    theme: 'bootstrap-5',
                    placeholder: "Pilih Status Artikel"
                });
            });
        </script>
        <script>
            thumbnail_photo.onchange = evt => {
                preview = document.getElementById('preview');
                preview.style.display = 'block';
                const [file] = thumbnail_photo.files
                if (file) {
                    preview.src = URL.createObjectURL(file)
                }
            }
        </script>
    @endpush
