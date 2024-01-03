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

                <li class="menu-title" data-key="t-applications">Sosialisasi SMA/SMK</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bxs-school icon nav-icon"></i>
                        <span class="menu-item" data-key="sekolah">Sekolah SMA/SMK</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('sekolah-sosialisasi.index') }}" data-key="sekolah">
                                List Sekolah SMA/SMK
                            </a></li>
                        <li><a href="{{ route('sekolah-sosialisasi.create') }}" data-key="sekolah">
                                Tambah Data Sekolah SMA/SMK
                            </a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-calendar icon nav-icon"></i>
                        <span class="menu-item" data-key="sosialisasi">Jadwal Sosialisasi</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('jadwal-sosialisasi.index') }}" data-key="sosialisasi">
                                List Jadwal Sosialisasi
                            </a></li>
                        <li><a href="{{ route('jadwal-sosialisasi.create') }}" data-key="sosialisasi">
                                Tambah Jadwal Sosialisasi
                            </a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-user icon nav-icon"></i>
                        <span class="menu-item" data-key="t-email">Siswa SMA/SMK</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('siswa-sma-smk-sosialisasi.index') }}" data-key="t-inbox">
                                List Siswa Sosialisasi
                            </a></li>
                        <li><a href="{{ route('siswa-sma-smk-sosialisasi.create') }}" data-key="t-inbox">
                                Tambah Data Siswa
                            </a></li>
                    </ul>
                </li>

                <li class="menu-title" data-key="t-applications">Executive Hybrid</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-user icon nav-icon"></i>
                        <span class="menu-item" data-key="t-email">Peserta</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('calon-peserta-executive.index') }}" data-key="t-inbox">Calon Peserta</a>
                        </li>
                        <li><a href="email-read" data-key="t-read-email">Peserta Daftar Ulang</a></li>
                    </ul>
                </li>

                <li class="menu-title" data-key="t-applications">Diploma 1</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-user icon nav-icon"></i>
                        <span class="menu-item" data-key="t-email">Peserta</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('calon-peserta-diploma.index') }}" data-key="t-inbox">Calon Peserta</a>
                        </li>
                        <li><a href="email-read" data-key="t-read-email">Peserta Daftar Ulang</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
