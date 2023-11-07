<div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
        <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ route('home') }}"
            ><img src="/img/logo-2.png" alt="Rhapsody"
                /></a>
        </div>
        <div class="vs-mobile-menu">
            <ul>
                <li class="menu-item-has-children">
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li>
                    <a href="{{route('about-us')}}">About Us</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Diploma 1</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('front-office') }}">Front Office</a></li>
                        <li><a href="{{ route('housekeeping') }}">House Keeping</a></li>
                        <li>
                            <a href="{{ route('f&b-service') }}">Food & Baverage Service</a>
                        </li>
                        <li>
                            <a href="{{ route('f&b-product') }}">Food & Baverage Product</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Executive Class Hybrid</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('laundry&housekeeping') }}">Laundry & Housekeeping</a></li>
                        <li>
                            <a href="{{ route('galley&cook') }}">Galley & Cook</a>
                        </li>
                        <li>
                            <a href="{{ route('bar&service') }}">Bar & Service</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item-has-children">
                    <a href="{{ route('fasilitas') }}">Facilities</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ route('under-maintenance') }}">News & Event</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</div>
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
                                >Phone/Whatsapp :
                                <a href="https://wa.me/6287761360697">+62877-6136-0697</a>
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
                        <a href="#"
                        ><i class="fa-brands fa-tiktok" style="color: #ffffff"></i
                            ></a>
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
                                <li><a href="{{ route('about-us') }}">About Us</a></li>
                                <!-- <li class="menu-item-has-children">
                                  <a href="training-programs.html">Training Program</a>
                                  <ul class="sub-menu">
                                    <li><a href="front-office.html">Front Office</a></li>
                                    <li><a href="house-keeping.html">House Keeping</a></li>
                                    <li>
                                      <a href="f&b-product.html"
                                        >Food & Baverage Product</a
                                      >
                                    </li>
                                    <li>
                                      <a href="f&b-service.html"
                                        >Food & Baverage Service</a
                                      >
                                    </li>
                                  </ul>
                                </li> -->
                                <li class="menu-item-has-children mega-menu-wrap">
                                    <a href="#">Our Programs</a>
                                    <ul class="mega-menu">
                                        <li>
                                            <a href="#">Diploma 1</a>
                                            <ul>
                                                <li><a href="{{ route('front-office') }}">Front Office</a></li>
                                                <li><a href="{{ route('housekeeping') }}">House Keeping</a></li>
                                                <li>
                                                    <a href="{{ route('f&b-service') }}">Food & Baverage Service</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('f&b-product') }}">Food & Baverage Product</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Executive Class Hybrid</a>
                                            <ul>
                                                <li><a href="{{ route('laundry&housekeeping') }}">Laundry & Housekeeping</a></li>
                                                <li>
                                                    <a href="{{ route('galley&cook') }}">Galley & Cook</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('bar&service') }}">Bar & Service</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('fasilitas') }}">Facilities</a>
                                </li>
                                <li>
                                    <a href="{{ route('under-maintenance') }}">News & Event</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                        <button class="vs-menu-toggle d-inline-block d-lg-none">
                            <i class="fal fa-bars"></i>
                        </button>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-btns style2">
                            <a
                                href="https://forms.gle/F4qyodkw1TyzhRJ97"
                                class="vs-btn style6"
                            >Register Now</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
