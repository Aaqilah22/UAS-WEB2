<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    // Nama tabel yang digunakan
    protected $table = 'users';

    // Kolom yang bisa di-insert atau di-update
    protected $allowedFields = ['username', 'useremail', 'userpassword', 'nomor_hp'];

    // Mengaktifkan penggunaan timestamp
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Fungsi untuk mendapatkan semua data pengguna
    public function getUsers()
    {
        return $this->findAll();  // Mengambil semua data dari tabel users
    }

    // Fungsi untuk mendapatkan data pengguna berdasarkan ID
    public function getUserById($id)
    {
        return $this->find($id);  // Mengambil data berdasarkan ID
    }
}
