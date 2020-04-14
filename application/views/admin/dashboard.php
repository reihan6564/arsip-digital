        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Home</h1>
            <?= $this->session->flashdata('message'); ?>
            <marquee behavior="" scrollamount="10" direction="">
                <div class="alert alert-warning text-center" role="alert">
                    <h4>Selamat Datang Di Aplikasi Arsip Digital Berbasis Web</h4>
                </div>
            </marquee>
            <div class="row">
                <div class="col-xl-12 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Dokumen Arsip Masuk</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                                                                        foreach ($hdb as $hitung_db) :
                                                                                            echo $hitung_db['jumlah_db'];
                                                                                        endforeach; ?> Dokumen</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-envelope fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-12 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Dokumen Arsip Keluar</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                                                                        foreach ($hdl as $hitung_dl) :
                                                                                            echo $hitung_dl['jumlah_dl'];
                                                                                        endforeach; ?> Dokumen</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-envelope-open fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Kategori Dokumen</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                                                                        foreach ($ktg as $ktg) :
                                                                                            echo $ktg['jumlah_ktg'];
                                                                                        endforeach; ?> Kategori</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-align-justify fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->