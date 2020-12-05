<?php
// mendapatkan id
$idBarang = $_GET['id'];
unset($_SESSION["keranjang"][$idBarang]);
echo "
<script>
swal('Success', 'Produk Telah di Hapis', 'success');
        setTimeout(function(){ window.location='index.php?page=pages/chart'; }, 2000)
</script>";
