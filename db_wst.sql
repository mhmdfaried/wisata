-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 06:46 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

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
-- Table structure for table `psn`
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
-- Table structure for table `wsta`
--

CREATE TABLE `wsta` (
  `id` int(11) NOT NULL,
  `tmpt` varchar(100) NOT NULL,
  `hrg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wsta`
--

INSERT INTO `wsta` (`id`, `tmpt`, `hrg`) VALUES
(1, 'Taman Safari Bogor', '200000'),
(2, 'Taman Matahari Bogor', '150000'),
(3, 'Kebun Raya Bogor', '50000'),
(4, 'The Jungle Bogor', '100000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `psn`
--
ALTER TABLE `psn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wsta`
--
ALTER TABLE `wsta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `psn`
--
ALTER TABLE `psn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wsta`
--
ALTER TABLE `wsta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
