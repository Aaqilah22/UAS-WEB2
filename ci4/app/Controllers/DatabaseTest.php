<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Database\Config;

class DatabaseTest extends Controller
{
    public function index()
    {
        // Mengambil instance database dari pengaturan default
        $db = \Config\Database::connect();

        // Coba menjalankan query untuk melihat apakah berhasil
        $query = $db->query('SELECT 1');
        $result = $query->getRow();

        // Menampilkan hasil query
        if ($result) {
            return 'Koneksi ke database berhasil!';
        } else {
            return 'Gagal terhubung ke database!';
        }
    }
}
