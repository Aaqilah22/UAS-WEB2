<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ubah Nomor Telepon</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <a href="<?= site_url('dashboard') ?>" class="nav-item">Dashboard</a>
        <a href="<?= site_url('form_antrian') ?>" class="nav-item">Form Antrian</a>
        <a href="<?= site_url('nomor_antrian') ?>" class="nav-item">Nomor Antrian</a>
        <a href="<?= site_url('account') ?>" class="nav-item">Account</a>
        <a href="<?= site_url('settings') ?>" class="nav-item">Settings</a>
    </nav>

    <!-- Form Ubah Nomor -->
    <section id="ubah-nomor">
        <h2>Ubah Nomor Telepon</h2>

        <!-- Pesan Error atau Sukses -->
        <?php if(session()->getFlashdata('error')): ?>
            <div class="error"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

        <?php if(session()->getFlashdata('success')): ?>
            <div class="success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <form action="<?= site_url('settings/simpan_nomor') ?>" method="post">
            <?= csrf_field() ?>

            <div class="input-group">
                <label for="nomor_hp">Nomor HP Baru</label>
                <input type="text" name="nomor_hp" id="nomor_hp" placeholder="Masukkan nomor HP baru" required>
            </div>

            <button type="submit" class="submit-btn">Simpan Perubahan</button>
        </form>
    </section>
</body>
</html>
