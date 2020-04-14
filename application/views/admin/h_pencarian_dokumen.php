<!-- Begin Page Content -->
<div class="container-fluid text-center">

    <!-- Page Heading -->
    <div class="text-left">
        <a href="<?= base_url('admin/pencarian_dokumen') ?>" class="btn btn-outline-secondary mb-4 text-blue-800">
            Kembali</a> </div> <h1 class="h3 mb-4 text-gray-800">Mencari Dokumen Arsip</h1>
                <?= $this->session->flashdata('message'); ?>
                <?php
                if (isset($query)) {
                    ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <?php
                                    foreach ($query as $tampil) :
                                        ?>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Nomor Dokumen : <?= $tampil['no_dokumen']; ?></h5>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-title">Nomor Arsip: <?= $tampil['no_arsip']; ?></p>
                                                <hr>
                                                <p class="card-text"><b><?= $tampil['isi_file_dokumen']; ?></b></p>
                                                <a href="<?= base_url('admin/download_dokumen/') . $tampil['isi_file_dokumen']; ?>" class="btn btn-primary">Unduh</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                    endforeach;
                                    ?>
                            </div>
                        </div>
                    </div>
                <?php
                } else {
                    ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <?php
                                    foreach ($queri as $tampil) :
                                        ?>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Nomor Dokumen : <?= $tampil['no_dokumen']; ?></h5>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-title">Nomor Arsip: <?= $tampil['no_arsip']; ?></p>
                                                <hr>
                                                <p class="card-text"><b><?= $tampil['isi_file_dokumen']; ?></b></p>
                                                <a href="<?= base_url('admin/download_dokumen_k/') . $tampil['isi_file_dokumen']; ?>" class="btn btn-primary">Unduh</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                    endforeach;
                                    ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->