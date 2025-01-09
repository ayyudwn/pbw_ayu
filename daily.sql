-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 31, 2024 at 01:20 PM
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
-- Database: `daily`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int NOT NULL,
  `judul` text,
  `isi` text,
  `gambar` text,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'Bali Jadi Destinasi Wisata Paling Romantis di Dunia untuk Kali Pertama', 'Popularitas Bali sudah tidak diragukan lagi sehingga banyak dikunjungi wisatawan dari berbagai negara, termasuk dari Australia yang paling banyak berkunjung ke pulau dewata. Bukan itu saja, pulau eksotis ini baru saja mengukir sejarah dinobatkan menjadi Destinasi Wisata Paling Romantis di Dunia pada ajang World Travel Awards 2024.', '20241231194126.png', '2024-12-31 19:41:26', 'admin'),
(2, '7 Negara Destinasi Wisata untuk Malam Tahun Baru, Rayakan 2025 dengan Semarak', ' - Malam Tahun Baru adalah waktu yang tepat untuk merenungkan tahun yang telah berlalu sambil merayakan awal yang baru. Baik Anda memimpikan kembang api berlatar belakang gedung pencakar langit yang memesona, pesta hitung mundur di pantai berpasir, atau tradisi budaya dengan suasana yang unik, dunia menawarkan beragam destinasi yang tak terlupakan. ', '20241231193855.png', '2024-12-31 19:38:55', 'admin'),
(3, 'Destinasi Wisata Indonesia Jadi Tempat Liburan Pesohor Dunia', 'Sudah bukan rahasia lagi, jika Pesona Indonesia selalu menjadi incaran banyak wisatawan mancanegara. Bukan hanya wisatawan biasa, melainkan para seleb dan pesohor dunia pun kepincut dengan pesona yang dimiliki Indonesia.\r\n                United tetap berusaha untuk kembali ke puncak. Dengan kombinasi\r\n                pemain muda berbakat, bintang internasional, dan strategi yang\r\n                tepat, klub ini memiliki potensi untuk terus bersinar di\r\n                panggung sepak bola global.', '20241231151722.png', '2024-12-31 15:17:22', 'admin'),
(4, 'Tips Traveling yang Aman dan Menyenangkan: Panduan Lengkap untuk Liburan Impian', 'Traveling atau berwisata merupakan kegiatan berpergian ke suatu tempat dengan tujuan rekreasi, edukasi, atau eksplorasi. Aktivitas ini telah menjadi bagian penting dari gaya hidup modern sebagai sarana melepas penat dan memperluas wawasan. Bagi banyak orang, traveling memberikan berbagai manfaat positif, baik secara fisik maupun mental.\r\n                2013, Manchester United mengalami masa transisi yang penuh\r\n                tantangan. Pergantian beberapa manajer, termasuk David Moyes,\r\n                Louis van Gaal, dan Jose Mourinho, menunjukkan betapa sulitnya\r\n                mempertahankan konsistensi. Meskipun begitu, klub tetap berhasil\r\n                meraih sejumlah trofi, seperti Liga Europa dan Piala FA.', '20241231193407.png', '2024-12-31 19:34:07', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
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
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
