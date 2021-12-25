-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 07:40 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblokernf`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`, `status`) VALUES
(8, 'admin', '$2y$10$mQfpDQNyixdkoa7JdY4e2usX0S39uEkh9VMQXlOTpyV5EPvxW5irm', 'admin'),
(9, 'hoerudin', '$2y$10$Wq9PJlI7jYvpiI0IBM8zQ.Yf79r2Bf2.6v1C9YBtZ6XfdHzARxJkC', 'admin'),
(10, 'test', '$2y$10$gZDAQaar7mUjB5rJpQvzzeTiY2278V7FYVwTA/c8F0QAUwuzsNa9G', 'test'),
(11, 'bangjago', '$2y$10$lVJJR7eVz5Bihs1CvQIeOOz.KcRiAqV2Bkejy0vziD1lvC6NvWt6O', 'admin'),
(12, 'adminadmin', '$2y$10$jtrJODwUcUpAarFLGQWJVu.kmdH4OxnU3JUzuflh3/BBNwp4w7Z12', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `curiculum_vitae`
--

CREATE TABLE `curiculum_vitae` (
  `id` int(11) NOT NULL,
  `id_loker` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(25) NOT NULL,
  `cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `curiculum_vitae`
--

INSERT INTO `curiculum_vitae` (`id`, `id_loker`, `username`, `name`, `cv`) VALUES
(17, 21, 'Test', '', 'default.png'),
(18, 22, 'Test', 'Hoeru', '162649777060f262eadae55.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `info_loker`
--

CREATE TABLE `info_loker` (
  `id` int(11) NOT NULL,
  `info` varchar(100) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `perusahaan` varchar(25) NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_loker`
--

INSERT INTO `info_loker` (`id`, `info`, `jabatan`, `perusahaan`, `tanggal_akhir`, `tanggal`) VALUES
(17, 'IT Support Associate', '', 'Tokopedia', '2021-07-17', '2021-07-17'),
(18, 'Programmer', '', 'PT. SimpanRupiah', '2021-07-17', '2021-07-17'),
(19, 'Programmer', '', 'PT. Pinjam Modal', '2021-07-17', '2021-07-17'),
(20, 'Marketing Specialist', '', 'PT. Lima Dasar Negara', '2021-07-17', '2021-07-17'),
(21, 'Operator', '', 'PT. Cakradasa', '2021-07-17', '2021-07-17'),
(22, 'Editor Video', '', 'PT. Netmediatama', '2021-07-17', '2021-07-17'),
(23, 'Software Engineer', '', 'Bukalapak', '2021-07-20', '2021-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(25) DEFAULT NULL,
  `tgl_lahir` varchar(20) DEFAULT NULL,
  `domisili` varchar(20) DEFAULT NULL,
  `jenjang_pendidikan` varchar(30) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `alamat_lengkap` text DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id`, `username`, `password`, `nama_lengkap`, `tgl_lahir`, `domisili`, `jenjang_pendidikan`, `jenis_kelamin`, `alamat_lengkap`, `no_hp`, `tanggal`) VALUES
(16, 'Test', '$2y$10$p/W9ESmSD5Fmv6oH8LSHluIx9WuMmsL9BWsRCJBN577GDynLHXuMK', 'test', '2021-07-12', 'Indog', 'sarjana', 'Laki-laki', 'Mars', '123123123123', '2021-07-12'),
(17, 'Budi', '$2y$10$D9gmL/Kfcm5KRZV4JR3KEeAyIYCw7jtJPWgXpZXz8pCVwejy8LMfy', 'Budi Handono', '2021-07-12', 'Indog', 'sarjana', 'Laki-laki', 'Mars', '123123123123', '2021-07-12'),
(18, 'Budi', '$2y$10$Db1SidxDYprFewD/iMGKjeMyhbHq8G3FFBHo9rUddHidOaUM/zeEG', 'Budianto', '2021-01-01', 'Perancis', 'sarjana', 'Laki-laki', 'Jakarta', '081311040', '2021-07-12'),
(19, 'Hasan', '$2y$10$m/sdEV6ZHapNuwlE5roVW.rSzjiK56VJTwIYiutzww2PR7rfKUp9m', 'Hasanudin', '2000-01-01', 'Indonesia', 'smak', 'Laki-laki', 'Jakarta Pusat', '083840283250', '2021-07-12'),
(20, 'husein', '$2y$10$BxhAGFGGDpXgLyILZvQ9keJ1FFQDwVn58f5uiWg3k/7X6EGMxx.kK', 'Ahmad Maulana', '2001-01-01', 'Indonesia', 'smak', 'Laki-laki', 'Bogor', '08587002247', '2021-07-12'),
(21, 'test', '$2y$10$1LHND91Dk2ipshjIXCbah.rsTNPNfs0Ndr1HRnhNUFs/6DoXx/Iua', 'test', '2021-07-16', 'qwe', 'sd', 'Laki-laki', 'adasd', '08587002247', '2021-07-16'),
(22, 'test1234', '$2y$10$ia/A4eUFlTmmmn2iQTC3GuhEvZ1p0inaLfg13YLqgv6qGWf6qpDPG', 'test', '2021-07-16', 'qwe', 'smp', 'Laki-laki', 'qweassad', '08587002247', '2021-07-16'),
(23, 'qwerty', '$2y$10$YYH0Cwoa97fHsglDwNRF5eKliujFHuOz6f.DcSvEnU9zY3ntnd8Om', 'qwerty', '2021-07-16', 'Indonesia', 'sd', 'Laki-laki', 'ASKJDHASJKHDKJASH', '0182301283', '2021-07-16'),
(24, 'bangjago', '$2y$10$jUIOD.5CYiUe6owhSIOFzeqT/CWeJa3MVhfvrBhgyxU/1P9Aw3UV.', 'Bang Jago', '2021-07-16', 'Bogor', 'doktorat', 'Laki-laki', 'asd', '123123123123', '2021-07-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curiculum_vitae`
--
ALTER TABLE `curiculum_vitae`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_loker`
--
ALTER TABLE `info_loker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `curiculum_vitae`
--
ALTER TABLE `curiculum_vitae`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `info_loker`
--
ALTER TABLE `info_loker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
