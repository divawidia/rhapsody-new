@extends('layouts.admin.master')
@section('title')
    Tambah Data Jadwal Sosialisasi SMA/SMK
@endsection
@section('page-title')
    Tambah Data Jadwal Sosialisasi SMA/SMK
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-12">
                <form action="{{ route('jadwal.store') }}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Data Jadwal Sosialisasi SMA/SMK</h4>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="mb-3 row">
                                <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i>
                                    Sekolah Sosialisasi</h5>
                                <label class="col-md-2 col-form-label" for="id_sekolah">Sekolah SMA/SMK</label>
                                <div class="col-md-10">
                                    <select class="form-select" id="id_sekolah" name="id_sekolah" required>
                                        <option selected>Pilih sekolah</option>
                                        @foreach($sekolahs as $sekolah)
                                            <option value="{{ $sekolah->id }}">{{ $sekolah->nama_sekolah }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="my-4 row">
                                <div class="col-lg-5">
                                    <div class="mt-4 mt-xl-0">
                                        <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i>
                                            Tanggal & Jam Sosialisasi</h5>
                                            <div class="mb-3">
                                                <label for="tanggal_sosialisasi" class="form-label">Tanggal Sosialisasi</label>
                                                <input class="form-control" type="date" autocomplete="off" name="tanggal_sosialisasi"
                                                       id="tanggal_sosialisasi" placeholder="Isikan tanggal sosialisasi sekolah" required>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="jam_sosialisasi" class="form-label">Jam Sosialisasi</label>
                                                        <input class="form-control" type="time" autocomplete="off" name="jam_sosialisasi"
                                                               id="jam_sosialisasi" placeholder="Isikan jam sosialisasi sekolah" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="lama_sesi" class="form-label">Lama Sesi</label>
                                                        <div class="input-group">
                                                            <input class="form-control" type="number" autocomplete="off" name="lama_sesi"
                                                                   id="lama_sesi" placeholder="Isikan lama sesi" required>
                                                            <div class="input-group-text">Menit</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ms-lg-auto">
                                    <div class="mt-5 mt-lg-4 mt-xl-0">
                                        <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i>
                                            Tempat & Jumlah Siswa</h5>
                                            <div class="mb-3">
                                                <label for="tempat_sosialisasi" class="form-label">Tempat Sosialisasi</label>
                                                <input class="form-control" type="text" autocomplete="off" name="tempat_sosialisasi" id="tempat_sosialisasi"
                                                       placeholder="Isikan tempat sosialisasi">
                                            </div>
                                            <div class="mb-3">
                                                <label for="jumlah_siswa" class="form-label">Jumlah Siswa</label>
                                                <div class="input-group">
                                                    <input class="form-control" type="number" autocomplete="off" name="jumlah_siswa" id="jumlah_siswa"
                                                           placeholder="Isikan Jumlah Siswa">
                                                    <div class="input-group-text">Orang</div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-4 row">
                                <div class="col-lg-5">
                                    <div class="mt-4 mt-xl-0">
                                        <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i>
                                            Fasilitas Sosialisasi</h5>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="proyektor" name="proyektor" value="Disediakan">
                                            <label class="form-check-label" for="proyektor">Proyektor</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="speaker" name="speaker" value="Disediakan">
                                            <label class="form-check-label" for="speaker">Speaker</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6 ms-lg-auto">
                                    <div class="mt-5 mt-lg-4 mt-xl-0">
                                        <h5 class="font-size-14 mb-4"><i class="mdi mdi-arrow-right text-primary me-1"></i>
                                            Status Sosialisasi</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="status_sosialisasi">Status Sosialisasi</label>
                                                    <select class="form-select" id="status_sosialisasi" name="status_sosialisasi" required>
                                                        <option selected>Pilih Status</option>
                                                        <option value="Selesai">Selesai</option>
                                                        <option value="Batal">Batal</option>
                                                        <option value="Menunggu Jadwal">Menunggu Jadwal</option>
                                                        <option value="Persiapan Sosialisasi">Persiapan Sosialisasi</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="status_follup">Status Follow Up Kontak</label>
                                                    <select class="form-select" id="status_follup" name="status_follup" required>
                                                        <option selected>Pilih Status</option>
                                                        <option value="Dibalas">Dibalas</option>
                                                        <option value="Hanya Dibaca">Hanya Dibaca</option>
                                                        <option value="Sudah Dikonfirmasi">Sudah Dikonfirmasi</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="note" class="col-md-1 col-form-label">Note</label>
                                <div class="col-md-11">
                                    <textarea class="form-control" type="number" autocomplete="off" name="note" id="note"></textarea>
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
