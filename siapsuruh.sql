-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2025 at 04:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siapsuruh`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `pesan`, `waktu`) VALUES
(2, 'alan', 'alan@gmail.com', 'test', '2025-11-11 04:57:48'),
(3, 'alan', 'alan@gmail.com', 'hallo', '2025-11-11 04:59:12'),
(4, 'Garda', 'garda@gmail.com', 'tolong belikan roti bakar', '2025-11-12 01:07:30'),
(5, 'alan', 'muhrestumadhininggar@gmail.com', 'asdsdsd', '2025-11-12 03:05:26');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(1, 'Bersih-bersih Rumah', 'Kami siap membantu menjaga kebersihan rumah Anda.', 'pexels-alialcantara-16817331.jpg'),
(2, 'Antar Barang', 'Perlu bantuan kirim barang? Kami siap jalan!', 'pexels-hleb-u-150087874-10517092.jpg'),
(3, 'Perbaikan Alat', 'Kami bantu memperbaiki alat-alat elektronik Anda.', 'pexels-caio-64609.jpg'),
(4, 'Buang Sampah/Barang Bekas', 'Kami bantu Mengangkut dan membuang sampah volume besar.', 'pexels-thirdman-7656990.jpg'),
(5, 'Pengepakan Aman (Packing)', 'Kami bantu Mengemas barang jualan online agar siap kirim.', 'pexels-cottonbro-4569312.jpg'),
(6, 'Perawatan Tanaman', 'Kami bantu Menyiram, memotong daun kering, atau mengganti pot tanaman.', 'pexels-samgraphic222-34641330.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `id` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`id`, `tahun`, `jumlah`) VALUES
(1, 2019, 120),
(2, 2020, 250),
(3, 2021, 350),
(4, 2022, 375),
(5, 2023, 415),
(6, 2024, 440),
(7, 2025, 535);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
