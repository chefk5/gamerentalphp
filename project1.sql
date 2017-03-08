-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2016 at 07:51 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminusername` varchar(15) NOT NULL,
  `adminPassword` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminusername`, `adminPassword`, `email`, `phone`) VALUES
('admin', 'admin', 'admin@admin.com', 123123);

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `gameName` varchar(35) NOT NULL,
  `Genre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`gameName`, `Genre`) VALUES
('Battlefield 1', 'Shooting'),
('Call of Duty:Infinite Warfare', 'shooting'),
('CS:Go', 'Shooting');

-- --------------------------------------------------------

--
-- Table structure for table `rented`
--

CREATE TABLE `rented` (
  `rentNbr` int(11) NOT NULL,
  `gameName` varchar(25) NOT NULL,
  `userName` varchar(10) NOT NULL,
  `Rdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rented`
--

INSERT INTO `rented` (`rentNbr`, `gameName`, `userName`, `Rdate`) VALUES
(1, 'Fifa 2017', 'k123', '2016-11-07'),
(2, 'Halo 5', 'k123', '2012-01-01'),
(3, 'Battlefield 1', 'k123', '2012-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `phone`) VALUES
('k123', '123456', 'k123@abc.com', 132456798),
('k124', '1234567', 'kncha@ss.com', 1515151);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminusername`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`gameName`),
  ADD KEY `gameName` (`gameName`);

--
-- Indexes for table `rented`
--
ALTER TABLE `rented`
  ADD PRIMARY KEY (`rentNbr`),
  ADD KEY `gameName` (`gameName`),
  ADD KEY `userName` (`userName`),
  ADD KEY `userName_2` (`userName`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`),
  ADD KEY `username_2` (`username`),
  ADD KEY `username_3` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rented`
--
ALTER TABLE `rented`
  MODIFY `rentNbr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `rented`
--
ALTER TABLE `rented`
  ADD CONSTRAINT `rented_ibfk_1` FOREIGN KEY (`userName`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
