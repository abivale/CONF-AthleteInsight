-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Dec 25, 2023 at 03:38 PM
=======
-- Generation Time: Dec 25, 2023 at 04:22 PM
>>>>>>> 0a74bfa4206bdf857d429598a99076743e303463
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `athlete_insight`
--

-- --------------------------------------------------------

--
-- Table structure for table `afiliasi`
--

CREATE TABLE `afiliasi` (
  `id_afiliasi` int(11) NOT NULL,
  `id_atlit` int(11) NOT NULL,
  `nama_club` varchar(25) NOT NULL,
<<<<<<< HEAD
=======
  `club` varchar(256) NOT NULL,
>>>>>>> 0a74bfa4206bdf857d429598a99076743e303463
  `tahun_gabung` int(11) NOT NULL,
  `tahun_keluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `afiliasi`
--

<<<<<<< HEAD
INSERT INTO `afiliasi` (`id_afiliasi`, `id_atlit`, `nama_club`, `tahun_gabung`, `tahun_keluar`) VALUES
(1, 1, 'Real Madrid', 2009, 2018);
=======
INSERT INTO `afiliasi` (`id_afiliasi`, `id_atlit`, `nama_club`, `club`, `tahun_gabung`, `tahun_keluar`) VALUES
(1, 1, 'Real Madrid', '65096a628a5f4.png', 2009, 2018);
>>>>>>> 0a74bfa4206bdf857d429598a99076743e303463

-- --------------------------------------------------------

--
-- Table structure for table `atlit`
--

CREATE TABLE `atlit` (
  `id_atlit` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `gambar` varchar(25) NOT NULL,
  `bendera` varchar(25) NOT NULL,
  `posisi` varchar(25) NOT NULL,
  `nilai_posisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atlit`
--

INSERT INTO `atlit` (`id_atlit`, `nama`, `gambar`, `bendera`, `posisi`, `nilai_posisi`) VALUES
(1, 'cristiano Ronaldo', '', '', 'Forward', 97);

-- --------------------------------------------------------

--
-- Table structure for table `kesehatan`
--

CREATE TABLE `kesehatan` (
  `id_kesehatan` int(11) NOT NULL,
  `id_atlit` int(11) NOT NULL,
  `fisik` varchar(25) NOT NULL,
  `mental` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_kemampuan`
--

CREATE TABLE `nilai_kemampuan` (
  `id_kemampuan` int(11) NOT NULL,
  `id_atlit` int(11) NOT NULL,
  `nilai_sho` int(2) NOT NULL,
  `nilai_pac` int(2) NOT NULL,
  `nilai_pas` int(2) NOT NULL,
  `nilai_dri` int(2) NOT NULL,
  `nilai_phy` int(2) NOT NULL,
  `nilai_def` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_performance`
--

CREATE TABLE `nilai_performance` (
  `id_nilaiPerformance` int(11) NOT NULL,
  `id_atlit` int(11) NOT NULL,
  `stamina` int(11) NOT NULL,
  `power` int(11) NOT NULL,
  `speed` int(11) NOT NULL,
  `rating` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `update_performance`
--

CREATE TABLE `update_performance` (
  `id_kemajuan` int(11) NOT NULL,
  `id_atlit` int(11) NOT NULL,
  `power` int(11) NOT NULL,
  `stamina` int(11) NOT NULL,
  `speed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `outlet_id` int(11) DEFAULT NULL,
  `role` enum('admin','owner') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `outlet_id`, `role`) VALUES
(19, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, 'admin'),
(52, 'arul', 'arul', 'be3025c4341e340ee641e89779ca2649', NULL, 'owner'),
(53, 'arul', 'ulum', 'be3025c4341e340ee641e89779ca2649', NULL, 'owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `afiliasi`
--
ALTER TABLE `afiliasi`
  ADD PRIMARY KEY (`id_afiliasi`),
  ADD KEY `id_atlit` (`id_atlit`);

--
-- Indexes for table `atlit`
--
ALTER TABLE `atlit`
  ADD PRIMARY KEY (`id_atlit`);

--
-- Indexes for table `kesehatan`
--
ALTER TABLE `kesehatan`
  ADD PRIMARY KEY (`id_kesehatan`),
  ADD KEY `fk_kesehatan_atlit` (`id_atlit`);

--
-- Indexes for table `nilai_kemampuan`
--
ALTER TABLE `nilai_kemampuan`
  ADD PRIMARY KEY (`id_kemampuan`),
  ADD KEY `fk_kemampuan_atlit` (`id_atlit`);

--
-- Indexes for table `nilai_performance`
--
ALTER TABLE `nilai_performance`
  ADD PRIMARY KEY (`id_nilaiPerformance`),
  ADD KEY `fk_performance_atlit` (`id_atlit`);

--
-- Indexes for table `update_performance`
--
ALTER TABLE `update_performance`
  ADD PRIMARY KEY (`id_kemajuan`),
  ADD KEY `id_atlit_updatePerformance` (`id_atlit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `outlet_id` (`outlet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `afiliasi`
--
ALTER TABLE `afiliasi`
  MODIFY `id_afiliasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `afiliasi`
--
ALTER TABLE `afiliasi`
  ADD CONSTRAINT `id_atlit` FOREIGN KEY (`id_atlit`) REFERENCES `atlit` (`id_atlit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kesehatan`
--
ALTER TABLE `kesehatan`
  ADD CONSTRAINT `fk_kesehatan_atlit` FOREIGN KEY (`id_atlit`) REFERENCES `atlit` (`id_atlit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_kemampuan`
--
ALTER TABLE `nilai_kemampuan`
  ADD CONSTRAINT `fk_kemampuan_atlit` FOREIGN KEY (`id_atlit`) REFERENCES `atlit` (`id_atlit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_performance`
--
ALTER TABLE `nilai_performance`
  ADD CONSTRAINT `fk_performance_atlit` FOREIGN KEY (`id_atlit`) REFERENCES `atlit` (`id_atlit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `update_performance`
--
ALTER TABLE `update_performance`
  ADD CONSTRAINT `id_atlit_updatePerformance` FOREIGN KEY (`id_atlit`) REFERENCES `atlit` (`id_atlit`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
