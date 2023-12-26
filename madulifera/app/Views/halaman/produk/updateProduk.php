<?= $this->extend('model/template'); ?>

<?= $this->section('pageContent'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Ubah Transaksi</h1>
    <div class="row">
        <div class="col-lg mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form</h6>
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
                                    <th>Aksi</th>
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
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <?php $i = 1; ?>
                                    <?php foreach ($produk as $p) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $p['nama_madu']; ?></td>
                                    <td><?= $p['ukuran']; ?></td>
                                    <td><?= $p['harga_cust']; ?></td>
                                    <td><?= $p['harga_res']; ?></td>
                                    <td><img src="/img/<?= $p['gambar']; ?>" width='100' height='100'></td>
                                    <td>
                                        <div class="dropdown mb-4">
                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Aksi
                                            </button>
                                            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="/produk/update/<?= $p['id_madu']; ?>">Update Data</a>
                                                <a class="dropdown-item" href="/produk/delete/<?= $p['id_madu']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus Data</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>