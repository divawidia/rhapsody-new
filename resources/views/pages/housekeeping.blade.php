@extends('layouts.app')

@section('title')
    D1 Housekeeping | LPK Rhapsody Hospitality Development Center
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
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner mega-hover course-img" data-aos="fade-up" data-aos-duration="1000">
                            <div class="carousel-item course-image-carousel active">
                                <img src="/img/course/hk1.jpg" class="d-block w-100" alt="housekeeping1">
                            </div>
                            <div class="carousel-item course-image-carousel">
                                <img src="/img/course/hk2.jpg" class="d-block w-100" alt="housekeeping2">
                            </div>
                            <div class="carousel-item course-image-carousel">
                                <img src="/img/course/hk3.jpg" class="d-block w-100" alt="housekeeping3">
                            </div>
                            <div class="carousel-item course-image-carousel">
                                <img src="/img/course/hk4.jpg" class="d-block w-100" alt="housekeeping4">
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
                    <h3 class="program-subtitle2 mt-2 text-uppercase" data-aos="fade-right" data-aos-duration="1000">Diploma 1</h3>
                    <h2 class="course-title" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">Housekeeping</h2>
                    <div class="widget_price" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                        <div class="px-3 pt-3">
                            <p class="title-section mb-0"><b>Batch</b> 24 - 25</p>
                            <div class="widget_price_tag">
                                Limited
                            </div>
                            <p class="widget_title m-0 p-0">Rp.11,600,000</p>
                            <p class="note-text m-0">atau gratis pengurusan paspor</p>
                            <p class="note-text mb-1" style="font-size: 14px">Late Sale: Rp.13,000,000</p>
                        </div>
                        <div class="widget_price_footer text-white p-3">
                            <p class="m-0 p-0">30 Nov 2023 - 31 Mei 2024</p>
                        </div>
                    </div>
{{--                    <div class="style6">--}}
                        <a class="vs-btn style8 py-2 mt-3" href="{{ route('registrasi-program-d1') }}" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                            <img src="/img/icon/flight-white.svg">
                            Daftar Sekarang
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
                        <p>
                            Program Diploma I Housekeeping di Rhapsody dirancang untuk membekali para siswa dengan keterampilan dan pengetahuan yang mendalam dalam bidang kebersihan dan tata kelola kamar hotel. Dalam kurun waktu 1 bulan teori, 3 bulan praktek, dan 6 bulan on the job training, siswa akan menjelajahi aspek-aspek kunci dari pekerjaan housekeeping.
                        </p>
                        <p>
                            Pengenalan alat kebersihan, tata letak kamar, tipe linen, serta amenities tamu menjadi fokus utama. Siswa akan mempelajari segala cairan pembersih dan cara-cara efektif membersihkan kamar, termasuk proses menyapu, mengepel, mengelap permukaan, vacuum cleaning, dan detailing kamar mandi. Mereka akan dilatih untuk menciptakan lingkungan yang bersih dan nyaman bagi tamu hotel.
                        </p>
                        <p>
                            Selama simulasi interaksi dengan tamu, siswa akan mengasah keterampilan interpersonal dan pelayanan pelanggan mereka. Kerjasama erat dengan departemen Front Office (FO) dan laundry juga akan menjadi bagian integral dari program ini. Siswa akan memahami pentingnya sinkronisasi tugas antar departemen untuk memberikan pengalaman yang mulus bagi tamu.
                        </p>
                        <p>
                            Sebagai tambahan, program ini menyertakan pelajaran technical interview untuk membantu siswa mempersiapkan diri dalam menghadapi berbagai jenjang karir di industri hospitality. Setelah menyelesaikan program, mereka akan menerima sertifikat kompetensi dan ijazah, membuka pintu menuju kesuksesan dalam dunia housekeeping dan perhotelan.
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
                            <p class="fs-6 my-0"><img src="/img/icon/cash.png" alt="cash-icon"> Public Area Attendant : <FONT COLOR="#CE5423">$600 - $800/bulan</FONT></p>
                            <p class="fs-6 my-0"><img src="/img/icon/cash.png" alt="cash-icon"> Laundry Man / Linen Keeper : <FONT COLOR="#CE5423">$700 - $900/bulan</FONT></p>
                            <p class="fs-6 my-0"><img src="/img/icon/cash.png" alt="cash-icon"> Assistant Laundry Supervisor : <FONT COLOR="#CE5423">$900 - $1200/bulan</FONT></p>
                            <p class="fs-6 my-0"><img src="/img/icon/cash.png" alt="cash-icon"> Laundry Supervisor : <FONT COLOR="#CE5423">$1000 - $1300/bulan</FONT></p>
                            <p class="fs-6 my-0"><img src="/img/icon/cash.png" alt="cash-icon"> Room Service Attendatn / Bell Boy : <FONT COLOR="#CE5423">$700 - $1000/bulan</FONT></p>
                            <p class="fs-6 my-0"><img src="/img/icon/cash.png" alt="cash-icon"> Assistant Cabin Steward / Stewardess  : <FONT COLOR="#CE5423">$1200 - $1500/bulan</FONT></p>
                            <p class="fs-6 my-0"><img src="/img/icon/cash.png" alt="cash-icon"> Cabin Steward / Stewardess / Cabin Attendant : <FONT COLOR="#CE5423">$1800 - $2200/bulan</FONT></p>
                            <p class="fs-6 my-0"><img src="/img/icon/cash.png" alt="cash-icon"> Head Room Steward / Stewardess : <FONT COLOR="#CE5423">$2200 - $2800/bulan</FONT></p>
                            <p class="fs-6 my-0"><img src="/img/icon/cash.png" alt="cash-icon"> Assistant Chief Housekeeper  : <FONT COLOR="#CE5423">$2500 - $3400/bulan</FONT></p>
                            <p class="fs-6 my-0"><img src="/img/icon/cash.png" alt="cash-icon"> Chief Housekeeper : <FONT COLOR="#CE5423">$3000 - $3800/bulan</FONT></p>
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
                                <li>Seragam teori & praktek.</li>
                                <li>Modul pembelajaran.</li>
                                <li>Pelatihan bahasa inggris industri.</li>
                                <li>Pelatihan Technical Interview.</li>
                                <li>Untuk peserta dari luar Bali mendapatkan mesh atau tempat tinggal.</li>
                                <li>Membership <FONT COLOR="#CE5423">Victory International Placement Center.</FONT> (selama promo)</li>
                            </ul>
                        </div>
                        <p class="note-text m-0 fst-italic">*Biaya pendidikan bisa dicicil 3x</p>
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
