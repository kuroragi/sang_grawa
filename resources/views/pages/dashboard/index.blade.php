@extends('layouts.app')

@section('title', 'Dashboard')

@section('body-class', 'dashboard-layout')

@section('content')
<div class="container-fluid p-4">
    <!-- Welcome Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="welcome-card">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1 class="welcome-title">Selamat Datang di SANG GRAWA</h1>
                        <p class="welcome-subtitle">Sistem Angkot Gratis untuk Siswa - Kota Bukittinggi</p>
                        <div class="welcome-meta">
                            <span class="badge bg-success me-2">
                                <i class="bi bi-circle-fill me-1"></i>
                                Sistem Online
                            </span>
                            <small class="text-muted">
                                <i class="bi bi-clock me-1"></i>
                                Terakhir update: {{ date('d M Y, H:i') }} WIB
                            </small>
                        </div>
                    </div>
                    <div class="col-md-4 text-end">
                        <div class="welcome-stats">
                            <div class="stat-item">
                                <h3 class="stat-number">1,234</h3>
                                <p class="stat-label">Transaksi Hari Ini</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Statistics Cards -->
    <div class="row mb-4">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="stats-card stats-card-primary">
                <div class="stats-icon">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="stats-content">
                    <h3 class="stats-number">2,847</h3>
                    <p class="stats-label">Total Siswa</p>
                    <div class="stats-change positive">
                        <i class="bi bi-arrow-up"></i>
                        <span>+12%</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="stats-card stats-card-success">
                <div class="stats-icon">
                    <i class="bi bi-bus-front-fill"></i>
                </div>
                <div class="stats-content">
                    <h3 class="stats-number">45</h3>
                    <p class="stats-label">Angkot Aktif</p>
                    <div class="stats-change positive">
                        <i class="bi bi-arrow-up"></i>
                        <span>+2</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="stats-card stats-card-warning">
                <div class="stats-icon">
                    <i class="bi bi-qr-code-scan"></i>
                </div>
                <div class="stats-content">
                    <h3 class="stats-number">1,234</h3>
                    <p class="stats-label">Scan QR Hari Ini</p>
                    <div class="stats-change negative">
                        <i class="bi bi-arrow-down"></i>
                        <span>-5%</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="stats-card stats-card-info">
                <div class="stats-icon">
                    <i class="bi bi-cash-coin"></i>
                </div>
                <div class="stats-content">
                    <h3 class="stats-number">Rp 2.5M</h3>
                    <p class="stats-label">Biaya Pemkot Bulan Ini</p>
                    <div class="stats-change positive">
                        <i class="bi bi-arrow-up"></i>
                        <span>+8%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Charts Section -->
    <div class="row mb-4">
        <!-- Transaksi Chart -->
        <div class="col-xl-8 col-lg-7 mb-4">
            <div class="chart-card">
                <div class="chart-header">
                    <h5 class="chart-title">Transaksi Harian</h5>
                    <div class="chart-options">
                        <select class="form-select form-select-sm">
                            <option>7 Hari Terakhir</option>
                            <option>30 Hari Terakhir</option>
                            <option>3 Bulan Terakhir</option>
                        </select>
                    </div>
                </div>
                <div class="chart-body">
                    <canvas id="transactionChart" height="300"></canvas>
                </div>
            </div>
        </div>
        
        <!-- Top Schools -->
        <div class="col-xl-4 col-lg-5 mb-4">
            <div class="chart-card">
                <div class="chart-header">
                    <h5 class="chart-title">Sekolah Teratas</h5>
                    <div class="chart-options">
                        <button class="btn btn-link btn-sm">Lihat Semua</button>
                    </div>
                </div>
                <div class="chart-body">
                    <div class="school-list">
                        <div class="school-item">
                            <div class="school-info">
                                <h6>SMA Negeri 1 Bukittinggi</h6>
                                <small class="text-muted">578 siswa aktif</small>
                            </div>
                            <div class="school-progress">
                                <div class="progress">
                                    <div class="progress-bar bg-primary" style="width: 85%"></div>
                                </div>
                                <small>85%</small>
                            </div>
                        </div>
                        
                        <div class="school-item">
                            <div class="school-info">
                                <h6>SMK Negeri 2 Bukittinggi</h6>
                                <small class="text-muted">432 siswa aktif</small>
                            </div>
                            <div class="school-progress">
                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width: 65%"></div>
                                </div>
                                <small>65%</small>
                            </div>
                        </div>
                        
                        <div class="school-item">
                            <div class="school-info">
                                <h6>SMA Negeri 3 Bukittinggi</h6>
                                <small class="text-muted">385 siswa aktif</small>
                            </div>
                            <div class="school-progress">
                                <div class="progress">
                                    <div class="progress-bar bg-warning" style="width: 58%"></div>
                                </div>
                                <small>58%</small>
                            </div>
                        </div>
                        
                        <div class="school-item">
                            <div class="school-info">
                                <h6>SMK Negeri 1 Bukittinggi</h6>
                                <small class="text-muted">287 siswa aktif</small>
                            </div>
                            <div class="school-progress">
                                <div class="progress">
                                    <div class="progress-bar bg-info" style="width: 43%"></div>
                                </div>
                                <small>43%</small>
                            </div>
                        </div>
                        
                        <div class="school-item">
                            <div class="school-info">
                                <h6>SMA Swasta Al-Azhar</h6>
                                <small class="text-muted">165 siswa aktif</small>
                            </div>
                            <div class="school-progress">
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" style="width: 25%"></div>
                                </div>
                                <small>25%</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Recent Activities & Quick Actions -->
    <div class="row">
        <!-- Recent Activities -->
        <div class="col-xl-8 col-lg-7 mb-4">
            <div class="activity-card">
                <div class="activity-header">
                    <h5 class="activity-title">Aktivitas Terbaru</h5>
                    <div class="activity-options">
                        <button class="btn btn-outline-primary btn-sm">
                            <i class="bi bi-arrow-clockwise"></i>
                            Refresh
                        </button>
                    </div>
                </div>
                <div class="activity-body">
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-icon bg-success">
                                <i class="bi bi-check-circle"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-text">
                                    <strong>Ahmad Rizki</strong> berhasil scan QR code di Angkot B1234AB
                                </div>
                                <div class="activity-time">
                                    <i class="bi bi-clock me-1"></i>
                                    2 menit yang lalu
                                </div>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon bg-warning">
                                <i class="bi bi-exclamation-triangle"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-text">
                                    Scan QR code gagal - Kartu <strong>QR-2024-001234</strong> tidak valid
                                </div>
                                <div class="activity-time">
                                    <i class="bi bi-clock me-1"></i>
                                    5 menit yang lalu
                                </div>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon bg-info">
                                <i class="bi bi-person-plus"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-text">
                                    Siswa baru <strong>Siti Aminah</strong> didaftarkan dari SMA Negeri 1
                                </div>
                                <div class="activity-time">
                                    <i class="bi bi-clock me-1"></i>
                                    15 menit yang lalu
                                </div>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon bg-primary">
                                <i class="bi bi-bus-front"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-text">
                                    Angkot <strong>B5678CD</strong> memulai operasional trayek Aur Kuning - Pasar Atas
                                </div>
                                <div class="activity-time">
                                    <i class="bi bi-clock me-1"></i>
                                    1 jam yang lalu
                                </div>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon bg-danger">
                                <i class="bi bi-x-circle"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-text">
                                    Sistem menolak transaksi di luar jam operasional (19:30 WIB)
                                </div>
                                <div class="activity-time">
                                    <i class="bi bi-clock me-1"></i>
                                    2 jam yang lalu
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Quick Actions -->
        <div class="col-xl-4 col-lg-5 mb-4">
            <div class="quick-actions-card">
                <div class="quick-actions-header">
                    <h5 class="quick-actions-title">Aksi Cepat</h5>
                </div>
                <div class="quick-actions-body">
                    <div class="quick-action-grid">
                        <a href="#" class="quick-action-item">
                            <div class="quick-action-icon bg-primary">
                                <i class="bi bi-person-plus-fill"></i>
                            </div>
                            <span>Tambah Siswa</span>
                        </a>
                        
                        <a href="#" class="quick-action-item">
                            <div class="quick-action-icon bg-success">
                                <i class="bi bi-credit-card"></i>
                            </div>
                            <span>Cetak QR Code</span>
                        </a>
                        
                        <a href="#" class="quick-action-item">
                            <div class="quick-action-icon bg-warning">
                                <i class="bi bi-bus-front"></i>
                            </div>
                            <span>Tambah Angkot</span>
                        </a>
                        
                        <a href="#" class="quick-action-item">
                            <div class="quick-action-icon bg-info">
                                <i class="bi bi-file-earmark-text"></i>
                            </div>
                            <span>Generate Laporan</span>
                        </a>
                        
                        <a href="#" class="quick-action-item">
                            <div class="quick-action-icon bg-danger">
                                <i class="bi bi-clock"></i>
                            </div>
                            <span>Atur Jadwal</span>
                        </a>
                        
                        <a href="#" class="quick-action-item">
                            <div class="quick-action-icon bg-secondary">
                                <i class="bi bi-gear"></i>
                            </div>
                            <span>Pengaturan</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- System Status -->
            <div class="system-status-card mt-4">
                <div class="system-status-header">
                    <h6 class="system-status-title">Status Sistem</h6>
                </div>
                <div class="system-status-body">
                    <div class="status-item">
                        <div class="status-indicator bg-success"></div>
                        <span>Database Server</span>
                        <span class="ms-auto text-success">Online</span>
                    </div>
                    <div class="status-item">
                        <div class="status-indicator bg-success"></div>
                        <span>QR Scanner Service</span>
                        <span class="ms-auto text-success">Aktif</span>
                    </div>
                    <div class="status-item">
                        <div class="status-indicator bg-warning"></div>
                        <span>RFID Service</span>
                        <span class="ms-auto text-warning">Maintenance</span>
                    </div>
                    <div class="status-item">
                        <div class="status-indicator bg-success"></div>
                        <span>Payment Gateway</span>
                        <span class="ms-auto text-success">Normal</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Transaction Chart
    const ctx = document.getElementById('transactionChart').getContext('2d');
    const transactionChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
            datasets: [{
                label: 'Transaksi Pagi (06:30-08:00)',
                data: [320, 289, 267, 398, 445, 178, 92],
                borderColor: 'var(--primary-red)',
                backgroundColor: 'rgba(220, 38, 38, 0.1)',
                tension: 0.4,
                fill: true
            }, {
                label: 'Transaksi Sore (15:00-18:00)',
                data: [280, 251, 234, 356, 412, 145, 78],
                borderColor: 'var(--primary-red-dark)',
                backgroundColor: 'rgba(185, 28, 28, 0.1)',
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom'
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        borderDash: [5, 5]
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            },
            elements: {
                point: {
                    radius: 4,
                    hoverRadius: 6
                }
            }
        }
    });
    
    // Auto refresh activities every 30 seconds
    setInterval(function() {
        // This would normally fetch new activities from the server
        console.log('Refreshing activities...');
    }, 30000);
    
    // Real-time clock
    function updateClock() {
        const now = new Date();
        const timeString = now.toLocaleTimeString('id-ID');
        document.querySelectorAll('.current-time').forEach(el => {
            el.textContent = timeString;
        });
    }
    
    setInterval(updateClock, 1000);
    updateClock();
</script>
@endpush