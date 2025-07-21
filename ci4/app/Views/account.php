<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun Pengguna</title>
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

    <section id="account">
        <div class="profile-card">
            <div class="profile-header">
                <img src="<?= base_url('assets/images/Account.png') ?>" alt="Profile Picture" class="profile-img">
                <h3><?= $nama ?></h3>
                <p><?= $email ?></p>
                <p><?= $nomor_hp ?></p>
            </div>
            <div class="profile-details">
                <p><strong>Antrean Terakhir:</strong> <?= $antrian_terakhir ?></p>
                <p><strong>Estimasi Waktu:</strong> <?= $estimasi_waktu ?></p>
                <p><strong>Status Antrean:</strong> <?= $status_antrian ?></p>
            </div>
            <div class="profile-actions">
                <a href="<?= site_url('account/ubah_profil') ?>" class="btn">Ubah Profil</a>
                <a href="<?= site_url('riwayat_antrian') ?>" class="btn">Lihat Riwayat Antrian</a>
                <a href="<?= site_url('logout') ?>" class="btn">Logout</a>
            </div>
        </div>
    </section>
</body>
</html>
