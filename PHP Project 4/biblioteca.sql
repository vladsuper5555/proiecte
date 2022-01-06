-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2022 at 07:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Table structure for table `carti`
--

CREATE TABLE `carti` (
  `id_carte` int(11) NOT NULL,
  `nume_autor` varchar(32) DEFAULT NULL,
  `prenume_autor` varchar(32) DEFAULT NULL,
  `titlul_cartii` varchar(64) DEFAULT NULL,
  `anul_aparitiei` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `imprumut`
--

CREATE TABLE `imprumut` (
  `id_carte` int(11) NOT NULL,
  `id_utilizator` int(11) DEFAULT NULL,
  `data_imprumut` date DEFAULT NULL,
  `data_retur` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `utilizatori`
--

CREATE TABLE `utilizatori` (
  `id_utilizator` int(11) NOT NULL,
  `cnp_utilizator` varchar(32) NOT NULL,
  `nume_utilizator` varchar(32) DEFAULT NULL,
  `prenume_utilizator` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carti`
--
ALTER TABLE `carti`
  ADD PRIMARY KEY (`id_carte`);

--
-- Indexes for table `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`id_utilizator`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carti`
--
ALTER TABLE `carti`
  MODIFY `id_carte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `utilizatori`
--
ALTER TABLE `utilizatori`
  MODIFY `id_utilizator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
