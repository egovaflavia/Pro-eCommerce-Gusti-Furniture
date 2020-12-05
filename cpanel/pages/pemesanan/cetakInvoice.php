<?php
// error_reporting(0);
include '../../model/Db.php';
$db = new Db();

?>
<!DOCTYPE html>
<html>

<head>
	<title>Ayesha Collection</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->

	<link rel="stylesheet" href="../../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- Tempusdominus Bbootstrap 4 -->
	<link rel="stylesheet" href="../../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="../../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="../../assets/plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="../../assets/dist/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="../../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="../../assets/plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="../../assets/plugins/summernote/summernote-bs4.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
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

		<!-- <script>
	var sub = document.getElementById('sub');
	sub.style.display.none;
</script> -->


		<div class="clearfix"></div>
	</div>

</body>

</html>