<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrasi</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>assets/sb-admin-css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">

    <style>
        .container {
            margin-top: 15%;
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
            background: url(../assets/img/logo.png);
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

<body class="bg-gradient-danger">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="row">
                    <div class="square">
                        <!-- 
                                Logo bisa di ganti di assets/css/style.css
                                cari menggunakan keyboard ctrl+f ".square",
                                lalu ganti gambar di background:url('../img/logokamu');
                            -->
                    </div>
                </div>
                <div class="card o-hidden border-0 shadow-lg">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <!-- Judul Form Login -->
                                        <div class="alert alert-danger shadow p-3">
                                            <h1 class="h4">Registrasi</h1>
                                        </div>
                                        <?= $this->session->flashdata('message'); ?>
                                    </div>
                                    <form class="user" method="post" action="registrasi" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="username" id="username" placeholder="Enter Username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Enter Password...">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" name="image" id="image" class="custom-file-input">
                                                <label for="image" class="custom-file-label"><small>Masukkan gambar</small></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="submit" value="REGISTRASI" class="btn btn-danger btn-user btn-block">
                                            </div>
                                            <div class="col-md-6">
                                                <a href="<?= base_url('auth/login'); ?>" class="btn btn-outline-danger btn-user btn-block">
                                                    LOGIN
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/boostrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/boostrap.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>
</body>

</html>