@extends('layouts.admin.master')
@section('title')
    Facility Content
@endsection
@push('addon-style')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush
@section('page-title')
    Edit Program Pelatihan
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('status') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <form action="{{ route('pelatihan.update', ['pelatihan'=>$pelatihan]) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-xl-6">
                            <a href="{{ url()->route('programs.index') }}" class="btn btn-secondary w-auto my-3"><i class="fa fa-arrow-left me-2"></i>Kembali</a>
                        </div>
                        <div class="col-xl-6 d-flex justify-content-end my-3">
                            <button type="submit" class="btn btn-success float-end mx-3"><i class="fa-regular fa-floppy-disk me-2"></i>Simpan</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Program Pelatihan</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="name" class="col-form-label">Nama Program Pelatihan</label>
                                        <input class="form-control" type="text" name="name" id="name" placeholder="Isikan nama program pelatihan" value="{{ $pelatihan->name }}" required>
                                        @error('name')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="program_id" class="col-form-label">Jenis Program Pelatihan<span class="text-danger">*</span></label>
                                            <select class="form-select" name="program_id" id="program_id" required>
                                                @foreach($programs as $program)
                                                    <option value="{{ $program->id }}" {{ old("program_id", $program->id) == $pelatihan->program->id ? "selected" : "" }}>{{ $program->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('programs')
                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="col-form-label">Harga</label>
                                <input class="form-control" type="text" name="price" id="price" value="{{ $pelatihan->price }}" required>
                                @error('price')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="price_desc" class="col-form-label">Deskripsi Harga</label>
                                <textarea class="form-control ckeditor" name="price_desc" id="price_desc">{{$pelatihan->price_desc}}</textarea>
                                @error('price_desc')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="batch" class="col-form-label">Batch Pelatihan</label>
                                <input class="form-control" type="text" name="batch" id="batch" value="{{ $pelatihan->batch }}" required>
                                @error('batch')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="col-form-label" for="register_start">Tanggal Mulai Pendaftaran</label>
                                        <input type="date" id="register_start" name="register_start" class="form-control" value="{{ $pelatihan->register_start }}" required/>
                                        @error('register_start')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="col-form-label" for="register_end">Tanggal Selesai Pendaftaran</label>
                                        <input type="date" id="register_end" name="register_end" class="form-control" value="{{ $pelatihan->register_end }}" required/>
                                        @error('register_end')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="btn_text" class="col-form-label">Button Text</label>
                                        <input class="form-control" type="text" name="btn_text" id="btn_text" value="{{ $pelatihan->btn_text }}" required>
                                        @error('btn_text')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="btn_url" class="col-form-label">Button URL</label>
                                        <input class="form-control" type="text" name="btn_url" id="btn_url" value="{{ $pelatihan->btn_url }}" required>
                                        @error('btn_url')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="col-form-label" for="btn_icon">Button Icon</label>
                                        <input type="file" id="btn_icon" name="btn_icon" class="form-control"/>
                                        <img id="preview_btn_icon" class="image-preview mt-3" src="{{ Storage::url($pelatihan->btn_icon ?? '') }}" alt="Icon"/>
                                        @error('btn_icon')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="overview" class="col-form-label">Overview</label>
                                        <textarea class="form-control ckeditor" name="overview" id="overview">{{ $pelatihan->overview }}</textarea>
                                        @error('overview')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="short_overview" class="col-form-label">Short Overview</label>
                                        <textarea class="form-control ckeditor" name="short_overview" id="short_overview">{{ $pelatihan->short_overview }}</textarea>
                                        @error('short_overview')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="benefit_content" class="col-form-label">Benefit</label>
                                        <textarea class="form-control ckeditor" name="benefit_content" id="benefit_content">{{ $pelatihan->benefit_content }}</textarea>
                                        @error('benefit_content')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="interest_percentage" class="col-form-label">Persentase Peminat</label>
                                        <input class="form-control" type="text" name="interest_percentage" id="interest_percentage" value="{{ $pelatihan->interest_percentage }}" required>
                                        @error('interest_percentage')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="alumnies" class="col-form-label">Jumlah Alumni</label>
                                        <input class="form-control" type="text" name="alumnies" id="alumnies" value="{{ $pelatihan->alumnies }}" required>
                                        @error('alumnies')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label" for="program_icon">Program Icon</label>
                                <input type="file" id="program_icon" name="program_icon" class="form-control"/>
                                <img id="preview_program_icon" class="image-preview mt-3" src="{{ Storage::url($pelatihan->program_icon ?? '') }}" alt="Icon"/>
                                @error('program_icon')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="status">Status Publish<span class="text-danger">*</span></label>
                                    <select class="form-select" name="status" id="status" required>
                                        @foreach([1 => "Publish", 0 => "Private"] AS $status => $status_label)
                                            <option value="{{ $status }}" {{ old("status", $pelatihan->status) == $status ? "selected" : "" }}>{{ $status_label }}</option>
                                        @endforeach
                                    </select>
                                @error('status')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label" for="photo-dropzone">Tambah Foto Program Pelatihan</label>
                                <div class="needsclick dropzone" id="photo-dropzone"></div>
                                @error('photo_url')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="float-end mt-4">
                                <a href="{{ url()->route('programs.index') }}" class="btn btn-secondary w-auto"><i class="fa fa-arrow-left me-2"></i>Kembali</a>

                                <button type="submit" class="btn btn-success float-end mx-3"><i class="fa-regular fa-floppy-disk me-2"></i>Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Foto {{ $pelatihan->name }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            @foreach ($pelatihan->program_photos as $photo)
                                <div class="col-md-4">
                                    <div class="gallery-container">
                                        <img
                                            src="{{ Storage::url($photo->photos_url ?? '') }}"
                                            alt=""
                                            class="w-100 rounded-3"
                                        />
                                        <a href="{{ route('delete-programs-photo', $photo->id) }}" class="delete-gallery" data-confirm-delete="true">
                                            <img src="/img/icon/icon-delete.svg" alt="" />
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Prospek Karir Program Pelatihan</h4>
                            </div>
                            <div class="card-body">
                                <a href="{{  route('prospek-karir.create', $pelatihan->id) }}" class="btn btn-primary mb-3">
                                    + Tambah Prospek Karir
                                </a>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0" id="careerSalaryTable">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Posisi</th>
                                            <th>Range Gaji</th>
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Prospek Lowongan Program Pelatihan</h4>
                            </div>
                            <div class="card-body">
                                <a href="{{  route('career-company.create', $pelatihan->id) }}" class="btn btn-primary mb-3">
                                    + Tambah Prospek Lowongan
                                </a>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0" id="careerCompanyTable">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Company</th>
                                            <th>Logo</th>
                                            <th>Status</th>
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
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    @endsection
    @section('scripts')
        <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-1.13.8/datatables.min.js"></script>
        <script>
            // AJAX DataTable
            var datatable = $('#careerSalaryTable').DataTable({
                processing: true,
                serverSide: true,
                ordering: true,
                ajax: {
                    url: '{!! url()->current() !!}',
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'position', name: 'position' },
                    { data: 'salary', name: 'salary' },
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
            // AJAX DataTable
            var datatable = $('#careerCompanyTable').DataTable({
                processing: true,
                serverSide: true,
                ordering: true,
                ajax: {
                    url: '{!! url()->route('career-company.index', $pelatihan->id) !!}',
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'company_name', name: 'company_name' },
                    { data: 'company_logo', name: 'company_logo' },
                    { data: 'status', name: 'status' },
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
                url: '{{ route('upload-programs-photo') }}',
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
            btn_icon.onchange = evt => {
                preview = document.getElementById('preview_btn_icon');
                preview.style.display = 'block';
                const [file] = btn_icon.files
                if (file) {
                    preview.src = URL.createObjectURL(file)
                }
            }
            program_icon.onchange = evt => {
                preview = document.getElementById('preview_program_icon');
                preview.style.display = 'block';
                const [file] = program_icon.files
                if (file) {
                    preview.src = URL.createObjectURL(file)
                }
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#status').select2({
                    width:'100%',
                    theme: 'bootstrap-5'
                });
                $('#program_id').select2({
                    width:'100%',
                    theme: 'bootstrap-5',
                });
            });
        </script>
@endsection
