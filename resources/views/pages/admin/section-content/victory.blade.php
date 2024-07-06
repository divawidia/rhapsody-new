@extends('layouts.admin.master')

@section('title')
    Victory Section
@endsection
@section('page-title')
    Victory Section
@endsection
@section('body')
    <form>
    @endsection
    @section('content')
        <form action="{{ route('victory-section-update') }}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="row">
                <div class="col-xl-6">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary w-auto my-3"><i class="fa fa-arrow-left"></i>  Kembali</a>
                </div>
                <div class="col-xl-6 d-flex justify-content-end my-3">
                    <button type="submit" class="btn btn-success float-end mx-3">Save & Update</button>
                    <a href="{{ route('home') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-up-right-from-square"></i>  Open URL</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Victory Section</h4>
                        </div>
                        <div class="card-body">
                                    <div class="mb-3">
                                        <label for="victory_section_title" class="col-form-label">Section Title</label>
                                        <input class="form-control" type="text" name="victory_section_title" id="victory_section_title" value="{{ $victory->victory_section_title }}" required>
                                        @error('victory_section_title')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="victory_section_body" class="col-form-label">Section Body</label>
                                        <textarea class="form-control" id="victory_section_body" name="victory_section_body">@php echo $victory->victory_section_body @endphp</textarea>
                                        @error('victory_section_body')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="victory_section_btn_text" class="col-form-label">Button Text</label>
                                                <input class="form-control" type="text" name="victory_section_btn_text" id="victory_section_btn_text" value="{{ $victory->victory_section_btn_text }}" required>
                                                @error('victory_section_btn_text')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label class="col-form-label" for="victory_section_btn_url">Button URL</label>
                                                <input type="text" id="victory_section_btn_url" name="victory_section_btn_url" class="form-control" required value="{{ $victory->victory_section_btn_url }}"/>
                                                @error('victory_section_btn_url')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label class="col-form-label" for="victory_section_btn_icon">Button Icon</label>
                                                <input type="file" id="victory_section_btn_icon" name="victory_section_btn_icon" class="form-control"/>
                                                <img id="preview_btn_icon" class="rounded img-thumbnail mt-3" src="{{ Storage::url($victory->victory_section_btn_icon ?? '') }}" alt="image thumbnail"/>
                                                @error('victory_section_btn_icon')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label" for="victory_section_bg">Button Icon</label>
                                        <input type="file" id="victory_section_bg" name="victory_section_bg" class="form-control"/>
                                        <img id="preview_section_bg" class="rounded img-thumbnail mt-3" src="{{ Storage::url($victory->victory_section_bg ?? '') }}" alt="image thumbnail"/>
                                        @error('victory_section_bg')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mt-5">
                                        <button type="submit" class="btn btn-primary w-md float-end">Save & Update</button>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endsection

    @section('scripts')
        <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
        <script>
            ClassicEditor.create( document.querySelector( '#victory_section_body' ),{
                toolbar: ['bold', 'italic', 'link', 'bulletedList', 'numberedList'],
            })
                .catch( error => {
                    console.error( error );
                } );
        </script>
        <script>
            victory_section_btn_icon.onchange = evt => {
                preview = document.getElementById('preview_btn_icon');
                preview.style.display = 'block';
                const [file] = victory_section_btn_icon.files
                if (file) {
                    preview.src = URL.createObjectURL(file)
                }
            }
            victory_section_bg.onchange = evt => {
                preview = document.getElementById('preview_section_bg');
                preview.style.display = 'block';
                const [file] = victory_section_bg.files
                if (file) {
                    preview.src = URL.createObjectURL(file)
                }
            }
        </script>
@endsection
