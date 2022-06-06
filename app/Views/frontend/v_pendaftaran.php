<?= $this->extend('template/v_template_front'); ?>
<?= $this->section('content'); ?>
<head>
    <link rel="stylesheet" href="style/galery.css">
</head>

    <div class="container" class="mx-auto" style="width: 700px; margin-top: 150px;">
        <span class="border-0">
            <center>
                <h3>Form Pendaftaran</h3>
            </center>
            <form>
                <div class=" form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" aria-describedby="nama" placeholder="Masukkan nama">
                </div>
                <div class="form-group">
                    <label for="nomor">Nomor WA</label>
                    <input type="text" class="form-control" id="nomor" aria-describedby="nomor" placeholder="Masukkan nomor">
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" aria-describedby="tgl_lahir" placeholder="Masukkan tgl_lahir">
                </div>
                <div class="form-group">
                    <label for="akunIG">Akun IG</label>
                    <input type="text" class="form-control" id="akunIG" aria-describedby="akunIG" placeholder="Masukkan akunIG">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Domisili</label>
                    <input type="text" class="form-control" id="alamat" aria-describedby="alamat" placeholder="Masukkan alamat">
                </div>
                <div class="form-group">
                    <label for="instansi">Asal instansi (sekolah/kampus/perusahaan/lulusan/SMA)</label>
                    <input type="text" class="form-control" id="instansi" aria-describedby="instansi" placeholder="Masukkan instansi">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" aria-describedby="jurusan" placeholder="Masukkan jurusan">
                </div>
                <div class="form-group">
                    <label for="akunIG">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="akunIG" aria-describedby="akunIG" placeholder="Masukkan akunIG">
                </div>
                <div class="form-group">
                    <label for="pertama">Darimana kamu mengetahui informasi tentang Millenial Mengabdi Lombok
                        ini?</label>
                    <input type="text" class="form-control" id="pertama" aria-describedby="pertama" placeholder="Masukkan alasan">
                </div>
                <div class="form-group">
                    <label for="kedua">Mengapa kamu ingin bergabung menjadi peserta millenial mengabdi 1.0 Lombok
                        ini?</label>
                    <input type="text" class="form-control" id="kedua" aria-describedby="kedua" placeholder="Masukkan alasan">
                </div>
                <div class="form-group">
                    <label for="ketiga">Jika menjadi peserta terpilih, bidang apa yang ingin kamu pilih? (Pendidikan /
                        Kesehatan/ Lingkungan / Ekonomi / Kreatif / Dokumentasi)</label>
                    <input type="text" class="form-control" id="ketiga" aria-describedby="ketiga" placeholder="Masukkan alasan">
                </div>
                <div class="form-group">
                    <label for="keempat">Apa alasan kamu memilih biding tersebut?</label>
                    <input type="text" class="form-control" id="keempat" aria-describedby="keempat" placeholder="Masukkan alasan">
                </div>
                <div class="form-group">
                    <label for="kelima">Inovasi program apa yang akan kamu berikan jika terpilih menjadi peserta di
                        Millenial
                        Mengabdi ini?</label>
                    <input type="text" class="form-control" id="kelima" aria-describedby="kelima" placeholder="Masukkan alasan">
                </div>
                <div class="form-group">
                    <label for="keenam">Apakah kamu memiliki relasi dengan komunitas, perusahaan, atau lain sebagainya?
                        Menurutmmu pihak mana saja yang bisa kamu ajak berkolaborasi / kerjasama dalam kegiatan
                        Millenial
                        Mengabdi 1.0 ini></label>
                    <input type="text" class="form-control" id="keenam" aria-describedby="keenam" placeholder="Masukkan alasan">
                </div>
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload CV</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </form>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </span>
    </div>

<?= $this->endSection(); ?>