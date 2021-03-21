-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2021 at 04:21 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040070`
--

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `stok` int(5) NOT NULL,
  `ukuran` varchar(15) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`id`, `img`, `nama`, `deskripsi`, `warna`, `stok`, `ukuran`, `harga`) VALUES
(1, '1.png', 'Baju Koko Dewasa Aliyar Mustard', 'Dibuat dari bahan TOYOBO fodu, desain yang keren.', 'Mustard', 30, 'S,M,L,XL,XXL', 143000),
(2, '2.png', 'Baju Koko Aliyar Hitam', 'Dibuat dari bahan TOYOBO fodu yang halus dan nyaman, desain yang keren dan detail', 'Hitam', 30, 'S,M,L,XL,XXL', 143000),
(3, '3.png', 'Baju Koko Dzaky Hijau', 'Dibuat dari bahan OXFORD DENIM yang halus dan nyaman, dengan ketebalan kain yang pas dan warna misty.', 'Hijau', 30, 'S,M,L,XL,XXL', 129000),
(4, '4.png', 'Baju Koko Dzaky Maroon', 'Dibuat dari bahan OXFORD DENIM yang halus dan nyaman, dengan ketebalan kain yang pas dan warna misty.', 'Maroon', 30, 'S,M,L,XL,XXL', 129000),
(5, '5.jpg', 'Baju Koko Al Qarni Merah', 'Baju koko tangan panjang, detail variasi di kerah, kancing dan tangan.', 'Merah', 30, 'S,M,L,XL,XXL', 150000),
(6, '6.jpg', 'Baju Koko Al Qarni Putih', 'Baju koko tangan panjang, detail variasi di kerah, kancing dan tangan.', 'Putih', 30, 'S,M,L,XL,XXL', 150000),
(7, '7.jpg', 'Baju Koko Al Faruq Merah', 'Bahan Oxford Saku samping kanan kiri dan dada Kancing Depan Scoder Lengan Aksen bahan swed mewah.', 'Merah', 30, 'S,M,L,XL,XXL', 130000),
(8, '8.jpg', 'Baju Koko Al Faruq Biru', 'Bahan Oxford Saku samping kanan kiri dan dada Kancing Depan Scoder Lengan Aksen bahan swed mewah.', 'Biru', 30, 'S,M,L,XL,XXL', 130000),
(9, '9.jpg', 'Baju Koko Umar Merah', 'Dibuat dari bahan Olivia yang halus dan nyaman, dengan ketebalan kain yang pas dan warna yg mencolok dengan Kualitas Premium.', 'Merah', 30, 'S,M,L,XL,XXL', 105000),
(10, '10.jpg', 'Baju Koko Fatih Pink', 'Dibuat dari bahan 3 in 1 yang halus dan nyaman, dengan ketebalan kain yang pas dan warna muda dengan Kualitas Premium.', 'Pink', 30, 'S,M,L,XL,XXL', 105000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
