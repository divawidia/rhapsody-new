@extends('layouts.admin.master')
@section('title')
    Edit Frequently Asked Question
@endsection
@section('page-title')
    Edit Frequently Asked Question
@endsection
@section('body')
    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-12">
                <form action="{{ route('faq.update', ['faq' => $faq]) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-xl-6">
                            <a href="{{ url()->route('faq.index') }}" class="btn btn-secondary w-auto my-3"><i class="fa fa-arrow-left me-2"></i>Kembali</a>
                        </div>
                        <div class="col-xl-6 d-flex justify-content-end my-3">
                            <button type="submit" class="btn btn-success float-end mx-3"><i class="fa-regular fa-floppy-disk me-2"></i>Simpan</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Data Frequently Asked Question</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="question" class="col-form-label">Pertanyaan</label>
                                <input class="form-control" type="text" name="question" id="question" placeholder="Isikan pertanyaan" value="{{ $faq->question }}" required>
                                @error('question')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="answer" class="col-form-label">Jawaban</label>
                                <textarea class="form-control ckeditor" name="answer" id="answer" required>{{ $faq->answer }}</textarea>
                                @error('answer')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
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
        <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
        <script>
            ClassicEditor.create(document.querySelector('#answer'), {
                toolbar: ['bold', 'italic', 'link', 'bulletedList', 'numberedList'],
            }).catch(error => {
                console.log(error);
            });
        </script>
    @endpush
