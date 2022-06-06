<?= $this->extend('admin/v_template_admin'); ?>


<?= $this->section('content_admin'); ?>
<div class="main-content">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
  <!-- main content -->
  <section class="section">
    <div class="section-header">
      <h1>Dashboard Admin</h1>
    </div>

    <form>
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Tambah Data Blog</h4>
          </div>
          <div class="card-body">
            <div class="alert alert-info">
              <b>Note!</b> Pastikan Mengisi Form Blog dengan Lengkap
            </div>
            <div class="form-group">
              <label>ID User</label>
              <input type="text" class="form-control" id="id_user">
            </div>
            <div class="form-group">
              <label>Judul</label>
              <input type="text" class="form-control" id="judul">
            </div>
            <div class="form-group">
              <label>Cover</label>
              <input type="file" class="form-control" id="cover">
            </div>
            <div class="form-group">
              <label>Deskripsi</label>
              <textarea class="form-control" id="deskripsi"></textarea>
            </div>
            <div class="form-group">
              <label>Status</label>
              <select class="form-control" id="status">
                <option>Arsip</option>
                <option>Update</option>
              </select>
            </div>
            <div class="buttons">
              <a class="submit btn btn-primary">Submit</a>
              <a class="submit btn btn-danger">Cancel</a>
            </div>
            <script>
              document.querySelector(".submit").addEventListener('click', function() {
                swal("Berhasil", "Data Anda Berhasil Disimpan", "success");
              });
            </script>
          </div>
        </div>
    </form>
  </section>
</div>

<?= $this->endSection(); ?>