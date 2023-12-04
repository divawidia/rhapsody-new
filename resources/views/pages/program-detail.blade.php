@extends('layouts.app')

@section('title')
    {{ $program->program->name }} {{ $program->name }} | LPK Rhapsody Hospitality Development Center
@endsection

@section('content')
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper"
        style="background: rgb(2,104,136);background: linear-gradient(119deg, rgba(2,104,136,1) 26%, rgba(189,236,255,1) 100%);">
        <div class="container z-index-common">
            <div class="row d-flex align-items-center space-top pt-lg-5">
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-inner mega-hover course-img" data-aos="fade-up" data-aos-duration="1000">
                            @foreach($program->program_photos as $photo)
                                <div class="carousel-item course-image-carousel active">
                                    <img src="{{ Storage::url($photo->photos_url) }}" class="d-block w-100" alt="{{ $photo->alt }}">
                                </div>
                            @endforeach
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
                </div>
                <div class="col-lg-6 pt-4 pt-md-0">
                    <h3 class="program-subtitle2 mt-2 text-uppercase" data-aos="fade-right" data-aos-duration="1000">
                        {{ $program->program->name }}
                    </h3>
                    <h2 class="course-title" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                        {{ $program->name }}
                    </h2>
                    <div class="widget_price" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                        <div class="px-3 pt-3">
                            <p class="title-section mb-0"><b>Batch</b>{{ $program->batch }}</p>
                            <div class="widget_price_tag">
                                Limited
                            </div>
                            <p class="widget_title m-0 p-0">Rp. {{ number_format($program->price) }}</p>
                            <p class="note-text m-0">@php echo $program->price_desc @endphp</p>
{{--                            <p class="note-text mb-1" style="font-size: 14px">Late Sale: Rp.13,000,000</p>--}}
                        </div>
                        <div class="widget_price_footer text-white p-3">
                            <p class="m-0 p-0">{{ $start_date }} - {{ $end_date }}</p>
                        </div>
                    </div>
{{--                    <div class="style6">--}}
                        <a class="vs-btn style8 py-2 mt-3" href="{{ $program->btn_url }}" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                            <img src="{{ Storage::url($program->btn_icon) }}">
                            {{ $program->btn_text }}
                        </a>
{{--                    </div>--}}
                    <p data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">Ajak temanmu dan raih peluang mendapatkan beasiswa!</p>
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
                        @php echo $program->overview @endphp
                    </div>
                    @include('includes.testi-cards')
                    <div class="pt-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <h3 class="title-section fs-3 mt-4"><i class="fa-solid fa-angle-right"></i> Prospek Karier</h3>
                        <p>
                            Ikuti program ini dan dapatkan balik modal dari gaji pertamamu. Jenjang profesi yang bisa
                            dijalani saat memiliki ilmu dari Rhapsody:
                        </p>
                        <div class="list-style1 vs-list">
                            @foreach($program->program_career_salaries as $position)
                                <p class="fs-6 my-0"><img src="/img/icon/cash.png" alt="cash-icon"> {{ $position->position }} : <FONT COLOR="#CE5423">${{ number_format($position->salary_start) }} - ${{ number_format($position->salary_end) }}/bulan</FONT></p>
                            @endforeach
                        </div>
                        <div class="row mt-5">
                            @foreach($program->program_career_companies as $company)
                                <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
                                    <div class="widget_brand" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                        <div class="px-3 pt-3 ">
                                            <img src="{{ Storage::url($company->company_logo) }}" alt="{{ $company->company_name }}" />
                                        </div>
                                        <div class="widget_brand_footer">
                                            @if($company->status == '1')
                                                <p class="m-0 p-0 text-center text-success">Available Now</p>
                                            @elseif($company->status == '0')
                                                <p class="m-0 p-0 text-center text-danger">Limited</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="mt-4 pt-lg-2" data-aos="fade-up"
                         data-aos-duration="1000" data-aos-delay="100">
                        <h3 class="title-section fs-3 mt-4"><i class="fa-solid fa-angle-right"></i>   Yang Kamu Dapatkan</h3>
                        @php echo $program->benefit_content @endphp
                    </div>
                    <div class="mt-4 pt-lg-2" data-aos="fade-up"
                         data-aos-duration="1000" data-aos-delay="100">
                        <h3 class="title-section fs-3 mt-4"><i class="fa-solid fa-angle-right"></i>   FAQ</h3>
                        <div class="accordion-style3 wow fadeInUp mt-3 pt-lg-2" data-wow-delay="0.2s">
                            <div class="accordion" id="faqVersion1">
                                @foreach($faqs as $faq)
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="heading{{ $faq->id }}">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}" aria-expanded="true" aria-controls="collapse{{ $faq->id }}">
                                                {{ $faq->question }}
                                            </button>
                                        </div>
                                        <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#faqVersion1">
                                            <div class="accordion-body">
                                                @php echo $faq->answer @endphp
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 mt-4 pt-4 pt-lg-0">
                    <aside>
                        <div class="widget" data-aos="fade-up" data-aos-duration="1000">
                            <div class="left-border row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <h5 class="program-subtitle mt-2" data-aos="fade-right" data-aos-duration="1000"
                                    data-aos-delay="300">Program</h5>
                                <h4 class="text-uppercase mb-0" data-aos="fade-right" data-aos-duration="1000"
                                    data-aos-delay="400">PELATIHAN</h4>
                            </div>
                            <div class="course-list">
                                <ul>
                                    @foreach($program_pelatihan as $pelatihan)
                                        <li>
                                            <a href="{{ route('program-detail', $pelatihan->slug) }}">
                                                <div class="category-style1 p-0">
                                                    <div class="icon">
                                                        <img src="{{ Storage::url($pelatihan->program_icon) }}" alt="{{ $pelatihan->name }}">
                                                    </div>
                                                </div>
                                                <p>{{ $pelatihan->program->name }} {{ $pelatihan->name }}</p>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="row mb-5 px-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <a class="widget2" href="https://wa.me/6287761360699" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                <div class="vstack">
                                    <h3>Proses</h3>
                                    <h4>Pendaftaran</h4>
                                </div>
                                <div class="category-style1 align-self-center">
                                    <div class="icon">
                                        <img src="/img/icon/call-center.svg">
                                    </div>
                                </div>
                            </a>
                            <div class="widget-footer" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <img src="/img/icon/ic_baseline-whatsapp.svg" style="width: 30px; margin-bottom: 2px">
                                (+62)877-6136-0699
                            </div>
                        </div>
                        <div class="row d-flex justify-content-end px-3 mb-5 w-100" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" style="width: 86%">
                            <div class="widget-header" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                <img src="/img/icon/Registration.png">
                            </div>
                            <a class="widget2" href="@if($program->program->name == 'Diploma 1') {{ route('registrasi-program-d1') }} @else {{ route('registrasi-program-executive') }} @endif" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <div class="vstack">
                                    <h3>Registrasi</h3>
                                    <h4>Online</h4>
                                </div>
                            </a>
                            <div class="widget-footer2 text-end fw-bold" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                Program pelatihan dikaji berdasarkan kebutuhan dan perkembangan Industri pariwisata terkini.
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
                autoplay: true,
                nav: true,
                navText: ["<img src='/img/icon/left.png'>", "<img src='/img/icon/next.png'>"],
                responsive: {
                    0: {
                        items: 1
                    }
                }
            });
        }

        slider_carouselInit();
    </script>
@endpush

