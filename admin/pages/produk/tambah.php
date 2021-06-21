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
            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                // var_dump($_POST);
                // exit;
                if ($db->saveProduk($_POST, $_FILES['gambar']) > 0) {
                    echo "
                    <script>
                    alert('Data berhasil di simpan');
                    window.location='index.php?page=pages/produk/index';
                    </script>
                    ";
                } else {
                    echo "
                <script>
                alert('Data gagal di simpan');
                window.location='index.php?page=pages/produk/index';
                </script>
                ";
                }
            }
            ?>
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Produk</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" enctype="multipart/form-data" class="form-horizontal">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Kategori</label>
                                            <div class="col-sm-9">
                                                <select name="kategori" required class="form-control">
                                                    <option value="">Pilih</option>
                                                    <?php foreach ($db->getAllKategori() as $dKategori) : ?>
                                                        <option value="<?= $dKategori->kategori_id ?>"><?= $dKategori->kategori_nama ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nama Produk</label>
                                            <div class="col-sm-9">
                                                <input max="27" name="nama" type="text" class="form-control" placeholder="Nama Produk">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Harga</label>
                                            <div class="col-sm-9">
                                                <input name="harga" type="number" min="1" class="form-control" placeholder="Harga">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Stok</label>
                                            <div class="col-sm-9">
                                                <input name="stok" type="number" min="1" class="form-control" placeholder="Stok">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Gambar</label>
                                            <div class="col-sm-10">
                                                <div class="custom-file">
                                                    <input name="gambar" type="file" class="custom-file-input">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Deskripsi</label>
                                            <div class="col-sm-10">
                                                <textarea class="textarea" name="desc" placeholder="Deskripsi"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button name="simpan" type="submit" class="btn btn-info">Simpan</button>
                                <a href="index.php?page=pages/produk/index" class="btn btn-success float-right">Kembali</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
    </div>