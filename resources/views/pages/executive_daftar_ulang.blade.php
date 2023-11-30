@extends('layouts.app')

@section('title')
    Registrasi Executive Hybrid | LPK Rhapsody Hospitality Development Center
@endsection

@push('addon-style')
    @include('layouts.admin.head-css')
    <!-- datepicker css -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/flatpickr/flatpickr.min.css') }}">
@endpush

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
                <h1 class="breadcumb-title" data-aos="fade-right" data-aos-duration="1000">Registrasi Program Executive Hybrid</h1>
                <p class="breadcumb-text" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="50">LPK Rhapsody Hospitality Development Center</p>
                <div class="breadcumb-menu-wrap" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-style1 form-style4 login">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Form Registrasi Ulang Peserta Executive Hybrid</h4>
                        </div>
                        <!-- end card header -->
                        <div class="card-body">
                            <form action="#">
                                <ul class="wizard-nav mb-5">
                                    <li class="wizard-list-item">
                                        <div class="list-item">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                 title="Seller Details">
                                                <i class="bx bx-user-circle"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wizard-list-item">
                                        <div class="list-item">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                 title="Company Document">
                                                <i class="bx bx-file"></i>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="wizard-list-item">
                                        <div class="list-item">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                 title="Bank Details">
                                                <i class="bx bx-edit"></i>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="wizard-list-item">
                                        <div class="list-item">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                 title="Pengalaman Kerja">
                                                <i class="bx bx-edit"></i>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="wizard-list-item">
                                        <div class="list-item">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                 title="Document">
                                                <i class="bx bx-edit"></i>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="wizard-list-item">
                                        <div class="list-item">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                 title="Document Persyaratan">
                                                <i class="bx bx-edit"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- wizard-nav -->

                                <div class="wizard-tab">
                                    <div class="text-center mb-4">
                                        <h2>Detail Peserta</h2>
                                    </div>
                                    <div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <div class="form-group">
                                                        <p class="landing-text2">Pilihan Program Excutive Hybrid</p>
                                                        <div class="de_form de_radio row mh-50 g-3">
{{--                                                            @foreach($program_executives as $program_executive)--}}
                                                                <div class="radio-img col-12 col-sm-6 col-md-12 col-lg-6" >
                                                                    <input id="i" name="program_executive_id" type="radio" value="i">
                                                                    <label for="i">
                                                                        <div class="row d-flex align-items-center">
                                                                            <div class="col-6 col-sm-5 col-lg-4">
                                                                                <img class="radio-icon" src="/storage/assets/program-icon/Service.png" alt="">
                                                                            </div>
                                                                            <div class="col-6 col-sm-7 col-lg-8 d-flex align-items-center radio-label">
                                                                                Galley & Cook
                                                                            </div>
                                                                        </div>
                                                                    </label>
                                                                </div>
{{--                                                            @endforeach--}}
                                                            <div class="radio-img col-12 col-sm-6 col-md-12 col-lg-6" >
                                                                <input id="i" name="program_executive_id" type="radio" value="i">
                                                                <label for="i">
                                                                    <div class="row d-flex align-items-center">
                                                                        <div class="col-6 col-sm-5 col-lg-4">
                                                                            <img class="radio-icon" src="/storage/assets/program-icon/Service.png" alt="">
                                                                        </div>
                                                                        <div class="col-6 col-sm-7 col-lg-8 d-flex align-items-center radio-label">
                                                                            Galley & Cook
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama_lengkap">Nama Lengkap</label>
                                                        <input type="text" autocomplete="off" name="nama_lengkap" id="nama_lengkap" placeholder="Isikan nama lengkapmu" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama_panggilan">Nama Panggilan</label>
                                                        <input type="text" autocomplete="off" name="nama_panggilan" id="nama_panggilan" placeholder="Isikan nama panggilan" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Alamat Email</label>
                                                        <input type="email" autocomplete="off" name="email" id="email" placeholder="Isikan alamat emailmu" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                                        <input type="date" autocomplete="off" name="tanggal_lahir" id="tanggal_lahir" placeholder="Isikan tanggal lahirmu" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tempat_lahir">Tempat Lahir</label>
                                                        <input type="text" autocomplete="off" name="tempat_lahir" id="tempat_lahir" placeholder="Isikan tempat lahirmu" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin" class="form-control" name="jenis_kelamin" required>
                                                            <option selected>Pilih jenis kelaminmu</option>
                                                            <option value="laki-laki">Laki-laki</option>
                                                            <option value="perempuan">Perempuan</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="status_kawin">Status Kawin</label>
                                                        <select id="status_kawin" class="form-control" name="status_kawin" required>
                                                            <option selected>Pilih Status Kawinmu</option>
                                                            <option value="kawin">Kawin</option>
                                                            <option value="belum kawin">Belum Kawin</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="agama">Agama</label>
                                                        <select id="agama" class="form-control" name="agama" required>
                                                            <option selected>Pilih Agama</option>
                                                            <option value="Hindu">Hindu</option>
                                                            <option value="Islam">Islam</option>
                                                            <option value="Kristen Protestan">Kristen Protestan</option>
                                                            <option value="Kristen Katholik">Kristen Katholik</option>
                                                            <option value="Buddha">Buddha</option>
                                                            <option value="Kong Hu Chu">Kong Hu Chu</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="no_ktp">No. KTP</label>
                                                    <input type="number" autocomplete="off" name="no_ktp" id="no_ktp" placeholder="Isikan no. ktpmu" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="no_hp">No. HP/Whatsapp</label>
                                                    <input type="tel" autocomplete="off" name="no_hp" id="no_hp" placeholder="Isikan dengan format (628XXXXXX). contoh : 6287761360699" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tinggi_badan">Tinggi Badan (Cm)</label>
                                                    <input type="number" autocomplete="off" name="tinggi_badan" id="tinggi_badan" placeholder="Isikan tinggi badanmu" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="berat_badan">Berat Badan (Kg)</label>
                                                    <input type="number" autocomplete="off" name="berat_badan" id="berat_badan" placeholder="Isikan berat badanmu" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="hobi">Hobi</label>
                                                    <input type="text" autocomplete="off" name="hobi" id="hobi" placeholder="Isikan hobimu" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="facebook">Akun Facebook</label>
                                                    <input type="text" autocomplete="off" name="facebook" id="facebook" placeholder="Isikan username facebookmu" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="instagram">Akun Instagram</label>
                                                    <input type="text" autocomplete="off" name="instagram" id="instagram" placeholder="Isikan username instagrammu" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="ukuran_baju">Ukuran Baju</label>
                                                    <select id="ukuran_baju" class="form-control" name="ukuran_baju" required>
                                                        <option selected>Pilih ukuran bajumu</option>
                                                        <option value="S">S</option>
                                                        <option value="M">M</option>
                                                        <option value="L">L</option>
                                                        <option value="XL">XL</option>
                                                        <option value="XXL">XXL</option>
                                                        <option value="XXXL">XXXL</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="ukuran_celana">Ukuran Celana</label>
                                                    <select id="ukuran_celana" class="form-control" name="ukuran_celana" required>
                                                        <option selected>Pilih ukuran celanamu</option>
                                                        <option value="26">26</option>
                                                        <option value="28">28</option>
                                                        <option value="30">30</option>
                                                        <option value="32">32</option>
                                                        <option value="34">34</option>
                                                        <option value="36">36</option>
                                                        <option value="38">38</option>
                                                        <option value="40">40</option>
                                                        <option value="42">42</option>
                                                        <option value="44">44</option>
                                                        <option value="46">46</option>
                                                        <option value="48">48</option>
                                                    </select>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="kewarganegaraan">Asal Kewarganegaraan</label>
                                                    <input type="text" autocomplete="off" name="kewarganegaraan" id="kewarganegaraan" placeholder="Isikan asal kewarganegaraan" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kabupaten">Kabupaten</label>
                                                    <select id="kabupaten" class="form-control" name="kabupaten" required>
                                                        <option selected>Pilih asal kabupaten</option>
                                                        <option value="26">26</option>
                                                        <option value="28">28</option>
                                                        <option value="30">30</option>
                                                        <option value="32">32</option>
                                                        <option value="34">34</option>
                                                        <option value="36">36</option>
                                                        <option value="38">38</option>
                                                        <option value="40">40</option>
                                                        <option value="42">42</option>
                                                        <option value="44">44</option>
                                                        <option value="46">46</option>
                                                        <option value="48">48</option>
                                                    </select>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="provinsi">Provinsi</label>
                                                    <select id="provinsi" class="form-control" name="provinsi" required>
                                                        <option selected>Pilih ukuran celanamu</option>
                                                        <option value="26">26</option>
                                                        <option value="28">28</option>
                                                        <option value="30">30</option>
                                                        <option value="32">32</option>
                                                        <option value="34">34</option>
                                                        <option value="36">36</option>
                                                        <option value="38">38</option>
                                                        <option value="40">40</option>
                                                        <option value="42">42</option>
                                                        <option value="44">44</option>
                                                        <option value="46">46</option>
                                                        <option value="48">48</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kecamatan">Kecamatan</label>
                                                    <select id="kecamatan" class="form-control" name="kecamatan" required>
                                                        <option selected>Pilih asal kecamatan </option>
                                                        <option value="26">26</option>
                                                        <option value="28">28</option>
                                                        <option value="30">30</option>
                                                        <option value="32">32</option>
                                                        <option value="34">34</option>
                                                        <option value="36">36</option>
                                                        <option value="38">38</option>
                                                        <option value="40">40</option>
                                                        <option value="42">42</option>
                                                        <option value="44">44</option>
                                                        <option value="46">46</option>
                                                        <option value="48">48</option>
                                                    </select>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="alamat">Alamat Tempat Tinggal</label>
                                                    <textarea name="alamat" id="alamat" placeholder="Isikan alamat tempat tinggalmu"></textarea>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div>

                                </div>
                                <!-- wizard-tab -->

                                <div class="wizard-tab">
                                    <div>
                                        <div class="text-center mb-4">
                                            <h2>Kontak Darurat (Orang yang Bertanggung Jawab)</h2>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="nama_lengkap">Nama yang Bertanggung Jawab</label>
                                                        <input type="text" autocomplete="off" name="nama_lengkap" id="nama_lengkap" placeholder="Isikan nama lengkapmu" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="hubungan">Hubungan</label>
                                                        <select id="hubungan" class="form-control" name="hubungan" required>
                                                            <option selected>Pilih hubungan keluarga</option>
                                                            <option value="Saudara">Saudara</option>
                                                            <option value="Orang Tua">Orang Tua</option>
                                                            <option value="Istri">Istri</option>
                                                            <option value="Suami">Suami</option>
                                                            <option value="Anak">Anak</option>
                                                            <option value="Yang Lain">Yang Lain</option>
                                                        </select>
                                                        <input type="text" autocomplete="off" name="hubungan" class="mt-3" id="yangLainText" placeholder="Isikan hubungan dengan kontak yang bertanggung jawab">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="no_hp">No. HP/Whatsapp</label>
                                                        <input type="tel" autocomplete="off" name="no_hp" id="no_hp" placeholder="Isikan dengan format (628XXXXXX). contoh : 6287761360699" required>
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div><!-- end form -->
                                    </div>
                                </div>
                                <!-- wizard-tab -->

                                <div class="wizard-tab">
                                    <div>
                                        <div class="text-center mb-4">
                                            <h5>Riwayat Pendidikan</h5>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="nama_sd">Nama SD</label>
                                                        <input type="text" autocomplete="off" name="nama_sd" id="nama_sd" placeholder="Isikan nama sd" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tahun_mulai_sd">Tahun Mulai SD</label>
                                                        <input type="number" autocomplete="off" name="tahun_mulai_sd" id="tahun_mulai_sd" placeholder="Isikan nama lengkapmu" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tahun_tamat_sd">Tahun Tamat SD</label>
                                                        <input type="number" autocomplete="off" name="tahun_tamat_sd" id="tahun_tamat_sd" placeholder="Isikan nama lengkapmu" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama_smp">Nama SMP</label>
                                                        <input type="text" autocomplete="off" name="nama_smp" id="nama_smp" placeholder="Isikan nama sd" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tahun_mulai_smp">Tahun Mulai SMP</label>
                                                        <input type="number" autocomplete="off" name="tahun_mulai_smp" id="tahun_mulai_smp" placeholder="Isikan nama lengkapmu" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tahun_tamat_smp">Tahun Tamat SMP</label>
                                                        <input type="number" autocomplete="off" name="tahun_tamat_smp" id="tahun_tamat_smp" placeholder="Isikan nama lengkapmu" required>
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="nama_sma/smk">Nama SMA/SMK</label>
                                                        <input type="text" autocomplete="off" name="nama_sma/smk" id="nama_sma/smk" placeholder="Isikan nama sd" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tahun_mulai_sma_smk">Tahun Mulai SMA/SMK</label>
                                                        <input type="number" autocomplete="off" name="tahun_mulai_sma_smk" id="tahun_mulai_sma_smk" placeholder="Isikan nama lengkapmu" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tahun_tamat_sma_smk">Tahun Tamat SMA/SMK</label>
                                                        <input type="number" autocomplete="off" name="tahun_tamat_sma_smk" id="tahun_tamat_sma_smk" placeholder="Isikan nama lengkapmu" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama_kampus">Nama Kampus Kuliah</label>
                                                        <input type="text" autocomplete="off" name="nama_kampus" id="nama_kampus" placeholder="Isikan nama sd" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tahun_mulai_kuliah">Tahun Mulai Kuliah</label>
                                                        <input type="number" autocomplete="off" name="tahun_mulai_kuliah" id="tahun_mulai_kuliah" placeholder="Isikan nama lengkapmu" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tahun_tamat_kuliah">Tahun Tamat Kuliah</label>
                                                        <input type="number" autocomplete="off" name="tahun_tamat_kuliah" id="tahun_tamat_kuliah" placeholder="Isikan nama lengkapmu" required>
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div><!-- end form -->

                                    </div>
                                </div>
                                <!-- wizard-tab -->

                                <div class="wizard-tab">
                                    <div class="text-center mb-4">
                                        <h2>Pengalaman Kerja</h2>
                                    </div>
                                    <div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <div class="form-group">
                                                        <label for="nama_lengkap">Nama Hotel/Villa</label>
                                                        <input type="text" autocomplete="off" name="nama_lengkap" id="nama_lengkap" placeholder="Isikan nama lengkapmu" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama_panggilan">Posisi</label>
                                                        <input type="text" autocomplete="off" name="nama_panggilan" id="nama_panggilan" placeholder="Isikan nama panggilan" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tanggal_lahir">Tanggal Mulai</label>
                                                        <input type="date" autocomplete="off" name="tanggal_lahir" id="tanggal_lahir" placeholder="Isikan tanggal lahirmu" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tanggal_lahir">Tanggal Selesai</label>
                                                        <input type="date" autocomplete="off" name="tanggal_lahir" id="tanggal_lahir" placeholder="Isikan tanggal lahirmu" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin" class="form-control" name="jenis_kelamin" required>
                                                            <option selected>Pilih jenis kelaminmu</option>
                                                            <option value="laki-laki">Laki-laki</option>
                                                            <option value="perempuan">Perempuan</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="status_kawin">Status Kawin</label>
                                                        <select id="status_kawin" class="form-control" name="status_kawin" required>
                                                            <option selected>Pilih Status Kawinmu</option>
                                                            <option value="kawin">Kawin</option>
                                                            <option value="belum kawin">Belum Kawin</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="agama">Agama</label>
                                                        <select id="agama" class="form-control" name="agama" required>
                                                            <option selected>Pilih Agama</option>
                                                            <option value="Hindu">Hindu</option>
                                                            <option value="Islam">Islam</option>
                                                            <option value="Kristen Protestan">Kristen Protestan</option>
                                                            <option value="Kristen Katholik">Kristen Katholik</option>
                                                            <option value="Buddha">Buddha</option>
                                                            <option value="Kong Hu Chu">Kong Hu Chu</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="no_ktp">No. KTP</label>
                                                    <input type="number" autocomplete="off" name="no_ktp" id="no_ktp" placeholder="Isikan no. ktpmu" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="no_hp">No. HP/Whatsapp</label>
                                                    <input type="tel" autocomplete="off" name="no_hp" id="no_hp" placeholder="Isikan dengan format (628XXXXXX). contoh : 6287761360699" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tinggi_badan">Tinggi Badan (Cm)</label>
                                                    <input type="number" autocomplete="off" name="tinggi_badan" id="tinggi_badan" placeholder="Isikan tinggi badanmu" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="berat_badan">Berat Badan (Kg)</label>
                                                    <input type="number" autocomplete="off" name="berat_badan" id="berat_badan" placeholder="Isikan berat badanmu" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="hobi">Hobi</label>
                                                    <input type="text" autocomplete="off" name="hobi" id="hobi" placeholder="Isikan hobimu" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="facebook">Akun Facebook</label>
                                                    <input type="text" autocomplete="off" name="facebook" id="facebook" placeholder="Isikan username facebookmu" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="instagram">Akun Instagram</label>
                                                    <input type="text" autocomplete="off" name="instagram" id="instagram" placeholder="Isikan username instagrammu" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="ukuran_baju">Ukuran Baju</label>
                                                    <select id="ukuran_baju" class="form-control" name="ukuran_baju" required>
                                                        <option selected>Pilih ukuran bajumu</option>
                                                        <option value="S">S</option>
                                                        <option value="M">M</option>
                                                        <option value="L">L</option>
                                                        <option value="XL">XL</option>
                                                        <option value="XXL">XXL</option>
                                                        <option value="XXXL">XXXL</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="ukuran_celana">Ukuran Celana</label>
                                                    <select id="ukuran_celana" class="form-control" name="ukuran_celana" required>
                                                        <option selected>Pilih ukuran celanamu</option>
                                                        <option value="26">26</option>
                                                        <option value="28">28</option>
                                                        <option value="30">30</option>
                                                        <option value="32">32</option>
                                                        <option value="34">34</option>
                                                        <option value="36">36</option>
                                                        <option value="38">38</option>
                                                        <option value="40">40</option>
                                                        <option value="42">42</option>
                                                        <option value="44">44</option>
                                                        <option value="46">46</option>
                                                        <option value="48">48</option>
                                                    </select>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="kewarganegaraan">Asal Kewarganegaraan</label>
                                                    <input type="text" autocomplete="off" name="kewarganegaraan" id="kewarganegaraan" placeholder="Isikan asal kewarganegaraan" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kabupaten">Kabupaten</label>
                                                    <select id="kabupaten" class="form-control" name="kabupaten" required>
                                                        <option selected>Pilih asal kabupaten</option>
                                                        <option value="26">26</option>
                                                        <option value="28">28</option>
                                                        <option value="30">30</option>
                                                        <option value="32">32</option>
                                                        <option value="34">34</option>
                                                        <option value="36">36</option>
                                                        <option value="38">38</option>
                                                        <option value="40">40</option>
                                                        <option value="42">42</option>
                                                        <option value="44">44</option>
                                                        <option value="46">46</option>
                                                        <option value="48">48</option>
                                                    </select>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="provinsi">Provinsi</label>
                                                    <select id="provinsi" class="form-control" name="provinsi" required>
                                                        <option selected>Pilih ukuran celanamu</option>
                                                        <option value="26">26</option>
                                                        <option value="28">28</option>
                                                        <option value="30">30</option>
                                                        <option value="32">32</option>
                                                        <option value="34">34</option>
                                                        <option value="36">36</option>
                                                        <option value="38">38</option>
                                                        <option value="40">40</option>
                                                        <option value="42">42</option>
                                                        <option value="44">44</option>
                                                        <option value="46">46</option>
                                                        <option value="48">48</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kecamatan">Kecamatan</label>
                                                    <select id="kecamatan" class="form-control" name="kecamatan" required>
                                                        <option selected>Pilih asal kecamatan </option>
                                                        <option value="26">26</option>
                                                        <option value="28">28</option>
                                                        <option value="30">30</option>
                                                        <option value="32">32</option>
                                                        <option value="34">34</option>
                                                        <option value="36">36</option>
                                                        <option value="38">38</option>
                                                        <option value="40">40</option>
                                                        <option value="42">42</option>
                                                        <option value="44">44</option>
                                                        <option value="46">46</option>
                                                        <option value="48">48</option>
                                                    </select>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="alamat">Alamat Tempat Tinggal</label>
                                                    <textarea name="alamat" id="alamat" placeholder="Isikan alamat tempat tinggalmu"></textarea>
                                                </div>
                                            </div><!-- end col -->
                                        </div><!-- end row -->
                                    </div>

                                </div>
                                <!-- wizard-tab -->

                                <div class="wizard-tab">
                                    <div>
                                        <div class="text-center mb-4">
                                            <h2>Kontak Darurat (Orang yang Bertanggung Jawab)</h2>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="nama_lengkap">Nama yang Bertanggung Jawab</label>
                                                        <input type="text" autocomplete="off" name="nama_lengkap" id="nama_lengkap" placeholder="Isikan nama lengkapmu" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="hubungan">Hubungan</label>
                                                        <select id="hubungan" class="form-control" name="hubungan" required>
                                                            <option selected>Pilih hubungan keluarga</option>
                                                            <option value="Saudara">Saudara</option>
                                                            <option value="Orang Tua">Orang Tua</option>
                                                            <option value="Istri">Istri</option>
                                                            <option value="Suami">Suami</option>
                                                            <option value="Anak">Anak</option>
                                                            <option value="Yang Lain">Yang Lain</option>
                                                        </select>
                                                        <input type="text" autocomplete="off" name="hubungan" class="mt-3" id="yangLainText" placeholder="Isikan hubungan dengan kontak yang bertanggung jawab">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="no_hp">No. HP/Whatsapp</label>
                                                        <input type="tel" autocomplete="off" name="no_hp" id="no_hp" placeholder="Isikan dengan format (628XXXXXX). contoh : 6287761360699" required>
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div><!-- end form -->
                                    </div>
                                </div>
                                <!-- wizard-tab -->

                                <div class="wizard-tab">
                                    <div>
                                        <div class="text-center mb-4">
                                            <h5>Riwayat Pendidikan</h5>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="nama_sd">Nama SD</label>
                                                        <input type="text" autocomplete="off" name="nama_sd" id="nama_sd" placeholder="Isikan nama sd" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tahun_mulai_sd">Tahun Mulai SD</label>
                                                        <input type="number" autocomplete="off" name="tahun_mulai_sd" id="tahun_mulai_sd" placeholder="Isikan nama lengkapmu" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tahun_tamat_sd">Tahun Tamat SD</label>
                                                        <input type="number" autocomplete="off" name="tahun_tamat_sd" id="tahun_tamat_sd" placeholder="Isikan nama lengkapmu" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama_smp">Nama SMP</label>
                                                        <input type="text" autocomplete="off" name="nama_smp" id="nama_smp" placeholder="Isikan nama sd" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tahun_mulai_smp">Tahun Mulai SMP</label>
                                                        <input type="number" autocomplete="off" name="tahun_mulai_smp" id="tahun_mulai_smp" placeholder="Isikan nama lengkapmu" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tahun_tamat_smp">Tahun Tamat SMP</label>
                                                        <input type="number" autocomplete="off" name="tahun_tamat_smp" id="tahun_tamat_smp" placeholder="Isikan nama lengkapmu" required>
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="nama_sma/smk">Nama SMA/SMK</label>
                                                        <input type="text" autocomplete="off" name="nama_sma/smk" id="nama_sma/smk" placeholder="Isikan nama sd" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tahun_mulai_sma_smk">Tahun Mulai SMA/SMK</label>
                                                        <input type="number" autocomplete="off" name="tahun_mulai_sma_smk" id="tahun_mulai_sma_smk" placeholder="Isikan nama lengkapmu" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tahun_tamat_sma_smk">Tahun Tamat SMA/SMK</label>
                                                        <input type="number" autocomplete="off" name="tahun_tamat_sma_smk" id="tahun_tamat_sma_smk" placeholder="Isikan nama lengkapmu" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama_kampus">Nama Kampus Kuliah</label>
                                                        <input type="text" autocomplete="off" name="nama_kampus" id="nama_kampus" placeholder="Isikan nama sd" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tahun_mulai_kuliah">Tahun Mulai Kuliah</label>
                                                        <input type="number" autocomplete="off" name="tahun_mulai_kuliah" id="tahun_mulai_kuliah" placeholder="Isikan nama lengkapmu" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tahun_tamat_kuliah">Tahun Tamat Kuliah</label>
                                                        <input type="number" autocomplete="off" name="tahun_tamat_kuliah" id="tahun_tamat_kuliah" placeholder="Isikan nama lengkapmu" required>
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div><!-- end form -->

                                    </div>
                                </div>
                                <!-- wizard-tab -->

                                <div class="d-flex align-items-start gap-3 mt-4">
                                    <button type="button" class="btn btn-primary w-sm" id="prevBtn"
                                            onclick="nextPrev(-1)">Previous</button>
                                    <button type="button" class="btn btn-primary w-sm ms-auto" id="nextBtn"
                                            onclick="nextPrev(1)">Next</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </section>
@endsection

@push('addon-script')
    <!-- vendor-scripts -->
    @include('layouts.admin.vendor-scripts')
    <!-- datepicker js -->
    <script src="{{ URL::asset('build/libs/flatpickr/flatpickr.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/form-wizard.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
    <script>
        function slider_carouselInit() {
            $('.owl-carousel.slider_carousel').owlCarousel({
                dots: false,
                rewind: true,
                stagePadding: 2,
                autoplay: false,
                nav: true,
                navText: ["<img src='/img/icon/left.png'>","<img src='/img/icon/next.png'>"],
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2,
                    }
                }
            });
        }
        slider_carouselInit();
    </script>
    <script>
        $(".form-check-input").change(function () {
            //check if the selected option is others
            if (this.value === "Yang Lain") {
                //toggle textbox visibility
                $("#yangLainText").toggle();
            }
        });
        document.getElementById("tanggalLahir").max = "2003-12-31";
    </script>
    <script>
        $(document).ready(function(){
            $("#modalTesti").modal('show');
        });
    </script>
@endpush
