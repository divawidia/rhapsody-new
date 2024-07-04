@extends('layouts.app')

@section('title')
    Kontak Kami | LPK Rhapsody Hospitality Development Center
@endsection

@section('content')
    <div class="breadcumb-wrapper d-flex align-items-center"
        style="background: url('{{ Storage::url($contactData->header_bg ?? '') }}');
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
            background-position: center center;">
        <div class="container z-index-common">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title" data-aos="fade-up" data-aos-duration="1000">@php echo $contactData->header_title @endphp</h1>
            </div>
        </div>
    </div>

    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-80">
                <div class="col-lg-6 col-xl-6 mb-30 mb-lg-0">
                    <h2 class="h1 mt-n2 text-uppercase"
                        data-aos="fade-right"
                        data-aos-duration="1000">
                        {{ $contactData->header2_title }}
                    </h2>
                    <h3 class="left-border h5"
                        data-aos="fade-right"
                        data-aos-duration="1000">
                        {{ $contactData->header2_subtitle }}
                    </h3>
                    <div class="" data-aos="fade-right" data-aos-duration="1000">
                        <p class="contact-info">
                            <i class="fas fa-clock"></i>
                            {{ $contactData->jam_kerja }}
                        </p>
                        <p class="contact-info">
                            <i class="fas fa-map-marker-alt"></i>
                            {{ $contactData->alamat }}
                        </p>
                        <p class="contact-info">
                            <i class="fas fa-phone-alt"></i>
                            <a class="text-inherit" href="https://wa.me/{{ $contactData->no_telp }}">
                                +{{ $contactData->no_telp }}
                            </a>
                        </p>
                        <p class="contact-info">
                            <i class="fas fa-envelope"></i>
                            <a class="text-inherit" href="mailto:{{ $contactData->email }}">
                                {{ $contactData->email }}
                            </a>
                        </p>
                        <div class="mega-hover rounded-20 mt-4 mt-lg-5 mb-4"></div>

                        <iframe
                            src="{{ $contactData->google_maps }}"
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
                        <h3 class="form-title text-uppercase">Ada pertanyaan?</h3>
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
