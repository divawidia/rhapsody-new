@extends('layouts.app_no_navbar_footer')

@section('title')
    Kunci Suksesmu Ada Disini | Rhapsody Hospitality Development Center
@endsection

@push('addon-style')
    <link rel="stylesheet" href="/build/libs/owl-carousel/assets/owl.carousel.min.css">
@endpush

@section('content')
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('status') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <section style="
        background: rgb(5,38,61);
        background: linear-gradient(180deg, rgba(5,38,61,1) 0%, rgba(0,102,135,1) 39%, rgba(46,135,165,1) 58%, rgba(189,236,255,1) 100%);">
        <div
            class="container py-5 text-center"
        >
            <div class="landing-content">
                <img src="/img/logo-white.png" alt="Logo Rhapsody" data-aos="fade-up" data-aos-duration="1000"/>
                <h1 class="landing-title text-uppercase mt-5" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="50">Surat kecil untuk dirimu</h1>
                <p class="landing-text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    Wahai kamu yang mendambakan uang banyak, harta berlimpah
                    dan keluarga sejahtera…
                </p>
                <a
                    href="#price-list"
                    class="vs-btn style6 my-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150"
                >Daftar Yuk!</a>
            </div>

        </div>
    </section>

    <section class="mt-5 space-bottom">
        <div class="container">
            <div class="landing-content2">
                <h3 class="landing-title2" data-aos="fade-right" data-aos-duration="1000">
                    Kita semua tau Indonesia itu luas
                </h3>
                <h3 class="landing-subtitle" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="50">
                    Tapi sukses bukan cuma soal tinggal disini dan bersaing dengan mereka yang sama
                    seperti kamu.
                </h3>
                <p class="landing-text2 mt-5" data-aos="fade-right" data-aos-delay="200">
                    Sudahkah kamu memikirkan:
                </p>
                <div data-aos="fade-right" data-aos-delay="250">
                    <div class="landing-list">
                  <span class="landing-text2 align-middle">
                      Betapa luasnya bumi
                  </span>
                    </div>
                    <div class="landing-list">
                  <span class="landing-text2 align-middle">
                      Adanya orang - orang yang jauh lebih hebat darimu
                  </span>
                    </div>
                    <div class="landing-list">
                  <span class="landing-text2 align-middle">
                      Keadaan keluargamu sekarang
                  </span>
                    </div>
                </div>
                <p class="landing-text2 mt-5" data-aos="fade-right" data-aos-delay="300">
                    Ini topik yang berat buat diobrolin.
                </p>
                <p class="landing-text2" data-aos="fade-right" data-aos-delay="300">
                    Tapi.. Sayangnya sukses butuh <b>pengorbanan.</b>
                </p>
            </div>
        </div>
    </section>

    <section class="space-bottom">
        <div class="container">
            <div class="landing-content" data-aos="fade-down" data-aos-duration="1000">
                <h3 class="landing-title3 text-center">
                    Kamu tipe orang yang gimana?
                </h3>
            </div>
            <div class="landing-content2">
                <p class="landing-text2" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="50">
                    Ada dua tipe orang di dunia ini, mereka yang mencari kenyamanan
                    dan mereka yang mencari hal besar untuk digapai.
                </p>
                <p class="landing-text2" data-aos="fade-right" data-aos-delay="100">
                    Sukses ada harganya:
                </p>
                <div data-aos="fade-right" data-aos-delay="150">
                    <div class="landing-list">
                      <span class="landing-text2 align-middle">
                          Kamu harus berani pergi jauh dari tempat nyamanmu
                      </span>
                    </div>
                    <div class="landing-list">
                      <span class="landing-text2 align-middle">
                          Ga jarang kamu harus ninggalin keluargamu
                      </span>
                    </div>
                    <div class="landing-list">
                      <span class="landing-text2 align-middle">
                          Nekat menjadi jati dirimu
                      </span>
                    </div>
                </div>
                <div data-aos="fade-right" data-aos-delay="200">
                    <p class="landing-text2">
                        Disamping itu ada orang yang punya mimpi
                        dan ada orang berusaha mewujudkannya.
                    </p>
                    <p class="landing-text2">
                        <b>Kamu yang mana?
                        </b>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="space-bottom">
        <div class="container">
            <div class="landing-content" data-aos="fade-down" data-aos-duration="1000">
                <h3 class="landing-title3 text-center">
                    Apa hal yang paling berat di dunia?
                </h3>
            </div>
            <div class="landing-content2 mt-5" data-aos="fade-right" data-aos-delay="50">
                <p class="landing-text2">
                    “Keputusan yang belum diambil”
                </p>
                <p class="landing-text2">
                    Ketika kamu siap…
                </p>
                <p class="landing-text2">
                    Untuk menjelajahi dunia
                </p>
                <p class="landing-text2">
                    Untuk mewujudkan mimpimu
                </p>
                <p class="landing-text2">
                    Untuk menjadi lebih baik dari teman - temanmu
                </p>
            </div>
        </div>
    </section>

    <section class="space-bottom" style="
        background: var(--theme-color3);">
        <div class="container">
            <div class="landing-content2">
                <p class="landing-quote1 text-center space-top" data-aos="fade-down" data-aos-duration="1000">
                    Kami siap membentangkan jalan dan membawa kamu berlari menuju kehidupan
                    yang lebih baik.
                </p>
            </div>
        </div>
    </section>

    <section class="space-bottom">
        <div class="container">
            <div class="landing-content">
                <h1 class="landing-title4 text-center mt-5" data-aos="fade-down" data-aos-duration="1000">
                    Tinggalkan rasa nyamanmu.
                </h1>
            </div>
            <div class="landing-content2 mt-5">
                <div data-aos="fade-right" data-aos-delay="300">
                    <p class="landing-text2">
                        Di <b><FONT COLOR="#006687">Rhapsody</FONT></b>, kami memahami betapa pentingnya a keluarga dan
                        mimpimu.
                    </p>
                    <p class="landing-text2">
                        Biarpun kamu tidak tau menau soal bidang ini, <b><FONT COLOR="#CE5423">kami akan membimbing kamu
                                dari 0.</FONT></b>
                    </p>
                    <p class="landing-text2">
                        Perjalanan ini tidaklah mudah dan kami tidak akan sanggup mengingatkanmu
                        akan mimpi - mimpimu…
                    </p>
                    <p class="landing-text2">
                        Maka dari itu fokuslah pada apa yang mau kamu capai.
                    </p>
                    <p class="landing-text2">
                        Saat kamu terlena, saat kamu lupa, pikirkan rumahmu, cita - cita, dan percaya di
                        ujung jalan ini akan ada kamu yang mampu merangkul semuanya dalam rasa aman.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="space-bottom" style="
        background: var(--theme-color3);">
        <div class="container">
            <div class="landing-content">
                <h1 class="landing-title5 text-center space-top" data-aos="fade-up" data-aos-duration="1000">
                    Ini Beberapa Kisah Orang yang Sudah
                    <FONT COLOR="#CE5423">Terbantu</FONT> Dengan Adanya Program Kami
                </h1>
                <div class="inner-video-box text-center" data-aos="fade-up" data-aos-duration="1000"
                     data-aos-delay="50">
                    <iframe class="video-testi" style=" border-radius:30px"
                            src="https://www.youtube.com/embed/1gr3YyeO8QM?si=vTr6hW-eyE_kOEDC"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    {{--                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn position-center popup-video"><i class="fas fa-play"></i></a>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="space-top space-bottom">
        <div class="card_wrapper">
            <div class="container">
                <div class="row">
                    <div class="title-area text-center wow fadeInUp" data-wow-delay="0.3s">
                        <h2 class="sec-title h1" data-aos="fade-up" data-aos-duration="1000">Beberapa Alumni Kami</h2>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">

                    </div>
{{--                    <div class="col-12">--}}
{{--                        <div class="owl-carousel slider_carousel">--}}
{{--                            <div class="card course-style2" data-aos="fade-up" data-aos-duration="1000"--}}
{{--                                 data-aos-delay="50">--}}
{{--                                <div class="testi-img">--}}
{{--                                    <img--}}
{{--                                        class="w-100"--}}
{{--                                        src="/img/testi/Foto 1_Anak Agung Istri Ratna Anggraeni.jpeg"--}}
{{--                                        alt="Anak Agung Istri Ratna Anggraeni"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                                <div class="course-content text-center">--}}
{{--                                    <h3 class="h5 course-name">--}}
{{--                                        <a href="{{ route('fasilitas') }}" class="text-inherit"--}}
{{--                                        >Anak Agung Istri Ratna Anggraeni</a--}}
{{--                                        >--}}
{{--                                    </h3>--}}
{{--                                    <div class="course-meta">--}}
{{--                                    </div>--}}
{{--                                    <div class="course-footer">--}}
{{--                                        <div class="text-center mx-auto testi-text">--}}
{{--                                            Carnival Dream - 2023--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card course-style2" data-aos="fade-up" data-aos-duration="1000"--}}
{{--                                 data-aos-delay="100">--}}
{{--                                <div class="testi-img">--}}
{{--                                    <img--}}
{{--                                        class="w-100"--}}
{{--                                        src="/img/testi/I Dewa Gede Adiarta Putra_Carnival Dream.jpeg"--}}
{{--                                        alt="I Dewa Gede Adiarta Putra_Carnival Dream"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                                <div class="course-content text-center">--}}
{{--                                    <h3 class="h5 course-name">--}}
{{--                                        <a href="{{ route('fasilitas') }}" class="text-inherit"--}}
{{--                                        >I Dewa Gede Adiarta Putra</a--}}
{{--                                        >--}}
{{--                                    </h3>--}}
{{--                                    <div class="course-meta">--}}
{{--                                    </div>--}}
{{--                                    <div class="course-footer">--}}
{{--                                        <div class="text-center mx-auto testi-text">--}}
{{--                                            Carnival Dream - 2023--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card course-style2" data-aos="fade-up" data-aos-duration="1000"--}}
{{--                                 data-aos-delay="150">--}}
{{--                                <div class="testi-img">--}}
{{--                                    <img--}}
{{--                                        class="w-100"--}}
{{--                                        src="/img/testi/I Putu Edik Gunawirawan_Carnival Pride.jpeg"--}}
{{--                                        alt="I Putu Edik Gunawirawan_Carnival Pride"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                                <div class="course-content text-center">--}}
{{--                                    <h3 class="h5 course-name">--}}
{{--                                        <a href="{{ route('fasilitas') }}" class="text-inherit"--}}
{{--                                        >I Putu Edik Gunawirawan</a--}}
{{--                                        >--}}
{{--                                    </h3>--}}
{{--                                    <div class="course-meta">--}}
{{--                                    </div>--}}
{{--                                    <div class="course-footer">--}}
{{--                                        <div class="text-center mx-auto testi-text">--}}
{{--                                            Carnival Dream - 2023--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card course-style2" data-aos="fade-up" data-aos-duration="1000">--}}
{{--                                <div class="testi-img">--}}
{{--                                    <img--}}
{{--                                        class="w-100"--}}
{{--                                        src="/img/testi/I Putu Yoga Maha Astra_Carnival Luminosa.jpeg"--}}
{{--                                        alt="I Putu Yoga Maha Astra_Carnival Luminosa"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                                <div class="course-content text-center">--}}
{{--                                    <h3 class="h5 course-name">--}}
{{--                                        <a href="{{ route('fasilitas') }}" class="text-inherit"--}}
{{--                                        >I Putu Yoga Maha Astra</a--}}
{{--                                        >--}}
{{--                                    </h3>--}}
{{--                                    <div class="course-meta">--}}
{{--                                    </div>--}}
{{--                                    <div class="course-footer">--}}
{{--                                        <div class="text-center mx-auto testi-text">--}}
{{--                                            Carnival Luminosa - 2023--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card course-style2" data-aos="fade-up" data-aos-duration="1000"--}}
{{--                                 data-aos-delay="50">--}}
{{--                                <div class="testi-img">--}}
{{--                                    <img--}}
{{--                                        class="w-100"--}}
{{--                                        src="/img/testi/Ida Bagus Putu Adiananta_Carnival Miracle1.jpeg"--}}
{{--                                        alt="Ida Bagus Putu Adiananta_Carnival Miracle"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                                <div class="course-content text-center">--}}
{{--                                    <h3 class="h5 course-name">--}}
{{--                                        <a href="{{ route('fasilitas') }}" class="text-inherit"--}}
{{--                                        >Ida Bagus Putu Adiananta</a--}}
{{--                                        >--}}
{{--                                    </h3>--}}
{{--                                    <div class="course-meta">--}}
{{--                                    </div>--}}
{{--                                    <div class="course-footer">--}}
{{--                                        <div class="text-center mx-auto testi-text">--}}
{{--                                            Carnival Miracle - 2023--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card course-style2" data-aos="fade-up" data-aos-duration="1000"--}}
{{--                                 data-aos-delay="100">--}}
{{--                                <div class="testi-img">--}}
{{--                                    <img--}}
{{--                                        class="w-100"--}}
{{--                                        src="/img/testi/Ni Putu Novi Sagita Handayani_Carnival Dream.jpeg"--}}
{{--                                        alt="Ni Putu Novi Sagita Handayani_Carnival Dream"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                                <div class="course-content text-center">--}}
{{--                                    <h3 class="h5 course-name">--}}
{{--                                        <a href="{{ route('fasilitas') }}" class="text-inherit"--}}
{{--                                        >Ni Putu Novi Sagita Handayani</a--}}
{{--                                        >--}}
{{--                                    </h3>--}}
{{--                                    <div class="course-meta">--}}
{{--                                    </div>--}}
{{--                                    <div class="course-footer">--}}
{{--                                        <div class="text-center mx-auto testi-text">--}}
{{--                                            Carnival Dream - 2023--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card course-style2" data-aos="fade-up" data-aos-duration="1000"--}}
{{--                                 data-aos-delay="100">--}}
{{--                                <div class="testi-img">--}}
{{--                                    <img--}}
{{--                                        class="w-100"--}}
{{--                                        src="/img/testi/Wayan Widi Adnyana_Carnival Conquest.jpeg"--}}
{{--                                        alt="Wayan Widi Adnyana_Carnival Conquest"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                                <div class="course-content text-center">--}}
{{--                                    <h3 class="h5 course-name">--}}
{{--                                        <a href="{{ route('fasilitas') }}" class="text-inherit"--}}
{{--                                        >Wayan Widi Adnyana</a--}}
{{--                                        >--}}
{{--                                    </h3>--}}
{{--                                    <div class="course-meta">--}}
{{--                                    </div>--}}
{{--                                    <div class="course-footer">--}}
{{--                                        <div class="text-center mx-auto testi-text">--}}
{{--                                            Carnival Conquest - 2023--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card course-style2" data-aos="fade-up" data-aos-duration="1000"--}}
{{--                                 data-aos-delay="100">--}}
{{--                                <div class="d-flex align-items-center course-content" style="height: 700px">--}}
{{--                                    <h3 class="h5 course-name text-inherit text-center" style="font-size: 50px">--}}
{{--                                        Dan 450+ Alumni Lainnya--}}
{{--                                    </h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
    @include('includes.testi-cards')

    <section class="space-bottom">
        <div class="container">
            <div class="landing-content" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="landing-title5 text-center space-top">
                    <FONT COLOR="#CE5423">Promo</FONT>
                    ini hanya untuk kamu yang berani
                </h1>
            </div>
            <div class="landing-content2 mt-5">
                <h1 class="landing-title4 text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <FONT COLOR="#006687">CASHBACK SEBESAR</FONT>
                </h1>
                <h1 class="landing-title4 text-center" data-aos="zoom-in-up" data-aos-duration="1000"
                    data-aos-delay="250">
                    Rp.2,000,000
                </h1>
                <p class="landing-quote1 text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">
                    untuk progam D1
                </p>
                <p class="landing-text-bold text-center mt-5" data-aos="fade-up" data-aos-duration="1000"
                   data-aos-delay="300">
                    TENANGG.. Semuanya gratis biaya pendaftaran kok
                </p>
                <h1 class="landing-title4 text-center mt-5" data-aos="fade-up" data-aos-duration="1000">
                    Bonus
                </h1>
                <h1 class="landing-title4 text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                    <FONT COLOR="#006687">MEMBERSHIP VICTORY PLACEMENT CENTER SENILAI</FONT>
                </h1>
                <h1 class="landing-title4 text-center" data-aos="zoom-in-up" data-aos-duration="1000"
                    data-aos-delay="100">
                    Rp.2,000,000
                </h1>
                <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">
                    <p class="landing-text-bold text-center mt-5">
                        Prioritas penempatan
                    </p>
                    <p class="landing-text-bold text-center">
                        Bimbingan profesional
                    </p>
                    <p class="landing-text-bold text-center">
                        Konsultasi karier
                    </p>
                    <p class="landing-text-bold text-center">
                        Grup dan informasi eksklusif
                    </p>
                    <p class="landing-text-bold text-center">
                        Bimbingan profesional
                    </p>
                    <p class="landing-text-bold text-center">
                        <FONT COLOR="#CE5423">“Open Sea Summit”</FONT> Networking Event (Coming Soon)
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="space-bottom" id="price-list">
        <div class="container">
            <div class="landing-content">
                <h1 class="landing-title3 text-center" data-aos="fade-up" data-aos-duration="1000">
                    Price List
                </h1>
                <div class="row">
                    <div class="col-12 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                        <div class="text-center feature-style1">
                            <div class="feature-icon">
                                <img src="/img/icon/fb-product.png" alt="fb-product">
                            </div>
                            <h4 class="feature-title">D1 Food & Beverage Product</h4>
                            <p class="landing-price">
                                Rp.18,000,000
                            </p>
                            <div class="landing-price-desc mt-5">
                                <p class="landing-text2">Seragam Teori & Praktek</p>
                            </div>
                            <div class="landing-price-desc mt-3">
                                <p class="landing-text2">Modul Cetak & Digital</p>
                            </div>
                            <div class="landing-price-desc mt-3">
                                <p class="landing-text2">Pelatihan Bahasa Inggris Industri</p>
                            </div>
                            <div class="landing-price-desc mt-3">
                                <p class="landing-quote1">Mesh <FONT COLOR="#CE5423">Tempat Tinggal</FONT></p>
                            </div>
                            <div class="landing-price-desc mt-3">
                                <p class="landing-quote1">Membership <FONT COLOR="#CE5423">Victory</FONT></p>
                            </div>
                            <a
                                href="{{ route('registrasi-program-d1') }}"
                                class="vs-btn mt-5"
                            >Daftar Yuk!</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="text-center feature-style1">
                            <div class="feature-icon">
                                <img src="/img/icon/fb-service.png" alt="fb-product">
                            </div>
                            <h4 class="feature-title">D1 Food & Beverage Service</h4>
                            <p class="landing-price">
                                Rp.18,000,000
                            </p>
                            <div class="landing-price-desc mt-5">
                                <p class="landing-text2">Seragam Teori & Praktek</p>
                            </div>
                            <div class="landing-price-desc mt-3">
                                <p class="landing-text2">Modul Cetak & Digital</p>
                            </div>
                            <div class="landing-price-desc mt-3">
                                <p class="landing-text2">Pelatihan Bahasa Inggris Industri</p>
                            </div>
                            <div class="landing-price-desc mt-3">
                                <p class="landing-quote1">Mesh <FONT COLOR="#CE5423">Tempat Tinggal</FONT></p>
                            </div>
                            <div class="landing-price-desc mt-3">
                                <p class="landing-quote1">Membership <FONT COLOR="#CE5423">Victory</FONT></p>
                            </div>
                            <a
                                href="{{ route('registrasi-program-d1') }}"
                                class="vs-btn mt-5"
                            >Daftar Yuk!</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="text-center feature-style1" data-aos="fade-up" data-aos-duration="1000"
                             data-aos-delay="150">
                            <div class="feature-icon">
                                <img src="/img/icon/fo.png" alt="fb-product">
                            </div>
                            <h4 class="feature-title">D1 Front Office</h4>
                            <p class="landing-price">
                                Rp.16,600,000
                            </p>
                            <div class="landing-price-desc mt-5">
                                <p class="landing-text2">Seragam Teori & Praktek</p>
                            </div>
                            <div class="landing-price-desc mt-3">
                                <p class="landing-text2">Modul Cetak & Digital</p>
                            </div>
                            <div class="landing-price-desc mt-3">
                                <p class="landing-text2">Pelatihan Bahasa Inggris Industri</p>
                            </div>
                            <div class="landing-price-desc mt-3">
                                <p class="landing-quote1">Mesh <FONT COLOR="#CE5423">Tempat Tinggal</FONT></p>
                            </div>
                            <div class="landing-price-desc mt-3">
                                <p class="landing-quote1">Membership <FONT COLOR="#CE5423">Victory</FONT></p>
                            </div>
                            <a
                                href="{{ route('registrasi-program-d1') }}"
                                class="vs-btn mt-5"
                            >Daftar Yuk!</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="text-center feature-style1" data-aos="fade-up" data-aos-duration="1000"
                             data-aos-delay="200">
                            <div class="feature-icon">
                                <img src="/img/icon/hk.png" alt="fb-product">
                            </div>
                            <h4 class="feature-title">D1 Housekeeping</h4>
                            <p class="landing-price">
                                Rp.16,600,000
                            </p>
                            <div class="landing-price-desc mt-5">
                                <p class="landing-text2">Seragam Teori & Praktek</p>
                            </div>
                            <div class="landing-price-desc mt-3">
                                <p class="landing-text2">Modul Cetak & Digital</p>
                            </div>
                            <div class="landing-price-desc mt-3">
                                <p class="landing-text2">Pelatihan Bahasa Inggris Industri</p>
                            </div>
                            <div class="landing-price-desc mt-3">
                                <p class="landing-quote1">Mesh <FONT COLOR="#CE5423">Tempat Tinggal</FONT></p>
                            </div>
                            <div class="landing-price-desc mt-3">
                                <p class="landing-quote1">Membership <FONT COLOR="#CE5423">Victory</FONT></p>
                            </div>
                            <a
                                href="{{ route('registrasi-program-d1') }}"
                                class="vs-btn mt-5"
                            >Daftar Yuk!</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="text-center feature-style1" data-aos="fade-up" data-aos-duration="1000"
                             data-aos-delay="100">
                            <div class="feature-icon">
                                <img src="/img/icon/executive.png" alt="fb-product">
                            </div>
                            <h4 class="feature-title">Executive Class Hybrid</h4>
                            <p class="landing-price">
                                Hubungi kami untuk info harga lebih lanjut
                            </p>
                            <div class="landing-price-desc mt-5">
                                <p class="landing-text2">Umur pendaftar minimal 20 tahun</p>
                            </div>
                            <div class="landing-price-desc mt-3">
                                <p class="landing-text2">2 Bulan teori online 1 Bulan praktek</p>
                            </div>
                            <div class="landing-price-desc mt-3">
                                <p class="landing-text2">Kelas teori bisa diikuti secara online/offline</p>
                            </div>
                            <div class="landing-price-desc mt-3">
                                <p class="landing-quote1">Mesh <FONT COLOR="#CE5423">Tempat Tinggal</FONT></p>
                            </div>
                            <div class="landing-price-desc mt-3">
                                <p class="landing-quote1">Membership <FONT COLOR="#CE5423">Victory</FONT></p>
                            </div>
                            <a
                                href="{{ route('registrasi-program-executive') }}"
                                class="vs-btn mt-5"
                            >Daftar Yuk!</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="py-5" style="
        background: var(--theme-color3);">
        <div class="container">
            <div class="landing-content">
                <h1 class="feature-title text-center" data-aos="fade-up" data-aos-duration="1000">
                    Masih belum yakin? yuk ditanya
                </h1>
                <div class="col text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <a
                        href="https://wa.me/6287761360699"
                        class="vs-btn wa justify-content-center"
                        style="width: 152px;"
                    ><i class="fa-brands fa-whatsapp fa-2x"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="space-top space-bottom">
        <div class="container">
            <form action="{{ route('promo-luar-bali-store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="feature-style1 form-style4 login" data-aos="fade-up" data-aos-duration="1000">
                            <div class="form-group">
                                <label for="program_diminati">Kamu Tipe Orang yang Mana?</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tipe_orang" id="tipe_orang"
                                           value="Eksekutor">
                                    <label class="form-check-label" for="tipe_orang">Eksekutor</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tipe_orang" id="tipe_orang"
                                           value="Pemimpi">
                                    <label class="form-check-label" for="tipe_orang">Pemimpi</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap">Nama</label>
                                <input type="text" autocomplete="off" name="nama" id="nama"
                                       placeholder="Isikan nama lengkapmu" required>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No. HP/Whatsapp</label>
                                <input type="tel" autocomplete="off" name="no_hp" id="no_hp"
                                       placeholder="Isikan No. Hp/WA mu" required>
                            </div>
                            <div class="form-group">
                                <label for="program_diminati">Program Kami yang Diminati</label>
                                <select id="program_diminati" class="form-control" name="program_diminati" required>
                                    <option class="dropdown-program-diminati" selected>Pilih program kami yang kamu
                                        minati
                                    </option>
                                    <option class="dropdown-program-diminati" value="Food & Beverage Product">Food &
                                        Beverage Product
                                    </option>
                                    <option class="dropdown-program-diminati" value="Food & Beverage Service">Food &
                                        Beverage Service
                                    </option>
                                    <option class="dropdown-program-diminati" value="Front Office">Front Office</option>
                                    <option class="dropdown-program-diminati" value="Housekeeping">Housekeeping</option>
                                    <option class="dropdown-program-diminati" value="Tidak Berminat">Tidak Berminat :(
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alasanmu Ingin Bekerja di Luar Negeri</label>
                                <textarea name="alasan" id="alasan" placeholder="Isikan alasanmu disini"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="pengalaman_peserta">Pilih pernyataan yang paling sesuai dengan kamu</label>
                                <select id="pengalaman_peserta" class="form-control" name="pengalaman_peserta" required>
                                    <option class="dropdown-pengalaman_peserta" selected>Pilihlah pernyataan berikut
                                    </option>
                                    <option class="dropdown-pengalaman_peserta"
                                            value="Tidak paham bahasa inggris dan tidak punya pengalaman">
                                        Tidak paham bahasa inggris dan tidak punya pengalaman
                                    </option>
                                    <option class="dropdown-pengalaman_peserta"
                                            value="Tidak paham bahasa inggris tapi berpengalaman">
                                        Tidak paham bahasa inggris tapi berpengalaman
                                    </option>
                                    <option class="dropdown-pengalaman_peserta"
                                            value="Cakap berbahasa tapi tidak punya pengalaman">
                                        Cakap berbahasa tapi tidak punya pengalaman
                                    </option>
                                    <option class="dropdown-pengalaman_peserta"
                                            value="Cukup paham bahasa dan cukup pengalaman">
                                        Cukup paham bahasa dan cukup pengalaman
                                    </option>
                                    <option class="dropdown-pengalaman_peserta"
                                            value="Cakap berbahasa dan berpengalaman">Cakap berbahasa dan berpengalaman
                                    </option>
                                </select>
                            </div>
                            <div class="col-12 text-center mt-4">
                                <button type="submit" class="vs-btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@push('addon-script')
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
    <script src="/build/libs/owl-carousel/owl.carousel.min.js"></script>
    <script>

        function slider_carouselInit() {
            $('.owl-carousel.slider_carousel').owlCarousel({
                dots: false,
                rewind: true,
                stagePadding: 2,
                autoplay: true,
                nav: true,
                navText: ["<img src='/img/icon/left.png'>", "<img src='/img/icon/next.png'>"],
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
        $(".dropdown-program-diminati").change(function () {
            //check if the selected option is others
            if (this.value === "Executive Hybrid Galley & Cook") {
                //toggle textbox visibility
                $(".dropdown-pemahaman").toggle();
            }
        });
        document.getElementById("tanggalLahir").max = "2003-12-31";
    </script>
@endpush
