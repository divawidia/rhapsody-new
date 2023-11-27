@extends('layouts.app')

@section('title')
    LPK Rhapsody Hospitality Development Center
@endsection

@section('content')
    <div id="modalExecutive" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-3" style="background-color: transparent; border : 0">

                <div class="modal-body">
                    <img
                        src="/img/modal/Pamflet - Executive Hybrid.jpg"
                        alt="Image"
                        class="img-fluid"
                    />
                    <div
                        class="p-4 text-end"
                        style="background-color: var(--theme-color3)"
                    >
                        <a class="btn modal-text text-inherit" data-bs-dismiss="modal">Nanti Saja</a>
                        <a href="{{ route('registrasi-program-executive') }}" class="vs-btn">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
  Hero Area
  ==============================-->
    <section>
        <div
            class="vs-carousel hero-layout1 style2"
            data-fade="true"
            data-dots="true"
        >
            <div>
                <div class="hero-inner">
                    <div
                        class="hero-bg"
                        style="background-image: url('/img/hero/hero-pict.jpg');
              background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
            background-position: center center;"
                    ></div>
                    <div class="container">
                        <div class="hero-content">
                            <h1 class="hero-title" data-aos="fade-right" data-aos-duration="1000">The New Direction to Grow</h1>
                            <p class="hero-text" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                                Unlock Your Full Potential and Turn Your Dreams Into Reality
                            </p>
                            <div class="hero-btns" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                                <a href="#modalCenter" role="button" class="btn vs-btn style6" data-bs-toggle="modal">
                                    <i class="fa-solid fa-angle-right"></i>Daftar Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--    @include('includes.modal_daftar')--}}
    <!--==============================
    About Area
==============================-->
    <section class="mt-5 space-bottom">
        <div class="container">
            <div class="row align-items-center align-items-xxl-start">
                <div class="col-lg-5">
                    <div class="picture-box2">
                        <div class="picture-1 mega-hover" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
                            <img src="/img/about/about-2-1.jpg" alt="About Img" />
                        </div>
                        <div class="picture-2 mega-hover" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
                            <img src="/img/about/about-2-2.jpg" alt="About Img" />
                        </div>
                        <div class="picture-3 mega-hover" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="200">
                            <img src="/img/about/about-2-3.jpg" alt="About Img" />
                        </div>
                        <div class="vs-circle"></div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-box2">
                        <div class="title-area">
                <span class="sec-subtitle" data-aos="fade-right" data-aos-duration="1000"
                >Selamat datang di LPK Rhapsody Hospitality Development Center</span
                >
                            <h2 class="about-title h1" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                                Create Your Success Road Map With Us!
                            </h2>
                        </div>
                        <div class="about-content" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                            <p class="fs-md">
                                LPK Rhapsody Hospitality Development Center merupakan lembaga
                                pendidikan dan pelatihan vokasi bidang perhotelan dan kapal
                                pesiar. Kami hadir dengan inovasi konsep pembelajaran yang
                                menggabungkan pelatihan personal development, fundamental
                                hospitality skill dan knowledge, yang bertujuan untuk
                                mempersiapkan generasi muda dengan skill set lengkap untuk
                                sukses berkarir di dalam atau di luar negeri dan berkarya di
                                era industri 4.0.
                            </p>

                            <div class="call-media">
                                <div class="media-icon"><i class="fa-brands fa-whatsapp fa-lg" style="color: var(--theme-color);"></i></div>
                                <div class="media-body">
                                    <span class="media-label">Hubungi Kami</span>
                                    <p class="media-info">
                                        <a href="https://wa.me/6287761360699" class="text-inherit"
                                        >+62877-6136-0699</a
                                        >
                                    </p>
                                </div>
                            </div>

                            <a href="{{url('/about-us')}}" class="vs-btn style3 mt-2"
                            ><i class="fa-solid fa-angle-right"></i>Info Tentang Kami</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
      Category Area
  ==============================-->
    <section class="space-bottom">
        <div class="container">
            <div class="title-area text-center">
                <div class="sec-icon" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
                    <img alt="" width="50" src="/img/icon/circle-icon.svg">
                </div>
                <span class="sec-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="100">LPK RHAPSODY HOSPITALITY DEVELOPMENT CENTER</span>
                <h2 class="sec-title" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="200">Program Kami</h2>
            </div>
            <div
                class="row"
                data-center-mode="true"
            >
                <h4 class="border-title2 mx-3" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="100">Diploma 1</h4>
                <div class="col-6 col-xl-3" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
                    <div class="category-style1">
                        <div class="category-img">
                            <img
                                class="w-100"
                                src="/img/category/category-2-1.png"
                                alt="category"
                            />
                        </div>
                        <div class="category-content">
                            <h5 class="category-title">
                                <a href="{{ route('front-office') }}">Front Office</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-xl-3" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="200">
                    <div class="category-style1">
                        <div class="category-img">
                            <img
                                class="w-100"
                                src="/img/category/category-2-2.png"
                                alt=""
                            />
                        </div>
                        <div class="category-content">
                            <h5 class="category-title">
                                <a href="{{ route('housekeeping') }}">Housekeeping</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-xl-3" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
                    <div class="category-style1">
                        <div class="category-img">
                            <img
                                class="w-100"
                                src="/img/category/category-2-3.png"
                                alt="category"
                            />
                        </div>
                        <div class="category-content">
                            <h5 class="category-title">
                                <a href="{{ route('f&b-product') }}">Food & Beverage Product</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-xl-3" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="400">
                    <div class="category-style1">
                        <div class="category-img">
                            <img
                                class="w-100"
                                src="/img/category/category-2-4.png"
                                alt="category"
                            />
                        </div>
                        <div class="category-content">
                            <h5 class="category-title">
                                <a href="{{ route('f&b-service') }}">Food & Beverage Service</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="row"
                data-center-mode="true"
            >
                <h4 class="border-title2 mx-3" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="100">Executive Hybrid</h4>
                <div class="col-6 col-xl-3" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="200">
                    <div class="category-style1">
                        <div class="category-img">
                            <img
                                class="w-100"
                                src="/img/category/house-keeping2.jpg"
                                alt=""
                            />
                        </div>
                        <div class="category-content">
                            <h5 class="category-title">
                                <a href="laundry&hk.html">Laundry & Housekeeping</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-xl-3" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="300">
                    <div class="category-style1">
                        <div class="category-img">
                            <img
                                class="w-100"
                                src="/img/category/cook.jpg"
                                alt="category"
                            />
                        </div>
                        <div class="category-content">
                            <h5 class="category-title">
                                <a href="galley&cook.html">Galley & Cook</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
