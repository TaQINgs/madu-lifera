<?= $this->extend('model/template'); ?>

<?= $this->section('pageContent'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Transaksi</h1>
    <div class="row">
        <div class="col-lg-8 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pastikan semua data terisi dengan benar</h6>
                </div>
                <div class="card-body">
                    <form action="/transaksi/tambah-data" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Customer</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Pembeli</label><br>
                            <select name="pembeli" id="exampleInputEmail1" class="<?= ($validation->hasError('pembeli')) ? 'is-invalid' : '' ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('pembeli'); ?>
                                </div>
                                <option value="Reseller">Reseller</option>
                                <option value="Customer">Customer</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jenis Pembelian</label>
                            <input type="text" class="form-control <?= ($validation->hasError('pembelian')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="pembelian">
                            <div class="invalid-feedback">
                                <?= $validation->getError('pembelian'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jumlah</label>
                            <input type="text" class="form-control <?= ($validation->hasError('jumlah')) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="jumlah">
                            <div class="invalid-feedback">
                                <?= $validation->getError('jumlah'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Produk</label><br>
                            <select name="idmadu" id="idmadu" class="<?= ($validation->hasError('idmadu')) ? 'is-invalid' : '' ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('idmadu'); ?>
                                </div>
                                <?php foreach ($produkAll as $all) : ?>
                                    <option value="<?= $all['id_madu']; ?>"><?= $all['nama_madu']; ?></option>
                                <?php endforeach; ?>
                            </select>
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