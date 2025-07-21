<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        // Data untuk menampilkan informasi antrian saat ini
        $data = [
            'loket1' => 'A101',
            'loket2' => 'B205',
            'loket3' => 'P001',
            'estimated_time' => '5-7 menit'
        ];

        return view('dashboard', $data);
    }
}
