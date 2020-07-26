<?php
$id = $_GET['id'];
$dInv = $db->getOnePemesanan($id);

// var_dump($dPemesanan);
$inv = explode('-', $dPemesanan->pemesanan_tgl);
// exit;
// var_dump($dPemesanan);
// exit;

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <br><br>
                    <h1 align=center style="font-family:Tahoma;" class="m-0 text-dark"> <strong>DETAIL DATA PEMESANAN </strong> </h1>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Detail Data Pemesanan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <a href="index.php?page=pages/pemesanan/index" class="btn btn-success">Kembali</a>
        <a href="index.php?page=pages/pemesanan/editStatus&id=<?= $dPemesanan->pemesanan_id ?>" class="btn btn-warning">Update Status</a>
        <div class="card row mt-3">
            <div class="card-body">
                <div class="">
                    <h3 class="">INVOICE: XGST<?= date('ydmhi') ?><?= $dInv->pesanan_id ?></h3>
                    <a target="blank" href="pages/pemesanan/cetakInvoice.php?id=<?= $_GET['id'] ?>" class="btn btn-info"><b>Cetak</b></a>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <b>Nama Pemesan :</b> <?= $dInv->member_nama ?><br>
                            <b>No.Tlp :</b> <?= $dInv->member_tlp ?>
                        </div>
                        <div class="col-md-4">
                            <b>Tanggal Pesan :</b> <?= tgl_indo($dInv->pemesanan_tgl) ?><br>
                            <b>Tanggal Expired :</b> <?= tgl_indo($dInv->pemesanan_expired) ?>
                        </div>
                        <div class="col-md-4">
                            <b>Alamat Kirim (Kota/Kab.) :</b> <?= $dInv->pemesanan_tujuan ?><br>
                            <b>Alamat Lengkap :</b> <?= $dInv->pemesanan_alamat_lengkap ?>
                        </div>
                    </div>
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Harga Satuan</th>
                                <th>Jumlah</th>
                                <th>Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($db->getAllDetail($dInv->pemesanan_id) as $no => $row) :
                                $totalHarga = $row->detail_jumlah * $row->produk_harga;
                                $totalBelanja += $totalHarga;
                            ?>
                                <tr>
                                    <td><?= ++$no ?></td>
                                    <td><?= $row->produk_nama ?></td>
                                    <td><?= rupiah($row->produk_harga) ?></td>
                                    <td><?= format_angka($row->detail_jumlah) ?></td>
                                    <td><?= rupiah($totalHarga) ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="4">Ongkos Kirim</th>
                                <th><?= rupiah($dInv->pemesanan_ongkir) ?></th>
                            </tr>
                            <tr>
                                <th colspan="4">Total Harga</th>
                                <th><?= rupiah($dInv->pemesanan_total) ?></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>