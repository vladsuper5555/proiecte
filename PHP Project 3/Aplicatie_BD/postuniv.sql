-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 12:18 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `postuniv`
--

-- --------------------------------------------------------

--
-- Table structure for table `clasa`
--

CREATE TABLE `clasa` (
  `id_clasa` int(11) NOT NULL,
  `denumire` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clasa`
--

INSERT INTO `clasa` (`id_clasa`, `denumire`) VALUES
(1, 'I A'),
(2, 'II Q'),
(3, 'III A');

-- --------------------------------------------------------

--
-- Table structure for table `disciplina`
--

CREATE TABLE `disciplina` (
  `id_materie` int(11) NOT NULL,
  `denumire_disc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disciplina`
--

INSERT INTO `disciplina` (`id_materie`, `denumire_disc`) VALUES
(1, '0'),
(2, 'Matematica'),
(3, 'Franceza'),
(4, 'Romana'),
(5, 'Engleza');

-- --------------------------------------------------------

--
-- Table structure for table `elev`
--

CREATE TABLE `elev` (
  `id` int(11) NOT NULL,
  `nume_elev` varchar(30) NOT NULL,
  `prenume_elev` varchar(30) NOT NULL,
  `id_clasa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elev`
--

INSERT INTO `elev` (`id`, `nume_elev`, `prenume_elev`, `id_clasa`) VALUES
(1, 'Popescu', 'Ionel', 2);

-- --------------------------------------------------------

--
-- Table structure for table `situatie`
--

CREATE TABLE `situatie` (
  `id` int(11) NOT NULL,
  `id_materie` int(11) NOT NULL,
  `data` date NOT NULL,
  `nota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clasa`
--
ALTER TABLE `clasa`
  ADD PRIMARY KEY (`id_clasa`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id_materie`);

--
-- Indexes for table `elev`
--
ALTER TABLE `elev`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `situatie`
--
ALTER TABLE `situatie`
  ADD PRIMARY KEY (`id`,`id_materie`,`data`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clasa`
--
ALTER TABLE `clasa`
  MODIFY `id_clasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id_materie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `elev`
--
ALTER TABLE `elev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
