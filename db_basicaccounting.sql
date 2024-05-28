-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2024 at 06:26 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_basicaccounting`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_input_layanan`
--

CREATE TABLE `tb_input_layanan` (
  `id` int NOT NULL,
  `layanan` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `lama_waktu` int NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `tgl_dibuat` datetime DEFAULT CURRENT_TIMESTAMP,
  `tgl_diubah` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_input_layanan`
--

INSERT INTO `tb_input_layanan` (`id`, `layanan`, `deskripsi`, `lama_waktu`, `harga`, `tgl_dibuat`, `tgl_diubah`, `foto`) VALUES
(8, 'Pajak', 'Layanan Pajak', 100, '123456.00', '2024-05-28 21:55:58', '2024-05-28 21:55:58', 'pajak.jpg'),
(9, 'Audit', 'Layanan Audit', 365, '10999000.00', '2024-05-29 01:25:22', '2024-05-29 01:25:22', 'audit.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengajuan`
--

CREATE TABLE `tb_pengajuan` (
  `id` int NOT NULL,
  `Username` varchar(255) NOT NULL,
  `No_Hp` varchar(20) NOT NULL,
  `Alamat` text NOT NULL,
  `Kategori` varchar(100) NOT NULL,
  `harga` int NOT NULL,
  `tgl_dibuat` datetime DEFAULT CURRENT_TIMESTAMP,
  `tgl_diubah` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_pengajuan`
--

INSERT INTO `tb_pengajuan` (`id`, `Username`, `No_Hp`, `Alamat`, `Kategori`, `harga`, `tgl_dibuat`, `tgl_diubah`) VALUES
(1, 'Dzulfidho', '2218023', 'Jl.Itn', 'Audit', 123456, '2024-05-28 23:57:39', '2024-05-29 00:27:39'),
(3, 'Dzuna', '2218023', 'Jalan Indragiri Gg. 21', 'Pajak', 123, '2024-05-29 00:03:21', '2024-05-29 00:03:21'),
(6, 'dz', '1234', 'qwee', 'Pajak', 123456, '2024-05-29 00:51:14', '2024-05-29 00:51:14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `Email`, `Username`, `Password`) VALUES
(1, '2218025@scholar.itn.ac.id', 'Dzulfidho', '$2y$10$0KUrO7f/LnCj/A7vO6Gbo.bzpm38BOKtldqiS0coUZ3DQqCsfnyoO'),
(2, 'dzuna@gmail.com', 'dzuna', '$2y$10$JV8a2FzO4ARoS499VTSqAe5SlJRl.Dxn9W4o19Uas6WIRSUFy/6uC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_input_layanan`
--
ALTER TABLE `tb_input_layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_input_layanan`
--
ALTER TABLE `tb_input_layanan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
