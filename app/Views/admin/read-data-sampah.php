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
        <a href="/admin/createDataSampah" class="btn btn-success btn-sm">
            <span class="text">Tambah Data Sampah</span>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Sampah</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($sampah as $s) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $s['nama_sampah']; ?></td>
                            <td><?= $s['harga']; ?></td>
                            <td>
                                <a href="/admin/updateDataSampah/<?= $s['id']; ?>" class="btn btn-primary btn-sm">
                                    <span class="text">Edit</span>
                                </a>

                                <form action="/admin/deleteDataSampah/<?= $s['id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>