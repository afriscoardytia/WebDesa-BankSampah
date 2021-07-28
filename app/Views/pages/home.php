<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid text-white text-center jumbotron-welcome">
    <div class="container">
        <h1 class="display-4">Selamat Datang :)</h1>
        <p class="lead">Di website resmi Desa Manyarejo, Kecamatan Manyar, Kabupaten Gresik.</p>
    </div>
</div>

<!-- <div class="jumbotron jumbotron-fluid j-welcome">
    <video id="video-background" preload muted autoplay loop>
        <source src="/video/a.mp4" type="video/mp4">
    </video>
    <div class="container text-white text-center">
        <h1 class="display-4">Selamat Datang :)</h1>
        <p class="lead">Di website resmi Desa Manyarejo, Kecamatan Manyar, Kabupaten Gresik.</p>
    </div>
</div> -->
<!-- Akhir Jumbotron -->

<!-- Info -->
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-10 info-panel">
            <div class="row">
                <div class="col-lg kotak-info text-center">
                    <h1 class="angka">22</h1>
                    <h6>Rukun Tetangga</h6>
                    <p>Terdapat 22 Rukun Tetangga di desa manyarejo</p>
                </div>
                <div class="col-lg kotak-info text-center">
                    <h1 class="angka">4</h1>
                    <h6>Rukun Warga</h6>
                    <p>Terdapat 4 Rukun Warga di desa manyarejo</p>
                </div>
                <div class="col-lg kotak-info text-center">
                    <h1 class="angka">9</h1>
                    <h6>Perangkat Desa</h6>
                    <p>Terdapat 9 Perangkat Desa di desa manyarejo</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Info -->

<!-- Profil-Singkat -->
<div class="container">
    <div class="row profil-singkat">
        <div class="col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.041777342012!2d112.60123591424731!3d-7.121156894857682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77ff20eb5c2923%3A0x7203756d120f2928!2sBalai%20Desa%20Manyarejo%20Manyar!5e0!3m2!1sid!2sid!4v1616176305801!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col text-justify mt-4">
            <h3>Desa Manyarejo</h3>
            <p>Desa Manyarejo terletak kurang lebih 7,3 Km dari pusat kota Gresik. Desa Manyarejo adalah salah satu desa dari 23 desa yang termasuk dalam wilayah kecamatan Manyar Kabupaten Gresik.Dilihat dari letak geografisnya, wilayah desa Manyarejo merupakan jalur perhubungan Pantura yang sangat padat serta berdekatan dengan wilayah pengembangan kawasan industri Kawasan Industri Maspion (KIM), pergudangan Karimun Emas dan Terminal Pelabuhan Internasional yang masih dalam proses pengembangan proyek. Kondisi ini memberikan manfaat bagi pertumbuhan perekonomian di Desa Manyarejo.Secara umum topografi Desa Manyarejo datar yang semulanya merupakan pantai yang landai.</p>
            <a href="/pages/profil" class="btn btn-secondary btn-sm">Baca Selengkapnya</a>
        </div>
    </div>
</div>
<!-- Akhir Profil-Singkat -->

<!-- Programmer -->
<div class="container">
    <div class="row programmer">
        <div class="col">
            <div class="text-right">
                <img src="/img/afrisco.jpg" class="img-fluid img-programmer">
                <h6>Afrisco Ardytia</h6>
                <p>Programmer</p>
            </div>
        </div>
        <div class="col">
            <img src="/img/nafa.jpg" class="img-fluid img-programmer">
            <h6>Benadia Latifah</h6>
            <p>Programmer</p>
        </div>
    </div>
</div>
<!-- Programmer -->

<script>
    function deferVideo() {
        //defer html5 video loading
        $("video source").each(function() {
            var sourceFile = $(this).attr("data-src");
            $(this).attr("src", sourceFile);
            var video = this.parentElement;
            video.load();
            // uncomment if video is not autoplay
            //video.play();
        });
    }
    window.onload = deferVideo;
</script>

<?= $this->endSection(); ?>