<?php
if (!empty($_GET['page'])) {
    require_once $_GET['page'] . '.php';
} else {
    include 'home.php';
}
