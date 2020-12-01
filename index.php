<?php
// error_reporting(0);
include 'cpanel/model/Db.php';
$db = new Db();

?>
<!DOCTYPE html>
<html>

<head>
	<?php include '_partials/head.php'; ?>
</head>

<body>

	<div class="site-wrap">
		<?php include '_partials/topBar.php'; ?>

		<?php include 'content.php'; ?>

		<?php include '_partials/footer.php' ?>

	</div>

	<?php include '_partials/script.php' ?>

</body>

</html>