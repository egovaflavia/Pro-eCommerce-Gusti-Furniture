<?php
$data = $db->getOnePemesanan($_GET['id']);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db->Konfirmasi($_POST, $_FILES['fBukti']);
}
?>

<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Pembayaran</strong></div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row p-3 p-lg-5 border">
            <div class="col-md-12">
                <div class="alert alert-info">
                    Total Yang Akan Di Bayarkan Adalah <b><?= rupiah($data->pemesanan_total) ?></b>
                    Silahkan Transfer ke rekening BRI A/n Ayesha Collection : 5461.01.016299.53.7
                </div>
                <p>Jika anda telah mentransfer pembayaran, harap isi form pembayaran agar bisa di konfirmasi</p>
                <form method="POST" enctype="multipart/form-data">
                    <div class="row" style="padding-left: 1em">
                        <div class="col-md-6">
                            <div class="form-group">
                                <span>Nama Rekening Penyetor<label>*</label></span>
                                <input name="idPemesanan" value="<?= $_GET['id'] ?>" type="hidden">
                                <input class="form-control" required name="nPenyetor" type="text">
                            </div>
                            <div class="form-group">
                                <span>Nama Bank<label>*</label></span>
                                <select required class="form-control" name="nBank" id="nBank">
                                    <option value="">Pilih</option>
                                    <option value="BRI">BRI</option>
                                    <option value="BNI">BNI</option>
                                    <option value="BTN">BTN</option>
                                    <option value="Nagari">Nagari</option>
                                    <option value="Mandiri">Mandiri</option>
                                    <option value="CIMB">CIMB</option>
                                    <option value="Bukopin">Bukopin</option>
                                    <option value="MayBank">MayBank</option>
                                    <option value="Mega">Mega</option>
                                    <option value="Mestika">Mestika</option>
                                    <option value="Century">Century</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <span>Jumlah<label>*</label></span>
                                <input class="form-control" required name="jumlah" type="number">
                            </div>
                            <div class="form-group">
                                <span>Foto Bukti<label>*</label></span>
                                <input class="form-control-file" required name="fBukti" type="file">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Konfirmasi">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-12">

            </div>
        </div>
    </div>
</div>