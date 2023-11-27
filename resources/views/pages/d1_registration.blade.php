@extends('layouts.app')

@section('title')
    Registrasi Diploma 1 | LPK Rhapsody Hospitality Development Center
@endsection

@section('content')
    <div
        class="breadcumb-wrapper"
        style="background: url('/img/breadcumb/breadcumb-bg.png');
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
            background-position: center center;"
    >
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title" data-aos="fade-right" data-aos-duration="1000">Registrasi Program Diploma 1</h1>
                <p class="breadcumb-text" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="50">LPK Rhapsody Hospitality Development Center</p>
                <div class="breadcumb-menu-wrap" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Registrasi Program Diploma 1</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="space-top">
        <div class="container">

        <form action="{{ route('registrasi-program-d1.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                    <h1 class="form-title" data-aos="fade-up" data-aos-duration="1000">Form Registrasi</h1>
                    <p class="landing-text2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50"></p>
                    <div class="col-12 col-md-6">
                        <div class="feature-style1 form-style4 login" data-aos="fade-up" data-aos-duration="1000">
                            <p class="landing-text2">Pilihan Jurusan Diploma 1</p>
                            <div class="de_form de_radio row mh-75 g-3">
                                @foreach($jurusan_diplomas as $jurusan_diploma)
                                    <div class="radio-img col-6" >
                                        <input id="{{ $jurusan_diploma->id }}" name="jurusan_diploma_id" type="radio" value="{{ $jurusan_diploma->id }}">
                                        <label for="{{ $jurusan_diploma->id }}">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-12 col-xl-4">
                                                    <img class="radio-icon" src="{{ Storage::url($jurusan_diploma->icon) }}" alt="">
                                                </div>
                                                <div class="col-12 col-xl-8 align-items-center">
                                                    {{ $jurusan_diploma->nama_jurusan }}
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="form-group mt-4">
                                <label for="namaLengkap">Nama Lengkap</label>
                                <input type="text" autocomplete="off" name="nama_lengkap" id="namaLengkap" placeholder="Isikan nama lengkapmu" required>
                            </div>
                            <div class="form-group">
                                <label for="namaPanggilan">Nama Panggilan</label>
                                <input type="text" autocomplete="off" name="nama_panggilan" id="namaPanggilan" placeholder="Isikan nama panggilan" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Alamat Email</label>
                                <input type="email" autocomplete="off" name="email" id="email" placeholder="Isikan alamat emailmu" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggalLahir">Tanggal Lahir</label>
                                <input type="date" autocomplete="off" name="tanggal_lahir" id="tanggalLahir" placeholder="Isikan tanggal lahirmu" required>
                            </div>
                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input type="number" autocomplete="off" name="umur" id="umur" min="18" placeholder="Isikan umurmu" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat Tempat Tinggal</label>
                                <textarea name="alamat" id="alamat" placeholder="Isikan alamat tempat tinggalmu"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="feature-style1 form-style4 login" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                            <div class="form-group">
                                <label for="no_hp">No. HP/Whatsapp</label>
                                <input type="tel" autocomplete="off" name="no_hp" id="no_hp" placeholder="Isikan No. HP/Whatsapp" required>
                            </div>
                            <div class="form-group">
                                <label for="noHpOrtu">No. HP/Whatsapp Orang Tua/Wali</label>
                                <input type="tel" autocomplete="off" name="no_hp_ortu" id="noHpOrtu" placeholder="Isikan No. HP/Whatsapp Orang Tua/Wali" required>
                            </div>
                            <div class="form-group">
                                <label for="jenisKelamin">Jenis Kelamin</label>
                                <select id="jenisKelamin" class="form-control" name="jenis_kelamin" required>
                                    <option selected>Pilih jenis kelaminmu</option>
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="namaSekolah">Asal Sekolah</label>
                                <input type="text" autocomplete="off" name="asal_sekolah" id="namaSekolah" placeholder="Isikan nama sekolah terakhirmu" required>
                            </div>
                            <div class="form-group">
                                <label for="namaJurusan">Jurusan Sekolah</label>
                                <input type="text" autocomplete="off" name="jurusan_sekolah" id="namaJurusan" placeholder="Isikan nama jurusan di sekolah terakhirmu" required>
                            </div>
                            <div class="form-group">
                                <label for="tahunLulus">Tahun Lulus</label>
                                <input type="number" autocomplete="off" name="tahun_lulus" id="tahunLulus" placeholder="Isikan tahun lulus sekolah terakhirmu" min="2000" max="2023" step="1" required>
                            </div>
                            <p class="landing-text2 mt-3">Darimana kamu mengetahui Rhapsody? :</p>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="jenis_refrensi[]" id="instagram" value="Instagram">
                                        <label class="form-check-label" for="instagram">Instagram</label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="jenis_refrensi[]" id="facebook" value="Facebook">
                                        <label class="form-check-label" for="facebook">Facebook</label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="jenis_refrensi[]" id="tiktok" value="Tiktok">
                                        <label class="form-check-label" for="tiktok">Tiktok</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="jenis_refrensi[]" id="youtube" value="Youtube">
                                        <label class="form-check-label" for="youtube">Youtube</label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="jenis_refrensi[]" id="teman" value="Teman">
                                        <label class="form-check-label" for="teman">Teman</label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="jenis_refrensi[]" id="orangTua" value="Orang Tua">
                                        <label class="form-check-label" for="orangTua">Orang Tua</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="jenis_refrensi[]" id="guru" value="Guru">
                                        <label class="form-check-label" for="guru">Guru</label>
                                    </div>
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="jenis_refrensi[]" id="yangLain" value="Yang Lain">
                                        <label class="form-check-label" for="yangLain">Yang Lain</label>
                                    </div>
                                </div>
                            </div>
                            <input type="text" autocomplete="off" name="jenis_refrensi[]" class="mt-3" id="yangLainText" placeholder="Isikan darimana kamu mengetahui rhapsody">
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

@push('addon-script')
    <script>
        $(".form-check-input").change(function () {
            //check if the selected option is others
            if (this.value === "Yang Lain") {
                //toggle textbox visibility
                $("#yangLainText").toggle();
            }
        });
        document.getElementById("tanggalLahir").max = "2005-12-31";
    </script>
@endpush
