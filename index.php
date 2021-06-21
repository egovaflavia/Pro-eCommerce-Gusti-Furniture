<?php
// error_reporting(0);
include 'admin/model/Db.php';
$db = new Db();

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include '_partials/head.php'; ?>
</head>
<!-- body -->

<body class="main-layout">

	<!-- loader  -->
	<!-- <div class="loader_bg">
		<div class="loader"><img src="assets/images/loading.gif" alt="#" /></div>
	</div> -->
	<!-- end loader -->

	<div class="wrapper">

		<?php include '_partials/topBar.php'; ?>

		<div id="content">
			<?php include 'content.php'; ?>

			<!--  footer -->
			<?php include '_partials/footer.php' ?>
			<!-- end footer -->
		</div>

	</div>

	<div class="overlay"></div>

	<!-- Javascript files-->
	<?php include '_partials/script.php' ?>

</body>

</html>