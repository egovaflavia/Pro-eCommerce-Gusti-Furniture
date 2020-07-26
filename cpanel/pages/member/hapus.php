<?php
$id = $_GET['id'];
if ($db->deleteMember($id) > 0) {
    echo "
    <script>
    window.location='index.php?page=pages/member/index';
    </script>
    ";
} else {
    echo "
    <script>
    window.location='index.php?page=pages/member/index';
    </script>
    ";
}
