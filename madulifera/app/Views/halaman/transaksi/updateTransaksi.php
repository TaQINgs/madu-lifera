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
                                    <th>No. </th>
                                    <th>Nama Cutsomer</th>
                                    <th>Pembeli</th>
                                    <th>Jenis Pembelian</th>
                                    <th>Tanggal Pembelian</th>
                                    <th>Jumlah</th>
                                    <th>Total Harga</th>
                                    <th>ID Produk</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No. </th>
                                    <th>Nama Cutsomer</th>
                                    <th>Pembeli</th>
                                    <th>Jenis Pembelian</th>
                                    <th>Tanggal Pembelian</th>
                                    <th>Jumlah</th>
                                    <th>Total Harga</th>
                                    <th>ID Produk</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <?php $i = 1; ?>
                                    <?php foreach ($transaksi as $t) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $t['nama_customer']; ?></td>
                                    <td><?= $t['pembeli']; ?></td>
                                    <td><?= $t['jenis_pembelian']; ?></td>
                                    <td><?= $t['tanggal_pembelian']; ?></td>
                                    <td><?= $t['banyak']; ?></td>
                                    <td><?= $t['total_harga']; ?></td>
                                    <td><?= $t['id_madu']; ?></td>
                                    <td>
                                        <div class="dropdown mb-4">
                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Aksi
                                            </button>
                                            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="/transaksi/update/<?= $t['id_transaksi']; ?>">Update Data</a>
                                                <a class="dropdown-item" href="/transaksi/delete/<?= $t['id_transaksi']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus Data</a>
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