-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2020 at 05:57 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `success_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `file_download` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `nama`, `nim`, `file_download`) VALUES
(1, 'asda', '13', '1421598900_anjing.jpg'),
(2, 'asdsad', '213124', '739126282_anjing.jpg'),
(3, 'dsf', '2432', '1804309461_anjing.jpg'),
(4, 'assss', '123333', '1601570920_anjing.jpg'),
(5, 'dod', '111', '2086599547_anjing.jpg'),
(6, 'asdad', '121212121', '1027155215_anjing.jpg'),
(7, 'agus', '16', '224172641_anjing.jpg'),
(8, 'dfsf', '1', '80106913_PEMBUATAN FILE PDF_FNH_tamim.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
