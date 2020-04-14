        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Edit Dokumen masuk</h1>
            <?php
            $queri = $this->db->get_where('tb_dokumen_masuk', ['id_dokumen_masuk' => $id])->row_array();
            ?>
            <?= $this->session->flashdata('message'); ?>
            <div class="card">
                <div class="card-body">
                    <form method="post" action="<?= base_url('admin/update_doc_masuk'); ?>" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="no_dokumen" class="col-sm-2 col-form-label">Nomor Dokumen</label>
                            <div class="col-sm-10">
                                <input type="text" hidden value="<?= $queri['id_dokumen_masuk']; ?>" name="id" class="form-control" id="no_dokumen" placeholder="No Dokumen">
                                <input type="text" value="<?= $queri['no_dokumen']; ?>" name="no_dokumen" class="form-control" id="no_dokumen" placeholder="No Dokumen">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_arsip" class="col-sm-2 col-form-label">Nomor Arsip</label>
                            <div class="col-sm-10">
                                <input type="text" value="<?= $queri['no_arsip']; ?>" name="no_arsip" class="form-control" id="no_arsip" placeholder="No Arsip">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keamanan" class="col-sm-2 col-form-label">Keamanan</label>
                            <div class="col-sm-10">
                                <select name="keamanan" id="" class="form-control">
                                    <option value="<?= $queri['keamanan_arsip']; ?>"><?= $queri['keamanan_arsip']; ?></option>
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
                                    <?php
                                    $quer = $this->db->query("SELECT * FROM tb_kategori_dokumen where id_kategori = '$queri[id_kategori]'")->row_array();
                                    ?>
                                    <option value="<?= $quer['id_kategori']; ?>"><?= $quer['nama_kategori']; ?></option>
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
                            <label for="asal_dokumen" class="col-sm-2 col-form-label">Asal Dokumen</label>
                            <div class="col-sm-10">
                                <input type="text" value="<?= $queri['asal_dokumen']; ?>" name="asal_dokumen" class="form-control" id="asal_dokumen" placeholder="Asal Dokumen">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="indeks_dokumen" class="col-sm-2 col-form-label">Indeks Dokumen</label>
                            <div class="col-sm-10">
                                <input type="text" value="<?= $queri['indeks_dokumen']; ?>" name="indeks_dokumen" class="form-control" id="indeks_dokumen" placeholder="Indeks Dokumen">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal_dokumen" class="col-sm-2 col-form-label">Tanggal Dokumen</label>
                            <div class="col-sm-10">
                                <div class="date">
                                    <input placeholder="Tanggal Dokumen" value="<?= $queri['tanggal_dokumen']; ?>" type="text" class="form-control datepicker" name="tanggal_dokumen">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal_dokumen_masuk" class="col-sm-2 col-form-label">Tanggal Dokumen Masuk</label>
                            <div class="col-sm-10">
                                <div class="date">
                                    <input placeholder="Tanggal Dokumen Masuk" value="<?= $queri['tanggal_dokumen_masuk']; ?>" type="text" class="form-control datepicker
                                    " name="tanggal_dokumen_masuk">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                                <input type="text" name="keterangan" value="<?= $queri['keterangan']; ?>" class="form-control" id="keterangan" placeholder="Keterangan Surat">
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
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-outline-primary">Edit Dokumen</button>
                            </div>
                            <div class="col-sm-2">
                                <a href="<?= base_url('admin/doc_masuk'); ?>" class="btn btn-outline-primary">Kembali</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>



        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->