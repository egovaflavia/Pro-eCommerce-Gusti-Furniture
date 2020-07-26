<?php
error_reporting(0);
include 'cpanel/model/Db.php';
$db = new Db();

?>
<!DOCTYPE html>
<html>

<head>
	<?php include '_partials/head.php'; ?>
</head>

<body>
	<!--header-->
	<?php include '_partials/topBar.php'; ?>
	<!---->
	<div class="container">
		<?php include 'content.php'; ?>

		<?php include '_partials/sideBar.php'; ?>

		<div class="clearfix"></div>
	</div>

	<?php include '_partials/footer.php'; ?>
</body>

</html>