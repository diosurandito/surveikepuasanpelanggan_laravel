-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2020 pada 01.17
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survei_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Rival Adrian Juliansyah', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id_datauser` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(35) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `usia` int(10) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `jenis_pekerjaan` varchar(30) NOT NULL,
  `merk_dibeli` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_customer`
--

INSERT INTO `tbl_customer` (`id_datauser`, `nama`, `alamat`, `email`, `no_telp`, `usia`, `jenis_kelamin`, `pendidikan`, `jenis_pekerjaan`, `merk_dibeli`) VALUES
(1, 'Rival Adrian Juliansyah', 'Jl. Panjang No.41-45\r\nKedoya Selatan - Kebon Jeruk\r\nJakarta Barat 11520', 'rivaladrian@gmail.com', '82240556153', 23, '', 'S1', 'Programmer', 'LLumar'),
(2, 'Rival Adrian Juliansyah', 'w', 'wawd@gmail.comw', '32', 2, '', '2', '2', '2'),
(3, '2', '2', '2@w', '2', 2, '', '2', '2', '2'),
(4, 'w', 'w', 'wawd@gmail.com', '2', 2, '', '2', '2', '2'),
(5, 'a', 'ww', 'wawd@gmail.com', '3434', 12, '', '2', '2', '2'),
(6, 'e', 'w', 'wawd@gmail.comw', '232', 13, '', '2', 's', 'e'),
(7, 'asw', 'we', 'coegwakwaw100@gmail.com', '12', 12, '', '12', '21', 'lumar'),
(8, 'a', 'df', 'coegwakwaw100@gmail.com', '1223', 12, '', 'e', 'e', 'e'),
(9, 'a', 'as', 'coegwakwaw100@gmail.com', '121', 121, 'Laki-laki', 'sdsd', 'ssd', 'LLumar'),
(10, 'a', 'as', 'coegwakwaw100@gmail.com', '121', 121, 'Laki-laki', 'sdsd', 'ssd', 'LLumar'),
(11, 'coeg', 'hehe', 'hehe@gmail.com', '123456677', 123456677, 'Laki-laki', 'heme', 'heme', 'LLumar'),
(12, 'heme', 'heme', 'heme@gb.com', '0989898', 989898, 'Laki-laki', 'S1', 'Karyawan', 'LLumar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hasil`
--

