<?= $this->extend('admin/template'); ?>

<?= $this->section('page-content'); ?>
<div class="row">
    <div class="col-lg-6">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Transaksi Setor Sampah</h6>
            </div>
            <div class="card-body">
                <form action="/admin/simpan" method="post">
                    <?= csrf_field(); ?>
                    <!-- <div class="form-group">
                        <label for="nama_sampah">Nama Admin</label>
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                    </div> -->
                    <div class="form-group">
                        <label for="nama_nasabah">Nama Nasabah</label>
                        <select class="form-control js-example-basic-single" name="nama_nasabah">
                            <option></option>
                            <?php foreach ($user as $u) : ?>
                                <option value="<?= $u['id']; ?>"><?= $u['nama']; ?></option>
                            <?php endforeach; ?>
                            <!-- <optgroup label="RT 3 RW 2">
                                <option>Nested option</option>
                                <option>Nested option</option>
                                <option>Nested option</option>
                            </optgroup>
                            <optgroup label="RT 4 RW 5">
                                <option>Nested option</option>
                                <option>Nested option</option>
                                <option>Nested option</option>
                            </optgroup> -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_sampah">Nama Sampah</label>
                        <select class="form-control js-example-basic-single" name="nama_sampah">
                            <option></option>
                            <?php foreach ($sampah as $s) : ?>
                                <option value="<?= $s['id']; ?>"><?= $s['nama_sampah']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" class="form-control" id="jumlah" placeholder="Jumlah" name="jumlah" value="<?= old('jumlah'); ?>">
                    </div>
                    <!-- 
                    <div class="form-group">
                        <label for="nama_sampah">Harga</label>
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="2000">
                    </div> -->
                    <button type="submit" class="btn btn-primary btn-block mt-2">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>