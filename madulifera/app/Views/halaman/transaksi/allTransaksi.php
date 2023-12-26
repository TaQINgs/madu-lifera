<?= $this->extend('model/template'); ?>

<?= $this->section('pageContent'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Semua Transaksi</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
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
                        </tr>
                    </tfoot>
                    <tbody>
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
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>