<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Account extends Controller
{
    public function index()
    {
        // Data untuk menampilkan informasi akun pengguna
        $data = [
            'nama' => 'Haikal Devandra',
            'email' => 'haikal.devandra@email.com',
            'nomor_hp' => '0812-5687-4250',
            'antrian_terakhir' => 'A102 (Teller - 30/6/2025)',
            'estimasi_waktu' => '15 Menit',
            'status_antrian' => 'Masih dalam antrian'
        ];

        return view('account', $data);
    }

    // Halaman untuk mengubah profil (form)
    public function ubah_profil()
    {
        return view('ubah_profil');
    }
}
