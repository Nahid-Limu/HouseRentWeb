-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 28, 2018 at 05:45 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id619027_houserent_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `phn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `pass`, `phn`) VALUES
(1, 'Mahdi', '12345', '015188888555'),
(6, 'anik', '12345', '01682506324'),
(7, 'sani', '12345678', '01935079004'),
(8, 'arif', 'arif', '01676295488'),
(9, 'nahid', '12345', '01719205019'),
(15, 'saikat', '12345', '01717525988'),
(16, 'limu', '123345', '0171998877'),
(17, 'naim', '123', '0171212121'),
(18, 'aaaa', '12121212', '0171998877'),
(19, 'azizul', '12345', '01739948248'),
(20, 'lubna', '123s', '017151344539'),
(21, 'bale', '12345', '01745522293'),
(22, 'jakia', '123', '01934146170'),
(23, 'toma', '12345', '01636150770');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `rent` int(100) NOT NULL,
  `details` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`id`, `uid`, `type`, `rent`, `details`, `phone`, `address`, `date`) VALUES
(1, 6, 'Family', 10000, 'No Of Bed: 2\r\nNo Of DrawingRoom: 1\r\nNo Of Dining: 1\r\nNo Of Kitchen: 2\r\nNo Of BathRoom: 2', '01719205019', 'panchagarh', '2017-09-26'),
(5, 6, 'Family', 2000, 'asdlkaj.,zclakjcpaC.Cpascml.ncpzkc', '01719205019', 'panchagrh, islambag', '2017-09-20'),
(6, 6, 'Family', 5000, 'nahid hasan <br> limu', '0171212121', 'uttara', '2017-09-30'),
(7, 6, 'Family', 5000, '3 Bed Room<br>1 Drawing Room<br>2 Kitchen<br>2 BathRoom<br>1 Dining<br>1 Belcony', '01719205019', 'panchagrh, islambag', '2017-10-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`),
  ADD KEY `uid_2` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
