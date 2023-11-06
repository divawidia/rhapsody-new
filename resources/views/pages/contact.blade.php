@extends('layouts.app')

@section('title')
    Kontak Kami | Rhapsody Hospitality Development Center
@endsection

@section('content')
    <div
        class="breadcumb-wrapper"
        style="background: url('/img/breadcumb/breadcumb-bg.png');
            background-repeat: no-repeat;
            background-size: cover;"
    >
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1
                    class="breadcumb-title"
                    data-aos="fade-right"
                    data-aos-duration="1000"
                >
                    Kontak Kami
                </h1>
                <p
                    class="breadcumb-text"
                    data-aos="fade-right"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    Rhapsody Hospitality Development Center
                </p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Kontak Kami</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-80">
                <div class="col-lg-6 col-xl-6 mb-30 mb-lg-0">
                    <h2
                        class="h1 mt-n2 text-uppercase"
                        data-aos="fade-right"
                        data-aos-duration="1000"
                    >
                        Get in Touch to Learn Hospitality
                    </h2>
                    <p
                        class="fs-md mb-4 pb-2"
                        data-aos="fade-right"
                        data-aos-duration="1000"
                        data-aos-delay="100"
                    >
                        become an academic partner, or discover more about our work.
                    </p>
                    <h3
                        class="border-title2 h5"
                        data-aos="fade-right"
                        data-aos-duration="1000"
                    >
                        OUR OFFICE
                    </h3>
                    <div class="" data-aos="fade-right" data-aos-duration="1000">
                        <p class="contact-info">
                            <i class="fas fa-clock"></i>
                            Office hours are 8am – 5pm<br />
                            Monday-Friday
                        </p>
                        <p class="contact-info">
                            <i class="fas fa-map-marker-alt"></i>
                            Jalan Selat No. 18 B, Apuan, Singapadu, Gianyar, Bali -
                            Indonesia
                        </p>
                        <p class="contact-info">
                            <i class="fas fa-phone-alt"></i>
                            <a class="text-inherit" href="https://wa.me/6287761360697"
                            >+62877-6136-0697</a
                            >
                        </p>
                        <p class="contact-info">
                            <i class="fas fa-envelope"></i>
                            <a class="text-inherit" href="mailto:info@rhapsody.ac.id"
                            >info@rhapsody.ac.id</a
                            >
                        </p>
                        <div class="mega-hover rounded-20 mt-4 mt-lg-5 mb-4"></div>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.007058709763!2d115.2648378102764!3d-8.59531848723641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f85323bf391%3A0x98d136fa3e9b5d6c!2sLPK%20Rhapsody%20Hospitality%20Development%20Centee!5e0!3m2!1sen!2sid!4v1695534131281!5m2!1sen!2sid"
                            width="600"
                            height="300"
                            style="border-radius: 20px"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title=""
                        ></iframe>
                    </div>
                </div>
                <div
                    class="col-lg-6 col-xl-6"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    <form action="mail.php" class="form-style5 ajax-contact">
                        <div class="vs-circle"></div>
                        <h3 class="form-title text-uppercase">Any Question?</h3>
                        <p class="form-text">
                            Jika anda punya pertanyaan silahkan hubungi kami melalui
                            telepon, email atau dengan mengisi kontak form dibawah ini.
                        </p>
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Nama" />
                        </div>
                        <div class="form-group">
                            <input
                                type="text"
                                name="email"
                                id="email"
                                placeholder="Email"
                            />
                        </div>
                        <div class="form-group">
                            <input
                                type="text"
                                name="number"
                                id="number"
                                placeholder="No Telepon/Whatsapp"
                            />
                        </div>
                        <div class="form-group">
                <textarea
                    name="message"
                    id="message"
                    placeholder="Tulis Pesan Anda"
                ></textarea>
                        </div>
                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="flexCheckDefault"
                            />
                            <label class="form-check-label" for="flexCheckDefault">
                                Subscribe to our newsletter
                            </label>
                        </div>
                        <button type="submit" class="vs-btn">SEND NOW</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
