@extends('layouts.app')

@section('title', 'Coming Soon')

@section('body-class', 'placeholder-layout')

@section('content')
    <!-- Coming Soon Hero Section -->
    <div class="page-hero">
        <div class="hero-particles"></div>
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">
                        <div class="hero-badge">
                            <i class="fas fa-construction"></i>
                            <span>Under Development</span>
                        </div>
                        <h1 class="hero-title">Fitur Segera Hadir</h1>
                        <p class="hero-subtitle">Halaman ini sedang dalam tahap pengembangan dan akan segera tersedia untuk
                            meningkatkan pengalaman Anda dalam menggunakan sistem SANG GRAWA.</p>

                        <div class="mt-4">
                            <a href="{{ route('dashboard') }}" class="btn btn-add me-3">
                                <i class="fas fa-home"></i>
                                Kembali ke Dashboard
                            </a>
                            <a href="{{ route('schools.index') }}" class="btn btn-outline-light">
                                <i class="fas fa-school"></i>
                                Lihat Data Sekolah
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-4">
        <!-- Development Progress Cards -->
        <div class="row g-4 mb-5" data-aos="fade-up" data-aos-duration="800">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="analytics-card card-primary">
                    <div class="card-gradient"></div>
                    <div class="card-content">
                        <div class="card-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="card-info">
                            <h3 class="counter" data-target="75">0</h3>
                            <p>Progress Development</p>
                            <div class="trend up">
                                <i class="fas fa-arrow-up"></i>
                                <span>+15% minggu ini</span>
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
                            <h3 class="counter" data-target="12">0</h3>
                            <p>Fitur Selesai</p>
                            <div class="trend up">
                                <i class="fas fa-arrow-up"></i>
                                <span>Dashboard & Schools</span>
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
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="card-info">
                            <h3 class="counter" data-target="8">0</h3>
                            <p>Sedang Dikembangkan</p>
                            <div class="trend up">
                                <i class="fas fa-hammer"></i>
                                <span>In Progress</span>
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
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="card-info">
                            <h3 class="counter" data-target="30">0</h3>
                            <p>Target Hari</p>
                            <div class="trend up">
                                <i class="fas fa-rocket"></i>
                                <span>Coming Soon</span>
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

        <!-- Roadmap Section -->
        <div class="data-table-card" data-aos="fade-up">
            <div class="table-header">
                <div class="table-title">
                    <h3><i class="fas fa-road"></i> Roadmap Pengembangan</h3>
                    <p>Rencana pengembangan fitur-fitur SANG GRAWA ke depannya</p>
                </div>
                <div class="table-actions">
                    <button class="btn-export" onclick="showToast('Roadmap akan segera dapat diexport', 'info')">
                        <i class="fas fa-download"></i> Export
                    </button>
                </div>
            </div>

            <div class="table-content">
                <table class="table data-table">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="25%">Fitur</th>
                            <th width="40%">Deskripsi</th>
                            <th width="15%">Status</th>
                            <th width="15%">Target</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-row">
                            <td>
                                <div class="row-number">1</div>
                            </td>
                            <td>
                                <div class="info-cell">
                                    <div class="item-avatar">
                                        <img src="https://via.placeholder.com/50x50/27ae60/ffffff?text=OK" alt="Dashboard">
                                    </div>
                                    <div class="item-details">
                                        <div class="item-name">Dashboard</div>
                                        <div class="item-address">Halaman utama sistem</div>
                                    </div>
                                </div>
                            </td>
                            <td>Dashboard dengan statistik dan overview sistem</td>
                            <td><span class="status-badge active">Selesai</span></td>
                            <td>Dec 2025</td>
                        </tr>

                        <tr class="table-row">
                            <td>
                                <div class="row-number">2</div>
                            </td>
                            <td>
                                <div class="info-cell">
                                    <div class="item-avatar">
                                        <img src="https://via.placeholder.com/50x50/27ae60/ffffff?text=OK" alt="Schools">
                                    </div>
                                    <div class="item-details">
                                        <div class="item-name">Data Sekolah</div>
                                        <div class="item-address">Master data sekolah</div>
                                    </div>
                                </div>
                            </td>
                            <td>Manajemen data sekolah dengan filter dan search</td>
                            <td><span class="status-badge active">Selesai</span></td>
                            <td>Dec 2025</td>
                        </tr>

                        <tr class="table-row">
                            <td>
                                <div class="row-number">3</div>
                            </td>
                            <td>
                                <div class="info-cell">
                                    <div class="item-avatar">
                                        <img src="https://via.placeholder.com/50x50/f39c12/ffffff?text=DEV"
                                            alt="Companies">
                                    </div>
                                    <div class="item-details">
                                        <div class="item-name">PT Angkot</div>
                                        <div class="item-address">Data perusahaan angkot</div>
                                    </div>
                                </div>
                            </td>
                            <td>Master data perusahaan angkutan kota</td>
                            <td><span class="status-badge inactive">Development</span></td>
                            <td>Jan 2025</td>
                        </tr>

                        <tr class="table-row">
                            <td>
                                <div class="row-number">4</div>
                            </td>
                            <td>
                                <div class="info-cell">
                                    <div class="item-avatar">
                                        <img src="https://via.placeholder.com/50x50/f39c12/ffffff?text=DEV"
                                            alt="Vehicles">
                                    </div>
                                    <div class="item-details">
                                        <div class="item-name">Data Angkot</div>
                                        <div class="item-address">Master kendaraan</div>
                                    </div>
                                </div>
                            </td>
                            <td>Manajemen data kendaraan angkutan umum</td>
                            <td><span class="status-badge inactive">Development</span></td>
                            <td>Jan 2025</td>
                        </tr>

                        <tr class="table-row">
                            <td>
                                <div class="row-number">5</div>
                            </td>
                            <td>
                                <div class="info-cell">
                                    <div class="item-avatar">
                                        <img src="https://via.placeholder.com/50x50/f39c12/ffffff?text=DEV"
                                            alt="Students">
                                    </div>
                                    <div class="item-details">
                                        <div class="item-name">Data Siswa</div>
                                        <div class="item-address">Database siswa</div>
                                    </div>
                                </div>
                            </td>
                            <td>Manajemen data siswa dan kartu elektronik</td>
                            <td><span class="status-badge inactive">Planning</span></td>
                            <td>Feb 2025</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Placeholder page loaded with universal components');
        });
    </script>
@endpush
