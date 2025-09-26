# SIMKO - Sistem Informasi Manajemen Keanggotaan & Organisasi

SIMKO adalah aplikasi berbasis **Laravel** untuk mengelola keanggotaan organisasi, event, dan berita dengan sistem multi-role (Admin, User, dan Pengunjung).  
Aplikasi ini dibuat untuk memudahkan proses pendaftaran, verifikasi anggota, dan penyebaran informasi organisasi.

---

## 🚀 Fitur Utama

### 👑 Admin
- Manajemen keanggotaan (CRUD anggota).
- Verifikasi pendaftaran anggota baru.
- Mengubah status anggota: `pending → proses → terverifikasi`.
- Upload & kelola informasi event/kompetisi.
- Kelola berita organisasi.
- Kelola kesan & pesan dari pengunjung.

### 👤 User / Anggota
- Registrasi calon anggota baru.
- Login setelah diverifikasi admin.
- Melengkapi data profil pribadi.
- Melihat status pendaftaran & keanggotaan.
- Mengakses info event & berita terbaru.

### 👥 Pengunjung
- Melihat daftar anggota terverifikasi.
- Pencarian data keanggotaan.
- Melihat berita & event organisasi.
- Mengirim kesan & pesan kepada admin.

---

## ⚙️ Tech Stack
- **Backend:** Laravel 10
- **Database:** MySQL / MariaDB (phpMyAdmin)
- **Frontend:** Blade Template + Bootstrap
- **Authentication:** Laravel Auth (Login, Register, Role-based Access)

---

## 📌 Instalasi

1. Clone repository:
   ```bash
   git clone https://github.com/username/simora.git
   cd simora

2.Install dependencies:
<pre> ```bash 
composer install
npm install && npm run dev```</pre>

3. Copy file .env.example menjadi .env lalu atur database:
<pre> ``` env 
DB_DATABASE=simora
DB_USERNAME=root
DB_PASSWORD=
```</pre>
4. Generate Key
 <pre> ```bash 
   php artisan key:generate```</pre>
5. Jalankan migrasi database:
<pre> ```bash 
   php artisan migrate```</pre>

6.jalankan Serve
<pre> ```bash 
   php artisan serve```</pre>




