<?php
$id = $_GET['id'];
if ($db->deleteProduk($id) > 0) {
    echo "
    <script>
    window.location='index.php?page=pages/produk/index';
    </script>
    ";
} else {
    echo "
    <script>
    window.location='index.php?page=pages/produk/index';
    </script>
    ";
}
