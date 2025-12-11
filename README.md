# SANG GRAWA - Sistem Angkutan Gratis Siswa Bukittinggi

<p align="center">
<img src="https://img.shields.io/badge/Laravel-12-FF2D20?style=for-the-badge&logo=laravel" alt="Laravel Version">
<img src="https://img.shields.io/badge/PHP-8.3+-777BB4?style=for-the-badge&logo=php" alt="PHP Version">
<img src="https://img.shields.io/badge/Status-Development-yellow?style=for-the-badge" alt="Status">
</p>

## Tentang Sang Grawa

**SANG GRAWA** adalah singkatan dari **Program Bukittinggi Angkutan Gratis untuk Siswa**. Aplikasi ini dirancang khusus untuk mengelola sistem transportasi gratis bagi siswa di Kota Bukittinggi dengan menggunakan teknologi QR Code untuk memastikan efisiensi dan transparansi dalam penggunaan layanan angkutan umum.

## Fitur Utama

- **Sistem QR Code**: Siswa menggunakan QR code untuk naik dan turun angkutan
- **Pembatasan Harian**: Maksimal 2 kali perjalanan pagi dan 2 kali perjalanan sore per hari
- **Real-time Tracking**: Monitoring penggunaan angkutan secara real-time
- **Dashboard Driver**: Interface khusus untuk supir angkutan
- **Dashboard Admin**: Panel administrasi untuk pengelolaan sistem
- **Manajemen Siswa**: Pendaftaran dan pengelolaan data siswa
- **Laporan Harian**: Laporan penggunaan layanan harian

## Cara Kerja Sistem

### Untuk Siswa:
1. **Naik Angkutan**: Siswa menunjukkan QR code ke supir saat naik
2. **Turun Angkutan**: Siswa menunjukkan QR code ke supir saat turun
3. **Batasan Waktu**: 
   - Pagi: Maksimal 2 kali perjalanan (jam 06:00 - 08:00)
   - Sore: Maksimal 2 kali perjalanan (jam 12:01 - 18:00)

### Untuk Supir:
1. Scan QR code siswa saat naik
2. Scan QR code siswa saat turun
3. Sistem akan mencatat dan memvalidasi setiap transaksi

### Sistem Keamanan:
- **No Save System**: Tidak ada sistem penyimpanan kredit - hanya validasi harian
- **Lock Mechanism**: Setelah 2 kali perjalanan per sesi, akses akan terkunci
- **Fair Play**: Jika siswa tidak menunjukkan QR saat turun, supir yang dirugikan

## Teknologi yang Digunakan

- **Framework**: Laravel 11
- **Database**: MySQL/PostgreSQL
- **Frontend**: Blade Templates + Tailwind CSS
- **QR Code**: Laravel QR Code Generator
- **Authentication**: Laravel Sanctum
- **PDF Generator**: DomPDF

## Instalasi

1. Clone repository
```bash
git clone https://github.com/username/sang_grawa.git
cd sang_grawa
```

2. Install dependencies
```bash
composer install
npm install
```

3. Setup environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Setup database
```bash
php artisan migrate
php artisan db:seed
```

5. Build assets
```bash
npm run build
```

6. Start development server
```bash
php artisan serve
```

## Struktur Database

- **users**: Data pengguna (siswa, supir, admin)
- **students**: Data khusus siswa
- **drivers**: Data khusus supir
- **vehicles**: Data kendaraan angkutan
- **trips**: Catatan perjalanan
- **transactions**: Catatan transaksi QR scan

## Kontribusi

Kami menyambut kontribusi dari komunitas! Silakan buat issue atau pull request untuk perbaikan dan peningkatan sistem.

## Lisensi

Aplikasi ini dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT).

## Tim Pengembang

Dikembangkan untuk Program Angkutan Gratis Siswa Kota Bukittinggi.

---

*"Membangun masa depan pendidikan yang lebih baik melalui teknologi"*
