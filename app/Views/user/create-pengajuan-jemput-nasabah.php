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
                <h6 class="m-0 font-weight-bold text-primary">Pengajuan Jemput Sampah</h6>
            </div>
            <div class="card-body">
                Pengajuan harus dilakukan di jadwal yang sudah ditentukan.
                <br><br>
                <form action="/user/simpan" method="post">
                    <?= csrf_field(); ?>
                    <button type="submit" class="btn btn-primary btn-block mt-2">Ajukan Jemput Sampah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>