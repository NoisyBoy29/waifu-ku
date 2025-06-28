# waifu-ku

**Bahasa Indonesia | [English version below](#english-version)**

---

## Deskripsi

**waifu-ku** adalah aplikasi web sederhana untuk mengelola daftar waifu favorit Anda. Dibangun menggunakan framework CodeIgniter (PHP) dan database MySQL, aplikasi ini mendukung fitur CRUD (Create, Read, Update, Delete) untuk data waifu beserta gambarnya.

## Fitur Utama

- **Lihat Daftar Waifu:** Menampilkan tabel kode, nama, asal anime, dan foto waifu.
- **Tambah Waifu:** Form untuk menambah waifu baru, termasuk upload gambar.
- **Edit Waifu:** Memperbarui data waifu, termasuk mengganti foto.
- **Hapus Waifu:** Menghapus data waifu dan fotonya dari database.
- **Detail Waifu:** Melihat informasi lengkap waifu.
- **Tentang Kami:** Modal informasi pembuat aplikasi.

## Teknologi yang Digunakan

- **Backend:** PHP dengan CodeIgniter
- **Frontend:** Bootstrap 4, HTML, CSS, JavaScript
- **Database:** MySQL

## Cara Instalasi

1. **Clone repositori ini:**
    ```bash
    git clone https://github.com/NoisyBoy29/waifu-ku.git
    ```
2. **Setup Database:**
    - Import file `sismul-waifuku.sql` ke MySQL Anda.
    - Edit pengaturan database di `application/config/database.php` (default: user `root`, tanpa password, database `sismul-waifuku`).
3. **Atur Base URL:**
    - Edit `application/config/config.php` pada `$config['base_url']`.
4. **Jalankan di Localhost:**
    - Pastikan XAMPP/LAMPP dan MySQL berjalan.
    - Akses via browser: `http://localhost/waifu-ku/`

## Struktur Direktori Penting

- `application/controllers/` — Logika utama CRUD.
- `application/models/` — Model database.
- `application/views/` — Templat tampilan.
- `asset/` — Gambar waifu dan CSS.

## Lisensi

MIT License

> Proyek ini dibuat untuk Praktikum Sistem Multimedia 2024, Kelas 4IA01 oleh Naufal Maulana Al-Ghifari Irawan & Farhan Alba Saputra.

---

## English Version

### Description

**waifu-ku** is a simple web app for managing your favorite waifu list. Built using CodeIgniter (PHP) and MySQL database, this app supports CRUD (Create, Read, Update, Delete) features for waifu data and images.

### Main Features

- **View Waifu List:** Displays a table of waifu code, name, anime origin, and photo.
- **Add Waifu:** Form to add a new waifu, including image upload.
- **Edit Waifu:** Update waifu data and change image.
- **Delete Waifu:** Remove waifu and their photo from the database.
- **Waifu Details:** View detailed waifu information.
- **About Us:** Modal for app creator info.

### Tech Stack

- **Backend:** PHP with CodeIgniter
- **Frontend:** Bootstrap 4, HTML, CSS, JavaScript
- **Database:** MySQL

### Installation

1. **Clone this repository:**
    ```bash
    git clone https://github.com/NoisyBoy29/waifu-ku.git
    ```
2. **Database Setup:**
    - Import `sismul-waifuku.sql` into your MySQL.
    - Set your DB config in `application/config/database.php` (default: user `root`, no password, database `sismul-waifuku`).
3. **Set Base URL:**
    - Edit `$config['base_url']` in `application/config/config.php`.
4. **Run on Localhost:**
    - Start XAMPP/LAMPP and MySQL.
    - Access via browser: `http://localhost/waifu-ku/`

### Important Directory Structure

- `application/controllers/` — Main CRUD logic.
- `application/models/` — Database models.
- `application/views/` — View templates.
- `asset/` — Waifu images and CSS.

### License

MIT License

> This project was created for Sistem Multimedia Practicum 2024, Class 4IA01 by Naufal Maulana Al-Ghifari Irawan & Farhan Alba Saputra.

---

**Silakan fork dan kembangkan sesuai kebutuhan Anda! | Feel free to fork and modify as you like!**
