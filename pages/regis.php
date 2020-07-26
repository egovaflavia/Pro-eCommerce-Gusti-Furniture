<div class="register" style="padding: 1em 0 2em">
    <div class=" login-right">
        <h3 style="color: #458e95;">Daftar</h3>
        <p>Isi data dengan benar, Mohon di ingat Username dan Password Anda</p>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if ($db->saveMember($_POST) > 0) {
                echo "
                    <script>
                    alert('Anda Berhasil Mendaftar, Silahkan Login');
                    window.location='index.php?page=pages/login';
                    </script>
                    ";
            } else {
                echo "
                <script>
                alert('Data gagal di simpan');
                window.location='index.php';
                </script>
                ";
            }
        }
        ?>
        <form method="POST">
            <div class="row" style="padding-left: 1em">
                <div style="padding-left: 1em" class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <span>Username<label>*</label></span>
                                <input style="width: 99%;" name="username" type="text" placeholder="Username">
                            </div>
                            <div>
                                <span>Password<label>*</label></span>
                                <input style="width: 99%;" name="password" type="password">
                            </div>
                            <div>
                                <span>Nama<label>*</label></span>
                                <input style="width: 99%;" name="nama" type="text" placeholder="Nama">
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
                                <input style="width: 99%;" name="noHpTlp" type="number" placeholder="No Hp/Telephone">
                            </div>
                            <div>
                                <span>Email<label>*</label></span>
                                <input style="width: 99%;" name="email" type="email" placeholder="Email">
                            </div>
                            <div>
                                <span>Tempat Lahir<label>*</label></span>
                                <input style="width: 99%;" name="tmpLahir" type="text" placeholder="Tempat Lahir">
                            </div>
                            <div>
                                <span>Tanggal Lahir<label>*</label></span>
                                <input style="width: 99%;" name="tglLahir" type="date" class="form-control" placeholder="Tanggal Lahir">
                            </div>
                        </div>
                        <input style="width: 99.7%" type="submit" value="Daftar">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>