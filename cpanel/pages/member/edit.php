<?php
$id = $_GET['id'];
$dataMember = $db->getOneMember($id);
$lahir = explode('/', $dataMember->member_tmp_tgl_lahir);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($db->editMember($_POST) > 0) {
        echo "
            <script>
            alert('Data berhasil di edit');
            window.location='index.php?page=pages/member/index';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('Data gagal di edit');
        window.location='index.php?page=pages/member/index';
        </script>
        ";
    }
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <br><br>
                    <h1 align=center style="font-family:Tahoma;" class="m-0 text-dark"> <strong>DATA Member</strong> </h1>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Member</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" class="form-horizontal">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input value="<?= $dataMember->member_id ?>" name="id" type="hidden">
                                    <input value="<?= $dataMember->member_username ?>" name="username" type="text" class="form-control" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input value="<?= $dataMember->member_password ?>" name="password" type="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input value="<?= $dataMember->member_nama ?>" name="nama" type="text" class="form-control" placeholder="Nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <select name="jenisKelamin" class="form-control">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No Hp</label>
                                <div class="col-sm-9">
                                    <input value="<?= $dataMember->member_tlp ?>" name="noHpTlp" type="number" class="form-control" placeholder="No Hp/Telephone">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input value="<?= $dataMember->member_email ?>" name="email" type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-9">
                                    <input value="<?= $lahir[0] ?>" name="tmpLahir" type="text" class="form-control" placeholder="Tempat Lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-9">
                                    <input value="<?= $lahir[1] ?>" name="tglLahir" type="date" class="form-control" placeholder="Tanggal Lahir">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button name="simpan" type="submit" class="btn btn-info">Simpan</button>
                            <a href="index.php?page=pages/member/index" class="btn btn-success float-right">Kembali</a>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-3"></div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>