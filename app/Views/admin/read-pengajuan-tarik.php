<?= $this->extend('admin/template'); ?>

<?= $this->section('page-content'); ?>
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Pengajuan Tarik Saldo</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($tarik_saldo as $t) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $t['nama']; ?></td>
                            <td><?= $t['jumlah']; ?></td>
                            <td>
                                <a href="/admin/updateSetujui/<?= $t['id']; ?>" class="btn btn-success btn-sm">
                                    <span class="text">Setujui</span>
                                </a>
                                <a href="/admin/updateTolak/<?= $t['id']; ?>" class="btn btn-danger btn-sm">
                                    <span class="text">Tolak</span>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>