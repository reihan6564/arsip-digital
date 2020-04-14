<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?= base_url(); ?>assets/css/bootsrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>document</title>
    <style>
        body {
            margin-top: 50px;

        }

        .judul {
            text-align: center;
        }

        hr {
            border-width: 5px;
            border-color: black;
        }

        @media print {
            #printPageButton {
                display: none;
            }
        }

        .tombol {
            text-align: center;
        }
    </style>


</head>

<body>
    <div class="judul">
        <h2>Arsip Digital Documen Keluar dan Documen Masuk</h2>
        <h4>Rekap data Documen Keluar</h4>
        <span><b><?= date('Y-m-d'); ?></b></span>
        <hr>
    </div>

    <div class="body">
        <div class="container">
            <table class="table table-bordered">
                <thead backclass="thead-dark">
                    <tr>
                        <th>No Surat</th>
                        <th>Tujuan</th>
                        <th>Prihal</th>
                        <th>Tanggal Surat</th>
                        <th>Tanggal Keluar</th>
                        <th>Kategori</th>
                    </tr>
                </thead>
                <?php
                $doku = $this->db->query("SELECT * FROM dokumen_keluar")->result_array();
                foreach ($doku as $dokumen) {
                    ?>
                    <tbody>
                        <tr>
                            <td><?= $dokumen['no']; ?></td>
                            <td><?= $dokumen['tujuan']; ?></td>
                            <td><?= $dokumen['prihal']; ?></td>
                            <td><?= $dokumen['tanggal_surat']; ?></td>
                            <td><?= $dokumen['tanggal_keluar']; ?></td>
                            <td><?= $dokumen['id_kategori']; ?></td>
                        </tr>
                    </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <div class="tombol">
        <a href="#" id="printPageButton" onClick="window.print();" class="btn btn-outline-success visible-print">Print</a>
        <a href="<?= base_url('admin/laporan_doc'); ?>" id="printPageButton" class="btn btn-outline-primary visible-print">Kembali</a>
    </div>
</body>

</html>