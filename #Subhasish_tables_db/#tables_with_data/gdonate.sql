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
-- Table structure for table `gdonate`
--

CREATE TABLE `gdonate` (
  `gdid` int(5) NOT NULL,
  `gdtype` varchar(100) NOT NULL,
  `gphno` bigint(10) NOT NULL,
  `gidt` varchar(50) NOT NULL,
  `gidno` varchar(12) NOT NULL,
  `gadd` varchar(255) NOT NULL,
  `oid` int(5) NOT NULL,
  `gdstatus` varchar(20) NOT NULL,
  `gdcstatus` varchar(20) NOT NULL,
  `gdtime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gdctime` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gdonate`
--

INSERT INTO `gdonate` (`gdid`, `gdtype`, `gphno`, `gidt`, `gidno`, `gadd`, `oid`, `gdstatus`, `gdcstatus`, `gdtime`, `gdctime`) VALUES
(1, 'Food,Medicine', 9776243123, 'Aadhar Card', '789012540989', 'Mallikpur', 1, 'Pending', 'Waiting', '2019-01-22 08:11:02', '0000-00-00 00:00:00'),
(2, 'Medicine', 9878652431, 'PAN Card', 'CNBUI7569I', 'Uluberia', 2, 'Processed', 'Donated', '2019-01-23 13:19:16', '2019-01-24 08:15:34'),
(3, 'Medicine,Clothes', 8711237654, 'Aadhar Card', '908767543209', 'Bagnan', 2, 'Processed', 'Waiting', '2019-01-25 16:49:21', '0000-00-00 00:00:00'),
(4, 'Medicine,Clothes', 8761230956, 'PAN Card', 'REDCV7987J', 'Sonarpur', 1, 'Processed', 'Donated', '2019-01-25 11:02:54', '2019-01-27 09:03:16'),
(5, 'Clothes', 9612763452, 'Voter Card', 'JHU9801209', 'Tikiapara', 3, 'Pending', 'Waiting', '2019-01-25 11:02:54', '0000-00-00 00:00:00'),
(6, 'Food,Clothes', 9087124389, 'Aadhar Card', '870945670989', 'Hooghly', 3, 'Processed', 'Donated', '2019-01-26 22:22:34', '2019-01-27 19:20:44'),
(7, 'Food,Medicine,Clothes', 7867295530, 'Voter Card', 'ITI0957842', 'Dhakuria', 1, 'Processed', 'Waiting', '2019-01-29 10:40:59', '0000-00-00 00:00:00'),
(8, 'Food,Medicine', 9087651232, 'Voter Card', 'UIO0784508', 'Dakshineswar', 4, 'Pending', 'Waiting', '2019-01-30 23:12:59', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gdonate`
--
ALTER TABLE `gdonate`
  ADD PRIMARY KEY (`gdid`),
  ADD KEY `F_K` (`oid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gdonate`
--
ALTER TABLE `gdonate`
  MODIFY `gdid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
