@extends('layouts.admin.master')
@section('title')
    Siswa SMA/SMK
@endsection
@section('page-title')
    Edit Data Siswa SMA/SMK
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-12">
                <form action="{{ route('siswa-sma-smk.update', $item->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Data Kehadiran Siswa SMA/SMK</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Nama Lengkap</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" autocomplete="off" name="nama_lengkap" id="nama_lengkap" value="{{ $item->nama_lengkap }}" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-search-input" class="col-md-2 col-form-label">Nama Panggilan</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" autocomplete="off" name="nama_panggilan" id="nama_panggilan" value="{{ $item->nama_panggilan }}" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-email-input" class="col-md-2 col-form-label">No. HP/Whatsapp</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="tel" autocomplete="off" name="no_hp" id="no_hp" placeholder="Isi dengan format 62, contoh:62819812182194" value="{{ $item->no_hp }}" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-url-input" class="col-md-2 col-form-label">Asal Sekolah</label>
                                <div class="col-md-10">
                                    <select class="form-select" id="id_sekolah" name="id_sekolah" required>
                                        @foreach($sekolahs as $sekolah)
                                            <option value="{{ $sekolah->id }}" {{ $sekolah->id == $item->id_sekolah ? 'selected' : '' }}>{{ $sekolah->nama_sekolah }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label" for="id_sekolah">Jadwal Sosialisasi</label>
                                <div class="col-md-10">
                                    <select class="form-select" id="id_sosialisasi" name="id_sosialisasi" required>
                                        @foreach($sosialisasis as $sosialisasi)
                                            <option value="{{ $sosialisasi->id }}" {{ $sosialisasi->id == $item->id_sosialisasi ? 'selected' : '' }}>{{ $sosialisasi->tanggal_sosialisasi }}, {{ $sosialisasi->sekolah->nama_sekolah }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-tel-input" class="col-md-2 col-form-label">Jurusan</label>
                                <div class="col-md-10">
                                    <input class="form-control" autocomplete="off" name="jurusan" id="jurusan" value="{{ $item->jurusan }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label" for="program_diminati">Program yang Diminati</label>
                                <div class="col-md-10">
                                    <select class="form-select" id="program_diminati" name="program_diminati">
                                        @foreach(["Food & Beverage Product" => "Food & Beverage Product", "Food & Beverage Service" => "Food & Beverage Service", "Front Office" => "Front Office", "Housekeeping" => "Housekeeping", "Tidak Berminat" => "Tidak Berminat"] AS $program_diminati => $program_diminati_label)
                                            <option value="{{ $program_diminati }}" {{ old("program_diminati", $item->program_diminati) == $program_diminati ? "selected" : "" }}>{{ $program_diminati_label }}</option>
                                        @endforeach
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
