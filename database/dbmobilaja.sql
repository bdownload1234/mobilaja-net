-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2021 pada 23.51
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmobilaja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(25) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_iklan`
--

CREATE TABLE `info_iklan` (
  `id` int(11) NOT NULL,
  `info` varchar(100) NOT NULL,
  `kondisi_kendaraan` varchar(25) NOT NULL,
  `deskripsi` varchar(5000) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `tahun_kendaraan` date DEFAULT NULL,
  `kilometer_kendaraan` int(11) DEFAULT NULL,
  `jenis_bahanbakar` varchar(5000) DEFAULT NULL,
  `warna` varchar(5000) DEFAULT NULL,
  `foto_kendaraan` varchar(50000) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `nomor_person` varchar(100) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `info_iklan`
--

INSERT INTO `info_iklan` (`id`, `info`, `kondisi_kendaraan`, `deskripsi`, `harga`, `tahun_kendaraan`, `kilometer_kendaraan`, `jenis_bahanbakar`, `warna`, `foto_kendaraan`, `nama`, `email`, `nomor_person`, `tanggal`) VALUES
(35, 'Ford Focus 2005', 'Bekas', 'No Way', '150000000', '2005-01-01', 200000, 'Bensin', 'Hijau', '164089642361ce17a7bdc21.JPG', 'Bryan', 'bryan@gmail.com', '08977982314/', '2021-12-30'),
(36, 'Ford Fiesta', 'Bekas', 'Ford Fiesta', '150000000', '2001-01-31', 2000000, 'Bensin', 'Putih', '164089668561ce18ad4850f.jpg', 'Bryan', 'bryan@gmail.com', '08977982314/', '2021-12-30'),
(37, 'Kijang Innova', 'Baru', 'Kijang Innova Lengkap BPKB/STNK Kredit Lancar', '20000000000', '2021-12-31', 0, 'Bensin', 'Putih', '164089685061ce195281112.jpg', 'Bryan', 'bryan@gmail.com', '08977982314/', '2021-12-30'),
(39, 'Kijang Tua 1990', 'Bekas', 'Kijang 90an klasik\r\nmesin aman\r\nac adem\r\nBPKB/STNK lengkap\r\n\r\npajak mati dari 2019', '50000000', '1990-01-31', 2000000, 'Bensin', 'Hitam', '164090368561ce3405d2f27.jpg', 'Ridho', 'ridho@gmail.com', '089723789122', '2021-12-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(25) DEFAULT NULL,
  `tgl_lahir` varchar(20) DEFAULT NULL,
  `domisili` varchar(20) DEFAULT NULL,
  `provinsi` text DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`id`, `email`, `password`, `nama_lengkap`, `tgl_lahir`, `domisili`, `provinsi`, `no_hp`, `tanggal`, `status`) VALUES
(25, 'bryan@gmail.com', '$2y$10$mltjTH2r.cmXENAEwElW7uN087cpSaPARlQV5YIZC4OshRLHUqmoC', 'Bryan Saputra', '2021-12-29', 'Bogor', 'Jawa Barat', '08977982314', '2021-12-29', 'admin'),
(26, 'ridho@gmail.com', '$2y$10$KEtJe2hhIr6rcjT2z8g91uyUw7CfTu3ZIWKGwWSBVm8DjeFjlYh6m', 'Ridho Hafidz', '2002-01-01', 'Depok', 'Jawa Barat', '089723789122', '2021-12-30', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `info_iklan`
--
ALTER TABLE `info_iklan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `info_iklan`
--
ALTER TABLE `info_iklan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
