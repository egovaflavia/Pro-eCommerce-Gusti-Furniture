<?php $dProduk = $db->getOneProduk($_GET['id']); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$db->Keranjang($_POST);
}
?>
<div class=" single_top">
	<div class="single_grid">
		<div class="grid images_3_of_2">
			<ul id="etalage">
				<li>
					<a href="optionallink.html">
						<img class="etalage_thumb_image img-fluid" style="width: 100%; height: 288px" src="cpanel/assets/images/products/<?= $dProduk->produk_gambar ?>" class="img-responsive" />
					</a>
				</li>
			</ul>
			<div class="clearfix"> </div>
		</div>
		<div class="desc1 span_3_of_2">
			<h4><?= $dProduk->produk_nama ?></h4>
			<div class="cart-b">
				<div class="left-n "><?= rupiah($dProduk->produk_harga) ?></div>
				<div class="clearfix"></div>
				<div class="form-group" style="padding-top: 10px ">
					<form method="POST">
						<div class="row">
							<div class="col-md-3">
								<input name="idBarang" type="hidden" value="<?= $dProduk->produk_id ?>">
								<input required max="<?= $dProduk->produk_stok ?>" class="form-control" name="jumlah" min="1" placeholder="Jumlah" type="number">
							</div>
							<?php if ($dProduk->produk_stok == 0) : ?>
								<div class="col-md-9">
									<p>Maaf Stok Habis</p>
								</div>
							<?php else : ?>
								<div class="col-md-9">
									<input type="submit" class="btn btn-success" value="TAMBAH KE KERANJANG">
								</div>
							<?php endif ?>
						</div>
					</form>

				</div>
			</div>

			<h6>Stok : <?= format_angka($dProduk->produk_stok) ?></h6>
			<p align="justify"><?= $dProduk->produk_desk ?></p>
			<div class="share">
				<h5>Lebih dekat dengan Kamin :</h5>
				<ul class="share_nav">
					<li><a href="https://www.facebook.com"><img src="assets/images/facebook.png" title="facebook"></a></li>
					<li><a href="https://www.twitter.com"><img src="assets/images/twitter.png" title="Twiiter"></a></li>
					<li><a href="https://www.rss.com"><img src="assets/images/rss.png" title="Rss"></a></li>
					<li><a href="https://www.google.com"><img src="assets/images/gpluse.png" title="Google+"></a></li>
				</ul>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<ul id="flexiselDemo1">
		<li><img src="assets/images/pi.jpg" />
			<div class="grid-flex"><a href="#">Bloch</a>
				<p>Rs 850</p>
			</div>
		</li>
		<li><img src="assets/images/pi1.jpg" />
			<div class="grid-flex"><a href="#">Capzio</a>
				<p>Rs 850</p>
			</div>
		</li>
		<li><img src="assets/images/pi2.jpg" />
			<div class="grid-flex"><a href="#">Zumba</a>
				<p>Rs 850</p>
			</div>
		</li>
		<li><img src="assets/images/pi3.jpg" />
			<div class="grid-flex"><a href="#">Bloch</a>
				<p>Rs 850</p>
			</div>
		</li>
		<li><img src="assets/images/pi4.jpg" />
			<div class="grid-flex"><a href="#">Capzio</a>
				<p>Rs 850</p>
			</div>
		</li>
	</ul>

	<div class="toogle">
		<h3 class="m_3">Detail <?= $dProduk->produk_nama ?></h3>
		<p class="m_text">
			<table class="table  table-borderless">
				<thead>
					<tr>
						<td width="150px"><b>Kategori</b></td>
						<td width='10px'>:</td>
						<td><?= $dProduk->kategori_nama ?></td>
					</tr>
					<tr>
						<td width="150px"><b>Nama Produk</b></td>
						<td width='10px'>:</td>
						<td><?= $dProduk->produk_nama ?></td>
					</tr>
					<tr>
						<td width="150px"><b>Harga</b></td>
						<td width='10px'>:</td>
						<td><?= rupiah($dProduk->produk_harga) ?></td>
					</tr>
					<tr>
						<td width="150px"><b>Stok</b></td>
						<td width='10px'>:</td>
						<td><?= format_angka($dProduk->produk_stok) ?></td>
					</tr>
					<tr>
						<td width="150px"><b>Deskripsi</b></td>
						<td width='10px'>:</td>
						<td align="justify"><?= $dProduk->produk_desk ?></td>
					</tr>
				</thead>
			</table>
		</p>
	</div>
</div>