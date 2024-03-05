@extends('layouts.app')

@section('title')
    Food & Beverages Service | LPK Rhapsody Hospitality Development Center
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
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                                    aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner mega-hover course-img" data-aos="fade-up"
                             data-aos-duration="1000">
                            <div class="carousel-item active">
                                <img src="/img/course/fb-service1.jpg" class="d-block mh-75 w-100 rounded-5"
                                     alt="fb-service1">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/course/fb-service2.jpg" class="d-block mh-75 w-100 rounded-5"
                                     alt="fb-service2">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/course/fb-service3.jpg" class="d-block mh-75 w-100 rounded-5"
                                     alt="fb-service3">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/course/fb-service4.jpg" class="d-block mh-75 w-100 rounded-5"
                                     alt="fb-service4">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/course/fb-service5.jpg" class="d-block mh-75 w-100 rounded-5"
                                     alt="fb-service5">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="program-subtitle2 mt-2 text-uppercase" data-aos="fade-right" data-aos-duration="1000">
                        Diploma 1</h3>
                    <h2 class="course-title" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">Food &
                        Beverages Service</h2>
                    <div class="widget_price" data-aos="fade-up" data-aos-duration="1000">

                        <div class="px-3 pt-3">
                            <p class="title-section mb-0"><b>Batch</b> 24 - 25</p>
                            <div class="widget_price_tag">
                                Limited
                            </div>
                            <p class="widget_title m-0 p-0">Rp.12,000,000</p>
                            <p class="note-text m-0">atau gratis pengurusan paspor</p>
                            <p class="note-text mb-1" style="font-size: 14px">Late Sale: Rp.13,000,000</p>
                        </div>
                        <div class="widget_price_footer text-white p-3">
                            <p class="m-0 p-0">30 Nov 2023 - 31 Mei 2024</p>
                        </div>
                    </div>
                    <a class="vs-btn py-2 mt-5" href="{{ route('registrasi-program-d1') }}"><img
                            src="/img/icon/flight-white.svg"> Daftar Sekarang</a>
                    <p>Ajak temanmu dan raih peluang mendapatkan beasiswa!</p>
                </div>
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
                    <div class="" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                        <h3 class="title-section fs-3 mt-4"><i class="fa-solid fa-angle-right"></i> Tentang Program</h3>
                        <p>
                            Program Diploma I F&B Service merupakan program satu bulan teori, diikuti tiga bulan praktek
                            dan dilanjutkan dengan on-the-job training selama enam bulan, baik di dalam maupun luar
                            negeri. Program ini juga menekankan pelajaran bahasa dan percakapan industri untuk menjadi
                            pelayan bintang lima yang komunikatif ditambah pelatihan Technical Interview memastikan kamu
                            meraih posisi yang kamu cita-citakan. Kamu akan mempelajari mixology, barista dan menerima
                            sertifikasi kompetensi serta ijazah setelah lulus.
                        </p>
                    </div>
                    @include('includes.testi-cards')
                    <div class="pt-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <h3 class="title-section fs-3 mt-4"><i class="fa-solid fa-angle-right"></i> Prospek Karier</h3>
                        <p>
                            Ikuti program ini dan dapatkan balik modal dari gaji pertamamu. Jenjang profesi yang bisa
                            dijalani saat memiliki ilmu dari Rhapsody:
                        </p>
                        <div class="list-style1 vs-list">
                            <p class="fs-6 my-0"><img src="/img/icon/cash.png" alt="cash-icon"> Waiter atau Waitress :</p>
                            <p class="fs-6 my-0"><img src="/img/icon/cash.png" alt="cash-icon"> Bartender (Setelah 2 atau 3x Berangkat) :</p>
                            <p class="fs-6 my-0"><img src="/img/icon/cash.png" alt="cash-icon"> Ast. Waiter atau Waitress (Setelah 2 atau 3x Berangkat) :</p>
                        </div>
                        <div class="row mt-5">
                            <div class="col-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
                                <div class="brand-style1">
                                    <img src="/img/brand/royal-caribean-logo.png" alt="brand" />
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="200">
                                <div class="brand-style1">
                                    <img src="/img/brand/msc-logo.png" alt="brand" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 pt-lg-2" data-aos="fade-up"
                         data-aos-duration="1000" data-aos-delay="100">
                        <h3 class="title-section fs-3 mt-4"><i class="fa-solid fa-angle-right"></i>   Yang Kamu Dapatkan</h3>
                        <p class="fs-6">Biaya pendidikan sudah termasuk:</p>
                        <div class="fs-6 mt-n3">
                            <ul>
                                <li>Seragam teori & praktek.</li>
                                <li>Modul pembelajaran.</li>
                                <li>Pelatihan bahasa inggris industri.</li>
                                <li>Pelatihan Technical Interview.</li>
                                <li>Untuk peserta dari luar Bali mendapatkan mesh atau tempat tinggal.</li>
                                <li>Membership Victory International Placement Center. (selama promo)</li>
                            </ul>
                        </div>
                        <p class="note-text m-0 fst-italic">*Biaya pendidikan bisa dicicil 3x</p>
                        <p class="note-text m-0 fst-italic">*Bagi peserta dari luar Bali dikenakan biaya yang berbeda</p>
                    </div>
                    <div class="mt-4 pt-lg-2" data-aos="fade-up" data-aos-duration="1000">
                        <h3 class="title-section fs-3 mt-4"><i class="fa-solid fa-angle-right"></i>   FAQ</h3>
                        <div class="owl-carousel slider_carousel">
                            <div class="card course-style2" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="50">
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
                            <div class="card course-style2" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="100">
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
                            <div class="card course-style2" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="150">
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
                            <div class="card course-style2" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="50">
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
                            <div class="card course-style2" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="100">
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
                            <div class="card course-style2" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="100">
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
                            <div class="card course-style2" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="100">
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
                            Daftarkan dirimu sekarang dan raih impian untuk menggapai kesuksesan di industri perhotelan
                            dan kapal pesiar
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
                            <div class="col-md-5 col-lg-12" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="100">
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
                navText: ["<img src='/img/icon/left.png'>", "<img src='/img/icon/next.png'>"],
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
