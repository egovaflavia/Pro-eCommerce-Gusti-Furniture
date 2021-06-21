<?php
$dPembayaran = $db->getOnePembayaran($_GET['id']);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <br><br>
                    <h1 align=center style="font-family:Tahoma;" class="m-0 text-dark"> <strong>DATA PEMBAYARAN</strong> </h1>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Pembayaran</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <a href="index.php?page=pages/pemesanan/index" class="btn btn-success mb-3">Kembali</a>
        <div class="row">
            <?php
            if (isset($dPembayaran)) :
            ?>
                <div class="col-8">
                    <div class="card">
                        <!-- <div class="card-header">
                        <h3 class="card-title">pemesanan Adalah </h3>
                    </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Penyetor</th>
                                        <th>Tgl Pembayaran</th>
                                        <th>Bank</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td><?= $dPembayaran->pembayaran_nama_pengirim ?></td>
                                        <td><?= tgl_indo($dPembayaran->pembayaran_tgl) ?></td>
                                        <td><?= $dPembayaran->pembayaran_bank ?></td>
                                        <td><?= rupiah($dPembayaran->pembayaran_jumlah) ?></td>
                                    </tr>
                                    <?php // endforeach 
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-4">
                    <img class="img-responsive img-fluid img-thumbnail rounded mx-auto d-block" width="300px" height="400px" src="assets/images/bukti/<?= $dPembayaran->pembayaran_gambar_bukti ?>" alt="No Image">
                </div>
            <?php else : ?>
                <div class="col-12">
                    <div class="card-body">
                        <center>
                            <h4>Belum Melakukan Pembayaran</h4>
                        </center>
                    </div>
                </div>
            <?php endif ?>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>