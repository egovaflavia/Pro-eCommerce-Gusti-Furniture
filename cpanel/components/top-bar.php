<nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
    <!-- Left navbar links -->
    <ul style="font-weight: bold" class="navbar-nav">
        <li class="nav-item">
            <span class="nav-link"><i class="fas fa-store-alt"></i>&emsp;Gusti Furniture</span>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index.php" class="nav-link">Home</a>
        </li>
        <?php
        if ($_SESSION['pengguna']->pengguna_level == 1) : ?>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index.php?page=pages/pengguna/index" class="nav-link">Pengguna</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index.php?page=pages/member/index" class="nav-link">Member</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index.php?page=pages/kategori/index" class="nav-link">Kategori Produk</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index.php?page=pages/produk/index" class="nav-link">Produk</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index.php?page=pages/pemesanan/index" class="nav-link">Pemesanan</a>
            </li>
        <?php endif ?>
        <?php
        if ($_SESSION['pengguna']->pengguna_level == 2) : ?>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index.php?page=pages/laporan/index" class="nav-link">Laporan</a>
            </li>
        <?php endif ?>


        <li class="nav-item d-none d-sm-inline-block">
            <a href="logout.php" class="nav-link">Sign Out</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>