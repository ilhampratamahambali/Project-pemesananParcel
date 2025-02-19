<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'pengguna'; // Nama tabel pengguna
    protected $primaryKey = 'id_pengguna'; // Primary key sesuai dengan nama kolom di database
    protected $allowedFields = ['nama_pengguna', 'no_hp', 'alamat', 'username', 'password', 'akses', 'created_at']; // Kolom yang diperbolehkan
    protected $useTimestamps = false; // Karena kolom created_at sudah ada di database
    protected $dateFormat = 'datetime'; // Format tanggal mengikuti format datetime di database
}
