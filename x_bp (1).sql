-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 05:07 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `x_bp`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_daftar`
--

CREATE TABLE IF NOT EXISTS `t_daftar` (
`id_user` int(11) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `status` enum('terima','tolak','','') NOT NULL,
  `level` enum('admin','member','','') NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `terakhir_masuk` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_daftar`
--

INSERT INTO `t_daftar` (`id_user`, `nama_depan`, `nama_belakang`, `email`, `password`, `status`, `level`, `tgl_daftar`, `terakhir_masuk`) VALUES
(20, 'siti', 'dino', 'nsiti7621@gmail.com', 'sha256:1000:2RTgMQDS9j9+eLTBo3Py+EI//BEP1MKW:U74ci9wSnA1PSwW7LZ7krvrm5KFkoq33', 'terima', 'member', '2020-04-16 15:04:46', '2020-04-16 05:04:46 PM');

-- --------------------------------------------------------

--
-- Table structure for table `t_tokens`
--

CREATE TABLE IF NOT EXISTS `t_tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_tokens`
--

INSERT INTO `t_tokens` (`id`, `token`, `id_user`, `created`) VALUES
(0, 'ada9fdf0270e56910e8749cd20c171', 20, '2020-04-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_daftar`
--
ALTER TABLE `t_daftar`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_daftar`
--
ALTER TABLE `t_daftar`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
