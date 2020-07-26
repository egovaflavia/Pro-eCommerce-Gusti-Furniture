<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <br><br>
                    <h1 align=center style="font-family:Tahoma;" class="m-0 text-dark"> <strong>DATA PRODUK</strong> </h1>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Produk</li>
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
                        <h3 class="card-title">produk Adalah </h3>
                    </div> -->
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a href="index.php?page=pages/produk/tambah" class="btn btn-success mb-4">Tambah Data</a>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width='5px'>No</th>
                                    <th>Kategori</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($db->getAllProduk() as $no => $row) :  ?>
                                    <tr>
                                        <td><?= ++$no ?></td>
                                        <td><?= $row->kategori_nama ?></td>
                                        <td><?= $row->produk_nama ?></td>
                                        <td><?= rupiah($row->produk_harga) ?></td>
                                        <td><?= format_angka($row->produk_stok) ?> <a href="index.php?page=pages/produk/editStok&id=<?= $row->produk_id ?>" class="float-right btn btn-sm btn-secondary">Update Stok</a></td>
                                        <td width='160px'>
                                            <a href="index.php?page=pages/produk/detail&id=<?= $row->produk_id ?>" class="btn btn-sm btn-info">Detail</a>
                                            <a href="index.php?page=pages/produk/edit&id=<?= $row->produk_id ?>" class="btn btn-sm btn-warning">Edit</a>
                                            <a onclick="return confirm('Anda yakin hapus ?')" href="index.php?page=pages/produk/hapus&id=<?= $row->produk_id ?>" class="btn btn-sm btn-danger">Hapus</a>
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