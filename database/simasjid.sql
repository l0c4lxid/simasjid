-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 21, 2023 at 01:11 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simasjid2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `id_agenda` int NOT NULL,
  `nama_kegiatan` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`id_agenda`, `nama_kegiatan`, `tanggal`, `jam`) VALUES
(11, 'Pengajian Akbar', '2023-03-28', '20:00:00'),
(12, 'sdfsdf', '2023-04-19', '19:54:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donasi`
--

CREATE TABLE `tbl_donasi` (
  `id_donasi` int NOT NULL,
  `id_rek` int DEFAULT NULL,
  `nama_bank` varchar(15) DEFAULT NULL,
  `no_rekening` varchar(20) DEFAULT NULL,
  `an` varchar(30) DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `bukti` varchar(100) DEFAULT NULL,
  `status` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_donasi`
--

INSERT INTO `tbl_donasi` (`id_donasi`, `id_rek`, `nama_bank`, `no_rekening`, `an`, `jumlah`, `bukti`, `status`) VALUES
(23, 5, 'BRI', '12312123', 'asdasd', 123213, '1679883713_4e09d9981c9a07318765.jpg', 'Masuk'),
(24, 5, 'BRI', '123123', 'sdaads', 1212312, '1680588746_8ceaefea5a21405f7a68.png', 'Pending'),
(25, 5, 'BRI', '12312', 'da', 123, '1680588820_0e6e61732d59fc0c8757.png', 'Pending'),
(26, 5, 'BRI', '12312', 'adsd', 123, '1680588906_d54ba05ab9e304c7f2b6.png', 'Pending'),
(27, 5, 'BRI', '123', 'asd', 123, '1680588951_d842c0b4a28cf9bf8dff.png', 'Pending'),
(28, 5, 'BRI', '2312', 'weqw', 2312, '1680588999_fa6dfc542fd2c7aa2668.png', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kas_masjid`
--

CREATE TABLE `tbl_kas_masjid` (
  `id_kas_masjid` int NOT NULL,
  `tanggal` date DEFAULT NULL,
  `ket` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `kas_masuk` int DEFAULT NULL,
  `kas_keluar` int DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_kas_masjid`
--

INSERT INTO `tbl_kas_masjid` (`id_kas_masjid`, `tanggal`, `ket`, `kas_masuk`, `kas_keluar`, `status`) VALUES
(1, '2023-03-15', 'saldo awal', 10000000, 0, 'masuk'),
(3, '2023-03-15', 'pembayaran b', 0, 20000, 'keluar'),
(23, '2023-03-15', 'test keluar', 0, 9999, 'keluar'),
(24, '2023-03-23', 'test masuk', 8888, 0, 'masuk'),
(26, '2023-03-17', 'Donasi', 1000, 0, 'masuk'),
(27, '2023-03-24', 'Donasi 2', 123123, 0, 'masuk'),
(28, '2023-03-16', 'beli makan', 0, 123412, 'keluar'),
(30, '2023-04-21', 'asdas', 10000, 0, 'masuk'),
(31, '2023-04-21', 'asdasd', 0, 10000, 'keluar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengaturan`
--

CREATE TABLE `tbl_pengaturan` (
  `id` int NOT NULL,
  `nama_masjid` varchar(20) NOT NULL,
  `id_kota` varchar(5) NOT NULL,
  `nama_kota` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `wa_masjid` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_pengaturan`
--

INSERT INTO `tbl_pengaturan` (`id`, `nama_masjid`, `id_kota`, `nama_kota`, `alamat`, `wa_masjid`, `email`) VALUES
(1, 'Karomah', '1501', 'KAB. BANTUL', 'JL. Karet Pleret, Pleret', '6289607761569', 'admin@syaidandhika.my.id');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `id_pesan` int NOT NULL,
  `nama_pesan` varchar(30) DEFAULT NULL,
  `wa_pesan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `judul_pesan` varchar(128) DEFAULT NULL,
  `isi_pesan` varchar(255) DEFAULT NULL,
  `tanggal_kirim` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`id_pesan`, `nama_pesan`, `wa_pesan`, `judul_pesan`, `isi_pesan`, `tanggal_kirim`) VALUES
(10, 'sadas', '123123', 'sdadsa', 'asdadw', '2023-04-19 19:04:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekening`
--

CREATE TABLE `tbl_rekening` (
  `id_rek` int NOT NULL,
  `nama_rek` varchar(15) DEFAULT NULL,
  `no_rek` varchar(20) DEFAULT NULL,
  `atas_nama` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_rekening`
--

INSERT INTO `tbl_rekening` (`id_rek`, `nama_rek`, `no_rek`, `atas_nama`) VALUES
(5, 'BRI', '123412341234', 'Syaid Andhika'),
(7, 'BTN', '123456781234', 'Ruhamaja'),
(8, 'BRI', '123122134145', 'Masha');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`) VALUES
('admin@admin.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `tbl_donasi`
--
ALTER TABLE `tbl_donasi`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indexes for table `tbl_kas_masjid`
--
ALTER TABLE `tbl_kas_masjid`
  ADD PRIMARY KEY (`id_kas_masjid`);

--
-- Indexes for table `tbl_pengaturan`
--
ALTER TABLE `tbl_pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tbl_rekening`
--
ALTER TABLE `tbl_rekening`
  ADD PRIMARY KEY (`id_rek`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `id_agenda` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_donasi`
--
ALTER TABLE `tbl_donasi`
  MODIFY `id_donasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_kas_masjid`
--
ALTER TABLE `tbl_kas_masjid`
  MODIFY `id_kas_masjid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_pengaturan`
--
ALTER TABLE `tbl_pengaturan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `id_pesan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_rekening`
--
ALTER TABLE `tbl_rekening`
  MODIFY `id_rek` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
