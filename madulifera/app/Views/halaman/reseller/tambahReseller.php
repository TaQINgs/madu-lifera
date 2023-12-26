<?= $this->extend('model/template'); ?>

<?= $this->section('pageContent'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Reseller</h1>
    <div class="row">
        <div class="col-lg-8 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pastikan semua data terisi dengan benar</h6>
                </div>
                <div class="card-body">
                    <form action="/reseller/tambah-reseller" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Reseller</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Toko</label>
                            <input type="text" class="form-control <?= ($validation->hasError('namaToko')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="namaToko">
                            <div class="invalid-feedback">
                                <?= $validation->getError('namaToko'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Prov</label>
                            <input type="text" class="form-control <?= ($validation->hasError('prov')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="prov">
                            <div class="invalid-feedback">
                                <?= $validation->getError('prov'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kota/Kab</label>
                            <input type="text" class="form-control <?= ($validation->hasError('kota/kab')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="kota/kab">
                            <div class="invalid-feedback">
                                <?= $validation->getError('kota/kab'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kecamatan</label>
                            <input type="text" class="form-control <?= ($validation->hasError('kec')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="kec">
                            <div class="invalid-feedback">
                                <?= $validation->getError('kec'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No HP</label>
                            <input type="text" class="form-control <?= ($validation->hasError('noHp')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="noHp">
                            <div class="invalid-feedback">
                                <?= $validation->getError('noHp'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Bank</label>
                            <input type="text" class="form-control <?= ($validation->hasError('namaBank')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="namaBank">
                            <div class="invalid-feedback">
                                <?= $validation->getError('namaBank'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No Rek</label>
                            <input type="text" class="form-control <?= ($validation->hasError('noRek')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="noRek">
                            <div class="invalid-feedback">
                                <?= $validation->getError('noRek'); ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                            <span class="text">Tambah Data</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>