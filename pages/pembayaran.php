<?php
$data = $db->getOnePemesanan($_GET['id']);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db->Konfirmasi($_POST, $_FILES['fBukti']);
}
?>



<div class="contactus">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="title">
                    <h2>Pembayaran</h2>
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
                <div class="alert alert-info">
                    Total Yang Akan Di Bayarkan Adalah <b><?= rupiah($data->pemesanan_total) ?></b>
                    Silahkan Transfer ke rekening BRI A/n Royya Studio Foto : 5461.01.016299.53.7
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
        </div>
    </div>
</div>