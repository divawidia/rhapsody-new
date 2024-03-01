<!--==============================
Footer Area
==============================-->
<footer
    class="footer-wrapper footer-layout2"
>
    <div class="widget-area" style="
        background-image: url('/img/bg/footer-bg.png');
        background-repeat: no-repeat;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-4 border-end">
                    <div class="widget footer-widget">
                        <div class="vs-widget-about">
                            <div class="footer-logo text-center">
                                <img src="/img/Title-Logo.png" alt="logo"
                                />
{{--                                <a href="{{ route('home') }}"--}}
{{--                                ></a>--}}
                            </div>
                            <p class="footer-text m-auto">
                                Ini dia.. Saatnya memilih..
                                Kalian tidak akan menemukan yang sama seperti kami.
                            </p>
                            <div class="footer-media d-flex justify-content-center mt-5">
                                <div class="row">
                                    <div class="col-6 position-relative">
                                        <div class="course-tag">
                                            <div class="position-absolute top-0 start-50 translate-middle category-style1 p-0">
                                                <div class="icon" style="background-color: #BDECFF; height: 45px; width: 45px;">
                                                    <img src="/img/icon/whatsapp.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn vs-btn style7">
                                            Hubungi Admin
                                        </div>
                                    </div>
                                    <div class="col-6 position-relative">
                                        <div class="course-tag">
                                            <div class="position-absolute top-0 start-50 translate-middle category-style1 p-0">
                                                <div class="icon" style="background-color: #BDECFF; height: 45px; width: 45px;">
                                                    <img src="/img/icon/pdf.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn vs-btn style7">
                                            <a
                                                href="https://drive.google.com/file/d/1cJGZsiWahyat-w8G7xKxJu2kGkigClaC/view?usp=sharing"
                                            style="color: var(--theme-color)">Unduh Brosur</a>
                                        </div>
                                    </div>
                                </div>
{{--                                <div class="media-icon">--}}
{{--                                    <i class="fas fa-file-pdf"></i>--}}
{{--                                </div>--}}
{{--                                <div class="media-body">--}}
{{--                                    <span class="media-title">Download Brosur Kami</span>--}}
{{--                                    <a--}}
{{--                                        href="https://drive.google.com/file/d/1cJGZsiWahyat-w8G7xKxJu2kGkigClaC/view?usp=sharing"--}}
{{--                                    >Download.pdf</a--}}
{{--                                    >--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Lokasi Kampus</h3>
                        <div class="course-style2">
                            <div class="course-img">
                                <a href="course-details.html"><img class="w-100" src="/img/about/about-2-6.jpg" alt="Front Office"></a>
                            </div>
                            <div class="row course-tag">
                                <div class="col-auto ms-auto category-style1 p-0">
                                        <img src="/img/icon/Google_Map.png">
                                </div>
                            </div>
                            <div class="course-content">
                                <h3 class="h5 course-name"><a href="course-details.html" class="text-inherit">Deket sama Bali Zoo</a></h3>
                                <div class="course-meta">
                                    <span>Jalan Selat No. 18 B, Apuan, Singapadu, Gianyar, Bali - Indonesia</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="widget nav_menu footer-widget">
                        <h3 class="widget_title">Program Kami</h3>
                        <div class="menu-all-pages-container footer-menu">
                            <ul class="menu">
                                <li><a href="{{ route('front-office') }}">D1 Front Office</a></li>
                                <li><a href="{{ route('housekeeping') }}">D1 Housekeeping</a></li>
                                <li>
                                    <a href="{{ route('f&b-service') }}">D1 Food & Beverage Service</a>
                                </li>
                                <li>
                                    <a href="{{ route('f&b-product') }}">D1 Food & Beverage Product</a>
                                </li>
                                <li><a href="{{ route('laundry&housekeeping') }}">Executive Laundry & Housekeeping</a></li>
                                <li>
                                    <a href="{{ route('galley&cook') }}">Executive Galley & Cook</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="copyright-container">
            <img src="/img/icon/Kapal.png" class="position-absolute d-none d-xl-inline">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="text-center col-lg-auto">
                        <p class="copyright-text">
                            Copyright <i class="fal fa-copyright"></i><script>document.write(new Date().getFullYear())</script>
                            <a href="{{ route('home') }}">Rhapsody Hospitality Development Center</a
                            >. All Rights Reserved
                        </p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div class="social-style1">
                            <a href="https://www.facebook.com/rhapsody.developmentcenter"
                            ><i class="fab fa-facebook-f"></i
                                ></a>
                            <a href="https://www.instagram.com/rhapsodydevelopmentcenter/"
                            ><i class="fab fa-instagram"></i
                                ></a>
                            <a href="https://www.linkedin.com/company/rhapsodyhospitality/"
                            ><i class="fab fa-linkedin-in"></i
                                ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- Scroll To Top -->
{{--<a href="#" class="scrollToTop scroll-btn"--}}
{{--    ><i class="fa-solid fa-angle-up"></i--}}
{{--></a>--}}
