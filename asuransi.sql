-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 06, 2016 at 06:14 AM
-- Server version: 5.7.12-0ubuntu1
-- PHP Version: 7.0.4-7ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asuransi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_adm` int(11) NOT NULL,
  `nama_adm` varchar(20) NOT NULL,
  `jabatan_adm` varchar(20) NOT NULL,
  `password_adm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_adm`, `nama_adm`, `jabatan_adm`, `password_adm`) VALUES
(51010001, 'Muchlis Salam', 'Operasional', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `agen`
--

CREATE TABLE `agen` (
  `id_a` int(11) NOT NULL,
  `nama_a` varchar(20) NOT NULL,
  `temlah_a` varchar(20) NOT NULL,
  `tgllahir_a` date NOT NULL,
  `almt_a` text NOT NULL,
  `jkl_a` varchar(10) NOT NULL,
  `stat_a` varchar(20) NOT NULL,
  `pend_a` varchar(15) NOT NULL,
  `telp_a` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agen`
--

INSERT INTO `agen` (`id_a`, `nama_a`, `temlah_a`, `tgllahir_a`, `almt_a`, `jkl_a`, `stat_a`, `pend_a`, `telp_a`) VALUES
(11010001, 'Syamsaaaa', 'Cimahi', '2006-08-10', 'Kp. Batu Nunggal RT 09 RW 10', 'Laki-laki', 'Belum Menikah', 'S1', '087654231234'),
(11010002, 'asdasd', 'asdasd', '2015-12-23', 'asdasd', 'Laki-laki', 'Belum Menikah', 'S1', '23123'),
(11010003, 'Voluptates qui dolor', 'Deserunt dolore offi', '1970-01-01', 'Itaque minima itaque quia aut excepteur quia odit amet, ipsam aut sunt quis incididunt at cillum.', 'Laki-laki', 'POLRI/TNIi', 'SD', '8');

-- --------------------------------------------------------

--
-- Table structure for table `nasabah`
--

CREATE TABLE `nasabah` (
  `noiden_n` varchar(16) NOT NULL,
  `nama_n` varchar(20) NOT NULL,
  `namaibukan_n` varchar(20) NOT NULL,
  `bukiden_n` varchar(6) NOT NULL,
  `temlah_n` varchar(20) NOT NULL,
  `tgllahir_n` date NOT NULL,
  `jkl_n` varchar(10) NOT NULL,
  `pek_n` varchar(30) NOT NULL,
  `peng_n` varchar(30) NOT NULL,
  `almt_n` text NOT NULL,
  `telp_n` varchar(12) NOT NULL,
  `ahwar_n` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nasabah`
--

INSERT INTO `nasabah` (`noiden_n`, `nama_n`, `namaibukan_n`, `bukiden_n`, `temlah_n`, `tgllahir_n`, `jkl_n`, `pek_n`, `peng_n`, `almt_n`, `telp_n`, `ahwar_n`) VALUES
('3212341212345634', 'Dien d', 'Mila', 'defaul', 'Bandung', '2013-04-07', 'Perempuan', 'PNS', '1.500.000-2.400.000', 'Kp Batu RT 09 RT 10', '089876541234', 'Budi'),
('3412342112344321', 'Mila N', 'Ima', 'SIM', 'Bandung', '2015-12-02', 'Perempuan', 'PNS', 'Kurang dari 500.000', 'Kp Ninggal RT 05 RW 10', '089712345678', 'Nina N');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `no_polis` int(11) NOT NULL,
  `tgl_jual` date NOT NULL,
  `noiden_n` varchar(16) NOT NULL,
  `jum_premi` int(20) NOT NULL,
  `masa_as` int(5) NOT NULL,
  `id_a` int(11) NOT NULL,
  `tipe` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`no_polis`, `tgl_jual`, `noiden_n`, `jum_premi`, `masa_as`, `id_a`, `tipe`) VALUES
(22010005, '2015-12-24', '3412342112344321', 123, 123, 11010002, 'Terikat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `agen`
--
ALTER TABLE `agen`
  ADD PRIMARY KEY (`id_a`);

--
-- Indexes for table `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`noiden_n`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`no_polis`),
  ADD KEY `noiden_n` (`noiden_n`),
  ADD KEY `id_a` (`id_a`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51010002;
--
-- AUTO_INCREMENT for table `agen`
--
ALTER TABLE `agen`
  MODIFY `id_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11010004;
--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `no_polis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22010006;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `id_a` FOREIGN KEY (`id_a`) REFERENCES `agen` (`id_a`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `noiden_n` FOREIGN KEY (`noiden_n`) REFERENCES `nasabah` (`noiden_n`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
