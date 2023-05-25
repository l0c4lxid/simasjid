-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 192.168.0.100
-- Waktu pembuatan: 25 Bulan Mei 2023 pada 05.07
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
('AGD-230524-1526', 'hkhbknkl', '2023-05-24', '15:25:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_donasi`
--

CREATE TABLE `tbl_donasi` (
  `id_donasi` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_rek` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_bank` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `no_rekening` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `an` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `bukti` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(7) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_donasi`
--

INSERT INTO `tbl_donasi` (`id_donasi`, `id_rek`, `nama_bank`, `no_rekening`, `an`, `jumlah`, `bukti`, `status`, `tanggal`) VALUES
('INF-230525-0856', 'RKN-2305250855', 'BRI', '1', 'a', 1, '1684979790_edd585248664a2275c85.png', 'Masuk', '2023-05-25 08:56:30');

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
('KASK-230524-1546', '2023-05-24', 'cxaca', 0, 1, 'keluar'),
('KASM-230524-1546', '2023-05-24', 'sad', 1, 0, 'masuk');

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
('PSN-230524-1544', 'asda', '1213', 'asdasd', 'asdads', '2023-05-24 15:44:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rekening`
--

CREATE TABLE `tbl_rekening` (
  `id_rek` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_rek` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `no_rek` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `atas_nama` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_rekening`
--

INSERT INTO `tbl_rekening` (`id_rek`, `nama_rek`, `no_rek`, `atas_nama`) VALUES
('RKN-2305250855', 'BRI', '1', 'a');

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
('admin@admin.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indeks untuk tabel `tbl_donasi`
--
ALTER TABLE `tbl_donasi`
  ADD PRIMARY KEY (`id_donasi`);

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
