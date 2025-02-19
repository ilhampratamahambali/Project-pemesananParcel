<?= $this->include('_partials/header') ?>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Perusahaan Parcel Lebaran</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>"> <!-- Pastikan file CSS Anda sudah ada -->
</head>
<body>
    <div class="about-us">
        <div class="container">
            <h1 class="text-center">Tentang Kami</h1>
            <div class="about-content">
                <!-- Kolom Kiri untuk Gambar -->
                <div class="about-image">
                    <img src="<?= base_url('assets/img/logoperusahaan.png') ?>" alt="Logo Perusahaan" class="img-fluid">
                </div>

                <!-- Kolom Kanan untuk Teks Profil Perusahaan -->
                <div class="about-text">
                    <h2>Profil Perusahaan</h2>
                    <p>
                        Kami adalah perusahaan yang bergerak di bidang pemesanan dan pengiriman parcel untuk Lebaran. Sejak berdiri, kami telah melayani ribuan pelanggan dengan menyediakan berbagai pilihan parcel yang berkualitas dan harga yang bersaing. Kami berkomitmen untuk memberikan layanan terbaik dengan kemudahan dalam pemesanan dan pengiriman yang cepat dan tepat waktu.
                    </p>
                    <p>
                        Dengan pengalaman lebih dari 10 tahun di industri ini, kami selalu mengutamakan kepuasan pelanggan dan kualitas produk. Kami bekerja sama dengan berbagai pemasok terpercaya untuk memastikan setiap parcel yang kami kirimkan memenuhi standar tinggi.
                    </p>
                    <p>
                        Jika Anda memiliki pertanyaan atau membutuhkan informasi lebih lanjut, jangan ragu untuk menghubungi kami melalui halaman kontak.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?= $this->include('_partials/footer') ?>
