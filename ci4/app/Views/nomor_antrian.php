<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor Antrian</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>  <!-- Menyertakan Vue.js CDN -->
</head>
<body>
    <nav class="navbar">
        <a href="<?= site_url('dashboard') ?>" class="nav-item">Dashboard</a>
        <a href="<?= site_url('form_antrian') ?>" class="nav-item">Form Antrian</a>
        <a href="<?= site_url('nomor_antrian') ?>" class="nav-item">Nomor Antrian</a>
        <a href="<?= site_url('account') ?>" class="nav-item">Account</a>
        <a href="<?= site_url('settings') ?>" class="nav-item">Settings</a>
    </nav>

    <section id="nomor-antrian">
        <div class="nomor-container">
            <div class="nomor-card">
                <div class="nomor-header">
                    <img src="<?= base_url('assets/images/Logo.png') ?>" alt="Logo" class="logo">
                    <h3>Nomor Antrian</h3>
                    <p>Nama: John Doe</p>
                    <p>Nomor HP: 0812-3456-7890</p>
                    <p>Layanan: <?= $layanan ?></p>
                </div>
                <div class="nomor-main">
                    <h1><?= $nomor_antrian ?></h1>
                    <p>Harap menunggu di ruang tunggu</p>
                </div>
            </div>
            <div class="nomor-footer">
                <p>Nomor Antrian: <?= $nomor_antrian ?> | Tanggal: <?= $tanggal ?> | Jam: <?= $jam ?></p>
                <p>Estimasi Tunggu: <?= $estimasi_tunggu ?></p>
                <p>Antrian saat ini: <?= $antrian_saat_ini ?></p>
                <p>Loket: <?= $loket ?></p>
                <small>*Harap menunggu di area tunggu sampai dipanggil</small>
            </div>
            <div class="button-group">
                <button class="btn-utama">Cetak Tiket</button>
                <button class="btn-kedua">Ambil Lagi</button>
            </div>
        </div>
    </section>
</body>
</html>
