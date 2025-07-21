<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Settings extends Controller
{
    public function index()
    {
        // Data untuk menampilkan pengaturan pengguna
        $data = [
            'bahasa_aplikasi' => 'Indonesia',
            'mode_tampilan' => 'Sedang',
            'ukuran_teks' => 'Sedang',
            'notifikasi_email' => true,
            'notifikasi_suara' => true,
            'notifikasi_wa' => false,
            'email' => 'haikal.devandra@email.com',
        ];

        return view('settings', $data);
    }

    public function simpan_perubahan()
    {
        // Proses untuk menyimpan perubahan pengaturan
        $bahasa_aplikasi = $this->request->getPost('bahasa_aplikasi');
        $mode_tampilan = $this->request->getPost('mode_tampilan');
        $ukuran_teks = $this->request->getPost('ukuran_teks');
        $notifikasi_email = $this->request->getPost('notifikasi_email');
        $notifikasi_suara = $this->request->getPost('notifikasi_suara');
        $notifikasi_wa = $this->request->getPost('notifikasi_wa');
        
        // Logika untuk menyimpan pengaturan (misalnya di database)

        return redirect()->to('/settings')->with('success', 'Pengaturan berhasil disimpan');
    }

    public function ubah_nomor()
    {
        // Logika untuk mengubah nomor telepon pengguna
        return view('ubah_nomor');
    }
}
