@extends('layouts.app')

@section('title')
    About Us
@endsection

@section('content')
    <div
        class="breadcumb-wrapper"
        style="background: url('/img/breadcumb/breadcumb-bg.png');
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
            background-position: center center;"
    >
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1
                    class="breadcumb-title"
                    data-aos="fade-right"
                    data-aos-duration="1000"
                >
                    Facilities
                </h1>
                <p
                    class="breadcumb-text"
                    data-aos="fade-right"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    Unlock Your Full Potential and turn your dreams into reality
                </p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Facilities</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
  Contact Area
  ==============================-->
    <section class="space-top space-bottom">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="picture-box7">
                        <div
                            class="picture-1 mega-hover"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-anchor-placement="top-bottom"
                        >
                            <img
                                src="/img/about/sensory-gastro-lab1.jpg"
                                alt="About Img"
                            />
                        </div>
                        <div
                            class="picture-2 mega-hover"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-anchor-placement="top-bottom"
                            data-aos-delay="100"
                        >
                            <img
                                src="/img/about/sensory-gastro-lab2.jpg"
                                alt="About Img"
                            />
                        </div>
                        <div
                            class="picture-3 mega-hover"
                            class="picture-2 mega-hover"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-anchor-placement="top-bottom"
                            data-aos-delay="100"
                        >
                            <img
                                src="/img/about/sensory-gastro-lab3.jpg"
                                alt="About Img"
                            />
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="about-box3">
                        <div class="title-area">
                <span
                    class="sec-subtitle"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >Rhapsody Hospitality Development Center</span
                >
                            <h2
                                class="about-title h1"
                                data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="200"
                            >
                                Sensory Gastro Lab
                            </h2>
                        </div>
                        <div
                            class="about-content"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="300"
                        >
                            <p class="fs-md">
                                Sensory gastro lab merupakan lab restaurant dengan konsep
                                creative fun dinning yang dikem- bangkan untuk mengasah kreat-
                                ifitas mahasiswa yang memiliki passion dalam bidang food and
                                beverage. Mulai dari pengenalan teknik dasar food service
                                hingga belajar berbagai macam teknik mixing drink dan flair
                                teknik. Ma- hasiswa juga diberikan kesempa- tan untuk
                                mengeksplor ide-ide kreatif untuk berinovasi dalam
                                pengembangan produk makanan dan minuman.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="space-bottom">
        <div class="container">
            <div class="row d-flex align-items-center flex-colomn-reverse">
                <div
                    class="col-lg-5 order-2 order-lg-1 wow fadeInUp"
                    data-wow-delay="0.4s"
                >
                    <div class="about-box3">
                        <div class="title-area">
                <span
                    class="sec-subtitle text-lg-end"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >Rhapsody Hospitality Development Center</span
                >
                            <h2
                                class="about-title h1 text-lg-end"
                                data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="200"
                            >
                                Alenia Kitchen
                            </h2>
                        </div>
                        <div class="about-content">
                            <p
                                class="fs-md te text-lg-end"
                                data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="300"
                            >
                                Alenia kitchen adalah food production lab, yang di kembangkan
                                bagi para mahasiswa yang ingin menggali potensi di bidang food
                                production. Di alinia kitchen akan di berikan mahasiswa
                                pemahaman tentang teknik dasar culinary, hingga inovasi
                                berbagai jenis resep kreatif, serta pemahaman khusus tetang
                                food techniques. plating
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="col-lg-7 order-1 order-lg-2 wow fadeInUp"
                    data-wow-delay="0.3s"
                >
                    <div class="picture-box7">
                        <div
                            class="picture-1 mega-hover"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                        >
                            <img
                                src="/img/about/alenia-kitchen1.jpg"
                                alt="About Img"
                            />
                        </div>
                        <div
                            class="picture-2 mega-hover"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="100"
                        >
                            <img
                                src="/img/about/alenia-kitchen2.jpg"
                                alt="About Img"
                            />
                        </div>
                        <div
                            class="picture-3 mega-hover"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="200"
                        >
                            <img
                                src="/img/about/alenia-kitchen3.jpg"
                                alt="About Img"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="space-bottom">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="picture-box7">
                        <div
                            class="picture-1 mega-hover"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-anchor-placement="top-bottom"
                        >
                            <img src="/img/about/alpha-suite1.jpg" alt="About Img" />
                        </div>
                        <div
                            class="picture-2 mega-hover"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-anchor-placement="top-bottom"
                            data-aos-delay="100"
                        >
                            <img src="/img/about/alpha-suite2.jpg" alt="About Img" />
                        </div>
                        <div
                            class="picture-3 mega-hover"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-anchor-placement="top-bottom"
                            data-aos-delay="200"
                        >
                            <img src="/img/about/alpha-suite3.jpg" alt="About Img" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="about-box3">
                        <div class="title-area">
                <span
                    class="sec-subtitle"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >Rhapsody Hospitality Development Center</span
                >
                            <h2
                                class="about-title h1"
                                data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="200"
                            >
                                Alpha Suite
                            </h2>
                        </div>
                        <div
                            class="about-content"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="300"
                        >
                            <p class="fs-md">
                                Alpha suite merupakan mock up room dengan design modern
                                minimalis yang menjadi tempat praktik untuk mahasiswa room
                                division. Mahasiswa akan mempelajari konsep dasar room
                                operation dengan berbagai basic skill yang dibutuhkan di dunia
                                industry saat ini.
                            </p>

                            <p class="fs-md">Fasilitas Alpha Suite:</p>
                            <div class="list-style1 vs-list">
                                <ul>
                                    <li>
                                        <p class="my-0 fs-md">Bed Room</p>
                                    </li>
                                    <li>
                                        <p class="my-0 fs-md">Bath Room</p>
                                    </li>
                                    <li>
                                        <p class="my-0 fs-md">Wardrobe</p>
                                    </li>
                                    <li>
                                        <p class="my-0 fs-md">Luggage rack - Safety deposti box</p>
                                    </li>
                                    <li>
                                        <p class="my-0 fs-md">Private balcony</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
