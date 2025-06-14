-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2024 at 05:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_webpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(255) NOT NULL,
  `no_kelas` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `mk_6_7` varchar(255) NOT NULL,
  `cd_6_7` varchar(255) NOT NULL,
  `mk_7_8` varchar(255) NOT NULL,
  `cd_7_8` varchar(255) NOT NULL,
  `mk_8_9` varchar(255) NOT NULL,
  `cd_8_9` varchar(255) NOT NULL,
  `mk_9_10` varchar(255) NOT NULL,
  `cd_9_10` varchar(255) NOT NULL,
  `mk_10_11` varchar(255) NOT NULL,
  `cd_10_11` varchar(255) NOT NULL,
  `mk_11_12` varchar(255) NOT NULL,
  `cd_11_12` varchar(255) NOT NULL,
  `mk_12_13` varchar(255) NOT NULL,
  `cd_12_13` varchar(255) NOT NULL,
  `mk_13_14` varchar(255) NOT NULL,
  `cd_13_14` varchar(255) NOT NULL,
  `mk_14_15` varchar(255) NOT NULL,
  `cd_14_15` varchar(255) NOT NULL,
  `mk_16_17` varchar(255) NOT NULL,
  `cd_16_17` varchar(255) NOT NULL,
  `mk_17_18` varchar(255) NOT NULL,
  `cd_17_18` varchar(255) NOT NULL,
  `mk_18_19` varchar(255) NOT NULL,
  `cd_18_19` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `no_kelas`, `tanggal`, `mk_6_7`, `cd_6_7`, `mk_7_8`, `cd_7_8`, `mk_8_9`, `cd_8_9`, `mk_9_10`, `cd_9_10`, `mk_10_11`, `cd_10_11`, `mk_11_12`, `cd_11_12`, `mk_12_13`, `cd_12_13`, `mk_13_14`, `cd_13_14`, `mk_14_15`, `cd_14_15`, `mk_16_17`, `cd_16_17`, `mk_17_18`, `cd_17_18`, `mk_18_19`, `cd_18_19`) VALUES
