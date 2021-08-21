-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2021 at 05:11 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_yakinjek`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id_customer` bigint(20) NOT NULL,
  `nama_customer` varchar(200) NOT NULL,
  `telepon` char(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `register_at` datetime NOT NULL,
  `foto` varchar(100) NOT NULL,
  `saldo` bigint(20) NOT NULL,
  `token` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_history_saldo`
--

CREATE TABLE `tb_history_saldo` (
  `id_history` bigint(20) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `jenis` enum('D','K') NOT NULL,
  `transaksi_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_item_transaksi`
--

CREATE TABLE `tb_item_transaksi` (
  `id_item` bigint(20) NOT NULL,
  `id_trans` bigint(20) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `qty` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mitra`
--

CREATE TABLE `tb_mitra` (
  `id_mitra` bigint(20) NOT NULL,
  `nama_mitra` varchar(200) NOT NULL,
  `saldo` bigint(20) NOT NULL,
  `telepon` char(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `sim` varchar(100) NOT NULL,
  `foto_sim` varchar(100) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `foto_ktp` varchar(100) NOT NULL,
  `plat` varchar(100) NOT NULL,
  `foto_plat` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `register_at` datetime NOT NULL,
  `token` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_settings`
--

CREATE TABLE `tb_settings` (
  `id_settings` bigint(20) NOT NULL,
  `nama_settings` varchar(200) NOT NULL,
  `nilai` varchar(100) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_trans` bigint(20) NOT NULL,
  `jenis` bigint(20) NOT NULL,
  `id_customer` bigint(20) NOT NULL,
  `id_mitra` bigint(20) NOT NULL,
  `id_merchat` bigint(20) NOT NULL,
  `create_at` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `tb_history_saldo`
--
ALTER TABLE `tb_history_saldo`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `tb_item_transaksi`
--
ALTER TABLE `tb_item_transaksi`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `tb_mitra`
--
ALTER TABLE `tb_mitra`
  ADD PRIMARY KEY (`id_mitra`);

--
-- Indexes for table `tb_settings`
--
ALTER TABLE `tb_settings`
  ADD PRIMARY KEY (`id_settings`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_trans`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_history_saldo`
--
ALTER TABLE `tb_history_saldo`
  MODIFY `id_history` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_item_transaksi`
--
ALTER TABLE `tb_item_transaksi`
  MODIFY `id_item` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_settings`
--
ALTER TABLE `tb_settings`
  MODIFY `id_settings` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_trans` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
