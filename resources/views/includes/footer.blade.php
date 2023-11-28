<!--==============================
Footer Area
==============================-->
<footer class="footer-wrapper footer-layout2">
    <div class="widget-area" style="background-image: url('/img/bg/footer-bg.png'); background-repeat: no-repeat;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-4 border-end">
                    <div class="widget footer-widget">
                        <div class="vs-widget-about">
                            <div class="footer-logo text-center">
                                <a href="{{ route('home') }}">
                                    <img src="{{ Storage::url(getSettingData()->logo_footer) }}" alt="logo"  width="250"/>
                                </a>
                            </div>
                            <p class="footer-text m-auto">
                                Ini dia.. Saatnya memilih..
                                Kalian tidak akan menemukan yang sama seperti kami.
                            </p>
                            <div class="row footer-media d-flex justify-content-center mt-5 px-3">
                                <div class="col-6 position-relative">
                                    <div class="course-tag">
                                        <div class="position-absolute top-0 start-50 translate-middle category-style1 p-0">
                                            <div class="icon" style="background-color: #BDECFF; height: 45px; width: 45px;">
                                                <img src="/img/icon/whatsapp.svg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn vs-btn style7">
                                        <a href="https://wa.me/{{ getSettingData()->kontak_admin }}" style="color: var(--theme-color2)">Hubungi Admin</a>
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
                                        <a href="{{ getSettingData()->brosur }}" style="color: var(--theme-color2)">Unduh Brosur</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 px-5">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Lokasi Kampus</h3>
                        <div class="course-style2">
                            <div class="course-img">
                                <a href="{{ route('contact') }}"><img class="w-100" src="{{ Storage::url(getSettingData()->foto_lpk) }}" alt="Lokasi Kampus"></a>
                            </div>
                            <div class="row course-tag">
                                <div class="col-auto ms-auto category-style1 p-0">
                                    <img src="/img/icon/Google_Map.png">
                                </div>
                            </div>
                            <div class="course-content">
                                <h3 class="h5 course-name"><a href="{{ getSettingData()->google_maps }}" class="text-inherit">{{ getSettingData()->location_title }}</a></h3>
                                <div class="course-meta">
                                    <span>{{ getSettingData()->alamat }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 px-5">
                    <div class="widget nav_menu footer-widget">
                        <h3 class="widget_title">Program Kami</h3>
                        <div class="menu-all-pages-container footer-menu">
                            <ul class="menu">
                                @foreach($programs as $program)
                                    @foreach($program->program_contents as $program_content)
                                        <li><a href="{{ route('program-detail', $program_content->slug) }}">{{ $program->name }} {{ $program_content->name }}</a></li>
                                    @endforeach
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="copyright-container">
            <img src="/img/icon/Kapal.png" class="position-absolute d-none d-xl-inline w-auto">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="text-center col-lg-auto">
                        <p class="copyright-text">
                            Copyright <i class="fal fa-copyright"></i><script>document.write(new Date().getFullYear())</script>
                            <a href="{{ route('home') }}">{{ getSettingData()->site_name }}</a>. All Rights Reserved
                        </p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div class="social-style1">
                            @if(getSettingData()->url_facebook)
                                <a href="{{ getSettingData()->url_facebook }}">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            @endif
                            @if(getSettingData()->url_instagram)
                                <a href="{{ getSettingData()->url_instagram }}">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            @endif
                            @if(getSettingData()->url_tiktok)
                                <a href="{{ getSettingData()->url_tiktok }}">
                                    <i class="fab fa-tiktok"></i>
                                </a>
                            @endif
                            @if(getSettingData()->url_youtube)
                                <a href="{{ getSettingData()->url_youtube }}">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            @endif
                            @if(getSettingData()->url_linkedin)
                                <a href="{{ getSettingData()->url_linkedin }}">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            @endif
                            @if(getSettingData()->url_twitter)
                                <a href="{{ getSettingData()->url_twitter }}">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
