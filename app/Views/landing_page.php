<?= $this->include('_partials/header') ?>

<section class="categories">
    <div class="container">
        <h2>Kategori Parcel</h2>
        <div class="row">
            <?php foreach ($kategori as $item): ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?= base_url('uploads/' . $item['foto']) ?>" alt="<?= $item['nama_kategori'] ?>">
                        <div class="card-body">
                            <h5><?= $item['nama_kategori'] ?></h5>
                            <p><?= $item['deskripsi'] ?></p>
                            <p>Harga: Rp<?= number_format($item['harga_kategori'], 2) ?></p>
                            <p>Stok: <?= $item['stok'] ?></p>
                            <a href="<?= base_url('pemesanan/pesan/' . $item['id_kategori']) ?>" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<?= $this->include('_partials/footer') ?>
