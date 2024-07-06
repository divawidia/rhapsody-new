@extends('layouts.admin.master')
@section('title')
    Prospek Karir Program Pelatihan
@endsection
@push('addon-style')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush
@section('page-title')
    Tambah Prospek Karir Program Pelatihan
@endsection

@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-12">
                <form action="{{ route('prospek-karir.store', $pelatihan->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-6">
                            <a href="{{ url()->route('pelatihan.edit', $pelatihan->id) }}" class="btn btn-secondary w-auto my-3"><i class="fa fa-arrow-left me-2"></i>Kembali</a>
                        </div>
                        <div class="col-xl-6 d-flex justify-content-end my-3">
                            <button type="submit" class="btn btn-success float-end mx-3"><i class="fa-regular fa-floppy-disk me-2"></i>Simpan</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Prospek Karir</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="position" class="col-form-label">Nama Posisi</label>
                                <input class="form-control" type="text" name="position" id="position" placeholder="Isikan nama posisi" value="{{ old('position') }}" required>
                                @error('position')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="col-form-label" for="salary_start">Range Gaji Awal</label>
                                        <input type="number" id="salary_start" name="salary_start" class="form-control" value="{{ old('salary_start') }}" required/>
                                        @error('salary_start')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="col-form-label" for="salary_end">Range Gaji Akhir</label>
                                        <input type="number" id="salary_end" name="salary_end" class="form-control" value="{{ old('salary_end') }}" required/>
                                        @error('salary_end')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="float-end mt-4">
                                <a href="{{ url()->route('pelatihan.edit', $pelatihan->id) }}" class="btn btn-secondary w-auto"><i class="fa fa-arrow-left me-2"></i>Kembali</a>

                                <button type="submit" class="btn btn-success float-end mx-3"><i class="fa-regular fa-floppy-disk me-2"></i>Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    @endsection