CREATE TABLE `tbl_hasil` (
  `id_hasil` int(10) NOT NULL,
  `id_datauser` int(10) NOT NULL,
  `id_pertanyaan` int(10) NOT NULL,
  `t_kepuasan` int(10) NOT NULL,
  `t_kepentingan` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_hasil`
--

INSERT INTO `tbl_hasil` (`id_hasil`, `id_datauser`, `id_pertanyaan`, `t_kepuasan`, `t_kepentingan`) VALUES
(53, 1, 23, 4, 3),
(54, 1, 24, 3, 3),
(55, 1, 25, 3, 4),
(56, 1, 26, 4, 2),
(57, 1, 27, 3, 2),
(58, 1, 28, 4, 4),
(59, 1, 29, 2, 2),
(60, 1, 30, 4, 3),
(61, 1, 31, 4, 4),
(62, 1, 32, 4, 1),
(63, 1, 33, 2, 3),
(64, 1, 34, 3, 2),
(65, 1, 35, 4, 4),
(66, 1, 36, 3, 1),
(67, 3, 37, 3, 3),
(68, 1, 38, 4, 2),
(69, 7, 22, 4, 4),
(70, 7, 23, 3, 3),
(71, 7, 24, 3, 2),
(72, 7, 25, 3, 3),
(73, 7, 26, 3, 3),
(74, 7, 27, 3, 3),
(75, 7, 28, 3, 3),
(76, 7, 29, 4, 1),
(77, 7, 30, 4, 3),
(78, 7, 31, 4, 4),
(79, 7, 32, 4, 4),
(80, 7, 33, 4, 4),
(81, 7, 34, 4, 3),
(82, 7, 35, 4, 4),
(83, 7, 36, 4, 4),
(84, 7, 37, 4, 4),
(85, 7, 38, 3, 4),
(86, 0, 22, 4, 4),
(87, 0, 23, 3, 3),
(88, 0, 24, 3, 2),
(89, 0, 25, 3, 3),
(90, 0, 26, 3, 3),
(91, 0, 27, 3, 3),
(92, 0, 28, 3, 3),
(93, 0, 29, 4, 1),
(94, 0, 30, 4, 3),
(95, 0, 31, 4, 4),
(96, 0, 32, 4, 4),
(97, 0, 33, 4, 4),
(98, 0, 34, 4, 3),
(99, 0, 35, 4, 4),
(100, 0, 36, 4, 4),
(101, 0, 37, 4, 4),
(102, 0, 38, 3, 4),
(103, 0, 22, 4, 4),
(104, 0, 23, 3, 3),
(105, 0, 24, 3, 2),
(106, 0, 25, 3, 3),
(107, 0, 26, 3, 3),
(108, 0, 27, 3, 3),
(109, 0, 28, 3, 3),
(110, 0, 29, 4, 1),
(111, 0, 30, 4, 3),
(112, 0, 31, 4, 4),
(113, 0, 32, 4, 4),
(114, 0, 33, 4, 4),
(115, 0, 34, 4, 3),
(116, 0, 35, 4, 4),
(117, 0, 36, 4, 4),
(118, 0, 37, 4, 4),
(119, 0, 38, 3, 4),
(120, 0, 22, 4, 4),
(121, 0, 23, 3, 3),
(122, 0, 24, 3, 2),
(123, 0, 25, 3, 3),
(124, 0, 26, 3, 3),
(125, 0, 27, 3, 3),
(126, 0, 28, 3, 3),
(127, 0, 29, 4, 1),
(128, 0, 30, 4, 3),
(129, 0, 31, 4, 4),
(130, 0, 32, 4, 4),
(131, 0, 33, 4, 4),
(132, 0, 34, 4, 3),
(133, 0, 35, 4, 4),
(134, 0, 36, 4, 4),
(135, 0, 37, 4, 4),
(136, 0, 38, 3, 4),
(137, 8, 22, 2, 1),
(138, 8, 23, 3, 2),
(139, 8, 24, 3, 1),
(140, 8, 25, 3, 2),
(141, 8, 26, 3, 3),
(142, 8, 27, 3, 1),
(143, 8, 28, 2, 2),
(144, 8, 29, 3, 3),
(145, 8, 30, 4, 4),
(146, 8, 31, 4, 4),
(147, 8, 32, 4, 4),
(148, 8, 33, 4, 4),
(149, 8, 34, 4, 4),
(150, 8, 35, 4, 4),
(151, 8, 36, 4, 4),
(152, 8, 37, 4, 4),
(153, 8, 38, 4, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hasil_2`
--

CREATE TABLE `tbl_hasil_2` (
  `id` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `puas_p1` int(2) NOT NULL,
  `puas_p2` int(2) NOT NULL,
  `puas_p3` int(2) NOT NULL,
  `puas_p4` int(2) NOT NULL,
  `puas_p5` int(2) NOT NULL,
  `puas_p6` int(2) NOT NULL,
  `puas_p7` int(2) NOT NULL,
  `puas_p8` int(2) NOT NULL,
  `puas_p9` int(2) NOT NULL,
  `puas_p10` int(2) NOT NULL,
  `puas_p11` int(2) NOT NULL,
  `puas_p12` int(2) NOT NULL,
  `puas_p13` int(2) NOT NULL,
  `puas_p14` int(2) NOT NULL,
  `puas_p15` int(2) NOT NULL,
  `puas_p16` int(2) NOT NULL,
  `puas_p17` int(2) NOT NULL,
  `pent_p1` int(2) NOT NULL,
  `pent_p2` int(2) NOT NULL,
  `pent_p3` int(2) NOT NULL,
  `pent_p4` int(2) NOT NULL,
  `pent_p5` int(2) NOT NULL,
  `pent_p6` int(2) NOT NULL,
  `pent_p7` int(2) NOT NULL,
  `pent_p8` int(2) NOT NULL,
  `pent_p9` int(2) NOT NULL,
  `pent_p10` int(2) NOT NULL,
  `pent_p11` int(2) NOT NULL,
  `pent_p12` int(2) NOT NULL,
  `pent_p13` int(2) NOT NULL,
  `pent_p14` int(2) NOT NULL,
  `pent_p15` int(2) NOT NULL,
  `pent_p16` int(2) NOT NULL,
  `pent_p17` int(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_hasil_2`
--

INSERT INTO `tbl_hasil_2` (`id`, `id_user`, `puas_p1`, `puas_p2`, `puas_p3`, `puas_p4`, `puas_p5`, `puas_p6`, `puas_p7`, `puas_p8`, `puas_p9`, `puas_p10`, `puas_p11`, `puas_p12`, `puas_p13`, `puas_p14`, `puas_p15`, `puas_p16`, `puas_p17`, `pent_p1`, `pent_p2`, `pent_p3`, `pent_p4`, `pent_p5`, `pent_p6`, `pent_p7`, `pent_p8`, `pent_p9`, `pent_p10`, `pent_p11`, `pent_p12`, `pent_p13`, `pent_p14`, `pent_p15`, `pent_p16`, `pent_p17`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 11, 1, 2, 3, 4, 1, 2, 3, 4, 1, 2, 3, 4, 1, 2, 3, 4, 1, 1, 2, 3, 4, 1, 2, 3, 4, 1, 2, 3, 4, 1, 2, 3, 4, 1, NULL, NULL, NULL),
(2, 12, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, '2020-06-25 19:35:46', '2020-06-25 19:35:46', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `id_nilai` int(10) NOT NULL,
  `nilai` int(5) NOT NULL,
  `deskripsi` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id_nilai`, `nilai`, `deskripsi`) VALUES
(8, 1, 'Sangat Tidak Baik'),
(9, 2, 'Tidak Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pertanyaan`
--

CREATE TABLE `tbl_pertanyaan` (
  `id_pertanyaan` int(10) NOT NULL,
  `pertanyaan` text NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pertanyaan`
--

INSERT INTO `tbl_pertanyaan` (`id_pertanyaan`, `pertanyaan`, `status`) VALUES
(1, 'Kaca film yang memberikan performance yang stabil untuk mengurangi panas matahari dan kualitas warna yang stabil.', 1),
(2, 'Kaca film yang menawarkan varian warna  yang beragam.', 1),
(3, 'Ketepatan spesifikasi mutu   produk antara yang tertulis di brosur dengan kenyataan produk  yang sesungguhnya', 1),
(4, 'Produk kaca film yang terpasang dengan rapih dan baik', 1),
(5, 'Mudah mendapatkan jaringan penjualan kaca film yang diingin', 1),
(6, 'Produk kaca film yang diberikan adalah produk asli brand tersebut', 1),
(7, 'Kemudahan konsumen mendapatkan informasi type produk yang tepat untuk digunakan', 1),
(8, 'Ketersediaan bagi konsumen,jalur komunikasi telepon pelayanan konsumen', 1),
(9, 'Kemudahan konsumen untuk mendapatkan jaringan pelayanan purna jual', 1),
(10, 'Kecepatan penyelsaian keluhan dan masalah konsumen', 1),
(11, 'Garansi produk akibat produk cacat pabrikasi dan kesalahan pemasangan', 1),
(12, 'Kemudahan prosedur pengajuan claim', 1),
(13, 'Mendapatkan harga yang sesuai dengan kualitas produk & harga yang kompetitif', 1),
(14, 'Merek kaca film yang terkenal & citra produk yang baik', 1),
(15, 'Tersedianya sarana website dan social media dari produk', 1),
(16, 'Penjualan,pemasangan dan pelayanan purna jual hanya di Dealer jaringan resmi', 1),
(17, 'Kaca film dipasang oleh pemasang kaca film professional', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_saran`
--

CREATE TABLE `tbl_saran` (
  `id_kritiksaran` int(10) NOT NULL,
  `id_datauser` int(10) NOT NULL,
  `saran_masukan` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_saran`
--

INSERT INTO `tbl_saran` (`id_kritiksaran`, `id_datauser`, `saran_masukan`, `tanggal`) VALUES
(1, 1, 'ini adalah saran saya yng perlu memasukan data saran', '2020-04-05 08:25:00'),
(2, 2, 'ini adalah saran saya yng perlu memasukan data saran', '2020-04-06 08:25:00'),
(3, 3, 'awd', '2020-04-05 08:25:00'),
(4, 3, '', '2020-04-05 08:25:00'),
(5, 3, '', '2020-04-07 17:42:17'),
(6, 3, '', '2020-04-07 17:42:22'),
(9, 3, '', '2020-04-07 17:42:22'),
(10, 3, '', '2020-04-07 17:42:17'),
(11, 3, '', '2020-04-07 17:42:22'),
(12, 7, 'jkjk', '2020-04-08 01:01:00'),
(13, 0, 'jkjk', '2020-04-08 01:01:00'),
(14, 0, 'jkjk', '2020-04-08 01:01:00'),
(15, 0, 'jkjk', '2020-04-08 01:01:00'),
(16, 8, 'asas', '2020-04-08 01:20:00'),
(17, 12, 'hj', '2020-06-26 02:35:46');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id_datauser`);

--
-- Indeks untuk tabel `tbl_hasil`
--
ALTER TABLE `tbl_hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `tbl_hasil_2`
--
ALTER TABLE `tbl_hasil_2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indeks untuk tabel `tbl_saran`
--
ALTER TABLE `tbl_saran`
  ADD PRIMARY KEY (`id_kritiksaran`),
  ADD KEY `id_datauser` (`id_datauser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id_datauser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_hasil`
--
ALTER TABLE `tbl_hasil`
  MODIFY `id_hasil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT untuk tabel `tbl_hasil_2`
--
ALTER TABLE `tbl_hasil_2`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `id_nilai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  MODIFY `id_pertanyaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `tbl_saran`
--
ALTER TABLE `tbl_saran`
  MODIFY `id_kritiksaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
