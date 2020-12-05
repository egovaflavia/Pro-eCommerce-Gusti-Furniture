<?php
$dInv = $db->getOnePemesanan($_GET['id']);
// var_dump($dInv);
// var_dump($_SESSION['member']);
// var_dump($dInv);
// jk kosong keranjang belanja,mk larikan ke index
// if (empty($_SESSION["keranjang"]) or !isset($_SESSION["keranjang"])) {
// 	echo "<script>alert('Keranjang Kosong, Silahkan Berbelanja Dahulu');</script>";
// 	echo "<script>window.location='index.php'</script>";
// }
// if (!isset($_SESSION["member"])) {
// 	echo "<script>alert('Silahkan Login Terlebih Dahulu');</script>";
// 	echo "<script>window.location='index.php?page=keranjang'</script>";
// }
?>

<div class="bg-light py-3">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Invoice</strong></div>
		</div>
	</div>
</div>

<div class="site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="h3 mb-3 text-black">INVOICE: XGST<?= date('ydmhi') ?><?= $dInv->pesanan_id ?></h2>
				<a target="blank" href="pages/cetakInvoice.php?id=<?= $_GET['id'] ?>" class="btn btn-info"><b>Cetak</b></a>
				<a target="blank" href="index.php?page=pages/pembayaran&id=<?= $_GET['id'] ?>" class="btn btn-info"><b>Pembayaran</b></a>
				<br>
				<br>
				<div class="row">
					<div class="col-md-4">
						<b>Nama Pemesan :</b> <?= $dInv->member_nama ?><br>
						<b>No.Tlp :</b> <?= $dInv->member_tlp ?>
					</div>
					<div class="col-md-4">
						<b>Tanggal Pesan :</b> <?= tgl_indo($dInv->pemesanan_tgl) ?><br>
						<b>Tanggal Expired :</b> <?= tgl_indo($dInv->pemesanan_expired) ?>
					</div>
					<div class="col-md-4">
						<b>Alamat Kirim (Kota/Kab.) :</b> <?= $dInv->pemesanan_tujuan ?><br>
						<b>Alamat Lengkap :</b> <?= $dInv->pemesanan_alamat_lengkap ?>
					</div>
				</div>
				<br>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Produk</th>
							<th>Harga Satuan</th>
							<th>Jumlah</th>
							<th>Total Harga</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($db->getAllDetail($dInv->pemesanan_id) as $no => $row) :
							$totalHarga = $row->detail_jumlah * $row->produk_harga;
							$totalBelanja += $totalHarga;
						?>
							<tr>
								<td><?= ++$no ?></td>
								<td><?= $row->produk_nama ?></td>
								<td><?= rupiah($row->produk_harga) ?></td>
								<td><?= format_angka($row->detail_jumlah) ?></td>
								<td><?= rupiah($totalHarga) ?></td>
							</tr>
						<?php endforeach ?>
					</tbody>
					<tfoot>
						<tr>
							<th colspan="4">Ongkos Kirim</th>
							<th><?= rupiah($dInv->pemesanan_ongkir) ?></th>
						</tr>
						<tr>
							<th colspan="4">Total Harga</th>
							<th><?= rupiah($dInv->pemesanan_total) ?></th>
						</tr>
					</tfoot>
				</table>
				<div class="alert alert-info">
					Total Yang Akan Di Bayarkan Adalah <b><?= rupiah($dInv->pemesanan_total) ?></b>
					Silahkan Transfer ke rekening BRI A/n Ayesha Collection : 5461.01.016299.53.7
				</div>
			</div>
			<div class="col-md-12">

			</div>
		</div>
	</div>
</div>