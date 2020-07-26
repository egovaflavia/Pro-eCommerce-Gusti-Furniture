<?php
$data = $db->getOnePemesanan($_GET['id']);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db->Konfirmasi($_POST, $_FILES['fBukti']);
}
?>
<div class="register" style="padding: 1em 0 2em">
    <div class=" login-right">
        <h3 style="color: #458e95;">Pembayaran</h3>
        <div class="alert alert-info">
            Total Yang Akan Di Bayarkan Adalah <b><?= rupiah($data->pemesanan_total) ?></b>
            Silahkan Transfer ke rekening BRI A/n Gusti Furniture : 5461.01.016299.53.7
        </div>
        <p>Jika anda telah mentransfer pembayaran, harap isi form pembayaran agar bisa di konfirmasi</p>
        <form method="POST" enctype="multipart/form-data">
            <div class="row" style="padding-left: 1em">
                <div class="col-md-6">
                    <div>
                        <span>Nama Rekening Penyetor<label>*</label></span>
                        <input name="idPemesanan" value="<?= $_GET['id'] ?>" type="hidden">
                        <input required name="nPenyetor" type="text">
                    </div>
                    <div>
                        <span>Nama Bank<label>*</label></span>
                        <select required class="form-control" style="width: 96%;" name="nBank" id="nBank">
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
                    <div>
                        <span>Jumlah<label>*</label></span>
                        <input required name="jumlah" type="number">
                    </div>
                    <div>
                        <span>Foto Bukti<label>*</label></span>
                        <input required name="fBukti" type="file">
                    </div>
                    <input type="submit" value="Konfirmasi">
                </div>
            </div>
        </form>
    </div>
</div>