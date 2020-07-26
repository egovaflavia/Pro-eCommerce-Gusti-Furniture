<div class="shoes-grid-left" style="padding-top: 2em ;">
    <?php foreach ($db->get2Produk() as $count => $row) :
        $desk = substr($row->produk_desk, 0, 10);
    ?>
        <a href="index.php?page=pages/detail&id=<?= $row->produk_id ?>">
            <div class="col-md-6 con-sed-grid <?php echo ($count == 1) ? 'sed-left-top' : '' ?>">
                <div class=" elit-grid">
                    <h4><?= $row->produk_nama ?></h4>
                    <label><?= rupiah($row->produk_harga) ?></label>
                    <!-- <p><?= $desk ?>... </p> -->
                    <p></p>
                    <span class="on-get "> DETAIL </span>
                </div>
                <img class="img-responsive shoe-left img-fluid" style="width: 160px; height: 163px" src="cpanel/assets/images/products/<?php echo $row->produk_gambar ?>" alt=" " />
                <div class="clearfix"> </div>
            </div>
        </a>
    <?php endforeach ?>
</div>