@extends('layouts.admin.master')
@section('title')
    Edit Data Sekolah Sosialisasi SMA/SMK
@endsection
@section('page-title')
    Edit Data Sekolah Sosialisasi SMA/SMK
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-12">
                <form action="{{ route('sekolah-sosialisasi.update', $item->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Data Sekolah Sosialisasi SMA/SMK</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Nama Sekolah</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" autocomplete="off" name="nama_sekolah"
                                           id="nama_sekolah" placeholder="Isikan nama sekolah" value="{{ $item->nama_sekolah }}" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-search-input" class="col-md-2 col-form-label">Alamat Sekolah</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" autocomplete="off" name="alamat_sekolah"
                                           id="alamat_sekolah" placeholder="Isikan alamat sekolah" value="{{ $item->alamat_sekolah }}" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="kecamatan" class="col-md-2 col-form-label">Kecamatan</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" autocomplete="off" name="kecamatan" id="kecamatan"
                                           placeholder="Isikan kecamatan sekolah" value="{{ $item->kecamatan }}" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="kabupaten" class="col-md-2 col-form-label">Kabupaten</label>
                                <div class="col-md-10">
                                    <input class="form-control" autocomplete="off" name="kabupaten" id="kabupaten"
                                           placeholder="Isikan kabupaten sekolah" value="{{ $item->kabupaten }}" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="no_hp_wa" class="col-md-2 col-form-label">No. Kontak Sekolah</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="tel" autocomplete="off" name="no_hp_wa" id="no_hp_wa"
                                           placeholder="Isikan No. Kontak Sekolah" value="{{ $item->no_hp_wa }}" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="google_maps" class="col-md-2 col-form-label">Link Google Maps</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" autocomplete="off" name="google_maps" id="google_maps"
                                           placeholder="Isikan Link Google Maps Sekolah" value="{{ $item->google_maps }}" required>
                                </div>
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
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
