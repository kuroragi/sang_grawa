<!-- Top Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container-fluid">
        <!-- Sidebar Toggle -->
        <button class="btn btn-link sidebar-toggle d-lg-none" id="sidebarToggleMobile">
            <i class="bi bi-list"></i>
        </button>

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="d-none d-md-block">
            <ol class="breadcrumb mb-0">
                @yield('breadcrumb', '<li class="breadcrumb-item active">Dashboard</li>')
            </ol>
        </nav>

        <!-- User Menu -->
        <div class="navbar-nav ms-auto">
            <!-- Notifications -->
            <div class="nav-item dropdown">
                <a class="nav-link position-relative" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-bell"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        3
                        <span class="visually-hidden">unread notifications</span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end notification-dropdown">
                    <h6 class="dropdown-header">Notifikasi</h6>
                    <a class="dropdown-item" href="#">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="bi bi-exclamation-triangle text-warning"></i>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <small class="text-muted">5 menit lalu</small>
                                <div>Transaksi gagal - Kartu tidak valid</div>
                            </div>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    <a class="dropdown-item text-center" href="#">Lihat Semua Notifikasi</a>
                </div>
            </div>

            <!-- User Profile -->
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" data-bs-toggle="dropdown">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=32&h=32&q=80"
                        alt="Profile" class="rounded-circle me-2" width="32" height="32">
                    <span class="d-none d-sm-block">Admin SANG GRAWA</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profil</a>
                    </li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Pengaturan</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
