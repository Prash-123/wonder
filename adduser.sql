-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
-- table data for web page
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2017 at 08:59 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adduser`
--

-- --------------------------------------------------------

--
-- Table structure for table `adduser`
--

CREATE TABLE `adduser` (
  `First name` varchar(20) DEFAULT NULL,
  `Last name` varchar(15) DEFAULT NULL,
  `Email` text NOT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Education` varchar(10) DEFAULT NULL,
  `Skills` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adduser`
--

INSERT INTO `adduser` (`First name`, `Last name`, `Email`, `Gender`, `Education`, `Skills`) VALUES
('Prashant', 'Shukla', 'shuklaprashant242@gmail.com', 'Male', 'B.E.', '\r\nOracle,java');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adduser`
--
ALTER TABLE `adduser`
  ADD PRIMARY KEY (`Email`(35));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
