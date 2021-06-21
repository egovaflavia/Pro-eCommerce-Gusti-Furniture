<?php
$dPemesanan = $db->getPemesananByMember($_SESSION['member']->member_id);

// jk kosong keranjang belanja,mk larikan ke index
// if (empty($_SESSION["keranjang"]) or !isset($_SESSION["keranjang"])) {
// 	echo "<script>alert('Keranjang Kosong, Silahkan Berbelanja Dahulu');</script>";
// 	echo "<script>window.location='index.php'</script>";
// }
if (!isset($_SESSION["member"])) {
	echo "
	<script>
	swal('Success', 'Silahkan login terlebih dahulu', 'success');
		setTimeout(function(){ window.location='index.php?page=pages/login'; }, 2000)
		</script>
	";
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
					<h2>History Belanja</h2>
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
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Tanggal Belanja</th>
							<th>Status</th>
							<th>Total Harga</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($dPemesanan as $no => $dProduk) :
						?>
							<tr>
								<td><?= ++$no ?></td>
								<td><?= tgl_indo($dProduk->pemesanan_tgl) ?></td>
								<td><span class="text-warning"><?= $dProduk->pemesanan_status ?></span></td>
								<td><?= rupiah($dProduk->pemesanan_total) ?></td>
								<td width='270px'>
									<?php if ($dProduk->pemesanan_status == 'Pending') : ?>
										<a href="index.php?page=pages/pembayaran&id=<?= $dProduk->pemesanan_id ?>" class="btn btn-success">Pembayaran</a>
									<?php endif ?>
									<a href="pages/cetakInvoice.php?id=<?= $dProduk->pemesanan_id ?>" class="btn btn-warning" target="blank">Cetak</a>
									<a href="index.php?page=pages/detailBelanja&id=<?= $dProduk->pemesanan_id ?>" class="btn btn-info">Detail</a>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<!-- <script>
	var sub = document.getElementById('sub');
	sub.style.display.none;
</script> -->