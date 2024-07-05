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

                <li class="menu-title" data-key="t-articles">Blog & News Article</li>

                <li>
                    <a href="{{ route('posts.index') }}">
                        <i class='bx bx-file icon nav-icon' ></i>
                        <span class="menu-item" data-key="t-posts">Artikel</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('categories.index') }}">
                        <i class='bx bx-customize icon nav-icon'></i>
                        <span class="menu-item" data-key="t-tags">Kategori</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('tags.index') }}">
                        <i class='bx bx-purchase-tag-alt icon nav-icon'></i>
                        <span class="menu-item" data-key="t-tags">Tags</span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-applications">Page Content</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bxs-school icon nav-icon"></i>
                        <span class="menu-item" data-key="t-sekolah">Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('home-page-edit') }}" data-key="t-home-page">Home Page</a></li>
                        <li><a href="{{ route('about-page-edit') }}" data-key="t-about-page">About Page</a></li>
                        <li><a href="{{ route('facility-page-edit') }}" data-key="t-facility-page">Facility Page</a></li>
                        <li><a href="{{ route('contact-page-edit') }}" data-key="t-contact-page">Contact Page</a></li>
                        <li><a href="{{ route('programs.index') }}" data-key="t-program-page">Program Page</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('sekolah.index') }}">
                        <i class="bx bxs-school icon nav-icon"></i>
                        <span class="menu-item" data-key="t-sekolah">Program Pelatihan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('sekolah.index') }}">
                        <i class="bx bxs-school icon nav-icon"></i>
                        <span class="menu-item" data-key="t-sekolah">Navigation</span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-applications">Contact Forms</li>

                <li>
                    <a href="javascript: void(0);">
                        <i class='bx bx-receipt'></i>
                        <span class="menu-item" data-key="t-sekolah">Forms</span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-applications">User Management</li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="bx bxs-user icon nav-icon"></i>
                        <span class="menu-item" data-key="t-sekolah">Users</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
