<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <link rel="stylesheet" href="<?= base_url('css/style1.css') ?>">
      <link rel="shortcut icon" type="image/png" href="/logoperusahaan.png">
</head>
<body>
    <!-- Form Login -->
    <div class="form-container" id="login-container">
        <form id="login-form">
            <h2><center>FORM LOGIN</center></h2>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan Username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
            
            <button type="submit">Login</button>
            <p>Belum punya akun? <a href="#" onclick="showRegister()">Daftar</a></p>
            <a href="<?= base_url('/') ?>" class="btn-back">Back</a>
        </form>
    </div>

    <!-- Form Register -->
    <div class="form-container hidden" id="register-container">
        <form id="register-form">
            <h2><center>FORM REGISTER</center></h2>
            <label for="nama_pengguna">Nama Pengguna</label>
            <input type="text" id="nama_pengguna" name="nama_pengguna" placeholder="Masukkan Nama" required>
            
            <label for="no_hp">No. HP</label>
            <input type="text" id="no_hp" name="no_hp" placeholder="Masukkan Nomor HP" required>
            
            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat" placeholder="Masukkan Alamat" required>
            
            <label for="username_register">Username</label>
            <input type="text" id="username_register" name="username_register" placeholder="Buat Username" required>
            
            <label for="password_register">Password</label>
            <input type="password" id="password_register" name="password_register" placeholder="Buat Password" required>
            
            <button type="submit">Register</button>
            <p>Sudah punya akun? <a href="#" onclick="showLogin()">Login</a></p>
        </form>
    </div>

    <script>
        // JavaScript untuk switch form
        function showRegister() {
            document.getElementById('login-container').classList.add('hidden');
            document.getElementById('register-container').classList.remove('hidden');
        }
        function showLogin() {
            document.getElementById('register-container').classList.add('hidden');
            document.getElementById('login-container').classList.remove('hidden');
        }
    </script>
</body>
</html>
