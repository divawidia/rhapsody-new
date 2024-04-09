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

                <li class="menu-title" data-key="t-applications">Blog & News Article</li>

                <li>
                    <a href="#">
                        <i class='bx bx-file icon nav-icon' ></i>
                        <span class="menu-item" data-key="t-sekolah">Posts</span>
                    </a>
                    <a href="{{ route('tags.index') }}">
                        <i class='bx bx-filter icon nav-icon'></i>
                        <span class="menu-item" data-key="t-tags">Tags</span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-applications">Page Content</li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="bx bxs-school icon nav-icon"></i>
                        <span class="menu-item" data-key="t-sekolah">Pages</span>
                    </a>
                    <a href="{{ route('sekolah.index') }}">
                        <i class="bx bxs-school icon nav-icon"></i>
                        <span class="menu-item" data-key="t-sekolah">Program Pelatihan</span>
                    </a>
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
