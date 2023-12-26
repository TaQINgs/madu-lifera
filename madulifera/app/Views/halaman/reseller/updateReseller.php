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
                                    <th>Toko</th>
                                    <th>Prov</th>
                                    <th>Kota/Kab</th>
                                    <th>Kecamatan</th>
                                    <th>No Hp</th>
                                    <th>Nama Bank</th>
                                    <th>No Rekening</th>
                                    <th>Aksi</th>
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
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
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
                                    <td>
                                        <div class="dropdown mb-4">
                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Aksi
                                            </button>
                                            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="/reseller/update/<?= $p['id_res']; ?>">Update Data</a>
                                                <a class="dropdown-item" href="/reseller/delete/<?= $p['id_res']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus Data</a>
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