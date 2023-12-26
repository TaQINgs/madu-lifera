<?= $this->extend('model/template'); ?>

<?= $this->section('pageContent'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Produk</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Produk</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Ukuran</th>
                            <th>Harga Customer</th>
                            <th>Harga Reseller</th>
                            <th>Gambar</th>
                            <th>ID</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Ukuran</th>
                            <th>Harga Customer</th>
                            <th>Harga Reseller</th>
                            <th>Gambar</th>
                            <th>ID</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($produk as $p) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $p['nama_madu']; ?></td>
                                <td><?= $p['ukuran']; ?> ml</td>
                                <td><?= $p['harga_cust']; ?></td>
                                <td><?= $p['harga_res']; ?></td>
                                <td><img src="/img/<?= $p['gambar']; ?>" width='100' height='100'></td>
                                <td><?= $p['id_madu']; ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>