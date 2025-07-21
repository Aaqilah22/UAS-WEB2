<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Profil</title>
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

    <section id="ubah-profil">
        <h2>Ubah Profil</h2>
        <form action="<?= site_url('account/submit_ubah_profil') ?>" method="post">
            <?= csrf_field() ?>

            <div class="input-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= $nama ?>" required>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" value="<?= $email ?>" required>
            </div>

            <div class="input-group">
                <label for="nomor_hp">Nomor HP</label>
                <input type="text" id="nomor_hp" name="nomor_hp" placeholder="Nomor HP" value="<?= $nomor_hp ?>" required>
            </div>

            <button type="submit" class="submit-btn">Simpan Perubahan</button>
        </form>
    </section>
</body>
</html>
