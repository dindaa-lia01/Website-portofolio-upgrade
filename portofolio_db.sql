-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 26, 2026 at 05:12 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `title`, `description`, `image`, `category`) VALUES
(1, 'Bootcamp Microsoft Excel', 'Sertifikat Intensive Bootcamp 2 Weeks Microsoft Excel oleh KarirNex.', 'bootcamp.png', 'Campus'),
(2, 'Bootcamp Dicoding', 'Sertifikat kompetensi Belajar Penerapan Data Science dengan Microsoft Fabric.', 'dicoding.png', 'Campus'),
(3, 'Keanggotaan INFORSA', 'Sertifikat keanggotaan Himpunan Mahasiswa Sistem Informasi.', 'inforsa.png', 'Campus'),
(4, 'Sertifikat Kepanitiaan', 'Sertifikat kepanitiaan kegiatan organisasi.', 'kepanitiaan.jpg', 'Campus'),
(5, 'Pelatihan Barista', 'Program pengembangan keterampilan peracikan kopi.', 'pelatihan_barista.png', 'Campus'),
(6, 'Study Club UI/UX', 'Sertifikat kepesertaan Study Club UI/UX Sistem Informasi.', 'studyclub.png', 'Campus'),
(7, 'Juara 1 Cricket', 'Peraih Medali Emas Porprov I Kalimantan Utara 2022 cabang olahraga Cricket.', 'juara1_cricket.jpg', 'School'),
(8, 'Juara 3 Educative Culture', 'Lomba Tutur Sejarah Kota Tarakan tingkat kota.', 'juara3_sejarah.jpg', 'School'),
(9, 'Keanggotaan OSIS', 'Sertifikat keanggotaan organisasi OSIS saat SMA.', 'OSIS.png', 'School'),
(10, 'tes lah', 'Sertifikat abal', 'tes aja.png', 'Campus');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `title`, `description`, `image`, `category`) VALUES
(1, 'Akselerasi Karir (AKSA)', 'Mengadakan seminar khusus anggota departemen bureau.', 'aksa.jpeg', 'Campus'),
(2, 'OSIS', 'Aktif dalam kegiatan organisasi di SMA.', 'osis.jpeg', 'School'),
(3, 'Panitia Knowledge Center', 'Aktif dalam kepanitiaan seminar yang diselenggarakan oleh departemen PSD.', 'kc2.jpeg', 'Campus'),
(4, 'Pelatihan Aplikasi Autopsy', 'Kepanitiaan dalam pelatihan aplikasi Autopsy.', 'kc.jpeg', 'Campus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
