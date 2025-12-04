# Sistem Angkot Gratis untuk Siswa (SANG GRAWA) – Kota Bukittinggi

Proyek ini adalah sistem digital untuk mendukung program unggulan Wali Kota Bukittinggi yaitu **"Angkot Gratis untuk Siswa"**. Sistem ini dirancang untuk melakukan pendataan otomatis ketika siswa naik atau turun angkot menggunakan **RFID** atau **Barcode Card** sesuai kebijakan yang ditetapkan.

---

## 🎯 Tujuan Sistem

* Mempermudah pendataan siswa pengguna angkot gratis.
* Mengurangi manipulasi atau kesalahan input oleh supir.
* Mencatat data penggunaan angkot oleh siswa secara otomatis, cepat, dan akurat.
* Memberikan laporan yang valid kepada pemerintah kota mengenai penggunaan layanan.
* **Mengelola pembayaran angkot oleh Pemerintah Kota Bukittinggi** dengan sistem pelaporan yang akurat dan transparan.

---

## 🧩 Alur Kerja (Flow Kerja)

### Alur Kerja Siswa & Supir

1. Siswa naik angkot.
2. Supir melakukan **scan barcode** atau siswa **tap kartu RFID**.
3. Angkot berjalan sesuai trayek.
4. Siswa sampai di tujuan.
5. Siswa turun.
6. Supir melakukan **scan barcode** atau siswa **tap kartu RFID**.
7. Data tercatat, siswa pergi.

### Alur Kerja Sistem

1. Sistem membaca input kartu (RFID atau barcode).
2. Sistem melakukan validasi kartu dan siswa.
3. Sistem mencatat data siswa, angkot, supir, trayek, waktu, dan lokasi (opsional GPS).
4. Sistem mengembalikan hasil input kepada supir (berhasil/gagal).
5. Sistem menyimpan log dan transaksi.

---

## 📋 Kebijakan & Aturan Penggunaan

### **Sistem Pembayaran**

* **Pembayaran angkot ditanggung sepenuhnya oleh Pemerintah Kota Bukittinggi**.
* Sistem mencatat setiap transaksi untuk pelaporan keuangan yang akurat.
* Laporan pembayaran harian/bulanan diserahkan kepada Bagian Keuangan Pemkot.

### **Jadwal Operasional Angkot Gratis**

* **Pagi:** 06:30 - 08:00 WIB (maksimal 2 kali tap: naik dan turun)
* **Sore:** 15:00 - 18:00 WIB (maksimal 2 kali tap: naik dan turun)
* Di luar jam tersebut, sistem **tidak menerima** transaksi angkot gratis.

### **Aturan Penggunaan Kartu**

* **Tidak ada sistem tabungan** - setiap sesi (pagi/sore) berdiri sendiri.
* Contoh: Jika siswa hanya tap 1 kali di pagi hari, sisa tap **tidak bisa** digunakan di sore hari.
* Setiap sesi pagi dan sore, siswa mendapat **maksimal 2 kali tap** (naik-turun).
* Setelah 2 kali tap dalam satu sesi, kartu akan **ditolak** hingga sesi berikutnya.

---

## 🗃️ Desain Database

Berikut daftar tabel yang akan digunakan beserta fungsinya.

### **1. user**

* Menyimpan akun login untuk admin, operator, sekolah, dan supir.

### **2. user_info**

* Menyimpan detail user seperti NIS/NIP, sekolah, role, alamat, dan data lainnya.

### **3. sekolah**

* Menyimpan daftar sekolah yang ikut program angkot gratis.

### **4. pt_angkot**

* Menyimpan data perusahaan trayek angkot.

### **5. angkot**

* Menyimpan data unit angkot (nomor kendaraan, plat, kapasitas, dll.).

### **6. trayek**

* Menyimpan data trayek angkot, rute, dan perusahaan terkait.

### **7. supir**

* Menyimpan data supir yang mengoperasikan angkot.

### **8. nilai_tap** (opsional)

* Menyimpan nilai poin atau harga nominal per tap untuk audit.

### **9. transaksi_tap** (tambahan wajib)

* Menyimpan setiap transaksi scan/tap yang dilakukan supir.

### **10. kartu** (tambahan wajib)

* Menyimpan data kartu siswa: RFID UID / Barcode ID.

### **11. log_aktivitas** (opsional)

* Menyimpan riwayat aktivitas sistem.

### **12. pembayaran_pemkot** (tambahan wajib)

* Menyimpan data pembayaran yang harus dibayar Pemkot kepada PT Angkot.
* Berisi akumulasi transaksi per angkot/trayek per periode.

