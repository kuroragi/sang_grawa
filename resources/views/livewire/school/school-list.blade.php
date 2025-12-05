<div>
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
                            <div class="stat-number counter" data-target="{{ $stats['total'] }}">{{ $stats['total'] }}
                            </div>
                            <div class="stat-label">Total Sekolah</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number counter" data-target="{{ $stats['students'] }}">
                                {{ $stats['students'] }}</div>
                            <div class="stat-label">Total Siswa</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-4">
        <!-- Flash Messages -->
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" data-aos="fade-down">
                <i class="fas fa-check-circle me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

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
                            <h3 class="counter" data-target="{{ $stats['total'] }}">{{ $stats['total'] }}</h3>
                            <p>Total Sekolah</p>
                            <div class="trend up">
                                <i class="fas fa-arrow-up"></i>
                                <span>+{{ $stats['active'] }} aktif</span>
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
                            <h3 class="counter" data-target="{{ $stats['active'] }}">{{ $stats['active'] }}</h3>
                            <p>Sekolah Aktif</p>
                            <div class="trend up">
                                <i class="fas fa-arrow-up"></i>
                                <span>{{ $stats['total'] > 0 ? round(($stats['active'] / $stats['total']) * 100) : 0 }}%
                                    aktif</span>
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
                            <h3 class="counter" data-target="{{ $stats['students'] }}">{{ $stats['students'] }}</h3>
                            <p>Total Siswa</p>
                            <div class="trend up">
                                <i class="fas fa-arrow-up"></i>
                                <span>Terdaftar</span>
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
                            <h3 class="counter" data-target="{{ $stats['inactive'] }}">{{ $stats['inactive'] }}</h3>
                            <p>Non-Aktif</p>
                            <div class="trend {{ $stats['inactive'] > 0 ? 'down' : 'up' }}">
                                <i class="fas fa-{{ $stats['inactive'] > 0 ? 'arrow-down' : 'check' }}"></i>
                                <span>{{ $stats['inactive'] > 0 ? 'Perlu perhatian' : 'Semua aktif' }}</span>
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
                <button class="btn btn-add" wire:click="openCreateModal">
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
                                    placeholder="Ketik nama sekolah atau NPSN..."
                                    wire:model.live.debounce.300ms="search">
                                <div class="search-icon"><i class="fas fa-search"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="filter-group">
                            <label><i class="fas fa-layer-group"></i>Jenjang</label>
                            <select class="form-select custom-select" wire:model.live="levelFilter">
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
                            <select class="form-select custom-select" wire:model.live="statusFilter">
                                <option value="">Semua Status</option>
                                <option value="active">✅ Aktif</option>
                                <option value="inactive">❌ Non-Aktif</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="filter-group">
                            <label><i class="fas fa-sort"></i>Urutkan</label>
                            <select class="form-select custom-select" wire:model.live="sortBy">
                                <option value="name">Nama A-Z</option>
                                <option value="students_count">Jumlah Siswa</option>
                                <option value="level">Jenjang</option>
                                <option value="created_at">Terbaru</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="filter-group">
                            <label>&nbsp;</label>
                            <button class="btn btn-reset w-100" wire:click="resetFilters">
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
                        <p>Menampilkan {{ $schools->count() }} dari {{ $schools->total() }} sekolah yang terdaftar</p>
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
                                    <th wire:click="sortBy('name')" style="cursor: pointer">
                                        Sekolah
                                        @if ($sortBy === 'name')
                                            <i class="fas fa-sort-{{ $sortDirection === 'asc' ? 'up' : 'down' }}"></i>
                                        @endif
                                    </th>
                                    <th class="text-center">NPSN</th>
                                    <th class="text-center" wire:click="sortBy('level')" style="cursor: pointer">
                                        Jenjang
                                        @if ($sortBy === 'level')
                                            <i class="fas fa-sort-{{ $sortDirection === 'asc' ? 'up' : 'down' }}"></i>
                                        @endif
                                    </th>
                                    <th>Kepala Sekolah</th>
                                    <th class="text-center">Siswa</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($schools as $index => $school)
                                    <tr class="table-row" data-aos="fade-up"
                                        data-aos-delay="{{ ($index % 5) * 100 }}">
                                        <td class="text-center">
                                            <div class="row-number">{{ $schools->firstItem() + $index }}</div>
                                        </td>
                                        <td>
                                            <div class="info-cell">
                                                <div class="item-avatar">
                                                    @if ($school->logo_path)
                                                        <img src="{{ asset('storage/' . $school->logo_path) }}"
                                                            alt="{{ $school->name }}">
                                                    @else
                                                        <img src="https://via.placeholder.com/50x50/{{ $this->getLevelColor($school->level) }}/ffffff?text={{ strtoupper($school->level) }}"
                                                            alt="{{ $school->name }}">
                                                    @endif
                                                </div>
                                                <div class="item-details">
                                                    <h6 class="item-name">{{ $school->name }}</h6>
                                                    <small class="item-address">{{ $school->address }}</small>
                                                    <div class="item-year">
                                                        @if ($school->created_at)
                                                            Est. {{ $school->created_at->format('Y') }}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="code-badge">{{ $school->npsn }}</span>
                                        </td>
                                        <td class="text-center">
                                            <span
                                                class="type-badge {{ strtolower($school->level) }}">{{ strtoupper($school->level) }}</span>
                                        </td>
                                        <td>
                                            <div class="info-detail">
                                                <i class="fas fa-user-tie me-2"></i>
                                                <span>{{ $school->headmaster ?: 'Belum diisi' }}</span>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="count-container">
                                                <span class="count-number">{{ $school->students_count ?? 0 }}</span>
                                                <small class="count-label d-block">siswa</small>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span
                                                class="status-badge {{ $school->is_active ? 'active' : 'inactive' }}"
                                                wire:click="toggleStatus({{ $school->id }})"
                                                style="cursor: pointer">
                                                {{ $school->is_active ? 'Aktif' : 'Non-Aktif' }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <div class="action-buttons">
                                                <button class="action-btn view" title="Detail"
                                                    wire:click="openViewModal({{ $school->id }})">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="action-btn edit" title="Edit"
                                                    wire:click="openEditModal({{ $school->id }})">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="action-btn delete" title="Hapus"
                                                    wire:click="delete({{ $school->id }})"
                                                    wire:confirm="Apakah Anda yakin ingin menghapus sekolah {{ $school->name }}?">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center py-4">
                                            <div class="empty-state">
                                                <i class="fas fa-school fa-3x text-muted mb-3"></i>
                                                <h5 class="text-muted">Belum ada data sekolah</h5>
                                                <p class="text-muted">Klik tombol "Tambah Sekolah" untuk menambahkan
                                                    data pertama</p>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                @if ($schools->hasPages())
                    <div class="table-footer">
                        <div class="pagination-info">
                            <span>Menampilkan <strong>{{ $schools->firstItem() }}</strong> sampai
                                <strong>{{ $schools->lastItem() }}</strong> dari
                                <strong>{{ $schools->total() }}</strong> sekolah</span>
                        </div>
                        <div class="pagination-nav">
                            {{ $schools->links() }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- School Modal -->
    @if ($showModal)
        <div class="modal fade show" style="display: block; background: rgba(0,0,0,0.5);" tabindex="-1">
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
                                <h5 class="modal-title" style="color: white; margin: 0; font-weight: 700;">
                                    @if ($modalMode === 'create')
                                        Tambah Sekolah Baru
                                    @elseif($modalMode === 'edit')
                                        Edit Sekolah
                                    @else
                                        Detail Sekolah
                                    @endif
                                </h5>
                                <small style="color: rgba(255,255,255,0.8);">
                                    @if ($modalMode === 'create')
                                        Tambahkan data sekolah ke sistem SANG GRAWA
                                    @elseif($modalMode === 'edit')
                                        Perbarui informasi sekolah
                                    @else
                                        Informasi lengkap sekolah
                                    @endif
                                </small>
                            </div>
                        </div>
                        <button type="button" class="btn-close btn-close-white" wire:click="closeModal"
                            style="opacity: 0.8;"></button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body" style="padding: 30px;">
                        <form wire:submit="save">
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
                                    <label for="name" class="form-label">
                                        <i class="fas fa-school me-1"></i>Nama Sekolah <span
                                            class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        wire:model="name" placeholder="Contoh: SMAN 1 Bukittinggi"
                                        {{ $modalMode === 'view' ? 'readonly' : '' }}
                                        style="border-radius: 12px; border: 2px solid #e9ecef; padding: 12px 16px;">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="npsn" class="form-label">
                                        <i class="fas fa-barcode me-1"></i>NPSN <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control @error('npsn') is-invalid @enderror"
                                        wire:model="npsn" placeholder="10307579" maxlength="8"
                                        {{ $modalMode === 'view' ? 'readonly' : '' }}
                                        style="border-radius: 12px; border: 2px solid #e9ecef; padding: 12px 16px;">
                                    @error('npsn')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="level" class="form-label">
                                        <i class="fas fa-layer-group me-1"></i>Jenjang Pendidikan <span
                                            class="text-danger">*</span>
                                    </label>
                                    <select class="form-select @error('level') is-invalid @enderror"
                                        wire:model="level" {{ $modalMode === 'view' ? 'disabled' : '' }}
                                        style="border-radius: 12px; border: 2px solid #e9ecef; padding: 12px 16px;">
                                        <option value="">Pilih Jenjang</option>
                                        <option value="sd">SD (Sekolah Dasar)</option>
                                        <option value="smp">SMP (Sekolah Menengah Pertama)</option>
                                        <option value="sma">SMA (Sekolah Menengah Atas)</option>
                                        <option value="smk">SMK (Sekolah Menengah Kejuruan)</option>
                                        <option value="ma">MA (Madrasah Aliyah)</option>
                                    </select>
                                    @error('level')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="status" class="form-label">
                                        <i class="fas fa-building me-1"></i>Status Sekolah <span
                                            class="text-danger">*</span>
                                    </label>
                                    <select class="form-select @error('status') is-invalid @enderror"
                                        wire:model="status" {{ $modalMode === 'view' ? 'disabled' : '' }}
                                        style="border-radius: 12px; border: 2px solid #e9ecef; padding: 12px 16px;">
                                        <option value="negeri">Negeri</option>
                                        <option value="swasta">Swasta</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
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
                                        <i class="fas fa-home me-1"></i>Alamat Lengkap
                                    </label>
                                    <textarea class="form-control @error('address') is-invalid @enderror" wire:model="address" rows="3"
                                        placeholder="Jl. Syech Ibrahim Musa No. 5, Bukittinggi" {{ $modalMode === 'view' ? 'readonly' : '' }}
                                        style="border-radius: 12px; border: 2px solid #e9ecef; padding: 12px 16px;"></textarea>
                                    @error('address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="phone" class="form-label">
                                        <i class="fas fa-phone me-1"></i>Nomor Telepon
                                    </label>
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                        wire:model="phone" placeholder="0752-123456"
                                        {{ $modalMode === 'view' ? 'readonly' : '' }}
                                        style="border-radius: 12px; border: 2px solid #e9ecef; padding: 12px 16px;">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label">
                                        <i class="fas fa-envelope me-1"></i>Email
                                    </label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        wire:model="email" placeholder="sman1@bukittinggi.sch.id"
                                        {{ $modalMode === 'view' ? 'readonly' : '' }}
                                        style="border-radius: 12px; border: 2px solid #e9ecef; padding: 12px 16px;">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Informasi Tambahan -->
                                <div class="col-12">
                                    <div class="form-section mt-4">
                                        <h6 class="section-title">
                                            <i class="fas fa-users me-2"
                                                style="color: var(--primary-red, #e74c3c);"></i>
                                            Informasi Tambahan
                                        </h6>
                                        <hr style="border-color: var(--primary-red, #e74c3c); opacity: 0.3;">
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <label for="headmaster" class="form-label">
                                        <i class="fas fa-user-tie me-1"></i>Nama Kepala Sekolah
                                    </label>
                                    <input type="text"
                                        class="form-control @error('headmaster') is-invalid @enderror"
                                        wire:model="headmaster" placeholder="Dr. Ahmad Syafii, M.Pd"
                                        {{ $modalMode === 'view' ? 'readonly' : '' }}
                                        style="border-radius: 12px; border: 2px solid #e9ecef; padding: 12px 16px;">
                                    @error('headmaster')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="is_active" class="form-label">
                                        <i class="fas fa-toggle-on me-1"></i>Status Aktif
                                    </label>
                                    <select class="form-select" wire:model="is_active"
                                        {{ $modalMode === 'view' ? 'disabled' : '' }}
                                        style="border-radius: 12px; border: 2px solid #e9ecef; padding: 12px 16px;">
                                        <option value="1">Aktif</option>
                                        <option value="0">Non-Aktif</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Modal Footer -->
                    @if ($modalMode !== 'view')
                        <div class="modal-footer"
                            style="padding: 20px 30px 30px; border: none; background: #f8f9fa; border-radius: 0 0 20px 20px;">
                            <div class="w-100 d-flex gap-3">
                                <button type="button" class="btn btn-outline-secondary flex-fill"
                                    wire:click="closeModal"
                                    style="border-radius: 12px; padding: 12px; font-weight: 600;">
                                    <i class="fas fa-times me-1"></i>Batal
                                </button>
                                <button type="button" class="btn btn-add flex-fill" wire:click="save"
                                    style="border-radius: 12px; padding: 12px; font-weight: 600;">
                                    <i
                                        class="fas fa-save me-1"></i>{{ $modalMode === 'create' ? 'Simpan' : 'Update' }}
                                    Sekolah
                                </button>
                            </div>
                        </div>
                    @else
                        <div class="modal-footer"
                            style="padding: 20px 30px 30px; border: none; background: #f8f9fa; border-radius: 0 0 20px 20px;">
                            <div class="w-100 d-flex justify-content-end">
                                <button type="button" class="btn btn-outline-secondary" wire:click="closeModal"
                                    style="border-radius: 12px; padding: 12px 24px; font-weight: 600;">
                                    <i class="fas fa-times me-1"></i>Tutup
                                </button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endif
</div>
