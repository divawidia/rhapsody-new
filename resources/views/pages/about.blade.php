@extends('layouts.app')

@section('title')
    Tentang Kami
@endsection

@section('content')
<!--==============================
    Breadcumb
============================== -->
    <div
      class="breadcumb-wrapper d-flex align-items-center"
      style="background: url('{{ Storage::url($aboutData->header_bg ?? '') }}');
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
            background-position: center center;"
    >
      <div class="container z-index-common">
        <div class="breadcumb-content text-center">
            <h1 class="breadcumb-title" data-aos="fade-up" data-aos-duration="1000">@php echo $aboutData->header_title @endphp</h1>
        </div>
      </div>
    </div>

    @if($aboutData->section2_status == 1)
        <section class="py-5">
            <div class="container">
                <div class="row px-4">
                    <div class="col-lg-7 col-xl-8 mb-30 mb-xl-0">
                        <div class="title-area mb-3 mb-xl-5">
                            <h2 class="sec-title text-uppercase" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">@php echo $aboutData->section2_title @endphp</h2>
                            <span class="sec-subtitle fw-light" data-aos="fade-right" data-aos-duration="1000">
                                @php echo $aboutData->section2_subtitle @endphp
                            </span>
                        </div>
                        <div class="about-text fs-md mt-n1 w-75" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200">
                            @php echo $aboutData->section2_body @endphp
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4 p-0 order-1 order-lg-2 ms-auto py-5 py-lg-0">
                        <img data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150" width="1024" src="{{ Storage::url($aboutData->section2_img ?? '') }}">
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($aboutData->section3_status == 1)
        <section class="py-5" style="background-color: #FAF5F0;">
            <div class="container">
                <div class="title-area text-center">
                    <h2 class="sec-title h1 text-uppercase" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">{{ $aboutData->section3_title }}</h2>
                    <span class="sec-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">{{ $aboutData->section3_subtitle }}</span>
                </div>
                <div class="mt-5 row">
                    <div class="col-xl-7 px-4" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200">
                        <div class="img-box3">
                            <div class="img-1 mega-hover">
                                <img
                                    class="w-100"
                                    src="{{ Storage::url($aboutData->section3_img ?? '') }}"
                                    alt="About Img"
                                />
                            </div>
                            <div class="shape-dotted jump"></div>
                        </div>
                    </div>
                    <div class="p-5 col-xl-5 col-xl-4 mb-30 mb-xl-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <p class="fs-md mt-n1">
                            @php echo $aboutData->section3_body @endphp
                        </p>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($aboutData->visi_misi_section_status == 1)
        <section class="space-top space-bottom">
            <div class="container px-3">
                <div class="row">
                    <div class="col-12 col-lg" data-aos="fade-up" data-aos-duration="1000">
                        <h5 class="left-border h1 px-2 pt-2">Visi</h5>
                        @php echo $aboutData->visi @endphp
                    </div>
                    <div class="col-12 col-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <h5 class="left-border h1 px-2 pt-2">Misi</h5>
                        <div class="list-style1 vs-list">
                            @php echo $aboutData->misi @endphp
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($aboutData->section4_status == 1)
        <section class="py-5 text-center" style="background-color: #FAF5F0;">
            <img src="{{ Storage::url($aboutData->section4_img ?? '') }}"  data-aos="fade-up" data-aos-duration="1000" alt="SDM Indonesia">
            <div class="container">
                <div class="title-area text-center">
                    <div class="fs-md mt-2 mt-lg-n5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        @php echo $aboutData->section4_body @endphp
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($aboutData->whyrhapsody_section_status)
        <section class="py-5">
            <div class="container">
                <div class="title-area text-center py-5">
                    <h2 class="sec-title h1 text-uppercase" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="100">{{ $aboutData->whyrhapsody_section_title }}</h2>
                    <span class="sec-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="200">{{ $aboutData->whyrhapsody_section_subtitle }}</span>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-xl-4" data-aos="fade-up" data-aos-duration="1000">
                        <div class="media-style9">
                            <div class="media-icon"><img src="{{ Storage::url($aboutData->whyrhapsody_section_card1_icon ?? '') }}" alt="icon"></div>
                            <h5 class="media-title">{{ $aboutData->whyrhapsody_section_card1_title }}</h5>
                            @php echo $aboutData->whyrhapsody_section_card1_body @endphp
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="media-style9">
                            <div class="media-icon"><img src="{{ Storage::url($aboutData->whyrhapsody_section_card2_icon ?? '') }}" alt="icon"></div>
                            <h5 class="media-title">{{ $aboutData->whyrhapsody_section_card2_title }}</h5>
                            @php echo $aboutData->whyrhapsody_section_card2_body @endphp
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="media-style9">
                            <div class="media-icon"><img src="{{ Storage::url($aboutData->whyrhapsody_section_card3_icon ?? '') }}" alt="icon"></div>
                            <h5 class="media-title">{{ $aboutData->whyrhapsody_section_card3_title }}</h5>
                            @php echo $aboutData->whyrhapsody_section_card3_body @endphp
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @include('includes.company-profile')
    @include('includes.victory')
    @include('includes.brand')
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
