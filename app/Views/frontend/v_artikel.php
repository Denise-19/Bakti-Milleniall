<?= $this->extend('template/v_template_front'); ?>
<?= $this->section('content'); ?>

<head>
    <link rel="stylesheet" href="frontend2/style/program.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Viga&display=swap" rel="stylesheet">
</head>

<div class="container py-5">
    <!-- <h1 class="title text-center">MILENIAL MENGABDI #1</h1>
    <h1 class="title text-center">LOMBOK</h1> -->
    <div class="box-search">
        <div class="search-text">
            <input type="text" name="" id="" placeholder="Search..." title="Cari Artikel Di Sini">
            <i class="fas fa-search"></i>
        </div>
    </div>

    <div class="row">
        <div class="posisi-section">
            <div class="col-lg-6 col-md-12">
                <center>
                    <img src="frontend2/images/sub-cont.svg" class="card-image">
                </center>
            </div>
            <div class="col-lg-6 col-md-12 mt-sm-4 mt-lg-0 text-justify">
                <h2 class="judul">Bidang Lingkungan</h2>
                <p class="card-text"><small class="text-muted">Updated 15 Desember 2021</small></p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                </p>
                <a href="Cdetailartikel" class="btn btn-primary" img src="frontend2/images/READ.svg" style="background: #184D47; font-size:x-small;">Read More</a>
            </div>
        </div>

        <div class="posisi-section pt-5">
            <div class="col-lg-6 col-md-12 mt-sm-4 mt-lg-0 text-justify">
                <h2 class="judul">Bidang Pendidikan</h2>
                <p class="card-text"><small class="text-muted">Updated 15 Desember 2021</small></p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                </p>
                <a href="Cdetailartikel" class="btn btn-primary" img src="images/READ.svg" style="background: #184D47; font-size:x-small;">Read More</a>
            </div>
            <div class="col-lg-6 col-md-12">
                <center>
                    <img src="frontend2/images/sub-cont.svg" class="card-image">
                </center>
            </div>
        </div>

        <div class="posisi-section pt-5">
            <div class="col-lg-6 col-md-12">
                <center>
                    <img src="frontend2/images/sub-cont.svg" class="card-image">
                </center>
            </div>
            <div class="col-lg-6 col-md-12 mt-sm-4 mt-lg-0 text-justify">
                <h2 class="judul">Bidang Kesehatan</h2>
                <p class="card-text"><small class="text-muted">Updated 15 Desember 2021</small></p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                </p>
                <a href="Cdetailartikel" class="btn btn-primary" img src="frontend2/images/READ.svg" style="background: #184D47; font-size:x-small;">Read More</a>
            </div>
        </div>

        <div class="posisi-section pt-5">
            <div class="col-lg-6 col-md-12 mt-sm-4 mt-lg-0 text-justify">
                <h2 class="judul">Bidang Ekonomi Kreatif</h2>
                <p class="card-text"><small class="text-muted">Updated 15 Desember 2021</small></p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                </p>
                <a href="Cdetailartikel" class="btn btn-primary" img src="frontend2/images/READ.svg" style="background: #184D47; font-size:x-small;">Read More</a>
            </div>
            <div class="col-lg-6 col-md-12">
                <center>
                    <img src="frontend2/images/sub-cont.svg" class="card-image">
                </center>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>