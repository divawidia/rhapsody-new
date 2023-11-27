<!--==============================
Header Area
==============================-->
<header class="vs-header header-layout2">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-between align-items-center gx-50">
                <div class="col d-none d-xl-block">
                    <div class="header-links style2">
                        <ul>
                            <li>
                                <i class="fa-brands fa-whatsapp" style="color: #ffffff"></i
                                >Telepon/Whatsapp :
                                <a href="https://wa.me/6287761360699">+62877-6136-0699</a>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>Email:
                                <a href="mailto:info@rhapsodyhospitality.com"
                                >info@rhapsodyhospitality.com</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-social style2">
                        <a href="https://www.facebook.com/rhapsody.developmentcenter"
                        ><i class="fab fa-facebook-f"></i
                            ></a>
                        <a href="https://www.instagram.com/rhapsodydevelopmentcenter/"
                        ><i class="fab fa-instagram"></i
                            ></a>
                        <a href="https://www.linkedin.com/company/rhapsodyhospitality/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="sticky-active">
            <div class="container position-relative z-index-common">
                <div class="row align-items-center justify-content-between">
                    <div class="col-3 align-items-center">
                        <div class="vs-logo style2">
                            <a href="{{ route('home') }}"
                            ><img src="/img/logo.png" alt="logo"
                                /></a>
                        </div>
                    </div>
                    <div class="col-auto justify-content-end">
                        <nav class="main-menu menu-style3 d-none d-lg-block">
                            <ul>
                                <li><a href="{{ route('about-us') }}">Tentang Kami</a></li>
                                <li class="menu-item-has-children mega-menu-wrap">
                                    <a href="#">Program Kami</a>
                                    <ul class="mega-menu">
                                        <li>
                                            <a href="#">Diploma 1</a>
                                            <ul>
                                                <li><a href="{{ route('front-office') }}">Front Office</a></li>
                                                <li><a href="{{ route('housekeeping') }}">Housekeeping</a></li>
                                                <li>
                                                    <a href="{{ route('f&b-service') }}">Food & Beverage Service</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('f&b-product') }}">Food & Beverage Product</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Executive Hybrid</a>
                                            <ul>
                                                <li><a href="{{ route('laundry&housekeeping') }}">Laundry & Housekeeping</a></li>
                                                <li>
                                                    <a href="{{ route('galley&cook') }}">Galley & Cook</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('fasilitas') }}">Fasilitas</a>
                                </li>
                                <li>
                                    <a href="{{ route('under-maintenance') }}">Blog</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Kontak Kami</a>
                                </li>
                            </ul>
                        </nav>
                        <button class="vs-menu-toggle d-inline-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#mobileNavbarCollapse" aria-expanded="false" aria-controls="mobileNavbarCollapse">
                            <i class="fal fa-bars"></i>
                        </button>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-btns style2">
                            <a href="#modalCenter" role="button" class="btn vs-btn style6" data-bs-toggle="modal">
                                Daftar Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vs-menu-area text-center collapse" id="mobileNavbarCollapse">
        <div class="vs-mobile-menu">
            <ul>
                <li>
                    <a href="{{route('about-us')}}">Tentang Kami</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Diploma 1</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('front-office') }}">Front Office</a></li>
                        <li><a href="{{ route('housekeeping') }}">Housekeeping</a></li>
                        <li>
                            <a href="{{ route('f&b-service') }}">Food & Beverage Service</a>
                        </li>
                        <li>
                            <a href="{{ route('f&b-product') }}">Food & Beverage Product</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Executive Hybrid</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('laundry&housekeeping') }}">Laundry & Housekeeping</a></li>
                        <li>
                            <a href="{{ route('galley&cook') }}">Galley & Cook</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item-has-children">
                    <a href="{{ route('fasilitas') }}">Fasilitas</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ route('under-maintenance') }}">Blog</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">Kontak Kami</a>
                </li>
            </ul>
        </div>
    </div>
</header>
<div id="modalCenter" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color: var(--theme-color3)">
            <div class="modal-header">
                <h5 class="modal-title">Mau daftar program apa?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <a href="{{ route('registrasi-program-d1') }}" class="vs-btn">Diploma 1</a>
                    <a href="{{ route('registrasi-program-executive') }}" class="vs-btn">Executive Hybrid</a>
                </div>
            </div>
        </div>
    </div>
</div>

{{--<div--}}
{{--    class="modal fade"--}}
{{--    tabindex="-1"--}}
{{--    id="modalExecutive"--}}
{{--    role="dialog"--}}
{{--    aria-labelledby="exampleModalCenterTitle"--}}
{{--    aria-hidden="true"--}}
{{--    style="border-radius: 15px;--}}
{{--    overflow: hidden;--}}
{{--    background-color: transparent;"--}}
{{-->--}}
{{--    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">--}}
{{--        <div class="modal-content rounded-0">--}}
{{--            <div class="modal-body py-0">--}}
{{--                <div class="d-block main-content">--}}
{{--                    <img--}}
{{--                        src="/img/modal/Pamflet - Executive Hybrid.jpg"--}}
{{--                        alt="Image"--}}
{{--                        class="img-fluid"--}}
{{--                    />--}}
{{--                    <div--}}
{{--                        class="content-text p-4"--}}
{{--                        style="background-color: var(--theme-color3)"--}}
{{--                    >--}}
{{--                        <div class="d-flex">--}}
{{--                            <div class="ml-auto">--}}
{{--                                <a href="#" class="btn btn-link" data-dismiss="modal"--}}
{{--                                >No thanks</a--}}
{{--                                >--}}
{{--                                <a href="{{ route('registrasi-program-executive') }}" class="vs-btn">Daftar Sekarang</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

