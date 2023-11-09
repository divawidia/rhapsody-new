@extends('layouts.app')

@section('title')
    House Keeping | Rhapsody Hospitality Development Center
@endsection

@section('content')
    <div
        class="breadcumb-wrapper"
        style="background: url('/img/breadcumb/breadcumb-bg.png');
            background-repeat: no-repeat;
            background-size: cover;"
    >
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Registrasi Program Executive Hybrid</h1>
                <p class="breadcumb-text">LPK Rhapsody Hospitality Development Center</p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Registrasi Program Executive Hybrid</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="space-top">
        <div class="container">

        <form action="{{ route('registrasi-program-executive.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                    <h1 class="form-title">Form Registrasi</h1>
                    <p class="landing-text2">*Kamu harus berusia minimal 20 tahun untuk mengikuti program executive hybrid</p>
                    <div class="col-12 col-md-6">
                        <div class="feature-style1 form-style4 login">
                            <div class="form-group">
                                <label for="namaLengkap">Nama Lengkap</label>
                                <input type="text" autocomplete="off" name="nama_lengkap" id="namaLengkap" placeholder="Isikan nama lengkapmu">
                            </div>
                            <div class="form-group">
                                <label for="namaPanggilan">Nama Panggilan</label>
                                <input type="text" autocomplete="off" name="nama_panggilan" id="namaPanggilan" placeholder="Isikan nama panggilan">
                            </div>
                            <div class="form-group">
                                <label for="email">Alamat Email</label>
                                <input type="email" autocomplete="off" name="email" id="email" placeholder="Isikan alamat emailmu">
                            </div>
                            <div class="form-group">
                                <label for="tanggalLahir">Tanggal Lahir</label>
                                <input type="date" autocomplete="off" name="tanggal_lahir" id="tanggalLahir" placeholder="Isikan tanggal lahirmu">
                            </div>
                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input type="number" autocomplete="off" name="umur" id="umur" placeholder="Isikan umurmu">
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No. HP/Whatsapp</label>
                                <input type="tel" autocomplete="off" name="no_hp" id="no_hp" placeholder="Isikan No. HP/Whatsapp">
                            </div>
                            <div class="form-group">
                                <label for="noHpOrtu">No. HP/Whatsapp Orang Tua/Wali</label>
                                <input type="tel" autocomplete="off" name="no_hp_ortu" id="noHpOrtu" placeholder="Isikan No. HP/Whatsapp Orang Tua/Wali">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="feature-style1 form-style4 login">
                            <div class="form-group">
                                <label for="pendidikanTerakhir">Pendidikan Terakhir</label>
                                <select id="pendidikanTerakhir" class="form-control" name="pendidikan_terakhir">
                                    <option value="sma">SMA</option>
                                    <option value="smk">SMK</option>
                                    <option value="d1">D1</option>
                                    <option value="d2">D2</option>
                                    <option value="d3">D3</option>
                                    <option value="d4">D4</option>
                                    <option value="s1">S1</option>
                                    <option value="s2">S2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="namaSekolah">Nama Sekolah</label>
                                <input type="text" autocomplete="off" name="asal_sekolah" id="namaSekolah" placeholder="Isikan nama sekolah terakhirmu">
                            </div>
                            <div class="form-group">
                                <label for="namaJurusan">Jurusan</label>
                                <input type="text" autocomplete="off" name="jurusan" id="namaJurusan" placeholder="Isikan nama jurusan di sekolah terakhirmu">
                            </div>
                            <div class="form-group">
                                <label for="tahunLulus">Tahun Lulus</label>
                                <input type="number" autocomplete="off" name="pengalaman_kerja" id="tahunLulus" placeholder="Isikan tahun lulus sekolah terakhirmu" min="1950" max="2023">
                            </div>
                            <div class="form-group">
                                <label for="pengalamanKerja">Pengalaman Kerja</label>
                                <textarea name="pengalaman_kerja" id="pengalamanKerja" placeholder="Isikan pengalaman kerjamu yang berisi: tahun, tempat kerja, posisi, kegiatan pekerjaan yang dilakukan"></textarea>
                            </div>
                            <p class="landing-text2">Pilihan Program Excutive Hybrid</p>
                            @foreach($program_executives as $program_executive)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="program_executive_id" id="{{ $program_executive->id }}" value="{{ $program_executive->id }}">
                                    <label class="form-check-label" for="{{ $program_executive->id }}">{{ $program_executive->nama_program }}</label>
                                </div>
                            @endforeach
                            <div class="col-12 text-center mt-4">
                                <button type="submit" class="vs-btn">Daftar Sekarang</button>
                            </div>
                        </div>
                    </div>
            </div>
        </form>
        </div>
    </section>
@endsection
