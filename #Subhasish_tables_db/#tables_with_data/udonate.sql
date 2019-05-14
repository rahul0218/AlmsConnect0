-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 12:14 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `udonate`
--

CREATE TABLE `udonate` (
  `did` int(5) NOT NULL,
  `dtype` varchar(100) NOT NULL,
  `uid` int(5) NOT NULL,
  `oid` int(5) NOT NULL,
  `dstatus` varchar(20) NOT NULL,
  `dcstatus` varchar(20) NOT NULL,
  `udtime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `udctime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `udonate`
--

INSERT INTO `udonate` (`did`, `dtype`, `uid`, `oid`, `dstatus`, `dcstatus`, `udtime`, `udctime`) VALUES
(1, 'Food', 1, 3, 'Pending', 'Waiting', '2019-01-23 13:08:15', '0000-00-00 00:00:00'),
(2, 'Medicine', 1, 2, 'Pending', 'Waiting', '2019-01-25 19:25:10', '0000-00-00 00:00:00'),
(3, 'Food,Medicine,Clothes', 2, 1, 'Processed', 'Donated', '2019-01-26 10:32:34', '2019-01-27 11:56:14'),
(4, 'Food,Medicine', 4, 1, 'Pending', 'Waiting', '2019-02-28 20:48:25', '0000-00-00 00:00:00'),
(5, 'Medicine,Clothes', 3, 2, 'Processed', 'Waiting', '2019-01-30 06:56:55', '0000-00-00 00:00:00'),
(6, 'Clothes', 5, 3, 'Processed', 'Donated', '2019-01-31 09:48:45', '2019-01-31 20:12:10'),
(7, 'Food,Clothes', 4, 3, 'Processed', 'Waiting', '2019-01-31 11:52:25', '0000-00-00 00:00:00'),
(8, 'Food,Medicine', 3, 4, 'Pending', 'Waiting', '2019-01-31 14:41:56', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `udonate`
--
ALTER TABLE `udonate`
  ADD PRIMARY KEY (`did`),
  ADD KEY `udonate_ibfk_1` (`uid`),
  ADD KEY `udonate_ibfk_2` (`oid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `udonate`
--
ALTER TABLE `udonate`
  MODIFY `did` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
