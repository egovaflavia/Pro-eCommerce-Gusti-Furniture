<div class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="latter-right">
                <p>FOLLOW US</p>
                <ul class="face-in-to">
                    <li><a href="https://www.twitter.com"><span> </span></a></li>
                    <li><a href="https://www.facebook.com"><span class="facebook-in"> </span></a></li>
                    <div class="clearfix"> </div>
                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-cate">
                <h6>KATEGORI</h6>
                <ul>
                    <?php foreach ($db->getAllKategori() as $row) : ?>
                        <li><a href="<?= $row->kategori_id ?>"><?= $row->kategori_nama ?></a></li>
                    <?php endforeach ?>
                </ul>
            </div>
            <div class="footer-bottom-cate bottom-grid-cat">
                <h6>Term & Condition</h6>
                <p>Jika ingin melakukan pembatalan, <br>Hubungi CS</p>
            </div>
            <div class="footer-bottom-cate">
            </div>
            <div class="footer-bottom-cate cate-bottom">
                <h6>Alamat Kami</h6>
                <ul>
                    <li class="temp">
                        <p class="footer-class">Gusti Furniture <a href="index.php?page=pages/lokasi" target="_blank">Klik Disini</a> </p>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>