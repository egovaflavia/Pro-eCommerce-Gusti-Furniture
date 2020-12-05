<header class="site-navbar" role="banner">
    <div class="site-navbar-top">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                    <form action="" class="site-block-top-search">
                        <span class="icon icon-search2"></span>
                        <input type="text" class="form-control border-0" placeholder="Search">
                    </form>
                </div>

                <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                    <div class="site-logo">
                        <a href="index.php" class="js-logo-clone">Ayesha Collection</a>
                    </div>
                </div>

                <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                    <div class="site-top-icons">
                        <ul>
                            <?php if (!empty($_SESSION['member'])) : ?>
                                <li><a href="index.php?page=pages/akun"><span class="icon icon-person"></span></a></li>
                            <?php endif; ?>
                            <li>
                                <a href="index.php?page=pages/chart" class="site-cart">
                                    <span class="icon icon-shopping_cart"></span>
                                    <span class="count"><?= count($_SESSION["keranjang"]) ?></span>
                                </a>
                            </li>
                            <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
            <ul class="site-menu js-clone-nav d-none d-md-block">
                <li><a href="index.php">Home</a></li>
                <li class="has-children">
                    <a href="javascrip:void(0)">Category</a>
                    <ul class="dropdown">
                        <li><a href="index.php?page=pages/allProducts">All</a></li>
                        <?php foreach ($db->getAllKategori() as $no => $row) : ?>
                            <li><a href="index.php?page=pages/productsByKategori&id=<?= $row->kategori_id ?>"><?= $row->kategori_nama ?></a></li>
                        <?php endforeach ?>
                    </ul>
                </li>
                <?php if (!empty($_SESSION['member'])) : ?>
                    <li><a href="index.php?page=pages/akun">Akun Anda</a></li>
                    <li><a href="index.php?page=pages/chart">Cart</a></li>
                    <li><a href="index.php?page=pages/history">History</a></li>
                    <li><a href="logout.php"> Logout</a></li>
                <?php else : ?>
                    <li><a href="index.php?page=pages/login">Login</a></li>
                    <li><a href="index.php?page=pages/regis">Register</a></li>
                <?php endif ?>
                <li><a href="index.php?page=pages/profil">Contact Us</a></li>
            </ul>
        </div>
    </nav>
</header>