        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Ubah Profil</h1>
            <?= $this->session->flashdata('message'); ?>
            <div class="card">
                <div class="card-body">
                    <form method="post" action="<?= base_url('admin/update_profile'); ?>" enctype="multipart/form-data">
                        <?php
                        $queri = $this->db->get_where('tb_admin', ['id' => $user['id']])->row_array();
                        ?>
                        <div class="form-group row">
                            <label for="nama_kategori" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" name="username" value="<?= $queri['username']; ?>" class="form-control" id="username" placeholder="Username">
                                <input type="text" hidden name="id" value="<?= $queri['id']; ?>" class="form-control" id="id" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_kategori" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" value="" class="form-control" id="password" placeholder="...isi lagi jika ingin mengubah password...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Foto Profil</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" name="gambar" id="gambar" class="custom-file-input">
                                    <label for="gambar" class="custom-file-label">Masukkan gambar</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <img src="<?= base_url(); ?>assets/img/<?= $queri['gambar']; ?>" alt="..." width="200" class="img-thumbnail">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-outline-primary">Update Profil</button>
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