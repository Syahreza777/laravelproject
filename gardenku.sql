-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 10:17 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gardenku`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(6) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `gambar` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `deskripsi`, `gambar`) VALUES
(9, 'Buah-Buahan', 'Kebun SMKN 2 Kraksaan mempunyai bermacam-macam buah. Setiap kategori buah-buahan di kebun ini mencakup berbagai jenis buah yang memberikan warna, rasa, dan nutrisi yang beragam.', '1715873118183.png'),
(10, 'Sayur-Sayuran', 'Setiap kategori sayur-sayuran menghadirkan warna-warni hijau, merah, dan kuning, mencerminkan keberagaman nutrisi dan rasa yang dapat dinikmati oleh siswa, guru, dan staf sekolah.', '1715873233704.png'),
(11, 'Obat-Obatan', 'Taman Obat-Obatan di SMKN 2 Kraksaan menjadi pusat kegiatan untuk menanam dan merawat tanaman obat-obatan yang bermanfaat bagi kesehatan dan kesejahteraan.', '1715873358517.png'),
(12, 'Tanaman Hias', 'Kategori tanaman hias ini mencakup berbagai jenis tanaman yang ditata secara estetis untuk menciptakan suasana yang nyaman dan menyenangkan bagi penghuni sekolah dan para pengunjung.', '1715873507555.png');

-- --------------------------------------------------------

--
-- Table structure for table `tanaman`
--

CREATE TABLE `tanaman` (
  `kode_tanaman` int(6) NOT NULL,
  `nama_tanaman` varchar(15) NOT NULL,
  `deskripsi_tanaman` varchar(50) NOT NULL,
  `gambar` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanaman`
--

INSERT INTO `tanaman` (`kode_tanaman`, `nama_tanaman`, `deskripsi_tanaman`, `gambar`) VALUES
(19, 'Pisang', 'Ini adalah buah pisang yang enak', '1715874159420.jpg'),
(20, 'Tomato', 'Ini adalah tomat sehat', '1715874302736.jpg'),
(21, 'Jahe', 'Ini adalah jahe bagus', '1715874325987.jpg'),
(22, 'Kaktus', 'Ini adalah kaktus cantik', '1715874388573.jpg'),
(23, 'Jeruk', 'Ini adalah jeruk segar', '1715874411240.jpg'),
(24, 'Jagung', 'Ini adalah jagung sehat', '1715874454713.jpg'),
(25, 'Kayu Manis', 'Ini adalah kayu manis bagus', '1715874488408.jpg'),
(26, 'Bunga', 'Ini adalah bunga cantik', '1715874505531.jpg'),
(27, 'Dragon Fruit', 'Ini adalah buah naga termanis', '1715956040927.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`kode_tanaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tanaman`
--
ALTER TABLE `tanaman`
  MODIFY `kode_tanaman` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
