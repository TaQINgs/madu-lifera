<?= $this->extend('model/template'); ?>

<?= $this->section('pageContent'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Update Produk</h1>
    <div class="row">
        <div class="col-lg-8 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pastikan semua data terisi dengan benar</h6>
                </div>
                <div class="card-body">
                    <form action="/produk/update-data" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="hidden" value="<?= (!$produk) ? '' : $produk['id_madu'] ?>" name="id">
                            <input type="hidden" name="gambarLama" value="<?= $produk['gambar']; ?>">
                            <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control<?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="<?= (!$produk) ? '' : $produk['nama_madu'] ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Ukuran</label>
                            <input type="text" class="form-control <?= ($validation->hasError('ukuran')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="ukuran" value="<?= (!$produk) ? '' : $produk['ukuran'] ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('ukuran'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Harga Customer</label>
                            <input type="text" class="form-control <?= ($validation->hasError('harga_cust')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="harga_cust" value="<?= (!$produk) ? '' : $produk['harga_cust'] ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('harga_cust'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Harga Reseller</label>
                            <input type="text" class="form-control <?= ($validation->hasError('harga_res')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="harga_res" value="<?= (!$produk) ? '' : $produk['harga_res'] ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('harga_res'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Gambar</label>
                            <div class="col-sm-2">
                                <img src="/img/<?= $produk['gambar']; ?>" class="img-thumbnail img-preview" width='100' height='100'>
                            </div>
                            <div class="col-sm-8">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : '' ?>" id="gambar" name="gambar" onchange="previewimg()">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('gambar'); ?>
                                    </div>
                                    <label class="custom-file-label" for="gambar"><?= $produk['gambar'] ?></label>
                                </div>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('gambar'); ?>
                                </div>
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