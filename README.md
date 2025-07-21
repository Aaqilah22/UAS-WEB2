### Anggota Kelompok:

|NAMA|NIM|
|---|---|
|AAQILAH AATHIRAH SUTISNA|312310621|
|LARAS SAKTI|312310627|
|DITA AULIA|312310649 |
|HANNIFA INDAH RAHAYU|312310653|

# 📋Daftar Praktikum

| No | Judul Praktikum                 | Deskripsi Singkat                                                                      |
| -- | ------------------------------- | -------------------------------------------------------------------------------------- |
| 1  | Setup Project & Struktur Folder | Membuat struktur folder HTML, TailwindCSS, dan pemisahan file (partials, assets, dsb). |
| 2  | Halaman Login                   | Membuat halaman login untuk user admin/pengguna.                                       |
| 3  | Dashboard Antrian               | Menampilkan informasi umum dan statistik antrian.                                      |
| 4  | Form Input Antrian              | Formulir input nama, nomor HP, dan jenis layanan.                                      |
| 5  | Nomor Antrian Otomatis          | Menampilkan nomor antrian dan estimasi waktu tunggu.                                   |
| 6  | Halaman Account                 | Menampilkan data akun, profil, dan riwayat antrian.                                    |
| 7  | Halaman Settings                | Pengaturan bahasa, tema tampilan, ukuran teks, dan notifikasi.                         |
| 8  | Validasi Form & Notifikasi      | Validasi input data + notifikasi sukses/gagal.                                         |
| 9  | Filter & Sorting Data           | Filter data berdasarkan layanan dan status antrian.                                    |
| 10 | Integrasi AJAX                  | Menggunakan AJAX untuk proses input, tampil, dan update data antrian.                  |
| 11 | Uji Fungsionalitas              | Pengujian alur aplikasi: login, input antrian, tampil nomor, dan logout.               |
| 12 | Vue.js|Integrasi frontend Vue.js dengan REST API|

# 💻 Teknologi yang Digunakan
## Backend:
- PHP 8.x: Digunakan sebagai bahasa pemrograman utama di sisi server untuk menangani logika aplikasi dan proses antrian.

- CodeIgniter 4: Framework PHP berbasis arsitektur MVC (Model-View-Controller) yang mempermudah pengembangan struktur modular seperti login, input antrian, dashboard, dan pengaturan.

- MySQL / MariaDB: Sistem basis data relasional yang digunakan untuk menyimpan data antrian, pengguna, dan layanan yang tersedia.

- RESTful API (CodeIgniter ResourceController): Digunakan untuk membuat endpoint yang dapat diakses secara dinamis oleh frontend maupun alat seperti Postman, memudahkan integrasi dan pengujian proses antrian, pengambilan data, dan pengelolaan akun.

## Frontend:
- HTML5 & TailwindCSS: Untuk membuat tampilan antarmuka yang responsif, modern, dan efisien dengan sistem utility-first dari TailwindCSS.

- JavaScript (AJAX): Digunakan untuk memperbarui data antrian, pencarian, dan pagination secara real-time tanpa perlu reload halaman.
  
- Vue.js 3 (via CDN): Framework modern berbasis JavaScript untuk membangun antarmuka pengguna yang interaktif.

# 🏦 Tujuan Aplikasi Antrian Q-Bank
Aplikasi Q-Bank merupakan sistem antrian berbasis web yang dikembangkan menggunakan CodeIgniter 4, dirancang untuk mempermudah proses pengambilan nomor antrian oleh nasabah secara efisien dan terstruktur. Aplikasi ini mendukung peran pengguna (nasabah) dan admin/operator, serta dilengkapi dengan fitur-fitur seperti formulir antrian, penomoran otomatis, estimasi waktu tunggu, filter layanan, serta dashboard antrian.

Aplikasi ini juga menyediakan REST API yang memungkinkan integrasi dengan sistem frontend modern (misalnya menggunakan AJAX atau Vue.js), serta mendukung kemudahan pengujian melalui alat seperti Postman.

