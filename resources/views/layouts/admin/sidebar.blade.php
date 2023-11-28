<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{ route('admin-dashboard') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('img/logo-sm.png') }}" alt="" height="30">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('img/logo-2.png') }}" alt="" height="75">
            </span>
        </a>
        <a href="{{ route('admin-dashboard') }}" class="logo logo-light">
            <span class="logo-lg">
                <img src="{{ URL::asset('img/logo-2.png') }}" alt="" height="75">
            </span>
            <span class="logo-sm">
                <img src="{{ URL::asset('img/logo-2.png') }}" alt="" height="75">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
        <i class="bx bx-menu align-middle"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Dashboard</li>

                <li>
                    <a href="{{ route('admin-dashboard') }}">
                        <i class="bx bx-home-alt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-articles">Blog, News & Events Article</li>

                <li>
                    <a href="{{ route('posts.index') }}">
                        <i class='bx bx-file icon nav-icon' ></i>
                        <span class="menu-item" data-key="t-posts">Artikel</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('categories.index') }}">
                        <i class='bx bx-customize icon nav-icon'></i>
                        <span class="menu-item" data-key="t-tags">Kategori Artikel</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('tags.index') }}">
                        <i class='bx bx-purchase-tag-alt icon nav-icon'></i>
                        <span class="menu-item" data-key="t-tags">Tags Artikel</span>
                    </a>
                </li>

                <li class="menu-title">Konten Halaman</li>

                <li>
                    <a href="{{ route('home-page-edit') }}">
                        <i class='bx bx-file-blank'></i>
                        <span class="menu-item">Halaman Beranda</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('about-page-edit') }}">
                        <i class='bx bx-file-blank'></i>
                        <span class="menu-item">Halaman Tentang Kami</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('facility-page-edit') }}">
                        <i class='bx bx-file-blank'></i>
                        <span class="menu-item">Halaman Fasilitas</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('programs.index') }}">
                        <i class='bx bx-file-blank'></i>
                        <span class="menu-item">Halaman Program Kami</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact-page-edit') }}">
                        <i class='bx bx-file-blank'></i>
                        <span class="menu-item">Halaman Kontak Kami</span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-applications">Konten Section</li>

                <li>
                    <a href="{{ route('victory-section-edit') }}">
                        <i class='bx bx-file-blank'></i>
                        <span class="menu-item" data-key="t-victory">Victory Section</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('testimoni.index') }}">
                        <i class='bx bx-file-blank'></i>
                        <span class="menu-item" data-key="t-testimoni">Testimony Section</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('company.index') }}">
                        <i class='bx bx-file-blank'></i>
                        <span class="menu-item" data-key="t-company">Alumny Company Section</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('faq.index') }}">
                        <i class='bx bx-file-blank'></i>
                        <span class="menu-item" data-key="t-sekolah">Frequently Asked Question</span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-applications">Forms Pertanyaan</li>

                <li>
                    <a href="{{ route('contact-forms.index') }}">
                        <i class='bx bx-receipt'></i>
                        <span class="menu-item" data-key="t-sekolah">Pertanyaan Terkirim</span>
                    </a>
                </li>

                <li class="menu-title">Manajemen Pengguna</li>

                <li>
                    <a href="{{ route('users.index') }}">
                        <i class="bx bxs-user icon nav-icon"></i>
                        <span class="menu-item">Pengguna</span>
                    </a>
                </li>

                <li class="menu-title">Pengaturan Website & Profile LPK</li>

                <li>
                    <a href="{{ route('setting.edit') }}">
                        <i class="bx bx-cog icon nav-icon"></i>
                        <span class="menu-item">Pengaturan</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
