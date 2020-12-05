<?php $dProduk = $db->getOneProduk($_GET['id']); ?>
<?php
if (isset($_POST['tambah'])) {
	$db->Keranjang($_POST);
}
if (isset($_POST['sendkomentar'])) {
	$komentar = $db->saveKomentar($_POST);
	if ($komentar == 1) {
		echo "<script>swal('Success', 'Komentar di tambhakan', 'success');</script>";
	}
}
?>

<div class="bg-light py-3">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"><?= $dProduk->produk_nama ?></strong></div>
		</div>
	</div>
</div>

<div class="site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="cpanel/assets/images/products/<?= $dProduk->produk_gambar ?>" alt="Image" class="img-fluid">
			</div>
			<div class="col-md-6">
				<h2 class="text-black"><?= $dProduk->produk_nama ?></h2>
				<p><?= $dProduk->produk_desk ?></p>
				<p><strong class="text-primary h4"><?= rupiah($dProduk->produk_harga) ?></strong></p>
				<form method="POST">
					<div class="mb-5">
						<div class="input-group mb-3" style="max-width: 120px;">
							<div class="input-group-prepend">
								<button class="btn btn-outline-primary " type="button">&minus;</button>
							</div>

							<input name="idBarang" type="hidden" value="<?= $dProduk->produk_id ?>">
							<input required max="<?= $dProduk->produk_stok ?>" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" name="jumlah" min="1" placeholder="Jumlah" type="number">

							<div class="input-group-append">
								<button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
							</div>
						</div>
					</div>
					<?php if ($dProduk->produk_stok == 0) : ?>
						<div class="col-md-9">
							<p>Maaf Stok Habis</p>
						</div>
					<?php else : ?>
						<div class="col-md-9">
							<input type="submit" name="tambah" class="buy-now btn btn-sm btn-primary" value="TAMBAH KE KERANJANG">
						</div>
					<?php endif ?>
				</form>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-6">
				<h4 class="text-black">Tinggalkan Komentar Anda Tentang Products</h4>
				<?php
				if (empty($_SESSION['member'])) : ?>
					<div class="p-4 border mb-3">
						<span class="d-block text-primary h6 text-uppercase">Login untuk membuat komentar</span>
						<dl>
							<dd>Login ? <a href="index.php?page=pages/login">Click Here</a></dd>
							<dd>New Member ? <a href="index.php?page=pages/regis">Click Here</a></dd>
							<dt class="mb-0">Dengan membuat akun menyetujui kentuan yang belaku di perusahaan kamin, anda juga bisa menikmati fitur bebelanja di website ini</dt>
						</dl>
					</div>
				<?php else : ?>
					<form method="post">
						<div class="p-3 p-lg-5 border">
							<div class="form-group row">
								<div class="col-md-12">
									<label for="c_subject" class="text-black">Nama </label>
									<input readonly value="<?= $_SESSION['member']->member_nama ?>" type="text" class="form-control" id="nama" name="nama">
									<input type="hidden" value="<?= $_SESSION['member']->member_id ?>" name="idMember">
									<input type="hidden" value="<?= $dProduk->produk_id ?>" name="idProduk">
								</div>
							</div>

							<div class="form-group row">
								<div class="col-md-12">
									<label for="komentar" class="text-black">Message </label>
									<textarea name="komentar" id="komentar" cols="30" rows="7" class="form-control"></textarea>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-12">
									<input type="submit" name="sendkomentar" class="btn btn-primary btn-lg btn-block" value="Send Message">
								</div>
							</div>
						</div>
					</form>
				<?php endif ?>
			</div>
		</div>
	</div>
</div>

<div class="site-section block-3 site-blocks-2 bg-light">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7 site-section-heading text-center pt-4">
				<h2>Reviews</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="nonloop-block-3 owl-carousel">
					<?php
					$data = $db->getKomentarByProduk($dProduk->produk_id);
					foreach ($data as $no => $row) :
					?>
						<div class="item">
							<div class="block-4 text-center">
								<!-- <figure class="block-4-image">
								<img src="assets/images/person_2.jpg" alt="Image placeholder" class="img-fluid">
							</figure> -->
								<div class="block-4-text p-4">
									<h3><?= $row->member_nama ?></h3>
									<p class="text-primary font-weight-bold"><?= tgl_indo($row->komentar_tgl) ?></p>
									<p class="mb-0"><?= $row->komentar_text ?></p>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>
</div>