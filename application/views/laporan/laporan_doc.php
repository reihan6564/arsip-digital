        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Laporan Dokumen</h1>
            <?= $this->session->flashdata('message'); ?>
            <div class="card text-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Laporan Dokumen masuk</h4>
                                    <hr>
                                    <a href="<?= base_url('admin/laporan_doc_masuk'); ?>" class="btn btn-outline-primary">Print</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Laporan Dokumen keluar</h4>
                                    <hr>
                                    <a href="<?= base_url('admin/laporan_doc_keluar'); ?>" class="btn btn-outline-primary">Print</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Laporan Kategori</h4>
                                    <hr>
                                    <a href="<?= base_url('admin/laporan_kategori'); ?>" class="btn btn-outline-primary">Print</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="sidebar-divider">
            <br>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->