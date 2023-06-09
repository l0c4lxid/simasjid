-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 192.168.0.100
-- Waktu pembuatan: 09 Jun 2023 pada 15.05
-- Versi server: 8.0.30-22
-- Versi PHP: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `syaidand_masjid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `id_agenda` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_kegiatan` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`id_agenda`, `nama_kegiatan`, `tanggal`, `jam`) VALUES
('AGD-230529-102056', 'Baksos', '2023-05-31', '08:00:00'),
('AGD-230529-113301', 'Pengajian Rutin', '2023-06-11', '07:00:00'),
('AGD-230529-113411', 'Kerja Bakti', '2023-06-17', '07:30:00'),
('AGD-230529-113611', 'TPA', '2023-05-30', '16:00:00'),
('AGD-230529-113725', 'Pengajian Rutin', '2023-05-31', '13:00:00'),
('AGD-230529-113800', 'TPA', '2023-06-13', '16:00:00'),
('AGD-230529-113801', 'TPA', '2023-06-13', '16:00:00'),
('AGD-230529-113900', 'Kerja Bakti', '2023-05-30', '07:30:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_infaq`
--

CREATE TABLE `tbl_infaq` (
  `id_infaq` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_rek` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_bank` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `no_rekening` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `an` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `bukti` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(7) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_infaq`
--

INSERT INTO `tbl_infaq` (`id_infaq`, `id_rek`, `nama_bank`, `no_rekening`, `an`, `jumlah`, `bukti`, `status`, `tanggal`) VALUES
('INF-230529-121546', 'RKN-230529-120109', 'BTN', '43672989162547', 'avi', 20000000, '1685337346_b5eb4294e82bf6c0efcf.jpg', 'Masuk', '2023-05-29 12:15:46'),
('INF-230529-121719', 'RKN-230529-120154', 'BCA', '665331889768', 'cici', 8000000, '1685337439_924f86b1c53f0647e692.jpg', 'Masuk', '2023-05-29 12:17:19'),
('INF-230529-121851', 'RKN-230529-120109', 'BSI', '8888977632575', 'oca', 10000000, '1685337531_8ce15b003fe9b4996c2f.jpg', 'Keluar', '2023-05-29 12:18:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kas_masjid`
--

CREATE TABLE `tbl_kas_masjid` (
  `id_kas_masjid` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` date DEFAULT NULL,
  `ket` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kas_masuk` int DEFAULT NULL,
  `kas_keluar` int DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_kas_masjid`
--

INSERT INTO `tbl_kas_masjid` (`id_kas_masjid`, `tanggal`, `ket`, `kas_masuk`, `kas_keluar`, `status`) VALUES
('KASK-230529-1153', '2023-05-30', 'keperluan masjid', 0, 300000, 'keluar'),
('KASK-230529-1154', '2023-05-31', 'listrik', 0, 100000, 'keluar'),
('KASK-230529-1155', '2023-05-31', 'pembayaran air', 0, 100000, 'keluar'),
('KASK-230529-1156', '2023-05-30', 'keperluan kerja bakti', 0, 150000, 'keluar'),
('KASM-230529-115005', '2023-05-30', 'Kas masuk', 200000, 0, 'masuk'),
('KASM-230529-115152', '2023-05-31', 'kas masuk', 3000000, 0, 'masuk'),
('KASM-230529-115232', '2023-05-29', 'kas masuk', 2000000, 0, 'masuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengaturan`
--

CREATE TABLE `tbl_pengaturan` (
  `id` int NOT NULL,
  `nama_masjid` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `id_kota` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_kota` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `wa_masjid` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pengaturan`
--

INSERT INTO `tbl_pengaturan` (`id`, `nama_masjid`, `id_kota`, `nama_kota`, `alamat`, `wa_masjid`, `email`) VALUES
(1, 'Karomah', '1501', 'KAB. BANTUL', 'JL. Karet Pleret, Pleret', '6289607761569', 'admin@syaidandhika.my.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `id_pesan` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_pesan` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `wa_pesan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `judul_pesan` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `isi_pesan` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal_kirim` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`id_pesan`, `nama_pesan`, `wa_pesan`, `judul_pesan`, `isi_pesan`, `tanggal_kirim`) VALUES
('PSN-230529-123036', 'Ruham', '+629876655466', 'Donasi sudah masuk', 'Terimakasih ya !', '2023-05-29 12:30:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rekening`
--

CREATE TABLE `tbl_rekening` (
  `id_rek` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_rek` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `no_rek` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `atas_nama` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_rekening`
--

INSERT INTO `tbl_rekening` (`id_rek`, `nama_rek`, `no_rek`, `atas_nama`) VALUES
('RKN-230529-120013', 'BTN', '12324455660', 'Intan'),
('RKN-230529-120109', 'BRI', '245637897097', 'Marsya'),
('RKN-230529-120154', 'BRI', '5667756574489', 'Syaid'),
('RKN-230529-120235', 'BCA', '87665656598988', 'Ruham');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`email`, `password`) VALUES
('admin@admin.com', '@Ndmin123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indeks untuk tabel `tbl_infaq`
--
ALTER TABLE `tbl_infaq`
  ADD PRIMARY KEY (`id_infaq`);

--
-- Indeks untuk tabel `tbl_kas_masjid`
--
ALTER TABLE `tbl_kas_masjid`
  ADD PRIMARY KEY (`id_kas_masjid`);

--
-- Indeks untuk tabel `tbl_pengaturan`
--
ALTER TABLE `tbl_pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `tbl_rekening`
--
ALTER TABLE `tbl_rekening`
  ADD PRIMARY KEY (`id_rek`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_pengaturan`
--
ALTER TABLE `tbl_pengaturan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
