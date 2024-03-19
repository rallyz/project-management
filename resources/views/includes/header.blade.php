<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex align-items-center">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="{{ route('dashboard') }}" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="17">
                        </span>
                    </a>

                    <a href="{{ route('dashboard') }}" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="17">
                        </span>
                    </a>
                </div>

                <!-- Tombol untuk menampilkan/hide menu -->
                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                    id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- Form pencarian -->
                <form class="app-search d-none d-md-block">
                    <!-- Isi form pencarian -->
                </form>
            </div>

            <div class="d-flex align-items-center">
                <!-- Tombol Fullscreen -->
                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                        data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22'></i>
                    </button>
                </div>

                <!-- Tombol Dark Mode -->
                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button"
                        class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>

                <!-- Tombol Notifikasi -->
                <div class="dropdown topbar-head-dropdown ms-1 header-item">
                    <!-- Isi tombol notifikasi -->
                </div>

                <!-- Dropdown Profil User -->
                <div class="dropdown ms-1 header-item topbar-user">
                    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/user-dummy-img.jpg') }}"
                                alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                @auth
                                    <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ auth()->user()->name }}</span>
                                @endauth
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        @auth
                            <h6 class="dropdown-header">Welcome {{ auth()->user()->name }}!</h6>
                            <a class="dropdown-item" href="#"><i
                                    class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                    class="align-middle">Profile</span></a>
                            <a class="dropdown-item" href="#"><i
                                    class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span
                                    class="align-middle">Messages</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><span
                                    class="badge bg-soft-success text-success mt-1 float-end">New</span><i
                                    class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span
                                    class="align-middle">Settings</span></a>
                                    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> 
                                <span class="align-middle" data-key="t-logout">Logout</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
