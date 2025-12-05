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

    <!-- Modal Tambah Sekolah -->
    <div class="modal fade" id="addSchoolModal" tabindex="-1" aria-labelledby="addSchoolModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content"
                style="border-radius: 20px; border: none; box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);">

                <!-- Modal Header -->
                <div class="modal-header"
                    style="background: linear-gradient(135deg, var(--primary-red, #e74c3c), #c0392b); border-radius: 20px 20px 0 0; border: none; padding: 25px 30px;">
                    <div class="d-flex align-items-center">
                        <div
                            style="width: 50px; height: 50px; background: rgba(255,255,255,0.2); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                            <i class="fas fa-school" style="font-size: 20px; color: white;"></i>
                        </div>
                        <div>
                            <h5 class="modal-title" id="addSchoolModalLabel"
                                style="color: white; margin: 0; font-weight: 700;">Tambah Sekolah Baru</h5>
                            <small style="color: rgba(255,255,255,0.8);">Tambahkan data sekolah ke sistem SANG
                                GRAWA</small>
                        </div>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"
                        style="opacity: 0.8;"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body" style="padding: 30px;">
                    <form id="addSchoolForm">
                        @csrf
                        <div class="row g-4">
                            <!-- Informasi Dasar -->
                            <div class="col-12">
                                <div class="form-section">
                                    <h6 class="section-title">
                                        <i class="fas fa-info-circle me-2"
                                            style="color: var(--primary-red, #e74c3c);"></i>
                                        Informasi Dasar
                                    </h6>
                                    <hr style="border-color: var(--primary-red, #e74c3c); opacity: 0.3;">
                                </div>
                            </div>

                            <div class="col-md-8">
                                <label for="school_name" class="form-label">
                                    <i class="fas fa-school me-1"></i>Nama Sekolah <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" id="school_name" name="school_name"
                                    placeholder="Contoh: SMAN 1 Bukittinggi" required
                                    style="border-radius: 12px; border: 2px solid #e9ecef; padding: 12px 16px;">
                            </div>

                            <div class="col-md-4">
                                <label for="npsn" class="form-label">
                                    <i class="fas fa-barcode me-1"></i>NPSN <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" id="npsn" name="npsn"
                                    placeholder="10307579" required maxlength="8"
                                    style="border-radius: 12px; border: 2px solid #e9ecef; padding: 12px 16px;">
                            </div>

                            <div class="col-md-6">
                                <label for="school_type" class="form-label">
                                    <i class="fas fa-layer-group me-1"></i>Jenjang Pendidikan <span
                                        class="text-danger">*</span>
                                </label>
                                <select class="form-select" id="school_type" name="school_type" required
                                    style="border-radius: 12px; border: 2px solid #e9ecef; padding: 12px 16px;">
                                    <option value="">Pilih Jenjang</option>
                                    <option value="sd">SD (Sekolah Dasar)</option>
                                    <option value="smp">SMP (Sekolah Menengah Pertama)</option>
                                    <option value="sma">SMA (Sekolah Menengah Atas)</option>
                                    <option value="smk">SMK (Sekolah Menengah Kejuruan)</option>
                                    <option value="ma">MA (Madrasah Aliyah)</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="established_year" class="form-label">
                                    <i class="fas fa-calendar-alt me-1"></i>Tahun Berdiri
                                </label>
                                <input type="number" class="form-control" id="established_year" name="established_year"
                                    placeholder="1950" min="1900" max="2025"
                                    style="border-radius: 12px; border: 2px solid #e9ecef; padding: 12px 16px;">
                            </div>

                            <!-- Alamat & Kontak -->
                            <div class="col-12">
                                <div class="form-section mt-4">
                                    <h6 class="section-title">
                                        <i class="fas fa-map-marker-alt me-2"
                                            style="color: var(--primary-red, #e74c3c);"></i>
                                        Alamat & Kontak
                                    </h6>
                                    <hr style="border-color: var(--primary-red, #e74c3c); opacity: 0.3;">
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">
                                    <i class="fas fa-home me-1"></i>Alamat Lengkap <span class="text-danger">*</span>
                                </label>
                                <textarea class="form-control" id="address" name="address" rows="3"
                                    placeholder="Jl. Syech Ibrahim Musa No. 5, Bukittinggi" required
                                    style="border-radius: 12px; border: 2px solid #e9ecef; padding: 12px 16px;"></textarea>
                            </div>

                            <div class="col-md-6">
                                <label for="phone" class="form-label">
                                    <i class="fas fa-phone me-1"></i>Nomor Telepon
                                </label>
                                <input type="tel" class="form-control" id="phone" name="phone"
                                    placeholder="0752-123456"
                                    style="border-radius: 12px; border: 2px solid #e9ecef; padding: 12px 16px;">
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label">
                                    <i class="fas fa-envelope me-1"></i>Email
                                </label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="sman1@bukittinggi.sch.id"
                                    style="border-radius: 12px; border: 2px solid #e9ecef; padding: 12px 16px;">
                            </div>

                            <!-- Kepala Sekolah & Jumlah Siswa -->
                            <div class="col-12">
                                <div class="form-section mt-4">
                                    <h6 class="section-title">
                                        <i class="fas fa-users me-2" style="color: var(--primary-red, #e74c3c);"></i>
                                        Informasi Tambahan
                                    </h6>
                                    <hr style="border-color: var(--primary-red, #e74c3c); opacity: 0.3;">
                                </div>
                            </div>

                            <div class="col-md-8">
                                <label for="principal_name" class="form-label">
                                    <i class="fas fa-user-tie me-1"></i>Nama Kepala Sekolah
                                </label>
                                <input type="text" class="form-control" id="principal_name" name="principal_name"
                                    placeholder="Dr. Ahmad Syafii, M.Pd"
                                    style="border-radius: 12px; border: 2px solid #e9ecef; padding: 12px 16px;">
                            </div>

                            <div class="col-md-4">
                                <label for="student_count" class="form-label">
                                    <i class="fas fa-users me-1"></i>Jumlah Siswa
                                </label>
                                <input type="number" class="form-control" id="student_count" name="student_count"
                                    placeholder="487" min="0"
                                    style="border-radius: 12px; border: 2px solid #e9ecef; padding: 12px 16px;">
                            </div>

                            <div class="col-md-6">
                                <label for="status" class="form-label">
                                    <i class="fas fa-toggle-on me-1"></i>Status Sekolah
                                </label>
                                <select class="form-select" id="status" name="status"
                                    style="border-radius: 12px; border: 2px solid #e9ecef; padding: 12px 16px;">
                                    <option value="active" selected>Aktif</option>
                                    <option value="inactive">Non-Aktif</option>
                                    <option value="maintenance">Maintenance</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="accreditation" class="form-label">
                                    <i class="fas fa-award me-1"></i>Akreditasi
                                </label>
                                <select class="form-select" id="accreditation" name="accreditation"
                                    style="border-radius: 12px; border: 2px solid #e9ecef; padding: 12px 16px;">
                                    <option value="">Pilih Akreditasi</option>
                                    <option value="A">A (Sangat Baik)</option>
                                    <option value="B">B (Baik)</option>
                                    <option value="C">C (Cukup)</option>
                                    <option value="TT">Tidak Terakreditasi</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer"
                    style="padding: 20px 30px 30px; border: none; background: #f8f9fa; border-radius: 0 0 20px 20px;">
                    <div class="w-100 d-flex gap-3">
                        <button type="button" class="btn btn-outline-secondary flex-fill" data-bs-dismiss="modal"
                            style="border-radius: 12px; padding: 12px; font-weight: 600;">
                            <i class="fas fa-times me-1"></i>Batal
                        </button>
                        <button type="submit" form="addSchoolForm" class="btn btn-add flex-fill"
                            style="border-radius: 12px; padding: 12px; font-weight: 600;">
                            <i class="fas fa-save me-1"></i>Simpan Sekolah
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <!-- AOS Animation Library CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <!-- Additional Modal Styling -->
    <style>
        /* Enhanced Modal Styling */
        .modal-content {
            overflow: hidden;
        }

        .form-section .section-title {
            color: var(--text-primary, #2c3e50);
            font-weight: 600;
            font-size: 0.95rem;
            margin-bottom: 8px;
        }

        .form-label {
            color: var(--text-primary, #495057);
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 8px;
        }

        .form-label i {
            color: var(--primary-red, #e74c3c);
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary-red, #e74c3c) !important;
            box-shadow: 0 0 0 0.2rem rgba(231, 76, 60, 0.25) !important;
        }

        .form-control.is-valid {
            border-color: #27ae60 !important;
        }

        .form-control.is-invalid {
            border-color: #dc3545 !important;
        }

        .invalid-feedback {
            display: block;
            font-size: 0.875rem;
            color: #dc3545;
            margin-top: 5px;
        }

        .modal-header {
            position: relative;
        }

        .modal-header::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: rgba(255, 255, 255, 0.2);
        }

        .btn-add:disabled {
            opacity: 0.7;
            cursor: not-allowed;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .modal-lg {
                max-width: 90%;
            }

            .modal-body {
                padding: 20px;
            }

            .modal-header {
                padding: 20px;
            }

            .modal-footer {
                padding: 15px 20px 20px;
            }
        }
    </style>
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

            // Initialize Add School Modal functionality
            initializeAddSchoolModal();

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

        // Initialize Add School Modal functionality
        function initializeAddSchoolModal() {
            const form = document.getElementById('addSchoolForm');
            const modal = document.getElementById('addSchoolModal');
            const submitButton = form.querySelector('button[type="submit"]');

            // Form validation styling
            const inputs = form.querySelectorAll('input, select, textarea');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.style.borderColor = 'var(--primary-red, #e74c3c)';
                    this.style.boxShadow = '0 0 0 0.2rem rgba(231, 76, 60, 0.25)';
                });

                input.addEventListener('blur', function() {
                    this.style.borderColor = '#e9ecef';
                    this.style.boxShadow = 'none';

                    // Validate individual field
                    validateField(this);
                });

                input.addEventListener('input', function() {
                    // Remove invalid styling on input
                    this.classList.remove('is-invalid');
                    const feedback = this.parentNode.querySelector('.invalid-feedback');
                    if (feedback) {
                        feedback.remove();
                    }
                });
            });

            // NPSN formatting (only numbers, max 8 digits)
            const npsnInput = document.getElementById('npsn');
            npsnInput.addEventListener('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '').substring(0, 8);
            });

            // Phone number formatting
            const phoneInput = document.getElementById('phone');
            phoneInput.addEventListener('input', function() {
                // Allow numbers, hyphens, spaces, and parentheses
                this.value = this.value.replace(/[^0-9\-\s\(\)]/g, '');
            });

            // Form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                if (validateForm()) {
                    submitForm();
                }
            });

            // Reset form when modal is closed
            modal.addEventListener('hidden.bs.modal', function() {
                form.reset();
                clearValidation();
            });
        }

        // Validate individual field
        function validateField(field) {
            const value = field.value.trim();
            let isValid = true;
            let message = '';

            // Clear previous validation
            field.classList.remove('is-invalid', 'is-valid');
            const existingFeedback = field.parentNode.querySelector('.invalid-feedback');
            if (existingFeedback) {
                existingFeedback.remove();
            }

            // Required field validation
            if (field.hasAttribute('required') && !value) {
                isValid = false;
                message = 'Field ini wajib diisi';
            }

            // Specific validations
            switch (field.id) {
                case 'school_name':
                    if (value && value.length < 3) {
                        isValid = false;
                        message = 'Nama sekolah minimal 3 karakter';
                    }
                    break;

                case 'npsn':
                    if (value && (value.length !== 8 || !/^\d{8}$/.test(value))) {
                        isValid = false;
                        message = 'NPSN harus 8 digit angka';
                    }
                    break;

                case 'email':
                    if (value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                        isValid = false;
                        message = 'Format email tidak valid';
                    }
                    break;

                case 'established_year':
                    const currentYear = new Date().getFullYear();
                    if (value && (value < 1900 || value > currentYear)) {
                        isValid = false;
                        message = `Tahun harus antara 1900 dan ${currentYear}`;
                    }
                    break;

                case 'student_count':
                    if (value && (value < 0 || value > 10000)) {
                        isValid = false;
                        message = 'Jumlah siswa tidak valid';
                    }
                    break;
            }

            // Apply validation styling
            if (!isValid) {
                field.classList.add('is-invalid');
                const feedback = document.createElement('div');
                feedback.className = 'invalid-feedback';
                feedback.textContent = message;
                field.parentNode.appendChild(feedback);
            } else if (value) {
                field.classList.add('is-valid');
            }

            return isValid;
        }

        // Validate entire form
        function validateForm() {
            const form = document.getElementById('addSchoolForm');
            const inputs = form.querySelectorAll('input[required], select[required], textarea[required]');
            let isValid = true;

            inputs.forEach(input => {
                if (!validateField(input)) {
                    isValid = false;
                }
            });

            return isValid;
        }

        // Clear all validation
        function clearValidation() {
            const form = document.getElementById('addSchoolForm');
            const inputs = form.querySelectorAll('input, select, textarea');

            inputs.forEach(input => {
                input.classList.remove('is-invalid', 'is-valid');
                input.style.borderColor = '#e9ecef';
                input.style.boxShadow = 'none';
            });

            const feedbacks = form.querySelectorAll('.invalid-feedback');
            feedbacks.forEach(feedback => feedback.remove());
        }

        // Submit form (placeholder - would normally send to server)
        function submitForm() {
            const form = document.getElementById('addSchoolForm');
            const submitButton = form.querySelector('button[type="submit"]');
            const modal = bootstrap.Modal.getInstance(document.getElementById('addSchoolModal'));

            // Show loading state
            const originalText = submitButton.innerHTML;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i>Menyimpan...';
            submitButton.disabled = true;

            // Collect form data
            const formData = new FormData(form);
            const schoolData = Object.fromEntries(formData);

            // Simulate API call
            setTimeout(() => {
                // Success simulation
                console.log('School data to be saved:', schoolData);

                // Show success message
                showToast('Sekolah berhasil ditambahkan!', 'success');

                // Reset form and close modal
                form.reset();
                clearValidation();
                modal.hide();

                // Reset button
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;

                // Optionally reload the table or add new row
                // reloadSchoolsTable();

            }, 1500); // Simulate network delay
        }
    </script>
@endpush
