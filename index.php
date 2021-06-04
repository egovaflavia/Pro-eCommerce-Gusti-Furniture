<?php
// error_reporting(0);
include 'cpanel/model/Db.php';
$db = new Db();

?>

<body>

	<div class="site-wrap">
		<?php include '_partials/topBar.php'; ?>

		<?php include 'content.php'; ?>

		

	</div>

	

</body>

</html>

<?php
// error_reporting(0);
include 'cpanel/model/Db.php';
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
	<div class="loader_bg">
		<div class="loader"><img src="assets/images/loading.gif" alt="#" /></div>
	</div>
	<!-- end loader -->

	<div class="wrapper">


		<div class="sidebar">
			<!-- Sidebar  -->
			<nav id="sidebar">

				<div id="dismiss">
					<i class="fa fa-arrow-left"></i>
				</div>

				<ul class="list-unstyled components">

					<li class="active"> <a href="index.html">Home</a></li>
					<li> <a href="about.html">About</a></li>
					<li> <a href="product.html">Product</a></li>
					<li> <a href="blog.html">Blog</a></li>
					<li> <a href="contact.html">Contact us</a></li>

				</ul>

			</nav>
		</div>

		<div id="content">
			<!-- header -->
			<header>
				<!-- header inner -->
				<div class="header">

					<div class="container-fluid">

						<div class="row">
							<div class="col-lg-3 logo_section">
								<div class="full">
									<div class="center-desk">
										<div class="logo">
											<a href="index.html"><img src="assets/images/logo.jpg" alt="#"></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-9">
								<div class="right_header_info">
									<ul>
										<li>
											<a href="#"><img style="margin-right: 15px;" src="icon/1.png" alt="#" /></a>
										</li>
										<li class="tytyu">
											<a href="#"><img style="margin-right: 15px;" src="icon/2.png" alt="#" /></a>
										</li>
										<li>
											<a href="#"><img style="margin-right: 15px;" src="icon/3.png" alt="#" /></a>
										</li>

										<li>
											<button type="button" id="sidebarCollapse">
												<img src="assets/images/menu_icon.png" alt="#" />
											</button>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- end header inner -->
			</header>
			<!-- end header -->
			<section class="slider_section">
				<div class="banner_main">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mapimg">
								<div class="text-bg">
									<h1>The latest <br> <strong class="black_bold">furniture Design</strong><br></h1>
									<a href="#">Shop Now <i class='fa fa-angle-right'></i></a>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
								<div class="text-img">
									<figure><img src="assets/images/bg.jpg" /></figure>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- discount -->
			<div class="container">
				<div id="myCarousel" class="carousel slide banner_Client" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="container">
								<div class="carousel-caption text">
									<div class="row">
										<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
											<div class="img_bg">
												<h3>50% DISCOUNT<br> <strong class="black_nolmal">the latest collection</strong></h3>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
											<div class="img_bg">
												<figure><img src="assets/images/discount.jpg" /></figure>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="container">
								<div class="carousel-caption text">
									<div class="row">
										<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
											<div class="img_bg">
												<h3>50% DISCOUNT<br> <strong class="black_nolmal">the latest collection</strong></h3>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
											<div class="img_bg">
												<figure><img src="assets/images/discount.jpg" /></figure>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="container">
								<div class="carousel-caption text">
									<div class="row">
										<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
											<div class="img_bg">
												<h3>50% DISCOUNT<br> <strong class="black_nolmal">the latest collection</strong></h3>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
											<div class="img_bg">
												<figure><img src="assets/images/discount.jpg" /></figure>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end discount -->
			<!-- trending -->
			<div class="trending">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<div class="title">
								<h2>Trending <strong class="black">Categories</strong></h2>

							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margitop">
							<div class="trending-box">
								<figure><img src="assets/images/1.jpg" /></figure>
								<h3>Outdoor</h3>

							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
							<div class="trending-box">
								<figure><img src="assets/images/2.jpg" /></figure>
								<h3>Living Room</h3>

							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margitop">
							<div class="trending-box">
								<figure><img src="assets/images/3.jpg" /></figure>
								<h3>Bedroom Lighting</h3>

							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- end trending -->

			<!-- our brand -->
			<div class="brand">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="title">
								<h2>Featured <strong class="black">Brands</strong></h2>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="brand-bg">
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
							<div class="brand-box">
								<i><img src="icon/p1.png" /></i>
								<h3>Jane Lauren Design Chair</h3>
								<span>$80.00</span>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
							<div class="brand-box">
								<i><img src="icon/p2.png" /></i>
								<h3>Jane Lauren Design Chair</h3>
								<span>$80.00</span>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
							<div class="brand-box">
								<i><img src="icon/p3.png" /></i>
								<h3>Jane Lauren Design Chair</h3>
								<span>$80.00</span>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
							<div class="brand-box">
								<i><img src="icon/p4.png" /></i>
								<h3>Jane Lauren Design Chair</h3>
								<span>$80.00</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end our brand -->
			<!-- map -->
			<div class="contact">
				<div class="container-fluid padddd">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<div class="title">
								<h2>Contact <strong class="black">Us</strong></h2>

							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
							<div class="map_section">
								<div id="map">
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padddd">
							<form class="main_form">
								<div class="row">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<input class="form-control" placeholder="Name" type="text" name="Name">
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<input class="form-control" placeholder="Email" type="text" name="Email">
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<input class="form-control" placeholder="Phone" type="text" name="Phone">
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<button class="send">Send</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- end map -->
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