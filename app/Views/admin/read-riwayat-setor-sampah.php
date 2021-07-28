<?= $this->extend('admin/template'); ?>

<?= $this->section('page-content'); ?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Riwayat Setor Sampah</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Sampah</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($setor as $s) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $s['nama']; ?></td>
                            <td><?= $s['nama_sampah']; ?></td>
                            <td><?= $s['jumlah']; ?></td>
                            <td><?= $s['harga']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>