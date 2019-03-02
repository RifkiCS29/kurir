-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2017 at 06:29 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kurir`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(10) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username_admin`, `password`, `gambar`) VALUES
(1, 'Christian Agustin', 'chris', '711c73f64afdce07b7e38039a96d2224209e9a6c', 'chris.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kurir`
--

CREATE TABLE `tb_kurir` (
  `id_kurir` int(11) NOT NULL,
  `nama_kurir` varchar(70) NOT NULL,
  `username_kurir` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tanggal_lahir_kurir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_hp_kurir` varchar(12) NOT NULL,
  `no_plat` varchar(9) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kurir`
--

INSERT INTO `tb_kurir` (`id_kurir`, `nama_kurir`, `username_kurir`, `password`, `tanggal_lahir_kurir`, `alamat`, `no_hp_kurir`, `no_plat`, `gambar`) VALUES
(1, 'Rahmat Ramadhan', 'madan', 'fb464ec99929d760e016f677dd8537570621835b', '2017-01-16', 'grogot', '03812312312', 'kt9182d', 'madan.jpg'),
(3, 'Akmal Armi', 'akmal', 'd29c11fe07a0192b3026caf3d6ca6ef7da8db65e', '2017-01-16', 'grogot', '03812312312', 'kt9182d', 'akmal.jpg'),
(4, 'Rifki', 'rifki', '4d03ebb840218e2dc8733e450178727c47b99d17', '2017-03-21', 'badak', '08123126738', 'kt8912ss', 'rifki.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(70) NOT NULL,
  `username_pelanggan` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `no_hp_pelanggan` varchar(12) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `username_pelanggan`, `password`, `tanggal_lahir`, `alamat_pelanggan`, `no_hp_pelanggan`, `gambar`) VALUES
(3, 'Aqib Muaddam', 'aqib', '0f704bb68662b0b0e225ea15445aefa585d0eb6d', '1995-03-21', 'manggar', '081336395262', 'aqib.jpg'),
(6, 'Rigan Syahrini', 'rigan', 'de6a5e8641290fa8bafae9ab19e62ea92fbb193f', '2017-02-01', 'sebulu', '08123678123', 'rigan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `no_transaksi` int(5) NOT NULL,
  `alamat_asal` text NOT NULL,
  `alamat_tujuan` text NOT NULL,
  `penerima` varchar(70) NOT NULL,
  `pengirim` varchar(70) NOT NULL,
  `berat_barang` float NOT NULL,
  `biaya` int(11) NOT NULL,
  `kurir` varchar(70) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `no_hp_penerima` varchar(12) NOT NULL,
  `waktu` text NOT NULL,
  `status` varchar(25) NOT NULL,
  `penilaian` int(3) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username_admin` (`username_admin`);

--
-- Indexes for table `tb_kurir`
--
ALTER TABLE `tb_kurir`
  ADD PRIMARY KEY (`id_kurir`),
  ADD UNIQUE KEY `username_kurir` (`username_kurir`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD UNIQUE KEY `username_pelanggan` (`username_pelanggan`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`no_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_kurir`
--
ALTER TABLE `tb_kurir`
  MODIFY `id_kurir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `no_transaksi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
