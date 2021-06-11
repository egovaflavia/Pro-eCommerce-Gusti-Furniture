<div class="sidebar">
    <!-- Sidebar  -->
    <nav id="sidebar">

        <div id="dismiss">
            <i class="fa fa-book"></i>
        </div>

        <ul class="list-unstyled components">
            <li><a href="index.html">Home</a></li>
            <?php if (!empty($_SESSION['member'])) : ?>
                <li><a href="index.php?page=pages/akun">Akun Anda</a></li>
                <li><a href="index.php?page=pages/chart">Keranjang</a></li>
                <li><a href="index.php?page=pages/history">History</a></li>
                <li><a href="logout.php"> Logout</a></li>
            <?php else : ?>
                <li><a href="index.php?page=pages/login">Login</a></li>
                <li><a href="index.php?page=pages/regis">Register</a></li>
            <?php endif ?>
            <li> <a href="about.html">Tentang Kami</a></li>
            <li> <a href="contact.html">Kontak</a></li>

        </ul>

    </nav>
</div>
<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-3 logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="index.html"><img src="assets/logo.png" alt="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="right_header_info">
                        <ul>
                            <?php if (!empty($_SESSION['member'])) : ?>
                                <li>
                                    <a href="#"><img style="margin-right: 15px;" src="assets/icon/1.png" alt="#" /></a>
                                </li>
                            <?php endif; ?>
                            <li>
                                <a href="#"><img style="margin-right: 15px;" src="assets/icon/3.png" alt="#" /></a>
                            </li>

                            <li>
                                <button type="button" id="sidebarCollapse">
                                    <img src="assets/images/menu_icon.png" alt="#" />
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>
<!-- end header -->