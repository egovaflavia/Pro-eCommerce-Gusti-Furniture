<section class="slider_section">
    <div class="banner_main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mapimg">
                    <div class="text-bg">
                        <h1>Undang Mereka ke<br> <strong class="black_bold">Pernikahan</strong><br></h1>
                        <a href="#"><b>Pesan Sekarang </b><i class='fa fa-angle-right'></i></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-img">
                        <figure><img src="assets/utama.jpg" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- discount -->
<div class="container">
    <div id="myCarousel" class="carousel slide banner_Client" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="carousel-caption text">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                <div class="img_bg">
                                    <h3>Berikan Kesan<br> <strong class="black_nolmal">Terhadap Tamu</strong></h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="img_bg">
                                    <figure><img src="assets/images/discount.jpg" /></figure>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption text">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                <div class="img_bg">
                                    <h3>Ini Adalah<br> <strong class="black_nolmal">Hari Mu</strong></h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="img_bg">
                                    <figure><img src="assets/images/discount.jpg" /></figure>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption text">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                <div class="img_bg">
                                    <h3>Tetapkan Undanganmu<br> <strong class="black_nolmal">Sekarang Juga</strong></h3>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="img_bg">
                                    <figure><img src="assets/images/discount.jpg" /></figure>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end discount -->
<!-- trending -->
<div class="trending">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="title">
                    <h2>Undangan <strong class="black">Terbaru</strong></h2>

                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($db->get3Produk() as $data3) : ?>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margitop">
                    <div class="trending-box">
                        <figure><img src="admin/assets/images/products/<?= $data3->produk_gambar ?>" /></figure>
                        <h3><?= $data3->produk_nama ?></h3>
                        <h4><a href="index.php?page=pages/detail&id=<?= $data3->produk_id ?>">Rp. <?= format_angka($data3->produk_harga) ?></a></h4>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<!-- end trending -->

<!-- our brand -->
<div class="brand">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>Produk <strong class="black">Kami</strong></h2>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="brand-bg">
        <div class="row">
            <?php
            foreach ($db->getAllProduk() as $data) :
            ?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                    <div class="brand-box">
                        <i><img src="admin/assets/images/products/<?= $data->produk_gambar ?>" /></i>
                        <h3><?= $data->produk_nama ?></h3>
                        <span>Rp. <?= format_angka($data->produk_harga) ?></span>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<!-- end our brand -->