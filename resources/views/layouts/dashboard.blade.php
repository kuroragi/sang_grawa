<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SANG GRAWA') }} - @yield('title', 'Dashboard')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- SANG GRAWA Custom Styles -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Page Specific Styles -->
    @stack('styles')
</head>

<body class="dashboard-layout @yield('body-class', '')">

    <!-- Sidebar -->
    <nav id="sidebar" class="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-brand">
                <div class="brand-icon">
                    <i class="fas fa-bus"></i>
                </div>
                <div class="brand-text">
                    <h5>SANG GRAWA</h5>
                    <small>Sistem Angkot Gratis</small>
                </div>
            </div>
            <button class="sidebar-toggle d-lg-none" id="sidebarToggle">
                <i class="bi bi-x"></i>
            </button>
        </div>

        <div class="sidebar-menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('dashboard') }}">
                        <i class="bi bi-house-door"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="nav-header">Master Data</li>

                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#masterDataCollapse">
                        <i class="bi bi-database"></i>
                        <span>Master Data</span>
                        <i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <div class="collapse" id="masterDataCollapse">
                        <ul class="nav flex-column ms-3">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-building"></i>
                                    <span>Sekolah</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-truck"></i>
                                    <span>PT Angkot</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-bus-front"></i>
                                    <span>Angkot</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>Trayek</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-person-badge"></i>
                                    <span>Supir</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-header">Siswa & Kartu</li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-people"></i>
                        <span>Data Siswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-credit-card"></i>
                        <span>Manajemen Kartu</span>
                    </a>
                </li>

                <li class="nav-header">Transaksi</li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-qr-code-scan"></i>
                        <span>Transaksi Tap</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-clock-history"></i>
                        <span>Riwayat Transaksi</span>
                    </a>
                </li>

                <li class="nav-header">Laporan</li>

                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#laporanCollapse">
                        <i class="bi bi-file-earmark-text"></i>
                        <span>Laporan</span>
                        <i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <div class="collapse" id="laporanCollapse">
                        <ul class="nav flex-column ms-3">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-calendar-day"></i>
                                    <span>Harian</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-calendar-week"></i>
                                    <span>Mingguan</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-calendar-month"></i>
                                    <span>Bulanan</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-cash-coin"></i>
                                    <span>Pembayaran Pemkot</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-header">Pengaturan</li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-clock"></i>
                        <span>Jadwal Operasional</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-people-fill"></i>
                        <span>Manajemen User</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-gear"></i>
                        <span>Pengaturan Sistem</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content Wrapper -->
    <div class="content-wrapper">
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
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
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
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                            data-bs-toggle="dropdown">
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
                            <li><a class="dropdown-item" href="#"><i
                                        class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main class="content">
            @yield('content')
        </main>
    </div>

    <!-- Overlay for mobile sidebar -->
    <div class="sidebar-overlay d-lg-none" id="sidebarOverlay"></div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Custom Scripts -->
    @stack('scripts')

    <script>
        // Sidebar Toggle Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.getElementById('sidebarToggleMobile');
            const sidebar = document.getElementById('sidebar');
            const sidebarOverlay = document.getElementById('sidebarOverlay');
            const sidebarClose = document.getElementById('sidebarToggle');

            // Toggle sidebar on mobile
            if (sidebarToggle) {
                sidebarToggle.addEventListener('click', function() {
                    sidebar.classList.add('show');
                    sidebarOverlay.classList.add('show');
                    document.body.style.overflow = 'hidden';
                });
            }

            // Close sidebar
            function closeSidebar() {
                sidebar.classList.remove('show');
                sidebarOverlay.classList.remove('show');
                document.body.style.overflow = '';
            }

            if (sidebarClose) {
                sidebarClose.addEventListener('click', closeSidebar);
            }

            if (sidebarOverlay) {
                sidebarOverlay.addEventListener('click', closeSidebar);
            }

            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 992) {
                    closeSidebar();
                }
            });
        });
    </script>
</body>

</html>
