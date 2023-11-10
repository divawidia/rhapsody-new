@extends('layouts.app')

@section('title')
    House Keeping | Rhapsody Hospitality Development Center
@endsection

@section('content')
    <div
        class="breadcumb-wrapper"
        style="background: url('/img/breadcumb/regis-complete-bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            height: max-content;
            display: block;
            margin-left: auto;
            margin-right: auto;"
    >
        <div class="container z-index-common space-bottom">
            <div class="text-center breadcumb-content">
                <img src="/img/icon/check.svg" width="250px" alt="check" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="breadcumb-title" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">Pendaftaran Berhasil</h1>
                <p class="breadcumb-text" style="font-size: 18px" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">Selamat, kamu sudah menyelesaikan proses pendaftaran online. Tim Rhapsody Hospitality Development Center akan segera menghubungi kamu melalui email/whatsapp maksimal 3 x 24 jam.</p>
                <div class="col-12 text-center mt-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">
                    <a href="{{ route('home') }}" class="vs-btn"><i class="fa-solid fa-house" style="color: #ffffff; margin-right: 10px; margin-bottom: 5px"></i>Kembali Ke Beranda</a>
                </div>
            </div>
        </div>
    </div>
@endsection
