<?= $this->extend('template/v_template_front'); ?>
<?= $this->section('content'); ?>

<head>
    <link rel="stylesheet" href="frontend2/style/detail-program.css">
</head>

<!-- fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&family=Viga&display=swap" rel="stylesheet">

<div class="container">
    <h1 class="title-contact"> About Us</h1>
    <p class="text-justify" style="text-indent: 5rem;margin-top: 50px;font-size: 14px;">
        Yayasan Karya Anak Milenial atau Karya Anak Milenial Indonesia (KAMI) Foundation merupakan wadah bagi para pemuda Indonesia, baik yang berada di dalam maupun di luar negeri untuk mengembangkan diri dan menuangkan ide, inovasi serta karyanya dalam kehidupan bermasyarakat. Pada Juli 2020, Karya Anak Milenial Indonesia (KAMI) resmi legal membentuk sebuah yayasan dengan Bapak Sandiaga S. Uno sebagai Dewan Penasehat.
        <br>
        <br>
        Pandemi Covid-19 membuat KAMI Foundation merasa terpanggil untuk bergerak membantu Indonesia dalam menuntaskan berbagai isu yang ada, dalam sektor Pendidikan, Sosial, Pemberdayaan Masyarakat, serta Pariwisata dan Ekonomi Kreatif. Maka dari itu, Karya Anak Milenial Indonesia membuat program Milenial Mengabdi sebagai kontribusi nyata bagi bangsa Indonesia dalam kegiatan pemberdayaan masyarakat, khususnya dalam mengembangkan potensi lokal pada sektor pariwisata dan ekonomi kreatif.
        <br>
        <br>
        "Millennial’s Little Steps for Society” merupakan tema yang diusung dalam kegiatan milenial mengabdi 1.0 kali ini. Dengan diusungnya tema ini diharapkan dapat mengajak kaum milenial untuk ikut memberikan kontribusinya secara nyata dalam memberikan ide kreatif dan solusi yang inovatif guna menuntaskan permasalahan yang ada di masyarakat. Secuil kontribusi yang kita beri akan sangat berarti bagi pembangunan negeri ini
        <br>
        <br>
        Lokasi pengabdian masyarakat kali ini berada di Pulau Lombok yang dikenal memiliki panorama keindahan alam bak surga dunia yang diminati oleh para wisatawan mulai dari pantai, gunung, air terjun, keragaman budaya, dan masih banyak lagi. Namun, dari segi pendidikan, kesehatan, lingkungan, ekonomi dan pariwisata masih dirasa belum optimal. Untuk itu, fokus dari Milenial Mengabdi ada empat bidang, yaitu : (1) Pendidikan, (2) Kesehatan, (3) Lingkungan, dan (4) Ekonomi Kreatif. Keempat bidang ini dipilih karena merupakan kebutuhan esensial yang diperlukan di daerah terluar, terdepan, dan tertinggal.
    </p>
</div>

<div class="container text-justify py-5 text-center">
    <h1 class="title-contact">Contact Us</h1>
</div>

<div class="form-contact w-50 m-auto pb-5">
    <form>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="0877777777">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Massage" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="background-color: #184D47;">Send</button>
    </form>
</div>

<?= $this->endSection(); ?>