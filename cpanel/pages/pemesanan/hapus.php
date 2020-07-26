<?php
$id = $_GET['id'];
if ($db->deletePemesanan($id) > 0) {
    echo "
    <script>
    window.location='index.php?page=pages/pemesanan/index';
    </script>
    ";
} else {
    echo "
    <script>
    window.location='index.php?page=pages/pemesanan/index';
    </script>
    ";
}
