<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Auth extends Controller
{
    // Menampilkan halaman login
    public function login()
    {
        return view('login');
    }

    // Proses autentikasi login
    public function authenticate()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        
        // Logika autentikasi (misalnya menggunakan model atau database)
        if ($email == 'bank@gmail.com' && $password == 'bank123') {
            return redirect()->to('/dashboard');  // Jika berhasil login
        } else {
            return redirect()->back()->with('error', 'Email atau password salah');
        }
    }
}
