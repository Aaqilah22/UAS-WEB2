<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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

    <!-- Dashboard Content -->
    <section id="dashboard">
        <h2>ANTRIAN SAAT INI</h2>
        <div class="loket-wrapper">
            <div class="loket">
                <div class="loket-header">
                    <span>LOKET 1</span>
                    <span class="badge">Teller</span>
                </div>
                <h3><?= $loket1 ?></h3>
                <p>Sedang dilayani</p>
            </div>
            <div class="loket">
                <div class="loket-header">
                    <span>LOKET 2</span>
                    <span class="badge">CS</span>
                </div>
                <h3><?= $loket2 ?></h3>
                <p>Sedang dilayani</p>
            </div>
            <div class="loket">
                <div class="loket-header">
                    <span>LOKET 3</span>
                    <span class="badge">Priority</span>
                </div>
                <h3><?= $loket3 ?></h3>
                <p>Sedang dilayani</p>
            </div>
        </div>

        <h2>INFORMASI ANTRIAN</h2>
        <div class="info-box">
            <h5>Teller</h5>
            <p>Antrian saat ini: <?= $loket1 ?></p>
        </div>
        <div class="info-box">
            <h5>Customer Service</h5>
            <p>Antrian saat ini: <?= $loket2 ?></p>
        </div>
        <div class="info-box">
            <h5>Priority Banking</h5>
            <p>Antrian saat ini: <?= $loket3 ?></p>
        </div>

        <div class="estimasi">
            <h4>Estimasi Waktu Tunggu</h4>
            <p>Rata-rata waktu tunggu per antrian: <?= $estimated_time ?></p>
        </div>
    </section>
</body>
</html>
