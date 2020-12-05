<?php
$dKat = $db->getOneKategori($_GET['id']);
$dPro = $db->getAllProdukByKat($_GET['id']);
$item = count($dPro);
?>
<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"><?= $dKat->kategori_nama ?></strong></div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">

        <div class="row mb-5">
            <div class="col-md-9 order-2">

                <div class="row">
                    <div class="col-md-12 mb-5">
                        <div class="float-md-left mb-4">
                            <h2 class="text-black h5"><?= $dKat->kategori_nama ?> - <span><?= $item ?> ITEM(S)</span></h2>
                        </div>
                        <div class="d-flex">
                            <div class="dropdown mr-1 ml-md-auto">
                                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Latest
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                    <a class="dropdown-item" href="#">Men</a>
                                    <a class="dropdown-item" href="#">Women</a>
                                    <a class="dropdown-item" href="#">Children</a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                    <a class="dropdown-item" href="index.php?page=pages/allProducts&order=asc">Name, A to Z</a>
                                    <a class="dropdown-item" href="#">Name, Z to A</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Price, low to high</a>
                                    <a class="dropdown-item" href="#">Price, high to low</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <?php foreach ($db->getAllProdukByKat($_GET['id']) as $row) :
                        $desk = substr($row->produk_desk, 0, 4);
                    ?>

                        <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                            <div class="block-4 text-center border">
                                <figure class="block-4-image">
                                    <a href="index.php?page=pages/detail&id=<?= $row->produk_id ?>"><img src="cpanel/assets/images/products/<?php echo $row->produk_gambar ?>" alt="Image placeholder" class="img-fluid"></a>
                                </figure>
                                <div class="block-4-text p-4">
                                    <h3><a href="index.php?page=pages/detail&id=<?= $row->produk_id ?>"><?= $row->kategori_nama ?></a></h3>
                                    <p class="mb-0"><?= $row->produk_nama ?></p>
                                    <p class="text-primary font-weight-bold"><?php echo rupiah($row->produk_harga) ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>

                </div>
                <div class="row" data-aos="fade-up">
                    <div class="col-md-12 text-center">
                        <div class="site-block-27">
                            <ul>
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 order-1 mb-5 mb-md-0">
                <div class="border p-4 rounded mb-4">
                    <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
                    <ul class="list-unstyled mb-0">
                        <?php foreach ($db->getAllKategori() as $no => $row) : ?>
                            <li class="mb-1"><a href="index.php?page=pages/productsByKategori&id=<?= $row->kategori_id ?>" class="d-flex"><span><?= $row->kategori_nama ?></span> <span class="text-black ml-auto">(2,220)</span></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>