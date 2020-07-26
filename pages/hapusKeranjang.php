<?php
// mendapatkan id
$idBarang = $_GET['id'];
unset($_SESSION["keranjang"][$idBarang]);

echo "<script>alert('Produk Telah di Hapus');</script>";
echo "<script>window.location='index.php?page=pages/chart'</script>";
