@extends('layouts.app')

@section('title')
    Food & Beverages Product | LPK Rhapsody Hospitality Development Center
@endsection

@section('content')
<!--==============================
    Breadcumb
============================== -->
<div
    class="breadcumb-wrapper"
    style="background: url('/img/bg/top-bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
            background-position: center center;"
>
    <div class="container z-index-common">
        <div class="breadcumb-content text-center">
            <h1 class="breadcumb-title"data-aos="fade-up" data-aos-duration="1000">Food & Beverages Product</h1>
            <ul class="breadcumb-menu" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <li><a href="{{ route('home') }}">Beranda</a></li>
                <li>Diploma 1</li>
                <li>Food & Beverages Product</li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
  Course Area
==============================-->
<section class="course-details space-top space-extra-bottom">
    <div class="container">
        <div class="row flex-row-reverse gx-50">
            <div class="col-lg-8">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner mega-hover course-img" data-aos="fade-up"
                         data-aos-duration="1000">
                        <div class="carousel-item active">
                            <img src="/img/course/cook1.jpg" class="d-block w-100" alt="front-office1">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/course/cook2.jpg" class="d-block w-100" alt="front-office2">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/course/cook3.jpg" class="d-block w-100" alt="front-office2">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <h2 class="course-title" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-delay="100">Food & Beverages Product</h2>
                <div class="row course-meta pb-3" data-aos="fade-up"
                     data-aos-duration="1000" data-aos-delay="200">
                    <div class="col-auto" data-aos="fade-up"
                         data-aos-duration="1000" data-aos-delay="250">
                        <div class="course-price">
                            <span class="currency fw-bold">Rp.13.000.000</span>
                        </div>
                        <p class="fs-6 mt-2">Biaya pendidikan bisa diangsur 3x</p>
                        <p class="fs-6 mt-n3">Bagi peserta dari luar Bali dikenakan biaya yang berbeda</p>
                        <p class="fs-6 mt-n3">Biaya pendidikan sudah termasuk:</p>
                        <div class="fs-6 mt-n3">
                            <ul>
                                <li>Seragam teori & praktek</li>
                                <li>Buku perkuliahan</li>
                                <li>Kursus bahasa inggris industri</li>
                                <li>Untuk peserta latih dari luar Bali mendapatkan mesh tempat tinggal</li>
                                <li>Register membership Victory International Placement Center</li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="col-auto d-flex justify-content-end align-items-start"
                        data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="250"
                    >
                        <a class="vs-btn" href="{{ route('registrasi-program-d1') }}">Daftar Sekarang</a>
                    </div>
                </div>
                <div class="" data-aos="fade-up"
                     data-aos-duration="1000" data-aos-delay="100">
                    <h5 class="left-border mt-4">Overview</h5>
                    <p>
                        Program Food & Beverage Product Menjadi salah satu program unggulan, untuk dapat berkarir di bidang pengolahan makanan
                        yang menjadi
                        sarapan tinggi untuk industri pariwisata,
                        kami berfokus pada kualitas skill dalam memasak serta profesional kerja dalam
                        bidang
                        makanan
                        standar yang tinggi.
                    </p>
                    <p>
                        Kembangkan bakat Anda, penuhi rasa ingin tahu Anda, dan bangun fondasi yang kuat untuk sukses di salah satu program sertifikasi kuliner terbaik dunia.
                        Kurikulum komprehensif kami memadukan pendidikan seni kuliner terbaik dengan teori bisnis praktis. Instruktur kelas dunia kami, yang pernah bekerja di industri pelayaran dan juga restoran berbintang atau memasak untuk keluarga kerajaan, memberikan keahlian, inspirasi, dan dukungan sepanjang perjalanan kuliner Anda. Kelas master langsung dengan ikon industri memberi Anda pengalaman bekerja berdampingan dengan legenda dunia kuliner – mendapatkan pengetahuan mendalam yang berharga dalam prosesnya.
                    </p>
                </div>
                <div class="" data-aos="fade-up"
                     data-aos-duration="1000" data-aos-delay="200">
                    <h5 class="mt-4 left-border">Special Feature</h5>

                    <div class="list-style1 vs-list">
                        <ul>
                            <li>
                                <p class="fs-6 fw-bold my-0">Empower Workshop</p>
                                <p>
                                    Program workshop yang melibatkan para industy expert untuk berbagi pengalaman sekaligus memberi motivasi kepada peserta latih
                                </p>
                            </li>
                            <li>
                                <p class="fs-6 fw-bold my-0">Free Agency Membership</p>
                                <p>
                                    Free membership of Victory cruise agency
                                </p>
                            </li>
                            <li>
                                <p class="fs-6 fw-bold my-0">Tempat Praktek & Lab</p>
                                <p>
                                    Untuk mendukung program, kami menyediakan tempat praktek ataupun lab yang sesuai dengan
                                    standar industri pariwisata.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-4 pt-lg-2" data-aos="fade-up"
                     data-aos-duration="1000" data-aos-delay="100">
                    <h5 class="left-border">Program Description</h5>
                    <div class="list-style1 vs-list">
                        <ul>
                            <li>
                                Durasi pendidikan teori selama 1 bulan dan praktek selama 3 bulan
                            </li>
                            <li>
                                Metode perkuliahan blended learning
                            </li>
                            <li>
                                On the job training di industri perhotelan selama 6 bulan
                            </li>
                            <li>
                                Pengurusan keberangkatan ke luar negeri selama 2 bulan
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-4 pt-lg-2" data-aos="fade-up"
                     data-aos-duration="1000" data-aos-delay="100">
                    <h5 class="left-border">Alumni Lulusan Program Kami</h5>
                    <div class="owl-carousel slider_carousel">
                        <div class="card course-style2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                            <div class="testi-img">
                                <img
                                    class="w-100"
                                    src="/img/testi/Foto 1_Anak Agung Istri Ratna Anggraeni.jpeg"
                                    alt="Anak Agung Istri Ratna Anggraeni"
                                />
                            </div>
                            <div class="course-content text-center">
                                <h3 class="testi text-inherit">
                                    Anak Agung Istri Ratna Anggraeni
                                </h3>
                                <div class="course-footer">
                                    <div class="text-center mx-auto testi-text">
                                        Carnival Dream - 2023
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card course-style2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <div class="testi-img">
                                <img
                                    class="w-100"
                                    src="/img/testi/I Dewa Gede Adiarta Putra_Carnival Dream.jpeg"
                                    alt="I Dewa Gede Adiarta Putra_Carnival Dream"
                                />
                            </div>
                            <div class="course-content text-center">
                                <h3 class="testi text-inherit">
                                    I Dewa Gede Adiarta Putra
                                </h3>
                                <div class="course-footer">
                                    <div class="text-center mx-auto testi-text">
                                        Carnival Dream - 2023
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card course-style2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">
                            <div class="testi-img">
                                <img
                                    class="w-100"
                                    src="/img/testi/I Putu Edik Gunawirawan_Carnival Pride.jpeg"
                                    alt="I Putu Edik Gunawirawan_Carnival Pride"
                                />
                            </div>
                            <div class="course-content text-center">
                                <h3 class="testi text-inherit">
                                    I Putu Edik Gunawirawan
                                </h3>
                                <div class="course-footer">
                                    <div class="text-center mx-auto testi-text">
                                        Carnival Dream - 2023
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card course-style2" data-aos="fade-up" data-aos-duration="1000">
                            <div class="testi-img">
                                <img
                                    class="w-100"
                                    src="/img/testi/I Putu Yoga Maha Astra_Carnival Luminosa.jpeg"
                                    alt="I Putu Yoga Maha Astra_Carnival Luminosa"
                                />
                            </div>
                            <div class="course-content text-center">
                                <h3 class="testi text-inherit">
                                    I Putu Yoga Maha Astra
                                </h3>
                                <div class="course-footer">
                                    <div class="text-center mx-auto testi-text">
                                        Carnival Luminosa - 2023
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card course-style2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                            <div class="testi-img">
                                <img
                                    class="w-100"
                                    src="/img/testi/Ida Bagus Putu Adiananta_Carnival Miracle1.jpeg"
                                    alt="Ida Bagus Putu Adiananta_Carnival Miracle"
                                />
                            </div>
                            <div class="course-content text-center">
                                <h3 class="testi text-inherit">
                                    Ida Bagus Putu Adiananta
                                </h3>
                                <div class="course-footer">
                                    <div class="text-center mx-auto testi-text">
                                        Carnival Miracle - 2023
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card course-style2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <div class="testi-img">
                                <img
                                    class="w-100"
                                    src="/img/testi/Ni Putu Novi Sagita Handayani_Carnival Dream.jpeg"
                                    alt="Ni Putu Novi Sagita Handayani_Carnival Dream"
                                />
                            </div>
                            <div class="course-content text-center">
                                <h3 class="testi text-inherit">
                                    Ni Putu Novi Sagita Handayani
                                </h3>
                                <div class="course-footer">
                                    <div class="text-center mx-auto testi-text">
                                        Carnival Dream - 2023
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card course-style2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <div class="testi-img">
                                <img
                                    class="w-100"
                                    src="/img/testi/Wayan Widi Adnyana_Carnival Conquest.jpeg"
                                    alt="Wayan Widi Adnyana_Carnival Conquest"
                                />
                            </div>
                            <div class="course-content text-center">
                                <h3 class="testi text-inherit">
                                    Wayan Widi Adnyana
                                </h3>
                                <div class="course-footer">
                                    <div class="text-center mx-auto testi-text">
                                        Carnival Conquest - 2023
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card course-style2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <div class="d-flex align-items-center course-content" style="height: 611px">
                                <h3 class="h5 course-name text-inherit text-center" style="font-size: 44px">
                                    Dan 450+ Alumni Lainnya
                                </h3>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="mt-4 pt-lg-2" data-aos="fade-up"
                     data-aos-duration="1000" data-aos-delay="100">
                    <h5 class="left-border">Ayo Daftarkan Dirimu Sekarang!</h5>
                    <p>
                        Daftarkan dirimu sekarang dan raih impian untuk menggapai kesuksesan di industri perhotelan dan kapal pesiar
                    </p>
                    <a href="{{ route('registrasi-program-d1') }}" class="vs-btn">Daftar Sekarang</a>
                </div>
            </div>
            <div class="col-lg-4 mt-4 pt-4 pt-lg-0">
                <aside>
                    <div class="widget" data-aos="fade-up" data-aos-duration="1000">
                        <h3 class="left-border">Diploma 1</h3>
                        <div class="course-list">
                            <ul>
                                <li>
                                    <a href="{{ route('f&b-product') }}"
                                    ><i class="fal fa-book"></i>Food & Baverage Product</a
                                    >
                                </li>
                                <li>
                                    <a href="{{ route('f&b-service') }}"
                                    ><i class="fal fa-book"></i>Food & Baverage Service</a
                                    >
                                </li>
                                <li>
                                    <a href="{{ route('housekeeping') }}"
                                    ><i class="fal fa-book"></i>Housekeeping</a
                                    >
                                </li>
                                <li>
                                    <a href="{{ route('front-office') }}"
                                    ><i class="fal fa-book"></i>Front Office</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget" data-aos="fade-up" data-aos-duration="1000">
                        <h3 class="left-border">Executive Class Hybrid</h3>
                        <div class="course-list">
                            <ul>
                                <li>
                                    <a href="{{ route('laundry&housekeeping') }}"
                                    ><i class="fal fa-book"></i>Laundry & Housekeeping</a
                                    >
                                </li>
                                <li>
                                    <a href="{{ route('galley&cook') }}"
                                    ><i class="fal fa-book"></i>Galley & Cook</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up"
                         data-aos-duration="1000" data-aos-delay="100">
                        <div class="col-md-7 col-lg-12">
                            <div
                                class="img-box5 mega-hover wow fadeInUp"
                                data-wow-delay="0.3s"
                            >
                                <div class="img-1">
                                    <img
                                        class="w-100"
                                        src="/img/about/about-2-4.jpg"
                                        alt="About Img"
                                    />
                                </div>
                                <div class="box-content">
                                    <h3 class="img-title">Registrasi Online</h3>
                                    <p class="img-text">
                                        Program akademik berkualitas yang dirancang oleh ahli di industri
                                    </p>
                                    <a href="{{ route('registrasi-program-d1') }}" class="vs-btn">Registrasi</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <div class="media-style5 wow fadeInUp" data-wow-delay="0.4s">
                                <h5 class="media-title">Proses Pendaftaran</h5>
                                <a class="phone" href="https://wa.me/6287761360699"
                                ><i class="fal fa-phone-alt"></i>+62877-6136-0699</a
                                >
                                <a class="mail" href="mailto:info@rhapsodyhospitality.com"
                                ><i class="fal fa-envelope"></i>info@rhapsodyhospitality.com</a
                                >
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection

@push('addon-script')
    <script>
        function slider_carouselInit() {
            $('.owl-carousel.slider_carousel').owlCarousel({
                dots: false,
                rewind: true,
                autoplay: false,
                nav: true,
                navText: ["<img src='/img/icon/left.png'>","<img src='/img/icon/next.png'>"],
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2,
                    },
                    992: {
                        items: 3
                    }
                }
            });
        }
        slider_carouselInit();
    </script>
@endpush
