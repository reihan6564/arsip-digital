<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Arsip Digital</title>
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/Picture1.ico">
    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>assets/sb-admin-css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">

    <style>
        body {
            background: url(assets/img/background_halaman.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
        }

        .container {
            margin-top: 10%;
        }

        .text-center .alert {
            margin-bottom: 5%;
            margin-top: -2%;
        }

        .square {
            margin-top: -25%;
            margin-left: 35%;
            margin-bottom: 10%;
            width: 150px;
            height: 150px;
            background: url(assets/img/logo.png);
            background-size: contain;
            background-repeat: no-repeat;
        }
    </style>

</head>
<!-- 
    Warna Background bisa diganti dengan mengganti bg-gradient-danger di body menjadi warna yang ada 
    di flatform bootsrap yaitu Danger = merah , Primary = biru tua , Secondary = Abu , Warning = kuning, 
    Light = Putih , Dark = Hitam , Info = Biru Muda , Succes = Hijau
-->

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <!--
            mengganti warna navbar dengan class navbar sesuai warna di boostrap
            misal navbar-danger = navbar warna merah ,atau navbar-warning = navbar warna kuning
        -->
        <div style="margin-left:33%;">
            <a class="navbar-brand" href="#">Telkom Indonesia Indihome Simpang Limun Medan</a>
        </div>
    </nav>

    <nav class="navbar fixed-bottom navbar-dark bg-danger">
        <div class="navbar-brand">

        </div>
        <div class="footer-isi text-light">
            <small>Arsip Digital Website - Dikembangkan Oleh<b> Ahmad Aziz Nasution</b></small>
        </div>
    </nav>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-6">

                <div class="card o-hidden border-0 shadow-lg">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <!-- Judul Form Login -->
                                        <div class="alert alert-danger shadow p-3">
                                            <h1 class="h4">Login</h1>
                                        </div>
                                        <?= $this->session->flashdata('message'); ?>
                                    </div>
                                    <form class="user" method="post" action="<?= base_url('auth/chek_login'); ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="username" id="username" placeholder="Enter Username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Enter Password...">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="submit" value="LOGIN" class="btn btn-danger btn-user btn-block">
                                            </div>
                                        </div>
                                    </form>
                                    <hr>
                                    <!--<small>Kembali ke , <a href="<?= base_url('auth'); ?>">Halaman Utama</a> </small>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>js/sb-admin-2.min.js"></script>

</body>

</html>