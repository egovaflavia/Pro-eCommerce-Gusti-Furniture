<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db->LoginMember($_POST);
}
?>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Login</h2>
            </div>
            <div class="col-md-7">

                <form method="post">

                    <div class="p-3 p-lg-5 border">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="username" class="text-black">Username <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="text-black">Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Login">
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
</div>