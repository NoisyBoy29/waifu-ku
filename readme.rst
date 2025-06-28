# waifu-ku

**waifu-ku** adalah aplikasi web sederhana untuk mengelola daftar waifu favorit Anda, dibuat menggunakan framework CodeIgniter (PHP) dengan database MySQL. Aplikasi ini memungkinkan pengguna untuk menambah, melihat, memperbarui, dan menghapus data waifu beserta fotonya.

## Fitur

- **Lihat Daftar Waifu**: Menampilkan tabel berisi kode, nama, asal anime, dan foto waifu.
- **Tambah Waifu**: Formulir untuk menambah waifu baru, termasuk upload gambar.
- **Edit Waifu**: Memperbarui data waifu yang sudah ada, termasuk mengganti foto.
- **Hapus Waifu**: Menghapus data waifu dari database.
- **Detail Waifu**: Melihat informasi lengkap beserta gambar waifu.
- **Modal Tentang Kami**: Informasi pembuat aplikasi (Naufal & Farhan, 4IA01) dapat dilihat di halaman utama.

## Teknologi yang Digunakan

- **Backend**: PHP dengan CodeIgniter
- **Frontend**: Bootstrap 4, HTML, CSS, JavaScript
- **Database**: MySQL (struktur tabel tersedia pada file `sismul-waifuku.sql`)

## Instalasi

1. **Clone repositori ini:**
   ```bash
   git clone https://github.com/NoisyBoy29/waifu-ku.git
   ```
2. **Setup Database:**
   - Import file `sismul-waifuku.sql` ke MySQL Anda.
   - Pastikan pengaturan database di `application/config/database.php` sudah sesuai (default: user `root`, tanpa password, database `sismul-waifuku`).

3. **Atur Base URL:**
   - Edit file `application/config/config.php` pada bagian `$config['base_url']` sesuai dengan alamat aplikasi Anda.

4. **Jalankan di Localhost:**
   - Pastikan web server (XAMPP/LAMPP) dan MySQL berjalan.
   - Akses aplikasi via browser ke `http://localhost/waifu-ku/`

## Struktur Direktori Penting

- `application/controllers/`: Controller utama (`Controller.php`, `Welcome.php`) untuk logika CRUD.
- `application/models/`: Model database (`M_model.php`, `M_welcome.php`).
- `application/views/`: Templat tampilan (`table.php`, `create.php`, `view.php`, `update.php`).
- `asset/`: Berisi file gambar waifu dan style CSS.

## Contoh Data Awal

Beberapa data waifu yang sudah tersedia:
- Elinalise (Mushoku Tensei)
- Kato Megumi (Saekano)
- Rias Gremory (Highschool DxD)
- Shinomiya Kaguya (Love is war)
- Yor Forger (Spy x Family)

## Lisensi

MIT License

---

> Proyek ini dibuat untuk keperluan Praktikum Sistem Multimedia 2024, Kelas 4IA01 oleh Naufal Maulana Al-Ghifari Irawan & Farhan Alba Saputra.

---

**Catatan**:  
- Untuk melihat kode lengkap, kunjungi [GitHub Repository waifu-ku](https://github.com/NoisyBoy29/waifu-ku).
- Jika ingin mengembangkan lebih lanjut, silakan fork dan modifikasi sesuai kebutuhan.
