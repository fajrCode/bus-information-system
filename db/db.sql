-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 05:11 PM
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
-- Database: `db_workshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_pendaftaran` int(11) DEFAULT NULL,
  `absen` varchar(15) DEFAULT NULL,
  `sertifikat` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemateri`
--

CREATE TABLE `pemateri` (
  `id_pemateri` int(11) NOT NULL,
  `nama_pemateri` varchar(30) DEFAULT NULL,
  `jk_pemateri` char(10) DEFAULT NULL,
  `job` varchar(25) DEFAULT NULL,
  `wa_pemateri` varchar(15) DEFAULT NULL,
  `gambar` varchar(75) DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemateri`
--

INSERT INTO `pemateri` (`id_pemateri`, `nama_pemateri`, `jk_pemateri`, `job`, `wa_pemateri`, `gambar`, `deskripsi`) VALUES
(2, 'Eko', 'Laki-laki', NULL, '080808080808', '63a07299f13c3-avaYuki.jpg', 'Seorang Expert Programmer'),
(4, 'Eneng', 'Perempuan', NULL, '080808080808', '63a08763cbd8a-fish.jpg', 'Seorang Expert Programmer');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_users` int(11) DEFAULT NULL,
  `id_workshop` int(11) DEFAULT NULL,
  `tgl_daftar` datetime DEFAULT NULL,
  `metode_bayar` varchar(25) DEFAULT NULL,
  `tgl_bayar` datetime DEFAULT NULL,
  `bukti_bayar` varchar(75) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `id_users`, `id_workshop`, `tgl_daftar`, `metode_bayar`, `tgl_bayar`, `bukti_bayar`, `status`) VALUES
(1, 4, 4, '2022-12-19 20:38:42', '', '0000-00-00 00:00:00', NULL, ''),
(2, 4, 4, '2022-12-19 20:39:28', '', '0000-00-00 00:00:00', NULL, ''),
(3, 4, 5, '2022-12-19 20:39:34', '', '0000-00-00 00:00:00', NULL, ''),
(5, 2, 3, '2022-12-20 16:04:33', '', '0000-00-00 00:00:00', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `jk_users` char(10) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_wa` varchar(15) DEFAULT NULL,
  `pekerjaan` varchar(30) DEFAULT NULL,
  `instansi` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `gambar` varchar(75) DEFAULT NULL,
  `type` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `email`, `password`, `nama`, `jk_users`, `tgl_lahir`, `no_wa`, `pekerjaan`, `instansi`, `alamat`, `kota`, `gambar`, `type`) VALUES
(2, 'admin@gmail.com', '$2y$10$JP3nnOcl1Irrxv6GLF7jCuU/WUTbGfReDLtR7ThSS7qUnslb5GILu', 'Eka Melisa', 'Perempuan', '2004-03-24', '08123456789', 'Web Design', 'Universitas Nurdin Hamzah', 'Kota Baru', 'Jambi', '1827277-middle.png', 'admin'),
(4, 'peserta@gmail.com', '$2y$10$Yx6chztXPiPcRtSKEEZ11OMEQ38SklG5LzvgmxYKr9ezl27uL.q82', 'peserta', 'Laki-laki', '0000-00-00', '', '', '', '', '', 'bpjstk.png', 'peserta'),
(10, 'testregister@gmail.com', '$2y$10$q5bZmoQ9oLPEBU/qqbtWLeRHIDCi4TRWbF5A9cPb8TyDQOOMytYrS', 'Tebak', 'Laki-Laki', '2022-12-21', '08123456789', 'Web Design', 'Universitas Nurdin Hamzah', 'Kota Baru', 'Jambi', '869-logo.jpg', 'peserta'),
(11, 'prince@gmail.com', '$2y$10$5KbJRYxw.9eziqtAmgssMuYITbNwdO3vK8B..I69ZrS7vQyHU63NK', '', '', '0000-00-00', '', '', '', '', '', '', 'peserta');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `id_workshop` int(11) NOT NULL,
  `judul` varchar(30) DEFAULT NULL,
  `id_pemateri` int(11) DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `kuota` int(11) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `lama_workshop` char(10) DEFAULT NULL,
  `lokasi` varchar(30) DEFAULT NULL,
  `gambar` varchar(75) DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id_workshop`, `judul`, `id_pemateri`, `deskripsi`, `kuota`, `tgl_mulai`, `tgl_selesai`, `lama_workshop`, `lokasi`, `gambar`, `biaya`, `status`) VALUES
(2, 'testjudul', 2, 'testdesk', 50, '2022-12-12', '2022-12-12', '1', 'testlokasi', '63a0a2a588b0f-pengambilan-keputusan.png', 5000, 'teststatus'),
(3, 'testjudul', 2, 'testdesk', 50, '2022-12-12', '2022-12-12', '1', 'testlokasi', '63a0a42d2ef41-pengambilan-keputusan.jpg', 5000, 'teststatus'),
(4, 'jalani hidup', 4, 'menjalani hidup', 500, '2022-12-23', '2022-12-24', '2 Hari', 'online', '63a0a547e1f6b-fish.jpg', 5000, 'teststatus'),
(5, 'Arah Langkah', 4, 'Seorang Expert Programmer', 5, '2022-12-22', '2022-12-23', '2', 'online via zoom', '', 5, 'coming soon'),
(6, 'Sang Pemimpi', 4, 'bedah buku sang pemimpi', 3, '2022-12-27', '2022-12-28', '1', 'online', '63a088292aaac-YLNFSH.jpg', 5000, 'coming soon'),
(7, 'Arah Langkah', 4, 'bedah buku sang pemimpi', 7, '2022-12-26', '2022-12-26', '1 Hari', 'online', '625-ava.png', 5000, 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD KEY `id_pendaftaran` (`id_pendaftaran`);

--
-- Indexes for table `pemateri`
--
ALTER TABLE `pemateri`
  ADD PRIMARY KEY (`id_pemateri`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_workshop` (`id_workshop`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id_workshop`),
  ADD KEY `id_pemateri` (`id_pemateri`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemateri`
--
ALTER TABLE `pemateri`
  MODIFY `id_pemateri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id_workshop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `workshop`
--
ALTER TABLE `workshop`
  ADD CONSTRAINT `workshop_ibfk_1` FOREIGN KEY (`id_pemateri`) REFERENCES `pemateri` (`id_pemateri`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
