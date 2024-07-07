@extends('layouts.admin.master')

@section('title')
    Home Page
@endsection
@section('page-title')
    Home Page
@endsection
@section('body')
    <form>
    @endsection
    @section('content')
        <form action="{{ route('home-page-update') }}" method="post" enctype="multipart/form-data">
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
                            <h4 class="card-title">Edit Home Page</h4>
                        </div>
                        <div class="card-body">
                                <div>
                                    <h5 class="font-size-16 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i>
                                        Banner Section
                                    </h5>
                                    <div class="mb-3">
                                        <label class="col-form-label" for="banner_video_url">Banner Video Url</label>
                                        <input type="text" id="banner_video_url" name="banner_video_url" class="form-control" required value="{{ $homeData->banner_video_url }}"/>
                                        @error('banner_video_url')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="banner_title" class="col-form-label">Banner Title</label>
                                        <input class="form-control" type="text" name="banner_title" id="banner_title" value="{{ $homeData->banner_title }}" required>
                                        @error('banner_title')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="banner_subtitle" class="col-form-label">Banner Subtitle</label>
                                        <textarea class="form-control" id="banner_subtitle" name="banner_subtitle">@php echo $homeData->banner_subtitle @endphp</textarea>
                                        @error('banner_subtitle')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label" for="daftar_btn_text">Text Button Daftar</label>
                                        <input class="form-control" type="text" name="daftar_btn_text" id="daftar_btn_text" value="{{ $homeData->daftar_btn_text }}" required>
                                        @error('daftar_btn_text')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label" for="daftar_btn_url">URL Button Daftar</label>
                                        <input class="form-control" type="text" name="daftar_btn_url" id="daftar_btn_url" value="{{ $homeData->daftar_btn_url }}" required>
                                        @error('daftar_btn_url')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="row mb-4 mt-5">
                                        <div class="col-xl-6">
                                            <h5 class="font-size-16"><i class="mdi mdi-arrow-right text-primary me-1"></i>
                                                Section 2
                                            </h5>
                                        </div>
                                        <div class="col-xl-6 d-flex justify-content-end">
                                            <h5 class="font-size-16 mx-3">
                                                Publish Status Section 2
                                            </h5>
                                            @if($homeData->section2_status == 1)
                                                <input type="checkbox" name="section2_status" id="section2_status" switch="success" value="1" checked/>
                                            @else
                                                <input type="checkbox" name="section2_status" id="section2_status" switch="success" value="1" >
                                            @endif
                                            <label for="section2_status" data-on-label="On" data-off-label="Off"></label>
                                        </div>
                                        @error('section2_status')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="section2_title" class="col-form-label">Section 2 Title</label>
                                            <input class="form-control" type="text" name="section2_title" id="section2_title" value="{{ $homeData->section2_title }}" required>
                                            @error('section2_title')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="section2_subtitle" class="col-form-label">Section 2 Subtitle</label>
                                            <textarea class="form-control" id="section2_subtitle" name="section2_subtitle">@php echo $homeData->section2_subtitle @endphp</textarea>
                                            @error('section2_subtitle')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="section2_body" class="col-form-label">Section 2 Body</label>
                                            <textarea class="form-control" id="section2_body" name="section2_body">@php echo $homeData->section2_body @endphp</textarea>
                                            @error('section2_body')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-xl-3">
                                                <label class="col-form-label" for="section2_img1">Section 2 Image 1</label>
                                                <input type="file" id="section2_img1" name="section2_img1" class="form-control" value="{{ $homeData->section2_img1 }}"/>
                                                <img id="preview_img1" class="rounded img-thumbnail mt-3" src="{{ Storage::url($homeData->section2_img1 ?? '') }}" alt="image thumbnail"/>
                                                @error('section2_img1')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-xl-3">
                                                <label class="col-form-label" for="section2_img2">Section 2 Image 2</label>
                                                <input type="file" id="section2_img2" name="section2_img2" class="form-control" value="{{ $homeData->section2_img2 }}"/>
                                                <img id="preview_img2" class="rounded img-thumbnail mt-3" src="{{ Storage::url($homeData->section2_img2 ?? '') }}" alt="image thumbnail"/>
                                                @error('section2_img2')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-xl-3">
                                                <label class="col-form-label" for="section2_img3">Section 2 Image 3</label>
                                                <input type="file" id="section2_img3" name="section2_img3" class="form-control" value="{{ $homeData->section2_img3 }}"/>
                                                <img id="preview_img3" class="rounded img-thumbnail mt-3" src="{{ Storage::url($homeData->section2_img3 ?? '') }}" alt="image thumbnail"/>
                                                @error('section2_img3')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-xl-3">
                                                <label class="col-form-label" for="section2_img4">Section 2 Image 4</label>
                                                <input type="file" id="section2_img4" name="section2_img4" class="form-control" value="{{ $homeData->section2_img4 }}"/>
                                                <img id="preview_img4" class="rounded img-thumbnail mt-3" src="{{ Storage::url($homeData->section2_img4 ?? '') }}" alt="image thumbnail"/>
                                                @error('section2_img4')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row mb-4 mt-5">
                                        <div class="col-xl-6">
                                            <h5 class="font-size-16"><i class="mdi mdi-arrow-right text-primary me-1"></i>
                                                Program Section
                                            </h5>
                                        </div>
                                        <div class="col-xl-6 d-flex justify-content-end">
                                            <h5 class="font-size-16 mx-3">
                                                Publish Status Program Section
                                            </h5>
                                            @if($homeData->program_section_status == 1)
                                                <input type="checkbox" name="program_section_status" id="program_section_status" switch="success" value="1" checked/>
                                            @else
                                                <input type="checkbox" name="program_section_status" id="program_section_status" switch="success" value="1">
                                            @endif
                                            <label for="program_section_status" data-on-label="On" data-off-label="Off"></label>
                                        </div>
                                        @error('program_section_status')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="program_section_title" class="col-form-label">Program Section Title</label>
                                        <input class="form-control" type="text" name="program_section_title" id="program_section_title" value="{{ $homeData->program_section_title }}" required>
                                        @error('program_section_title')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="program_section_subtitle" class="col-form-label">Program Section Subtitle</label>
                                        <textarea class="form-control" id="program_section_subtitle" name="program_section_subtitle">@php echo $homeData->program_section_subtitle @endphp</textarea>
                                        @error('program_section_subtitle')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="row mb-4 mt-5">
                                        <div class="col-xl-6">
                                            <h5 class="font-size-16"><i class="mdi mdi-arrow-right text-primary me-1"></i>
                                                Fasilitas Section
                                            </h5>
                                        </div>
                                        <div class="col-xl-6 d-flex justify-content-end">
                                            <h5 class="font-size-16 mx-3">
                                                Publish Status Fasilitas Section
                                            </h5>
                                            @if($homeData->fasilitas_section_status == 1)
                                                <input type="checkbox" name="fasilitas_section_status" id="fasilitas_section_status" switch="success" value="1" checked />
                                            @else
                                                <input type="checkbox" name="fasilitas_section_status" id="fasilitas_section_status" switch="success" value="1" >
                                            @endif
                                            <label for="fasilitas_section_status" data-on-label="On" data-off-label="Off"></label>
                                        </div>
                                        @error('fasilitas_section_status')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="fasilitas_section_title" class="col-form-label">Fasilitas Section Title</label>
                                        <input class="form-control" type="text" name="fasilitas_section_title" id="fasilitas_section_title" value="{{ $homeData->fasilitas_section_title }}" required>
                                        @error('fasilitas_section_title')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="fasilitas_section_subtitle" class="col-form-label">Fasilitas Section Subtitle</label>
                                        <textarea class="form-control" id="fasilitas_section_subtitle" name="fasilitas_section_subtitle">@php echo $homeData->fasilitas_section_subtitle @endphp</textarea>
                                        @error('fasilitas_section_subtitle')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label" for="fasilitas_section_img">Fasilitas Section Image</label>
                                        <input type="file" id="fasilitas_section_img" name="fasilitas_section_img" class="form-control" value="{{ $homeData->fasilitas_section_img }}"/>
                                        <img id="preview_fasilitas_img" class="rounded img-thumbnail mt-3" src="{{ Storage::url($homeData->fasilitas_section_img ?? '') }}" alt="image thumbnail"/>
                                        @error('fasilitas_section_img')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="fasilitas_section_title2" class="col-form-label">Fasilitas Section Title 2</label>
                                        <input class="form-control" type="text" name="fasilitas_section_title2" id="fasilitas_section_title2" value="{{ $homeData->fasilitas_section_title2 }}" required>
                                        @error('fasilitas_section_title2')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="fasilitas_section_subtitle2" class="col-md-2 col-form-label">Fasilitas Section Subtitle 2</label>
                                        <textarea class="form-control" id="fasilitas_section_subtitle2" name="fasilitas_section_subtitle2">@php echo $homeData->fasilitas_section_subtitle2 @endphp</textarea>
                                        @error('fasilitas_section_subtitle2')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="row mb-4 mt-5">
                                        <div class="col-xl-6">
                                            <h5 class="font-size-16"><i class="mdi mdi-arrow-right text-primary me-1"></i>
                                                Victory Section
                                            </h5>
                                        </div>
                                        <div class="col-xl-6 d-flex justify-content-end">
                                            <h5 class="font-size-16 mx-3">
                                                Publish Status Victory Section
                                            </h5>
                                            @if($homeData->victory_section_status == 1)
                                                <input type="checkbox" name="victory_section_status" id="victory_section_status" switch="success" value="1" checked />
                                            @else
                                                <input type="checkbox" name="victory_section_status" id="victory_section_status" switch="success" value="1" >
                                            @endif
                                            <label for="victory_section_status" data-on-label="Aktif" data-off-label="Nonaktif"></label>
                                        </div>
                                        @error('victory_section_status')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
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
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

        <script>
            ClassicEditor.create( document.querySelector( '#section2_body' ),{
                ckfinder: {
                    uploadUrl: '{{route('blog-photo-upload', ['_token' => csrf_token()])}}'
                }
            })
                .catch( error => {
                    console.error( error );
                } );
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                // var values = $('#tags option[selected="true"]').map(function() { return $(this).val(); }).get();
                $('.form-select').select2({
                    width:'100%',
                    theme: 'bootstrap-5'
                });
            });
        </script>
        <script>
            section2_img1.onchange = evt => {
                preview = document.getElementById('preview_img1');
                preview.style.display = 'block';
                const [file] = section2_img1.files
                if (file) {
                    preview.src = URL.createObjectURL(file)
                }
            }
            section2_img2.onchange = evt => {
                preview = document.getElementById('preview_img2');
                preview.style.display = 'block';
                const [file] = section2_img2.files
                if (file) {
                    preview.src = URL.createObjectURL(file)
                }
            }
            section2_img3.onchange = evt => {
                preview = document.getElementById('preview_img3');
                preview.style.display = 'block';
                const [file] = section2_img3.files
                if (file) {
                    preview.src = URL.createObjectURL(file)
                }
            }
            section2_img4.onchange = evt => {
                preview = document.getElementById('preview_img4');
                preview.style.display = 'block';
                const [file] = section2_img4.files
                if (file) {
                    preview.src = URL.createObjectURL(file)
                }
            }
            fasilitas_section_img.onchange = evt => {
                preview = document.getElementById('preview_fasilitas_img');
                preview.style.display = 'block';
                const [file] = fasilitas_section_img.files
                if (file) {
                    preview.src = URL.createObjectURL(file)
                }
            }
        </script>
@endsection
