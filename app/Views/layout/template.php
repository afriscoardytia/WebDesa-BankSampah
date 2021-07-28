<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/style.css">

    <title><?= $title; ?></title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Desa Manyarejo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link
                    <?php
                    if ($title === "Home | Desa Manyarejo") {
                        echo "active";
                    }
                    ?>
                    " href="/">Home</a>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle
                        <?php
                        if ($title === "Profil | Desa Manyarejo" or $title === "Visi & Misi | Desa Manyarejo") {
                            echo "active";
                        }
                        ?>
                        " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <!-- <a class="dropdown-item" href="/pages/profil">Sejarah Desa</a> -->
                            <a class="dropdown-item 
                            <?php
                            if ($title === "Profil | Desa Manyarejo") {
                                echo "active";
                            }
                            ?>
                            " href="/pages/profil">Profile Desa</a>
                            <a class="dropdown-item 
                            <?php
                            if ($title === "Visi & Misi | Desa Manyarejo") {
                                echo "active";
                            }
                            ?>
                            " href="/pages/visi_misi">Visi Misi</a>
                        </div>
                    </li>

                    <a class="nav-item nav-link
                    <?php
                    if ($title === "Nasabah | Bank Sampah | Desa Manyarejo" or $title === "Bank Sampah | Desa Manyarejo") {
                        echo "active";
                    }
                    ?>
                    " href="/pages/bankSampah">Bank Sampah</a>


                    <a class="nav-item nav-link
                    <?php
                    if ($title === "KKN Kelompok 8 | Desa Manyarejo") {
                        echo "active";
                    }
                    ?>
                    " href="/pages/kkn">KKN UMG</a>
                    <!-- <a class="nav-item btn btn-primary tombol" href="#">Login</a> -->
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <?= $this->renderSection('content'); ?>

    <!-- Footer -->
    <footer class="footer-panel text-center bg-dark text-white pt-3 pb-3">
        <div class="container">
            <small>Copyright by KKN UMG Kelompok 8 &copy; 2021</small>
        </div>
    </footer>
    <!-- Akhir Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $('.angka').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 2000,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>
</body>

</html>