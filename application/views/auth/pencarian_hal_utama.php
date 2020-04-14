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
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/boostrap.min.css" rel="stylesheet">
    <style>
        .logo {
            background-color: rgba(215, 0, 0, 0);
            margin-left: 440px;
            margin-bottom: -70px;
            background: url(../assets/img/logo_indihome.png);
            background-size: contain;
            background-repeat: no-repeat;
            width: 200px;
            height: 200px;
        }

        .footer-isi {
            margin-left: 0px;
        }

        body {
            background: url(../assets/img/background_halaman.jpg);
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
            margin-top: 10px;
        }

        hr {
            background-color: white;
        }

        div,
        nav {
            z-index: 1;
        }

        .space {
            margin-bottom: -100px;
        }

        .kotak {
            margin-top: 100px;
            margin-top: 100px
        }
    </style>

</head>

<body class="">

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
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
    <div class="container text-center">
        <div class="card text-light">
            <div class="card-body space">
                <h4>Arsip Digital Assurance</h4>
                <h5>
                    Telkom indihome simpang limun medan <br>
                </h5>
                <hr>
            </div>
            <div class="row">
                <?php
                foreach ($query as $tampil) :
                    ?>
                    <div class="col-md-4">
                        <div class="container">
                            <div class="card kotak">
                                <div class="card-header text-dark">
                                    <h5>No surat : <?= $tampil['no']; ?></h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-title">Asal Surat : <?= $tampil['asal_surat']; ?></p>
                                    <hr>
                                    <p class="card-text"><b><?= $tampil['isi_surat']; ?></b></p>
                                    <a href="<?= base_url('auth/download_dokumen/') . $tampil['isi_surat']; ?>" class="btn btn-outline-danger">Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
            <hr>
            <div class="footer-isi text-light">
                <small>Telkom Indihome Simpang Limun - Dikembangkan Oleh<b> Aziz Achmad Nasution</b></small>
            </div>
        </div>

    </div>

</body>
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url(''); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(''); ?>js/sb-admin-2.min.js"></script>

</html>