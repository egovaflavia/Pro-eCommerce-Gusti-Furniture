<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($db->editMember($_POST) > 0) {
        echo "<script>
        swal('Success', 'Data Berhasil di Update', 'success');
        setTimeout(function(){ window.location='index.php?page=pages/akun'; }, 2000)
        </script>";
    }
}
$dMember = $db->getOneMember($_SESSION['member']->member_id);
$lahir = explode('/', $dMember->member_tmp_tgl_lahir);
?>
<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Contact</strong></div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Akun Anda</h2>
            </div>
            <div class="col-md-12">
                <form method="POST">
                    <div class="p-3 p-lg-5 border">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label>Username<label>* Tidak Boleh di Ubah</label></label>
                                <input value="<?= $dMember->member_id ?>" type="hidden" name="id">
                                <input class="form-control" value=" <?= $dMember->member_username ?>" name="username" type="text" readonly placeholder="Username">
                            </div>
                            <div class="col-md-6">
                                <label>Password<label>*</label></label>
                                <input class="form-control" value="<?= $dMember->member_password ?>" name="password" type="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label>Nama<label>*</label></label>
                                <input class="form-control" value="<?= $dMember->member_nama ?>" name="nama" type="text" placeholder="Nama">
                            </div>
                            <div class="col-md-6">
                                <label>Jenis Kelamin<label>*</label></label>
                                <select style="width:99%" class="form-control" name="jenisKelamin">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label>No Hp/Telephone<label>*</label></label>
                                <input class="form-control" value="<?= $dMember->member_tlp ?>" name="noHpTlp" type="number" placeholder="No Hp/Telephone">
                            </div>
                            <div class="col-md-6">
                                <label>Email<label>*</label></label>
                                <input class="form-control" value="<?= $dMember->member_email ?>" name="email" type="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label>Tempat Lahir<label>*</label></label>
                                <input class="form-control" value="<?= $lahir[0] ?>" name="tmpLahir" type="text" placeholder="Tempat Lahir">
                            </div>
                            <div class="col-md-6">
                                <label>Tanggal Lahir<label>*</label></label>
                                <input class="form-control" value="<?= $lahir[1] ?>" name="tglLahir" type="date" class="form-control" placeholder="Tanggal Lahir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-2">
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Update">
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </form>

</div>