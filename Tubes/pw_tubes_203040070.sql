-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 03:33 PM
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
(1, 'a.png', 'Baju Koko keren Dewasa Aliyar Mustard', 'Dibuat dari bahan TOYOBO fodu, desain yang keren.', 'Mustard', 30, 'S,M,L,XL,XXL', 143000),
(2, 'b.png', 'Baju Koko keren Dewasa Aliyar Hitam', 'Dibuat dari bahan TOYOBO fodu, desain yang keren.', 'Hitam', 30, 'S,M,L,XL,XXL', 143000),
(3, 'c.png', 'Baju Koko keren Dewasa Dzaky Hijau', 'Dibuat dari bahan TOYOBO fodu, desain yang keren.', 'Hijau', 30, 'S,M,L,XL,XXL', 129000),
(4, 'd.png', 'Baju Koko keren Dewasa Dzaky Maroon', 'Dibuat dari bahan TOYOBO fodu, desain yang keren.', 'Maroon', 30, 'S,M,L,XL,XXL', 129000),
(5, 'e.jpg', 'Baju Koko keren Dewasa Al-Qarni Merah', 'Dibuat dari bahan TOYOBO fodu, desain yang keren.', 'Merah', 30, 'S,M,L,XL,XXL', 150000),
(6, 'f.jpg', 'Baju Koko keren Dewasa Al-Qarni Putih', 'Dibuat dari bahan TOYOBO fodu, desain yang keren.', 'Putih', 30, 'S,M,L,XL,XXL', 150000),
(7, 'g.jpg', 'Baju Koko keren Dewasa Al-Faruq Merah', 'Dibuat dari bahan TOYOBO fodu, desain yang keren.', 'Merah', 30, 'S,M,L,XL,XXL', 130000),
(8, 'h.jpg', 'Baju Koko keren Dewasa Al-Faruq Biru', 'Dibuat dari bahan TOYOBO fodu, desain yang keren.', 'Biru', 30, 'S,M,L,XL,XXL', 130000),
(9, 'i.jpg', 'Baju Koko keren Anak Umar Merah', 'Dibuat dari bahan TOYOBO fodu, desain yang keren.', 'Merah', 30, 'S,M,L,XL,XXL', 105000),
(10, 'j.jpg', 'Baju Koko keren Anak Umar Pink', 'Dibuat dari bahan TOYOBO fodu, desain yang keren.', 'Pink', 30, 'S,M,L,XL,XXL', 105000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin123', 'admin223344'),
(3, 'andi29', '$2y$10$CJYyjbceGMkXOW/FIsSsX.UJo6NVsOHBODvCJlwvggrcLKuVC.NkO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
