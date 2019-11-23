-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2019 pada 17.26
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arz_music`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(5, 'Gita Oktaviana', 'Kosambi, Karawang', '2019-11-19 20:12:04', '2019-11-20 20:12:04'),
(6, 'Syahidan Arrizaldy Sidik', 'Bandung', '2019-11-19 20:13:49', '2019-11-20 20:13:49'),
(7, 'Si ganteng tea', 'Bandung', '2019-11-19 21:02:32', '2019-11-20 21:02:32'),
(8, 'Kecap bango', 'Kosambi Karawang', '2019-11-19 21:19:40', '2019-11-20 21:19:40'),
(9, 'Syahidan Arrizaldy Sidik', 'Adiarsa Lapang RT 02/RW 08, Karawang Barat, Karawang, Jawa Barat, Indonesia', '2019-11-19 23:08:45', '2019-11-20 23:08:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(20) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_barang`, `nama_barang`, `jumlah`, `harga`, `pilihan`) VALUES
(3, 5, 3, 'Pearl Drum set', 1, 15000000, ''),
(4, 6, 1, 'Squier Telecaster', 1, 13000000, ''),
(5, 7, 11, 'Yamaha PSR S970', 1, 10000000, ''),
(6, 8, 1, 'Squier Telecaster', 1, 13000000, ''),
(7, 8, 3, 'Pearl Drum set', 1, 15000000, ''),
(8, 8, 9, 'Legacy gitar listrik', 1, 3000000, ''),
(9, 8, 11, 'Yamaha PSR S970', 1, 10000000, ''),
(10, 9, 15, 'Legacy Acoustic Guitar', 2, 2000000, ''),
(11, 9, 1, 'Squier Telecaster', 1, 13000000, ''),
(12, 9, 11, 'Yamaha PSR S970', 1, 10000000, ''),
(13, 9, 16, 'Fender American Elite Jazz bass', 1, 13500000, ''),
(14, 9, 13, 'Tama Drum', 1, 20000000, ''),
(15, 9, 10, 'Yamaha DTX 452', 1, 5000000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(20) NOT NULL,
  `stock` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stock`, `gambar`) VALUES
(1, 'Squier Telecaster', 'Fender Squier Telecaster seri USA', 'gitar', 13000000, 10, 'tele.jpg'),
(3, 'Pearl Drum set', 'The best reason to play drum', 'drum', 15000000, 5, 'pearl.jpg'),
(6, 'Nord Stage 3 (original)', 'Generasi ke-3 keyboard Nord', 'key', 50000000, 5, 'nord.jpg'),
(9, 'Legacy gitar listrik', 'Tipe Stratocaster', 'gitar', 3000000, 3, 'legacy.jpg'),
(10, 'Yamaha DTX 452', 'Electric drum', 'Drum', 5000000, 3, 'yamahadtx.jpg'),
(11, 'Yamaha PSR S970', 'Yamaha electro keyboard', 'key', 10000000, 5, 'yamahakeyboard.jpg'),
(12, 'Roland Juno DS61', 'Electro keyboard', 'key', 8000000, 10, 'juno.jpg'),
(13, 'Tama Drum', 'Original branding of Tama\'s drum.', 'drum', 20000000, 5, 'tama_drum.jpg'),
(14, 'Gibson Hollow Body', 'Authentic of Gibson brand.', 'gitar', 5000000, 10, 'gibson_hollow.jpg'),
(15, 'Legacy Acoustic Guitar', 'Original of Legacy\'s guitar.', 'gitar', 2000000, 25, 'legacy_acoustic.jpg'),
(16, 'Fender American Elite Jazz bass', 'Fender Bass', 'bass', 13500000, 10, 'fender_american_elite.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_brg`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
