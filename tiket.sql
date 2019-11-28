-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 09:46 PM
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
-- Table structure for table `acara`
--

CREATE TABLE `acara` (
  `id_acara` varchar(64) NOT NULL,
  `id_admin` varchar(64) NOT NULL,
  `nama_acara` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acara`
--

INSERT INTO `acara` (`id_acara`, `id_admin`, `nama_acara`, `tempat`, `tanggal`, `gambar`, `deskripsi`, `harga`, `jumlah`) VALUES
('5de02b7e9830b', '5de02b638f85c', 'Muda Mendunia', 'Kab. Bandung', '2019-11-30', '5de02b7e9830b.jpg', 'asdf', 50000, 250),
('5de02c05bca4a', '5de02b638f85c', 'Sampah Adalah Sahabat', 'Kab. Bandung', '2019-11-30', '5de02c05bca4a.jpg', 'asdf', 50000, 250),
('5de02cf3c785d', '5de02ca2b5c14', 'Konser Iwan Mras', 'Kab. Bandung', '2019-12-28', '5de02cf3c785d.jpg', 'asdf', 50000, 250);

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
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nomor_kartu` int(64) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `nomor_kartu`, `jenis_kelamin`, `email`, `no_hp`, `password`, `level`) VALUES
('5de02b638f85c', 'Akbar Taufiqurrahman', 'akbartr', 1301174602, 'Laki-laki', 'aktama8998@gmail.com', 2147483647, '4ee152a4f11ce27a7fa842aaaff0adff', 'admin'),
('5de02ca2b5c14', 'Azha Alvin', 'mmylite', 1301170000, 'Laki-laki', 'azha_alvin99@gmail.com', 2147483647, '0192023a7bbd73250516f069df18b500', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id_acara`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
