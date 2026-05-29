# Proyek UTS

Ini adalah repositori untuk tugas Ujian Tengah Semester (UTS), yang dibangun menggunakan framework PHP (Laravel).

## 1. Panduan Instalasi

Ikuti langkah-langkah di bawah ini untuk menyiapkan dan menjalankan aplikasi di lingkungan pengembangan lokal Anda:

1. **Clone repositori ini:**
   ```bash
   git clone <url-repositori>
   cd uts
   ```

2. **Instal dependensi project:**
   Pastikan Anda sudah menginstal Composer dan jalankan perintah:
   ```bash
   composer install
   ```

3. **Konfigurasi Environment:**
   Salin file konfigurasi contoh dan buat file `.env` baru:
   ```bash
   cp .env.example .env
   ```
   Buka file `.env` lalu sesuaikan koneksi database (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`) dengan database lokal Anda.

4. **Generate Application Key:**
   ```bash
   php artisan key:generate
   ```

5. **Jalankan Migrasi Database:**
   Perintah ini akan men-generate tabel ke dalam database:
   ```bash
   php artisan migrate
   ```

6. **Jalankan Server Lokal:**
   ```bash
   php artisan serve
   ```
   Aplikasi akan dapat diakses melalui browser di alamat `http://localhost:8000`.

---

## 2. Contoh Penggunaan

Berikut adalah panduan singkat penggunaan setelah aplikasi berjalan:

1. Buka browser dan arahkan ke alamat `http://localhost:8000`.
2. Masuk ke halaman **Register / Login** untuk membuat dan masuk ke akun pengguna.
3. Masuk ke menu **Profil** untuk menambahkan atau memperbarui profil pribadi Anda.
4. Klik tombol **Simpan** untuk memastikan data tersebut tersimpan ke dalam database aplikasi.

---

## 3. Panduan Kontribusi

Kami sangat terbuka untuk kontribusi pengembangan agar proyek ini menjadi lebih baik:

1. Lakukan **Fork** pada repositori ini.
2. Buat *branch* khusus untuk pembaruan fitur Anda:  
   ```bash
   git checkout -b fitur/NamaFiturAnda
   ```
3. Lakukan **Commit** pada perubahan yang Anda buat:  
   ```bash
   git commit -m 'Menambahkan fitur baru untuk profil'
   ```
4. **Push** ke *branch* repositori Anda:  
   ```bash
   git push origin fitur/NamaFiturAnda
   ```
5. Buka **Pull Request (PR)** pada repositori utama untuk ditinjau.

---

## 4. Informasi Lisensi

Proyek ini dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT). Anda bebas untuk menggunakan, menyalin, memodifikasi, dan mendistribusikan perangkat lunak ini dengan menyertakan pemberitahuan hak cipta asli.