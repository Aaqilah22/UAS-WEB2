<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Pengguna</title>
</head>
<body>
    <h2>Edit Pengguna</h2>
    <form action="<?= site_url('user/update/'.$user['id']) ?>" method="post">
        <?= csrf_field() ?>

        <label for="username">Nama Pengguna</label>
        <input type="text" name="username" id="username" value="<?= old('username', $user['username']) ?>" required><br>

        <label for="useremail">Email</label>
        <input type="email" name="useremail" id="useremail" value="<?= old('useremail', $user['useremail']) ?>" required><br>

        <label for="userpassword">Password</label>
        <input type="password" name="userpassword" id="userpassword"><br>

        <label for="nomor_hp">Nomor HP</label>
        <input type="text" name="nomor_hp" id="nomor_hp" value="<?= old('nomor_hp', $user['nomor_hp']) ?>" required><br>

        <button type="submit">Update Pengguna</button>
    </form>
</body>
</html>
