<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($db->editMember($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil di Update');
        window.location='index.php?page=pages/akun';
        </script>";
    }
}
$dMember = $db->getOneMember($_SESSION['member']->member_id);
$lahir = explode('/', $dMember->member_tmp_tgl_lahir);
?>
<div class="register" style="padding: 1em 0 2em">
    <div class=" login-right">
        <h3 style="color: #458e95;">Akun Anda</h3>
        <form method="POST">
            <div class="row" style="padding-left: 1em">
                <div style="padding-left: 1em" class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <span>Username<label>* Tidak Boleh di Ubah</label></span>
                                <input value="<?= $dMember->member_id ?>" type="hidden" name="id">
                                <input value=" <?= $dMember->member_username ?>" style="width: 99%;" name="username" type="text" readonly placeholder="Username">
                            </div>
                            <div>
                                <span>Password<label>*</label></span>
                                <input value="<?= $dMember->member_password ?>" style="width: 99%;" name="password" type="password">
                            </div>
                            <div>
                                <span>Nama<label>*</label></span>
                                <input value="<?= $dMember->member_nama ?>" style="width: 99%;" name="nama" type="text" placeholder="Nama">
                            </div>
                            <div>
                                <span>Jenis Kelamin<label>*</label></span>
                                <select style="width:99%" class="form-control" name="jenisKelamin">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <span>No Hp/Telephone<label>*</label></span>
                                <input value="<?= $dMember->member_tlp ?>" style="width: 99%;" name="noHpTlp" type="number" placeholder="No Hp/Telephone">
                            </div>
                            <div>
                                <span>Email<label>*</label></span>
                                <input value="<?= $dMember->member_email ?>" style="width: 99%;" name="email" type="email" placeholder="Email">
                            </div>
                            <div>
                                <span>Tempat Lahir<label>*</label></span>
                                <input value="<?= $lahir[0] ?>" style="width: 99%;" name="tmpLahir" type="text" placeholder="Tempat Lahir">
                            </div>
                            <div>
                                <span>Tanggal Lahir<label>*</label></span>
                                <input value="<?= $lahir[1] ?>" style="width: 99%;" name="tglLahir" type="date" class="form-control" placeholder="Tanggal Lahir">
                            </div>
                        </div>
                        <input style="width: 99.7%" type="submit" value="Update">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="login-left">
        <h3 style="color: #458e95;">Member Baru</h3>
        <p class="text-uppercase">
            Dengan membuat akun menyetujui kentuan yang belaku di perusahaan kamin, anda juga bisa menikmati fitur bebelanja di website ini
        </p>
        <a class="acount-btn" href="index.php?page=pages/regis">Buat Akun</a>
    </div>
    <div class="clearfix"> </div>
</div>