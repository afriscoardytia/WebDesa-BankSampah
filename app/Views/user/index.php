<?= $this->extend('admin/template'); ?>

<?= $this->section('page-content'); ?>

<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<div <?php
        if ($data_user['nama'] === "" or $data_user['no_hp'] === "" or $data_user['jenis_kelamin'] === "" or $data_user['alamat'] === "" or $data_user['no_rumah'] === 0 or $data_user['rt'] === 0 or $data_user['rw'] === 0) {
            echo "hidden";
        }
        ?> class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Saldo Anda</div>
                        <?php foreach ($t_saldo as $t) : ?>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $t['total_saldo']; ?></div>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<?php if ($data_user['nama'] === "" or $data_user['no_hp'] === "" or $data_user['jenis_kelamin'] === "" or $data_user['alamat'] === "" or $data_user['no_rumah'] === 0 or $data_user['rt'] === 0 or $data_user['rw'] === 0) : ?>
    <div class="row">
        <div class="col-lg-6">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Lengkapi Data Pribadi</h6>
                </div>
                <div class="card-body">
                    Nasabah wajib melengkapi data pribadi sebelum menggunakan aplikasi bank sampah bersemi
                    <br><br>
                    <form action="/user/updateDataUser/<?= $data_user['id']; ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $data_user['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?= old('nama'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input type="text" class="form-control" placeholder="Jenis Kelamin" name="jenis_kelamin" value="<?= old('jenis_kelamin'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No Hp</label>
                            <input type="text" class="form-control" placeholder="No HP" name="no_hp" value="<?= old('no_hp'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?= old('alamat'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="rt">RT</label>
                            <input type="text" class="form-control" placeholder="RT" name="rt" value="<?= old('rt'); ?>">
                        </div>
                        <div class="form-group">
                            <label for="rw">RW</label>
                            <input type="text" class="form-control" placeholder="RW" name="rw" value="<?= old('rw'); ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-2">Simpan Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>

<?= $this->endSection(); ?>



<!-- 
<div class="container mt-4">
    <div class="row mt-3 text-white">
        <div class="col saldo">
            <div class="text-right">
                <small>Saldo Anda</small>
                <h5><b>150.000</b></h5>
            </div>
        </div>
        <div class="col nama">
            <div class="text-left">
                <h6>Afrisco Ardytia</h6>
                <a href="#" class="btn btn-danger btn-sm">Logout</a>
            </div>
        </div>
    </div>
    <div class="mt-4 text-dark text-center">
        <div class="card-deck">
            <div class="card card-user">
                <div class="card-body">
                    <h5 class="card-title">Tarik Saldo</h5>
                    <p class="card-text text-left">Fitur tarik saldo adalah sebuah fitur untuk menarik saldo bank sampah bagi pelanggan yang ingin menarik saldonya, akan tetapi proses itu harus disetujui oleh admin.</p>
                </div>
                <div class="card-footer text-right">
                    <a href="#" class="btn btn-success btn-block">Lanjut</a>
                </div>
            </div>
            <div class="card card-user">
                <div class="card-body">
                    <h5 class="card-title">Riwayat Transaksi</h5>
                    <p class="card-text text-left">Riwayat Transaksi adalah informasi seputar transaksi yang sudah di lakukan oleh pelanggan, seperti setor sampah dan tarik saldo.</p>
                </div>
                <div class="card-footer text-right">
                    <a href="#" class="btn btn-success btn-block">Lanjut</a>
                </div>
            </div>
            <div class="card card-user">
                <div class="card-body">
                    <h5 class="card-title">Jemput Sampah</h5>
                    <p class="card-text text-left">Jemput Sampah adalah sebuah fitur untuk mengajukan setor sampah ke pihak bank sampah, akan tetapi proses itu harus disetujui oleh admin.</p>
                </div>
                <div class="card-footer text-right">
                    <a href="#" class="btn btn-success btn-block">Lanjut</a>
                </div>
            </div>
        </div>
    </div>
</div> -->