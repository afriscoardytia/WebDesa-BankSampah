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
        <h6 class="m-0 font-weight-bold text-primary">Data Nasabah</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($nasabah as $n) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $n['nama']; ?></td>
                            <td><?= $n['alamat']; ?></td>
                            <td>
                                <form action="/admin/deleteDataNasabah/<?= $n['id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?');">Delete</button>
                                </form>
                                <a href="/admin/detailDataNasabah/<?= $n['id']; ?>" class="btn btn-info btn-sm">
                                    <span class="text">Detail</span>
                                </a>
                                <a href="/admin/updateJadikanAdmin/<?= $n['id']; ?>" class="btn btn-secondary btn-sm">
                                    <span class="text">Jadikan Admin</span>
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