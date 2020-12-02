<footer class="site-footer border-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Navigations</h3>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <ul class="list-unstyled">
                            <?php if (!empty($_SESSION['member'])) : ?>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="index.php?page=pages/akun">Akun Anda</a></li>
                                <li><a href="index.php?page=pages/chart">Keranjang</a></li>
                                <li><a href="index.php?page=pages/history">History</a></li>
                                <li><a href="logout.php"> Logout</a></li>
                            <?php else : ?>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="index.php?page=pages/login">Login</a></li>
                                <li><a href="index.php?page=pages/regis">Daftar</a></li>
                            <?php endif ?>
                            <li><a href="index.php?page=pages/profil">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <ul class="list-unstyled">
                            <li><a href="index.php?page=pages/allProducts">All</a></li>
                            <?php foreach ($db->getAllKategori() as $no => $row) : ?>
                                <li><a href="index.php?page=pages/productsByKategori&id=<?= $row->kategori_id ?>"><?= $row->kategori_nama ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <ul class="list-unstyled">
                            <li><a href="#">Shop Now</a></li>
                            <li><a href="#">Account</a></li>
                            <li><a href="#">Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <h3 class="footer-heading mb-4">New</h3>
                <?php
                $produk1 = $db->get1Produk()[0];
                // echo '<pre>';
                // print_r($produk1);
                // echo '</pre>';
                // die;
                ?>
                <a href="#" class="block-6">
                    <img src="cpanel/assets/images/products/<?= $produk1->produk_gambar ?>" alt="Image placeholder" class="img-fluid rounded mb-4">
                    <h3 class="font-weight-light  mb-0"><?= $produk1->produk_nama ?></h3>
                    <p><?= rupiah($produk1->produk_harga) ?> &mdash; <?= tgl_indo($produk1->produk_tgl_post) ?></p>
                </a>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-5 mb-5">
                    <h3 class="footer-heading mb-4">Contact Info</h3>
                    <ul class="list-unstyled">
                        <li class="address">Jln. Andam Dewi No.08 Kubu Marapalam - Padang (Kota) - Sumatera Barat</li>
                        <li class="phone"><a href="tel://08116606162">0811-6606-162</a></li>
                        <li class="email">ayeshacollection@gmail.com</li>
                    </ul>
                </div>

                <div class="block-7">
                    <!-- <form action="#" method="post">
                        <label for="email_subscribe" class="footer-heading">Subscribe</label>
                        <div class="form-group">
                            <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                            <input type="submit" class="btn btn-sm btn-primary" value="Send">
                        </div>
                    </form> -->
                </div>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script data-cfasync="false" src="https://cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | by <a href="https://colorlib.com" target="_blank" class="text-primary">gv</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>

        </div>
    </div>
</footer>