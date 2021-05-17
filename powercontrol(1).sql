-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 12:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `powercontrol`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `customer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `customer`) VALUES
(8, 'hasanzain045@gmail.com', '$2y$10$pcqkidTr11ofMfmaVlE/CeoDw3..O7EojiCO3NNID5Ec3vhZ.apJ2', 'kalijogo'),
(9, 'admin@powermeter.com', '$2y$10$pcqkidTr11ofMfmaVlE/CeoDw3..O7EojiCO3NNID5Ec3vhZ.apJ2', 'kalijogo');

-- --------------------------------------------------------

--
-- Table structure for table `data_sensor`
--

CREATE TABLE `data_sensor` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `suhu` float NOT NULL,
  `arus` int(4) NOT NULL,
  `tegangan` int(4) NOT NULL,
  `daya` int(4) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_sensor`
--

INSERT INTO `data_sensor` (`id`, `lokasi`, `suhu`, `arus`, `tegangan`, `daya`, `tanggal`, `jam`) VALUES
(1, 'benoa', 32, 12, 200, 33, '2021-04-22', '06:38:37'),
(2, 'benoa', 100, 34, 23, 32, '2021-04-22', '07:21:16');

-- --------------------------------------------------------

--
-- Table structure for table `icmp`
--

CREATE TABLE `icmp` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(10) NOT NULL,
  `icmp_1` varchar(10) NOT NULL,
  `icmp_2` varchar(10) NOT NULL,
  `icmp_3` varchar(10) NOT NULL,
  `icmp_4` varchar(10) NOT NULL,
  `icmp_5` varchar(10) NOT NULL,
  `icmp_6` varchar(10) NOT NULL,
  `icmp_7` varchar(10) NOT NULL,
  `icmp_8` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `icmp`
--

INSERT INTO `icmp` (`id`, `lokasi`, `icmp_1`, `icmp_2`, `icmp_3`, `icmp_4`, `icmp_5`, `icmp_6`, `icmp_7`, `icmp_8`) VALUES
(1, 'benoa', '1', '1', '1', '1', '0', '0', '0', '0'),
(2, 'benoa', 'Nyala', 'Mati', 'Mati', 'Mati', 'Mati', 'Mati', 'Mati', 'Mati');

-- --------------------------------------------------------

--
-- Table structure for table `relay`
--

CREATE TABLE `relay` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(10) NOT NULL,
  `relay_1` int(1) NOT NULL,
  `relay_2` int(1) NOT NULL,
  `relay_3` int(1) NOT NULL,
  `relay_4` int(1) NOT NULL,
  `relay_5` int(1) NOT NULL,
  `relay_6` int(1) NOT NULL,
  `relay_7` int(1) NOT NULL,
  `relay_8` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `relay`
--

INSERT INTO `relay` (`id`, `lokasi`, `relay_1`, `relay_2`, `relay_3`, `relay_4`, `relay_5`, `relay_6`, `relay_7`, `relay_8`) VALUES
(1, 'benoa', 1, 1, 1, 1, 0, 0, 0, 0),
(2, 'benoa', 1, 1, 1, 1, 0, 1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_sensor`
--
ALTER TABLE `data_sensor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icmp`
--
ALTER TABLE `icmp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relay`
--
ALTER TABLE `relay`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data_sensor`
--
ALTER TABLE `data_sensor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `icmp`
--
ALTER TABLE `icmp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `relay`
--
ALTER TABLE `relay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