CTA Area
==============================-->
    <section class="space-bottom">
        <div class="container">
            <div class="title-area text-center wow fadeInUp" data-wow-delay="0.3s">
                <div class="sec-icon" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
                    <img alt="" width="50" src="/img/icon/circle-icon.svg"></img>
                </div>
                <span class="sec-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="100">LPK RHAPSODY HOSPITALITY DEVELOPMENT CENTER</span>
                <h2 class="sec-title" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="200">Fasilitas Kami</h2>
            </div>
            <div class="cta-style2" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="cta-content">
                            <h2 class="cta-title h1" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                                Fasilitas Belajar dan Praktek yang Berkualitas dengan Harga Terjangkau
                            </h2>
                            <a href="{{ route('fasilitas') }}" class="vs-btn style2-1" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300"
                            ><i class="fa-solid fa-angle-right"></i>Info Lebih Lengkap</a
                            >
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="200">
                        <div class="cta-img mega-hover">
                            <img src="/img/about/about-2-6.jpg" alt="About Img" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Course Area
==============================-->
    <section class="space-bottom">
        <div class="container">
            <div
                class="row"
            >
                <div class="col-sm-6 col-xl-4" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
                    <div class="course-style2">
                        <div class="course-img">
                            <a href="{{ route('fasilitas') }}"
                            ><img
                                    class="w-100"
                                    src="/img/course/fb-service1.jpg"
                                    alt="Course Img"
                                /></a>
                        </div>
                        <div class="course-content">
                            <h3 class="h5 course-name">
                                <a href="{{ route('fasilitas') }}" class="text-inherit"
                                >Sensory Gastro Lab</a
                                >
                            </h3>
                            <div class="course-meta"></div>
                            <div class="course-footer">
                                <div class="course-teacher">
                                    <a href="{{ route('fasilitas') }}" class="text-inherit-body"
                                    >Lab restaurant dengan konsep creative fun dinning
                                        yang dikembangkan untuk mengasah kretifitas mahasiswa
                                        dalam bidang food & baverages</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
                    <div class="course-style2">
                        <div class="course-img">
                            <a href="{{ route('fasilitas') }}"
                            ><img
                                    class="w-100"
                                    src="/img/course/alenia-kitchen.jpg"
                                    alt="Course Img"
                                /></a>
                        </div>
                        <div class="course-content">
                            <h3 class="h5 course-name">
                                <a href="{{ route('fasilitas') }}" class="text-inherit"
                                >Alenia Kitchen</a
                                >
                            </h3>
                            <div class="course-meta">
                            </div>
                            <div class="course-footer">
                                <div class="course-teacher">
                                    <a href="{{ route('fasilitas') }}" class="text-inherit-body"
                                    >Food production lab yang dikembangkan untuk mahasiswa
                                        yang memiliki passion di bidang food production</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="200">
                    <div class="course-style2">
                        <div class="course-img">
                            <a href="{{ route('fasilitas') }}"
                            ><img
                                    class="w-100"
                                    src="/img/course/hk3.jpg"
                                    alt="Course Img"
                                /></a>
                        </div>
                        <div class="course-content">
                            <h3 class="h5 course-name">
                                <a href="{{ route('fasilitas') }}" class="text-inherit"
                                >Alpha Suite</a
                                >
                            </h3>
                            <div class="course-meta">
                            </div>
                            <div class="course-footer">
                                <div class="course-teacher">
                                    <a href="{{ route('fasilitas') }}" class="text-inherit-body"
                                    >Mockup room dengan design modern minimalis untuk
                                        tempat praktik mahasiswa bidang room division</a
                                    >
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
      Brand Area
  ==============================-->
    <section class="space-extra-bottom">
        <div class="container">
            <div class="title-area text-center wow fadeInUp" data-wow-delay="0.3s">
                <div class="sec-icon" data-aos="fade-up" data-aos-duration="1000">
                    <img alt="" width="50" src="/img/icon/circle-icon.svg"></img>
                </div>
                <span class="sec-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="100">KAMI TELAH DIPERCAYA OLEH</span>
                <h2 class="sec-title h1" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="200">Top Cruiseline</h2>
            </div>
            <div class="row">
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
    <script>
        $(document).ready(function(){
            $("#modalExecutive").modal('show');
        });
    </script>
@endpush