### **13. jadwal_operasional** (tambahan wajib)

* Menyimpan aturan waktu operasional angkot gratis (pagi & sore).
* Validasi sistem untuk menolak transaksi di luar jam operasional.

---

## 🔧 Fitur Utama Sistem

### **Sisi Supir / Angkot**

* Scan barcode atau RFID.
* **Validasi waktu operasional** (pagi: 06:30-08:00, sore: 15:00-18:00).
* **Validasi kuota tap** (maksimal 2x per sesi per siswa).
* Validasi kartu dan status siswa.
* Notifikasi berhasil/gagal dengan alasan spesifik.
* Menampilkan nama siswa & sekolah (opsional).
* Auto-store transaksi dengan timestamp lengkap.

### **Sisi Admin / Operator**

* CRUD sekolah.
* CRUD PT Angkot.
* CRUD angkot.
* CRUD trayek.
* CRUD driver.
* Manajemen siswa.
* Manajemen kartu (barcode / RFID).
* **Manajemen jadwal operasional** (pagi & sore).
* Laporan harian, mingguan, bulanan.
* **Laporan pembayaran untuk Pemkot** (akumulasi biaya per PT Angkot).
* **Laporan penggunaan per sesi** (pagi/sore).
* Monitoring real-time (opsional GPS).
* **Dashboard validasi transaksi** (berhasil/ditolak dengan alasan).

### **Sisi Sekolah**

* Melihat rekap siswa menggunakan angkot.
* Mengelola data siswa.

---

## 📌 Teknologi yang Digunakan

* **Backend:** Laravel 12
* **Frontend:** Blade / Livewire 3 (jika SPA ringan)
* **Database:** MariaDB
* **Authentikasi:** Spatie
* **Hardware:** RFID Reader / Barcode Scanner (dari handphone)
* **Report:** Dompdf
* **Tools:** kuroragi/general-helper
* **Logger:** kuroragi/general-helper/Log
* **DB Management:** DB Transaction

---

## 📁 Struktur Proyek (Singkat)

* `/app/Models` → Model data
* `/app/Livewire` → Komponen UI
* `/database/migrations` → Struktur tabel
* `/resources/views` → Tampilan
* `/routes/web.php` → Routing aplikasi

---

## 🗒️ Task Breakdown (Apa Saja yang Akan Dikerjakan)

### **1. Persiapan Arsitektur Sistem**

* Merancang ERD dan flow.
* Menentukan modul aplikasi.

### **2. Pembuatan Database**

* Membuat migrations.
* Merancang relasi tabel.

### **3. Modul Master Data**

* Sekolah
* PT Angkot
* Angkot
* Trayek
* Supir
* Siswa & Kartu

### **4. Modul Transaksi Tap**

* Endpoint untuk menerima input RFID/barcode.
* **Validasi waktu operasional** (cek jam pagi/sore).
* **Validasi kuota tap** (maksimal 2x per sesi per siswa).
* Validasi siswa dan status kartu.
* Pencatatan transaksi ke database dengan timestamp.
* Interface supir dengan feedback yang jelas.
* **Sistem reject** untuk transaksi di luar aturan.

### **5. Role & Permission**

* Admin
* Operator
* Sekolah
* Supir

### **6. Laporan & Monitoring**

* Laporan transaksi harian/bulanan.
* **Laporan pembayaran untuk Pemkot** (total biaya per PT Angkot).
* Jumlah siswa per sekolah.
* Jumlah transaksi per angkot per sesi (pagi/sore).
* Akumulasi total per trayek.
* **Laporan penggunaan per jam operasional**.
* **Dashboard real-time** untuk monitoring transaksi.

### **7. Testing & Validasi**

* Testing hardware RFID & barcode.
* Integrasi UI & API.
* User acceptance test.

### **8. Deployment**

* Persiapan server.
* Setting domain internal/eksternal.
* Setup cron (opsional reporting).

---

## 🚀 Hasil Akhir yang Diharapkan

* Sistem berjalan otomatis dan stabil dengan validasi waktu yang ketat.
* Dataset valid untuk audit pemerintah kota dan pelaporan keuangan.
* **Transparansi pembayaran** dari Pemkot kepada PT Angkot.
* Mempermudah supir tanpa beban input dengan feedback yang jelas.
* Mempermudah monitoring program angkot gratis sesuai jadwal operasional.
* **Mencegah penyalahgunaan** sistem di luar jam yang ditentukan.
* **Pelaporan akurat** untuk pertanggungjawaban anggaran Pemkot.

---

## 
