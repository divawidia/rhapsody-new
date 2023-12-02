@php use Illuminate\Support\Facades\Storage; @endphp
    <!--==============================
Header Area
==============================-->
<header class="vs-header header-layout2 bg-transparent">
    <div class="wrapper">
        <div class="container position-relative z-index-common">
            <div class="row align-items-center justify-content-between">
                <div class="col-3 align-items-center">
                    <div class="vs-logo style2">
                        <a href="{{ route('home') }}">
                            <img src="{{ Storage::url(getSettingData()->logo_navbar) }}" alt="logo"/>
                        </a>
                    </div>
                </div>
                <div class="col-auto justify-content-end">
                    <nav class="main-menu menu-style3 d-none d-lg-block">
                        <ul>
                            <li><a href="{{ route('about-us') }}">Tentang Kami</a></li>
                            <li class="menu-item-has-children mega-menu-wrap">
                                <a href="#">Program Kami</a>
                                <ul class="mega-menu">
                                    @foreach(getProgramData() as $program)
                                        <li>
                                            <a href="#">{{ $program->name }}</a>
                                            <ul>
                                                @foreach($program->program_contents as $program_content)
                                                    <li>
                                                        <a href="{{ route('program-detail', $program_content->slug) }}">{{ $program_content->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('fasilitas') }}">Fasilitas</a>
                            </li>
                            <li>
                                <a href="{{ route('blogs-news-events') }}">Blogs, News & Events</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Kontak Kami</a>
                            </li>
                        </ul>
                    </nav>
                    <button class="vs-menu-toggle d-inline-block d-lg-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#mobileNavbarCollapse" aria-expanded="false"
                            aria-controls="mobileNavbarCollapse">
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
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center" id="mobileNavbarCollapse">
            <button class="vs-menu-toggle" type="button" data-bs-toggle="collapse"
                    data-bs-target="#mobileNavbarCollapse" aria-expanded="false" aria-controls="mobileNavbarCollapse"><i
                    class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{ route('home') }}">
                    <img src="{{ Storage::url(getSettingData()->logo_navbar) }}" alt="Rhapsody"/>
                </a>
            </div>
            <div class="vs-mobile-menu">
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li>
                        <a href="{{route('about-us')}}">Tentang Kami</a>
                    </li>
                    @foreach(getProgramData() as $program)
                        <li class="menu-item-has-children">
                            <a href="#">{{ $program->name }}</a>
                            <ul class="sub-menu">
                                @foreach($program->program_contents as $program_content)
                                    <li>
                                        <a href="{{ route('program-detail', $program_content->slug) }}">{{ $program_content->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach

                    <li class="menu-item-has-children">
                        <a href="{{ route('fasilitas') }}">Fasilitas</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ route('blogs-news-events') }}">Blogs, News & Events</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Kontak Kami</a>
                    </li>
                </ul>
            </div>
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
                    <a href="{{ route('registrasi-program-executive') }}" class="vs-btn">Executive Program</a>
                </div>
            </div>
        </div>
    </div>
</div>
