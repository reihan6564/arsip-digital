<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Arsip Digital</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="assets/css/boostrap.min.css" rel="stylesheet">
    <style>
        .logo {
            background-color: rgba(215, 0, 0, 0);
            margin-left: 440px;
            margin-top: 10px;
            margin-bottom: -70px;
            background: url(assets/img/logo_indihome.png);
            background-size: contain;
            background-repeat: no-repeat;
            width: 200px;
            height: 200px;
        }

        .footer-isi {
            margin-left: 0px;
        }

        body {
            background: url(assets/img/background_halaman.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
        }

        body::after {
            content: '';
            height: 100%;
            width: 100%;
            background-image: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.4));
            display: block;
            position: absolute;
            bottom: 0;
        }

        .card {
            background-color: rgba(215, 0, 0, 0);
            margin-top: 100px
        }

        hr {
            background-color: white;
        }

        div,
        nav {
            z-index: 1;
        }
    </style>
    <!--
            Logo bisa diganti di assets/img/logokamu.png
            jangan lupa copykan file logo mu ke file assets/img/
            agar gambarnya terbaca
        -->

</head>

<body class="">

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <!--
            mengganti warna navbar dengan class navbar sesuai warna di boostrap
            misal navbar-danger = navbar warna merah ,atau navbar-warning = navbar warna kuning
        -->
        <a class="navbar-brand" href="#">Telkom indihome simpang limun medan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active" href="<?= base_url('auth/login'); ?>"><i class="fas fa-sign-in-alt"></i> &nbspLogin</a>
            </div>
        </div>
    </nav>

    <nav class="navbar fixed-bottom navbar-dark bg-danger">
        <div class="navbar-brand">
            Footer
        </div>
        <div class="footer-isi text-light">
            <small>Telkom Indihome Simpang Limun - Dikembangkan Oleh<b> Aziz Achmad Nasution</b></small>
        </div>
    </nav>
    <div class="container text-center">
        <div class="card text-light">
            <div class="logo">

            </div>
            <div class="card-body">
                <?= $this->session->flashdata('message'); ?>
                <h4>Arsip Digital Assurance</h4>
                <h5>
                    Telkom indihome simpang limun medan <br>
                </h5>
                <hr>
                <div class="text-center">
                    <form action="<?= base_url('auth/pencarian_hal_utama'); ?>" method="post">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="dokumen" id="dokumen" placeholder="Cari dokumen ...">
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <input type="submit" hidden value="Cari" class="btn btn-outline-danger btn-user btn-block">
                            </div>
                        </div>
                    </form>
                    <hr>
                    <small>
                        #cari berdasarkan nama document atau no-arsip
                        contoh : arsip y78gr
                    </small>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Bootstrap core JavaScript-->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>

</html>