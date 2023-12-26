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
                            <th>Toko</th>
                            <th>Prov</th>
                            <th>Kota/Kab</th>
                            <th>Kecamatan</th>
                            <th>No Hp</th>
                            <th>Nama Bank</th>
                            <th>No Rekening</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Toko</th>
                            <th>Prov</th>
                            <th>Kota/Kab</th>
                            <th>Kecamatan</th>
                            <th>No Hp</th>
                            <th>Nama Bank</th>
                            <th>No Rekening</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($reseller as $p) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $p['nama_res']; ?></td>
                                <td><?= $p['nama_toko']; ?></td>
                                <td><?= $p['prov']; ?></td>
                                <td><?= $p['kota_kab']; ?></td>
                                <td><?= $p['kec']; ?></td>
                                <td><?= $p['no_hp']; ?></td>
                                <td><?= $p['nama_bank']; ?></td>
                                <td><?= $p['no_rek']; ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>