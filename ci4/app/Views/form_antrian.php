<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Antrian</title>
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

    <section id="form-antrian">
        <h2>ANTRIAN SAAT INI</h2>
        <form action="<?= site_url('form_antrian/submit') ?>" method="post">
            <?= csrf_field() ?>

            <div class="input-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" placeholder="Nama Lengkap" required>
            </div>

            <div class="input-group">
                <label for="nomor_hp">Nomor HP</label>
                <input type="text" id="nomor_hp" name="nomor_hp" placeholder="Nomor HP" required>
            </div>

            <div class="form-group">
                    <label for="layanan">Layanan</label>
                    <select v-model="layanan" required>
                        <option value="Teller">Teller</option>
                        <option value="Customer Service">Customer Service</option>
                        <option value="Priority Banking">Priority Banking</option>
                    </select>
                </div>

            <button type="submit" class="submit-btn">Dapatkan Nomor Antrian</button>
        </form>
    </section>

    <!-- Hidden Input to hold the selected layanan -->
    <input type="hidden" id="layanan" name="layanan">

    <script>
        function selectLayanan(layanan) {
            // Set the value of the hidden input
            document.getElementById('layanan').value = layanan;

            // Optionally, add some visual feedback for which button was clicked
            document.querySelectorAll('.layanan-btn').forEach(btn => {
                btn.style.backgroundColor = ''; // Reset background color
            });

            // Highlight the selected button
            event.target.style.backgroundColor = '#6a4ae5';
        }
    </script>
</body>
</html>