(5, '7', '2023-12-13', 'Ekonomi', '1', 'Ekonomi', '1', 'Ekonomi', '1', 'Ekonomi', '1', 'Ekonomi', '1', 'Ekonomi', '1', 'Ekonomi', '1', 'Ekonomi', '1', 'Ekonomi', '1', 'Ekonomi', '1', 'Ekonomi', '1', 'Ekonomi', '1'),
(8, '9', '2023-12-12', 'WebPro', '1', 'WebPro', '1', 'WebPro', '1', 'WebPro', '1', 'WebPro', '1', 'WebPro', '1', 'WebPro', '1', 'WebPro', '1', 'WebPro', '1', 'WebPro', '1', 'WebPro', '1', 'WebPro', '1'),
(9, '11', '2023-12-13', 'WebPro', 'AA', 'WebPro', 'AA', 'WebPro', 'AA', 'WebPro', 'AA', 'WebPro', 'AA', 'WebPro', 'AA', 'WebPro', 'AA', 'WebPro', 'AA', 'WebPro', 'AA', 'WebPro', 'AA', '', '', '', ''),
(10, '7', '2024-01-02', 'Ekonomi', 'AA', 'Ekonomi', 'AA', 'Ekonomi', 'AA', 'Ekonomi', 'AA', 'Ekonomi', 'AA', 'Ekonomi', 'AA', 'Ekonomi', 'AA', 'Ekonomi', 'AA', 'Ekonomi', 'AA', 'Ekonomi', 'AA', '', '', 'Ekonomi', 'AA'),
(11, '7', '2024-01-03', 'WebPro', 'AA', 'WebPro', 'AA', 'WebPro', 'AA', 'WebPro', 'AA', 'WebPro', 'AA', 'WebPro', 'AA', 'WebPro', 'AA', 'WebPro', 'AA', 'WebPro', 'AA', '', '', 'WebPro', 'AA', 'WebPro', 'AA'),
(12, '12', '2023-12-27', 'WebPro', 'AA', 'WebPro', 'AA', 'WebPro', 'AA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '12', '2024-05-16', 'WebPro', 'AA', 'Ekonomi', 'AA', 'WebPro', 'AA', 'test', '1302202053', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam_ruang`
--

CREATE TABLE `pinjam_ruang` (
  `id` int(255) NOT NULL,
  `id_kelas` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `mk_6_7` varchar(255) NOT NULL,
  `mk_7_8` varchar(255) NOT NULL,
  `mk_8_9` varchar(255) NOT NULL,
  `mk_9_10` varchar(255) NOT NULL,
  `mk_10_11` varchar(255) NOT NULL,
  `mk_11_12` varchar(255) NOT NULL,
  `mk_12_13` varchar(255) NOT NULL,
  `mk_13_14` varchar(255) NOT NULL,
  `mk_14_15` varchar(255) NOT NULL,
  `mk_16_17` varchar(255) NOT NULL,
  `mk_17_18` varchar(255) NOT NULL,
  `mk_18_19` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pinjam_ruang`
--

INSERT INTO `pinjam_ruang` (`id`, `id_kelas`, `user_id`, `nim`, `email`, `tanggal`, `mk_6_7`, `mk_7_8`, `mk_8_9`, `mk_9_10`, `mk_10_11`, `mk_11_12`, `mk_12_13`, `mk_13_14`, `mk_14_15`, `mk_16_17`, `mk_17_18`, `mk_18_19`, `status`) VALUES
(16, 7, 14, '1302204009', 'fachrul.fatanillah@gmail.com', '2023-12-28', '', '', '', '', '', '', '', '', '', 'test', '', '', 'Belum terverifikasi'),
(17, 12, 15, '1302202053', 'silvy@gmail.com', '2023-12-28', '', '', '', 'test', '', '', '', '', '', '', '', '', 'Terverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id` int(255) NOT NULL,
  `no_kelas` varchar(255) NOT NULL,
  `lokasi_kelas` varchar(255) NOT NULL,
  `lantai` varchar(255) NOT NULL,
  `foto_kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id`, `no_kelas`, `lokasi_kelas`, `lantai`, `foto_kelas`) VALUES
(7, 'KU 1 03', 'Lantai 1', 'lantai1', '1702324135_ed4473cce674067dfce6.jpg'),
(8, 'KU 2 03', 'Lantai 2', 'lantai2', '1702324835_5a915bfc481f292258d4.jpg'),
(9, 'KU 3 03', 'Lantai 3', 'lantai3', '1702324877_96b346fcdd03e2ff2fcc.jpg'),
(10, 'KU 4 03', 'Lantai 3', 'lantai4', '1702324877_96b346fcdd03e2ff2fcc.jpg'),
(12, 'KU 05 01', 'Lantai 5', 'lantai5', '1703643811_4e4e7ba7cd909f4ded1b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_depan`, `nama_belakang`, `nim`, `email`, `password`, `status`, `foto`) VALUES
(10, 'admin', 'a', '111', 'admin@gmail.com', 'b3728d1fb4fc42896fb580abd6ff3eed093d26cb969ef57d4192e1b837f356cd', 'admin', '1701602594_41ae7b3b5eaac0e73f14.png'),
(13, 'sylvana', 'rheina', '1234', 'sadb@gmail.com', 'b3728d1fb4fc42896fb580abd6ff3eed093d26cb969ef57d4192e1b837f356cd', 'user', '110x110.jpg'),
(14, 'fachrul', 'fatanillah', '1302204009', 'fachrul.fatanillah@gmail.com', 'b3728d1fb4fc42896fb580abd6ff3eed093d26cb969ef57d4192e1b837f356cd', 'user', '110x110.jpg'),
(15, 'silvy', 'dwi', '1302202053', 'silvy@gmail.com', 'b3728d1fb4fc42896fb580abd6ff3eed093d26cb969ef57d4192e1b837f356cd', 'user', '110x110.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinjam_ruang`
--
ALTER TABLE `pinjam_ruang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pinjam_ruang`
--
ALTER TABLE `pinjam_ruang`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
