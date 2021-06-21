<?php
// jk kosong keranjang belanja,mk larikan ke index
if (empty($_SESSION["keranjang"]) or !isset($_SESSION["keranjang"])) {
	echo "
	<script>
	swal('Info', 'Keranjang Kosong, Silahkan Berbelanja Dahulu', 'info');
	setTimeout(function(){ window.location='index.php'; }, 2000)
	</script>
	";
}
if (!isset($_SESSION["member"])) {
	echo "
	<script>
	swal('Info', 'Silahkan Login Terlebih Dahulu', 'info');
	setTimeout(function(){ window.location='index.php?page=pages/login'; }, 2000)
	</script>";
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if ($db->Pemesanan($_POST, $_SESSION['keranjang']) > 0) {
		echo "
		<script>
		alert('Pembelian Sukses, Mohon Lakukan Pembayaran');
		window.location = 'index.php';
		</script>";
	};
}
?>


<div class="contactus">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="title">
					<h2>Keranjang Belanja</h2>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- map -->
<div class="contact">
	<div class="container-fluid padddd">
		<div class="row">
			<div class="col-xl-8 center mb-5 col-lg-8 col-md-12 col-sm-12 padddd">
				<div class="row mb-5">
					<form class="col-md-12" method="post">
						<div class="site-blocks-table">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="product-thumbnail">Image</th>
										<th class="product-name">Product</th>
										<th class="product-price">Price</th>
										<th class="product-quantity">Quantity</th>
										<th class="product-total">Total</th>
										<th class="product-remove">Remove</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($_SESSION['keranjang'] as $idProduk => $jumlah) :
										$dProduk = $db->getOneProduk($idProduk);
										// var_dump($dProduk);
										$totalHarga = $jumlah * $dProduk->produk_harga;
										$totalBelanja += $totalHarga;
									?>
										<tr>
											<td class="product-thumbnail">
												<img src="admin/assets/images/products/<?= $dProduk->produk_gambar ?>" width="100" height="100" alt="Image" class="img-fluid">
											</td>
											<td class="product-name">
												<h2 class="h5 text-black"><?= $dProduk->produk_nama ?></h2>
											</td>
											<td><?= rupiah($dProduk->produk_harga) ?></td>
											<td>
												<div class="input-group mb-3" style="max-width: 120px;">
													<div class="input-group-prepend">
														<a class="btn btn-outline-primary" href="index.php?page=pages/kurangKeranjang&idBarang=<?= $dProduk->produk_id ?>">&minus;</a>
													</div>
													<input type="text" class="form-control text-center" value="<?= format_angka($jumlah) ?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
													<div class="input-group-append">
														<a class="btn btn-outline-primary" href="index.php?page=pages/tambahKeranjang&idBarang=<?= $dProduk->produk_id ?>">&plus;</a>
													</div>
												</div>

											</td>
											<td><?= rupiah($totalHarga) ?></td>
											<td>
												<a href="index.php?page=pages/hapusKeranjang&id=<?= $dProduk->produk_id ?>" class="btn btn-primary btn-sm">X</a>
											</td>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</form>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="row mb-5">
							<!-- <div class="col-md-6 mb-3 mb-md-0">
							<button class="btn btn-primary btn-sm btn-block">Update Cart</button>
						</div> -->
							<div class="col-md-6">
								<a href="index.php?page=pages/allProducts" class="btn btn-primary btn-sm btn-block">Continue Shopping</a>
							</div>
						</div>
						<div class="row">
							<!-- <div class="col-md-12">
						<label class="text-black h4" for="coupon">Coupon</label>
						<p>Enter your coupon code if you have one.</p>
					</div> -->
							<!-- <div class="col-md-8 mb-3 mb-md-0">
						<input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
					</div>
					<div class="col-md-4">
						<button class="btn btn-primary btn-sm">Apply Coupon</button>
					</div> -->
							<form method="POST">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="label-control">Pembelian Atas Nama : </label>
											<input disabled type="text" name="nama" class="form-control" value="<?= $_SESSION['member']->member_nama ?>">
											<input type="hidden" name="idPelanggan" value="<?= $_SESSION['member']->member_id ?>">
											<input type="hidden" name="totalBelanja" value="<?= $totalBelanja ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="label-control">No Hp : </label>
											<input disabled type="text" name="noHp" class="form-control" value="<?= $_SESSION['member']->member_tlp ?>">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="label-control">Alamat Tujuan (Kota/Kab.) : </label>
											<select required name="tujuan" class="form-control">
												<option value="">Pilih</option>
												<?php foreach ($db->getAllOngkir() as $row) : ?>
													<option value="<?php echo $row->ongkir_id ?>"><?php echo $row->ongkir_kota ?> - <?= rupiah($row->ongkir_harga) ?></option>
												<?php endforeach ?>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="label-control">Alamat Lengkap : </label>
											<textarea required placeholder="Masukan Alamat Lengkap Pengiriman" name="alamatLengkap" cols="3" rows="5" class="form-control"></textarea>
										</div>
										<!-- <div class="form-group">
									<input class=" btn btn-success" type="submit" value="Checkout">
								</div> -->
									</div>
								</div>

						</div>
					</div>
					<div class="col-md-6 pl-5">
						<div class="row justify-content-end">
							<div class="col-md-7">
								<div class="row">
									<div class="col-md-12 text-right border-bottom mb-5">
										<h3 class="text-black h4 text-uppercase">Cart Totals</h3>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-md-6">
										<span class="text-black">Total</span>
									</div>
									<div class="col-md-6 text-right">
										<strong class="text-black"><?= rupiah($totalBelanja) ?></strong>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<button class="btn btn-primary btn-lg py-3 btn-block" type="submit">Proceed To Checkout</button>
									</div>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>