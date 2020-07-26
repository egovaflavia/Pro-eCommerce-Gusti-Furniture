<?php
// var_dump($_SESSION['member']);
// jk kosong keranjang belanja,mk larikan ke index
if (empty($_SESSION["keranjang"]) or !isset($_SESSION["keranjang"])) {
	echo "<script>alert('Keranjang Kosong, Silahkan Berbelanja Dahulu');</script>";
	echo "<script>window.location='index.php'</script>";
}
if (!isset($_SESSION["member"])) {
	echo "<script>alert('Silahkan Login Terlebih Dahulu');</script>";
	echo "<script>window.location='index.php?page=pages/login'</script>";
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
<div class="">
	<div class="">
		<h3 class="">Keranjang Belanja</h3>
		<a href="index.php" class="btn btn-info"><b>Kembali</b></a>
		<br>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Produk</th>
					<th>Harga Satuan</th>
					<th>Jumlah</th>
					<th>Total Harga</th>
					<th>Aksi</th>
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
						<td><?= ++$no ?></td>
						<td><?= $dProduk->produk_nama ?></td>
						<td><?= rupiah($dProduk->produk_harga) ?></td>
						<td>
							<span style="padding-right: 10px"><?= format_angka($jumlah) ?></span>
							<a class="btn btn-warning btn-sm" href="index.php?page=pages/kurangKeranjang&idBarang=<?= $dProduk->produk_id ?>"><b>-</b></a>
							<a class="btn btn-info btn-sm" href="index.php?page=pages/tambahKeranjang&idBarang=<?= $dProduk->produk_id ?>"><b>+</b></a>
						</td>
						<td><?= rupiah($totalHarga) ?></td>
						<td>
							<a class="btn btn-danger btn-sm" href="index.php?page=pages/hapusKeranjang&id=<?= $dProduk->produk_id ?>">Hapus</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
			<tfoot>
				<tr>
					<th colspan="4">Total Harga</th>
					<th><?= rupiah($totalBelanja) ?></th>
				</tr>
			</tfoot>
		</table>
		<form method="POST">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label class="label-control">Pembelian Atas Nama : </label>
						<input disabled type="text" name="nama" class="form-control" value="<?= $_SESSION['member']->member_nama ?>">
						<input type="hidden" name="idPelanggan" value="<?= $_SESSION['member']->member_id ?>">
						<input type="hidden" name="totalBelanja" value="<?= $totalBelanja ?>">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label class="label-control">No Hp : </label>
						<input disabled type="text" name="noHp" class="form-control" value="<?= $_SESSION['member']->member_tlp ?>">
					</div>
				</div>
				<div class="col-md-4">
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
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<div class="form-group">
						<label class="label-control">Alamat Lengkap : </label>
						<textarea required placeholder="Masukan Alamat Lengkap Pengiriman" name="alamatLengkap" cols="3" rows="5" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<input class=" btn btn-success" type="submit" value="Checkout">
					</div>
				</div>
			</div>

		</form>
	</div>
</div>

<!-- <script>
	var sub = document.getElementById('sub');
	sub.style.display.none;
</script> -->