@extends('layouts.app')

@section('title')
    Food & Beverages Product | Rhapsody Hospitality Development Center
@endsection

@section('content')
<!--==============================
    Breadcumb
============================== -->
    <div
      class="breadcumb-wrapper"
      style="background: url('/img/breadcumb/breadcumb-bg.png');
            background-repeat: no-repeat;
            background-size: cover;"
    >
      <div class="container z-index-common">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title" data-aos="fade-right" data-aos-duration="1000">Food & Beverages Product</h1>
          <p class="breadcumb-text" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
            Diploma 1
          </p>
          <div class="breadcumb-menu-wrap">
            <ul class="breadcumb-menu">
              <li><a href="{{ route('home') }}">HOME</a></li>
              <li>Food & Beverages Product</li>
            </ul>
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
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner mega-hover course-img" data-aos="fade-up"
                         data-aos-duration="1000">
                        <div class="carousel-item active">
                            <img src="/img/course/cook1.jpg" class="d-block w-100" alt="front-office1">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/course/cook2.jpg" class="d-block w-100" alt="front-office2">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/course/cook3.jpg" class="d-block w-100" alt="front-office2">
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
                <h2 class="course-title" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-delay="100">Food & Beverages Product</h2>
                <div class="row course-meta pb-3 pt-4" data-aos="fade-up"
                     data-aos-duration="1000" data-aos-delay="200">
                    <div class="col-auto" data-aos="fade-up"
                         data-aos-duration="1000" data-aos-delay="250">
                        <div class="course-price">
                            <span class="currency">Rp.13.000.000</span>
                        </div>
                        <p class="fs-6 mt-2">Biaya pendidikan sudah termasuk:</p>
                        <div class="fs-6 mt-n3">
                            <ul>
                                <li>Seragam teori & praktek</li>
                                <li>Buku perkuliahan</li>
                                <li>Kursus bahasa inggris</li>
                                <li>Register membership victory cruise agency</li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="col-auto d-flex justify-content-end align-items-start"
                        data-aos="fade-up"
                        data-aos-duration="1000" data-aos-delay="250"
                    >
                        <a class="vs-btn" href="https://docs.google.com/forms/d/e/1FAIpQLSdQfZLct5IEuVqStUxDvdFp1slLaXTdC7ApndBGTywTNcgMVQ/viewform">Daftar Sekarang</a>
                    </div>
                </div>
                <div class="" data-aos="fade-up"
                     data-aos-duration="1000" data-aos-delay="100">
                    <h5 class="border-title2 mt-4">Overview</h5>
                    <p>
                        Program Food & Beverage Product Menjadi salah satu program unggulan, untuk dapat berkarir di bidang pengolahan makanan
                        yang menjadi
                        sarapan tinggi untuk industri pariwisata,
                        kami berfokus pada kualitas skill dalam memasak serta profesional kerja dalam
                        bidang
                        makanan
                        standar yang tinggi.
                    </p>
                    <p>
                        Kembangkan bakat Anda, penuhi rasa ingin tahu Anda, dan bangun fondasi yang kuat untuk sukses di salah satu program sertifikasi kuliner terbaik dunia.
                        Kurikulum komprehensif kami memadukan pendidikan seni kuliner terbaik dengan teori bisnis praktis. Instruktur kelas dunia kami, yang pernah bekerja di industri pelayaran dan juga restoran berbintang atau memasak untuk keluarga kerajaan, memberikan keahlian, inspirasi, dan dukungan sepanjang perjalanan kuliner Anda. Kelas master langsung dengan ikon industri memberi Anda pengalaman bekerja berdampingan dengan legenda dunia kuliner – mendapatkan pengetahuan mendalam yang berharga dalam prosesnya.
                    </p>
                </div>
                <div class="" data-aos="fade-up"
                     data-aos-duration="1000" data-aos-delay="200">
                    <h5 class="mt-4 border-title2">Special Feature</h5>

                    <div class="list-style1 vs-list">
                        <ul>
                            <li>
                                <p class="fs-6 fw-bold my-0">Self Discover Program</p>
                                <p>
                                    Program inovasi yang bertujuan untuk membantu mahasiswa di
                                    dalam merancang dream plan
                                </p>
                            </li>
                            <li>
                                <p class="fs-6 fw-bold my-0">Empower Workshop</p>
                                <p>
                                    Program workshop yang melibatkan para industy expert untuk berbagi pengalaman sekaligus memberi
                                </p>
                            </li>
                            <li>
                                <p class="fs-6 fw-bold my-0">Free Agency Membership</p>
                                <p>
                                    Free membership of Victory cruise agency
                                </p>
                            </li>
                            <li>
                                <p class="fs-6 fw-bold my-0">Tempat Praktek & Lab</p>
                                <p>
                                    Untuk mendukung program, kami menyediakan tempat praktek ataupun lab yang sesuai dengan
                                    standar industri pariwisata.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-4 pt-lg-2" data-aos="fade-up"
                     data-aos-duration="1000" data-aos-delay="100">
                    <h5 class="border-title2 ">Program Description</h5>
                    <div class="list-style1 vs-list">
                        <ul>
                            <li>
                                Durasi pendidikan teori selama 1 bulan dan praktek selama 3 bulan
                            </li>
                            <li>
                                Metode perkuliahan blended learning
                            </li>
                            <li>
                                On the job training di industri perhotelan selama 6 bulan
                            </li>
                            <li>
                                Pengurusan keberangkatan ke luar negeri selama 2 bulan
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="" data-aos="fade-up"
                     data-aos-duration="1000" data-aos-delay="100">
                    <h5 class="border-title2">Ayo Daftarkan Dirimu Sekarang!</h5>
                    <p>
                        Daftarkan dirimu sekarang dan raih impian untuk menggapai kesuksesan di industri perhotelan dan kapal pesiar
                    </p>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdQfZLct5IEuVqStUxDvdFp1slLaXTdC7ApndBGTywTNcgMVQ/viewform" class="vs-btn">Daftar Sekarang</a>
                </div>
            </div>
            <div class="col-lg-4 pt-4 pt-lg-0">
                <aside>
                    <div class="widget" data-aos="fade-up" data-aos-duration="1000">
                        <h3 class="widget_title">Diploma 1</h3>
                        <div class="course-list">
                            <ul>
                                <li>
                                    <a href="{{ route('f&b-service') }}"
                                    ><i class="fal fa-book"></i>Food & Baverage Service</a
                                    >
                                </li>
                                <li>
                                    <a href="{{ route('housekeeping') }}"
                                    ><i class="fal fa-book"></i>Housekeeping</a
                                    >
                                </li>
                                <li>
                                    <a href="{{ route('front-office') }}"
                                    ><i class="fal fa-book"></i>Front Office</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget" data-aos="fade-up" data-aos-duration="1000">
                        <h3 class="widget_title">Executive Class Hybrid</h3>
                        <div class="course-list">
                            <ul>
                                <li>
                                    <a href="{{ route('laundry&housekeeping') }}"
                                    ><i class="fal fa-book"></i>Laundry & Housekeeping</a
                                    >
                                </li>
                                <li>
                                    <a href="{{ route('galley&cook') }}"
                                    ><i class="fal fa-book"></i>Galley & Cook</a
                                    >
                                </li>
                                <li>
                                    <a href="{{ route('bar&service') }}"
                                    ><i class="fal fa-book"></i>Bar & Service</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up"
                         data-aos-duration="1000" data-aos-delay="100">
                        <div class="col-md-7 col-lg-12">
                            <div
                                class="img-box5 mega-hover wow fadeInUp"
                                data-wow-delay="0.3s"
                            >
                                <div class="img-1">
                                    <img
                                        class="w-100"
                                        src="/img/about/about-2-4.jpg"
                                        alt="About Img"
                                    />
                                </div>
                                <div class="box-content">
                                    <h3 class="img-title ">Registrasi Online</h3>
                                    <p class="img-text">
                                        Academic programs with top quality courses made by experts
                                    </p>
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdQfZLct5IEuVqStUxDvdFp1slLaXTdC7ApndBGTywTNcgMVQ/viewform" class="vs-btn">REGISTER TODAY</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <div class="media-style5 wow fadeInUp" data-wow-delay="0.4s">
                                <h5 class="media-title">Proses Pendaftaran</h5>
                                <a class="phone" href="https://wa.me/6287761360697"
                                ><i class="fal fa-phone-alt"></i>+62877-6136-0697</a
                                >
                                <a class="mail" href="mailto:info@rhapsodyhospitality.com"
                                ><i class="fal fa-envelope"></i>info@rhapsodyhospitality.com</a
                                >
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection
