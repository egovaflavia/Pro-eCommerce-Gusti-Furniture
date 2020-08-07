<?php
error_reporting(0);
include '../../model/Db.php';
$db = new Db();


?>
<!DOCTYPE html>
<html>

<head>
    <title>Gusti Furniture</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->

    <link rel="stylesheet" href="../../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../../assets/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
</head>

<body onload="window.print()">
    <div class="container mb-5">
        <div class="row mt-5">
            <div class="col-md-3">
                <img src="../../../assets/images/logo.png" alt="No Images">
            </div>
            <div class="col-md-9">
                <h2>Gusti Furniture</h2>
                <p>
                    Memberikan Kemudahan untuk Kebutuhan Rumah Tangga Anda
                    <br>
                    <span class="text-bold">
                        Jl. Raya Padang Panjang - Bukittinggi, Batipuh Baruah, Batipuh, Kabupaten Tanah Datar, Sumatera Barat 27125
                    </span>
                    <br>
                    <span class="text-bold">No Hp : 0812-6606-3658</span>
                </p>
            </div>
        </div>
        <h2 class="text-center">Laporan Per <?= tgl_indo($_POST['hari']) ?></h2>
        <table class="mt-3 table table-bordered">
            <tr>
                <th width="5px">No</th>
                <th>Nama Pemesan</th>
                <th>Tgl Pesan</th>
                <th>Sub Total</th>
            </tr>
            <?php foreach ($db->getLapHari($_POST['hari']) as $no => $row) :
                @$total = $row->pemesanan_total;
            ?>
                <tr>
                    <td><?= ++$no ?></td>
                    <td><?= $row->member_nama ?></td>
                    <td><?= tgl_indo($row->pemesanan_tgl) ?></td>
                    <td><?= rupiah($row->pemesanan_total) ?></td>
                </tr>
            <?php endforeach ?>
            <tr>
                <td colspan="3">Total</td>
                <td><?= rupiah($total)  ?></td>
            </tr>
        </table>

        <div class="float-right mt-5">
            <p>.............. , <?= tgl_indo(date('Y-m-d')) ?></p>
            <br>
            <h6 class="mt-5 text-center">Pimpinan</h6>
        </div>
    </div>
    <!-- ./wrapper -->
</body>

</html>