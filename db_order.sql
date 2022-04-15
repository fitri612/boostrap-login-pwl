-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2022 pada 06.53
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_order`
--

CREATE TABLE `db_order` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `hrg` double NOT NULL,
  `jml` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_order`
--

INSERT INTO `db_order` (`id`, `nama`, `hrg`, `jml`, `keterangan`, `foto`) VALUES
(1, 'aglonemaRoDudAnjamani', 65000, 11, '-', 'aglonemaRoDudAnjamani.jpg'),
(2, 'aglonemaSuksom', 35000, 6, '-', 'aglonemaSuksom.jpg'),
(3, 'aglonemaRotundumAceh', 30000, 3, '-', 'aglonemaRotundumAceh.jpg'),
(4, 'aglonemaVenus', 65000, 9, '-', 'aglonemaVenus.jpg'),
(5, 'aglonemaSuperWhite', 50000, 6, '-', 'aglonemaSuperWhite.jpg'),
(6, 'aglonemaRedChocin', 30000, 34, '-', 'aglonemaRedChocin.jpg'),
(7, 'aglonemaRedMajesty', 67400, 12, '-', 'aglonemaRedMajesty.jpg'),
(8, 'aglonemaRedAnjamaniDewasa', 65000, 12, '-', 'aglonemaRedAnjamaniDewasa.jpg'),
(9, 'aglonemaSnowWhiteRemaja', 65000, 6, '-', 'aglonemaSnowWhiteRemaja.jpg'),
(10, 'aglonemaKhocin', 12000, 34, '-', 'aglonemaKhocin.jpg'),
(11, 'aglonemaBigroy', 30000, 6, '-', 'aglonemaBigroy.jpg'),
(16, 'Bunga Melati', 50000, 3, '-', '2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_order`
--
ALTER TABLE `db_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `db_order`
--
ALTER TABLE `db_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
