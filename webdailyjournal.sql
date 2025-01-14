-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 10, 2025 at 11:08 AM
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
-- Database: `webdailyjournal`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int NOT NULL,
  `judul` text CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `isi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `gambar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci,
  `tanggal` datetime DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'Heboh! Jeno NCT Dikabarkan Akan Segera Wamil', 'Dalam berita terkini, dikabarkan salah satu member NCT Dream akan segera wamil pada tahun 2026, kabar ini sangat membuat para fans gempar ', 'nct2.jpg', '2025-01-10 15:35:48', 'admin'),
(2, 'Potret Jisung NCT Yang Tiba Di Bandara Soekarno Hatta', 'Berikut adalah salah satu potret Jisung NCT yang tertangkap kamera wartawan baru - baru ini, foto ini sangat menggemparkan dunia maya dikarenakan anglenya yang bagus dan membuat wajah Jisung semakin mempesona', 'nct1.jpg', '2025-01-10 15:35:36', 'admin'),
(30, 'Tempat Favorite Jaemin NCT Untuk Bersantai', 'Berikut adalah tempat favorit Jaemin NCT untuk bersantai ketika sedang merasa setress karena pekerjaan, tempat yang tenang sangat cocok untuk bersantai.', 'nct3.jpg', '2025-01-10 15:35:24', 'admin'),
(36, 'Penampilan Terakhir Mark NCT 127 Pada Tahun 2027', 'Banyak yang bertanya - tanya, mengapa pada tahun 2028 Mark NCT tidak akan tampil pada konser - konser boyband tersebut. Mark NCT dikabarkan akan menikah dengan  wanita asal Indonesia pada awal tahun 2028', 'nct4.jpg', '2025-01-10 15:36:20', 'admin'),
(37, 'Pesona Member NCT Dream', 'Pesona dari member NCT Dream tidak perlu diragukan lagi, apa lagi salah satu membernya yang bernama Lee Jeno. Wajahnya yang rupawan membuatnya banyak digemari para wanita', 'nct5.jpg', '2025-01-10 15:36:09', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL,
  `foto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
