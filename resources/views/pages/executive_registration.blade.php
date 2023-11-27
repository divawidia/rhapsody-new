@extends('layouts.app')

@section('title')
    Registrasi Executive Hybrid | LPK Rhapsody Hospitality Development Center
@endsection

@section('content')
    <!-- Modal -->
    <div class="modal fade" id="modalTesti" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content py-3 px-3" style="background-color: var(--theme-color3); border-radius: 20px !important;">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="button" class="btn-close align-items-end" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="col-12">
                            <h5 class="landing-title5 text-center" data-aos="fade-up" data-aos-duration="1000">
                                Ini Beberapa Kisah Orang yang Sudah
                                <FONT COLOR="#CE5423">Terbantu</FONT> Dengan Adanya Program Kami
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="inner-video-box text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                        <iframe class="modal-video-testi" style=" border-radius:30px" src="https://www.youtube.com/embed/1gr3YyeO8QM?si=vTr6hW-eyE_kOEDC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        {{--                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn position-center popup-video"><i class="fas fa-play"></i></a>--}}
                    </div>
                    <div class="card_wrapper">
                        <div class="container">
                            <div class="row" style="max-width: 700px">
                                <div class="title-area my-4 wow fadeInUp" data-wow-delay="0.3s">
                                    <h5 class="sec-title text-center" data-aos="fade-up" data-aos-duration="1000">Beberapa Alumni Kami</h5>
                                </div>
                                <div class="col-12">
                                    <div class="owl-carousel modal-slider slider_carousel">
                                        <div class="card modal-testi course-style2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                                            <div class="testi-img">
                                                <img
                                                    class="w-100"
                                                    src="/img/testi/Foto 1_Anak Agung Istri Ratna Anggraeni.jpeg"
                                                    alt="Anak Agung Istri Ratna Anggraeni"
                                                />
                                            </div>
                                            <div class="course-content text-center">
                                                <h3 class="text-inherit fs-5 pb-3">
                                                    Anak Agung Istri Ratna Anggraeni
                                                </h3>
                                                <div class="course-meta-modal">
                                                </div>
                                                <div class="course-footer">
                                                    <p class="text-center mx-auto testi-text2">
                                                        Carnival Dream - 2023
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card modal-testi course-style2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                            <div class="testi-img">
                                                <img
                                                    class="w-100"
                                                    src="/img/testi/I Dewa Gede Adiarta Putra_Carnival Dream.jpeg"
                                                    alt="I Dewa Gede Adiarta Putra_Carnival Dream"
                                                />
                                            </div>
                                            <div class="course-content text-center">
                                                <h3 class="text-inherit fs-5 pb-3">
                                                    I Dewa Gede Adiarta Putra
                                                </h3>
                                                <div class="course-meta-modal">
                                                </div>
                                                <div class="course-footer">
                                                    <div class="text-center mx-auto testi-text2">
                                                        Carnival Dream - 2023
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card modal-testi course-style2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                                            <div class="testi-img">
                                                <img
                                                    class="w-100"
                                                    src="/img/testi/I Putu Edik Gunawirawan_Carnival Pride.jpeg"
                                                    alt="I Putu Edik Gunawirawan"
                                                />
                                            </div>
                                            <div class="course-content text-center">
                                                <h3 class="text-inherit fs-5 pb-3">
                                                    I Putu Edik Gunawirawan
                                                </h3>
                                                <div class="course-meta-modal">
                                                </div>
                                                <div class="course-footer">
                                                    <p class="text-center mx-auto testi-text2">
                                                        Carnival Pride - 2023
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card modal-testi course-style2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                            <div class="testi-img">
                                                <img
                                                    class="w-100"
                                                    src="/img/testi/I Putu Yoga Maha Astra_Carnival Luminosa.jpeg"
                                                    alt="I Putu Yoga Maha Astra_Carnival Luminosa.jpeg"
                                                />
                                            </div>
                                            <div class="course-content text-center">
                                                <h3 class="text-inherit fs-5 pb-3">
                                                    I Putu Yoga Maha Astra
                                                </h3>
                                                <div class="course-meta-modal">
                                                </div>
                                                <div class="course-footer">
                                                    <div class="text-center mx-auto testi-text2">
                                                        Carnival Luminosa - 2023
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card modal-testi course-style2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                                            <div class="testi-img">
                                                <img
                                                    class="w-100"
                                                    src="/img/testi/Ida Bagus Putu Adiananta_Carnival Miracle1.jpeg"
                                                    alt="Ida Bagus Putu Adiananta_Carnival Miracle1.jpeg"
                                                />
                                            </div>
                                            <div class="course-content text-center">
                                                <h3 class="text-inherit fs-5 pb-3">
                                                    Ida Bagus Putu Adiananta
                                                </h3>
                                                <div class="course-meta-modal">
                                                </div>
                                                <div class="course-footer">
                                                    <p class="text-center mx-auto testi-text2">
                                                        Carnival Miracle - 2023
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card modal-testi course-style2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                            <div class="testi-img">
                                                <img
                                                    class="w-100"
                                                    src="/img/testi/Ni Putu Novi Sagita Handayani_Carnival Dream.jpeg"
                                                    alt="Ni Putu Novi Sagita Handayani_Carnival Dream"
                                                />
                                            </div>
                                            <div class="course-content text-center">
                                                <h3 class="text-inherit fs-5 pb-3">
                                                    Ni Putu Novi Sagita Handayani
                                                </h3>
                                                <div class="course-meta-modal">
                                                </div>
                                                <div class="course-footer">
                                                    <div class="text-center mx-auto testi-text2">
                                                        Carnival Dream - 2023
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card modal-testi course-style2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                                            <div class="testi-img">
                                                <img
                                                    class="w-100"
                                                    src="/img/testi/Wayan Widi Adnyana_Carnival Conquest.jpeg"
                                                    alt="Wayan Widi Adnyana_Carnival Conquest"
                                                />
                                            </div>
                                            <div class="course-content text-center">
                                                <h3 class="text-inherit fs-5 pb-3">
                                                    Wayan Widi Adnyana
                                                </h3>
                                                <div class="course-meta-modal">
                                                </div>
                                                <div class="course-footer">
                                                    <p class="text-center mx-auto testi-text2">
                                                        Carnival Conquest - 2023
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card modal-testi course-style2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                            <div class="d-flex align-items-center course-content" style="height: 700px">
                                                <h3 class="h5 course-name text-inherit text-center" style="font-size: 50px">
                                                    Dan 450+ Alumni Lainnya
                                                </h3>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

            <form action="{{ route('registrasi-program-executive.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <h1 class="form-title" data-aos="fade-up" data-aos-duration="1000">Form Registrasi</h1>
                <p class="landing-text2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">*Kamu harus berusia minimal 20 tahun untuk mengikuti program executive hybrid</p>
                <div class="col-12 col-md-6">
                    <div class="feature-style1 form-style4 login" data-aos="fade-up" data-aos-duration="1000">
                        <div class="form-group">
                            <p class="landing-text2">Pilihan Program Excutive Hybrid</p>
                            <div class="de_form de_radio row mh-75 g-3">
                                @foreach($program_executives as $program_executive)
                                <div class="radio-img col-12 col-sm-6 col-md-12 col-lg-6" >
                                    <input id="{{ $program_executive->id }}" name="program_executive_id" type="radio" value="{{ $program_executive->id }}">
                                    <label for="{{ $program_executive->id }}">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-6 col-sm-5 col-lg-4">
                                                <img class="radio-icon" src="{{ Storage::url($program_executive->icon) }}" alt="">
                                            </div>
                                            <div class="col-6 col-sm-7 col-lg-8 d-flex align-items-center radio-label">
                                                {{ $program_executive->nama_program }}
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                @endforeach
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
                            <label for="umur">Umur</label>
                            <input type="number" autocomplete="off" name="umur" id="umur" min="20" placeholder="Isikan umurmu" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Tempat Tinggal</label>
                            <textarea name="alamat" id="alamat" placeholder="Isikan alamat tempat tinggalmu"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select id="jenis_kelamin" class="form-control" name="jenis_kelamin" required>
                                <option selected>Pilih jenis kelaminmu</option>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="feature-style1 form-style4 login" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                        <div class="form-group">
                            <label for="no_hp">No. HP/Whatsapp</label>
                            <input type="tel" autocomplete="off" name="no_hp" id="no_hp" placeholder="Isikan dengan format (628XXXXXX). contoh : 6287761360699" required>
                        </div>
                        <div class="form-group">
                            <label for="no_hp_ortu">No. HP/Whatsapp Orang Tua/Wali</label>
                            <input type="tel" autocomplete="off" name="no_hp_ortu" id="no_hp_ortu" placeholder="Isikan dengan format (628XXXXX). contoh : 6287761360699" required>
                        </div>
                        <div class="form-group">
                            <label for="pendidikanTerakhir">Pendidikan Terakhir</label>
                            <select id="pendidikanTerakhir" class="form-control" name="pendidikan_terakhir" required>
                                <option selected>Pilih pendidikan terakhirmu</option>
                                <option value="SMA">SMA</option>
                                <option value="SMK">SMK</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="D4">D4</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="asal_sekolah">Nama Sekolah</label>
                            <input type="text" autocomplete="off" name="asal_sekolah" id="asal_sekolah" placeholder="Isikan nama sekolah terakhirmu" required>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan Sekolah</label>
                            <input type="text" autocomplete="off" name="jurusan" id="jurusan" placeholder="Isikan nama jurusan di sekolah terakhirmu" required>
                        </div>
                        <div class="form-group">
                            <label for="tahun_lulus">Tahun Lulus</label>
                            <input type="number" autocomplete="off" name="tahun_lulus" id="tahun_lulus" placeholder="Isikan tahun lulus sekolah terakhirmu" min="1950" max="2023" step="1" required>
                        </div>
                        <div class="form-group">
                            <label for="pengalaman_kerja">Pengalaman Kerja (Opsional)</label>
                            <textarea name="pengalaman_kerja" id="pengalaman_kerja" placeholder="Isikan pengalaman kerjamu yang berisi: tahun, tempat kerja, posisi, kegiatan pekerjaan yang dilakukan (tidak perlu diisi jika belum memiliki pengalaman kerja)"></textarea>
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
