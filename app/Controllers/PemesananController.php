<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class PemesananController extends Controller
{
    public function pesan($id_kategori)
    {
        // Cek apakah pengguna sudah login
        if (!session()->get('isLoggedIn')) {
            // Jika belum login, tampilkan pesan dan arahkan ke halaman login menggunakan JavaScript
            return $this->response->setBody('<script>
                alert("Anda harus login terlebih dahulu");
                window.location.href = "' . base_url('login') . '";
            </script>');
        }

        // Cek apakah user adalah admin atau user
        $akses = session()->get('akses'); // Ambil akses pengguna (admin/user)
        
        if ($akses == 'admin') {
            // Jika admin, arahkan ke halaman admin
            return $this->response->setJSON([
                'success' => true,
                'redirect' => base_url('admin/dashboard')
            ]);
        }

        // Jika user biasa, lanjutkan pemesanan
        return $this->response->setJSON([
            'success' => true,
            'redirect' => base_url('pemesanan/konfirmasi/' . $id_kategori)
        ]);
    }
}
