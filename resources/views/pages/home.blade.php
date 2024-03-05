@extends('layouts.app')

@section('title')
    LPK Rhapsody Hospitality Development Center
@endsection

@section('content')
{{--    <div id="modalExecutive" class="modal fade" tabindex="-1">--}}
{{--        <div class="modal-dialog modal-dialog-centered modal-lg">--}}
{{--            <div class="modal-content rounded-3" style="background-color: transparent; border : 0">--}}

{{--                <div class="modal-body">--}}
{{--                    <img--}}
{{--                        src="/img/modal/Pamflet - Executive Hybrid.jpg"--}}
{{--                        alt="Image"--}}
{{--                        class="img-fluid"--}}
{{--                    />--}}
{{--                    <div--}}
{{--                        class="p-4 text-end"--}}
{{--                        style="background-color: var(--theme-color3)"--}}
{{--                    >--}}
{{--                        <a class="btn modal-text text-inherit" data-bs-dismiss="modal">Nanti Saja</a>--}}
{{--                        <a href="{{ route('registrasi-program-executive') }}" class="vs-btn">Daftar Sekarang</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!--==============================
  Hero Area
  ==============================-->
    <section class="hero-section">
        <div
            class="vs-carousel hero-layout1 style2"
        >
            <div>
                <div class="hero-inner">
                    <div
                        class="hero-bg"
                        style="background-image: url('/img/breadcumb/home-bg.jpg');
                                background-repeat: no-repeat;
                                background-size: cover;
                                overflow: hidden;
                                background-position: center center;"
                    ></div>
                    <div class="container">
                        <div class="row space-top mb-5 d-flex align-items-end">
                            <div class="hero-content col-12 col-lg-4 order-2 order-lg-1 pb-5 px-5 px-lg-2">
                                <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                    <span class="landing-title-small">NO </span>
                                    <span class="landing-title-small-bold">FLIGHT </span>
                                    <span class="landing-title-small">NO </span>
                                    <span class="landing-title-small-bold">PAY.</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <p class="hero-text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                        Satu - satunya LPK perhotelan dan kapal pesiar yang berani menjamin keberangkatan.
                                    </p>
                                </div>
                                <div class="hero-btns" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                    <a href="#modalCenter" role="button" class="btn vs-btn style6" data-bs-toggle="modal">
                                        <img src="/img/icon/info.png">  Daftar Sekarang
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-9 p-0 order-1 order-lg-2 ms-auto py-5 py-lg-0">
                                <img data-aos="fade-up" data-aos-duration="1000" width="1024" src="/img/hero/Pesawat.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        @include('includes.modal_daftar')
    <!--==============================
    About Area
==============================-->
    <section class="mt-5 space-top about-section">
        <div class="container">
            <div class="row align-items-center align-items-xxl-start">
                <div class="col-lg-7">
                    <div class="picture-box2">
                        <div class="d-flex flex-row mx-2">
                            <div class="picture-1 mega-hover" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
                                <img src="/img/about/about-2-1.jpg" alt="About Img" />
                            </div>
                            <div class="picture-1 mega-hover" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
                                <img src="/img/about/about-2-2.jpg" alt="About Img" />
                            </div>
                            <div class="picture-1 mega-hover" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="200">
                                <img src="/img/about/about-2-3.jpg" alt="About Img" />
                            </div>
                            <div class="picture-1 mega-hover" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
                                <img src="/img/about/about-2-4.jpg" alt="About Img" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 px-4 px-lg-0">
                    <div class="about-box2">
                        <div class="title-area">
                            <h2 class="about-title h1 text-uppercase" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">
                                MENGAPA RHAPSODY?
                            </h2>
                            <span class="sec-subtitle" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
                                <FONT COLOR="#006687">Kamu mungkin dapat program belajar yang menarik di tempat lain, tapi apa mereka mempedulikan</FONT>
                                masa depanmu?
                            </span>
                        </div>
                        <div class="about-content mt-3" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">
                            <p class="fs-md">
                                Kami bukan hanya tentang memberikan program belajar yang menarik; kami juga memprioritaskan masa depan karir setiap peserta. Kami mengakui bahwa pendidikan bukanlah hanya tentang memperoleh pengetahuan, tetapi juga tentang mempersiapkan para peserta untuk sukses  di industri. Itulah mengapa <b>kami menawarkan kesempatan praktik yang luas, penempatan kerja, dan dukungan karir yang berkelanjutan.</b>
                                <br>
                                <br>
                                Jadi, sementara program belajar lain mungkin menarik, pertimbangkan apakah mereka peduli dengan masa depanmu seperti yang kami lakukan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @include('includes.testi-cards')
        </div>
    </section>
    <!--==============================
      Category Area
  ==============================-->
    <section class="space-top space-bottom py-5 mt-5"
             style="background: url('/img/bg/mid-bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
            background-position: center center;">
        <div class="container px-5">
            <div class="title-area text-center">
                <h2 class="sec-title text-uppercase text-white" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">Program Kami</h2>
                <span class="sec-subtitle text-white" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="100">Program akademik kami yang dikaji oleh para ahli dengan standar Internasional</span>
            </div>
            <div class="left-border row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <h5 class="program-subtitle mt-2 text-white" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">Program</h5>
                <h4 class="text-uppercase text-white mb-0" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">Diploma 1</h4>
                <p class="text-white" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">Ajak temanmu dan raih peluang mendapatkan beasiswa</p>
            </div>
                    <div class="row">
{{--                        <div class="col-12 mt-5">--}}
{{--                            <div class="owl-carousel slider_carousel">--}}
                                <div class="col-lg-6 col-xl-3" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="course-style2">
                                        <div class="course-img">
                                            <a href="{{ route('f&b-product') }}"><img class="w-100" src="/img/category/category-2-3.png" alt="Front Office"></a>
                                        </div>
                                        <div class="row course-tag">
                                            <span class="col-auto course-price"><img src="/img/icon/discount.svg" style="width: 20px; margin-bottom: 2px">  Promo tersedia</span>
                                            <div class="col-auto ms-auto category-style1 p-0">
                                                <div class="icon">
                                                    <img src="/img/icon/Cook.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-content">
                                            <h3 class="h5 course-name"><a href="{{ route('f&b-product') }}" class="text-inherit">F&B Product</a></h3>
                                            <div class="course-meta">
                                                <span>Keterampilan fundamental memasak beserta sanitasi & hygiene</span>
                                            </div>
                                            <span class="interest-percentage">Minat<br>28%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                    <div class="course-style2">
                                        <div class="course-img">
                                            <a href="{{ route('f&b-service') }}"><img class="w-100" src="/img/category/bar.jpg" alt="Front Office"></a>
                                        </div>
                                        <div class="row course-tag">
                                            <span class="col-auto course-price"><img src="/img/icon/discount.svg" style="width: 20px; margin-bottom: 2px">  Promo tersedia</span>
                                            <div class="col-auto ms-auto category-style1 p-0">
                                                <div class="icon">
                                                    <img src="/img/icon/Service.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-content">
                                            <h3 class="h5 course-name"><a href="{{ route('f&b-service') }}" class="text-inherit">F&B Service</a></h3>
                                            <div class="course-meta">
                                                <span>Pelayanan bintang 5 lengkap dengan mixology dan barista</span>
                                            </div>
                                            <span class="interest-percentage">Minat<br>41%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                    <div class="course-style2">
                                        <div class="course-img">
                                            <a href="{{ route('front-office') }}"><img class="w-100" src="/img/category/category-2-1.png" alt="Front Office"></a>
                                        </div>
                                        <div class="row course-tag">
                                            <span class="col-auto course-price"><img src="/img/icon/discount.svg" style="width: 20px; margin-bottom: 2px">  Promo tersedia</span>
                                            <div class="col-auto ms-auto category-style1 p-0">
                                                <div class="icon">
                                                    <img src="/img/icon/FO.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-content">
                                            <h3 class="h5 course-name"><a href="{{ route('front-office') }}" class="text-inherit">Front Office</a></h3>
                                            <div class="course-meta">
                                                <span>Lini terdepan hotel yang merepresentasikan brand</span>
                                            </div>
                                            <span class="interest-percentage">Minat<br>7%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                    <div class="course-style2">
                                        <div class="course-img">
                                            <a href="{{ route('housekeeping') }}"><img class="w-100" src="/img/category/category-2-2.png" alt="Front Office"></a>
                                        </div>
                                        <div class="row course-tag">
                                            <span class="col-auto course-price"><img src="/img/icon/discount.svg" style="width: 20px; margin-bottom: 2px">  Promo tersedia</span>
                                            <div class="col-auto ms-auto category-style1 p-0">
                                                <div class="icon">
                                                    <img src="/img/icon/HK.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-content">
                                            <h3 class="h5 course-name"><a href="{{ route('housekeeping') }}" class="text-inherit">Housekeeping</a></h3>
                                            <div class="course-meta">
                                                <span>Menjaga kenyamanan tamu melalui aspek kebersihan</span>
                                            </div>
                                            <span class="interest-percentage">Minat<br>24%</span>
                                        </div>
                                    </div>
                                </div>
                    </div>
            <div class="left-border row" data-aos="fade-up" data-aos-duration="1000">
                <h5 class="program-subtitle mt-2 text-white" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">Program</h5>
                <h4 class="text-uppercase mb-0 text-white" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="150">Executive Hybrid</h4>
                <p class="text-white" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">*Umur minimal 21 tahun</p>
            </div>
            <div
                class="row"
                data-center-mode="true"
            >
                <div class="col-lg-6 col-xxl-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="course-style2">
                        <div class="course-img">
                            <a href="{{ route('galley&cook') }}"><img class="w-100" src="/img/course/cook-galley.jpg" alt="Front Office"></a>
                        </div>
                        <div class="row position-absolute translate-middle d-flex align-items-center hstack px-3 course-tag">
                            <span class="col-auto course-price" style="background-color: #006687"><img src="/img/icon/Online.svg" style="width: 20px; margin-bottom: 2px;">  Online</span>
                            <span class="col-auto course-price"><img src="/img/icon/Speed.svg" style="width: 20px; margin-bottom: 2px">  3 bulan lulus</span>
                            <div class="col-auto category-style1 ms-auto p-0">
                                <div class="icon">
                                    <img src="/img/icon/Cook.svg">
                                </div>
                            </div>
                        </div>
                        <div class="course-content">
                            <h3 class="h5 course-name"><a href="{{ route('galley&cook') }}" class="text-inherit">Cook & Galley</a></h3>
                            <div class="course-meta">
                                <span>Kursus kilat seni kuliner dengan Bahasa Inggris industri</span>
                            </div>
                        </div>
                        <div class="course-content2 text-white">
                            <span class="col-auto"><img src="/img/icon/Graduate.svg" style="width: 30px; margin-bottom: 2px">  200+ Alumni</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-3 mt-5 mt-lg-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="course-style2">
                        <div class="course-img">
                            <a href="{{ route('laundry&housekeeping') }}"><img class="w-100" src="/img/course/hk-laundry.jpg" alt="Front Office"></a>
                        </div>
                        <div class="row position-absolute translate-middle d-flex align-items-center hstack px-3 course-tag">
                            <span class="col-auto course-price" style="background-color: #006687"><img src="/img/icon/Online.svg" style="width: 20px; margin-bottom: 2px;">  Online</span>
                            <span class="col-auto course-price"><img src="/img/icon/Speed.svg" style="width: 20px; margin-bottom: 2px">  3 bulan lulus</span>
                            <div class="col-auto category-style1 ms-auto p-0">
                                <div class="icon">
                                    <img src="/img/icon/HK.svg">
                                </div>
                            </div>
                        </div>
                        <div class="course-content">
                            <h3 class="h5 course-name"><a href="{{ route('laundry&housekeeping') }}" class="text-inherit">HK & Laundry</a></h3>
                            <div class="course-meta">
                                <span>Kursus kilat tata graha dengan Bahasa Inggris industri</span>
                            </div>
                        </div>
                        <div class="course-content2 text-white">
                            <span class="col-auto"><img src="/img/icon/Graduate.svg" style="width: 30px; margin-bottom: 2px">  200+ Alumni</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
CTA Area
==============================-->
    <section class="space-bottom py-5">
        <div class="container">
            <div class="title-area text-center">
                <h2 class="sec-title text-uppercase" data-aos="fade-up" data-aos-duration="1000">Fasilitas Pelatihan</h2>
                <span class="sec-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">Tempat kalian ditempa oleh para ahli yang sudah berpengalaman selama puluhan tahun</span>
            </div>
            <div class="row">
                    <img src="/img/bg/facility-bg1.jpg" class="col-auto facility-bg1 rounded-5 p-0" data-aos="fade-down" data-aos-duration="1000">
                    <img src="/img/bg/facility-bg2.jpg" class="col-auto facility-bg2 rounded-5 p-0" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
                    <img src="/img/bg/facility-bg3.jpg" class="col-auto facility-bg3 rounded-5 p-0" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200">
            </div>
            <div class="row align-items-center" style="
                    position: relative;
                    z-index: 4;
                ">
                <div class="col-lg-4 vstack p-5 facility-text-col" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                    <h2 class="facility-title">Kami <span class="facility-title-with-bg">mengamati</span></h2>
                    <h2 class="facility-title2">workflow industri dan mengadaptasikannya
                        langsung ke seluruh peserta program.</h2>
                    <p class="facility-text mt-auto" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">
                        Rasakan langsung bagaimana simulasi yang kami rancang sesuai dengan <i><b>guideline</b></i> dan <i><b>shortcut</b></i> di lapangan.
                    </p>
                </div>
                <div class="col-lg-8" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
                    <img src="/img/hero/Simulation.png">
                </div>
            </div>
        </div>
    </section>
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="cta-content">--}}
{{--                            <h2 class="cta-title h1" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">--}}
{{--                                Fasilitas Belajar dan Praktek yang Berkualitas dengan Harga Terjangkau--}}
{{--                            </h2>--}}
{{--                            <a href="{{ route('fasilitas') }}" class="vs-btn style2-1" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300"--}}
{{--                            ><i class="fa-solid fa-angle-right"></i>Info Lebih Lengkap</a--}}
{{--                            >--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="200">--}}
{{--                        <div class="cta-img mega-hover">--}}
{{--                            <img src="/img/about/about-2-6.jpg" alt="About Img" />--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--        </div>--}}
{{--    </section>--}}
    <!--==============================
    Course Area
==============================-->
    <section class="mt-5 space-bottom">
        <div class="container">
            <div
                class="row"
            >
                <div class="col-sm-6 col-xl-4" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
                    <div class="course-style2">
                        <div class="course-img2">
                            <a href="{{ route('fasilitas') }}"
                            ><img
                                    class="w-100"
                                    src="/img/course/fb-service.jpg"
                                    alt="Course Img"
                                /></a>
                        </div>
                        <div class="course-content3">
                            <div class="row">
                                <span class="col-auto facility-tag-bg">Sensory Gastro Lab</span>
                                <span class="col-auto facility-tag-bg2">Sensory Gastro Lab</span>
                                <img src="/img/course/Restaurant.png" class="facility-tag-img ms-auto">
                            </div>
                            <div class="course-content">
                                <h3 class="h5 course-name"><a href="course-details.html" class="text-inherit">F&B Service, Mixology, Barista</a></h3>
                                <div class="course-meta">
                                    <span>Teaching factory dengan nuansa dan fasilitas standar industri yang mendukung pembelajaran fundamental dunia kuliner.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
                    <div class="course-style2">
                        <div class="course-img2">
                            <a href="{{ route('fasilitas') }}"
                            ><img
                                    class="w-100"
                                    src="/img/course/alenia-kitchen.jpg"
                                    alt="Course Img"
                                /></a>
                        </div>
                        <div class="course-content3">
                            <div class="row">
                                <span class="col-auto facility-tag-bg">Alenia Kitchen</span>
                                <span class="col-auto facility-tag-bg2">Alenia Kitchen</span>
                                <img src="/img/course/Kitchen.png" class="facility-tag-img ms-auto">
                            </div>
                            <div class="course-content">
                                <h3 class="h5 course-name"><a href="course-details.html" class="text-inherit">F&B Product, Hot Kitchen, Bakery</a></h3>
                                <div class="course-meta">
                                    <span>Teaching factory dengan nuansa dan fasilitas standar industri yang mendukung pembelajaran fundamental dunia kuliner.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="200">
                    <div class="course-style2">
                        <div class="course-img2">
                            <a href="{{ route('fasilitas') }}"
                            ><img
                                    class="w-100"
                                    src="/img/course/alphasuite.jpg"
                                    alt="Course Img"
                                /></a>
                        </div>
                        <div class="course-content3">
                            <div class="row">
                                <span class="col-auto facility-tag-bg">Alpha Suite</span>
                                <span class="col-auto facility-tag-bg2">Alpha Suite</span>
                                <img src="/img/course/Room.png" class="facility-tag-img ms-auto">
                            </div>
                            <div class="course-content">
                                <h3 class="h5 course-name"><a href="course-details.html" class="text-inherit">Housekeeping, Public Area</a></h3>
                                <div class="course-meta">
                                    <span>Ruangan simulasi dengan desain modern dan minimalis yang digunakan sebagai lingkungan praktek untuk menjelajahi konsep dasar operasional kamar.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="space-extra-bottom">
        <div class="shape-mockup jump d-none d-xxl-block" data-right="10%" data-bottom="12%">
            <div class="shape-dotted"></div>
        </div>
        <div class="shape-mockup rotate d-none d-xxl-block" data-right="48%" data-top="17%">
            <div class="vs-polygon1"></div>
        </div>
        <div class="shape-mockup jump-reverse d-none d-xxl-block" data-right="51%" data-top="21%">
            <div class="vs-rounded1"></div>
        </div>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-xxl-5">
                    <div class="title-area wow fadeInUp" data-wow-delay="0.3s">
                        <span class="sec-subtitle">WHAT PEOPLE SAY</span>
                        <h2 class="sec-title h1">HEAR OUR STUDENTS WORDS</h2>
                    </div>
                    <div class="testi-slide1 wow fadeInUp row" data-wow-delay="0.4s">
                        <div class="col-auto">
                            <div class="media-style6">
                                <div class="media-img"><img src="/img/testimonial/testimonial-3-1.png" alt=""></div>
                                <div class="media-content">
                                    <h5 class="media-name">Marcella Moniq</h5>
                                    <p class="media-degi">Web Technology</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="media-style6">
                                <div class="media-img"><img src="/img/testimonial/testimonial-3-2.png" alt=""></div>
                                <div class="media-content">
                                    <h5 class="media-name">Jessica Mmoniqa</h5>
                                    <p class="media-degi">Art Professor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="media-style6">
                                <div class="media-img"><img src="/img/testimonial/testimonial-3-3.png" alt=""></div>
                                <div class="media-content">
                                    <h5 class="media-name">Victor M. Walkar</h5>
                                    <p class="media-degi">Academic English</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="media-style6">
                                <div class="media-img"><img src="/img/testimonial/testimonial-3-3.png" alt=""></div>
                                <div class="media-content">
                                    <h5 class="media-name">William Smith</h5>
                                    <p class="media-degi">Science Professor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-xxl-auto align-self-end">
                    <div class="testi-style2">
                        <div class="testi-shape1"></div>
                        <div class="testi-slide2">
                            <div>
                                <div class="testi-content">
                                    <span class="testi-icon"><img src="/img/icon/quote.svg" alt="Testimonial Icon"></span>
                                    <p class="testi-text">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups adipiscing</p>
                                    <h4 class="testi-name">Marcella Moniq</h4>
                                    <p class="testi-degi">Web Technology</p>
                                </div>
                            </div>
                            <div>
                                <div class="testi-content">
                                    <span class="testi-icon"><img src="/img/icon/quote.svg" alt="Testimonial Icon"></span>
                                    <p class="testi-text">From its medieval origins to the digital era, learn everything there is to know about the ubiquitous lorem ipsum passage known, is dummy text used</p>
                                    <h4 class="testi-name">Jessica Moniqa</h4>
                                    <p class="testi-degi">Art Professor</p>
                                </div>
                            </div>
                            <div>
                                <div class="testi-content">
                                    <span class="testi-icon"><img src="/img/icon/quote.svg" alt="Testimonial Icon"></span>
                                    <p class="testi-text">Richard McClintock, a Latin scholar from Hampden-Sydney College, is credited with discovering the source behind the ubiquitous filler piqued by consectetur</p>
                                    <h4 class="testi-name">Victor M. Walkar</h4>
                                    <p class="testi-degi">Academic English</p>
                                </div>
                            </div>
                            <div>
                                <div class="testi-content">
                                    <span class="testi-icon"><img src="/img/icon/quote.svg" alt="Testimonial Icon"></span>
                                    <p class="testi-text">I had the opportunity to meet with the dynamic & distinguishe faculties, who are highly qualified & friendly patients. With their assist & guidance I…</p>
                                    <h4 class="testi-name">William Smith</h4>
                                    <p class="testi-degi">Science Professor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--==============================
  Features Area
  ==============================-->
    <section style="
        background-image: url('/img/bg/divider-bg-1-1.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;">
        <div class="container">
            <div class="row align-items-center text-center text-lg-start" style="padding-bottom: 150px">
                <div class="col-lg-5 col-xl-6 space-extra">
                    <img class="mb-5" src="/img/logo-victory.png" alt="logo-victory" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="sec-title3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">Victory Placement Center</h2>
                    <p class="fs-md" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <b>Karirmu di luar negeri sepenuhnya menjadi tanggungjawab kami.</b><br>
                        Tim kecil kami membuka pintu perubahan dan membangun
                        kisah sukses bagi orang-orang yang berani bermimpi besar.</p>

                    <div class="hero-btns" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <a href="https://www.instagram.com/victoryinternationalplacement/" class="btn vs-btn style6" style="background-color: var(--theme-color); color: white; border: 0; padding: 10px 30px;">
                            <img src="/img/icon/cruise-ship.svg">  Info Lebih Lanjut
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
      Brand Area
  ==============================-->
    <section class="space-extra-top space-extra-bottom">
        <div class="container">
            <div class="title-area text-center wow fadeInUp" data-wow-delay="0.3s">
                <h2 class="sec-title h1 text-uppercase" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="200">Alumni Kami Telah Bekerja Di:</h2>
{{--                <span class="sec-subtitle text-uppercase" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="100">Kami Telah Dipercaya Oleh Beberapa Cruiseline Besar</span>--}}
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
            <span class="sec-subtitle text-center mt-3" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="900">... dan masih banyak lagi</span>
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
    <script>
        $(document).ready(function(){
            $("#modalExecutive").modal('show');
        });
    </script>
@endpush
