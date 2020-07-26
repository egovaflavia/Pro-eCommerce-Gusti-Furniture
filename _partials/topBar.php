<div class="header">
    <div class="top-header" style="background: #458e95;">
        <div class="container">
            <div class="top-header-left">
                <ul class="support">
                    <li><a href="#"><label> </label></a></li>
                    <li><a href="https://wa.me/6281270962590">24x7 Call<span class="live"> Center</span></a></li>
                </ul>
                <ul class="support">
                    <li class="van"><a href="#"><label> </label></a></li>
                    <li><a href="#">Pengiriman Cepat<span class="live"></span></a></li>
                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="header-bottom-left">
                <div class="logo">
                    <a href="index.php"><img width="180px" height="80px" src="assets/images/logo.png" alt="" /></a>
                </div>
            </div>
            <div class="header-bottom-right" style="width: 45%;;">
                <ul class="login" style="width: 100%;">
                    <b>

                        <?php if (!empty($_SESSION['member'])) : ?>
                            <li><a href="index.php" style="padding-left:15px">Home</a></li>
                            <li><a href="index.php?page=pages/akun" style="padding-left:15px">Akun Anda</a></li>
                            <li><a href="index.php?page=pages/chart" style="padding-left:15px">Keranjang</a></li>
                            <li><a href="index.php?page=pages/history" style="padding-left:15px">History</a></li>
                            <li><a href="logout.php" style="padding-left:15px"> Logout</a></li>
                        <?php else : ?>
                            <li><a href="index.php" style="padding-left:15px">Home</a></li>
                            <li><a href="index.php?page=pages/login" style="padding-left:15px">Login</a></li>
                            <li><a href="index.php?page=pages/regis" style="padding-left:15px">Daftar</a></li>
                        <?php endif ?>
                        <li><a href="index.php?page=pages/profil" style="padding-left:15px">Profil</a></li>
                    </b>
                </ul>
            </div>
        </div>
    </div>
</div>