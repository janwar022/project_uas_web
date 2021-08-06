-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2021 at 01:56 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(10) NOT NULL,
  `nis` varchar(50) DEFAULT NULL,
  `nama` text NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `ttl` text NOT NULL,
  `gender` text NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama`, `kelas`, `ttl`, `gender`, `alamat`, `foto`) VALUES
(14, '6765', 'janwar farhan', 'IX', 'ambon 09-09-1998', 'Laki-Laki', 'waihaong', '6108ca88b0859.jpeg'),
(15, '989878', 'sulistyo fardin', 'VIII', 'ambon 09-09-1998', 'Perempuan', 'wayame', '6108fa3fc6012.png'),
(16, '9798747', 'rimuru tempest', 'VII', 'ambon 11-09-1997', 'Laki-Laki', 'tempest', '610cde56e5f86.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `level` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `foto`) VALUES
(8, 'allan', '$2y$10$eKOaZwueYirwWfuED0soQ.2vnSrizfaWXOh7wmohfw5haXHDuaKwK', 'walikls7', '61069e405677c.jpeg'),
(9, 'afgan', '$2y$10$W4oGMe9yysO14XzcebY2xOhJ64fo.6jrvf3vk9k3.epWrJyzt5qbK', 'walikls9', '6107c95a5c4b4.jpeg'),
(11, 'nujmin', '$2y$10$xlZ2sXyjyt6t1coJB5d0GOyJNfHQNEyKkR9EX1xccojDkeR66nx8O', 'walikls9', '6108ccb236530.jpeg'),
(12, 'janwar', '$2y$10$mRxhdRlAn50Ijs8H6Rvu9uU2Tt29f6U4fnd5D6qbVdVvoHSTqJ4Wy', 'admin', '6108d0d655416.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
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
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
