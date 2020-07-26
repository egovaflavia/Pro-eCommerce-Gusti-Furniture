<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <center>
                        <h1 class="m-0 text-dark text-center">Laporan</h1>
                    </center>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-5">Laporan Produk</h4>
                            <div class="form-group">
                                <a href="pages/laporan/laporanProduk.php" target="blank" class="mt-5 btn btn-success">Cetak</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h4>Laporan Perhari</h4>
                            <form target="blank" action="pages/laporan/laporanPerhari.php" method="POST">
                                <div class="form-group">
                                    <label>Pilih Tanggal</label>
                                    <input type="date" value="<?= date('Y-m-d') ?>" name="hari" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="perhari" class="btn btn-success" value="Cetak">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h4>Laporan Perbulan</h4>
                            <form target="blank" action="pages/laporan/laporanPerbulan.php" method="POST">
                                <div class="form-group">
                                    <label>Pilih Bulan</label>
                                    <input class="form-control" type="month" name="bulan" value="<?= date('Y-m') ?>">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="perbulan" class="btn btn-success" value="Cetak">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h4>Laporan Pertahun</h4>
                            <form target="blank" action="pages/laporan/laporanPertahun.php" method="POST">
                                <div class="form-group">
                                    <label>Pilih Tahun</label>
                                    <select required name="tahun" class="form-control">
                                        <option value="">Pilih</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="pertahun " class="btn btn-success" value="Cetak">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>