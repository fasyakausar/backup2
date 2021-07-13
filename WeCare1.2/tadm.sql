-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 11:42 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `tadm`
--

CREATE TABLE `tadm` (
  `id_adm` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `kata_sandi` varchar(200) NOT NULL,
  `posisi` enum('Administrator','PIC Regional','PIC Witel','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tadm`
--

INSERT INTO `tadm` (`id_adm`, `user`, `nama_lengkap`, `kata_sandi`, `posisi`) VALUES
(1, 'admin1', 'Administrasi', 'admin1', 'Administrator'),
(2, 'picregional1', 'PIC Regional', 'picregional1', 'PIC Regional'),
(3, 'picwitel1', 'PIC Witel', 'picwitel1', 'PIC Witel'),
(7, 'admin2', 'Administrasi 2', 'admin2', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tadm`
--
ALTER TABLE `tadm`
  ADD PRIMARY KEY (`id_adm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tadm`
--
ALTER TABLE `tadm`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
