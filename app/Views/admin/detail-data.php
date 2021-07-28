<?= $this->extend('admin/template'); ?>

<?= $this->section('page-content'); ?>
<div class="row">
    <div class="col-lg-6">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><?= $judul_form; ?></h6>
            </div>
            <div class="card-body">
                <?php foreach ($user as $u) : ?>
                    <p>Nama : <?= $u['nama']; ?></p>
                    <p>Username : <?= $u['username']; ?></p>
                    <p>Email : <?= $u['email']; ?></p>
                    <p>Jenis Kelamin : <?= $u['jenis_kelamin']; ?></p>
                    <p>No hp : <?= $u['no_hp']; ?></p>
                    <p>Alamat : <?= $u['alamat']; ?></p>
                    <p>RT : <?= $u['rt']; ?></p>
                    <p>RW : <?= $u['rw']; ?></p>
                <?php endforeach; ?>
                <button onclick="goBack()" class="btn btn-primary btn-block mt-2">Kembali</button>
            </div>
        </div>
    </div>
</div>

<script>
    function goBack() {
        window.history.back();
    }
</script>

<?= $this->endSection(); ?>