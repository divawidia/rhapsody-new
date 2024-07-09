<header id="page-topbar" class="isvertical-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('img/logo-sm.png') }}" alt="" height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('img/logo-2.png') }}" alt="" height="26">
                    </span>
                </a>

                <a href="index" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="{{ URL::asset('img/logo-2.png') }}" alt="" height="30">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ URL::asset('img/logo-sm.png') }}" alt="" height="26">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                <i class="bx bx-menu align-middle"></i>
            </button>

            <!-- start page title -->
            <div class="page-title-box align-self-center d-none d-md-block">
                <h4 class="page-title mb-0">@yield('page-title')</h4>
            </div>
            <!-- end page title -->

        </div>

{{--        <div class="d-flex">--}}
{{--            <div class="dropdown d-inline-block">--}}
{{--                <button type="button" class="btn header-item noti-icon" data-bs-toggle="dropdown" aria-haspopup="true"--}}
{{--                    aria-expanded="false">--}}
{{--                    <i class="bx bx-search icon-sm align-middle"></i>--}}
{{--                </button>--}}
{{--                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">--}}
{{--                    <form class="p-2">--}}
{{--                        <div class="search-box">--}}
{{--                            <div class="position-relative">--}}
{{--                                <input type="text" class="form-control rounded bg-light border-0"--}}
{{--                                    placeholder="Search...">--}}
{{--                                <i class="bx bx-search search-icon"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item user text-start d-flex align-items-center"
                    id="page-header-user-dropdown-v" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    @php
                        $userId = \Illuminate\Support\Facades\Auth::user()->getAuthIdentifier();
                        $user = \App\Models\User::findOrFail($userId);
                    @endphp
                    <img class="rounded-circle header-profile-user object-fit-cover"
                        src="{{ Storage::url($user->photo_url ?? 'assets/user-profile/user-circle.png') }}" alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-2 fw-medium font-size-15">{{ $user->name }}</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('profile-setting.edit') }}">
                        <i class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-2"></i>
                        <span class="align-middle me-3">Settings</span>
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}">
                        <i class="mdi mdi-logout text-muted font-size-16 align-middle me-2"></i>
                        <span class="align-middle">Logout</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
