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
<!-- <div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Register</h2>
            </div>
            <div class="col-md-7">

                <form action="#" method="post">

                    <div class="p-3 p-lg-5 border">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="username" class="text-black">Username <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            </div>
                            <div class="col-md-6">
                                <label for="nama" class="text-black">Nama <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="password" class="text-black">Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="text-black">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="text-black">Jenis Kelamin<span>*</span></label>
                                <select class="form-control" name="jenisKelamin">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="text-black">No Hp/Telephone<span>*</span></label>
                                <input name="noHpTlp" class="form-control" type="number" placeholder="No Hp/Telephone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="text-black">Tempat Lahir<span>*</span></label>
                                <input name="tmpLahir" class="form-control" type="text" placeholder="Tempat Lahir">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black">Tanggal Lahir<span>*</span></label>
                                <input name="tglLahir" type="date" class="form-control" placeholder="Tanggal Lahir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Register">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-5 ml-auto">
                <div class="p-4 border mb-3">
                    <span class="d-block text-primary h6 text-uppercase">Term & Condition</span>
                    <dl>
                        <dd>New Member ? <a href="index.php?page=pages/regis">Click Here</a></dd>
                        <dt class="mb-0">Dengan membuat akun menyetujui kentuan yang belaku di perusahaan kamin, anda juga bisa menikmati fitur bebelanja di website ini</dt>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="contactus">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="title">
                    <h2>Registrasi</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- map -->
<div class="contact">
    <div class="container-fluid padddd">

        <div class="row">
            <div class="col-xl-8 center mb-5 col-lg-8 col-md-12 col-sm-12 padddd">
                <form action="#" method="post">

                    <div class="p-3 p-lg-5 border">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="username" class="text-black">Username <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            </div>
                            <div class="col-md-6">
                                <label for="nama" class="text-black">Nama <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="password" class="text-black">Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="text-black">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="text-black">Jenis Kelamin<span>*</span></label>
                                <select style="padding: 0px 0px;" class="form-control" name="jenisKelamin">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="text-black">No Hp/Telephone<span>*</span></label>
                                <input name="noHpTlp" class="form-control" type="number" placeholder="No Hp/Telephone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="text-black">Tempat Lahir<span>*</span></label>
                                <input name="tmpLahir" class="form-control" type="text" placeholder="Tempat Lahir">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black">Tanggal Lahir<span>*</span></label>
                                <input name="tglLahir" type="date" class="form-control" placeholder="Tanggal Lahir">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Register">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>