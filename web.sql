-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2017 at 05:50 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL,
  `id_chatroom` int(11) NOT NULL,
  `chat` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chatroom`
--

CREATE TABLE `chatroom` (
  `id_chatroom` int(11) NOT NULL,
  `id_iklan` int(11) NOT NULL,
  `id_sender` int(11) NOT NULL,
  `id_receiver` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `iklan`
--

CREATE TABLE `iklan` (
  `id` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `is_laku` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `iklan`
--

INSERT INTO `iklan` (`id`, `id_member`, `id_kategori`, `judul`, `foto`, `deskripsi`, `harga`, `is_verified`, `is_laku`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'Baju Yogs', '89699-hqdefault-1-.jpg', 'Baju yogs mirip daster murah', 50000, 1, 0, '2017-05-20 00:33:52', '2017-05-20 00:34:39'),
(3, 6, 2, 'Cosplay Sandiaga Uno KW2', 'uno-kw2.jpg', 'Jual jasa cosplay sandiaga uno kw2 murah (orang bisa dibawa pulang). (harga per hari).', 75000, 1, 0, '2017-05-24 09:41:09', '2017-05-24 09:41:09');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_iklan`
--

CREATE TABLE `kategori_iklan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori_iklan`
--

INSERT INTO `kategori_iklan` (`id`, `nama`, `url`) VALUES
(1, 'Baju', 'baju'),
(2, 'Cosplay', 'cosplay');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_iklan` int(11) NOT NULL,
  `komentar` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `foto` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('member','admin') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `nama`, `username`, `dob`, `foto`, `hp`, `email`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Rama Zeta', 'a', '2017-05-17', '57a97-hqdefault.jpg', '0821363333348', 'ramazeta1997@gmail.com', '8b6bc5d8046c8466359d3ac43ce362ab', 'admin', '2017-05-19 22:44:19', '0000-00-00 00:00:00'),
(4, 'Rama Zeta', 'b', '1997-05-21', 'b5e6769bce50652f5c73a8e2a7a33503.jpg', '082136333348', 'ramazeta1997@gmail.com', '8b6bc5d8046c8466359d3ac43ce362ab', 'member', '2017-05-20 05:35:35', '0000-00-00 00:00:00'),
(6, 'Narendra Putra', 'narendnp', '2017-05-21', 'a424b-15626370_1572258682800857_4624033216582432178_o.jpg', '085739431303', 'kadektop2@gmail.com', '8b6bc5d8046c8466359d3ac43ce362ab', 'admin', '2017-05-21 12:55:18', '0000-00-00 00:00:00'),
(7, 'Si Ganteng', 'si_ganteng', '2017-05-24', 'b8d29aba56bc644b5b30f5b49502a549.jpg', '2313214134', 'ganteng123@gmail.com', '011a93ef2f6e15af37802b13530ff880', 'member', '2017-05-24 04:52:04', '0000-00-00 00:00:00'),
(8, 'qqq', 'qqq', '2017-05-24', 'bf207097739deaf878ed36cfa93b1510.png', '111', 'a@a.com', 'b2ca678b4c936f905fb82f2733f5297f', 'member', '2017-05-24 05:05:16', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`),
  ADD KEY `id_chatroom` (`id_chatroom`);

--
-- Indexes for table `chatroom`
--
ALTER TABLE `chatroom`
  ADD PRIMARY KEY (`id_chatroom`),
  ADD KEY `id_iklan` (`id_iklan`),
  ADD KEY `id_sender` (`id_sender`),
  ADD KEY `id_receiver` (`id_receiver`);

--
-- Indexes for table `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori_iklan`
--
ALTER TABLE `kategori_iklan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_iklan` (`id_iklan`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chatroom`
--
ALTER TABLE `chatroom`
  MODIFY `id_chatroom` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kategori_iklan`
--
ALTER TABLE `kategori_iklan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`id_chatroom`) REFERENCES `chatroom` (`id_chatroom`);

--
-- Constraints for table `chatroom`
--
ALTER TABLE `chatroom`
  ADD CONSTRAINT `chatroom_ibfk_1` FOREIGN KEY (`id_iklan`) REFERENCES `iklan` (`id`),
  ADD CONSTRAINT `chatroom_ibfk_2` FOREIGN KEY (`id_sender`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `chatroom_ibfk_3` FOREIGN KEY (`id_receiver`) REFERENCES `members` (`id`);

--
-- Constraints for table `iklan`
--
ALTER TABLE `iklan`
  ADD CONSTRAINT `iklan_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `iklan_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_iklan` (`id`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_iklan`) REFERENCES `iklan` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
