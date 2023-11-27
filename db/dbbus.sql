-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2023 pada 11.45
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bus`
--

CREATE TABLE `bus` (
  `idbus` int(11) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(75) NOT NULL,
  `gambar2` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bus`
--

INSERT INTO `bus` (`idbus`, `kelas`, `harga`, `gambar`, `gambar2`) VALUES
(2, 'Bisnis', 250000, '872-family.jpg', '829-jatra.jpg'),
(4, 'Ekonomi', 100000, '630-family.jpg', '662-interiorfamily.jpeg'),
(5, 'Eksekutif', 300000, '829-npm.jpeg', '326-interiorfamily.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `idtiket` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `kelas_penumpang` varchar(25) NOT NULL,
  `jadwal_berangkat` date NOT NULL,
  `qty` int(11) NOT NULL,
  `qty_lansia` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`idtiket`, `nama`, `nik`, `no_hp`, `kelas_penumpang`, `jadwal_berangkat`, `qty`, `qty_lansia`, `harga`, `total`) VALUES
(2, 'test', '12334', '987', 'Eksekutif', '2023-03-09', 13, 10, 10, 19.5),
(8, 'af', '132', '1321', '', '2023-03-09', 1, 0, 0, 0),
(9, 'Handi Permana', '157100000', '0815315498', 'Ekonomi', '2023-03-09', 2, 0, 100000, 200000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`idbus`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`idtiket`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bus`
--
ALTER TABLE `bus`
  MODIFY `idbus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `idtiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
