@php use Illuminate\Support\Facades\Auth; @endphp
<header id="page-topbar" class="isvertical-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ route('admin-dashboard') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ Storage::url(getSettingData()->logo_sidebar_sm) }}" alt="" height="26">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ Storage::url(getSettingData()->logo_sidebar_lg) }}" alt="" height="26">
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

        <div class="d-flex">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown-v"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell icon-sm align-middle"></i>
                    @if(auth()->user()->unreadNotifications->count() > 0)
                        <span class="noti-dot bg-danger rounded-pill">{{auth()->user()->unreadNotifications->count()}}</span>
                    @endif
                </button>
                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0"
                     aria-labelledby="page-header-notifications-dropdown-v">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-15"> Notifikasi</h5>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('notifications.mark-all-as-read') }}" class="small fw-semibold text-decoration-underline">Tandai semua sebagai telah dibaca</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 250px;">
                        @if(auth()->user()->unreadNotifications->count() > 0)
                            @foreach (auth()->user()->unreadNotifications as $notification)
                                <a href="{{ $notification->data['link'] }}" class="text-reset notification-item unread-notification" id="{{ $notification->id }}">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted font-size-13 mb-0 float-end">{{ $notification->created_at->diffForHumans() }}</p>
                                            <h6 class="mb-1">{{ $notification->data['title'] }}</h6>
                                            <div>
                                                <p class="mb-0">{{ $notification->data['message'] }}</p>
                                            </div>
                                        </div>

                                    </div>
                                </a>
                            @endforeach
                        @else
                            <a href="#" class="text-reset notification-item">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="mb-0">Tidak ada notifikasi saat ini</p>
                                    </div>
                                </div>
                            </a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item user text-start d-flex align-items-center"
                        id="page-header-user-dropdown-v" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                    <img class="rounded-circle header-profile-user object-fit-cover"
                         src="{{ Storage::url(auth()->user()->photo_url ?? 'assets/user-profile/user-circle.png') }}"
                         alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-2 fw-medium font-size-15">{{ auth()->user()->name }}</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('profile-setting.edit') }}">
                        <i class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-2"></i>
                        <span class="align-middle me-3">Settings</span>
                    </a>
                    <a class="dropdown-item" href="{{ route('logout-admin') }}">
                        <i class="mdi mdi-logout text-muted font-size-16 align-middle me-2"></i>
                        <span class="align-middle">Logout</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

@push('addon-script')
    <script>
        $(document).on('click', '.unread-notification', function() {
            let notificationId = $(this).attr('id');
            $.ajax({
                url: `{{ route('notifications.mark-as-read', ':id') }}`.replace(':id', notificationId),
                method: 'PATCH',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.status === 'success') {
                        console.log(response.message);
                    }
                },
                error: function(xhr) {
                    console.error('Failed to mark notification as read');
                    alert('Failed to mark notification as read');
                }
            });
        });
    </script>
@endpush
