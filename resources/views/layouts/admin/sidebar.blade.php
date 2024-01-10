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
                        <span class="menu-item" data-key="t-sekolah">Sekolah SMA/SMK</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('sekolah.index') }}" data-key="t-read-email">
                                List Sekolah SMA/SMK
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('sekolah.create') }}" data-key="t-s">
                                Tambah Data Sekolah SMA/SMK
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-calendar icon nav-icon"></i>
                        <span class="menu-item" data-key="t-jadwal">Jadwal Sosialisasi</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('jadwal.index') }}" data-key="t-list-jadwal">
                                List Jadwal Sosialisasi
                            </a></li>
                        <li><a href="{{ route('jadwal.create') }}" data-key="t-tambah-sekolah">
                                Tambah Jadwal Sosialisasi
                            </a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-user icon nav-icon"></i>
                        <span class="menu-item" data-key="t-siswa">Siswa SMA/SMK</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('siswa-sma-smk.index') }}" data-key="t-list-siswa">
                                List Siswa Sosialisasi
                            </a></li>
                        <li><a href="{{ route('siswa-sma-smk.create') }}" data-key="t-tambah-siswa">
                                Tambah Data Siswa
                            </a></li>
                    </ul>
                </li>

                <li class="menu-title" data-key="t-executive">Executive Hybrid</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-user icon nav-icon"></i>
                        <span class="menu-item" data-key="t-peserta-executive">Peserta</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('calon-peserta-executive.index') }}" data-key="t-calon-peserta-executive">Calon Peserta</a>
                        </li>
                        <li><a href="#" data-key="t-peserta-daftar-ulang-executive">Peserta Daftar Ulang</a></li>
                    </ul>
                </li>

                <li class="menu-title" data-key="t-diploma">Diploma 1</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-user icon nav-icon"></i>
                        <span class="menu-item" data-key="t-peserta-diploma">Peserta</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('calon-peserta-diploma.index') }}" data-key="t-calon-peserta-diploma">Calon Peserta</a>
                        </li>
                        <li><a href="email-read" data-key="t-calon-peserta-daftar-ulang-diploma">Peserta Daftar Ulang</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
