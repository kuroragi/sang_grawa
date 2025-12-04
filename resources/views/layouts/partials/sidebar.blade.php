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
                            <a class="nav-link" href="{{ route('schools.index') }}">
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

<!-- Overlay for mobile sidebar -->
<div class="sidebar-overlay d-lg-none" id="sidebarOverlay"></div>
