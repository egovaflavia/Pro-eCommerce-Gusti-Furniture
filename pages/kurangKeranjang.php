<?php
// mendapatkan id
$idBarang = $_GET['idBarang'];

// jk ada produk,mk produk +1
if (isset($_SESSION['keranjang'][$idBarang])) {
    $_SESSION['keranjang'][$idBarang] -= 1;
    // selain itu, mk produk di anggap di beli 1
}
if ($_SESSION['keranjang'][$idBarang] == 1) {
    unset($_SESSION["keranjang"][$idBarang]);
}

echo "
<script>
swal('Success', 'Produk telah di kurang', 'success');
        setTimeout(function(){ window.location='index.php?page=pages/chart'; }, 2000)</script>
";
