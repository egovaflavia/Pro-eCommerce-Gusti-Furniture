<?php $dProduk = $db->getOneProduk($_GET['id']); ?>
<?php
if (isset($_POST['tambah'])) {
	$db->Keranjang($_POST);
}
?>

<div class="contactus">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="title">
					<h2>Details</h2>

				</div>
			</div>
		</div>
	</div>
</div>

<div class="bg-light py-3">
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-6">
				<img src="admin/assets/images/products/<?= $dProduk->produk_gambar ?>" alt="Image" class="img-fluid">
			</div>
			<div class="col-md-6">
				<h2 class="text-black"><?= $dProduk->produk_nama ?></h2>
				<p><?= $dProduk->produk_desk ?></p>
				<p><strong class="text-primary h4"><?= rupiah($dProduk->produk_harga) ?></strong></p>
				<form method="POST">
					<div class="mb-5">
						<div class="input-group mb-3" style="max-width: 120px;">
							<input name="idBarang" type="hidden" value="<?= $dProduk->produk_id ?>">
							<input required max="<?= $dProduk->produk_stok ?>" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" name="jumlah" min="1" placeholder="Jumlah" type="number">
						</div>
					</div>
					<?php if ($dProduk->produk_stok == 0) : ?>
						<div class="col-md-9">
							<p>Maaf Stok Habis</p>
						</div>
					<?php else : ?>
						<div class="col-md-9">
							<input type="submit" name="tambah" class="btn btn-primary" value="TAMBAH KE KERANJANG">
						</div>
					<?php endif ?>
				</form>
			</div>
		</div>

	</div>
</div>

<div class="site-section">
	<div class="container">

	</div>
</div>