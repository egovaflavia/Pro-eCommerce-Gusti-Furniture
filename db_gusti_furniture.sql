-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Mei 2020 pada 18.27
-- Versi Server: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

--
-- Database: `db_gusti_furniture`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail`
--

CREATE TABLE IF NOT EXISTS `tb_detail` (
  `detail_id` int(11) NOT NULL,
  `pemesanan_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `detail_jumlah` int(11) NOT NULL,
  `detail_harga` int(11) NOT NULL,
  `detail_sub_harga` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail`
--

INSERT INTO `tb_detail` (`detail_id`, `pemesanan_id`, `produk_id`, `detail_jumlah`, `detail_harga`, `detail_sub_harga`) VALUES
(48, 45, 33, 2, 6000000, 12000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE IF NOT EXISTS `tb_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`kategori_id`, `kategori_nama`) VALUES
(1, 'Kursi'),
(2, 'Meja'),
(3, 'Spring Bed'),
(4, 'Lemari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_member`
--

CREATE TABLE IF NOT EXISTS `tb_member` (
  `member_id` int(11) NOT NULL,
  `member_username` varchar(255) NOT NULL,
  `member_password` varchar(255) NOT NULL,
  `member_nama` varchar(255) NOT NULL,
  `member_jenis_kelamin` varchar(255) NOT NULL,
  `member_email` varchar(255) NOT NULL,
  `member_tmp_tgl_lahir` varchar(255) NOT NULL,
  `member_tlp` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_member`
--

INSERT INTO `tb_member` (`member_id`, `member_username`, `member_password`, `member_nama`, `member_jenis_kelamin`, `member_email`, `member_tmp_tgl_lahir`, `member_tlp`) VALUES
(3, 'egova', 'asdasd12', 'Quia enim asperiores', 'Perempuan', 'suvus@mailinator.com', 'Qui molestias sunt m/2005-12-10', '21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ongkir`
--

CREATE TABLE IF NOT EXISTS `tb_ongkir` (
  `ongkir_id` int(11) NOT NULL,
  `ongkir_kota` varchar(50) NOT NULL,
  `ongkir_harga` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ongkir`
--

INSERT INTO `tb_ongkir` (`ongkir_id`, `ongkir_kota`, `ongkir_harga`) VALUES
(1, 'Kabupaten Pesisir Selatan', 608000),
(2, 'Kabupaten Solok', 192000),
(3, 'Kabupaten Sijunjung', 348000),
(4, 'Kabupaten Tanah Datar', 80000),
(5, 'Kabupaten Padang Pariaman', 184000),
(6, 'Kabupaten Agam', 252000),
(7, 'Kabupaten Lima Puluh Kota', 416000),
(9, 'Kabupaten Pasaman', 448000),
(11, 'Kabupaten Dharmasraya', 784000),
(12, 'Kabupaten Solok Selatan', 656000),
(13, 'Kabupaten Pasaman Barat', 828000),
(14, 'Kota Padang', 492000),
(15, 'Kota Solok', 184000),
(16, 'Kota Sawahlunto', 276000),
(17, 'Kota Padangpanjang', 32000),
(18, 'Kota Bukittinggi', 108000),
(19, 'Kota Payakumbuh', 220000),
(20, 'Kota Pariaman', 216000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE IF NOT EXISTS `tb_pembayaran` (
  `pembayaran_id` int(11) NOT NULL,
  `pemesanan_id` int(11) NOT NULL,
  `pembayaran_nama_pengirim` varchar(50) NOT NULL,
  `pembayaran_bank` varchar(50) NOT NULL DEFAULT 'COD',
  `pembayaran_jumlah` int(11) NOT NULL,
  `pembayaran_tgl` date NOT NULL,
  `pembayaran_gambar_bukti` varchar(255) NOT NULL DEFAULT 'COD'
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`pembayaran_id`, `pemesanan_id`, `pembayaran_nama_pengirim`, `pembayaran_bank`, `pembayaran_jumlah`, `pembayaran_tgl`, `pembayaran_gambar_bukti`) VALUES
(15, 28, 'Et quis voluptate ea', 'Century', 44, '2020-05-15', '201505093956.png'),
(16, 29, 'Mollit autem reicien', 'Century', 64, '2020-05-15', '201505044141.png'),
(17, 45, 'Unde veritatis nobis', 'CIMB', 32, '2020-05-21', '202005060737.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesanan`
--

CREATE TABLE IF NOT EXISTS `tb_pemesanan` (
  `pemesanan_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `pemesanan_tgl` date NOT NULL,
  `pemesanan_status` varchar(50) NOT NULL DEFAULT 'Pending',
  `pemesanan_total` int(11) NOT NULL,
  `pemesanan_tujuan` varchar(50) NOT NULL,
  `pemesanan_ongkir` int(11) NOT NULL,
  `pemesanan_alamat_lengkap` varchar(50) NOT NULL,
  `pemesanan_expired` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`pemesanan_id`, `member_id`, `pemesanan_tgl`, `pemesanan_status`, `pemesanan_total`, `pemesanan_tujuan`, `pemesanan_ongkir`, `pemesanan_alamat_lengkap`, `pemesanan_expired`) VALUES
(45, 3, '2020-05-20', 'Menunggu Konfirmasi', 12220000, 'Kota Payakumbuh', 220000, 'Et autem sit qui vel', '2020-05-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE IF NOT EXISTS `tb_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_username` varchar(255) NOT NULL,
  `pengguna_password` varchar(255) NOT NULL,
  `pengguna_nama` varchar(255) NOT NULL,
  `pengguna_level` tinytext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`pengguna_id`, `pengguna_username`, `pengguna_password`, `pengguna_nama`, `pengguna_level`) VALUES
(14, 'admin', 'admin', 'Administrator', '1'),
(15, 'Pimpinan', 'Pimpinan', 'Gusti Indah', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE IF NOT EXISTS `tb_produk` (
  `produk_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `produk_nama` varchar(27) NOT NULL,
  `produk_harga` int(11) NOT NULL,
  `produk_stok` int(11) NOT NULL,
  `produk_desk` text NOT NULL,
  `produk_gambar` varchar(50) NOT NULL,
  `produk_tgl_post` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`produk_id`, `kategori_id`, `produk_nama`, `produk_harga`, `produk_stok`, `produk_desk`, `produk_gambar`, `produk_tgl_post`) VALUES
(33, 3, 'King Pocket Plus Top latex ', 6000000, 96, '<div style="line-height: 19px;"><div style="">Sandaran </div><ul><li>   Rangka sandaran kayu ditambah triplek dilapisi busa dan dibungkus dengan kain oscar warna hitam</li></ul><div style=""><br></div><div style="">Divan </div><ul><li>  Divan Barcelona Tipe AÂ <span style="font-size: 1rem;">Rangka Divan Box, bahan Kayu, dilapisi PP Board ditambah busa dan dibungkus kain oscar warna coklat tua</span></li></ul><div style=""><span style="font-size: 1rem;"><br></span></div><div style="">Kasur</div><ul><li><span style="font-size: 1rem;">Model Kasur Plustop yaitu ada tambahan pada bagian atasnya yang dilapisi dengan latex</span></li><li>Rangka kasur spring pocket</li><li>Sarung kasur menggunakan kain quilting dengan busa density tinggi</li><li>Lapisan kasur terdiri dari rebonded ditambah busa density tinggi</li></ul><div style=""><br></div><div style="">Tinggi kasur </div><ul><li>   26 cm</li></ul><div style="">Tinggi divan </div><ul><li>   18 cm</li></ul><div style=""><br></div><div style="">Tinggi Kasur + Divan + Kaki stabil </div><ul><li>55 cm</li></ul><div style=""><br></div><div style="">Ukuran kasur </div><ul><li>   160x200, 180x200, 200x200</li></ul><div style="">Garansi Garansi per 15 tahun</div></div>', '20201605052419.png', '0000-00-00'),
(34, 3, 'KING FULL LATEX  KENSINGTON', 5650000, 100, '<table class="spec-table" style="margin: 0px; padding: 0px; border: 1px solid rgb(236, 239, 241); outline: 0px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-spacing: 0px;"><tbody style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"><tr style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"><td style="margin: 0px; padding: 8px 15px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(236, 239, 241); border-left-color: initial; border-image: initial; outline: 0px; vertical-align: baseline; background: transparent;"><p><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">Sandaran</strong></p></td><td style="margin: 0px; padding: 8px 15px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(236, 239, 241); border-left-color: initial; border-image: initial; outline: 0px; vertical-align: baseline; background: transparent;"><p><span style="background-color: transparent; font-size: 1rem;">Rangka Kayu Oven yang sudah dilapisi oleh anti rayap ditambah busa dan dibungkus menggunakan kain oscar Gold</span><br></p></td></tr><tr style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: rgb(248, 251, 251);"><td style="margin: 0px; padding: 8px 15px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(236, 239, 241); border-left-color: initial; border-image: initial; outline: 0px; vertical-align: baseline; background: transparent;"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">Divan</strong></td><td style="margin: 0px; padding: 8px 15px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(236, 239, 241); border-left-color: initial; border-image: initial; outline: 0px; vertical-align: baseline; background: transparent;">Rangka Divan Box Barcelona plus, dilapisi PP board PVC ditambah busa dan dibungkus kain oscar 3D</td></tr><tr style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"><td style="margin: 0px; padding: 8px 15px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(236, 239, 241); border-left-color: initial; border-image: initial; outline: 0px; vertical-align: baseline; background: transparent;"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"></strong></td><td style="margin: 0px; padding: 8px 15px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(236, 239, 241); border-left-color: initial; border-image: initial; outline: 0px; vertical-align: baseline; background: transparent;">Tinggi Divan 18cm</td></tr><tr style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: rgb(248, 251, 251);"><td style="margin: 0px; padding: 8px 15px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(236, 239, 241); border-left-color: initial; border-image: initial; outline: 0px; vertical-align: baseline; background: transparent;"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">Kasur</strong></td><td style="margin: 0px; padding: 8px 15px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(236, 239, 241); border-left-color: initial; border-image: initial; outline: 0px; vertical-align: baseline; background: transparent;">Model kasur resleting (bisa dilepas)</td></tr><tr style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"><td style="margin: 0px; padding: 8px 15px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(236, 239, 241); border-left-color: initial; border-image: initial; outline: 0px; vertical-align: baseline; background: transparent;"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"></strong></td><td style="margin: 0px; padding: 8px 15px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(236, 239, 241); border-left-color: initial; border-image: initial; outline: 0px; vertical-align: baseline; background: transparent;">Tanpa Per, Kasur Full Latex</td></tr><tr style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: rgb(248, 251, 251);"><td style="margin: 0px; padding: 8px 15px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(236, 239, 241); border-left-color: initial; border-image: initial; outline: 0px; vertical-align: baseline; background: transparent;"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"></strong></td><td style="margin: 0px; padding: 8px 15px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(236, 239, 241); border-left-color: initial; border-image: initial; outline: 0px; vertical-align: baseline; background: transparent;">Sarung kasur menggunakan kain knitting quilting</td></tr><tr style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"><td style="margin: 0px; padding: 8px 15px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(236, 239, 241); border-left-color: initial; border-image: initial; outline: 0px; vertical-align: baseline; background: transparent;"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">Tinggi Kasur</strong></td><td style="margin: 0px; padding: 8px 15px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(236, 239, 241); border-left-color: initial; border-image: initial; outline: 0px; vertical-align: baseline; background: transparent;">24 cm</td></tr><tr style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: rgb(248, 251, 251);"><td style="margin: 0px; padding: 8px 15px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(236, 239, 241); border-left-color: initial; border-image: initial; outline: 0px; vertical-align: baseline; background: transparent;"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"></strong></td><td style="margin: 0px; padding: 8px 15px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(236, 239, 241); border-left-color: initial; border-image: initial; outline: 0px; vertical-align: baseline; background: transparent;">Tinggi kasur + Divan + Kaki Stabil = 53cm</td></tr><tr style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"><td style="margin: 0px; padding: 8px 15px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(236, 239, 241); border-left-color: initial; border-image: initial; outline: 0px; vertical-align: baseline; background: transparent;"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">Ukuran</strong></td><td style="margin: 0px; padding: 8px 15px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(236, 239, 241); border-left-color: initial; border-image: initial; outline: 0px; vertical-align: baseline; background: transparent;">160, 180, 200</td></tr><tr style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: rgb(248, 251, 251);"><td style="margin: 0px; padding: 8px 15px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(236, 239, 241); border-left-color: initial; border-image: initial; outline: 0px; vertical-align: baseline; background: transparent;"><strong style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">Garansi Per</strong></td><td style="margin: 0px; padding: 8px 15px; border-width: 0px 0px 1px; border-top-style: initial; border-right-style: initial; border-bottom-style: solid; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: rgb(236, 239, 241); border-left-color: initial; border-image: initial; outline: 0px; vertical-align: baseline; background: transparent;">15 Tahun</td></tr></tbody></table>', '20201605052851.png', '0000-00-00'),
(36, 4, 'OlympicLatte 3P', 1500000, 100, '<ul class="" style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; overflow: hidden; columns: auto 2; column-gap: 32px; font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 12px;"><li class="" data-spm-anchor-id="a2o4j.pdp.product_detail.i0.104f1cfeHYhFph" style="margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;">1. DESIGN YANGMODERN</li><li class="" data-spm-anchor-id="a2o4j.pdp.product_detail.i1.104f1cfeHYhFph" style="margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;">2. MOTIF KAYU SAN REMO DARK</li><li class="" style="margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;">3. TERDAPAT HANDLE BESI + KUNCI</li><li class="" style="margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;">4. TERDAPAT GANTUNGAN BESI CHROME</li><li class="" style="margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;">5. TERDAPAT CERMIN</li><li class="" style="margin: 0px; padding: 0px 0px 0px 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;">6. TERDAPAT LACI DI DALAM</li></ul>', '20202005043713.webp', '0000-00-00'),
(37, 1, 'Texas Series', 270000, 100, '<p><span style="color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, æ–‡æ³‰é©›æ­£é»‘, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;å„·é»‘ Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, å¾®è»Ÿæ­£é»‘é«”, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;">Manufacture : Uno\r\nTipe Kursi: : Staff/Manager\r\nBeroda : Tidak\r\nHydrolic : Tidak\r\nRangka kaki : metal chrome\r\nBahan dudukan : Oscar/Fabric\r\nBahan sandaran : Oscar/Fabric\r\nArm Rest : Tidak</span><br></p>', '20202005052559.jpeg', '0000-00-00'),
(38, 2, 'Meja Laptop', 200000, 100, '<p><span style="color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, æ–‡æ³‰é©›æ­£é»‘, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;å„·é»‘ Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, å¾®è»Ÿæ­£é»‘é«”, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; font-size: 14px; white-space: pre-wrap;">Meja Lipat latpo Aluminium dengan pilihan warna yang ramah bagi pengguna. Struktur Ringan dan Kokoh sangat cocok untuk meja laptop,  meja belajar anak, untuk les privat, maupun ditempatkan diatas tempat tidur. \r\nTerbuat Dari Material  Bahan Aluminium dan Kaki Penerbangan .Braket Stainless Steel\r\n\r\n\r\n**Kokoh Bisa Menahan Beban**\r\n\r\nDimensi : 1\r\nPanjang = 71 cm\r\nLebar = 49 cm \r\nTinggi = 31  cm\r\n\r\nDimensi : 2\r\nPanjang = 62 cm\r\nLebar = 42 cm \r\nTinggi = 27  cm\r\n\r\nPilihan Warna : \r\n1.Biru\r\n2. Hijau\r\n3.Pink\r\n4. Putih\r\n5. Coklat kayu</span><br></p>', '20202005054830.jpeg', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail`
--
ALTER TABLE `tb_detail`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tb_ongkir`
--
ALTER TABLE `tb_ongkir`
  ADD PRIMARY KEY (`ongkir_id`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`pembayaran_id`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`pemesanan_id`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail`
--
ALTER TABLE `tb_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_ongkir`
--
ALTER TABLE `tb_ongkir`
  MODIFY `ongkir_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `pembayaran_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `pemesanan_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
