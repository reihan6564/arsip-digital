        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Dokumen Arsip Keluar</h1>
            <?= $this->session->flashdata('message'); ?>
            <div class="card">
                <div class="card-body">
                    <form method="post" action="<?= base_url('admin/tambah_doc_keluar'); ?>" enctype="multipart/form-data">
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
                                <input type="text" value="<?= $acak; ?>" name="no_arsip" class="form-control" id="no_arsip" placeholder="No Arsip">
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
                            <label for="tujuan_dokumen" class="col-sm-2 col-form-label">Tujuan Dokumen</label>
                            <div class="col-sm-10">
                                <input type="text" name="tujuan_dokumen" class="form-control" id="tujuan_dokumen" placeholder="Tujuan Dokumen">
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
                                    <input placeholder="tanggal_dokumen" value="<?= date('Y-m-d'); ?>" type="text" class="form-control datepicker" name="tanggal_dokumen">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal_dokumen_keluar" class="col-sm-2 col-form-label">Tanggal Dokumen Keluar</label>
                            <div class="col-sm-10">
                                <div class="date">
                                    <input placeholder="Tanggal_dokumen_keluar" value="<?= date('Y-m-d'); ?>" type="text" class="form-control datepicker" name="tanggal_dokumen_keluar">
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
                <h4>Tabel Rekap Dokumen Arsip Keluar</h4>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Dokumen</th>
                                    <th>No Arsip</th>
                                    <th>Keamanan Arsip</th>
                                    <th>Tujuan</th>
                                    <th>Indeks</th>
                                    <th>Keterangan</th>
                                    <th>Tanggal Dokumen</th>
                                    <th>Tanggal Dokumen Keluar</th>																	
                                    <th>Isi File</th>
									<th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($doc_keluar as $docl) :
                                    $kateg = $this->db->query("SELECT * FROM tb_kategori_dokumen WHERE id_kategori = '$docl[id_kategori]' ")->row_array();
                                    ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $docl['no_dokumen']; ?></td>
                                        <td><?= $docl['no_arsip']; ?></td>
                                        <td><?= $docl['keamanan_arsip']; ?></td>
                                        <td><?= $docl['tujuan_dokumen']; ?></td>
                                        <td><?= $docl['indeks_dokumen']; ?></td>
                                        <td><?= $docl['keterangan']; ?></td>
                                        <td><?= $docl['tanggal_dokumen']; ?></td>
                                        <td><?= $docl['tanggal_dokumen_keluar']; ?></td>
                                        <td><?= $docl['isi_file_dokumen']; ?></td>
                                        <td><?= $kateg['nama_kategori']; ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/edit_doc_keluar/') . $docl['id_dokumen_keluar']; ?>"><span class="badge badge-pill badge-primary">Edit</span></a> |
                                            <a href="" class="hapusModal" data-target="#hapusModal" data-toggle="modal" data-id="<?= $docl['id_dokumen_keluar']; ?>"><span class="badge badge-pill badge-danger">Hapus</span></a>
                                        </td>
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