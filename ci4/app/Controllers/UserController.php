<?php

namespace App\Controllers;

use App\Models\UserModel;  // Import UserModel
use CodeIgniter\Controller;

class UserController extends Controller
{
    // Menampilkan daftar pengguna
    public function index()
    {
        // Membuat instance dari UserModel
        $userModel = new UserModel();
        
        // Mengambil semua data pengguna
        $data['users'] = $userModel->findAll();  // Ambil semua data pengguna

        // Mengirimkan data pengguna ke view 'user_list'
        return view('user_list', $data);
    }

    // Menampilkan form untuk menambah pengguna baru
    public function create()
    {
        // Menampilkan form untuk tambah pengguna
        return view('user_create');
    }

    // Menyimpan pengguna baru
    public function store()
    {
        // Membuat instance dari UserModel
        $userModel = new UserModel();

        // Validasi input dari form
        if (!$this->validate([
            'username' => 'required|string|min_length[3]',
            'useremail' => 'required|valid_email',
            'userpassword' => 'required|string|min_length[6]',
            'nomor_hp' => 'required|string|max_length[20]',
        ])) {
            return redirect()->back()->withInput();
        }

        // Ambil data dari form dan simpan ke database
        $data = [
            'username' => $this->request->getPost('username'),
            'useremail' => $this->request->getPost('useremail'),
            'userpassword' => password_hash($this->request->getPost('userpassword'), PASSWORD_DEFAULT),  // Simpan password dalam bentuk hash
            'nomor_hp' => $this->request->getPost('nomor_hp')
        ];

        // Simpan pengguna baru ke dalam tabel users
        $userModel->save($data);

        // Redirect ke halaman daftar pengguna setelah data disimpan
        return redirect()->to('/user')->with('success', 'Pengguna berhasil ditambahkan');
    }

    // Menampilkan form untuk mengedit data pengguna
    public function edit($id)
    {
        $userModel = new UserModel();
        
        // Mengambil data pengguna berdasarkan ID
        $data['user'] = $userModel->find($id);

        // Jika pengguna tidak ditemukan, tampilkan error
        if (!$data['user']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Pengguna tidak ditemukan!");
        }

        // Menampilkan form edit dengan data pengguna
        return view('user_edit', $data);
    }

    // Menyimpan perubahan data pengguna
    public function update($id)
    {
        $userModel = new UserModel();

        // Validasi input dari form
        if (!$this->validate([
            'username' => 'required|string|min_length[3]',
            'useremail' => 'required|valid_email',
            'userpassword' => 'required|string|min_length[6]',
            'nomor_hp' => 'required|string|max_length[20]',
        ])) {
            return redirect()->back()->withInput();
        }

        // Ambil data dari form dan update ke database
        $data = [
            'username' => $this->request->getPost('username'),
            'useremail' => $this->request->getPost('useremail'),
            'userpassword' => password_hash($this->request->getPost('userpassword'), PASSWORD_DEFAULT),  // Simpan password dalam bentuk hash
            'nomor_hp' => $this->request->getPost('nomor_hp')
        ];

        // Update data pengguna di tabel users berdasarkan ID
        $userModel->update($id, $data);

        // Redirect setelah data diperbarui
        return redirect()->to('/user')->with('success', 'Data pengguna berhasil diperbarui');
    }

    // Menghapus data pengguna
    public function delete($id)
    {
        $userModel = new UserModel();
        
        // Hapus data pengguna berdasarkan ID
        $userModel->delete($id);

        // Redirect setelah data dihapus
        return redirect()->to('/user')->with('success', 'Data pengguna berhasil dihapus');
    }
}
