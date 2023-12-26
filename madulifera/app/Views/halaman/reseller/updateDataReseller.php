<?= $this->extend('model/template'); ?>

<?= $this->section('pageContent'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Update Reseller</h1>
    <div class="row">
        <div class="col-lg-8 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pastikan semua data terisi dengan benar</h6>
                </div>
                <div class="card-body">
                    <form action="/reseller/update-data" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="hidden" value="<?= (!$reseller) ? '' : $reseller['id_res'] ?>" name="id">
                            <label for="exampleInputEmail1" class="form-label">Nama Reseller</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="<?= (!$reseller) ? '' : $reseller['nama_res'] ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Toko</label>
                            <input type="text" class="form-control <?= ($validation->hasError('namaToko')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="namaToko" value="<?= (!$reseller) ? '' : $reseller['nama_toko'] ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('namaToko'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Prov</label>
                            <input type="text" class="form-control <?= ($validation->hasError('prov')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="prov" value="<?= (!$reseller) ? '' : $reseller['prov'] ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('prov'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kota/Kab</label>
                            <input type="text" class="form-control <?= ($validation->hasError('kota/kab')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="kota/kab" value="<?= (!$reseller) ? '' : $reseller['kota_kab'] ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('kota/kab'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kecamatan</label>
                            <input type="text" class="form-control <?= ($validation->hasError('kec')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="kec" value="<?= (!$reseller) ? '' : $reseller['kec'] ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('kec'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No HP</label>
                            <input type="text" class="form-control <?= ($validation->hasError('noHp')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="noHp" value="<?= (!$reseller) ? '' : $reseller['no_hp'] ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('noHp'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Bank</label>
                            <input type="text" class="form-control <?= ($validation->hasError('namaBank')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="namaBank" value="<?= (!$reseller) ? '' : $reseller['nama_bank'] ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('namaBank'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No Rek</label>
                            <input type="text" class="form-control <?= ($validation->hasError('noRek')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="noRek" value="<?= (!$reseller) ? '' : $reseller['no_rek'] ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('noRek'); ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                            <span class="text">Update Data</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>