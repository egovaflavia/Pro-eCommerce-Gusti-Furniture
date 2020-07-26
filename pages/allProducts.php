<?php
$dPro = $db->getAllProduk();
$item = count($dPro);
?>
<div class="women-product">
    <div class=" w_content">
        <div class="women">
            <a href="#">
                <h4>All - <span><?= $item ?> ITEMS</span> </h4>
            </a>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- grids_of_4 -->
    <div class="grid-product">
        <?php foreach ($db->getAllProduk() as $row) :
            $desk = substr($row->produk_desk, 0, 20);
        ?>
            <div class="  product-grid">
                <div class="content_box"><a href="index.php?page=pages/detail&id=<?= $row->produk_id ?>">
                    </a>
                    <div class="left-grid-view grid-view-center"><a href="index.php?page=pages/detail&id=<?= $row->produk_id ?>">
                            <img style="width:260px; height: 200px" src="cpanel/assets/images/products/<?php echo $row->produk_gambar ?>" class="img-responsive" alt="">
                            <div class="mask">
                                <div class="info">Quick View</div>
                            </div>
                        </a>
                    </div>
                    <h4><a href="index.php?page=pages/detail&id=<?= $row->produk_id ?>"> <?= $row->produk_nama ?></a></h4>
                    <?php echo rupiah($row->produk_harga) ?>
                </div>
            </div>
        <?php endforeach ?>
        <div class="clearfix"> </div>
    </div>
</div>