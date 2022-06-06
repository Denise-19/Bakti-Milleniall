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

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah-data" style="margin-left: 25px; margin-top: 20px;">
                            <i class="fa fa-plus"></i> Tambah Data
                        </button>


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
                                    <?php $j = 1; ?>
                                    <?php foreach ($blog as $i) : ?>
                                        <tr>
                                            <th scope="row"><?= $j++; ?></th>
                                            <td><?= $i['id_user']; ?></td>
                                            <td><?= $i['judul']; ?></td>
                                            <td><img src="/img/<?= $i['cover']; ?>" alt=""></td>
                                            <td><?= $i['deskripsi']; ?></td>
                                            <td><?= $i['status']; ?></td>
                                            <td>
                                                <a href="" class="btn btn-succes">Detail</a>
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
        </div>
        <!-- /.row -->
    </section>
</div>
<?= $this->endSection(); ?>