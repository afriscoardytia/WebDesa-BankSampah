<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="bg">
    <!-- Form -->
    <div class="container">
        <div class="row k-contact">
            <div class="col-lg-6 text-center inf-contact mb-5">
                <div>
                    <h6>Contact Us</h6>
                    <h3>Desa Manyarejo</h3>
                </div>
            </div>
            <div class="col">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nama Depan</label>
                            <input type="email" class="form-control" id="inputEmail4" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Nama Belakang</label>
                            <input type="password" class="form-control" id="inputPassword4" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Alamat</label>
                        <input type="text" class="form-control" id="inputAddress" disabled>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">No Telp</label>
                        <input type="text" class="form-control" id="inputAddress" disabled>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Pesan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled></textarea>
                    </div>
                    <button type="submit" class="btn btn-secondary" disabled>Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Akhir Form -->

</div>
<?= $this->endSection(); ?>