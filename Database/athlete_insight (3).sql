-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 05:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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
  `club` varchar(255) NOT NULL,
  `tahun_gabung` int(11) NOT NULL,
  `tahun_keluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `afiliasi`
--

INSERT INTO `afiliasi` (`id_afiliasi`, `id_atlit`, `nama_club`, `club`, `tahun_gabung`, `tahun_keluar`) VALUES
(1, 1, 'Real Madrid', '', 2009, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `atlit`
--

CREATE TABLE `atlit` (
  `id_atlit` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `gambar` varchar(25) NOT NULL,
  `card` varchar(25) NOT NULL,
  `bendera` varchar(25) NOT NULL,
  `posisi` varchar(25) NOT NULL,
  `nilai_posisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `atlit`
--

INSERT INTO `atlit` (`id_atlit`, `nama`, `gambar`, `card`, `bendera`, `posisi`, `nilai_posisi`) VALUES
(1, 'cristiano Ronaldo', 'Ronaldo', 'CRonaldo', '', 'Forward', 97),
(2, 'Erling Haaland', 'Haaland', 'CHaaland', 'Norwegia', 'ST', 88),
(3, 'Messi', 'Messi', 'CMessi', '', 'CF', 92),
(4, 'Navas', 'Navas', 'CNavas', '', 'GK', 85),
(5, 'Neymar Jr', 'Neymar', 'CNeymar', '', 'CAM', 92),
(6, 'Ruben Dias', 'Dias', 'CDias', '', 'CB', 90),
(7, 'Maguire', 'Maguire', 'CMaguire', '', 'CB', 86),
(8, 'van Dijk', 'Dijk', 'CDijk', '', 'CB', 91),
(9, 'Muller', 'Muller', 'CMuller', '', 'CAM', 84),
(10, 'Odegaard', 'Odegaard', 'COdegaard', '', 'CAM', 90);

-- --------------------------------------------------------

--
-- Table structure for table `kesehatan_fisik`
--

CREATE TABLE `kesehatan_fisik` (
  `id` int(11) NOT NULL,
  `id_atlit` int(11) NOT NULL,
  `STR` int(11) NOT NULL,
  `ME` int(11) NOT NULL,
  `AGI` int(11) NOT NULL,
  `FLEX` int(11) NOT NULL,
  `PE` int(11) NOT NULL,
  `NT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kesehatan_fisik`
--

INSERT INTO `kesehatan_fisik` (`id`, `id_atlit`, `STR`, `ME`, `AGI`, `FLEX`, `PE`, `NT`) VALUES
(1, 1, 90, 87, 88, 92, 85, 89),
(2, 2, 92, 90, 89, 94, 87, 90),
(3, 3, 88, 86, 89, 90, 92, 86),
(4, 7, 88, 86, 87, 85, 84, 83),
(5, 9, 90, 88, 87, 89, 85, 87),
(6, 4, 89, 87, 90, 88, 87, 89),
(7, 5, 88, 90, 89, 86, 85, 89),
(8, 10, 90, 89, 87, 88, 86, 88),
(9, 6, 90, 89, 87, 88, 89, 85),
(10, 8, 90, 92, 89, 90, 87, 88);

-- --------------------------------------------------------

--
-- Table structure for table `kesehatan_mental`
--

CREATE TABLE `kesehatan_mental` (
  `id` int(11) NOT NULL,
  `id_atlit` int(11) NOT NULL,
  `CH` int(11) NOT NULL,
  `MV` int(11) NOT NULL,
  `CC` int(11) NOT NULL,
  `EM` int(11) NOT NULL,
  `WT` int(11) NOT NULL,
  `PA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kesehatan_mental`
--

INSERT INTO `kesehatan_mental` (`id`, `id_atlit`, `CH`, `MV`, `CC`, `EM`, `WT`, `PA`) VALUES
(1, 1, 90, 88, 86, 92, 87, 89),
(2, 2, 92, 88, 87, 90, 86, 88),
(3, 3, 88, 86, 87, 85, 89, 90),
(4, 7, 87, 88, 89, 85, 86, 88),
(5, 9, 89, 87, 85, 84, 86, 88),
(6, 4, 90, 87, 89, 87, 88, 89),
(7, 5, 90, 89, 87, 89, 90, 92),
(8, 10, 90, 89, 87, 88, 89, 90),
(9, 6, 88, 87, 85, 90, 87, 88),
(10, 8, 90, 87, 89, 90, 86, 87);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nilai_kemampuan`
--

INSERT INTO `nilai_kemampuan` (`id_kemampuan`, `id_atlit`, `nilai_sho`, `nilai_pac`, `nilai_pas`, `nilai_dri`, `nilai_phy`, `nilai_def`) VALUES
(1, 1, 93, 87, 80, 89, 78, 39),
(2, 2, 91, 89, 65, 80, 97, 49),
(3, 3, 88, 82, 91, 95, 68, 35),
(4, 4, 80, 84, 75, 87, 84, 54),
(5, 5, 87, 89, 89, 96, 66, 41),
(6, 6, 40, 65, 68, 70, 88, 90),
(7, 7, 64, 82, 74, 80, 88, 86),
(8, 8, 63, 80, 75, 75, 88, 91),
(9, 9, 82, 59, 93, 79, 69, 55),
(10, 10, 86, 80, 92, 91, 70, 67);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Indexes for table `kesehatan_fisik`
--
ALTER TABLE `kesehatan_fisik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kesehatan_fisik` (`id_atlit`);

--
-- Indexes for table `kesehatan_mental`
--
ALTER TABLE `kesehatan_mental`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kesehatan_mental` (`id_atlit`);

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
-- AUTO_INCREMENT for table `kesehatan_fisik`
--
ALTER TABLE `kesehatan_fisik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kesehatan_mental`
--
ALTER TABLE `kesehatan_mental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `nilai_kemampuan`
--
ALTER TABLE `nilai_kemampuan`
  MODIFY `id_kemampuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- Constraints for table `kesehatan_fisik`
--
ALTER TABLE `kesehatan_fisik`
  ADD CONSTRAINT `id_kesehatan_fisik` FOREIGN KEY (`id_atlit`) REFERENCES `atlit` (`id_atlit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kesehatan_mental`
--
ALTER TABLE `kesehatan_mental`
  ADD CONSTRAINT `id_kesehatan_mental` FOREIGN KEY (`id_atlit`) REFERENCES `atlit` (`id_atlit`) ON DELETE CASCADE ON UPDATE CASCADE;

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
