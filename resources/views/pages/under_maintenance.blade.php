@extends('layouts.app')

@section('title')
    Under Maintenance | Rhapsody Hospitality Development Center
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
                    Under Maintenance!
                </h1>
                <p
                    class="breadcumb-text"
                    data-aos="fade-right"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    Sorry, this page is under maintenance
                </p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Under Maintenance</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="vs-error-wrapper">
        <div class="container">
            <div class="row flex-row-reverse text-center text-xl-start">
                <div class="col-xl-6 col-xxl-7 text-xl-end">
                    <div class="error-img" data-aos="fade-up" data-aos-duration="1000">
                        <img
                            src="/img/shape/Computer troubleshooting-amico.svg"
                            alt="error image"
                        />
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-5 align-self-center">
                    <div class="error-content">
                        <h1
                            class="error-title"
                            data-aos="fade-right"
                            data-aos-duration="1000"
                        >
                            oooops!
                        </h1>
                        <h2
                            class="error-title2"
                            data-aos="fade-right"
                            data-aos-duration="1000"
                            data-aos-delay="100"
                        >
                            This Page is Under Maintenance
                        </h2>
                        <p
                            class="error-text"
                            data-aos="fade-right"
                            data-aos-duration="1000"
                            data-aos-delay="200"
                        >
                            Halaman yang kamu ingin akses sedang dalam masa perbaikan, mohon
                            maaf yaaa :(
                        </p>
                        <a
                            href="{{ route('home') }}"
                            class="vs-btn"
                            data-aos="fade-right"
                            data-aos-duration="1000"
                            data-aos-delay="300"
                        ><i class="fas fa-home me-2 pe-1"></i>Back to Home</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
