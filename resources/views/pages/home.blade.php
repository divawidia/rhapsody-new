@extends('layouts.app')

@section('content')
    <section class="hero-section">
        <div
            class="hero-layout1 style2 jarallax"
        >
                <div class="hero-inner overlay-bg">
                        <div class="container">
                            <div class="row d-flex align-items-end align-items-lg-center vh-100 space-bottom p-lg-0">
                                <div class="hero-content col-12 col-lg-6 order-2 order-lg-1 pb-5 px-5 px-lg-2">
                                    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                        <span class="landing-title-small-bold text-white">{{ $homeData->banner_title }}</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="hero-text" data-aos="fade-up" data-aos-duration="1000"
                                           data-aos-delay="200">
                                            {{ $homeData-> banner_subtitle}}
                                        </p>
                                    </div>
                                    <div class="hero-btns" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                        <a href="#modalCenter" role="button" class="btn vs-btn style6" data-bs-toggle="modal">
                                            <i class="fa-solid fa-circle-info"></i> {{ $homeData-> daftar_btn_text}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    @include('includes.modal_daftar')

    @if($homeData->section2_status == 1)
        <section class="mt-5 space-top space-bottom about-section">
            <div class="container">
                <div class="row align-items-center align-items-xxl-start">
                    <div class="col-lg-7">
                        <div class="picture-box2">
                            <div class="d-flex flex-row mx-2">
                                <div class="picture-1 mega-hover" data-aos="fade-up" data-aos-duration="1000"
                                     data-aos-anchor-placement="top-bottom">
                                    <img src="{{ Storage::url($homeData->section2_img1 ?? '') }}" alt="About Img"/>
                                </div>
                                <div class="picture-1 mega-hover" data-aos="fade-up" data-aos-duration="1000"
                                     data-aos-anchor-placement="top-bottom" data-aos-delay="100">
                                    <img src="{{ Storage::url($homeData->section2_img2 ?? '') }}" alt="About Img"/>
                                </div>
                                <div class="picture-1 mega-hover" data-aos="fade-up" data-aos-duration="1000"
                                     data-aos-anchor-placement="top-bottom" data-aos-delay="200">
                                    <img src="{{ Storage::url($homeData->section2_img3 ?? '') }}" alt="About Img"/>
                                </div>
                                <div class="picture-1 mega-hover" data-aos="fade-up" data-aos-duration="1000"
                                     data-aos-anchor-placement="top-bottom" data-aos-delay="300">
                                    <img src="{{ Storage::url($homeData->section2_img4 ?? '') }}" alt="About Img"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 px-4 px-lg-0">
                        <div class="about-box2">
                            <div class="title-area">
                                <h2 class="about-title h1 text-uppercase" data-aos="fade-right" data-aos-duration="1000"
                                    data-aos-delay="400">
                                    {{ $homeData->section2_title }}
                                </h2>
                                <span class="sec-subtitle" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
                                    @php echo $homeData->section2_subtitle @endphp
                                </span>
                            </div>
                            <div class="about-content mt-3" data-aos="fade-right" data-aos-duration="1000"
                                 data-aos-delay="600">
                                <p class="fs-md">
                                    @php echo $homeData->section2_body @endphp
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @include('includes.testi-cards')
            </div>
        </section>
    @endif
    @include('includes.company-profile')

    @if($homeData->program_section_status == 1)
        <section class="space-top space-bottom"
             style="background: url('/img/bg/mid-bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
            background-position: center center;">
            <div class="container px-5">
                <div class="title-area text-center">
                    <h2 class="sec-title text-uppercase text-white"
                        data-aos="fade-up"
                        data-aos-duration="1000">
                        {{ $homeData->program_section_title }}
                    </h2>
                    <span class="sec-subtitle text-white"
                          data-aos="fade-up"
                          data-aos-duration="1000"
                          data-aos-delay="100">
                        {{ $homeData->program_section_subtitle }}
                    </span>
                </div>
                @foreach($programs as $program)
                    <div class="left-border row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <h5 class="program-subtitle mt-2 text-white" data-aos="fade-right" data-aos-duration="1000"
                            data-aos-delay="300">Program</h5>
                        <h4 class="text-uppercase text-white mb-0" data-aos="fade-right" data-aos-duration="1000"
                            data-aos-delay="400">{{ $program->name }}</h4>
                        <p class="text-white" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
                            Ajak temanmu dan raih peluang mendapatkan beasiswa</p>
                    </div>
                    <div class="row">
                        @foreach($program->program_contents as $program_content)
                            <div class="col-lg-6 col-xl-3" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-style2">
                                    <div class="course-img">
                                        <a href="{{ route('program-detail', $program_content->slug) }}">
                                            <img class="w-100"
                                                 src="{{ Storage::url($program_content->program_photos[0]->photos_url) }}"
                                                 alt="fnb-product">
                                        </a>
                                    </div>
                                    <div class="row course-tag">
                                <span class="col-auto course-price">
                                    <img src="/img/icon/discount.svg" style="width: 20px; margin-bottom: 2px">
                                    Promo tersedia
                                </span>
                                        <div class="col-auto ms-auto category-style1 p-0">
                                            <div class="icon">
                                                <img src="{{ Storage::url($program_content->program_icon) }}" alt="{{ $program_content->name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-content">
                                        <h3 class="h5 course-name">
                                            <a href="{{ route('program-detail', $program_content->slug) }}"
                                               class="text-inherit">
                                                {{ $program_content->name }}
                                            </a>
                                        </h3>
                                        <div class="course-meta">
                                            <span>{{ strip_tags($program_content->short_overview) }}</span>
                                        </div>
                                        <span class="interest-percentage">Minat<br>{{ $program_content->interest_percentage }}%</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </section>
    @endif

    @if($homeData->fasilitas_section_status == 1)
        <section class="space-bottom py-5">
            <div class="container">
                <div class="title-area text-center">
                    <h2 class="sec-title text-uppercase" data-aos="fade-up" data-aos-duration="1000">
                        {{ $homeData->fasilitas_section_title }}
                    </h2>
                    <span class="sec-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        {{ $homeData->fasilitas_section_subtitle }}
                    </span>
                </div>
                <div class="row">
                    <img src="/img/bg/facility-bg1.jpg"
                         class="col-auto facility-bg1 rounded-5 p-0"
                         data-aos="fade-down"
                         data-aos-duration="1000"
                         alt="Sensory Gastro Lab">
                    <img src="/img/bg/facility-bg2.jpg"
                         class="col-auto facility-bg2 rounded-5 p-0"
                         data-aos="fade-down"
                         data-aos-duration="1000"
                         data-aos-delay="100"
                         alt="Alenia Kitchen">
                    <img src="/img/bg/facility-bg3.jpg"
                         class="col-auto facility-bg3 rounded-5 p-0"
                         data-aos="fade-down"
                         data-aos-duration="1000"
                         data-aos-delay="200"
                         alt="Alpha Suite">
                </div>
                <div class="row align-items-center" style="position: relative; z-index: 4;">
                    <div class="col-lg-4 vstack p-5 facility-text-col"
                         data-aos="fade-right"
                         data-aos-duration="1000"
                         data-aos-delay="300">
                        @php echo $homeData->fasilitas_section_title2 @endphp
                        <p class="facility-text mt-auto"
                           data-aos="fade-right"
                           data-aos-duration="1000"
                           data-aos-delay="400">
                            @php echo $homeData->fasilitas_section_subtitle2 @endphp
                        </p>
                    </div>
                    <div class="col-lg-8" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
                        <img src="{{ Storage::url($homeData->fasilitas_section_img ?? '') }}" alt="Facility Ilustration">
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="mt-5 space-bottom">
        <div class="container">
            <div class="row">
                @foreach($facilities as $facility)
                    <div class="col-sm-6 col-xl-4"
                         data-aos="fade-up"
                         data-aos-duration="1000">
                        <div class="course-style2">
                            <div class="course-img2">
                                <a href="{{ route('fasilitas') }}">
                                    <img class="w-100"
                                         src="{{ Storage::url($facility->facility_photo[0]->photo_url) }}"
                                         alt="Course Img"/>
                                </a>
                            </div>
                            <div class="course-content3">
                                <div class="row">
                                    <span class="col-auto facility-tag-bg">{{ $facility->title }}</span>
                                    <span class="col-auto facility-tag-bg2">{{ $facility->title }}</span>
                                    <img src="{{ Storage::url($facility->icon) }}" class="facility-tag-img ms-auto">
                                </div>
                                <div class="course-content">
                                    <h3 class="h5 course-name">
                                        <a href="{{ route('fasilitas') }}" class="text-inherit">
                                            {{ $facility->subtitle }}
                                        </a>
                                    </h3>
                                    <div class="course-meta">
                                        <span>{{ strip_tags($facility->short_description) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
{{--                <div class="col-sm-6 col-xl-4"--}}
{{--                     data-aos="fade-up"--}}
{{--                     data-aos-duration="1000">--}}
{{--                    <div class="course-style2">--}}
{{--                        <div class="course-img2">--}}
{{--                            <a href="{{ route('fasilitas') }}">--}}
{{--                                <img class="w-100"--}}
{{--                                    src="/img/course/fb-service.jpg"--}}
{{--                                    alt="Course Img"/>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="course-content3">--}}
{{--                            <div class="row">--}}
{{--                                <span class="col-auto facility-tag-bg">Sensory Gastro Lab</span>--}}
{{--                                <span class="col-auto facility-tag-bg2">Sensory Gastro Lab</span>--}}
{{--                                <img src="/img/course/Restaurant.png" class="facility-tag-img ms-auto">--}}
{{--                            </div>--}}
{{--                            <div class="course-content">--}}
{{--                                <h3 class="h5 course-name">--}}
{{--                                    <a href="course-details.html" class="text-inherit">--}}
{{--                                        F&B Service, Mixology, Barista--}}
{{--                                    </a>--}}
{{--                                </h3>--}}
{{--                                <div class="course-meta">--}}
{{--                                    <span>Teaching factory dengan nuansa dan fasilitas standar industri yang mendukung pembelajaran fundamental dunia kuliner.</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-6 col-xl-4"--}}
{{--                     data-aos="fade-up"--}}
{{--                     data-aos-duration="1000"--}}
{{--                     data-aos-anchor-placement="top-bottom"--}}
{{--                     data-aos-delay="100">--}}
{{--                    <div class="course-style2">--}}
{{--                        <div class="course-img2">--}}
{{--                            <a href="{{ route('fasilitas') }}">--}}
{{--                                <img class="w-100"--}}
{{--                                    src="/img/course/alenia-kitchen.jpg"--}}
{{--                                    alt="Course Img"/>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="course-content3">--}}
{{--                            <div class="row">--}}
{{--                                <span class="col-auto facility-tag-bg">Alenia Kitchen</span>--}}
{{--                                <span class="col-auto facility-tag-bg2">Alenia Kitchen</span>--}}
{{--                                <img src="/img/course/Kitchen.png" class="facility-tag-img ms-auto">--}}
{{--                            </div>--}}
{{--                            <div class="course-content">--}}
{{--                                <h3 class="h5 course-name">--}}
{{--                                    <a href="course-details.html"--}}
{{--                                       class="text-inherit">--}}
{{--                                        F&B Product, Hot Kitchen, Bakery--}}
{{--                                    </a>--}}
{{--                                </h3>--}}
{{--                                <div class="course-meta">--}}
{{--                                    <span>Teaching factory dengan nuansa dan fasilitas standar industri yang mendukung pembelajaran fundamental dunia kuliner.</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-6 col-xl-4"--}}
{{--                     data-aos="fade-up"--}}
{{--                     data-aos-duration="1000"--}}
{{--                     data-aos-delay="200">--}}
{{--                    <div class="course-style2">--}}
{{--                        <div class="course-img2">--}}
{{--                            <a href="{{ route('fasilitas') }}">--}}
{{--                                <img class="w-100"--}}
{{--                                    src="/img/course/alphasuite.jpg"--}}
{{--                                    alt="Course Img"/>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="course-content3">--}}
{{--                            <div class="row">--}}
{{--                                <span class="col-auto facility-tag-bg">Alpha Suite</span>--}}
{{--                                <span class="col-auto facility-tag-bg2">Alpha Suite</span>--}}
{{--                                <img src="/img/course/Room.png" class="facility-tag-img ms-auto">--}}
{{--                            </div>--}}
{{--                            <div class="course-content">--}}
{{--                                <h3 class="h5 course-name">--}}
{{--                                    <a href="course-details.html"--}}
{{--                                       class="text-inherit">--}}
{{--                                        Housekeeping, Public Area--}}
{{--                                    </a>--}}
{{--                                </h3>--}}
{{--                                <div class="course-meta">--}}
{{--                                    <span>Ruangan simulasi dengan desain modern dan minimalis yang digunakan sebagai lingkungan praktek untuk menjelajahi konsep dasar operasional kamar.</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>

    @if($homeData->victory_section_status == 1)
        @include('includes.victory')
    @endif
        @include('includes.brand')
@endsection
@push('addon-script')
    <script>
        function slider_carouselInit() {
            $('.owl-carousel.slider_carousel').owlCarousel({
                dots: false,
                rewind: true,
                autoplay: true,
                nav: true,
                navText: ["<img src='/img/icon/left.png'>", "<img src='/img/icon/next.png'>"],
                responsive: {
                    0: {
                        items: 1
                    },
                    992: {
                        items: 2,
                    }
                }
            });
        }

        slider_carouselInit();
    </script>
    <script>
        $(document).ready(function () {
            $("#modalExecutive").modal('show');
        });
    </script>
    <script type="module">
        import { jarallax, jarallaxVideo } from "https://cdn.jsdelivr.net/npm/jarallax@2/+esm";

        jarallaxVideo();

        jarallax(document.querySelectorAll('.jarallax'), {
            speed: 0.2,
            videoSrc: '{{ $homeData->banner_video_url }}'
        });
    </script>
@endpush
