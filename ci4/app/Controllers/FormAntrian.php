<?php

namespace App\Controllers;

use App\Models\QueueModel;  
use CodeIgniter\Controller;// Import QueueModel

class FormAntrian extends Controller
{
    public function index()
    {
        return view('form_antrian');  // Menampilkan halaman form antrian
    }

    public function submit()
    {
        // Ambil data dari form
        $nama = $this->request->getPost('nama');
        $nomor_hp = $this->request->getPost('nomor_hp');
        $layanan = $this->request->getPost('layanan');
        $nomor_antrian = 'AN-' . strtoupper(substr(md5(rand()), 0, 4));

        // Simulasi estimasi waktu tunggu
        $estimasi_waktu = 15;  // dalam menit

        // Ambil ID pengguna yang sedang login (misalnya dari session)
        $user_id = session()->get('user_id');  // Pastikan session ini ada

        // Insert data ke tabel antrian
        $queueModel = new QueueModel();
        $queueModel->save([
            'user_id' => $user_id,
            'nomor_antrian' => $nomor_antrian,
            'layanan' => $layanan,
            'status' => 'Menunggu',
            'estimasi_waktu' => $estimasi_waktu,
            'loket' => null
        ]);

        // Simpan nomor antrian ke session
        session()->set('nomor_antrian', $nomor_antrian);

        // Redirect ke halaman nomor antrian setelah data disimpan
        return redirect()->to('/nomor_antrian');
    }
}
