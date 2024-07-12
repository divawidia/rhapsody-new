@extends('layouts.admin.master')

@section('title')
    About Page
@endsection
@section('page-title')
    About Page
@endsection
@section('body')
    <form>
    @endsection
    @section('content')
        <form action="{{ route('about-page-update') }}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="row">
                <div class="col-xl-6">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary w-auto my-3"><i class="fa fa-arrow-left me-2"></i>Kembali</a>
                </div>
                <div class="col-xl-6 d-flex justify-content-end my-3">
                    <button type="submit" class="btn btn-success float-end mx-3"><i class="fa-regular fa-floppy-disk me-2"></i>Save & Update</button>
                    <a href="{{ route('about-us') }}" class="btn btn-primary"><i class="fa-solid fa-up-right-from-square me-2"></i>Open URL</a>
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
                                        <input type="text" id="header_title" name="header_title" class="form-control" required value="{{ $aboutData->header_title }}"/>
                                        @error('header_title')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label" for="section2_img1">Header Backgroud Image</label>
                                        <input type="file" id="header_bg" name="header_bg" class="form-control"/>
                                        <img id="preview_header_bg" class="image-preview mt-3" src="{{ Storage::url($aboutData->header_bg ?? '') }}" alt="Header Background"/>
                                        @error('header_bg')
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
                                            @if($aboutData->section2_status == 1)
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
                                            <input class="form-control" type="text" name="section2_title" id="section2_title" value="{{ $aboutData->section2_title }}" required>
                                            @error('section2_title')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="section2_subtitle" class="col-form-label">Section 2 Subtitle</label>
                                            <textarea class="form-control" id="section2_subtitle" name="section2_subtitle">@php echo $aboutData->section2_subtitle @endphp</textarea>
                                            @error('section2_subtitle')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="section2_body" class="col-form-label">Section 2 Body</label>
                                            <textarea class="form-control ckeditor" id="section2_body" name="section2_body">@php echo $aboutData->section2_body @endphp</textarea>
                                            @error('section2_body')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label" for="section2_img">Section 2 Image</label>
                                        <input type="file" id="section2_img" name="section2_img" class="form-control"/>
                                        <img id="preview_section2_img" class="image-preview mt-3" src="{{ Storage::url($aboutData->section2_img ?? '') }}" alt="section 2 image"/>
                                        @error('section2_img')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="row mb-4 mt-5">
                                        <div class="col-xl-6">
                                            <h5 class="font-size-16"><i class="mdi mdi-arrow-right text-primary me-1"></i>
                                                Section 3
                                            </h5>
                                        </div>
                                        <div class="col-xl-6 d-flex justify-content-end">
                                            <h5 class="font-size-16 mx-3">
                                                Publish Status Section 3
                                            </h5>
                                            @if($aboutData->section3_status == 1)
                                                <input type="checkbox" name="section3_status" id="section3_status" switch="success" value="1" checked/>
                                            @else
                                                <input type="checkbox" name="section3_status" id="section3_status" switch="success" value="1" >
                                            @endif
                                            <label for="section3_status" data-on-label="On" data-off-label="Off"></label>
                                        </div>
                                        @error('section3_status')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="section3_title" class="col-form-label">Section 3 Title</label>
                                        <input class="form-control" type="text" name="section3_title" id="section3_title" value="{{ $aboutData->section3_title }}" required>
                                        @error('section3_title')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="section3_subtitle" class="col-form-label">Section 3 Subtitle</label>
                                        <textarea class="form-control" id="section3_subtitle" name="section3_subtitle">@php echo $aboutData->section3_subtitle @endphp</textarea>
                                        @error('section3_subtitle')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="section3_body" class="col-form-label">Section 3 Body</label>
                                        <textarea class="form-control ckeditor" id="section3_body" name="section3_body">@php echo $aboutData->section3_body @endphp</textarea>
                                        @error('section3_body')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                            <label class="col-form-label" for="section3_img">Section 3 Image</label>
                                            <input type="file" id="section3_img" name="section3_img" class="form-control"/>
                                            <img id="preview_section3_img" class="image-preview mt-3" src="{{ Storage::url($aboutData->section3_img ?? '') }}" alt="section 3 image"/>
                                            @error('section3_img')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="row mb-4 mt-5">
                                        <div class="col-xl-6">
                                            <h5 class="font-size-16"><i class="mdi mdi-arrow-right text-primary me-1"></i>
                                                Visi Misi Section
                                            </h5>
                                        </div>
                                        <div class="col-xl-6 d-flex justify-content-end">
                                            <h5 class="font-size-16 mx-3">
                                                Publish Status Visi Misi Section
                                            </h5>
                                            @if($aboutData->visi_misi_section_status == 1)
                                                <input type="checkbox" name="visi_misi_section_status" id="visi_misi_section_status" switch="success" value="1" checked/>
                                            @else
                                                <input type="checkbox" name="visi_misi_section_status" id="visi_misi_section_status" switch="success" value="1">
                                            @endif
                                            <label for="visi_misi_section_status" data-on-label="On" data-off-label="Off"></label>
                                        </div>
                                        @error('program_section_status')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="visi" class="col-form-label">Visi</label>
                                        <textarea class="form-control ckeditor" id="visi" name="visi">@php echo $aboutData->visi @endphp</textarea>
                                        @error('visi')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="misi" class="col-form-label">Misi</label>
                                        <textarea class="form-control ckeditor" id="misi" name="misi">@php echo $aboutData->misi @endphp</textarea>
                                        @error('misi')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="row mb-4 mt-5">
                                        <div class="col-xl-6">
                                            <h5 class="font-size-16"><i class="mdi mdi-arrow-right text-primary me-1"></i>
                                                Section 4
                                            </h5>
                                        </div>
                                        <div class="col-xl-6 d-flex justify-content-end">
                                            <h5 class="font-size-16 mx-3">
                                                Publish Status Section 4
                                            </h5>
                                            @if($aboutData->section4_status == 1)
                                                <input type="checkbox" name="section4_status" id="section4_status" switch="success" value="1" checked />
                                            @else
                                                <input type="checkbox" name="section4_status" id="section4_status" switch="success" value="1" >
                                            @endif
                                            <label for="section4_status" data-on-label="On" data-off-label="Off"></label>
                                        </div>
                                        @error('section4_status')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="section4_body" class="col-form-label">Section 4 Body</label>
                                        <textarea class="form-control ckeditor" id="section4_body" name="section4_body">@php echo $aboutData->section4_body @endphp</textarea>
                                        @error('section4_body')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label" for="section2_img">Section 4 Image</label>
                                        <input type="file" id="section4_img" name="section4_img" class="form-control"/>
                                        <img id="preview_section4_img" class="image-preview mt-3" src="{{ Storage::url($aboutData->section4_img ?? '') }}" alt="section 2 image"/>
                                        @error('section4_img')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="row mb-4 mt-5">
                                        <div class="col-xl-6">
                                            <h5 class="font-size-16"><i class="mdi mdi-arrow-right text-primary me-1"></i>
                                                Why Rhapsody Section
                                            </h5>
                                        </div>
                                        <div class="col-xl-6 d-flex justify-content-end">
                                            <h5 class="font-size-16 mx-3">
                                                Publish Status Why Rhapsody Section
                                            </h5>
                                            @if($aboutData->whyrhapsody_section_status == 1)
                                                <input type="checkbox" name="whyrhapsody_section_status" id="whyrhapsody_section_status" switch="success" value="1" checked />
                                            @else
                                                <input type="checkbox" name="whyrhapsody_section_status" id="whyrhapsody_section_status" switch="success" value="1" >
                                            @endif
                                            <label for="whyrhapsody_section_status" data-on-label="On" data-off-label="Off"></label>
                                        </div>
                                        @error('whyrhapsody_section_status')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="whyrhapsody_section_title" class="col-form-label">Why Rhapsody Title</label>
                                        <input class="form-control" type="text" name="whyrhapsody_section_title" id="whyrhapsody_section_title" value="{{ $aboutData->whyrhapsody_section_title }}" required>
                                        @error('whyrhapsody_section_title')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="whyrhapsody_section_subtitle" class="col-form-label">Why Rhapsody Subtitle</label>
                                        <input class="form-control" type="text" name="whyrhapsody_section_subtitle" id="whyrhapsody_section_subtitle" value="{{ $aboutData->whyrhapsody_section_subtitle }}" required>
                                        @error('whyrhapsody_section_subtitle')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-lg-4">
                                            <h5 class="font-size-16"><i class="mdi mdi-arrow-right text-primary me-1"></i>
                                                Card 1
                                            </h5>
                                            <div class="mb-3">
                                                <label for="whyrhapsody_section_card1_title" class="col-form-label">Title</label>
                                                <input class="form-control" type="text" name="whyrhapsody_section_card1_title" id="whyrhapsody_section_card1_title" value="{{ $aboutData->whyrhapsody_section_card1_title }}" required>
                                                @error('whyrhapsody_section_card1_title')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="whyrhapsody_section_card1_body" class="col-form-label">Body Text</label>
                                                <textarea class="form-control ckeditor" id="whyrhapsody_section_card1_body" name="whyrhapsody_section_card1_body">@php echo $aboutData->whyrhapsody_section_card1_body @endphp</textarea>
                                                @error('whyrhapsody_section_card1_body')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label" for="whyrhapsody_section_card1_icon">Icon</label>
                                                <input type="file" id="whyrhapsody_section_card1_icon" name="whyrhapsody_section_card1_icon" class="form-control"/>
                                                <img id="preview_whyrhapsody_section_card1_icon" class="image-preview mt-3" src="{{ Storage::url($aboutData->whyrhapsody_section_card1_icon ?? '') }}" alt="Card 1 Icon"/>
                                                @error('whyrhapsody_section_card1_icon')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <h5 class="font-size-16"><i class="mdi mdi-arrow-right text-primary me-1"></i>
                                                Card 2
                                            </h5>
                                            <div class="mb-3">
                                                <label for="whyrhapsody_section_card2_title" class="col-form-label">Title</label>
                                                <input class="form-control" type="text" name="whyrhapsody_section_card2_title" id="whyrhapsody_section_card2_title" value="{{ $aboutData->whyrhapsody_section_card2_title }}" required>
                                                @error('whyrhapsody_section_card2_title')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="whyrhapsody_section_card2_body" class="col-form-label">Body Text</label>
                                                <textarea class="form-control ckeditor" id="whyrhapsody_section_card2_body" name="whyrhapsody_section_card2_body">@php echo $aboutData->whyrhapsody_section_card2_body @endphp</textarea>
                                                @error('whyrhapsody_section_card2_body')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label" for="whyrhapsody_section_card2_icon">Icon</label>
                                                <input type="file" id="whyrhapsody_section_card2_icon" name="whyrhapsody_section_card2_icon" class="form-control"/>
                                                <img id="preview_whyrhapsody_section_card2_icon" class="image-preview mt-3" src="{{ Storage::url($aboutData->whyrhapsody_section_card2_icon ?? '') }}" alt="Card 2 Icon"/>
                                                @error('whyrhapsody_section_card2_icon')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <h5 class="font-size-16"><i class="mdi mdi-arrow-right text-primary me-1"></i>
                                                Card 3
                                            </h5>
                                            <div class="mb-3">
                                                <label for="whyrhapsody_section_card3_title" class="col-form-label">Title</label>
                                                <input class="form-control" type="text" name="whyrhapsody_section_card3_title" id="whyrhapsody_section_card3_title" value="{{ $aboutData->whyrhapsody_section_card3_title }}" required>
                                                @error('whyrhapsody_section_card3_title')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="whyrhapsody_section_card3_body" class="col-form-label">Body Text</label>
                                                <textarea class="form-control ckeditor" id="whyrhapsody_section_card3_body" name="whyrhapsody_section_card3_body">@php echo $aboutData->whyrhapsody_section_card2_body @endphp</textarea>
                                                @error('whyrhapsody_section_card3_body')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label" for="whyrhapsody_section_card2_icon">Icon</label>
                                                <input type="file" id="whyrhapsody_section_card3_icon" name="whyrhapsody_section_card3_icon" class="form-control"/>
                                                <img id="preview_whyrhapsody_section_card3_icon" class="image-preview mt-3" src="{{ Storage::url($aboutData->whyrhapsody_section_card3_icon ?? '') }}" alt="Card 3 Icon"/>
                                                @error('whyrhapsody_section_card3_icon')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
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
            section2_img.onchange = evt => {
                preview = document.getElementById('preview_section2_img');
                preview.style.display = 'block';
                const [file] = section2_img.files
                if (file) {
                    preview.src = URL.createObjectURL(file)
                }
            }
            section3_img.onchange = evt => {
                preview = document.getElementById('preview_section3_img');
                preview.style.display = 'block';
                const [file] = section3_img.files
                if (file) {
                    preview.src = URL.createObjectURL(file)
                }
            }
            section4_img.onchange = evt => {
                preview = document.getElementById('preview_section4_img');
                preview.style.display = 'block';
                const [file] = section4_img.files
                if (file) {
                    preview.src = URL.createObjectURL(file)
                }
            }
            whyrhapsody_section_card1_icon.onchange = evt => {
                preview = document.getElementById('preview_whyrhapsody_section_card1_icon');
                preview.style.display = 'block';
                const [file] = whyrhapsody_section_card1_icon.files
                if (file) {
                    preview.src = URL.createObjectURL(file)
                }
            }
            whyrhapsody_section_card2_icon.onchange = evt => {
                preview = document.getElementById('preview_whyrhapsody_section_card2_icon');
                preview.style.display = 'block';
                const [file] = whyrhapsody_section_card2_icon.files
                if (file) {
                    preview.src = URL.createObjectURL(file)
                }
            }
            whyrhapsody_section_card3_icon.onchange = evt => {
                preview = document.getElementById('preview_whyrhapsody_section_card3_icon');
                preview.style.display = 'block';
                const [file] = whyrhapsody_section_card3_icon.files
                if (file) {
                    preview.src = URL.createObjectURL(file)
                }
            }
        </script>
@endsection
