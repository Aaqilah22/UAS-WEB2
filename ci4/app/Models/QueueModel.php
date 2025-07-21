<?php

namespace App\Models;

use CodeIgniter\Model;

class QueueModel extends Model
{
    // Nama tabel
    protected $table = 'queues';

    // Kolom yang bisa di-insert atau di-update
    protected $allowedFields = ['user_id', 'nomor_antrian', 'layanan', 'status', 'estimasi_waktu', 'loket'];

    // Opsi untuk menangani waktu pembuatan dan pembaruan data
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Mendefinisikan validasi untuk inputan
    protected $validationRules = [
        'user_id' => 'required|integer',
        'nomor_antrian' => 'required|string',
        'layanan' => 'required|string',
        'status' => 'required|string',
        'estimasi_waktu' => 'required|integer',
        'loket' => 'permit_empty|string'
    ];

    protected $validationMessages = [
        'user_id' => [
            'required' => 'User ID harus diisi',
            'integer' => 'User ID harus berupa angka',
        ],
        'nomor_antrian' => [
            'required' => 'Nomor antrian harus diisi',
            'string' => 'Nomor antrian harus berupa string',
        ],
        'layanan' => [
            'required' => 'Layanan harus dipilih',
            'string' => 'Layanan harus berupa string',
        ],
        'status' => [
            'required' => 'Status antrian harus diisi',
            'string' => 'Status antrian harus berupa string',
        ],
        'estimasi_waktu' => [
            'required' => 'Estimasi waktu harus diisi',
            'integer' => 'Estimasi waktu harus berupa angka',
        ],
    ];

    // Fungsi untuk mendapatkan nomor antrian terakhir berdasarkan layanan
    public function getLastQueueByLayanan($layanan)
    {
        return $this->where('layanan', $layanan)
                    ->orderBy('id', 'DESC')
                    ->first();
    }

    // Fungsi untuk menyimpan antrian
    public function createQueue($data)
    {
        return $this->save($data);  // Menyimpan data antrian ke database
    }
}
