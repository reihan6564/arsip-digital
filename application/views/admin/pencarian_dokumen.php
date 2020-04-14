        <!-- Begin Page Content -->
        <div class="container-fluid text-center">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Mencari Dokumen Arsip</h1>
            <?= $this->session->flashdata('message'); ?>
            <div class="card">
                <div class="card-body">
                    <form method="post" action="<?= base_url('admin/hasil_pencarian_dokumen'); ?>" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="nama_kategori" class="col-sm-2 col-form-label">Cari Dokumen</label>
                            <div class="col-sm-4">
                                <input type="text" name="cari" class="form-control" id="cari" placeholder="cari...">
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-12">
                                    <select name="pilih" id="" class="form-control">
                                        <option>Pilih</option>
                                        <option value="no_dokumen">Nomor Dokumen</option>
                                        <option value="no_arsip">Nomor Arsip</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kategori" class="col-sm-2 col-form-label">Dokumen</label>
                            <div class="col-sm-10">
                                <select name="dokumen" id="" class="form-control">
                                    <option>Pilih Dokumen</option>
                                    <option value="dokumen_keluar">Dokumen Arsip Keluar</option>
                                    <option value="dokumen_masuk">Dokumen Arsip Masuk</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-outline-primary">Cari Dokumen</button>
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