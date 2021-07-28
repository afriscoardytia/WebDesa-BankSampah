<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="jumbotron jumbotron-fluid text-white jumbotron-bank-sampah">
    <div class="container text-center">
        <h3 class=""><b>Bank Sampah Bersemi</b></h3>
        <small>Desa Manyarejo, Kecamatan Manyar, Kabupaten Gresik.</small>
        <p class="lead mt-3">
            <a class="btn btn-outline-light" href="/user" role="button">Login</a>
        </p>
    </div>

</div>

<div class="tim mt-4">
    <div class="container">
        <ul class="nav nav-pills mb-3" id="nav-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active a-kkn" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Latar Belakang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link a-kkn" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="true">Visi & Misi</a>
            </li>
        </ul>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="content-bank">
                    <p style="text-indent: 45px;" class="text-justify">
                        Masalah mengenai sampah sudah bukan menjadi masalah yang baru disekitar lingkungan kita. Volume sampah yang terus meningkat sejalan dengan pertumbuhan penduduk dan keterbatasan lahan untuk pembuangan akhir adalah masalah yang harus segera dipecahkan. Apabila masalah tersebut dibiarkan, akan terjadi penimbunan sampah yang pada akhirnya menimbulkan kerusakan lingkungan dan merugikan masyarakat serta polusi yang disebabkan oleh sampah juga dapat menjadi sumber penyakit bagi manusia.
                        Maka dari itu salah satu upaya kita dalam mengatasi maslah sampah ini adalah dengan cara pengolaan sampah itu sendiri. Pengolaan sampah tidak hanya menjadi kewajiban pemerintah saja melainkan semua masyarakat dan pelaku usaha juga harus bertanggung jawab menjaga agar lingkungan tetap bersih dan sehat yang berarti harus ada kerjasama yang baik antara semua pihak. Untuk mengatasi masalah sampah ini dibutuhkan program program pengolaan sampah agar tidak hanya menjadi timbunan sampah di TPA, tetapi menjadi suatu barang yang memiliki nilai guna dan nilai jual.
                    </p>
                    <p style="text-indent: 45px;" class="text-justify">
                        Salah satu alternatif yang sudah kita cadangkan untuk mengatasi masalah sampah di desa ktia tercinta ini adalah konsep bank sampah. Konsep bank sampah terdiri dari 5M, yaitu mengurai sampah, memilah sampah, memanfaatkan sampah, mendaur ulang sampah , dan menabung sampah. Bank sampah ini dibtuhkan ada peran serta masyarakat untuk turut aktif dalam menggerakan pengelolaan sampah yang merupakan hal penting demi keberlangsungan organisasi pengelolaan sampah.
                        Konsep bank sampah mulai terwujud di desa manyarejo di Jl. Satelit II RT. 01 RW. 01 yang sosialisasikan oleh PUSDA Kota tentang masalah lingkungan dan program penghijauan, dan tercetus nama “Rumah Kompos Bersemi”, dimana maksud dari kata bersemi sendiri adalah bersih indah alami. Program bank sampah yang berbau sosial dari masyarakat atau warga yang memiliki bentuk kepedulian terhadap lingkungan yaitu membantu mengurangi masalah sampah. Dari situlah, pada tanggal 17/12/2015 terbentuklah struktur kepengerusan bank sampah dan berjalanan hingga saat ini.
                    </p>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="row proker-singkat">
                    <div class="col-lg-6">
                        <img src="/img/bank_sampah.jpg" class="gambar-proker-singkat" width="100%">
                    </div>
                    <div class="col text-justify mt-4">
                        <p class="text-justify">
                            <b>Visi :</b>
                            Terwujudnya bank sampah yang mandiri untuk membangun ekonomi masyarakat serta lingkungan yang bersih dan hijau sehingga tercipta masyarakat yang sehat sesuai hadist nabi.
                        </p>
                        <p class="text-justify">
                            <b>Misi :</b>
                            <br>
                            1. Meningkatkan kesadaran masyarakat tentang pentingnya pengelolaan sampah.
                            <br>
                            2. Merubah perilaku masyarakt dalam pengelolaan sampah secara benar dan ramah lingkungan.
                            <br>
                            3. Mengurangi timbunan sampah dan mendayagunakan sampah menjadi barang bermanfaat sehingga mempunyai nilai ekonomi dan potensi produktif.
                            <br>
                            4. Menciptakan lingkungan yang bersih dan sehat.
                            <br>
                            5. Menciptakan lapangan pekerjaan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>