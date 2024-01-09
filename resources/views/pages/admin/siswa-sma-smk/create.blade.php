@extends('layouts.admin.master')
@section('title')
    Siswa SMA/SMK
@endsection
@section('page-title')
    Tambah Data Siswa SMA/SMK
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-12">
                <form action="{{ route('siswa-sma-smk-sosialisasi.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Data Kehadiran Siswa SMA/SMK</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Nama Lengkap</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" autocomplete="off" name="nama_lengkap" id="nama_lengkap" placeholder="Isikan nama lengkap siswa" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-search-input" class="col-md-2 col-form-label">Nama Panggilan</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" autocomplete="off" name="nama_panggilan" id="nama_panggilan" placeholder="Isikan nama panggilan siswa" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-email-input" class="col-md-2 col-form-label">No. HP/Whatsapp</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="tel" autocomplete="off" name="no_hp" id="no_hp" placeholder="Isikan No. Hp/WA siswa" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label" for="id_sekolah">Asal Sekolah</label>
                                <div class="col-md-10">
                                    <select class="form-select" id="id_sekolah" name="id_sekolah" required>
                                        <option selected>Pilih asal sekolah</option>
                                        @foreach($sekolahs as $sekolah)
                                            <option value="{{ $sekolah->id }}">{{ $sekolah->nama_sekolah }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label" for="id_sekolah">Jadwal Sosialisasi</label>
                                <div class="col-md-10">
                                    <select class="form-select" id="id_sosialisasi" name="id_sosialisasi" required>
                                        <option selected>Pilih jadwal sosialisasi</option>
                                        @foreach($sosialisasis as $sosialisasi)
                                            <option value="{{ $sosialisasi->id }}">{{ $sosialisasi->tanggal_sosialisasi }}, {{ $sosialisasi->sekolah->nama_sekolah }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-tel-input" class="col-md-2 col-form-label">Jurusan</label>
                                <div class="col-md-10">
                                    <input class="form-control" autocomplete="off" name="jurusan" id="jurusan" placeholder="Isikan jurusan siswa">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label" for="program_diminati">Program yang Diminati</label>
                                <div class="col-md-10">
                                    <select class="form-select" id="program_diminati" name="program_diminati">
                                        <option selected>Pilih program kami yang diminati</option>
                                        <option value="Food & Beverage Product">Food & Beverage Product</option>
                                        <option value="Food & Beverage Service">Food & Beverage Service</option>
                                        <option value="Front Office">Front Office</option>
                                        <option value="Housekeeping">Housekeeping</option>
                                        <option value="Tidak Berminat">Tidak Berminat :(</option>
                                    </select>
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
        <script>
            $('#id_sekolah').select2();
            $('#id_sosialisasi').select2();
        </script>
@endsection
