@extends('layouts.app')

@section('title', 'Data Sekolah')

@section('body-class', 'schools-layout')

@section('content')
    <!-- Dynamic Hero Section -->
    <div class="page-hero">
        <div class="hero-particles"></div>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="hero-content" data-aos="fade-right" data-aos-duration="1000">
                        <div class="hero-badge">
                            <i class="fas fa-graduation-cap"></i>
                            <span>Manajemen Sekolah</span>
                        </div>
                        <h1 class="hero-title">Data Sekolah SANG GRAWA</h1>
                        <p class="hero-subtitle">Kelola informasi sekolah di Kota Bukittinggi dengan sistem terintegrasi
                            yang modern dan efisien</p>
                        <nav aria-label="breadcrumb" class="hero-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                            class="fas fa-home"></i>Dashboard</a></li>
                                <li class="breadcrumb-item active">Data Sekolah</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-left" data-aos-duration="1000">
                    <div class="hero-stats">
                        <div class="stat-item">
                            <div class="stat-number">25</div>
                            <div class="stat-label">Total Sekolah</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">1,247</div>
                            <div class="stat-label">Total Siswa</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-4">
        <!-- Statistics Overview Cards -->
        <div class="row g-4 mb-5" data-aos="fade-up" data-aos-duration="800">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="analytics-card card-primary">
                    <div class="card-gradient"></div>
                    <div class="card-content">
                        <div class="card-icon">
                            <i class="fas fa-school"></i>
                        </div>
                        <div class="card-info">
                            <h3 class="counter" data-target="25">0</h3>
                            <p>Total Sekolah</p>
                            <div class="trend up">
                                <i class="fas fa-arrow-up"></i>
                                <span>+12% bulan ini</span>
                            </div>
                        </div>
                    </div>
                    <div class="floating-elements">
                        <div class="float-element"></div>
                        <div class="float-element"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="analytics-card card-success">
                    <div class="card-gradient"></div>
                    <div class="card-content">
                        <div class="card-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="card-info">
                            <h3 class="counter" data-target="22">0</h3>
                            <p>Sekolah Aktif</p>
                            <div class="trend up">
                                <i class="fas fa-arrow-up"></i>
                                <span>88% aktif</span>
                            </div>
                        </div>
                    </div>
                    <div class="floating-elements">
                        <div class="float-element"></div>
                        <div class="float-element"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="analytics-card card-warning">
                    <div class="card-gradient"></div>
                    <div class="card-content">
                        <div class="card-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="card-info">
                            <h3 class="counter" data-target="1247">0</h3>
                            <p>Total Siswa</p>
                            <div class="trend up">
                                <i class="fas fa-arrow-up"></i>
                                <span>+156 siswa baru</span>
                            </div>
                        </div>
                    </div>
                    <div class="floating-elements">
                        <div class="float-element"></div>
                        <div class="float-element"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="analytics-card card-info">
                    <div class="card-gradient"></div>
                    <div class="card-content">
                        <div class="card-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="card-info">
                            <h3 class="counter" data-target="95">0</h3>
                            <p>Tingkat Efisiensi</p>
                            <div class="trend up">
                                <i class="fas fa-arrow-up"></i>
                                <span>+5% efisiensi</span>
                            </div>
                        </div>
                    </div>
                    <div class="floating-elements">
                        <div class="float-element"></div>
                        <div class="float-element"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Advanced Filter & Search Panel -->
        <div class="filter-panel mb-5" data-aos="fade-up" data-aos-duration="1000">
            <div class="filter-header">
                <div class="filter-title">
                    <h4><i class="fas fa-search me-2"></i>Filter & Pencarian Lanjutan</h4>
                    <span class="filter-badge">Smart Filter</span>
                </div>
                <button class="btn btn-add" data-bs-toggle="modal" data-bs-target="#addSchoolModal">
                    <i class="fas fa-plus-circle"></i>
                    <span>Tambah Sekolah</span>
                </button>
            </div>
            <div class="filter-body">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="filter-group">
                            <label><i class="fas fa-search"></i>Cari Sekolah</label>
                            <div class="search-wrapper">
                                <input type="text" class="form-control search-input"
                                    placeholder="Ketik nama sekolah atau NPSN...">
                                <div class="search-icon"><i class="fas fa-search"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="filter-group">
                            <label><i class="fas fa-layer-group"></i>Jenjang</label>
                            <select class="form-select custom-select">
                                <option value="">Semua Jenjang</option>
                                <option value="sd">🟢 SD/MI</option>
                                <option value="smp">🟡 SMP/MTs</option>
                                <option value="sma">🔵 SMA/MA</option>
                                <option value="smk">⚫ SMK</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="filter-group">
                            <label><i class="fas fa-toggle-on"></i>Status</label>
                            <select class="form-select custom-select">
                                <option value="">Semua Status</option>
                                <option value="active">✅ Aktif</option>
                                <option value="inactive">❌ Non-Aktif</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="filter-group">
                            <label><i class="fas fa-sort"></i>Urutkan</label>
                            <select class="form-select custom-select">
                                <option value="name">Nama A-Z</option>
                                <option value="students">Jumlah Siswa</option>
                                <option value="type">Jenjang</option>
                                <option value="year">Tahun Berdiri</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="filter-group">
                            <label>&nbsp;</label>
                            <button class="btn btn-reset w-100">
                                <i class="fas fa-undo-alt"></i>Reset Filter
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Schools Table in Card -->
        <div class="schools-table-section" data-aos="fade-up">
            <div class="data-table-card">
                <div class="table-header">
                    <div class="table-title">
                        <h3><i class="fas fa-table me-2"></i>Daftar Sekolah</h3>
                        <p>Menampilkan 5 dari 25 sekolah yang terdaftar</p>
                    </div>
                    <div class="table-actions">
                        <button class="btn btn-export"><i class="fas fa-download me-1"></i>Export</button>
                        <button class="btn btn-print"><i class="fas fa-print me-1"></i>Print</button>
                    </div>
                </div>

                <div class="table-content">
                    <div class="table-responsive">
                        <table class="table data-table">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Sekolah</th>
                                    <th class="text-center">NPSN</th>
                                    <th class="text-center">Jenjang</th>
                                    <th>Kepala Sekolah</th>
                                    <th class="text-center">Siswa</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-row" data-aos="fade-up" data-aos-delay="100">
                                    <td class="text-center">
                                        <div class="row-number">1</div>
                                    </td>
                                    <td>
                                        <div class="info-cell">
                                            <div class="item-avatar">
                                                <img src="https://via.placeholder.com/50x50/e74c3c/ffffff?text=SMA"
                                                    alt="SMAN 1 Bukittinggi">
                                            </div>
                                            <div class="item-details">
                                                <h6 class="item-name">SMAN 1 Bukittinggi</h6>
                                                <small class="item-address">Jl. Syech Ibrahim Musa No. 5,
                                                    Bukittinggi</small>
                                                <div class="item-year">Est. 1950</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="code-badge">10307579</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="type-badge sma">SMA</span>
                                    </td>
                                    <td>
                                        <div class="info-detail">
                                            <i class="fas fa-user-tie me-2"></i>
                                            <span>Dr. Ahmad Syafii, M.Pd</span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="count-container">
                                            <span class="count-number">487</span>
                                            <small class="count-label d-block">siswa</small>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="status-badge active">Aktif</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="action-buttons">
                                            <button class="action-btn view" title="Detail"><i
                                                    class="fas fa-eye"></i></button>
                                            <button class="action-btn edit" title="Edit"><i
                                                    class="fas fa-edit"></i></button>
                                            <button class="action-btn delete" title="Hapus"><i
                                                    class="fas fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="table-row" data-aos="fade-up" data-aos-delay="200">
                                    <td class="text-center">
                                        <div class="row-number">2</div>
                                    </td>
                                    <td>
                                        <div class="info-cell">
                                            <div class="item-avatar">
                                                <img src="https://via.placeholder.com/50x50/f39c12/ffffff?text=SMP"
                                                    alt="SMPN 5 Bukittinggi">
                                            </div>
                                            <div class="item-details">
                                                <h6 class="item-name">SMPN 5 Bukittinggi</h6>
                                                <small class="item-address">Jl. Panorama Gadang No. 12,
                                                    Bukittinggi</small>
                                                <div class="item-year">Est. 1962</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="code-badge">10307580</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="type-badge smp">SMP</span>
                                    </td>
                                    <td>
                                        <div class="info-detail">
                                            <i class="fas fa-user-tie me-2"></i>
                                            <span>Dra. Siti Mariam, M.Pd</span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="count-container">
                                            <span class="count-number">342</span>
                                            <small class="count-label d-block">siswa</small>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="status-badge active">Aktif</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="action-buttons">
                                            <button class="action-btn view" title="Detail"><i
                                                    class="fas fa-eye"></i></button>
                                            <button class="action-btn edit" title="Edit"><i
                                                    class="fas fa-edit"></i></button>
                                            <button class="action-btn delete" title="Hapus"><i
                                                    class="fas fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="table-row" data-aos="fade-up" data-aos-delay="300">
                                    <td class="text-center">
                                        <div class="row-number">3</div>
                                    </td>
                                    <td>
                                        <div class="info-cell">
                                            <div class="item-avatar">
                                                <img src="https://via.placeholder.com/50x50/27ae60/ffffff?text=SD"
                                                    alt="SDN 01 Mandiangin">
                                            </div>
                                            <div class="item-details">
                                                <h6 class="item-name">SDN 01 Mandiangin</h6>
                                                <small class="item-address">Jl. Mandiangin Koto Selayan,
                                                    Bukittinggi</small>
                                                <div class="item-year">Est. 1945</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="code-badge">10307581</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="type-badge sd">SD</span>
                                    </td>
                                    <td>
                                        <div class="info-detail">
                                            <i class="fas fa-user-tie me-2"></i>
                                            <span>Hj. Nurlaila, S.Pd</span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="count-container">
                                            <span class="count-number">156</span>
                                            <small class="count-label d-block">siswa</small>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="status-badge active">Aktif</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="action-buttons">
                                            <button class="action-btn view" title="Detail"><i
                                                    class="fas fa-eye"></i></button>
                                            <button class="action-btn edit" title="Edit"><i
                                                    class="fas fa-edit"></i></button>
                                            <button class="action-btn delete" title="Hapus"><i
                                                    class="fas fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="table-row" data-aos="fade-up" data-aos-delay="400">
                                    <td class="text-center">
                                        <div class="row-number">4</div>
                                    </td>
                                    <td>
                                        <div class="info-cell">
                                            <div class="item-avatar">
                                                <img src="https://via.placeholder.com/50x50/34495e/ffffff?text=SMK"
                                                    alt="SMKN 2 Bukittinggi">
                                            </div>
                                            <div class="item-details">
                                                <h6 class="item-name">SMKN 2 Bukittinggi</h6>
                                                <small class="item-address">Jl. Bypass Aur Kuning, Bukittinggi</small>
                                                <div class="item-year">Est. 1978</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="code-badge">10307582</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="type-badge smk">SMK</span>
                                    </td>
                                    <td>
                                        <div class="info-detail">
                                            <i class="fas fa-user-tie me-2"></i>
                                            <span>Ir. Bambang Sutrisno, M.T</span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="count-container">
                                            <span class="count-number">262</span>
                                            <small class="count-label d-block">siswa</small>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="status-badge inactive">Maintenance</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="action-buttons">
                                            <button class="action-btn view" title="Detail"><i
                                                    class="fas fa-eye"></i></button>
                                            <button class="action-btn edit" title="Edit"><i
                                                    class="fas fa-edit"></i></button>
                                            <button class="action-btn delete" title="Hapus"><i
                                                    class="fas fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="table-row" data-aos="fade-up" data-aos-delay="500">
                                    <td class="text-center">
                                        <div class="row-number">5</div>
                                    </td>
                                    <td>
                                        <div class="info-cell">
                                            <div class="item-avatar">
                                                <img src="https://via.placeholder.com/50x50/9b59b6/ffffff?text=MA"
                                                    alt="MAN 1 Bukittinggi">
                                            </div>
                                            <div class="item-details">
                                                <h6 class="item-name">MAN 1 Bukittinggi</h6>
                                                <small class="item-address">Jl. Hamka Guguk Panjang, Bukittinggi</small>
                                                <div class="item-year">Est. 1970</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="code-badge">10307583</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="type-badge ma">MA</span>
                                    </td>
                                    <td>
                                        <div class="info-detail">
                                            <i class="fas fa-user-tie me-2"></i>
                                            <span>Dr. H. Yusuf Rahman, M.Ag</span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="count-container">
                                            <span class="count-number">398</span>
                                            <small class="count-label d-block">siswa</small>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="status-badge active">Aktif</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="action-buttons">
                                            <button class="action-btn view" title="Detail"><i
                                                    class="fas fa-eye"></i></button>
                                            <button class="action-btn edit" title="Edit"><i
                                                    class="fas fa-edit"></i></button>
                                            <button class="action-btn delete" title="Hapus"><i
                                                    class="fas fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="table-footer">
                    <div class="pagination-info">
                        <span>Menampilkan <strong>5</strong> dari <strong>25</strong> sekolah</span>
                    </div>
                    <nav class="pagination-nav">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><span class="page-link">...</span></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection

@push('styles')
    <!-- AOS Animation Library CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
@endpush

@push('scripts')
    <!-- AOS Animation Library JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- Universal JavaScript Components -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <!-- Page-specific scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Schools page loaded with universal components');

            // Page-specific functionality can be added here
            // All universal features (search, filters, counters, etc.) are automatically loaded

            // Example: Custom action handlers for this page
            // window.viewItem = function(id, name) {
            //     window.location.href = `/schools/view/${id}`;
            // };

            // window.editItem = function(id, name) {
            //     window.location.href = `/schools/edit/${id}`;
            // };

            // window.deleteItem = function(id, name) {
            //     if (confirm(`Hapus sekolah "${name}"?`)) {
            //         // Send delete request
            //         console.log('Deleting school:', name);
            //     }
            // };
        });
    </script>
@endpush
