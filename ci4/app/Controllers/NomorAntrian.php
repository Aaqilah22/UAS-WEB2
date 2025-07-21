<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class NomorAntrian extends Controller
{
    public function index()
    {
        // Data untuk nomor antrian yang diambil dari form sebelumnya
        $data = [
            'layanan' => 'Teller',
            'nomor_antrian' => 'A102',
            'tanggal' => date('d/m/Y'),
            'jam' => date('H:i'),
            'estimasi_tunggu' => '15 menit',
            'antrian_saat_ini' => '12 orang',
            'loket' => 'LOKET 3'
        ];

        return view('nomor_antrian', $data);
    }
}
