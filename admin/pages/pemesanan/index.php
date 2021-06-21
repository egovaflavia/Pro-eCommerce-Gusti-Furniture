<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <br><br>
                    <h1 align=center style="font-family:Tahoma;" class="m-0 text-dark"> <strong>DATA PEMESANAN</strong> </h1>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Pemesanan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- <div class="card-header">
                        <h3 class="card-title">pemesanan Adalah </h3>
                    </div> -->
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width='5px'>No</th>
                                    <th>Tgl Pesan</th>
                                    <th>Tgl Expired</th>
                                    <th>Status</th>
                                    <th>Nama Pemesan</th>
                                    <th>Tujuan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($db->getAllPemesanan() as $no => $row) :
                                    // var_dump($row);
                                    // exit;
                                ?>
                                    <tr>
                                        <td><?= ++$no ?></td>
                                        <td><?= tgl_indo($row->pemesanan_tgl) ?></td>
                                        <td><?= tgl_indo($row->pemesanan_expired) ?></td>
                                        <td><?= $row->pemesanan_status ?></td>
                                        <td><?= $row->member_nama   ?></td>
                                        <td><?= $row->pemesanan_tujuan   ?></td>
                                        <td width='350px'>
                                            <a href="index.php?page=pages/pemesanan/detail&id=<?= $row->pemesanan_id ?>" class="btn btn-sm btn-success">Detail</a>
                                            <a href="index.php?page=pages/pemesanan/pembayaran&id=<?= $row->pemesanan_id ?>" class="btn btn-sm btn-info">Pembayaran</a>
                                            <a href="index.php?page=pages/pemesanan/editStatus&id=<?= $row->pemesanan_id ?>" class="btn btn-sm btn-warning">Update Status</a>
                                            <a onclick="return confirm('Anda yakin hapus ?')" href="index.php?page=pages/pemesanan/hapus&id=<?= $row->pemesanan_id ?>" class="btn btn-sm btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>