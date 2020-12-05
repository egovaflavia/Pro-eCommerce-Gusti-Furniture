<?php
include '../cpanel/model/Db.php';
$db = new Db();

?>
<!DOCTYPE html>
<html>

<head>
	<title>Ayesha Collection</title>

	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<!--theme-style-->
	<link href="../assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--fonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<!--//fonts-->
	<script src="../js/jquery.min.js"></script>
	<!--script-->
</head>

<body onload="window.print()">
	<!--header-->
	<!---->
	<div class="container">
		<?php
		$dInv = $db->getOnePemesanan($_GET['id']);
		?>
		<div class="">
			<div class="">
				<h3 class="">INVOICE: XGST<?= date('ydmhi') ?><?= $dInv->pesanan_id ?></h3>
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
		</div>
		<div class="clearfix"></div>
	</div>

</body>

</html>