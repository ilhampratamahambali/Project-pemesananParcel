<?php
namespace App\Controllers;

use App\Models\PenggunaModel;
use CodeIgniter\Controller;
use App\Models\UserModel;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function submit()
    {
        // Mendapatkan input dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cek pengguna di database
        $model = new UserModel();
        $user = $model->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Set session data
            session()->set([
                'isLoggedIn' => true,
                'username' => $user['username'],
                'akses' => $user['akses'] // Menyimpan role
            ]);

            // Arahkan pengguna berdasarkan role
            if ($user['akses'] == 'akses') {
                return redirect()->to(base_url('admin')); // Arahkan ke halaman admin
            } else {
                return redirect()->to(base_url('pemesanan')); // Arahkan ke halaman pemesanan
            }
        } else {
            return redirect()->back()->with('error', 'Username atau password salah');
        }
    }
}
?>
