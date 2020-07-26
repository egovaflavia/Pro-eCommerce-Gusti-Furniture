<div class="products">
    <h5 class="latest-product">Produk Terbaru</h5>
    <a class="view-all" href="index.php?page=pages/allProducts">Lihat Semua<span> </span></a>
</div>

<div class="product-left">

    <?php foreach ($db->get3Produk() as $count => $row) :   ?>
        <div class="col-md-4 <?php print ($count == 2) ? 'grid-top-chain' : ''; ?> chain-grid">
            <a href="index.php?page=pages/detail&id=<?php echo $row->produk_id ?>"><img style="width: 100%; height: 270px" class="img-responsive chain" src="cpanel/assets/images/products/<?php echo $row->produk_gambar ?>" alt="No Image" /></a>
            <span class="star"> </span>
            <div class="grid-chain-bottom">
                <h6><a href="index.php?page=pages/detail&id=<?php echo $row->produk_id ?>"><?php echo $row->produk_nama ?></a></h6>
                <div class="star-price">
                    <div class="dolor-grid">
                        <span class="actual"><?php echo rupiah($row->produk_harga) ?></span>
                        <!-- <span class="reducedfrom"><?php echo rupiah($row->produk_harga + 30000) ?></span> -->
                    </div>
                    <a class="now-get get-cart" href="index.php?page=pages/detail&id=<?php echo $row->produk_id ?>">DETAIL</a>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>


    <div class="clearfix mt-3 mb-3"></div>

</div>