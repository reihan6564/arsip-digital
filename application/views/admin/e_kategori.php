        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Kategori Dokumen</h1>
            <?= $this->session->flashdata('message'); ?>
            <div class="card">
                <div class="card-body">
                    <form method="post" action="<?= base_url('admin/update_kategori'); ?>">
                        <div class="form-group row">
                            <label for="nama_kategori" class="col-sm-2 col-form-label">Kategori Dokumen</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_kategori" value="<?php
                                                                                $queri = $this->db->get_where('tb_kategori_dokumen', ['id_kategori' => $id])->row_array();
                                                                                echo $queri['nama_kategori'];
                                                                                ?>" class="form-control" id="nama_kategori" placeholder="Nama Kategori">
                                <input type="text" hidden name="id" value="<?php
                                                                            echo $queri['id_kategori'];
                                                                            ?>" class="form-control" id="id" placeholder="Nama Kategori">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-outline-primary">Update Kategori</button>
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