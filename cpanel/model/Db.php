<?php
session_start();
// $_SESSION['member'] =
//     [
//         'member_id' => '1',
//         'member_nama' => 'Egova',
//         'member_tlp' => '081923123'
//     ];
include 'Conn.php';

class Db extends Conn
{
    // =========================================================================================
    // Pengguna Pengguna Pengguna Pengguna Pengguna Pengguna Pengguna Pengguna Pengguna Pengguna 
    // =========================================================================================
    public function getAllPengguna()
    {
        $query = $this->get("SELECT * FROM tb_pengguna");
        return $query;
    }

    public function savePengguna($data)
    {
        $username = $data['username'];
        $password = $data['password'];
        $nama     = $data['nama'];
        $level    = $data['level'];

        global $conn;
        $query = "INSERT INTO tb_pengguna ( pengguna_username,
                                            pengguna_password,
                                            pengguna_nama,
                                            pengguna_level) 
                                            VALUES (
                                                '$username',
                                                '$password',
                                                '$nama',
                                                '$level')";
        return $conn->query($query);
    }
    public function deletePengguna($id)
    {
        global $conn;
        $query = "DELETE FROM tb_pengguna WHERE pengguna_id = '$id'";
        return $conn->query($query);
    }
    public function getOnePengguna($id)
    {
        $query = $this->get("SELECT * FROM tb_pengguna WHERE pengguna_id = '$id'")[0];
        return $query;
    }
    public function editPengguna($data)
    {
        global $conn;

        $id       = $data['id'];
        $username = $data['username'];
        $password = $data['password'];
        $nama     = $data['nama'];
        $level    = $data['level'];

        $query    = "UPDATE tb_pengguna SET pengguna_username = '$username',
                                            pengguna_password = '$password',
                                            pengguna_nama     = '$nama',
                                            pengguna_level    = '$level'
                                            WHERE
                                            pengguna_id = '$id'";
        return $conn->query($query);
    }

    // =========================================================================================
    // Pelanggan Pelanggan Pelanggan Pelanggan Pelanggan Pelanggan Pelanggan Pelanggan Pelanggan 
    // =========================================================================================

    public function getAllMember()
    {
        $query = $this->get("SELECT * FROM tb_member");
        return $query;
    }

    public function saveMember($data)
    {
        $username     = $data['username'];
        $password     = $data['password'];
        $nama         = $data['nama'];
        $jenisKelamin = $data['jenisKelamin'];
        $noHpTlp      = $data['noHpTlp'];
        $email        = $data['email'];
        $tmpLahir     = $data['tmpLahir'];
        $tglLahir     = $data['tglLahir'];
        $lahir = $tmpLahir . '/' . $tglLahir;

        global $conn;

        $query = "INSERT INTO tb_member (   member_username,
            member_password,
            member_nama,
            member_jenis_kelamin,
            member_email,
            member_tmp_tgl_lahir,
            member_tlp) 
            VALUES (
                '$username',
                '$password',
                '$nama',
                '$jenisKelamin',
                '$email',
                '$lahir',
                '$noHpTlp')";
        return $conn->query($query);
    }
    public function deleteMember($id)
    {
        global $conn;
        $query = "DELETE FROM tb_member WHERE member_id = '$id'";
        return $conn->query($query);
    }
    public function getOneMember($id)
    {
        $query = $this->get("SELECT * FROM tb_member WHERE member_id = '$id'")[0];
        return $query;
    }
    public function editMember($data)
    {
        global $conn;

        $id           = $data['id'];
        $username     = $data['username'];
        $password     = $data['password'];
        $nama         = $data['nama'];
        $jenisKelamin = $data['jenisKelamin'];
        $noHpTlp      = $data['noHpTlp'];
        $email        = $data['email'];

        $tmpLahir     = $data['tmpLahir'];
        $tglLahir     = $data['tglLahir'];

        $lahir = $tmpLahir . ' /' . $tglLahir;

        $query    = "UPDATE tb_member SET   member_username      = '$username',
                                                member_password      = '$password',
                                                member_nama          = '$nama',
                                                member_jenis_kelamin = '$jenisKelamin',
                                                member_email         = '$email',
                                                member_tmp_tgl_lahir = '$lahir',
                                                member_tlp           = '$noHpTlp'
                                                WHERE
                                                member_id = '$id'";
        return $conn->query($query);
    }

    // =========================================================================================
    // Kategori Kategori Kategori Kategori Kategori Kategori Kategori Kategori Kategori Kategori 
    // =========================================================================================
    public function getAllKategori($limit = null)
    {
        if ($limit == null) {
            $query = $this->get("SELECT * FROM tb_kategori");
        } else {
            $query = $this->get("SELECT * FROM tb_kategori LIMIT $limit");
        }
        return $query;
    }

    public function saveKategori($data)
    {
        $nama     = $data['nama'];

        global $conn;
        $query = "INSERT INTO tb_kategori (kategori_nama ) VALUES ('$nama')";
        return $conn->query($query);
    }

    public function deleteKategori($id)
    {
        global $conn;
        $query = "DELETE FROM tb_kategori WHERE kategori_id = '$id'";
        return $conn->query($query);
    }
    public function getOneKategori($id)
    {
        $query = $this->get("SELECT * FROM tb_kategori WHERE kategori_id = '$id'")[0];
        return $query;
    }
    public function editKategori($data)
    {
        global $conn;

        $id   = $data['id'];
        $nama = $data['nama'];

        $query    = "UPDATE tb_kategori SET kategori_nama = '$nama'
                                            WHERE
                                            kategori_id = '$id'";
        return $conn->query($query);
    }
    // =========================================================================================
    // Produk Produk Produk Produk Produk Produk Produk Produk Produk Produk Produk Produk Produk 
    // =========================================================================================
    public function getAllProduk()
    {
        $query = $this->get("SELECT * FROM tb_produk 
                            JOIN tb_kategori
                            ON tb_produk.kategori_id=tb_kategori.kategori_id");
        return $query;
    }
    public function getKeranjangProduk()
    {
        $query = $this->get("SELECT * FROM tb_produk 
                            JOIN tb_kategori
                            ON tb_produk.kategori_id=tb_kategori.kategori_id");
        return $query;
    }
    public function getAllProdukByKat($kategori)
    {
        $query = $this->get("SELECT * FROM tb_produk 
                            JOIN tb_kategori
                            ON tb_produk.kategori_id=tb_kategori.kategori_id
                            WHERE tb_kategori.kategori_id = $kategori");
        return $query;
    }
    public function get3Produk()
    {
        $query = $this->get("SELECT * FROM tb_produk 
                            JOIN tb_kategori
                            ON tb_produk.kategori_id=tb_kategori.kategori_id 
                            ORDER BY tb_produk.produk_id 
                            DESC  
                            LIMIT 3");
        return $query;
    }
    public function get2Produk()
    {
        $query = $this->get("SELECT * FROM tb_produk 
                            JOIN tb_kategori
                            ON tb_produk.kategori_id=tb_kategori.kategori_id 
                            ORDER BY tb_produk.produk_id 
                            ASC  
                            LIMIT 2");
        return $query;
    }

    public function get1Produk()
    {
        $query = $this->get("SELECT * FROM tb_produk 
                            JOIN tb_kategori
                            ON tb_produk.kategori_id=tb_kategori.kategori_id 
                            ORDER BY tb_produk.produk_id 
                            ASC  
                            LIMIT 1");
        return $query;
    }

    public function saveProduk($data, $gambar)
    {
        $kategori = $data['kategori'];
        $nama     = $data['nama'];
        $harga    = $data['harga'];
        $stok     = $data['stok'];
        $desc     = $data['desc'];
        $tgl      = date('Y-d-m');
        // Untuk Gambar
        $name     = $gambar['name'];
        $tmp_name = $gambar['tmp_name'];
        // Menukar Nama Gambar
        $oldName = explode('.', $name);
        $newName = date('Ydmhis') . '.' . $oldName[1];
        // Upload Gambar
        move_uploaded_file($tmp_name, 'assets/images/products/' . $newName);

        global $conn;
        $query = "INSERT INTO `tb_produk`(  `kategori_id`, 
                                            `produk_nama`, 
                                            `produk_harga`, 
                                            `produk_stok`, 
                                            `produk_desk`, 
                                            `produk_gambar`, 
                                            `produk_tgl_post`) 
                                            VALUES 
                                            ('$kategori',
                                            '$nama',
                                            '$harga',
                                            '$stok',
                                            '$desc',
                                            '$newName',
                                            '$tgl'
                                            )";
        return $conn->query($query);
    }

    public function deleteProduk($id)
    {
        global $conn;
        $query = "DELETE FROM tb_produk WHERE produk_id = '$id'";
        return $conn->query($query);
    }

    public function getOneProduk($id)
    {
        $query = $this->get("SELECT * FROM tb_produk 
                            JOIN tb_kategori
                            ON tb_produk.kategori_id=tb_kategori.kategori_id
                            WHERE produk_id = '$id'")[0];
        return $query;
    }

    public function editProduk($data, $gambar)
    {
        global $conn;

        $id       = $data['id'];
        $kategori = $data['kategori'];
        $nama     = $data['nama'];
        $harga    = $data['harga'];
        $stok     = $data['stok'];
        $desc     = $data['desc'];

        $gambarLama = $data['gambarLama'];

        // Gambar
        if ($gambar['name'] == null) {
            $query    = "UPDATE `tb_produk` SET `kategori_id`     = '$kategori',
                                                `produk_nama`     = '$nama',
                                                `produk_harga`    = '$harga',
                                                `produk_stok`     = '$stok',
                                                `produk_desk`     = '$desc',
                                                `produk_gambar`   = '$gambarLama'
                                                WHERE `produk_id` = '$id'";
        } else {
            $name       = $gambar['name'];
            $tmp_name   = $gambar['tmp_name'];
            // Menukar Nama Gambar
            $oldName = explode('.', $name);
            $newName = date('Ydmhis') . '.' . $oldName[1];
            // Upload Gambar
            move_uploaded_file($tmp_name, 'assets/images/products/' . $newName);

            $query    = "UPDATE `tb_produk` SET `kategori_id`     = '$kategori',
                                                `produk_nama`     = '$nama',
                                                `produk_harga`    = '$harga',
                                                `produk_stok`     = '$stok',
                                                `produk_desk`     = '$desc',
                                                `produk_gambar`   = '$newName'
                                                WHERE `produk_id` = '$id'";
        }
        return $conn->query($query);
    }
    public function editStokProduk($data)
    {
        global $conn;

        $id       = $data['id'];
        $stok     = $data['stok'];
        $query    = "UPDATE `tb_produk` SET     `produk_stok`     = '$stok'
                                        WHERE   `produk_id` = '$id'";
        return $conn->query($query);
    }
    public function Keranjang($data)
    {
        $idBarang = $data['idBarang'];
        $jumlah = $data['jumlah'];

        // jk ada produk,mk produk +1
        if (isset($_SESSION['keranjang'][$idBarang])) {
            $_SESSION['keranjang'][$idBarang] += $jumlah;
            // selain itu, mk produk di anggap di beli 1
        } else {
            $_SESSION['keranjang'][$idBarang] = $jumlah;
        }

        echo "<script>
        swal('Success', 'Produk Telah Masuk Ke Keranjang Belanja', 'success');
        setTimeout(function(){ window.location='index.php?page=pages/chart'; }, 2000)
        </script>";
    }
    // =========================================================================================
    // Ongkir Ongkir Ongkir Ongkir Ongkir Ongkir Ongkir Ongkir Ongkir Ongkir Ongkir Ongkir Ongkir 
    // =========================================================================================

    public function getAllOngkir()
    {
        $query = $this->get('SELECT * FROM tb_ongkir');
        return $query;
    }

    public function getOneOngkir($id)
    {
        $query = $this->get("SELECT * FROM `tb_ongkir` WHERE ongkir_id = '$id'")[0];
        return $query;
    }

    // =========================================================================================
    // Pemesanan Pemesanan Pemesanan Pemesanan Pemesanan Pemesanan Pemesanan Pemesanan Pemesanan  
    // =========================================================================================

    public function deletePemesanan($id)
    {
        global $conn;
        $query = "DELETE FROM tb_pemesanan WHERE pemesanan_id = '$id'";
        $query2 = "DELETE FROM tb_detail WHERE pemesanan_id = '$id'";
        $conn->query($query2);
        return $conn->query($query);
    }

    public function editStatusPemesanan($data)
    {
        global $conn;
        $id     = $data['id'];
        $status = $data['status'];

        $updateStatusPesanan = "UPDATE `tb_pemesanan` SET `pemesanan_status`='$status' WHERE `pemesanan_id`='$id'";
        return $conn->query($updateStatusPesanan);
    }
    public function getAllPemesanan()
    {
        $query = "  SELECT * FROM tb_pemesanan 
                    JOIN tb_member
                    ON tb_pemesanan.member_id = tb_member.member_id ORDER BY tb_pemesanan.pemesanan_id DESC ";
        return $this->get($query);
    }
    public function getOnePemesanan($id)
    {
        $query = "  SELECT * 
        FROM tb_pemesanan
        LEFT JOIN tb_member
        ON tb_pemesanan.member_id = tb_member.member_id
        WHERE tb_pemesanan.pemesanan_id = '$id'";
        return $this->get($query)[0];
        // return $conn->query($query);
    }

    public function getPemesananByMember($id)
    {
        $query = "  SELECT * FROM tb_pemesanan
                    WHERE tb_pemesanan.member_id = '$id'";
        return $this->get($query);
    }
    public function Pemesanan($data, $keranjang)
    {
        global $conn;

        $idTujuan        = $data['tujuan'];

        $dTujuan = $this->getOneOngkir($idTujuan);
        $tujuan = $dTujuan->ongkir_kota;
        $ongkir = $dTujuan->ongkir_harga;

        $member   = $data['idPelanggan'];
        $tgl   = date('Y-m-d');
        $dua_hari      = mktime(0, 0, 0, date("n"), date("j") + 2, date("Y"));
        $kedepan       = date("Y-m-d", $dua_hari);
        $totalBelanja  = $data['totalBelanja'] + $ongkir;
        $alamatLengkap = $data['alamatLengkap'];

        $query = "INSERT INTO `tb_pemesanan`(   `member_id`, 
                                                `pemesanan_tgl`,
                                                `pemesanan_total`, 
                                                `pemesanan_tujuan`, 
                                                `pemesanan_ongkir`, 
                                                `pemesanan_alamat_lengkap`, 
                                                `pemesanan_expired`) 
                                                VALUES 
                                                ('$member',
                                                '$tgl',
                                                '$totalBelanja',
                                                '$tujuan',
                                                '$ongkir',
                                                '$alamatLengkap',
                                                '$kedepan'
                                                )";

        $conn->query($query);

        $last_id = $conn->insert_id;

        foreach ($keranjang as $id_produk_keranjang => $jumlah) {
            $dProduk = $this->getOneProduk($id_produk_keranjang);
            $harga = $dProduk->produk_harga;
            $stokLama = $dProduk->produk_stok;
            $stokBaru = $stokLama - $jumlah;
            $sub_harga = $harga * $jumlah;

            $data = array('id' => $id_produk_keranjang, 'stok' => $stokBaru);


            $this->editStokProduk($data);

            $query_detail = "INSERT INTO `tb_detail`(   `pemesanan_id`, 
                                                        `produk_id`, 
                                                        `detail_jumlah`, 
                                                        `detail_harga`, 
                                                        `detail_sub_harga`) 
                                                        VALUES 
                                                        (
                                                            '$last_id',
                                                            '$id_produk_keranjang',
                                                            '$jumlah',
                                                            '$harga',
                                                            '$sub_harga'
                                                        )";
            $conn->query($query_detail);
        }
        unset($_SESSION['keranjang']);
        echo "<script>
        swal('Success', 'Pembelian Sukses', 'success');
        setTimeout(function(){ window.location='index.php?page=pages/invoice&id=$last_id'; }, 2000)
        </script>";
    }

    // =========================================================================================
    // Pemesanan Pemesanan Pemesanan Pemesanan Pemesanan Pemesanan Pemesanan Pemesanan Pemesanan  
    // =========================================================================================

    public function getAllDetail($id)
    {
        $query = "  SELECT * FROM tb_detail
                    JOIN tb_produk
                    ON tb_detail.produk_id=tb_produk.produk_id
                    WHERE pemesanan_id = '$id'";
        return $this->get($query);
        // return $conn->query($query);
    }

    // =========================================================================================
    // Login Login Login Login Login Login Login Login Login Login Login Login Login Login Login 
    // =========================================================================================

    public function LoginMember($data)
    {
        global $conn;

        // var_dump($data);
        // exit;
        $username = $data['username'];
        $password = $data['password'];

        $query = "SELECT * FROM tb_member WHERE member_username = '$username' AND member_password = '$password'";
        $ambil = $conn->query($query);
        $pecah = $ambil->fetch_object();
        $cek = $ambil->num_rows;

        if ($cek >= 1) {
            $_SESSION['member'] = $pecah;
            echo "
            <script>
            swal('Success', 'Anda Berhasil Login', 'success');
            setTimeout(function(){ window.location='index.php?page=pages/chart'; }, 2000)
            </script>
            ";
        } else {
            echo "
            <script>
            swal('Danger', 'Username / Password Anda Salah', 'danger');
            setTimeout(function(){ window.location='index.php?page=pages/login'; }, 2000)
            </script>
            ";
        }
    }

    public function LoginAdmin($data)
    {
        global $conn;

        // var_dump($data);
        // exit;
        $username = $data['username'];
        $password = $data['password'];

        $ambil = $conn->query("SELECT * FROM tb_pengguna WHERE pengguna_username = '$username' AND pengguna_password = '$password'");

        $pecah = $ambil->fetch_object();
        $cek = $ambil->num_rows;

        if ($cek == 1) {
            $_SESSION['pengguna'] = $pecah;
            echo "
            <script>
            alert('Anda berhasil login');
            window.location='index.php';
            </script>
            ";
        } else {
            echo "
            <script>
            alert('Username / Password Anda Salah');
            window.location='index.php?page=pages/login';
            </script>
            ";
        }
    }

    public function LogOutAdmin()
    {
        session_destroy();
        echo "<script>
        swal('Success', 'Berhasil Logout', 'success');
        setTimeout(function(){ window.location='login.php'; }, 2000)
        </script>";
    }

    // =========================================================================================
    // Konfirmasi Konfirmasi Konfirmasi Konfirmasi Konfirmasi Konfirmasi Konfirmasi Konfirmasi 
    // =========================================================================================

    public function Konfirmasi($data, $gambar)
    {
        global $conn;

        $idPemesanan = $data['idPemesanan'];
        $nPenyetor   = $data['nPenyetor'];
        $nBank       = $data['nBank'];
        $jumlah      = $data['jumlah'];
        $nGambar     = $gambar['name'];
        $tmpGambar   = $gambar['tmp_name'];
        $pecahGambar = explode('.', $nGambar);
        $pecahGambar[0]           = date('ydmhis');
        $fGambar     = $pecahGambar[0] . '.' . $pecahGambar[1];


        move_uploaded_file($tmpGambar, 'cpanel/assets/images/bukti/' . $fGambar);

        $insertPembayaran = "  INSERT INTO `tb_pembayaran`(`pemesanan_id`,
                                                `pembayaran_nama_pengirim`, 
                                                `pembayaran_bank`, 
                                                `pembayaran_jumlah`, 
                                                `pembayaran_tgl`, 
                                                `pembayaran_gambar_bukti`) 
                                                VALUES 
                                                ('$idPemesanan',
                                                '$nPenyetor',
                                                '$nBank',
                                                '$jumlah',
                                                NOW(),
                                                '$fGambar'
                                                )";
        $updatePesanan = "UPDATE `tb_pemesanan` SET `pemesanan_status`= 'Menunggu Konfirmasi' WHERE `pemesanan_id`='$idPemesanan'";

        $conn->query($insertPembayaran);
        $conn->query($updatePesanan);

        echo "
        <script>
        alert('Terimakasih Telah Membayar, Kami akan segera Meng-Konfirmasi Pembayaran Anda')
        window.location='index.php?page=pages/history';
        </script>";
    }

    public function getOnePembayaran($id)
    {
        $query = "SELECT * FROM tb_pembayaran WHERE pemesanan_id = '$id'";
        return $this->get($query)[0];
    }

    // =========================================================================================
    // Laporan Laporan Laporan Laporan Laporan Laporan Laporan Laporan Laporan Laporan Laporan  
    // =========================================================================================

    public function getLapHari($tgl)
    {
        $query = "  SELECT * 
                    FROM tb_pemesanan
                    JOIN tb_member
                    ON tb_pemesanan.member_id = tb_member.member_id 
                    WHERE pemesanan_tgl = '$tgl'
                    AND pemesanan_status != 'Pending'
                    AND pemesanan_status != 'Batal'
                    ";
        return $this->get($query);
    }

    public function getLapBulan($tgl)
    {
        $query = "  SELECT * 
                    FROM tb_pemesanan 
                    JOIN tb_member 
                    ON tb_pemesanan.member_id = tb_member.member_id 
                    WHERE pemesanan_tgl 
                    LIKE '$tgl%' 
                    AND pemesanan_status != 'Pending'
                    AND pemesanan_status != 'Batal'
                    ";
        return $this->get($query);
    }

    public function getLapTahun($tgl)
    {
        $query = "  SELECT * 
                    FROM tb_pemesanan 
                    JOIN tb_member 
                    ON tb_pemesanan.member_id = tb_member.member_id 
                    WHERE pemesanan_tgl 
                    LIKE '%$tgl%' 
                    AND pemesanan_status != 'Pending'
                    AND pemesanan_status != 'Batal'
                    ";
        return $this->get($query);
    }

    // =========================================================================================
    // Laporan Laporan Laporan Laporan Laporan Laporan Laporan Laporan Laporan Laporan Laporan  
    // =========================================================================================
    public function getKomentarByProduk($produk)
    {
        $query = $this->get("Select
        tb_komentar.*,
        tb_member.*
    From
        tb_komentar Inner Join
        tb_member On tb_member.member_id = tb_komentar.member_id
    Where tb_komentar.produk_id = '$produk' ");
        return $query;
    }

    public function saveKomentar($data)
    {
        $idMember = $data['idMember'];
        $idProduk = $data['idProduk'];
        $komentar     = $data['komentar'];

        global $conn;
        $query = "INSERT INTO `tb_komentar`(`member_id`, 
                                            `produk_id`, 
                                            `komentar_text`) 
                                            VALUES (
                                                '$idMember',
                                                '$idProduk',
                                                '$komentar')";
        return ($conn->query($query)) ? 1 : 0;
    }

    // public function deletePengguna($id)
    // {
    //     global $conn;
    //     $query = "DELETE FROM tb_pengguna WHERE pengguna_id = '$id'";
    //     return $conn->query($query);
    // }
    // public function getOnePengguna($id)
    // {
    //     $query = $this->get("SELECT * FROM tb_pengguna WHERE pengguna_id = '$id'")[0];
    //     return $query;
    // }
    // public function editPengguna($data)
    // {
    //     global $conn;

    //     $id       = $data['id'];
    //     $username = $data['username'];
    //     $password = $data['password'];
    //     $nama     = $data['nama'];
    //     $level    = $data['level'];

    //     $query    = "UPDATE tb_pengguna SET pengguna_username = '$username',
    //                                         pengguna_password = '$password',
    //                                         pengguna_nama     = '$nama',
    //                                         pengguna_level    = '$level'
    //                                         WHERE
    //                                         pengguna_id = '$id'";
    //     return $conn->query($query);
    // }
}
