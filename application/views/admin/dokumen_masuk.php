        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Dokumen Arsip Masuk</h1>
            <?= $this->session->flashdata('message'); ?>
            <div class="card">
                <div class="card-body">
                    <form method="post" action="<?= base_url('admin/tambah_doc_masuk'); ?>" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="no_dokumen" class="col-sm-2 col-form-label">Nomor Dokumen</label>
                            <div class="col-sm-10">
                                <input type="text" name="no_dokumen" class="form-control" id="no_dokumen" placeholder="No Dokumen">
                                <?= form_error('no_dokumen', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_arsip" class="col-sm-2 col-form-label">Nomor Arsip</label>
                            <div class="col-sm-10">
                                <input type="text" name="no_arsip" value="<?= $acak; ?>" class="form-control" id="no_arsip" placeholder="No Arsip">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keamanan" class="col-sm-2 col-form-label">Keamanan Arsip</label>
                            <div class="col-sm-10">
                                <select name="keamanan" id="keamanan" class="form-control">
                                    <option>Pilih Keamanan</option>
                                    <option value="Umum">Umum</option>
                                    <option value="Biasa">Biasa</option>
                                    <option value="Rahasia">Rahasia</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <select name="kategori" id="" class="form-control">
                                    <option>Pilih Kategori</option>
                                    <?php
                                    $query = $this->db->query("SELECT * FROM tb_kategori_dokumen")->result_array();
                                    foreach ($query as $aks) :
                                        ?>
                                        <option value="<?= $aks['id_kategori']; ?>"><?= $aks['nama_kategori']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Asal_dokumen" class="col-sm-2 col-form-label">Asal Dokumen</label>
                            <div class="col-sm-10">
                                <input type="text" name="asal_dokumen" class="form-control" id="asal_dokumen" placeholder="Asal Dokumen">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="indeks_dokumen" class="col-sm-2 col-form-label">Indeks Dokumen</label>
                            <div class="col-sm-10">
                                <input type="text" name="indeks_dokumen" class="form-control" id="indeks_dokumen" placeholder="Indeks Dokumen">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal_dokumen" class="col-sm-2 col-form-label">Tanggal Dokumen</label>
                            <div class="col-sm-10">
                                <div class="date">
                                    <input placeholder="Tanggal Dokumen" value="<?= date('Y-m-d'); ?>" type="text" class="form-control datepicker" name="tanggal_dokumen">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal_dokumen_masuk" class="col-sm-2 col-form-label">Tanggal Dokumen Masuk</label>
                            <div class="col-sm-10">
                                <div class="date">
                                    <input placeholder="Tanggal Dokumen Masuk" value="<?= date('Y-m-d'); ?>" type="text" class="form-control datepicker" name="tanggal_dokumen_masuk">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                                <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan Dokumen">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="isi_file_dokumen" class="col-sm-2 col-form-label">Isi File Dokumen</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" name="isi" id="isi" class="custom-file-input">
                                    <label for="isi" class="custom-file-label">Masukkan Dokumen</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-outline-primary">Arsipkan Dokumen</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <hr class="sidebar-divider">
            <br>
            <div class="alert alert-primary">
                <h4>Tabel Rekap Dokumen Arsip Masuk</h4>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Dokumen</th>
                                    <th>Nomor Arsip</th>
                                    <th>Keamanan Arsip</th>
                                    <th>Asal Dokumen</th>
                                    <th>Indeks Dokumen</th>
                                    <th>Keterangan</th>
                                    <th>Tanggal Dokumen</th>
                                    <th>Tanggal Dokumen Masuk</th>
                                    <th>Isi File</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($doc_masuk as $docb) :
                                    $kateg = $this->db->query("SELECT * FROM tb_kategori_dokumen WHERE id_kategori = '$docb[id_kategori]' ")->row_array();
                                    if ($docb['status'] == "Belum Dibaca") {
                                        ?>
                                        <tr class="bg-danger text-light">
                                            <td><?= $no++; ?></td>
                                            <td><?= $docb['no_dokumen']; ?></td>
                                            <td><?= $docb['no_arsip']; ?></td>
                                            <td><?= $docb['keamanan_arsip']; ?></td>
                                            <td><?= $docb['asal_dokumen']; ?></td>
                                            <td><?= $docb['indeks_dokumen']; ?></td>
                                            <td><?= $docb['keterangan']; ?></td>
                                            <td><?= $docb['tanggal_dokumen']; ?></td>
                                            <td><?= $docb['tanggal_dokumen_masuk']; ?></td>
                                            <td><?= $docb['isi_file_dokumen']; ?></td>
                                            <td><?= $kateg['nama_kategori']; ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/edit_doc_masuk/') . $docb['id_dokumen_masuk']; ?>"><span class="badge badge-pill badge-primary">Edit</span></a> |
                                                <a href="" class="hapusModal" data-target="#hapusModal" data-toggle="modal" data-id="<?= $docb['id_dokumen_masuk']; ?>"><span class="badge badge-pill badge-danger">Hapus</span></a>
                                                <a href="<?= base_url('admin/download_dokumen/') . $docb['isi_file_dokumen']; ?>" class=""><span class="badge badge-pill badge-success">Baca</span></a>
                                            </td>
                                        </tr>
                                    <?php
                                        } else {
                                            ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $docb['no_dokumen']; ?></td>
                                            <td><?= $docb['no_arsip']; ?></td>
                                            <td><?= $docb['keamanan_arsip']; ?></td>
                                            <td><?= $docb['asal_dokumen']; ?></td>
                                            <td><?= $docb['indeks_dokumen']; ?></td>
                                            <td><?= $docb['keterangan']; ?></td>
                                            <td><?= $docb['tanggal_dokumen']; ?></td>
                                            <td><?= $docb['tanggal_dokumen_masuk']; ?></td>
                                            <td><?= $docb['isi_file_dokumen']; ?></td>
                                            <td><?= $kateg['nama_kategori']; ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/edit_doc_masuk/') . $docb['id_dokumen_masuk']; ?>"><span class="badge badge-pill badge-primary">Edit</span></a> |
                                                <a href="" class="hapusModalMasuk" data-target="#hapusModalMasuk" data-toggle="modal" data-id="<?= $docb['id_dokumen_masuk']; ?>"><span class="badge badge-pill badge-danger">Hapus</span></a>
                                                <a href="<?= base_url('admin/download_dokumen') . $docb['id_dokumen_masuk']; ?>" class=""><span class="badge badge-pill badge-success">Baca</span></a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="hapusModalMasuk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Apakah dokumen ingin dihapus ?</div>
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