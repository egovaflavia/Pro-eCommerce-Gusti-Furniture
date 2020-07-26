<?php
// mendapatkan id
$idBarang = $_GET['idBarang'];

// jk ada produk,mk produk +1
if (isset($_SESSION['keranjang'][$idBarang])) {
    $_SESSION['keranjang'][$idBarang] += 1;
    // selain itu, mk produk di anggap di beli 1
} else {
    $_SESSION['keranjang'][$idBarang] = 1;
}

echo "<script>alert('Produk Telah di Tambah');</script>";
echo "<script>window.location='index.php?page=pages/chart'</script>";
