<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pengguna</title>
</head>
<body>
    <h2>Tambah Pengguna</h2>
    <form action="<?= site_url('user/store') ?>" method="post">
        <?= csrf_field() ?>

        <label for="username">Nama Pengguna</label>
        <input type="text" name="username" id="username" value="<?= old('username') ?>" required><br>

        <label for="useremail">Email</label>
        <input type="email" name="useremail" id="useremail" value="<?= old('useremail') ?>" required><br>

        <label for="userpassword">Password</label>
        <input type="password" name="userpassword" id="userpassword" required><br>

        <label for="nomor_hp">Nomor HP</label>
        <input type="text" name="nomor_hp" id="nomor_hp" value="<?= old('nomor_hp') ?>" required><br>

        <button type="submit">Simpan Pengguna</button>
    </form>
</body>
</html>
