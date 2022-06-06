<?= $this->extend('template/v_template_front'); ?>
<?= $this->section('content'); ?>

<head>
    <link rel="stylesheet" href="frontend2/style/jalurself.css">
</head>

<!-- fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&family=Viga&display=swap" rel="stylesheet">

<div class="container text-justify py-5">
    <h1 class="title">Jalur Pendaftaran</h1>
    <h1 class="title">Special Funded</h1>
    <h1 class="judul text-center py-5">Timeline Kegiatan</h1>

    <table class="table table-success table-striped">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kegiatan</th>
                <th scope="col">Pelaksanaan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Open Recruitment Volunteer jalur Fully Funded</td>
                <td>20 November - 14 Desember 2021</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Tes Asesmen</td>
                <td>15 Desember - 17 Desember 2021</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Pengumuman Volunteer Lolos Special Funded</td>
                <td>20 Desember 2021</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Pembayaran</td>
                <td>20 Desember - 14 Januari 2022</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Welcoming Party Volunteer</td>
                <td>4 Januari 2022</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>Pembekalan dan Pelatihan Volunteer</td>
                <td>5 Januari - 8 Januari 2022</td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td>Persiapan dan Koordinasi setiap bidang</td>
                <td>5 Januari - 4 Februari 2022</td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td>Pelaksanaan Kegiatan</td>
                <td>6 Februari - 15 Februari 2022</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="container-fluid text-center py-5" style="background-color: #FAD586;">
    <div class="row">
        <div class="col-lg-4 pt-3 judul">
            <h1 class="judul">Skema</h1>
            <h1 class="judul2">Seleksi</h1>
        </div>
        <div class="col-lg-7 text-justify m-auto">
            <p>● Jalur rekomendasi dan prestasi, akan diberikan potongan biaya oleh Yayasan Karya Anak Milenial Indonesia</p>
            <p>● Peserta membayar biaya pendaftaran sebesar Rp25.000 dan mengisi kelengkapan berkas</p>
            <p>● Peserta melaksanakan assessment test tulis</p>
            <p>● Pengumuman peserta lolos jalur Special Funded</p>
            <p>● Pembayaran jalur Special Funded dapat dilakukan secara bertahap atau langsung lunas</p>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>