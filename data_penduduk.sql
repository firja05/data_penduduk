-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 02:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `kab`
--

CREATE TABLE `kab` (
  `id_kabupaten` int(255) NOT NULL,
  `nama_kabupaten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kab`
--

INSERT INTO `kab` (`id_kabupaten`, `nama_kabupaten`) VALUES
(1, 'KOTA KOTAMOBAGU'),
(2, 'BOLAANG MONGONDOW '),
(3, 'BOLAANG MONGONDOW SELATAN'),
(4, 'BOLAANG MONGONDOW TIMUR'),
(5, 'BOLAANG MONGONDOW UTARA');

-- --------------------------------------------------------

--
-- Table structure for table `kec`
--

CREATE TABLE `kec` (
  `id_kecamatan` int(255) NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kec`
--

INSERT INTO `kec` (`id_kecamatan`, `nama_kecamatan`) VALUES
(1, 'KOTAMOBAGU BARAT'),
(2, 'KOTAMOBAGU SELATAN'),
(3, 'KOTAMOBAGU TIMUR'),
(4, 'KOTAMOBAGU UTARA'),
(5, 'BILALANG'),
(6, 'BOLAANG'),
(7, 'BOLAANG TIMUR'),
(8, 'DUMOGA'),
(9, 'DUMOGA BARAT'),
(10, 'DUMOGA TENGAH'),
(11, 'DUMOGA TENGGARA '),
(12, 'DUMOGA TIMUR'),
(13, 'DUMOGA UTARA'),
(14, 'LOLAK'),
(15, 'LOLAYAN'),
(16, 'PASSI BARAT'),
(17, 'PASSI TIMUR'),
(18, 'POIGAR'),
(19, 'SANGTOMBOLANG'),
(20, 'BOLAANG UKI'),
(21, 'PINOLOSIAN'),
(22, 'PINOLOSIAN TENGANH '),
(23, 'PINOLOSIAN TIMUR'),
(24, 'POSIGADAN'),
(25, 'HELUMO'),
(26, 'TOMINI'),
(27, 'KOTABUNAN'),
(28, 'MODAYAG'),
(29, 'MODAYAG BARAT '),
(30, 'MOOAT'),
(31, 'MOTONGKAD'),
(32, 'NUANGAN'),
(33, 'TUTUYAN'),
(34, 'BINTAUNA'),
(35, 'BOLANGITANG BARAT'),
(36, 'BOLANGITANG TIMUR'),
(37, 'KAIDIPANG'),
(38, 'PINOGALUMAN'),
(39, 'SANGKUB');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id_pekerjaan` int(255) NOT NULL,
  `nama_pekerjaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`) VALUES
(1, 'GURU'),
(2, 'Pelajar/Mahasiswa'),
(3, 'WIRASWASTA'),
(4, 'WIRAUSAHA'),
(5, 'KORUPTOR');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_kabupaten` int(255) NOT NULL,
  `id_kecamatan` int(255) NOT NULL,
  `golongan_darah` varchar(13) NOT NULL,
  `id_pekerjaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`nik`, `nama`, `alamat`, `id_kabupaten`, `id_kecamatan`, `golongan_darah`, `id_pekerjaan`) VALUES
(70740401, 'FIRJA ARISANDI DOLOT', 'MOLINOW', 1, 2, 'O', '1'),
(70740402, 'ARIP', 'MOLINOW', 1, 4, 'B', '1'),
(70740403, 'ROFI', 'MOLINOW', 1, 1, 'O', '2'),
(70740404, 'AJI', 'MOLINOW', 1, 1, 'AB', '2'),
(71740405, 'AKSAL', 'MOLINOW', 1, 1, 'A', '1'),
(71740406, 'REHAN', 'MOLINOW', 1, 1, 'AB', '2'),
(71740407, 'AKSA', 'MOLINOW', 1, 2, 'O', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `usernama` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `usernama`, `password`) VALUES
(1, 'FIRJA DOLOT', 'firja', '566a66203d6485473221aaea77369b01'),
(2, 'SENDI', 'sendi', '8b15d7aecb51a9e61b91a8348757676e'),
(3, 'REHAN', 'rehan', '825625953cfd8a71e773215200a4de40'),
(4, 'ADMIN', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'arip', 'arip', '5d7eb10bb6ad23967c1aef0829b418eb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kab`
--
ALTER TABLE `kab`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indexes for table `kec`
--
ALTER TABLE `kec`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kab`
--
ALTER TABLE `kab`
  MODIFY `id_kabupaten` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kec`
--
ALTER TABLE `kec`
  MODIFY `id_kecamatan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id_pekerjaan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
