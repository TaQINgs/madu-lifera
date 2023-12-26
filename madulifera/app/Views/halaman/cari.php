<?= $this->extend('model/template'); ?>

<?= $this->section('pageContent'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Cari : '<?= $katakunci; ?>'</h1>
    <?php
    if (!$produk) {
    } else if ($produk) {
    ?>
        <h1 class="h5 text-gray-800">Produk</h1><br>
        <div class="row">
            <?php foreach ($produk as $p) : ?>
                <div class="col-lg-6 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><?= $p['nama_madu']; ?></h6>
                        </div>
                        <div class="card-body">
                            <p>Ukuran : <?= $p['ukuran']; ?></p>
                            <p>Harga Customer : <?= $p['harga_cust']; ?></p>
                            <p>Harga Reseller : <?= $p['harga_res']; ?></p>
                            <p>ID Produk : <?= $p['id_madu']; ?></p>
                            <p><img src="/img/<?= $p['gambar']; ?>" width='400' height='400'></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php
    }
    if ($transaksi) {
        $i = 1;
    ?>
        <h1 class="h5 text-gray-800">Transaksi</h1><br>
        <div class="row">
            <?php foreach ($transaksi as $t) : ?>
                <div class="col-lg-6 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><?= $i++; ?></h6>
                        </div>
                        <div class="card-body">
                            <p>Nama Customer : <?= $t['nama_customer']; ?></p>
                            <p>Jenis Pembelian : <?= $t['jenis_pembelian']; ?></p>
                            <p>Jumlah : <?= $t['banyak']; ?></p>
                            <p>Total : <?= $t['total_harga']; ?></p>
                            <p>ID Madu : <?= $t['id_madu']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php
    }
    if (empty($produk) && empty($transaksi)) {
    ?>
        <h1 class="h1 text-gray-800 text-center">Hasil Pencarian Tidak ada</h1><br>
    <?php
    }
    ?>
</div>
<?= $this->endSection(); ?>