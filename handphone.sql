-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2021 pada 00.43
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `handphone`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_hp`
--

CREATE TABLE `data_hp` (
  `id` int(10) NOT NULL,
  `tipe_hp` varchar(30) NOT NULL,
  `warna` varchar(30) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_hp`
--

INSERT INTO `data_hp` (`id`, `tipe_hp`, `warna`, `harga`) VALUES
(1, 'OPPO A83', 'Putih', '2200000'),
(2, 'Realme 7i', 'Hitam', '3000000'),
(4, 'iphone promax', 'gold', '21000000'),
(5, 'iphone promax', 'gold', '21000000'),
(6, 'iphone 7s', 'silver', '6000000'),
(7, 'realmi 5i', 'black', '3000000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_hp`
--
ALTER TABLE `data_hp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_hp`
--
ALTER TABLE `data_hp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
