<?= $this->extend('admin/template'); ?>

<?= $this->section('page-content'); ?>
<div class="row">
    <div class="col-lg-6">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Ubah Data Sampah</h6>
            </div>
            <div class="card-body">
                <form action="/admin/update/<?= $sampah['id']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="id" value="<?= $sampah['id']; ?>">
                    <div class="form-group">
                        <label for="nama_sampah">Nama Sampah</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nama_sampah')) ? 'is-invalid' : ''; ?>" id="nama_sampah" placeholder="Nama Sampah" name="nama_sampah" value="<?= old('nama_sampah', $sampah['nama_sampah']); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama_sampah'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" id="harga" placeholder="Harga Sampah" name="harga" value="<?= old('harga', $sampah['harga']); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mt-2">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>