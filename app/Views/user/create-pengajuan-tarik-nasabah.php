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
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Sampah</h6>
            </div>
            <div class="card-body">

                <?php foreach ($saldo as $s) : ?>
                    <h6 class="font-weight-bold">Saldo Anda : <?= $s['total_saldo']; ?></h6>
                <?php endforeach; ?>

                Penarikan saldo tidak boleh melebihi jumlah saldo anda. Penarikan saldo harus melalui persetujuan admin
                <br><br>
                <?php if ($cek === 1) : ?>
                    <div class="alert alert-danger" role="alert">
                        Pengajuan anda belum di verifikasi Admin
                    </div>
                <?php endif; ?>
                <?php if ($cek === 0) : ?>
                    <form action="/user/save" method="post">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="text" class="form-control" placeholder="Jumlah Penarikan" name="jumlah" value="<?= old('jumlah'); ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-2">Ajukan Tarik Saldo</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>