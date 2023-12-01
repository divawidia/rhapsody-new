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
                <h1 class="landing-title" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">Skill Public Speakingmu Bertambah 3x Lipat!</h1>
                <p class="landing-text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    Rasakan Transisi Drastis Selama Satu Periode Pembelajaran
                    dan Jadilah Pionir Diantara Teman Sebayamu
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
                    Kalo dipikir - pikir…
                </h3>
                <h3 class="landing-subtitle" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="50">
                    Kenapa setiap kamu mau interview
                    kerja malah jadi nervous minta ampun,
                    padahal kan kamu udah paham sama kerjaannya?
                </h3>
                <p class="landing-text2 mt-5" data-aos="fade-right" data-aos-delay="200">
                    Ada 3 hal yang biasanya kamu siapin kalo mau interview
                </p>
                <div data-aos="fade-right" data-aos-delay="250">
                    <div class="landing-list">
                  <span class="landing-text2 align-middle">
                      Doa
                  </span>
                    </div>
                    <div class="landing-list">
                  <span class="landing-text2 align-middle">
                      Penampilan
                  </span>
                    </div>
                    <div class="landing-list">
                  <span class="landing-text2 align-middle">
                      List pertanyaan beserta jawaban (cerpekan)
                  </span>
                    </div>
                </div>
                <p class="landing-text2 mt-5" data-aos="fade-right" data-aos-delay="300">
                    Well, nebak-nebak yang bakal ditanya itu masih normal kok… Tapi.. Sayangnya tebakan kita sering kali beda…
                </p>
            </div>
        </div>
    </section>

    <section class="space-bottom">
        <div class="container">
            <div class="landing-content" data-aos="fade-down" data-aos-duration="1000">
                <h3 class="landing-title3 text-center">
                    Masalahnya Kampus Manapun Gamau Tau Soal Ini
                </h3>
            </div>
            <div class="landing-content2">
                <p class="landing-text2" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="50">
                    Semua ngajarin teori kok, beberapa mulai ngajarin praktek,
                    tapi tetep aja <b>diantara kamu dan karirmu selalu ada interview
                        yang mesti kamu lewatin.</b>
                </p>
                <p class="landing-text2" data-aos="fade-right" data-aos-delay="100">
                    Simple sebenernya:
                </p>
                <div data-aos="fade-right" data-aos-delay="150">
                    <div class="landing-list">
                      <span class="landing-text2 align-middle">
                          Percaya diri
                      </span>
                    </div>
                    <div class="landing-list">
                      <span class="landing-text2 align-middle">
                          Paham sama bidangmu
                      </span>
                    </div>
                    <div class="landing-list">
                      <span class="landing-text2 align-middle">
                          Semuanya translate ke Bahasa Inggris
                      </span>
                    </div>
                </div>
                <div data-aos="fade-right" data-aos-delay="200">
                    <p class="landing-text2">
                        LAH!?
                    </p>
                    <p class="landing-text2">
                        Tadinya siap, sekarang mikir mikir…
                    </p>
                    <p class="landing-text2">
                        <b>“Ini verb nya bener kan? English ku ga broken toh?”</b>
                    </p>
                    <p class="landing-text2">
                        Ini yang aku rasain dulu…
                    </p>
                    <p class="landing-text2">
                        Dan iya, gagal karena ga siap itu hal yang nyata.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="space-bottom">
        <div class="container">
            <div class="landing-content" data-aos="fade-down" data-aos-duration="1000">
                <h3 class="landing-title3 text-center">
                    Belum Lagi Kamu Liat Lawanmu yang Berjejer di Depan Ruang HR
                </h3>
            </div>
            <div class="landing-content2 mt-5" data-aos="fade-right" data-aos-delay="50">
                <p class="landing-text2">
                    Semisal lawanmu ada <b>49</b>, nah kalian udah pasti paham teori dong…
                </p>
                <p class="landing-text2">
                    Diantara kalian cuma <b>10</b> yang lancar menjelaskan
                </p>
                <p class="landing-text2">
                    <b>5</b> yang percaya diri
                </p>
                <p class="landing-text2">
                    Tapi cuma <b>1</b> yang punya pengalaman interview.
                </p>
                <p class="landing-text2">
                    <b>Kamu sadar disini kamu cuma pemula.</b>
                </p>
            </div>
        </div>
    </section>

    <section class="space-bottom" style="
        background: var(--theme-color3);">
        <div class="container">
            <div class="landing-content2">
                <p class="landing-quote1 text-center space-top" data-aos="fade-down" data-aos-duration="1000">
                    “Coba aja ada formula yang bisa bikin aku punya <FONT COLOR="#CE5423">1000
                        pengalaman interview</FONT> secara ajaib”
                </p>

                <p class="landing-quote1 text-center" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="50">
                    “Pengen banget.. tau pasti apa yang bakal ditanya sama interviewer”
                </p>
            </div>
        </div>
    </section>

    <section class="space-bottom">
        <div class="container">
            <div class="landing-content">
                <h1 class="landing-title4 text-center mt-5" data-aos="fade-down" data-aos-duration="1000">
                    Ternyata Ada Tempat Kaya Gini
                </h1>
            </div>
            <div class="landing-content2 mt-5">
                <div data-aos="fade-right" data-aos-delay="300">
                    <p class="landing-text2">
                        Di <b><FONT COLOR="#006687">Rhapsody</FONT></b>, kami memahami betapa pentingnya mempersiapkan diri dengan
                        baik untuk menghadapi interview.
                    </p>
                    <p class="landing-text2">
                        Mata pelajaran <b><FONT COLOR="#CE5423">Technical Interview</FONT></b> di Rhapsody merupakan fondasi
                        yang kuat bagi para pelamar pekerjaan untuk mengatasi interview
                        dengan sat set sat set dan tanpa hambatan.
                    </p>
                    <p class="landing-text2">
                        Seluruh program kami, meliputi D1 Front Office, House Keeping,
                        F&B Product & Service bahkan Kelas Executive Hybrid sudah dilengkapi
                        dengan pelajaran ini.
                    </p>
                </div>
                <p class="landing-quote1" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                    Mengapa ini menjadi keunggulan kami?
                </p>
                <p class="landing-quote1" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="350">
                    Ini yang akan kamu dapatkan:
                </p>
                <div data-aos="fade-right" data-aos-delay="500">
                    <div class="landing-list">
                  <span class="landing-text-bold align-middle">
                      Pengetahuan Umum
                  </span>
                    </div>
                    <div class="landing-list">
                  <span class="landing-text-bold align-middle">
                      Mimik dan Gestur
                  </span>
                    </div>
                    <div class="landing-list">
                  <span class="landing-text-bold align-middle">
                      Menjawab Pertanyaan dengan Singkat & Tepat
                  </span>
                    </div>
                    <div class="landing-list">
                  <span class="landing-text-bold align-middle">
                      Pembedahan Modul Terupdate dari <FONT COLOR="#CE5423">Victory International</FONT>
                  </span>
                    </div>
                    <div class="landing-list">
                  <span class="landing-text-bold align-middle">
                      Simulasi Interview Online & Offline
                  </span>
                    </div>
                    <div class="landing-list">
                  <span class="landing-text-bold align-middle">
                      Review Hasil dan Perbaikan
                  </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="space-bottom">
        <div class="container">
            <div class="landing-content" data-aos="fade-right" data-aos-duration="1000">
                <h1 class="landing-title4 text-center">
                    Masa Depanmu Terjamin
                </h1>
            </div>
            <div class="landing-content2 mt-5">
                <p class="landing-quote1" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="50">
                    Menjadi yang <FONT COLOR="#006687">termurah</FONT> bukan tujuan kami,
                    tapi menjadi yang <FONT COLOR="#006687">terpercaya</FONT> adalah misi hidup kami.
                </p>
                <div data-aos="fade-right" data-aos-delay="300">
                    <p class="landing-text2">
                        Setelah mendengar banyaknya kasus penipuan mengenai agen keberangkatan,
                        <b><FONT COLOR="#CE5423">Victory</FONT></b> berdedikasi untuk menjadi agen yang berani menjamin keberangkatan.
                    </p>
                    <p class="landing-text2">
                        Dengan adanya agensi internal, kamu tidak perlu risau lagi soal pekerjaanmu
                        di luar negeri, semua kami persiapkan dengan maksimal agar kamu tetap bisa
                        menjalani mimpi besarmu.
                    </p>
                    <p class="landing-text2">
                        Rekan kami akan selalu memberi kabar terupdate mengenai pertanyaan
                        interview yang selalu kamu takutkan sehingga kami bisa membekalimu
                        dengan senjata paling paten dan ampuh untuk menapaki dunia kerja.
                    </p>
                </div>
                <p class="landing-text-bold" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                    Pssttt… terlebih lagi, kamu cuma bayar kalo Job Lettermu udah keluar.
                </p>
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-delay="150">
                    <span class="landing-title-small">NO </span>
                    <span class="landing-title-small-bold">FLIGHT</span>
                    <span class="landing-title-small">NO </span>
                    <span class="landing-title-small-bold">PAY.</span>
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
                <div class="inner-video-box text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                    <iframe class="video-testi" style=" border-radius:30px" src="https://www.youtube.com/embed/1gr3YyeO8QM?si=vTr6hW-eyE_kOEDC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
                    <div class="col-12">
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
                                    <h3 class="h5 course-name">
                                        <a href="{{ route('fasilitas') }}" class="text-inherit"
                                        >Anak Agung Istri Ratna Anggraeni</a
                                        >
                                    </h3>
                                    <div class="course-meta">
                                    </div>
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
                                    <h3 class="h5 course-name">
                                        <a href="{{ route('fasilitas') }}" class="text-inherit"
                                        >I Dewa Gede Adiarta Putra</a
                                        >
                                    </h3>
                                    <div class="course-meta">
                                    </div>
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
                                    <h3 class="h5 course-name">
                                        <a href="{{ route('fasilitas') }}" class="text-inherit"
                                        >I Putu Edik Gunawirawan</a
                                        >
                                    </h3>
                                    <div class="course-meta">
                                    </div>
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
                                    <h3 class="h5 course-name">
                                        <a href="{{ route('fasilitas') }}" class="text-inherit"
                                        >I Putu Yoga Maha Astra</a
                                        >
                                    </h3>
                                    <div class="course-meta">
                                    </div>
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
                                    <h3 class="h5 course-name">
                                        <a href="{{ route('fasilitas') }}" class="text-inherit"
                                        >Ida Bagus Putu Adiananta</a
                                        >
                                    </h3>
                                    <div class="course-meta">
                                    </div>
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
                                    <h3 class="h5 course-name">
                                        <a href="{{ route('fasilitas') }}" class="text-inherit"
                                        >Ni Putu Novi Sagita Handayani</a
                                        >
                                    </h3>
                                    <div class="course-meta">
                                    </div>
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
                                    <h3 class="h5 course-name">
                                        <a href="{{ route('fasilitas') }}" class="text-inherit"
                                        >Wayan Widi Adnyana</a
                                        >
                                    </h3>
                                    <div class="course-meta">
                                    </div>
                                    <div class="course-footer">
                                        <div class="text-center mx-auto testi-text">
                                            Carnival Conquest - 2023
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card course-style2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
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
    </section>

    <section class="space-bottom">
        <div class="container">
            <div class="landing-content" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="landing-title5 text-center space-top">
                    Udah Baca Sampe Abis?
                    <FONT COLOR="#CE5423">Nih Hadiahnya</FONT>
                </h1>
            </div>
            <div class="landing-content2 mt-5">
                <p class="landing-quote1 text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                    Khusus untuk <FONT COLOR="#CE5423">25</FONT> pendaftar pertama
                </p>
                <h1 class="landing-title4 text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    GRATIS PENGURUSAN PASPOR
                </h1>
                <p class="landing-quote1 text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">
                    dan <FONT COLOR="#CE5423">75</FONT> pendaftar selanjutnya
                </p>
                <h1 class="landing-title4 text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <FONT COLOR="#006687">POTONGAN BIAYA SEBESAR</FONT>
                </h1>
                <h1 class="landing-title4 text-center" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="250">
                    Rp.1,500,000
                </h1>
                <p class="landing-text-bold text-center mt-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    EITTSSS.. Semuanya gratis biaya pendaftaran kok
                </p>
                <h1 class="landing-title4 text-center mt-5" data-aos="fade-up" data-aos-duration="1000">
                    Bonus
                </h1>
                <h1 class="landing-title4 text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                    <FONT COLOR="#006687">MEMBERSHIP VICTORY PLACEMENT CENTER SENILAI</FONT>
                </h1>
                <h1 class="landing-title4 text-center" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="100">
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
                                Rp.13,000,000
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
                                Rp.13,000,000
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
                                <p class="landing-quote1">Membership <FONT COLOR="#CE5423">Victory</FONT></p>
                            </div>
                            <a
                                href="{{ route('registrasi-program-d1') }}"
                                class="vs-btn mt-5"
                            >Daftar Yuk!</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="text-center feature-style1" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">
                            <div class="feature-icon">
                                <img src="/img/icon/fo.png" alt="fb-product">
                            </div>
                            <h4 class="feature-title">D1 Front Office</h4>
                            <p class="landing-price">
                                Rp.11,600,000
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
                                <p class="landing-quote1">Membership <FONT COLOR="#CE5423">Victory</FONT></p>
                            </div>
                            <a
                                href="{{ route('registrasi-program-d1') }}"
                                class="vs-btn mt-5"
                            >Daftar Yuk!</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="text-center feature-style1" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <div class="feature-icon">
                                <img src="/img/icon/hk.png" alt="fb-product">
                            </div>
                            <h4 class="feature-title">D1 Housekeeping</h4>
                            <p class="landing-price">
                                Rp.11,600,000
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
                                <p class="landing-quote1">Membership <FONT COLOR="#CE5423">Victory</FONT></p>
                            </div>
                            <a
                                href="{{ route('registrasi-program-d1') }}"
                                class="vs-btn mt-5"
                            >Daftar Yuk!</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="text-center feature-style1" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <div class="feature-icon">
                                <img src="/img/icon/executive.png" alt="fb-product">
                            </div>
                            <h4 class="feature-title">Executive Class Hybrid</h4>
                            <p class="landing-price">
                                Rp.8,000,000
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

    <section class="space-bottom">
        <div class="container">
            <div class="landing-content mb-5" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="landing-title5 text-center space-top">
                    Isi Dulu Yuk Absensi Kehadiran Sosialisasi
                    <FONT COLOR="#CE5423">LPK Rhapsody!</FONT>
                </h1>
            </div>
            <form action="{{ route('landing-page.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="feature-style1 form-style4 login" data-aos="fade-up" data-aos-duration="1000">
                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" autocomplete="off" name="nama_lengkap" id="nama_lengkap" placeholder="Isikan nama lengkapmu" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_panggilan">Nama Panggilan</label>
                                <input type="text" autocomplete="off" name="nama_panggilan" id="nama_panggilan" placeholder="Isikan nama panggilan" required>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No. HP/Whatsapp</label>
                                <input type="tel" autocomplete="off" name="no_hp" id="no_hp" placeholder="Isikan No. Hp/WA mu" required>
                            </div>
                            <div class="form-group">
                                <label for="asal_sekolah">Asal Sekolah</label>
                                <input type="text" autocomplete="off" name="asal_sekolah" id="asal_sekolah" placeholder="Isikan asal sekolahmu" required>
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" autocomplete="off" name="jurusan" id="jurusan" placeholder="Isikan jurusanmu sekarang" required>
                            </div>
                            <div class="form-group">
                                <label for="program_diminati">Program Kami yang Diminati</label>
                                <select id="program_diminati" class="form-control" name="program_diminati" required>
                                    <option class="dropdown-program-diminati" selected>Pilih program kami yang kamu minati</option>
                                    <option class="dropdown-program-diminati" value="Food & Beverage Product">Food & Beverage Product</option>
                                    <option class="dropdown-program-diminati" value="Food & Beverage Service">Food & Beverage Service</option>
                                    <option class="dropdown-program-diminati" value="Front Office">Front Office</option>
                                    <option class="dropdown-program-diminati" value="Housekeeping">Housekeeping</option>
                                    <option class="dropdown-program-diminati" value="Tidak Berminat">Tidak Berminat :(</option>
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
