<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db->LoginMember($_POST);
}
?>
<div class="register" style="padding: 1em 0 2em">
    <div class=" login-right">
        <h3 style="color: #458e95;">Login</h3>
        <p>Jika anda memiliki akun, silahkan login</p>
        <form method="POST">
            <div class="row" style="padding-left: 1em">
                <div class="col-md-6">
                    <div>
                        <span>Username<label>*</label></span>
                        <input name="username" type="text">
                    </div>
                    <div>
                        <span>Password<label>*</label></span>
                        <input name="password" type="password">
                    </div>
                    <input type="submit" value="Login">
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