-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2017 at 02:25 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(30) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `hak_akses` enum('admin','member') NOT NULL DEFAULT 'member'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `hak_akses`) VALUES
(6, 'admin1', 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 'admin'),
(7, 'admin2', 'admin2', 'c84258e9c39059a89ab77d846ddab909', 'admin'),
(8, 'admin3', 'admin3', '32cacb2f994f6b42183a1300d9a3e8d6', 'admin'),
(9, 'Robby Shine', 'robbyshine', '04e2b16ae3b909298e17cfb165e50d99', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `fitness`
--

CREATE TABLE IF NOT EXISTS `fitness` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `cabang` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `pembayaran` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1234567890988 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fitness`
--

INSERT INTO `fitness` (`id`, `nama`, `alamat`, `jenis_kelamin`, `tgl`, `cabang`, `telp`, `pembayaran`) VALUES
(9888211, 'Agnes Melia', 'Jalan Pondok Jagaung RT 04/01 No.88 Pondok Aren ', 'P', '2017-04-24', 'Pondok_aren', '081299002213', 'Rp 130000'),
(9888272, 'Mawar Melati', 'Jalan Unta raya RT 02/03 NO.10A DEPOK', 'P', '2017-04-24', 'depok', '08969922651', 'Rp 130000'),
(2147483647, 'Fachri Yulianto', 'Jalan gapura menteng Bintaro ', 'L', '2017-04-19', 'Pondok_aren', '085659256235', 'Rp 150000'),
(1234567890987, 'Rendy', 'jalan lemabang utara', 'L', '2017-04-30', 'Pondok_aren', '08224141313441', 'Rp 150.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fitness`
--
ALTER TABLE `fitness`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `fitness`
--
ALTER TABLE `fitness`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1234567890988;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
