        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Kategori Dokumen</h1>
            <?= $this->session->flashdata('message'); ?>
            <div class="card">
                <div class="card-body">
                    <form method="post" action="<?= base_url('admin/tambah_kategori'); ?>">
                        <div class="form-group row">
                            <label for="nama_kategori" class="col-sm-2 col-form-label">Kategori Dokumen</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" placeholder="Nama Kategori">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-outline-primary">Tambah Kategori</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <hr class="sidebar-divider">
            <br>
            <div class="alert alert-primary">
                <h4>Tabel Rekap Kategori Dokumen</h4>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($kategori as $ktg) :
                                    $id = $ktg['id_kategori'];
                                    ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $ktg['nama_kategori']; ?></td>
                                        <td><a href="<?= base_url('admin/edit_kategori_doc/') . $ktg['id_kategori']; ?>"><span class="badge badge-pill badge-primary">Edit</span></a> | <a class="hapusModalKateg" href="" data-id="<?= $ktg['id_kategori']; ?>" data-toggle="modal" data-target="#hapusModal"><span class="badge badge-pill badge-danger">Hapus</span></a></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Apakah kategori ingin dihapus ?</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                            <a class="btn btn-danger" id="btn-yes" href="">Yes</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->