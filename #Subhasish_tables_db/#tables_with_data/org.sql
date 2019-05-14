-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 10:01 AM
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
-- Table structure for table `org`
--

CREATE TABLE `org` (
  `oid` int(5) NOT NULL,
  `oname` varchar(40) DEFAULT NULL,
  `ono` varchar(25) DEFAULT NULL,
  `odate` date DEFAULT NULL,
  `omail` varchar(50) DEFAULT NULL,
  `ophno` bigint(10) DEFAULT NULL,
  `opwd` varchar(50) DEFAULT NULL,
  `oadd` varchar(255) DEFAULT NULL,
  `ositem` varchar(200) NOT NULL,
  `oreqitem` varchar(200) NOT NULL,
  `orj` varchar(255) DEFAULT NULL,
  `oaccess` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `org`
--

INSERT INTO `org` (`oid`, `oname`, `ono`, `odate`, `omail`, `ophno`, `opwd`, `oadd`, `ositem`, `oreqitem`, `orj`, `oaccess`) VALUES
(1, 'Ramkrishna Charity', 'REG1234C', '2014-07-15', 'rkcharity@gmail.com', 8734664767, '3e67383c061cad8193456e20d5cd2aa9', 'Baruipur', 'Food,Medicine,Clothes', 'Food,Medicine', 'To help poor people', 'Active'),
(2, 'Netaji Trustee', 'REG8976V', '2009-10-29', 'Ntrust@gmail.com', 9848889030, '94f99570b700e6ed07358e233a59499e', 'Santragachi', 'Medicine,Clothes', 'Food', 'To serve society in a better way', 'Active'),
(3, 'Jagnnath Private Limited', 'REG7654P', '2017-08-26', 'jaga56@hotmail.com', 7690772083, '6bd3fb3d05b2496676e96ea94433d8a6', 'Howrah', 'Food,Clothes', 'Medicine', 'To donate', 'Blocked'),
(4, 'Sharma Health Organization', 'REG9852W', '2018-09-26', 'sharma54@ymail.com', 9241309867, '8d6a9af64cac557f07897baf1f2f83ec', 'Dankuni', 'Food,Medicine', '', 'To do social work', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `org`
--
ALTER TABLE `org`
  ADD PRIMARY KEY (`oid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `org`
--
ALTER TABLE `org`
  MODIFY `oid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
