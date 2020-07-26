<div id="sub" class="sub-cate">
    <div class=" top-nav rsidebar span_1_of_left">
        <h3 class="cate" style="background: #458e95;"><b>KATEGORI</b></h3>
        <ul class="menu">
            <li class="item1">
                <ul class="cute">
                    <li class="subitem1"><a href="index.php?page=pages/allProducts">All</a></li>
                    <?php foreach ($db->getAllKategori() as $row) : ?>
                        <li class="subitem1"><a href="index.php?page=pages/productsByKategori&id=<?= $row->kategori_id ?>"><?= $row->kategori_nama ?></a></li>
                    <?php endforeach ?>
                </ul>
            </li>
        </ul>
    </div>
    <!--initiate accordion-->

    <div class=" chain-grid menu-chain" style="padding: 0em">
        <a href="http://spmb.upiyptk.ac.id/"><img style="padding: 0em" class="img-responsive chain" src="cpanel/assets/images/upi.png" alt="" /></a>
        <div class="grid-chain-bottom chain-watch">
            <center>
                <h6><a href="http://spmb.upiyptk.ac.id/">Universitas Putra Indonesia</a></h6>
                <a href="http://spmb.upiyptk.ac.id/">Klik Disini</a>
            </center>
        </div>
    </div>
</div>