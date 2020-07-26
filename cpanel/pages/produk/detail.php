<?php
$id = $_GET['id'];
$dataProduk = $db->getOneProduk($id);
// var_dump($dataProduk);
// exit;

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <br><br>
                    <h1 align=center style="font-family:Tahoma;" class="m-0 text-dark"> <strong>DETAIL DATA PRODUK <br> <?= $dataProduk->produk_nama ?></strong> </h1>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Detail Data Produk</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <a href="index.php?page=pages/produk/index" class="btn btn-success">Kembali</a>
        <a href="index.php?page=pages/produk/edit&id=<?= $dataProduk->produk_id ?>" class="btn btn-warning">Edit</a>
        <div class="row mt-3">
            <div class="col-md-8">

                <table class="table table-brordered table-striped">
                    <tr>
                        <th>Kategori</th>
                        <td>:</td>
                        <td><?= $dataProduk->kategori_nama ?></td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>:</td>
                        <td><?= $dataProduk->produk_nama ?></td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <td>:</td>
                        <td><?= rupiah($dataProduk->produk_harga) ?></td>
                    </tr>
                    <tr>
                        <th>Stok</th>
                        <td>:</td>
                        <td><?= format_angka($dataProduk->produk_stok) ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Post</th>
                        <td>:</td>
                        <td><?= tgl_indo($dataProduk->produk_tgl_post) ?></td>
                    </tr>
                    <tr>
                        <th>Deskripsi</th>
                        <td>:</td>
                        <td><?= $dataProduk->produk_desk ?></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4">
                <img class="img-responsive img-fluid img-thumbnail rounded mx-auto d-block" width="300px" height="400px" src="assets/images/products/<?= $dataProduk->produk_gambar ?>" alt="No Image">
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>