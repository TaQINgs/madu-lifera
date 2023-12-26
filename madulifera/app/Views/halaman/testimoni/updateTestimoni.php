<?= $this->extend('model/template'); ?>

<?= $this->section('pageContent'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Hapus Testimoni</h1>
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
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No. </th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <?php $i = 1; ?>
                                    <?php foreach ($testimoni as $t) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><img src="/img/<?= $t['gambar']; ?>" width='100' height='100'></td>
                                    <td>
                                        <a href="/testimoni/delete/<?= $t['id_tesmon']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><button class="btn btn-primary" type="button">Hapus</button></a>

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