<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <nav class="navbar">
        <a href="<?= site_url('dashboard') ?>" class="nav-item">Dashboard</a>
        <a href="<?= site_url('form_antrian') ?>" class="nav-item">Form Antrian</a>
        <a href="<?= site_url('nomor_antrian') ?>" class="nav-item">Nomor Antrian</a>
        <a href="<?= site_url('account') ?>" class="nav-item">Account</a>
        <a href="<?= site_url('settings') ?>" class="nav-item">Settings</a>
    </nav>

    <section id="settings">
        <form action="<?= site_url('settings/simpan_perubahan') ?>" method="post">
            <?= csrf_field() ?>

            <h2>Pengaturan Aplikasi</h2>

            <div class="input-group">
                <label for="bahasa_aplikasi">Bahasa Aplikasi</label>
                <select name="bahasa_aplikasi" id="bahasa_aplikasi">
                    <option value="Indonesia" <?= $bahasa_aplikasi == 'Indonesia' ? 'selected' : '' ?>>Indonesia</option>
                    <option value="Inggris" <?= $bahasa_aplikasi == 'Inggris' ? 'selected' : '' ?>>Inggris</option>
                </select>
            </div>

            <div class="input-group">
                <label for="mode_tampilan">Mode Tampilan</label>
                <select name="mode_tampilan" id="mode_tampilan">
                    <option value="Sedang" <?= $mode_tampilan == 'Sedang' ? 'selected' : '' ?>>Sedang</option>
                    <option value="Gelap" <?= $mode_tampilan == 'Gelap' ? 'selected' : '' ?>>Gelap</option>
                    <option value="Terang" <?= $mode_tampilan == 'Terang' ? 'selected' : '' ?>>Terang</option>
                </select>
            </div>

            <div class="input-group">
                <label for="ukuran_teks">Ukuran Teks</label>
                <select name="ukuran_teks" id="ukuran_teks">
                    <option value="Sedang" <?= $ukuran_teks == 'Sedang' ? 'selected' : '' ?>>Sedang</option>
                    <option value="Kecil" <?= $ukuran_teks == 'Kecil' ? 'selected' : '' ?>>Kecil</option>
                    <option value="Besar" <?= $ukuran_teks == 'Besar' ? 'selected' : '' ?>>Besar</option>
                </select>
            </div>

            <h3>Pengaturan Notifikasi</h3>

            <div class="input-group">
                <label for="notifikasi_email">Kirim email saat nomor antrian mendekati giliran</label>
                <input type="checkbox" name="notifikasi_email" <?= $notifikasi_email ? 'checked' : '' ?>>
            </div>

            <div class="input-group">
                <label for="notifikasi_suara">Kirim suara notifikasi di halaman</label>
                <input type="checkbox" name="notifikasi_suara" <?= $notifikasi_suara ? 'checked' : '' ?>>
            </div>

            <div class="input-group">
                <label for="notifikasi_wa">Notifikasi WhatsApp (segera hadir)</label>
                <input type="checkbox" name="notifikasi_wa" <?= $notifikasi_wa ? 'checked' : '' ?>>
            </div>

            <h3>Keamanan Akun</h3>
            <p><?= $email ?></p>
            <a href="<?= site_url('settings/ubah_nomor') ?>" class="btn">Ubah Nomor</a>

            <div class="button-group">
                <button type="submit" class="submit-btn">Simpan Perubahan</button>
                <button type="reset" class="reset-btn">Reset Semua</button>
            </div>
        </form>
    </section>
</body>
</html>
