<?= $this->extend('admin/v_template_admin'); ?>


<?= $this->section('content_admin'); ?>
<div class="main-content">

  <!-- main content -->
  <section class="section">
    <div class="section-header">
      <h1>Blog</h1>
    </div>

    <div class="row">
      <div class="col-md-12">

        <div class="card card-primary card-outline">
          <div clasas="card-header">

            <?php if (!empty(session()->getFlashdata('berhasil'))) { ?>
              <div class="alert alert-success">
                <?php echo session()->getFlashdata('berhasil'); ?>
              </div>
            <?php } ?>

            <button type="button" class="btn btn-primary" style="margin-left: 25px; margin-top: 20px;"><i class="fa fa-plus"></i><a href="<?= base_url('Cblog/tambahdatablog'); ?>">Add New Blog</a></button>


            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width:10px;">No</th>
                    <th style="width:150px;">Id User</th>
                    <th>Judul</th>
                    <th>Cover</th>
                    <th>Deskripsi</th>
                    <th style="width:10px;">Status</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  $no = 1;
                  foreach ($data as $i) :

                    $id_program = $i['id_program'];
                    $id_user = $i['id_user'];
                    $judul = $i['judul'];
                    $cover = $i['cover'];
                    $deskripsi = $i['deskripsi'];
                    $status = $i['status'];
                  ?>

                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $id_user; ?></td>
                      <td><?php echo $judul ?></td>
                      <td><?php echo $cover ?>
                        <?php if ($cover != NULL) : ?>
                          <a href="/img/<?php echo $cover; ?>" data-toggle="lightbox" data-title="sample gambar">
                            <img src="/img/<?php echo $cover; ?>" class="img-fluid mb-2" alt="sample gambar" style="width: 200px; height: 100px;" />
                          </a>
                        <?php else : ?>
                          <a href="/img/news/img02.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                            <img src="/img/news/img01.jpg" class="img-fluid mb-2" alt="white sample" style="width: 200px; height: 100px;" />
                          </a>
                        <?php endif; ?>
                      </td>

                      <td><?php echo $deskripsi ?></td>
                      <td><?php echo $status ?></td>
                      <td>

                        <span class="badge bg-info" style="margin-bottom: 10px"><a href="Cblog/tambahdatablog" data-target="#edit-data<?php echo $id_program; ?>"><i class="fa fa-edit"> Ubah</i></a></span>

                        <span class="badge bg-danger"><a href="#" onclick="return confirm('Do you want to delete this?')"><i class="fa fa-edit"> Hapus</i></a></span>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
      </div>
      <!-- /.row -->

      <!-- ============================================================================== -->

      <!-- =====================MODAL TAMBAH DATA========================= -->
      <div class="modal fade" id="tambah-data" data-backdrop="static">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><i class="fa fa-plus"></i> Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form role="form" name="myform" method="post" action="/Cblog/tambah" enctype="multipart/form-data">

              <div class="modal-body">


                <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                  <p>Isilah form community anda dengan lengkap, terutama yang bertanda (*)</p>
                </div>

                <div class="form-group">
                  <label>Id User*</label>
                  <input class="form-control" type="text" placeholder="Id User" style="width: 200px;" name="Id User">
                </div>

                <div class="form-group">
                  <label>Judul*</label>
                  <input class="form-control" type="text" placeholder="Judul" style="width: 400px;" name="Judul">
                </div>

                <div class="form-group">
                  <label>Cover*</label>
                  <input class="form-control" type="text" placeholder="Cover" style="width: 400px;" name="Cover">
                </div>

                <div class="form-group">
                  <label>Deskripsi*</label>
                  <input class="form-control" type="text" placeholder="Deskripsi" style="width: 400px;" name="nama_anggota">
                </div>


                <div class="modal-footer">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i></button>
                  <button class="btn btn-warning" type="Reset"><i class="fa fa-redo"></i></button>

                  <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle"></i></button>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <!-- =============================================== -->
      <?php
      foreach ($data as $i) :
        $id_program = $i['id_program'];
        $id_user = $i['id_user'];
        $judul = $i['judul'];
        $cover = $i['cover'];
        $deskripsi = $i['deskripsi'];
        $status = $i['status'];
      ?>

        <!-- =====================MODAL LIHAT DATA========================= -->

        <div class="modal fade" id="lihat-data<?php echo $id_program; ?>" data-backdrop="static">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title"><i class="nav-icon far fa-id-card nav-icon"></i> Detail Blog<b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>


              <div class="modal-body">

                <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4><i class="icon fa fa-info"></i> Keterangan :</h4>
                  <p>Ceklah isi form community anda dengan lengkap, terutama yang bertanda (*). Jika isi form sudah lengkap silakan diunduh. Terimakasih.</p>
                  <a href="#" class="btn btn-success"><i class="fa fa-download"></i> Cetak Blog</a>
                </div>

                <h4><b>DETAIL BLOG</b></h4>
                <p><b><?php echo $judul; ?></b></p>
                </center><br>

                <hr>

                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Id User*</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" disabled="" placeholder="Id User" name="Id_User" value="<?php echo $id_user; ?>" style="width: 200px;">
                  </div>
                </div>


                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Judul*</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" disabled="" placeholder="Judul" name="judul" value="<?php echo $judul; ?>" style="width: 400px;">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Cover*</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" disabled="" placeholder="Cover" name="Cover" value="<?php echo $cover; ?>" style="width: 200px;">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi*</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" disabled="" placeholder="Deskripsi" name="Deskripsi" value="<?php echo $deskripsi; ?>" style="width: 200px;">
                  </div>
                </div>
                <hr>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- ============================================================================== -->

        <!-- =====================MODAL EDIT DATA========================= -->
        <div class="modal fade" id="edit-data<?php echo $id_program; ?>" data-backdrop="static">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title"><i class="fa fa-edit"></i> Ubah Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <form role="form" name="myform" method="post" action="/Cblog/ubah" enctype="multipart/form-data">

                <div class="modal-body">

                  <input type="hidden" name="id_program" value="<?php echo $id_program; ?>">

                  <div class="form-group">
                    <label>Id User*</label>
                    <input class="form-control" type="text" placeholder="Id User" style="width: 400px;" name="id_user" required="" value="<?php echo $id_user; ?>">
                  </div>

                  <div class="form-group">
                    <label>Judul*</label>
                    <input class="form-control" type="text" placeholder="Judul" style="width: 400px;" name="judul" required="" value="<?php echo $judul; ?>">
                  </div>

                  <div class="form-group">
                    <label>Cover*</label>
                    <input class="form-control" type="text" placeholder="Cover" style="width: 400px;" name="cover" required="" value="<?php echo $cover; ?>">
                  </div>

                  <div class="form-group">
                    <label>Dekskripsi*</label>
                    <input class="form-control" type="text" placeholder="Deskripsi" style="width: 400px;" name="deskripsi" required="" value="<?php echo $deskripsi; ?>">
                  </div>

                  <div class="modal-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i></button>
                    <button class="btn btn-warning" type="Reset"><i class="fa fa-redo"></i></button>

                    <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle"></i></button>
                  </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- =============================================== -->

        <!-- =====================MODAL HAPUS DATA========================= -->
        <div class="modal fade" id="hapus-data<?php echo $id_program; ?>">
          <div class="modal-dialog">
            <div class="modal-content">

              <form action="/Cblog/hapus/<?php echo $id_program; ?>" method="post">
                <div class="modal-body">
                  <p><b>Apakah anda yakin ingin menghapus data ini?</b></p>
                </div>
                <div class="modal-footer">

                  <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tidak</button>


                  <button type="submit" class="btn btn-primary">Yakin</button>
                </div>

              </form>
            </div>
          </div>
        </div>
    </div>
  </section>
</div>
<?php endforeach; ?>

<?= $this->endSection(); ?>