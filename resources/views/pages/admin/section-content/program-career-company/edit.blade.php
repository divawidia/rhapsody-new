@extends('layouts.admin.master')
@section('title')
    Prospek Lowongan Perusahaan
@endsection
@push('addon-style')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush
@section('page-title')
    Edit Prospek Lowongan Perusahaan
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
                <form action="{{ route('career-company.update', ['pelatihan'=>$company->program_content_id, 'company'=>$company]) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-xl-6">
                            <a href="{{ url()->route('pelatihan.edit', $company->program_content_id) }}" class="btn btn-secondary w-auto my-3"><i class="fa fa-arrow-left me-2"></i>Kembali</a>
                        </div>
                        <div class="col-xl-6 d-flex justify-content-end my-3">
                            <button type="submit" class="btn btn-success float-end mx-3"><i class="fa-regular fa-floppy-disk me-2"></i>Simpan</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Prospek Lowongan Perusahaan</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="company_name" class="col-form-label">Nama Perusahaan</label>
                                <input class="form-control" type="text" name="company_name" id="company_name" placeholder="Isikan nama perusahaan" value="{{ $company->company_name }}" required>
                                @error('company_name')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label" for="company_logo">Logo</label>
                                <input type="file" id="company_logo" name="company_logo" class="form-control"/>
                                <img id="preview_company_logo" class="w-50 image-preview mt-3" src="{{ Storage::url($company->company_logo) }}" alt="Icon"/>
                                @error('company_logo')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="status">Status Publish<span class="text-danger">*</span></label>
                                <select class="form-select" name="status" id="status" required>
                                    @foreach([1 => "Available", 0 => "Limited"] AS $status => $status_label)
                                        <option value="{{ $status }}" {{ old("status", $company->status) == $status ? "selected" : "" }}>{{ $status_label }}</option>
                                    @endforeach
                                </select>
                                @error('status')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="float-end mt-4">
                                <a href="{{ url()->route('pelatihan.edit', $company->program_content_id) }}" class="btn btn-secondary w-auto"><i class="fa fa-arrow-left me-2"></i>Kembali</a>

                                <button type="submit" class="btn btn-success float-end mx-3"><i class="fa-regular fa-floppy-disk me-2"></i>Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    @endsection
    @push('addon-script')
        <script>
            company_logo.onchange = evt => {
                preview = document.getElementById('preview_company_logo');
                preview.style.display = 'block';
                const [file] = company_logo.files
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
            });
        </script>
    @endpush
