-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Feb 2022 pada 16.44
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wst`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `psn`
--

CREATE TABLE `psn` (
  `id` int(11) NOT NULL,
  `nl` int(100) NOT NULL,
  `ni` int(100) NOT NULL,
  `nh` int(100) NOT NULL,
  `tw` int(100) NOT NULL,
  `tk` int(100) NOT NULL,
  `jp` int(100) NOT NULL,
  `pa` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `wsta`
--

CREATE TABLE `wsta` (
  `id` int(11) NOT NULL,
  `tmpt` varchar(100) NOT NULL,
  `hrg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wsta`
--

INSERT INTO `wsta` (`id`, `tmpt`, `hrg`) VALUES
(1, 'Taman Safari - Bogor', '200.000'),
(2, 'Taman Matahari - Bogor', '150.000'),
(3, 'Kebun Raya - Bogor', '50.000'),
(4, 'The Jungle - Bogor', '100.000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `psn`
--
ALTER TABLE `psn`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wsta`
--
ALTER TABLE `wsta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `psn`
--
ALTER TABLE `psn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `wsta`
--
ALTER TABLE `wsta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
