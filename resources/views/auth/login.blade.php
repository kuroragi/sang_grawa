@extends('layouts.app')

@section('title', 'Login')

@section('body-class', 'login-page')

@section('content')
    <div class="login-container">
        <!-- Left Side - Image Section -->
        <div class="col-lg-7 image-section">
            <div class="image-content">
                <h2><i class="fas fa-bus"></i> SANG GRAWA</h2>
                <p>Sistem Angkot Gratis untuk Siswa Kota Bukittinggi. Solusi digital untuk pendataan otomatis penggunaan
                    angkot gratis dengan teknologi RFID dan QR Code.</p>
            </div>
        </div>

        <!-- Right Side - Form Section -->
        <div class="col-lg-5 col-12 form-section">
            <div class="login-form">
                <!-- Brand Section -->
                <div class="brand-section">
                    <div class="brand-icon">
                        <i class="fas fa-id-card"></i>
                    </div>
                    <h1 class="brand-title">Selamat Datang</h1>
                    <p class="brand-subtitle">Silakan masuk ke akun Anda untuk melanjutkan</p>
                </div>

                <!-- Login Form -->
                <form id="loginForm" method="POST" action="#" novalidate>
                    @csrf

                    <!-- Email/Username Field -->
                    <div class="form-group">
                        <label for="email" class="form-label">
                            <i class="bi bi-envelope"></i>
                            Email atau Username
                        </label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" value="{{ old('email') }}" placeholder="Masukkan email atau username Anda"
                            required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="form-group">
                        <label for="password" class="form-label">
                            <i class="bi bi-lock"></i>
                            Password
                        </label>
                        <div class="input-group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="Masukkan password Anda" required>
                            <button type="button" class="toggle-password" onclick="togglePassword()">
                                <i class="bi bi-eye" id="toggleIcon"></i>
                            </button>
                        </div>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Form Options -->
                    <div class="form-options">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember">
                                Ingat saya
                            </label>
                        </div>
                        <a href="#" class="forgot-link">Lupa password?</a>
                    </div>

                    <!-- Login Button -->
                    <button type="submit" class="btn btn-login" id="loginBtn">
                        <i class="fas fa-sign-in-alt"></i>
                        Masuk
                    </button>

                    <!-- Divider -->
                    <div class="divider">
                        <span>atau</span>
                    </div>

                    <!-- Alternative Login Options -->
                    <div class="text-center">
                        <button type="button" class="btn btn-outline-primary w-100"
                            style="height: 45px; border-radius: 10px;">
                            <i class="fab fa-google"></i>
                            Masuk dengan Google
                        </button>
                    </div>
                </form>

                <!-- Footer -->
                <div class="footer-text">
                    <p>&copy; 2024 SANG GRAWA - Pemerintah Kota Bukittinggi</p>
                    <p>Butuh bantuan? <a href="#">Hubungi Support</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Toggle Password Visibility
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.className = 'bi bi-eye-slash';
            } else {
                passwordInput.type = 'password';
                toggleIcon.className = 'bi bi-eye';
            }
        }

        // Form Submission with Loading
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const loginBtn = document.getElementById('loginBtn');
            const originalContent = loginBtn.innerHTML;

            // Show loading state
            loginBtn.classList.add('loading');
            loginBtn.innerHTML = `
            <div class="spinner-border spinner-border-sm me-2" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            Memproses...
        `;

            // Simulate form processing (replace with actual form submission)
            setTimeout(() => {
                // Reset button state
                loginBtn.classList.remove('loading');
                loginBtn.innerHTML = originalContent;

                // Here you would normally submit the form or handle the response
                alert('Form submitted! (This is just a demo)');
            }, 2000);
        });

        // Form Validation Enhancement
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('blur', function() {
                if (this.value.trim() !== '') {
                    this.classList.add('filled');
                } else {
                    this.classList.remove('filled');
                }
            });

            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });

            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('focused');
            });
        });

        // Responsive behavior
        function handleResize() {
            const imageSection = document.querySelector('.image-section');
            if (window.innerWidth <= 991) {
                if (imageSection) {
                    imageSection.style.display = 'none';
                }
            } else {
                if (imageSection) {
                    imageSection.style.display = 'flex';
                }
            }
        }

        window.addEventListener('resize', handleResize);
        window.addEventListener('load', handleResize);
    </script>
@endpush
