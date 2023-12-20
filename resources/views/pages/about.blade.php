@extends('layouts.app')

@section('title')
    Tentang Kami | LPK Rhapsody Hospitality Development Center
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
            <h1 class="breadcumb-title"data-aos="fade-up" data-aos-duration="1000">Tentang Kami</h1>
            <ul class="breadcumb-menu" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
              <li><a href="{{ route('home') }}">Beranda</a></li>
              <li>Tentang Kami</li>
            </ul>
        </div>
      </div>
    </div>
    <!--==============================
    About Area
==============================-->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-xl-9">
            <div class="title-area mb-3 mb-xl-5">
              <span class="sec-subtitle" data-aos="fade-right" data-aos-duration="1000"
                >LPK RHAPSODY HOSPITALITY DEVELOPMENT CENTER
              </span>
              <h2 class="sec-title text-uppercase" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">Create Your Success Story With Us!</h2>
            </div>
          </div>
          <div class="col-xl-5 col-xl-4 mb-30 mb-xl-0">
            <p class="fs-md mt-n1" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200">
              Rhapsody Hospitality Development Center merupakan lembaga
              pendidikan dan pelatihan vokasi bidang perhotelan dan kapal
              pesiar, dengan semboyan
            </p>
            <h4 class="fs-4 fw-bold text-center" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="300">“The New Direction to Grow”</h4>
            <p class="fs-md mt-n1" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="400">
              Kami hadir dengan inovasi konsep pembelajaran yang menggabungkan
              pelatihan personal development, fundamental hospitality skill dan
              knowledge dan essential business skill yang dikemas dengan fun dan
              exploratif, yang bertujuan untuk mempersiapkan generasi muda
              dengan skill set lengkap untuk sukses berkarir di dalam atau di
              luar negeri dan berkarya di era industri 4.0.
            </p>
          </div>
          <div class="col-xl-7 mt-n5 pt-5 pt-xl-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <div class="img-box3">
              <div class="img-1 mega-hover">
                <img
                  class="w-100"
                  src="/img/about/about-2-6.jpg"
                  alt="About Img"
                />
              </div>
              <div class="shape-dotted jump"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5" style="background-color: #FAF5F0;">
      <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title h1 text-uppercase" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">Kenapa Rhapsody?</h2>
          <span class="sec-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">STRATEGIC DEVELOPMENT PARTNER</span>
        </div>
        <div class="mt-3 row">
          <div class="col-xl-7 pt-5 pt-xl-0" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200">
            <div class="img-box3">

              <div class="img-1 mega-hover">
                <img
                  class="w-100"
                  src="/img/about/JNR00860 (1) 1.jpg"
                  alt="About Img"
                />
              </div>
              <div class="shape-dotted jump"></div>
            </div>

          </div>
          <div class="col-xl-5 col-xl-4 mb-30 mb-xl-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">

            <p class="fs-md mt-n1">
              Perkembangan industri pariwisata saat ini dan kedepan telah menuntut dunia pendidikan untuk berubah dan beradaptasi agar tidak menjadi usang dan tertinggal. Saat ini terjadi kesenjangan antara mutu pendidikan yang tawarkan sekolah dengan kebutuhan di industri masih cukup besar.

            </p>
            <p class="fs-md mt-n1">
              Rhapsody berkomitmen untuk berkolaborasi dengan SMK sebagai upaya meningkatkan mutu pendidikan dan profesionalitas tenaga pengajar melalui berbagai aktifitas strategis yang bertujuan untuk mempersiapkan generasi muda di dalam menghadapi persaingan global di dunia industri.

            </p>
          </div>

        </div>
      </div>
    </section>
    <!--==============================
  Features Area
  ==============================-->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xl-4" data-aos="fade-up" data-aos-duration="1000">
              <div class="media-style9">
                  <div class="media-icon"><img src="/img/icon/book.svg" alt="icon"></div>
                  <h5 class="media-title">Pengembangan Materi Pembelajaran</h5>
                  <p>Supporting pembaharuan materi ajar yang mengacu pada trend dan kebutuhan industry saat ini</p>
              </div>
          </div>
          <div class="col-sm-6 col-xl-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
              <div class="media-style9">
                  <div class="media-icon"><img src="/img/icon/teach.svg" alt="icon"></div>
                  <h5 class="media-title mt-5">Kolaborasi Instruktur dan Guru</h5>
                  <p>Free akses bagi guru SMK untuk berkolaborasi dengan team teaching Rhapsody yang bertujuan meningkatkan kualitas tenaga pengajar SMK</p>
              </div>
          </div>
          <div class="col-sm-6 col-xl-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
              <div class="media-style9">
                  <div class="media-icon"><img src="/img/icon/supervision.svg" alt="icon"></div>
                  <h5 class="media-title">Supervisi Program</h5>
                  <p>Program supervisi di SMK bagi mahasiswa Rhapsody yang telah menuntaskan OJT selama 6 bulan</p>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section class="space-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg" data-aos="fade-up" data-aos-duration="1000">
            <h5 class="left-border h1 px-2 pt-2">Visi</h5>
            <p>Menjadi lembaga pelatihan kerja bidang perhotelan dengan standar mutu pelayanan pendidikan yang inovatif, terkemuka, unggul dan berdaya guna serta menghasilkan lulusan (output) yang mampu berdaya saing di tarap nasional dan international.</p>

          </div>
          <div class="col-12 col-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <h5 class="left-border h1 px-2 pt-2">Misi</h5>
            <div class="list-style1 vs-list">
                <ul>
                    <li>Melaksanakan proses pelatihan secara efektif.</li>
                    <li>Meningkatkan dan pelatihan profesionalitas pelayanan pendidikan</li>
                    <li>Membangun karakter mandiri dan daya saing peserta latih / mahasiswa.</li>
                    <li>Menyiapkan generasi muda yang kritis, kreatif, inovatif dan tanggap terhadap tuntutan perkembangan zaman</li>
                    <li>Membantu dunia industri pariwisata serta perhotelan dalam pengadaan tenaga kerja</li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--==============================
      Team Area
  ==============================-->
    <section class="space-top space-bottom" style="background-color: #FAF5F0;">
      <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title h1 text-uppercase" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Apa Tujuan Kami?</h2>
            <span class="sec-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">LPK RHAPSODY HOSPITALITY DEVELOPMENT CENTER</span>
            <p class="fs-md mt-4 px-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">Menciptakan sumber daya manusia yang berkarakter, propesional, berintelektual dan memiliki jiwa kewirausahaan yang mandiri, yang mana semua elemen tersebut kita jadikan dalam satu ungkapan nilai kepribadian diri berupa :</p>
            <p class="fs-3 h1 text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">“SIGNATURE”</p>
        </div>
        <div class="row">
          <div class="col-12 col-sm border-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            <h1 class="goal-text text-center">S.</h1>
            <p class="goal-desc fw-bold text-center">Strong leadership</p>
          </div>
          <div class="col-12 col-sm border-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
            <h1 class="goal-text text-center">I.</h1>
            <p class="goal-desc fw-bold text-center">Integrity</p>
          </div>
          <div class="col-12 col-sm border-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
            <h1 class="goal-text text-center">G.</h1>
            <p class="goal-desc fw-bold text-center">Gentlemanly</p>
          </div>
          <div class="col-12 col-sm border-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
            <h1 class="goal-text text-center">N.</h1>
            <p class="goal-desc fw-bold text-center">Nice looking</p>
          </div>
          <div class="col-12 col-sm border-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">
            <h1 class="goal-text text-center">A.</h1>
            <p class="goal-desc fw-bold text-center">Adeptness</p>
          </div>
          <div class="col-12 col-sm border-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
            <h1 class="goal-text text-center">T.</h1>
            <p class="goal-desc fw-bold text-center">Team work</p>
          </div>
          <div class="col-12 col-sm border-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1200">
            <h1 class="goal-text text-center">U.</h1>
            <p class="goal-desc fw-bold text-center">Unpretentious</p>
          </div>
          <div class="col-12 col-sm border-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1300">
            <h1 class="goal-text text-center">R.</h1>
            <p class="goal-desc fw-bold text-center">Responsible in every action</p>
          </div>
          <div class="col-12 col-sm border-start" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1400">
            <h1 class="goal-text text-center">E.</h1>
            <p class="goal-desc fw-bold text-center">Empathy</p>
          </div>
        </div>
      </div>
    </section>
    <!--==============================
  Call To Action
  ==============================-->
    <section style="
            background-image: url('/img/bg/divider-bg-1-1.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;">
        <div class="container">
            <div class="row align-items-center text-center text-lg-start">
                <div class="col-lg-5 col-xl-6 space-extra">
                    <img class="mb-5" src="/img/logo-victory.png" alt="" width="150" data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="sec-title text-white mb-3" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">Victory Placement Center</h2>
                    <p class="fs-md text-white" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">Victory International Placement Center merupakan
                        salah satu divisi sebagai pusat pendampingan mahasiswa ke luar negeri baik
                        di kapal pesiar ataupun di darat.</p>

                    <a href="https://www.instagram.com/victoryinternationalplacement/" class="vs-btn style2-1" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300"><i class="fa-solid fa-angle-right"></i>More nfo</a>
                </div>
            </div>
        </div>
    </section>

@include('includes.testi-cards')
    <!--==============================
      Features Area
      ==============================-->
    <section class="space-extra-bottom">
      <div class="container">
          <div class="title-area text-center wow fadeInUp" data-wow-delay="0.3s">
              <h2 class="sec-title h1 text-uppercase" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="200">Partner Kami</h2>
              <span class="sec-subtitle text-uppercase" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="100">Kami Telah Dipercaya Oleh Beberapa Cruiseline Besar</span>
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
          <div class="col-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
            <div class="brand-style1">
              <img src="/img/brand/carnival-logo.png" alt="brand" />
            </div>
          </div>
          <div class="col-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="400">
            <div class="brand-style1">
              <img src="/img/brand/princess-logo.png" alt="brand" />
            </div>
          </div>
          <div class="col-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="500">
            <div class="brand-style1">
              <img src="/img/brand/celebrity-logo.png" alt="brand" />
            </div>
          </div>
          <div class="col-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="600">
            <div class="brand-style1">
              <img src="/img/brand/norwegian-logo.png" alt="brand" />
            </div>
          </div>
          <div class="col-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="700">
            <div class="brand-style1">
              <img src="/img/brand/oceania-logo.png" alt="brand" />
            </div>
          </div>
          <div class="col-6 col-lg-4 col-xl-3" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="800">
            <div class="brand-style1">
              <img src="/img/brand/disney-logo.png" alt="brand" />
            </div>
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
                margin: 30,
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
@endpush
