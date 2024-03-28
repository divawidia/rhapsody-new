@extends('layouts.app')

@section('title')
    Executive Galley & Cook | LPK Rhapsody Hospitality Development Center
@endsection

@section('content')
    <!--==============================
    Breadcumb
============================== -->
    <div
        class="breadcumb-wrapper"
        style="background: url('/img/bg/top-bg2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
            background-position: center center;
            height: fit-content;"
    >
        <div class="container z-index-common">
            <div class="row d-flex align-items-center space-top pt-lg-5">
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner mega-hover course-img" data-aos="fade-up" data-aos-duration="1000">
                            <div class="carousel-item course-image-carousel active">
                                <img src="/img/course/cook3.jpg" class="d-block w-100" alt="galley&cook1">
                            </div>
                            <div class="carousel-item course-image-carousel">
                                <img src="/img/course/cook2.jpg" class="d-block w-100" alt="galley&cook2">
                            </div>
                            <div class="carousel-item course-image-carousel">
                                <img src="/img/course/cook1.jpg" class="d-block w-100" alt="galley&cook3">
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
                </div>
                <div class="col-lg-6 pt-4 pt-md-0">
                    <h3 class="program-subtitle2 mt-2 text-uppercase" data-aos="fade-right" data-aos-duration="1000">Executive Hybrid</h3>
                    <h2 class="course-title" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">Galley & Cook</h2>
                    <div class="widget_price" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                        <div class="px-3 pt-3">
                            <p class="title-section mb-0"><b>Batch</b> 24 - 25</p>
                            <div class="widget_price_tag">
                                Limited
                            </div>
                            <p class="widget_title m-0 p-0">Rp.8.000.000</p>
                        </div>
                        <div class="widget_price_footer text-white p-3">
                            <p class="m-0 p-0">30 Nov 2023 - 31 Mei 2024</p>
                        </div>
                    </div>
                    <a class="vs-btn style8 py-2 mt-3" href="{{ route('registrasi-program-executive') }}" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                        <img src="/img/icon/flight-white.svg">
                        Daftar Sekarang
                    </a>
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
                        <p>
                            Galley & Cook adalah program pelatihan Executive yang merupakan
                            trobosan terbaru dari LPK Rhapsody yang dirancang untuk
                            mempersiapkan peserta dengan keterampilan dan pengetahuan yang
                            diperlukan untuk sukses dalam keterampilan memasak profesional
                            serta pengetahuan mendalam tentang operasional galley kapal pesiar
                            atau restoran. peserta akan mendalami berbagai aspek teoritis
                            dalam seni memasak, termasuk teknik memasak, penggunaan
                            bahan-bahan, pengolahan makanan, serta kebersihan dan keselamatan
                            makanan. Mereka juga akan mempelajari tata cara pengelolaan galley
                            atau dapur restoran yang efisien. Dengan pelatihan
                            yang berlangsung selama 3 bulan, yang mencakup 2 bulan pertama untuk teori,
                            yang dapat diikuti baik secara online, lalu melanjutkan ke 1 bulan terakhir, yang akan
                            berfokus pada praktek secara offline.
                        </p>
                        <p>
                            Kami akan memberikan banyak keuntungan untuk kamu yang mempunyai
                            tekad kuat untuk ingin bekerja di luar negeri, tidak peduli dari
                            latar belakang apa.
                        </p>
                        <div class="list-style1 vs-list" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                            <ul>
                                <li>
                                    Sistem pembelajaran yang fleksibel atau dapat diikuti dimana
                                    saja
                                </li>
                                <li>
                                    Durasi pembelajaran yang singkat untuk langsung terjun ke
                                    dunia kerja
                                </li>
                                <li>Sertifikasi profesional untuk melamar kerja</li>
                                <li>Pembayaran tidak harus full diawal</li>
                                <li>
                                    Pelatihan Technical Interview dengan Mitra Perhotelan dan
                                    Kapal Pesiar
                                </li>
                                <li>
                                    Dibimbing dan dilatih oleh instruktur berpengalaman di
                                    industri
                                </li>
                                <li>
                                    Mendapat peluang untuk langsung bekerja di luar negeri atau
                                    kapal pesiar
                                </li>
                            </ul>
                        </div>
                    </div>
                    @include('includes.testi-cards')
                    <div class="pt-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <h3 class="title-section fs-3 mt-4"><i class="fa-solid fa-angle-right"></i> Prospek Karier</h3>
                        <p>
                            Ikuti program ini dan dapatkan balik modal dari gaji pertamamu. Jenjang profesi yang bisa
                            dijalani saat memiliki ilmu dari Rhapsody:
                        </p>
                        <div class="list-style1 vs-list">
                            <p class="fs-6 my-0"><img src="/img/icon/cash.png" alt="cash-icon"> Galley Utility : <FONT COLOR="#CE5423">$500 - $700/bulan</FONT></p>
                            <p class="fs-6 my-0"><img src="/img/icon/cash.png" alt="cash-icon"> Assistant Cook : <FONT COLOR="#CE5423">$900 - $1200/bulan</FONT></p>
                            <p class="fs-6 my-0"><img src="/img/icon/cash.png" alt="cash-icon"> Commis 3 (Third Cook) : <FONT COLOR="#CE5423">$1200 - $1800/bulan</FONT></p>
                            <p class="fs-6 my-0"><img src="/img/icon/cash.png" alt="cash-icon"> Commis 2 (Second Cook) : <FONT COLOR="#CE5423">$1600 - $2200/bulan</FONT></p>
                            <p class="fs-6 my-0"><img src="/img/icon/cash.png" alt="cash-icon"> Commis 1 (First Cook) : <FONT COLOR="#CE5423">$1800 - $2400/bulan</FONT></p>
                            <p class="fs-6 my-0"><img src="/img/icon/cash.png" alt="cash-icon"> Demi Chef de Partia : <FONT COLOR="#CE5423">$2700 - $3700/bulan</FONT></p>
                            <p class="fs-6 my-0"><img src="/img/icon/cash.png" alt="cash-icon"> Chef de Partia : <FONT COLOR="#CE5423">$3200 - $4600/bulan</FONT></p>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
                                <div class="widget_brand" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                    <div class="px-3 pt-3 ">
                                        <img src="/img/brand/carnival-logo.png" alt="carnival-cruise-line" />
                                    </div>
                                    <div class="widget_brand_footer">
                                        <p class="m-0 p-0 text-center text-success">Available Now</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom" data-aos-delay="200">
                                <div class="widget_brand" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                    <div class="px-3 pt-3">
                                        <img src="/img/brand/royal-caribean.png" alt="royal-caribean-cruise-line" />
                                    </div>
                                    <div class="widget_brand_footer">
                                        <p class="m-0 p-0 text-center text-danger">Limited</p>
                                    </div>
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
                                <li>Seragam praktek.</li>
                                <li>Modul pembelajaran.</li>
                                <li>Pelatihan bahasa inggris industri.</li>
                                <li>Pelatihan Technical Interview.</li>
                                <li>Untuk peserta dari luar Bali mendapatkan mess atau tempat tinggal.</li>
                                <li>Membership <FONT COLOR="#CE5423">Victory International Placement Center.</FONT> (selama promo)</li>
                            </ul>
                        </div>
                        <p class="note-text m-0 fst-italic">*Bagi peserta dari luar Bali dikenakan biaya yang berbeda</p>
                    </div>
                    <div class="mt-4 pt-lg-2" data-aos="fade-up"
                         data-aos-duration="1000" data-aos-delay="100">
                        <h3 class="title-section fs-3 mt-4"><i class="fa-solid fa-angle-right"></i>   FAQ</h3>
                        <div class="accordion-style3 wow fadeInUp mt-3 pt-lg-2" data-wow-delay="0.2s">
                            <div class="accordion" id="faqVersion1">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Nanti dapetnya ijazah atau sertifikat?</button>
                                    </div>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqVersion1">
                                        <div class="accordion-body">
                                            <p>Setelah kalian menyelesaikan program D1, kalian akan mendapatkan Ijazah dan Sertifikat Kompetensi sesuai dengan bidang yang dipilih.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Rhapsody punya program beasiswa?</button>
                                    </div>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqVersion1">
                                        <div class="accordion-body">
                                            <p>Setiap 20 mahasiswa dalam program yang sama akan ada 1 mahasiswa yang didanai penuh perkuliahannya, tentunya dengan seleksi intensif dari pihak kampus.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingThree">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Bisa magang ke luar negeri ga?</button>
                                    </div>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqVersion1">
                                        <div class="accordion-body">
                                            <p>Bisa banget! Sambil kamu nunggu umur, kamu bisa magang dan digaji loh. Beberapa negara di Eropa juga Taiwan jadi pilihannya untuk saat ini, tidak menutup kemungkinan akan tersedia opsi negara lain nantinya.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="support-link">Have more questions? Check our <a href="contact.html">Help center</a> or contact our <a href="contact.html">support team</a></span>
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
                                    data-aos-delay="400">AKADEMIK</h4>
                            </div>
                            <div class="course-list">
                                <ul>
                                    <li>
                                        <a href="{{ route('f&b-product') }}">
                                            <img class="icon" src="/img/icon/Cook - Navy.svg">
                                            <p>D1 Food & Baverage Product</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('f&b-service') }}">
                                            <img class="icon" src="/img/icon/Service - Navy.svg">
                                            <p>D1 Food & Baverage Service</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('housekeeping') }}">
                                            <img class="icon" src="/img/icon/HK - Navy.svg">
                                            <p>D1 Housekeeping</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('front-office') }}">
                                            <img class="icon" src="/img/icon/FO - Navy.svg">
                                            <p>D1 Front Office</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('laundry&housekeeping') }}">
                                            <img class="icon" src="/img/icon/HK - Navy.svg">
                                            <p>Executive Laundry & HK</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('galley&cook') }}">
                                            <img class="icon" src="/img/icon/Cook - Navy.svg">
                                            <p>Executive Galley & Cook</p>
                                        </a>
                                    </li>
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
                                <a class="widget2" href="{{ route('registrasi-program-d1') }}" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                    <div class="vstack">
                                        <h3>Registrasi</h3>
                                        <h4>Online</h4>
                                    </div>
                                </a>
                                <div class="widget-footer2 text-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                    Program akademik kami yang dikaji oleh para ahli dengan standar Internasional
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
                    1400: {
                        items: 2,
                    }
                }
            });
        }
        slider_carouselInit();
    </script>
@endpush
