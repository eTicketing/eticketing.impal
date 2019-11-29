-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 03:48 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` varchar(64) NOT NULL,
  `id_acara` varchar(64) NOT NULL,
  `id_customer` varchar(64) NOT NULL,
  `qr_code` varchar(255) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `total_harga` int(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `bukti_bayar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `id_acara`, `id_customer`, `qr_code`, `jumlah`, `total_harga`, `status`, `bukti_bayar`) VALUES
('5de07199ba844', '5de02b7e9830b', '', 'default.jpg', 2, 100000, 'Belum Terverifikasi', 'default.jpg'),
('5de072bc7f712', '5de02b7e9830b', '5de054a707591', 'default.jpg', 250, 12500000, 'Belum Terverifikasi', 'default.jpg'),
('5de07578c3a06', '5de02b7e9830b', '5de054a707591', 'default.jpg', 250, 12500000, 'Belum Terverifikasi', 'default.jpg'),
('5de0757fb790a', '5de02b7e9830b', '5de054a707591', 'default.jpg', 2, 100000, 'Belum Terverifikasi', 'default.jpg'),
('5de07587d69d6', '5de02b7e9830b', '5de054a707591', 'default.jpg', 2, 100000, 'Belum Terverifikasi', 'default.jpg'),
('5de07590b89cd', '5de02b7e9830b', '5de054a707591', 'default.jpg', 3, 150000, 'Belum Terverifikasi', 'default.jpg'),
('5de075a400706', '5de02b7e9830b', '5de054a707591', 'default.jpg', 3, 150000, 'Belum Terverifikasi', 'default.jpg'),
('5de075b48640d', '5de02c05bca4a', '5de054a707591', 'default.jpg', 2, 100000, 'Belum Terverifikasi', 'default.jpg'),
('5de075dcac6fb', '5de02c05bca4a', '5de054a707591', 'default.jpg', 2, 100000, 'Belum Terverifikasi', 'default.jpg'),
('5de076afc0c55', '5de02c05bca4a', '5de054a707591', 'default.jpg', 2, 100000, 'Belum Terverifikasi', 'default.jpg'),
('5de076debbf29', '5de02c05bca4a', '5de054a707591', 'default.jpg', 2, 100000, 'Belum Terverifikasi', 'default.jpg'),
('5de076f11b9d9', '5de02c05bca4a', '5de054a707591', 'default.jpg', 2, 100000, 'Belum Terverifikasi', 'default.jpg'),
('5de0771202a83', '5de02c05bca4a', '5de054a707591', 'default.jpg', 2, 100000, 'Belum Terverifikasi', 'default.jpg'),
('5de0771f9f26b', '5de02c05bca4a', '5de054a707591', 'default.jpg', 2, 100000, 'Belum Terverifikasi', 'default.jpg'),
('5de0774499bb4', '5de02c05bca4a', '5de054a707591', 'default.jpg', 2, 100000, 'Belum Terverifikasi', 'default.jpg'),
('5de07776dd6f8', '5de02c05bca4a', '5de054a707591', 'default.jpg', 2, 100000, 'Belum Terverifikasi', 'default.jpg'),
('5de077f485909', '5de02c05bca4a', '5de02c05bca4a', 'default.jpg', 2, 100000, 'Belum Terverifikasi', 'default.jpg'),
('5de07872c0e52', '5de02c05bca4a', '5de054a707591', 'default.jpg', 2, 100000, 'Belum Terverifikasi', 'default.jpg'),
('5de07887cf703', '5de02c05bca4a', '5de054a707591', 'default.jpg', 34, 1700000, 'Belum Terverifikasi', 'default.jpg'),
('5de078b1a72dd', '5de02cf3c785d', '5de054a707591', 'default.jpg', 23, 1150000, 'Belum Terverifikasi', 'default.jpg'),
('5de0793a73a77', '5de02c05bca4a', '5de054a707591', 'default.jpg', 250, 12500000, 'Belum Terverifikasi', 'default.jpg'),
('5de07966456ae', '5de02c05bca4a', '5de054a707591', 'default.jpg', 45, 2250000, 'Belum Terverifikasi', 'default.jpg'),
('5de0797d7edd7', '5de02b7e9830b', '5de054a707591', 'default.jpg', 123, 6150000, 'Belum Terverifikasi', 'default.jpg'),
('5de07a218b29f', '5de02b7e9830b', '5de054a707591', 'default.jpg', 234, 11700000, 'Belum Terverifikasi', 'default.jpg'),
('5de07ad7d21db', '5de02b7e9830b', '5de054a707591', 'default.jpg', 456, 22800000, 'Belum Terverifikasi', 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
